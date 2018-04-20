<?php
/*
 * 后台基础控制器
 */
namespace Controller\Admin;
class BaseController extends \Core\Controller{
    public function __construct(){
        parent::__construct();
        $this->checkLogin();
    }
    //判断是否登录成功
    private function checkLogin(){
        if(strtoupper(CONTROLLER_NAME)=='LOGIN')    //login控制器不需要检查令牌
            return;
        if(empty($_SESSION['user'])){
            $this->error ('index.php?p=Admin&c=Login&a=login');
        }
    }
}
