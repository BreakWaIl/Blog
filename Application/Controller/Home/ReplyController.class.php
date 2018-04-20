<?php
namespace Controller\Home;
class ReplyController extends BaseController{
    public function addAction(){
        if(!isset($_SESSION['user'])){
            $this->error('index.php?p=Admin&c=Login&a=login');
        }
        $data['art_id']=$_POST['art_id'];
        $data['reply_content']=$_POST['txaArticle'];
        $data['reply_time']=time();
        $data['user_id']=$_SESSION['user']['user_id'];
        $model=new \Core\Model('reply');
        if($model->insert($data))
            $this->success ('index.php?p=Home&c=Article&a=article&art_id='.$data['art_id'],'回复成功');
    }
}