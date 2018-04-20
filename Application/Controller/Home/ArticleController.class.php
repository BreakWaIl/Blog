<?php
namespace Controller\Home;
class ArticleController extends BaseController{
    //显示上一篇，下一篇
    public function getArticlePrevOrNextAction(){
        $art_id=(int)$_GET['art_id'];
        $prev=(int)$_GET['prev'];
        $model=new \Model\ArticleModel();
        $info=$model->getArticlePrevOrNext($art_id, $prev);
        if(empty($info))    //如果找不到上一篇或下一篇，还是取原来数据
            $info=$model->find ($art_id);
        $this->smarty->assign('info',$info);
        $this->smarty->display('article.html');
    }
    //显示文章列表
    public function listAction(){
        $key=$_GET['key'];
        $model=new \Model\ArticleModel();
        $art_list=$model->getArticleListByKeyWords($key);
        $this->smarty->assign('data',array(
            'art_list'  => $art_list 
        ));
        $this->smarty->display('art_list.html');
    }
    //显示文章内容
    public function ArticleAction(){
        $art_id=(int)$_GET['art_id'];
        $model=new \Core\Model('article');
        $info=$model->find($art_id);
        //获取评论
        $reply_model=new \Model\ReplyModel();
        $reply_list=$reply_model->getReplyTree($art_id);
        $this->smarty->assign('reply_list',$reply_list);
        //阅读数加1
        if(!isset($_SESSION["art{$art_id}"])){
            $info['art_click']++;
            $_SESSION["art{$art_id}"]=1;
            $model->update($info);
        }      
        $this->smarty->assign('info',$info);
        $this->smarty->display('article.html');
    }
    //文章点赞
    public function upAction(){
        $art_id=(int)$_GET['art_id'];
        if(!isset($_SESSION["up{$art_id}"])){
            $model=new \Model\ArticleModel();
            $model->up($art_id);
            $_SESSION["up{$art_id}"]=1;
        }   
        $this->success ('index.php?p=Home&c=Article&a=article&art_id='.$art_id);
    }
}








