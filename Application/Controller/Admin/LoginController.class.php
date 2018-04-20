<?php
/*
 * 用户登录系统
 */
namespace Controller\Admin;
class LoginController extends BaseController{
    //生成验证码
    public function verifyAction(){
        $captcha=new \Lib\Captcha();
        $captcha->createVerify();
    }
    //安全退出
    public function logoutAction(){
        session_destroy();
        $this->success('index.php?p=Admin&c=Login&a=login');
    }
    //显示登录页面
    public function loginAction(){
        $model=new \Model\UserModel();  //实例化user表模型
        /*
         * 如果cookie中找到对应的用户，就直接跳转到登录页面
         * 如果从其他页面跳转过来不用取cookie
         */
        if(empty($_SERVER['HTTP_REFERER']) && $info=$model->getUserByCookie()){
            $_SESSION['user']=$info;
            $model->updateLoginInfo(); 
            $this->success('index.php?p=Admin&c=Admin&a=Admin');
        }
        //cookie中没有找到登录信息，显示登录界面并实现登录业务
        if(!empty($_POST)){
            //检查验证码是否正确
            $captcha=new \Lib\Captcha();
            if(!$captcha->checkVerify($_POST['passcode']))
                $this->error ('index.php?p=Admin&c=Login&a=login', '验证码错误');

            $username=$_POST['username'];   //用户名
            $pwd=$_POST['password'];        //密码
            //通过用户名和密码获取到用户信息登录成功，否则失败
            if($info=$model->getUserByNameAndPwd($username, $pwd)){
                $_SESSION['user']=$info;    //用户信息存放到数组中
                $model->updateLoginInfo();  //更新登录信息
                if(isset($_POST['remember'])){
                    $model->setMyCookie($info['user_id'],$username,$pwd);
                }
                $this->success('index.php?p=Admin&c=Admin&a=admin', '登录成功');
            }else{
                $this->error('index.php?p=Admin&c=Login&a=login', '登录失败');
            }
        }
        $this->smarty->display('login.html');
    }
    //用户注册
    public function registerAction(){
        if(!empty($_POST)){
            //检查验证码是否正确
            $captcha=new \Lib\Captcha();
            if(!$captcha->checkVerify($_POST['passcode']))
                $this->error ('index.php?p=Admin&c=Login&a=login', '验证码错误');
            //上传头像
            $upload=new \Lib\Upload();
            if($path=$upload->uploadOne($_FILES['face'])){
                $data['user_face']=$path;
            }else{
                $this->error('index.php?p=Admin&c=Login&a=register', $upload->getError());
            }
            //上传头像结束
            $data['user_name']=$_POST['username'];
            $data['user_pwd']=md5($_POST['password']);
            $model=new \Core\Model('user');
            if($model->insert($data))
                $this->success ('index.php?p=Admin&c=Login&a=login', '注册成功,可以去登录了',1);
            else
                $this->error ('index.php?p=Admin&c=Login&a=register', '注册失败');
        }
        $this->smarty->display('register.html');
    }
}
