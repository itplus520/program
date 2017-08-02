<?php
namespace Controller\Admin;


/**
 * 用户控制器
 */
class UserController extends \Controller\Admin\RoleController
{
    /**
     * 显示用户列表
     */
    public function listAction()
    {
        //使用User模型查询数据库中的记录
        $user = new \Model\UserModel();
        //调用模型中的方法查询
        $res = $user->getAll();
        //var_dump($res);exit;
        $this->smarty->assign('res', $res);
        $this->smarty->display('list.html');
    }

    /**
     * 添加用户
     */
    public function addAction()
    {
        if(IS_POST){
            $username=$_POST['username'];
            $pwd=$_POST['password'];
            $created_time=time();
            $login_ip=ip2long($_SERVER['REMOTE_ADDR']);
            $image=empty($_FILES['image']['name']) ?  '' :$_FILES['image'];
            $userModel=new \Model\UserModel();

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

            $res=$userModel->addOne($username,$pwd,$created_time,$login_ip,$image);
            if($res){
                $this->success('添加成功','index.php?p=admin&c=user&a=list');
            }else{
                $this->error('添加失败','index.php?p=admin&c=user&a=add');
            }
        }else{
            $this->smarty->display('add.html');
        }
    }

    /**
     * 修改用户
     */
    public function updateAction()
    {
        $user=new \Model\UserModel();
        if(IS_POST){
            //var_dump($_POST);exit;
            $id=$_POST['id'];
            $username=$_POST['username'];
            $pwd=$_POST['password'];
            $login_ip=ip2long($_SERVER['REMOTE_ADDR']);
            //var_dump($login_ip);exit;
            $login_time=$_SESSION['userinfo']['login_time'];
            $update_time=time();
            $res1=$user->updateOne($id,$username,$pwd,$login_time,$login_ip,$update_time);
            if($res1){
                $this->success('修改成功','index.php?p=admin&c=user&a=list',2);
            }else{
                $this->error('修改失败','index.php?p=admin&c=user&a=list',2);
            }
        }else{
            $id=$_GET['id'];
            //调用User模型获取数据
            $res=$user->getOne($id);
            //var_dump($res);exit;
            //将数据赋值给模板
            $this->smarty->assign('res',$res);
            //显示模板
            $this->smarty->display('update.html');
        }

    }

    /**
     * 删除用户
     */
    public function delAction()
    {
        $id=$_GET['id'];
        $user=new \Model\UserModel();
        $res=$user->del($id);
        if($res){
            $this->success('删除成功','index.php?p=admin&c=user&a=list',3);
        }else{
            $this->error('删除失败','index.php?p=admin&c=user&a=del',3);
        }
    }
}