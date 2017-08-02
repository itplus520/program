<?php
namespace Controller\Home;

/**
 *前台基础控制器判断是否有session和cooike
 * @package Controller\Home
 */
class BaseController extends \Core\Controller
{
    function __construct()
    {
        parent::__construct();

        //判断是否session，如果没有就将cooike中的信息赋给session
        if(empty($_SESSION['userinfo']) && !empty($_COOKIE['userinfo_id'])){
           //$_SESSION['userinfo']=unserialize($_COOKIE['userinfo']);
            //根据cooike中的id去数据库中查询用户信息
            $uid=$_COOKIE['userinfo_id'];
            //创建用户模型对象
            $userModel=new  \Model\UserModel();
            //调用模型中的getOne方法获取用户数据
            $userinfo=$userModel->getOne($uid);
            if($userinfo && $_COOKIE['userinfo_data'] == md5($userinfo['id'].$userinfo['username'].$userinfo['password'])){
                $_SESSION['userinfo']=$userinfo;
            }

        }
    }

}