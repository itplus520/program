<?php
namespace Controller\Admin;
/**
 * 分类控制器
 * @package Controller\Admin
 */
class CategoryController extends \Controller\Admin\RoleController
{
    /**
     * 显示分类列表
     */
    public function listAction()
    {
        //使用分类模型获取数据
        $categoryModel=new \Model\CategoryModel();
        //调用模型中的getAll()方法获取数据库中的数据
        $category=$categoryModel->getAll();
        //使用分类对象对数据进行数据过滤
        \Libs\Tools::getTree($category);
        //var_dump($category);exit;
        //将数据赋值给模型
        $this->smarty->assign('category',$GLOBALS['tree']);
        $this->smarty->display('list.html');
    }

    /**
     * 添加分类
     */
    public function addAction()
    {
        //创建分类模型对象
        $cateMdel=new \Model\CategoryModel();
        if(IS_POST){
            //var_dump($_POST);exit;
            $pid=(int)$_POST['pid'];
            $cname=$_POST['cname'];
            $sort=(int)$_POST['sort'];
            $res=$cateMdel->addList($pid,$cname,$sort);
            if($res){
                $this->success('分类记录添加成功','index.php?p=admin&c=category&a=list',3);
            }else{
                $this->error('分类记录添加失败','index.php?p=admin&c=category&a=add',3);
            }
        }else{
            //获取数据库中的分类数据
            $category=$cateMdel->getAll();
            //对分类的数据进行(分类树)过滤
            \Libs\Tools::getTree($category);
            //将获取的分类数据赋值给模板
           // var_dump($category);die;
            $this->smarty->assign('category',$GLOBALS['tree']);
            $this->smarty->display('add.html');
        }
    }

    /**
     * 删除分类
     */
    public function delAction()
    {
        //获取删除分类ID
        $id=$_GET['id'];
        //创建分类模型对象
        $cate=new \Model\CategoryModel();
        //判断当前ID是否有子级
        $rs=$cate->isFindSon($id);
        if($rs){
            $this->error('请删除子级后再删除当前分类','index.php?p=admin&c=category&a=list',3);
        }

        $res=$cate->delList($id);
        if($res){
            $this->success('删除成功','index.php?p=admin&c=category&a=list',3);
        }else{
            $this->error('删除失败','index.php?p=admin&c=category&a=list&id='.$id,3);
        }
    }

    /**
     *更新分类
     */
    public function updateAction()
    {
        //调用category模型
        $category=new \Model\CategoryModel();
        if(IS_POST){
            //接收表单的数据
            $pid=(int)$_POST['pid'];
            $name=$_POST['cname'];
            $sort=$_POST['sort'];
            $id=$_POST['id'];

            //1.下拉选项的选中项不能是自己本身
            if($id==$pid){
                $this->error('父级id不能是自己本身','index.php?p=admin&c=category&a=update&id='.$id,2);
            }
            //2.下拉选项的选中项不能是自己的子级
            $cate=$category->getAll();
            //获取指定分类的所有子类(二级分类、三级分类、多级分类)
            \Libs\Tools::getTree($cate);
            if(!empty($GLOBALS['tree'])){
                foreach($GLOBALS['tree'] as $arrson){
                    //如果当前所属分类ID等于其中任意一个子级则报错
                    if($pid=$arrson['id']){
                        $this->error('父类ID不能是子级','index.php?p=admin&c=category&a=update&id='.$id,2);
                    }
                }
            }

            //调用category模型中的update方法对数据进行更新
            $rs=$category->update($id,$name,$pid,$sort);
            if($rs){
                $this->success('修改成功','index.php?p=admin&c=category&a=list',2);
            }else{
                $this->error('修改失败','index.php?p=admin&c=category&a=update&id='.$id ,2);
            }
        }else{
            //根据模型中的方法获取数据
            $catelist=$category->getAll();
            //将分类数据转化为分类树
            \Libs\Tools::getTree($catelist);
            //传递数据传递给模板
            $this->smarty->assign('catelist',$GLOBALS['tree']);

            //获取当前分类的详细信息
            $id=(int)$_GET['id'];
            $cateinfo=$category->getOne($id);
            $this->smarty->assign('cateinfo',$cateinfo);

            $this->smarty->display('update.html');
        }
    }
}