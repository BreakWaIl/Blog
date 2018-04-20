<?php
namespace Model;
class UserModel extends \Core\Model{
    //将用户信息保存到cookie中
    public function setMyCookie($id,$username,$pwd){
        $time=time()+3600*24*7;     //有效时间
        $str=md5($username.$GLOBALS['config']['app']['secure_key'].md5($pwd));
        setcookie('id',$id,$time,'/');
        setcookie('str',$str,$time,'/');
    }
    //通过cookie的信息登录
    public function getUserByCookie(){
        if(isset($_COOKIE['id']) && isset($_COOKIE['str'])){
            $id=$_COOKIE['id'];
            $str=$_COOKIE['str'];
            $info=  $this->find($id);
            var_dump($info);
            if($str==md5($info['user_name'].$GLOBALS['config']['app']['secure_key'].$info['user_pwd'])){
                return $info;
            }
        }
        return null;
    }
    //通过用户名和密码获取用户记录
    public function getUserByNameAndPwd($username,$pwd){
        //$username=  addslashes($username);
        //$pwd=  addslashes($pwd);
        $username=  $this->mypdo->addQuote($username);
        $pwd=  $this->mypdo->addQuote($pwd);
        $sql="select * from `user` where user_name=$username and user_pwd=md5($pwd)";
        return $this->mypdo->fetchRow($sql);
    }
    //更改登录信息
    public function updateLoginInfo(){
        $data['last_login_ip']= ip2long($_SERVER['REMOTE_ADDR']);  //客户端地址
        $data['last_login_time']=time();
        $data['login_count']=$_SESSION['user']['login_count']+1;    //登录次数
        $data['user_id']=$_SESSION['user']['user_id'];      //主键编号
        return $this->update($data);
    }
}












