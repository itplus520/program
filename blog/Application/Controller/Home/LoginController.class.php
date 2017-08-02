<?php
namespace Controller\Home;

/**
 * 前台登录控制器
 * @package Controller\Home
 */
class LoginController extends \Core\Controller
{
    public function loginAction()
    {
        if(IS_POST){
            //var_dump($_POST);die;
            //获取表单提交的数据,使用HTMLPurifier插件防止XSS攻击
            $username=$this->xssObj->purify($_POST['username']);
            $password=$this->xssObj->purify($_POST['password']);
            //创建用户模型对象
            $userModel=new \Model\UserModel();
            //调用用户模型对象中的getUserInfo方法获取数据
            $res=$userModel->getUserinfo($username,$password);
            //var_dump($res);exit;
            //判断是否登录成功
            if($res){
                //登录成功的信息保存到session中
                $_SESSION['userinfo']=$res;

                //如果用户勾选了“保持登录”就记住cooike（7天）
                if(!empty($_POST['chkRemember'])){
                    //注:cooike中不能存数组，需要对数组进行序列化,但不安全。
                    //setcookie('userinfo',serialize($res),time()+3600*24*7);
                    //将获取的用户信息进行md5加密
                    setcookie('userinfo_id',$res['id'],time()+3600*24*7);
                    setcookie('userinfo_data',md5($res['id'].$res['username'].$res['password']),time()+ 3600 * 24 *7);
                    //var_dump($_COOKIE['userinfo_data']);die;
                }
                $this->success('登录成功','index.php?p=home&c=index&a=index',2);
            }else{
                $this->error('用户名或密码错误','index.php?p=home&c=login&a=login',2);
            }
        }else{
            $this->smarty->display('login.html');
        }
    }
}