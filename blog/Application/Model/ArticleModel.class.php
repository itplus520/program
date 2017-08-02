<?php
namespace Model;

/**
 * 文章模型
 * @package Model
 */
class ArticleModel extends \Core\Model
{
    /**
     * 根据文章id，给文章评论字段加1
     * @param $id int
     * @return int
     */
    public function updateComment($id)
    {
        $sql="update article set comment=comment + 1 where id=$id";
        return $this->mypdo->exec($sql);
    }

    /**
     * 根据文章id，给文章评论字段加1
     * @param $id int
     * @return int
     */
    public function updateRead($id)
    {
        $sql="update article set click=click + 1 where id=$id";
        return $this->mypdo->exec($sql);
    }

    /**
     * 获取文章的所有数据
     * @return array
     */
    public function getAll($limit=array(),$where=array())
    {
        //组装limit条件
        $limit=isset($limit['startno']) ? " limit {$limit['startno']},{$limit['pagesize']}" : '';
        //组装where条件
        $whereStr=' where 1=1';
        $whereStr .= isset($where['display']) ? ' and a.display=1 ':'';
        $whereStr .= isset($where['cid']) ? " and a.cid in ({$where['cid']})" : '';
        $whereStr .= isset($where['uid']) ? " and a.uid={$where['uid']}" : '';
        $sql="select a.*,b.cname as categoryName from article as a left join category as b on a.cid=b.id $whereStr order by a.updated_time desc $limit";
        //echo $sql;exit;
        return $this->mypdo->fetchAll($sql);
    }

    /**
     * 获取文章总记录数
     */
    public function getCount($where=array())
    {
        $where=isset($where['cid']) ? " where cid in ({$where['cid']})" : "";
        $sql="select count(*) from article $where";
        $tmp=$this->mypdo->fetchOne($sql);
        return $tmp['count(*)'];
    }

    /**
     * 获取指定文章数据
     */
    public function getOne($id)
    {
        $sql="select a.*,b.cname as categoryName from article as a left join category as b on a.cid=b.id where a.id=$id";
        //echo $sql;die;
        return $this->mypdo->fetchOne($sql);
    }
    /**
     * 添加文章数据
     */
    public function add($title,$keywords,$description,$author,$cid,$image,$content,$is_Tuijian,$display,$uid)
    {
        $time=time();
        $sql="insert into article(title,keywords,description,author,cid,created_time,updated_time,image,content,is_Tuijian,display,uid) values
('$title','$keywords','$description','$author',$cid,$time,$time,'$image','$content',$is_Tuijian,$display,$uid)";
        return $this->mypdo->exec($sql);
    }

    /**
     * 删除文章数据，根据相应的ID
     * @param $id int 文章id
     * @return int
     */
    public function del($id)
    {
        $sql="delete from article where id=$id";
        return $this->mypdo->exec($sql);
    }

    /**
     * 修改文章数据
     */
    public function update($id,$title,$keywords,$description,$author,$cid,$image,$content,$is_Tuijian,$display)
    {
        $time=time();
        if($image){
            $sql="update article set title='$title',keywords='$keywords',description='$description',author='$author',cid=$cid,updated_time=$time,image='$image',content='$content',is_Tuijian=$is_Tuijian,display=$display where id=$id";
        }else{
            $sql="update article set title='$title',keywords='$keywords',description='$description',author='$author',cid=$cid,updated_time=$time,content='$content',is_Tuijian=$is_Tuijian,display=$display where id=$id";
        }
        return $this->mypdo->exec($sql);
    }
}