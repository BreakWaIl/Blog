<?php
/**
*商品控制器
*/
namespace Controller\Admin;
class ProductsController extends \Core\Controller {
	//显示商品
	public function listAction() {
		//调用模型
		$model=new \Model\ProductsModel();
                $list=$model->select('','desc');
		$this->smarty->assign('list',$list);
                $this->smarty->display('products_list.html');
	}
	//删除商品
	public function delAction() {
		$proid=$_GET['proid'];		//获取删除的商品编号
		$model=new \Model\ProductsModel();	//实例化商品模型
		if($model->del($proid))		//调用模型中的del()
                    $this->success ('index.php?c=Products&a=list','删除成功');
		else {
                    $this->error ('index.php?c=Products&a=list','删除失败');
		}
	}
}