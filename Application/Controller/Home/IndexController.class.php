<?php
namespace Controller\Home;
class IndexController extends BaseController{
    //显示首页
    public function indexAction(){
        $art_model=new \Model\ArticleModel();
        $art_list=$art_model->getArticleList();
        $label_list=$art_model->getLabel();
        $this->smarty->assign('data',array(
            'art_list'  =>  $art_list,
            'label_list'=>$label_list
        ));
        $this->smarty->display('index.html');
    }
}