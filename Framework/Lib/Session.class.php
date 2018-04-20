<?php
/*
 * session入库
 */
namespace Lib;
class Session{
    private $mypdo;
    public function __construct() {
        //设置会话存储方式
        session_set_save_handler(
            array($this,'open'),
            array($this,'close'),
            array($this,'read'),
            array($this,'write'),
            array($this,'destroy'),
            array($this,'gc')
        );
        session_start();    //开启会话
    }
    public function open(){
        $this->mypdo=  \Core\MyPDO::getInstance($GLOBALS['config']['database']);
    }
    public function close(){
        return true;
    }
    public function read($sess_id){
        $sql="select sess_value from `session` where sess_id='$sess_id'";
        return $this->mypdo->fetchColumn($sql);
    }
    public function write($sess_id,$sess_value){
        $time=  time();
        $sql="insert into `session` values ('$sess_id','$sess_value',$time) on duplicate key update sess_value='$sess_value'";
        return $this->mypdo->exec($sql);
    }
    public function destroy($sess_id){
        $sql="delete from `session` where sess_id='$sess_id'";
        return $this->mypdo->exec($sql);
    }
    public function gc($maxlifetime){
        $expires=time()-$maxlifetime;   //过期时间的临界点
        $sql="delete from `session` where sess_time<$expires";
        return $this->mypdo->exec($sql);
    }
}
