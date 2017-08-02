<?php
namespace Controller\Home;

/**
 * 评论控制器
 * @package Controller\Home
 */
class CommentController extends \Controller\Home\BaseController
{
    /**
     * 添加评论
     */
    public function addAction()
    {
        if(IS_POST){
            $uid=isset($_SESSION['userinfo']['id']) ? $_SESSION['userinfo']['id'] : 0;
            //echo $uid;die;
            if(!$uid)  $this->error('请登录后再进行评论','index.php?p=home&c=login&a=login',3);

            //1.接收表单数据
            $pid=(int)$_POST['pid'];
            $aid=(int)$_POST['aid'];
            $content=$this->xssObj->purify($_POST['content']);

            //2.创建评论模型对象
            $commentModel=new \Model\CommentModel();
            //3.调用模型add方法添加数据
            $res=$commentModel->add($content,$uid,$aid,$pid);
            //判断是否评论成功
            if($res){
                //如果评论成功，给文章评论字段加1
                //创建文章模型对象
                $articleModel=new \Model\ArticleModel();
                //调用文章模型中的updateComment()方法增加评论数
                $articleModel->updateComment($aid);
                $this->success('评论成功','index.php?p=home&c=article&a=detail&id='.$aid,3);
            }else{
                $this->error('评论失败','index.php?p=home&c=article&a=detail&id='.$aid,2);
            }
        }
    }
}