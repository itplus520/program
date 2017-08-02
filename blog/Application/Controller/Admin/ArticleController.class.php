<?php
namespace Controller\Admin;


/**
 * 文章控制器
 */
class ArticleController extends \Controller\Admin\RoleController
{
    /**
     * 显示文章列表
     */
    public function listAction()
    {
        $articleModel=new \Model\ArticleModel();
        //判断后台列表用户是否为admin,如果是admin，就显示所有分类信息;否则显示所属分类的信息
        $where=$_SESSION['userinfo']['username'] == 'admin' ? array() : array('uid'=>$_SESSION['userinfo']['id']);

        $res=$articleModel->getAll(array(),$where);
        //var_dump($res);exit;
        $this->smarty->assign('res',$res);

        $this->smarty->display('list.html');
    }

    /**
     * 添加文章
     */
    public function addAction()
    {
        if(IS_POST){
            //获取表单提交的数据
            $cid=$_POST['cid'];
            $title=$this->xssObj->purify($_POST['title']);
            $image=empty($_FILES['image']['name']) ?  '' :$_FILES['image'];
            $author=$this->xssObj->purify($_POST['author']);
            $keywords=$this->xssObj->purify($_POST['keywords']);
            $description=$this->xssObj->purify($_POST['description']);
            $content=$this->xssObj->purify($_POST['content']);
            $is_Tuijian=$_POST['is_Tuijian'];
            $display=$_POST['display'];
            $uid=$_SESSION['userinfo']['id'];

            //判断文件上传
            if($image){
                //创建文件上传对象
                $uploadObj=new \Libs\Upload();
                //调用image方法上传图片
                $image=$uploadObj->image($image);
                //判断上传状态
                if(!$image){
                    $this->error('图片上传失败,原因:'.$uploadObj->getMessage(),'index.php?p=admin&c=article&a=add',2);
                }
            }

            //创建文章模型
            $articleModel=new \Model\ArticleModel();
            //调用文章模型中的add方法
            $res=$articleModel->add($title,$keywords,$description,$author,$cid,$image,$content,$is_Tuijian,$display,$uid);
            //判断是否添加成功
            if($res){
                $this->success('文章添加成功','index.php?p=admin&c=article&a=list',2);
            }else{
                $this->success('文章添加失败','index.php?p=admin&c=article&a=add',2);
            }
        }else{
            //创建分类模型
            $categoryModel=new \Model\CategoryModel();
            //调用模型中的getAll()方法获取所有分类数据
            $categoryList=$categoryModel->getAll();
            //使用分类树这个类对分类数据进行分类
            \Libs\Tools::getTree($categoryList);
            //将分类树种的数据传递给视图
            $this->smarty->assign('categoryList',$GLOBALS['tree']);
            $this->smarty->display('add.html');
        }
    }

    /**
     * 删除文章
     */
    public function delAction()
    {
        $id=(int)$_GET['id'];
        $artModel=new \Model\ArticleModel();

        //获取文章信息
        $articleInfo=$artModel->getOne($id);
        //判断文章数据表中的uid是否等于当前登录用户的id，不等则非法操作
        if((!$articleInfo || $articleInfo['uid'] != $_SESSION['userinfo']['id']) && $_SESSION['userinfo']['username'] != 'admin'){
            $this->error('非法操作','index.php?p=admin&c=login&a=loginout',1);
        }
        $res=$artModel->del($id);
        if($res){
            $this->success('删除成功','index.php?p=admin&c=article&a=list',2);
        }else{
            $this->error('删除失败','index.php?p=admin&c=article&a=list',2);
        }
    }

    /**
     * 修改文章
     */
    public function updateAction()
    {
        if(IS_POST){
            //获取表单提交的数据
            $id=$_POST['id'];
            $cid=$_POST['cid'];
            $title=$this->xssObj->purify($_POST['title']);
            $image=empty($_FILES['image']['name']) ?  '' :$_FILES['image'];
            $author=$this->xssObj->purify($_POST['author']);
            $keywords=$this->xssObj->purify($_POST['keywords']);
            $description=$this->xssObj->purify($_POST['description']);
            $content=$this->xssObj->purify($_POST['content']);
            $is_Tuijian=$_POST['is_Tuijian'];
            $display=$_POST['display'];

            //判断文件上传
            if($image){
                //创建文件上传对象
                $uploadObj=new \Libs\Upload();
                //调用image方法上传图片
                $image=$uploadObj->image($image);
                //判断上传状态
                if(!$image){
                    $this->error('图片上传失败,原因:'.$uploadObj->getMessage(),'index.php?p=admin&c=article&a=add',2);
                }
            }

            //创建文章模型对象
            $articleModel=new \Model\ArticleModel();
            //调用文章模型中的update()方法
            $result=$articleModel->update($id,$title,$keywords,$description,$author,$cid,$image,$content,$is_Tuijian,$display);
            //判断是否修改成功
            if($result){
                $this->success('修改成功','index.php?p=admin&c=article&a=list',2);
            }else{
                $this->error('修改失败','index.php?p=admin&c=article&a=update',2);
            }
        }else{
            $id=(int)$_GET['id'];
            $cateModel=new \Model\CategoryModel();
            //获取文章的所有数据
            $cateList=$cateModel->getAll();
            //将获取进行数据分类
            \Libs\Tools::getTree($cateList);
            //将分类树的数据传递给视图
            $this->smarty->assign('categoryList',$GLOBALS['tree']);

            //根据id获取指定的记录
            $artModel=new \Model\ArticleModel();
            $artOne=$artModel->getOne($id);
            //var_dump($artOne);die;
            //将获取的一条数据传递给视图
            $this->smarty->assign('artInfo',$artOne);
            $this->smarty->display('update.html');
        }
    }
}