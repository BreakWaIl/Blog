<?php
/*
 * 基础控制器
 */
namespace Core;
abstract class Controller{
    protected $smarty;
    public function __construct() {
        $this->initSession();
        $this->initSmarty();
    }
    //开启会话
    private function initSession(){
        //@session_start();
        new \Lib\Session();
    }
    //初始化Smarty
    private function initSmarty(){
        $this->smarty=new \Smarty();
        $this->smarty->setTemplateDir(__VIEW__);  //设置模板文件夹
        $this->smarty->setCompileDir(__VIEWC__);  //设置混编文件夹
    }
    //封装jump方法,正确跳转
    protected function success($url,$info='',$time=1){
        $this->jump($url, $info, $time, true);
    }
    //封装jump()方法，错误跳转
    protected function error($url,$info='',$time=3){
        $this->jump($url, $info, $time, false);
    }


    /*
     * 跳转的方法
     * @param $url string 跳转的URL地址
     * @param $info string 显示的信息
     * @param $time int 页面停留时间
     * @param $success bool 显示正确或错误的图标
     */
    private function jump($url,$info='',$time=3,$success=true){
        if($info=='')
            header ("location:{$url}");
         else{
             $img='true.fw.png';
             $class='success';
             if(!$success){
                 $img='error.fw.png';
                 $class='error';
             }
echo <<<str
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="{$time};url={$url}">
<title>无标题文档</title>
<style type="text/css">
body{
    text-align:center;
    padding-top:100px;
    font-size:24px;
}
.success{
    color:#090;
}
.error{
    color:#F00;
}
</style>
</head>

<body>

<img src="/Public/images/{$img}">
<h2 class="{$class}">{$info}</h2>
{$time}秒以后跳转
</body>
</html>           
str;
         }
         exit;
    }
}