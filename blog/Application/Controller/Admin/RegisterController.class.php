<?php
namespace Controller\Admin;


/**
 * 用户注册控制器
 */
class RegisterController extends \Core\Controller
{
    /**
     * 显示后台首页
     */
    public function registerAction()
    {
        if(IS_POST){
            //var_dump($_FILES);exit;
            //接收表单提交的数据
            $username=$_POST['username'];
            $password=$_POST['password'];
            $avatar=empty($_FILES['avatar']['name']) ? '':$_FILES['avatar'];
            $login_ip=ip2long($_SERVER['REMOTE_ADDR']);
            //创建用户模型对象
            $userModel=new \Model\UserModel();

            //判断用户名是否相同
            if($username=='admin'){
                $this->error('用户名已被占用,请重新输入','index.php?p=admin&c=register&a=register',2);
            }
            //判断头像上传
            if($avatar){
                //创建文件上传对象
                $uploadObj=new \Libs\Upload();
                //调用image方法上传图片
                $avatar=$uploadObj->image($avatar);
                //判断上传状态
                if(!$avatar){
                    $this->error('图片上传失败,原因:'.$uploadObj->getMessage(),'index.php?p=admin&c=register&a=register',2);
                }
            }
            //使用registerOne方法增加一条数据
            $res=$userModel->registerOne($username,$password,$login_ip,$avatar);
            //var_dump($avatar);die;

            //判断是否注册成功
            if($res){
                $this->success('注册成功!','index.php?p=admin&c=login&a=login',2);
            }else{
                $this->error('注册失败!','index.php?p=admin&c=register&a=register',2);
            }
        }else{
            $this->smarty->display('register.html');
        }
    }

}