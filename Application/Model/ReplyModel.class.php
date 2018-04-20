<?php
namespace Model;
class ReplyModel extends \Core\Model{
    public function getReplyTree($art_id){
        $sql="select * from reply,user where reply.user_id=user.user_id and art_id=$art_id";
        $list=  $this->mypdo->fetchAll($sql);
        $list=  $this->createTree($list);
        return $list;
    }
    private function createTree($list,$parent_id=0,$deep=0){
        static $tree=array();
        foreach($list as $rows){
            if($rows['parent_id']==$parent_id){
                $rows['deep']=$deep;
                $tree[]=$rows;
                $this->createTree($list,$rows['reply_id'],$deep+1);
            }
        }
        return $tree;
    }
}