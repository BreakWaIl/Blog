<?php
namespace Controller\Admin;
class UserController extends BaseController{
    //显示用户列表
    public function listAction(){
        $model=new \Model\UserModel();
        $list=$model->select();
        $this->smarty->assign('list',$list);
        $this->smarty->display('user_list.html');
    }
    //删除用户
    public function delAction(){
        $id=$_GET['id'];
        $model=new \Model\UserModel();
        if($model->delete($id))
            $this->success ('index.php?p=Admin&c=User&a=list','删除成功');
        else
            $this->error ('index.php?p=Admin&c=User&a=list', '删除失败');
    }
    //更新个人信息
public function editAction(){
    $id=$_SESSION['user']['user_id'];
    $model=new \Model\UserModel();
    //更改个人信息
    if(!empty($_POST)){
        if(!empty($_POST['password']))      //更改密码
            $data['user_pwd']=md5($_POST['password']);
        if($_FILES['face']['error']!=4){    //更改头像
            $upload=new \Lib\Upload();
             if(!$data['user_face']=$upload->uploadOne($_FILES['face']))
                 $this->error ('index.php?p=Admin&c=User&a=edit',$upload->getError ());
             //删除原来的头像
             $old_face=$GLOBALS['config']['app']['upload_path'].$_SESSION['user']['user_face'];
             if(file_exists($old_face))
                 unlink ($old_face);
        }
        //如果有$data就说明需要修改
        if(isset($data)){
            $data['user_id']=$id;
            if($model->update($data)){
                session_destroy();
                echo '<div style="text-align:center">修改成功，重新登录</div>';
                echo <<<str
<script type="text/javascript">
setTimeout(function(){
        top.window.location.href='index.php?p=Admin&c=Login&a=login';	//top表示框架的最顶端窗口
},3000)
</script>                
str;
                exit;
            }
            else
                $this->error ('index.php?p=Admin&c=User&a=edit', '修改失败');
        }
    }
//个人设置修改结束
    $info=$model->find($id);
    $this->smarty->assign('info',$info);
    $this->smarty->display('user_edit.html');
}
}








