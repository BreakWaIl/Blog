<?php
namespace Model;
class CategoryModel extends \Core\Model{
    //获取类别的树
    public function getCategoryTree($parent_id=0){
        $list=  $this->select();
        $list=  $this->createTree($list,$parent_id);
        return $list;
    }
    //创建树形结构
    private function createTree($list,$parent_id=0,$deep=1) {
	static $tree=array();
	foreach($list as $rows){

            if($rows['parent_id']==$parent_id){
                $rows['deep']=$deep;
                $tree[]=$rows;
                $this->createTree($list,$rows['cat_id'],$deep+1);
            }
	}
	return $tree;
    }
    //判断一个节点是否是叶子节点
    public function isLeaf($cat_id){
        $sql="select count(*) from category where parent_id=$cat_id";
        return !$this->mypdo->fetchColumn($sql);
    }
}











