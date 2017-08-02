<?php
namespace Model;

/**
 * 用户模型
 * @package Model
 */
class UserModel extends \Core\Model
{


    /**
     * 获取用户信息
     */
    public function getUserInfo($username,$pwd)
    {
        //echo $username;exit;
        //防止SQL注入(避免用户输入特殊字符('or 1=1 or')进行登录）
        //1)使用php内置函数addslashes()进行字符串转义
        //$username=addslashes($username);
        //2)使用PDO类内置的方法quote()方法进行转义(注:这个方法字符串转义之后多加一个''单引号)
        $username=$this->mypdo->addQuote($username);
        $pwd=md5($pwd);
        $sql="select * from user where username=$username and password='$pwd'";
        return $this->mypdo->fetchOne($sql);
    }

    /**
     * 更新用户信息
     * @param int $uid               用户ID
     * @param int $login_time      用户登录时间
     * @param int $login_ip       用户登录IP
     * @return mixed
     */
    public function updateUserInfo($uid,$login_time,$login_ip)
    {
        $sql="update user set login_num=login_num + 1,login_time='$login_time',login_ip='$login_ip',updated_time='$login_time' where id= $uid";
        return $this->mypdo->exec($sql);
    }

    /**
     * 添加用户
     * @param $username string 用户名
     * @param $pwd string 密码
     * @param $created_time int 创建于
     * @param $login_ip int 登录时间
     * @return int
     */
    public function addOne($username,$pwd,$created_time,$login_ip,$image)
    {
        $pwd=md5($pwd);
        if($image){
            $sql="insert into user(id,username,password,created_time,login_ip,avatar) values(null,'$username','$pwd',$created_time,$login_ip,'$image')";
        }else{
            $sql="insert into user(id,username,password,created_time,login_ip) values(null,'$username','$pwd',$created_time,$login_ip)";
        }
        //echo $sql;exit;
        return $this->mypdo->exec($sql);
    }

    /**
     * 注册用户
     * @param $username string 用户名
     * @param $pwd string 密码
     * @param $login_ip int 登录时间
     * @param $avatar string 用户头像
     * @return int
     */
    public function registerOne($username,$pwd,$login_ip,$avatar)
    {
        $pwd=md5($pwd);
        $created_time=time();
        $sql="insert into user(id,username,password,created_time,login_ip,avatar) values (null,'$username','$pwd',$created_time,$login_ip,'$avatar')";
        //echo $sql;exit;
        return $this->mypdo->exec($sql);
    }



    /**
     *修改用户信息
     */
    public function updateOne($id,$username,$pwd,$login_time,$login_ip,$update_time)
    {
        $pwd=md5($pwd);
        $sql="update user set username= '$username' ,password='$pwd',login_time= $login_time,login_ip= $login_ip,updated_time= $update_time,display=0 where id= $id";
        //echo $sql;exit;
        return $this->mypdo->exec($sql);
    }

    /**
     * 获取数据库中用户的所有记录
     * @return array
     */
    public function getAll()
    {
        return $this->mypdo->fetchAll("select * from user order by id desc");
    }

    /**
     * 查询一条记录
     * @param $id int 用户id
     * @return array
     */
    public function getOne($id)
    {
        $sql="select * from user where id=$id";
        return $this->mypdo->fetchOne($sql);
    }


    /**
     * 删除用户数据
     * @param $id int 用户id
     * @return array
     */
    public function del($id)
    {
        $sql="delete from user where id= $id";
        return $this->mypdo->exec($sql);
    }
}