<?php
namespace Controller\Admin;

/**
 * 登录控制器
 * @package Controller\Admin
 */
class LoginController extends \Core\Controller
{
    //登录方法
    public function loginAction()
    {
        //判断用户是否通过表单提交
        if(IS_POST){
            //1)接收用户从表单传递的数据
            $username=$_POST['username'];//用户名
            $pwd=$_POST['password'];//密码
            $captcha=$_POST['captcha'];//验证码
            //2)创建用户模型
            $userModel=new \Model\UserModel();
            //3)使用模型操作数据库获取数据库中的用户信息
            $res=$userModel->getUserInfo($username,$pwd);
            //4)判断验证码输入是否正确
            if(!$captcha || !\Libs\Captcha::checkVerify($captcha)){
                $this->error('验证码错误','index.php?p=admin&c=login&a=login',2);
            }
            //5)判断表单中的用户名与密码和数据库中的用户名与面是否一致
            if($res){
                //生成session令牌
                $_SESSION['userinfo']=$res;
                //var_dump($res);exit;

                //更新用户信息
                $login_ip=ip2long($_SERVER['REMOTE_ADDR']);//获取当前客户端IP地址
                $userModel->updateUserInfo($res['id'],time(),$login_ip);

                $this->success('登录成功','./index.php?p=admin&c=index&a=index',2);
            }else{
                $this->error('用户名或密码错误','index.php?p=admin&c=login&a=login',2);
            }
        }else{
            $this->smarty->display('login.html');
        }
    }
    //验证码方法
    public function captchaAction()
    {
        $captcha=new \Libs\Captcha(100,33);
        $captcha->generalVerify();
    }

    //注销用户名登录
    public function loginOutAction()
    {
        //销毁令牌(session)
        session_unset();//清空session中的数据
        session_destroy();//销毁session_id
        //提示信息并跳转至登录页
        $this->success('注销成功','index.php?p=admin&c=login&a=login',3);
    }
}