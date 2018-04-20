<?php
namespace Controller\Admin;
class CategoryController extends BaseController{
    //显示类别列表
    public function listAction(){
        $model=new \Model\CategoryModel();
        $list=$model->getCategoryTree();
        $this->smarty->assign('list',$list);
        $this->smarty->display('cat_list.html');
    }
    //添加类别
    public function addAction(){
        $model=new \Model\CategoryModel();
        //实现添加业务逻辑
        if(!empty($_POST)){
            $data['cat_name']=$_POST['cat_name'];
            $data['parent_id']=$_POST['parentid'];
            $data['sort_order']=$_POST['sort_order'];
            if($model->insert($data))
                $this->success ('index.php?p=Admin&c=Category&a=list', '添加成功');
            else
                $this->error ('index.php?p=Admin&c=Category&a=add', '添加失败');
        }
        $cat_list=$model->getCategoryTree();
        $this->smarty->assign('cat_list',$cat_list);
        $this->smarty->display('cat_add.html');
    }
    //修改类别
    public function editAction(){
        $cat_id=(int)$_GET['cat_id'];
        $model=new \Model\CategoryModel();
        //修改业务逻辑
        if(!empty($_POST)){
            $data['cat_name']=$_POST['cat_name'];
            $data['parent_id']=$_POST['parentid'];
            $data['sort_order']=$_POST['sort_order'];
            $data['cat_id']=$cat_id;
            //错误一：指定的父级是自己
            if($data['parent_id']==$cat_id){
                $this->error ('index.php?p=Admin&c=Category&a=edit&cat_id='.$cat_id, '自己不能做自己的父亲');
            }
            //错误二：指定的父级是自己的后代
            $sublist=$model->getCategoryTree($cat_id);             
            foreach($sublist as $rows){
                if($rows['cat_id']==$data['parent_id'])
                    $this->error ('index.php?p=Admin&c=Category&a=edit&cat_id='.$cat_id, '指定的父级是自己的后代');
            }
            //更新操作            
            if($model->update($data))
                $this->success ('index.php?p=Admin&c=Category&a=list','修改成功');
            else
                $this->error ('index.php?p=Admin&c=Category&a=edit&cat_id='.$cat_id, '修改失败');
        }
        $info=$model->find($cat_id);
        $cat_list=$model->getCategoryTree();
        $this->smarty->assign('cat_list',$cat_list);
        $this->smarty->assign('info',$info);
        $this->smarty->display('cat_edit.html');
    }
    //删除类别
    public function delAction(){
        $cat_id=(int)$_GET['cat_id'];
        $model=new \Model\CategoryModel();
        if($model->isLeaf($cat_id)){ //是叶子节点就删除
            if($model->delete($cat_id))
                $this->success ('index.php?p=Admin&c=Category&a=list', '删除成功');
            else
                $this->error ('index.php?p=Admin&c=Category&a=list', '删除失败');
        }else
            $this->error ('index.php?p=Admin&c=Category&a=list', '节点下有子元素，不能删除');
        
    }
}








