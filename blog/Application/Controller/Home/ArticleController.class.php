<?php
namespace Controller\Home;

/**
 *前台文章控制器
 * @package Controller\Home
 */
class ArticleController extends \Controller\Home\BaseController
{
    /**
     * 文章列表页
     */
    public function listAction()
    {
        //显示分类数据
        //创建分类模型对象
        $categoryModel=new \Model\CategoryModel();
        //调用模型中的方法显示数据
        $categoryList=$categoryModel->getAll(array('display'=> 1));
        //将数据传递给模型
        $this->smarty->assign('categoryList',$categoryList);


        //显示文章数据
        //获取地址栏cid
        $cid=isset($_GET['cid']) ? (int)$_GET['cid'] : 0;
        //判断cid是否存在
        if(!$cid){
            $this->error('cid不存在','index.php?p=home&c=index&a=index',2);
        }
        //将数据进行分类树的形式处理
        \Libs\Tools::getTree($categoryList,$cid);
        //创建空数组存放当前分类id和该分类的所有子类
        $ids[]=$cid;
        if(!empty($GLOBALS['tree'])){
            foreach($GLOBALS['tree'] as $v){
                $ids[]=$v['id'];
            }
        }
        //将数组转换为字符串
        $idsStr=implode(',',$ids);

        //设置分页
        $pageno=isset($_GET['pageno']) ? $_GET['pageno'] : 1;
        //创建文章模型对象
        $artMoel=new \Model\ArticleModel();
        $datatotal=$artMoel->getCount(array('cid'=>$idsStr));
        //创建分页对象
        $page=new \Libs\Page($pageno,2,$datatotal);
        //获取文章数据
        $limit=array('startno'=>$page->startno,'pagesize'=>$page->pagesize);
        $where=array('cid'=>$idsStr,'display'=>1);
        $articleList=$artMoel->getAll($limit,$where);
        $this->smarty->assign('articleList',$articleList);
        //获取分页页码
        $articlePage=$page->show(array('cid'=>$cid));
        $this->smarty->assign('articlePage',$articlePage);
        $this->smarty->display('list.html');
    }
    /**
     * 文章详细页
     */
    public function detailAction()
    {
        //显示文章数据
        //获取文章id
        $id=isset($_GET['id']) ? (int)$_GET['id'] : 0;
        if(!$id){
            $this->error('你访问的页面不存在','index.php?p=home&c=index&a=index',2);
        }
        //创建文章模型对象
        $articleModel=new \Model\ArticleModel();
        //调用分类模型中的getOne方法获取数据
        $articleModel->updateRead($id);
        $artInfo=$articleModel->getOne($id);
        //var_dump($artInfo);die;
        //将数据传递给视图
        $this->smarty->assign('artInfo',$artInfo);


        //显示分类数据
        //创建分类模型对象
        $categoryModel=new \Model\CategoryModel();
        //调用模型中的方法显示数据
        $categoryList=$categoryModel->getAll(array('display'=>1));
        //将数据进行分类树的形式处理
        //\Libs\Tools::getTree($categoryList);
        //将数据传递给模型
        $this->smarty->assign('categoryList',$categoryList);

        //评论数据
        $commentModel=new \Model\CommentModel();
        $commentList=$commentModel->getAll();
        //var_dump($commentList);die;
        //将数据以分类树的形式显示
        \Libs\Tools::getTree($commentList);
        //传递给视图
        $this->smarty->assign('commentList',$GLOBALS['tree']);
        //var_dump($GLOBALS['tree']);die;

        $this->smarty->display('detail.html');
    }

}