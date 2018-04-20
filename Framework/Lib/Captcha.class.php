<?php
namespace Lib;
class Captcha{
    private $len;   //验证码位数
    private $font;  //内置字体 1,2,3,4,5
    public function __construct($len=4,$font=5) {
        $this->len=$len;
        $this->font=$font;
    }
    //生成随机字符串
    private function createRandomString(){
       $char_array=  array_merge(range('a', 'z'),  range('A', 'Z'),  range(0, 9));
       $index=array_rand($char_array,  $this->len); //随机取出字符串，返回下标数组
       shuffle($index); //打乱数组
       $str='';
       foreach($index as $i){
           $str.=$char_array[$i];
       }
       $_SESSION['verify']=$str;
       return $str;
    }
    //创建验证码
    public function createVerify(){
        $str=  $this->createRandomString();
        $image=  imagecreate(80, 30);
        imagecolorallocate($image, 255, 255, 255);
        $color=  imagecolorallocate($image, 255, 0, 0);
        $x=(imagesx($image)-imagefontwidth($this->font)*$this->len)/2;
        $y=(imagesy($image)-imagefontheight($this->font))/2;
        imagestring($image, $this->font, $x, $y, $str, $color);
        header('Content-Type:image/png');
        imagepng($image);
        imagedestroy($image);
    }
    //检查验证码是否正确
    public function checkVerify($code){
        return strtoupper($code)==strtoupper($_SESSION['verify']);
    }
}



