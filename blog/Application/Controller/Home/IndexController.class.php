<?php
namespace Controller\Home;

/**
 * 前台首页控制器
 * @package Controller\Home
 */
class IndexController extends \Controller\Home\BaseController
{
    /**
     * 前台首页显示方法
     */
    public function indexAction()
    {
        //显示文章数据
        $pageno=isset($_GET['pageno']) ? (int)$_GET['pageno'] : 1;
        //创建文章模型对象,获取总记录数
        $articleModel=new \Model\ArticleModel();
        $datatotal=$articleModel->getCount();
        //创建分页对象
        $pageObj=new \Libs\Page($pageno,3,$datatotal);
        //显示数据
        $articlelist=$articleModel->getAll(array("startno"=>$pageObj->startno,"pagesize"=>$pageObj->pagesize));

        //传递给视图
        $this->smarty->assign('articlelistData',$articlelist);
        //获取分页码
        $this->smarty->assign('articlePage',$pageObj->show());



        //显示分类数据
        //创建分类模型对象
        $categoryModel=new \Model\CategoryModel();
        //调用模型中的方法显示数据
        $categoryList=$categoryModel->getAll(array('display'=> 1));
        //将数据进行分类树的形式处理
        \Libs\Tools::getTree($categoryList);
        //将数据传递给模型
        $this->smarty->assign('categoryList',$GLOBALS['tree']);
        //var_dump($categoryList);die;

        $this->smarty->display('index.html');
    }
}