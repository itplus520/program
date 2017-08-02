<?php
namespace Controller\Admin;


/**
 * 首页控制器
 */
class IndexController extends \Controller\Admin\RoleController
{
    /**
     * 显示后台首页
     */
    public function indexAction()
    {

        $this->smarty->display('index.html');
    }

    /**
     * 后台欢迎页
     */
    public function welcomeAction()
    {
        $this->smarty->display('welcome.html');
    }
}