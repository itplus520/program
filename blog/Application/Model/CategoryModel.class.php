<?php
namespace Model;

/**
 * 分类模型
 * @package Model
 */
class CategoryModel extends \Core\Model
{
    /**
     * 创建是否显示的常量
     */
    const DISPLAY_SHOW = 1;
    const DISPLAY_HIDDEN = 0;

    /**
     * 查询一条分类数据
     * @param $id int 分类id
     * @return array
     */
    public function getOne($id)
    {
        $sql="select * from category where id=$id";
        return $this->mypdo->fetchOne($sql);
    }

    /**
     * 获取分类的所有数据
     * @return array
     */
    public function getAll($where=array())
    {
        $where=isset($where['display']) ? ' where display =1' : '';
        $sql="select * from category $where order by sort desc";
        return $this->mypdo->fetchAll($sql);
    }

    /**
     * 添加分类数据
     * @param $pid int 分类id
     * @param $cname string 分类名称
     * @param $sort int 排序
     * @return  int 受影响的记录数
     */
    public function addList($pid,$cname,$sort)
    {
        $display=CategoryModel::DISPLAY_SHOW;
        $time=time();
        $sql="insert into category values(null,$pid,'$cname',$sort,$display,$time,$time)";
        return $this->mypdo->exec($sql);
    }

    /**
     * 删除分页
     * @param $id int 分类id
     * @return int
     */
    public function delList($id)
    {
        $sql="delete from category where id=$id";
        return $this->mypdo->exec($sql);
    }

    /**
     * 检查指定分类是否有子集
     * @param int $id 当前分类ID
     * @return int
     */
    public function isFindSon($id)
    {
        $sql="select count(*) from category where pid= $id";
        $data=$this->mypdo->fetchOne($sql);
        return $data['count(*)'];
    }

    /**
     * @param $id int 分类id
     * @param $name string 分类名字
     * @param $pid int 父id
     * @param $sort int 排序
     * @return int
     */
    public function update($id,$name,$pid,$sort)
    {
        $time=time();
        $sql="update category set name='$name',pid=$pid,sort='$sort' where id=$id";
        return $this->mypdo->exec($sql);
    }
}