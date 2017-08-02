<?php
namespace Core;

/**
 * 基础控制器
 */
class Controller
{
    /**
     * 保存Smarty实例
     * @var \Smarty Object
     */
    protected $smarty;
    /**
     * 用户存放XSS过滤器
     * @var
     */
    protected $xssObj;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $this->initSession();   //开启session
        $this->initSmarty();    //初始化smarty
        $this->initPurif();       //初始化XSS过滤器
    }

    /**
     * 初始化XSS过滤器
     */
    private function initPurif()
    {
        $this->xssObj=new \HTMLPurifier();
    }

    /**
     * 开启session
     */
    public function initSession()
    {
        session_start();
    }

    /**
     * 初始化smarty对象
     */
    public function initSmarty()
    {
        $this->smarty = new \Smarty;
        $this->smarty->setTemplateDir(VIEW_PATH . PLATFORM_NAME . DS . CONTROLLER_NAME . DS);
        $this->smarty->setCompileDir(APP_PATH . 'View_c');
    }

    /**
     * 跳转成功页面
     * @param string $msg   提示信息
     * @param string $url   跳转网址
     * @param int    $time
     */
    public function success($msg, $url, $time = 3)
    {
        $this->jump($msg, $url, 'success', $time);
    }

    /**
     * 跳转失败页面
     * @param string $msg   提示信息
     * @param string $url   跳转网址
     * @param int    $time
     */
    public function error($msg, $url, $time = 3)
    {
        $this->jump($msg, $url, 'error', $time);
    }

    /**
     * 跳转页面
     * @param string $msg   提示信息
     * @param string $url   跳转网址
     * @param string $state 操作状态：成功-success ，失败-error
     * @param int    $time
     */
    private function jump($msg, $url, $state, $time = 3)
    {
        echo <<<STR
        <!doctype html>
        <html>
        <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="{$time};URL={$url}">
        <title>提示页面</title>
        <style type="text/css">
        #img{text-align:center;margin-top:50px;margin-bottom:20px;}
        .info{text-align:center;font-size:24px;font-family:'微软雅黑';font-weight:bold;}
        #success{color:#060;}
        #error{color:#F00;}
        </style>
         <script>
            window.onload=function(){
                var wait=document.getElementById('wait');
                var interval=setInterval(function(){
                    var time=wait.innerHTML;
                    if(time > 1 ){
                        time--;
                        wait.innerHTML=time;
                    }else{
                        clearInterval(interval);
                    }
                },1000);
             }
        </script>
        </head>
        <body>
            <div id="img"><img src="./Public/img/{$state}.jpg" width="160" height="200" /></div>
            <div id='{$state}' class="info">{$msg}，<b id='wait'>{$time}</b>秒以后跳转</div>
        </body>
        </html>
STR;
        die;
    }
}