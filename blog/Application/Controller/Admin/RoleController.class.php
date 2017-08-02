<?php
namespace Controller\Admin;

/**
 * 权限控制器,避免翻墙
 * @package Controller\Admin
 */
class RoleController extends \Core\Controller
{
    public function __construct()
    {
        //子类继承父类的构造函数（开启session和初始化smarty避免冗余）
        parent::__construct();

        if(empty($_SESSION['userinfo'])){
            $this->error('没有权限，请登录','index.php?p=admin&c=login&a=login',3);
        }
    }
}