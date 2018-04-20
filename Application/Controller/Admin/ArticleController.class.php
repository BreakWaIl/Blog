<?php
namespace Controller\Admin;
class ArticleController extends \Controller\Admin\BaseController{
    //显示文章列表
    public function listAction(){
        //echo $num;
        $data=array();  //条件数组
        if(!empty($_POST)){
            //去除提交值的空格
            foreach($_POST as $k=>$v){
                if(trim($v)=='')
                    continue;
                $data[$k]=trim($v);
            }
        }        
        $art_model=new \Model\ArticleModel();
        $rowscount=$art_model->getArticleCount($data); //获取文章数量
        $page=new \Lib\Page($rowscount, 3);  //分页-每页显示记录数
        $list=$art_model->getArticleListByCondition($data,$page->startno,$page->pagesize);
        $page_str=$page->show();
        $this->smarty->assign('page_str',$page_str);

        
        $cat_model=new \Model\CategoryModel();
        $cat_list=$cat_model->getCategoryTree();
        $this->smarty->assign('cat_list',$cat_list);   
        $this->smarty->assign('list',$list);
        $this->smarty->display('article_list.html');
    }
    //添加文章
    public function addAction(){
        //实现添加的业务逻辑
        if(!empty($_POST)){
            $_POST['art_time']=time();
            $_POST['user_id']=$_SESSION['user']['user_id'];
            $art_model=new \Core\Model('article');
            if($art_model->insert($_POST))
                $this->success ('index.php?p=Admin&c=Article&a=list','添加成功');
            else
                $this->error ('index.php?p=Admin&c=Article&a=add','添加失败');
        }
        //显示添加页面
        $cat_model=new \Model\CategoryModel();
        $cat_list=$cat_model->getCategoryTree();
        $this->smarty->assign('cat_list',$cat_list);
        $this->smarty->display('article_add.html');
    }
    //修改文章
    public function editAction(){
        $art_id=(int)$_GET['art_id'];
        $art_model=new \Core\Model('article');
        //修改业务逻辑
        if(!empty($_POST)){
            $_POST['art_id']=$art_id;
            if($art_model->update($_POST))
                $this->success ('index.php?p=Admin&c=Article&a=list', '修改成功');
            else
                $this->error ('index.php?p=Admin&c=Article&a=edit&art_id='.$art_id, '修改失败');
        }      
        $info=$art_model->find($art_id);        //需要修改的文章信息
        $cat_model=new \Model\CategoryModel();
        $cat_list=$cat_model->getCategoryTree();    //获取类别的树形结构
        $this->smarty->assign('data',array(
            'info'  =>  $info,
            'cat_list'  =>  $cat_list
        ));
        $this->smarty->display('article_edit.html');
    }
    //删除文章
    public function delAction(){
        $ids=$_GET['art_id'];
        $model=new \Model\ArticleModel();
        if($model->deleteArticle($ids))
            $this->success ('index.php?p=Admin&c=Article&a=list','删除成功');
        else
            $this->error ('index.php?p=Admin&c=Article&a=list','删除失败');
    }
    //置顶与取消置顶
    public function setTopAction(){
        $data['is_top']=(int)$_GET['is_top'];
        $data['art_id']=(int)$_GET['art_id'];
        $model=new \Core\Model('article');
        if($model->update($data))
            $this->success ('index.php?p=Admin&c=Article&a=list', '设置成功');
        else
            $this->error ('index.php?p=Admin&c=Article&a=list','设置失败');
    }

    //显示回收站页面,显示回收站内容列表
	    public function rbAction()
    {
        $data=array();   //条件数组
        if(!empty($_POST)){
         //去除提交值的空格
			foreach($_POST as $k=>$v){
				if(trim($v)=='')
					continue;
            $data[$k]=trim($v);
			}
		}
		$art_model=new \Model\ArticleModel();
        $rowscount=$art_model->getRbCount($data); //获取文章数量
        $page=new \Lib\Page($rowscount, 3); //分页-每页显示记录数
        $list=$art_model->getRbListByCondition($data,$page->startno,$page->pagesize);
        $page_str=$page->show();
        $this->smarty->assign('page_str',$page_str);
		$cat_model=new \Model\CategoryModel();
        $cat_list=$cat_model->getCategoryTree();
        $this->smarty->assign('cat_list',$cat_list);
        $this->smarty->assign('list',$list);
        $this->smarty->display('article_rb.html');

    }
	//删除回收站文章
    public function delRbAction(){
        $ids=$_GET['art_id'];
        $model=new \Model\ArticleModel();
        if($model->delRb($ids))
            $this->success ('index.php?p=Admin&c=Article&a=rb','删除成功');
        else
            $this->error ('index.php?p=Admin&c=Article&a=rb','删除失败');
    }
    //还原回收站文章
    public function rcRbAction(){
        $ids=$_GET['art_id'];
        $model=new \Model\ArticleModel();
        if($model->rcRb($ids))
            $this->success ('index.php?p=Admin&c=Article&a=rb','还原成功');
        else
            $this->error ('index.php?p=Admin&c=Article&a=rb','还原失败');
    }
}









