<?php
namespace Model;

class CommentModel extends \Core\Model
{
    /**
     * 添加评论
     * @param $content string 评论内容
     * @param $uid int 用户id
     * @param $aid int 文章id
     * @param $pid int 父id
     * @return int
     */
    public function add($content,$uid,$aid,$pid)
    {
        $time=time();
        $sql="insert into comment(content,uid,aid,pid,created_time,updated_time) values('$content',$uid,$aid,$pid,$time,$time)";
        return $this->mypdo->exec($sql);
    }

    /**
     * 获取所有数据
     * @return array
     */
    public function getAll()
    {
        $sql="select comment.*,user.username,user.avatar from comment left join user on comment.uid=user.id";
        //echo $sql;die;
        return $this->mypdo->fetchAll($sql);
    }


}