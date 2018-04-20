<?php
namespace Lib;
class Upload{
    private $path;  //文件上传路径
    private $size;  //文件允许大小
    private $type;  //文件允许上传的类型
    private $error; //保存错误信息
    public function __construct(){
        $this->path=$GLOBALS['config']['app']['upload_path'];
        $this->size=$GLOBALS['config']['app']['upload_size'];
        $this->type=$GLOBALS['config']['app']['upload_type'];
    }
    public function getError(){
        return $this->error;
    }
    /*
     * 文件上传的方法
     * @param $file array $_FIELS[]
     */
    public function uploadOne($file){
        if(!$this->checkError($file)){     //验证上传过程是否有误
            return false;
        }
        if(!$this->checkType($file)){       //验证格式
            return false;
        }
        if(!$this->checkSize($file)){       //验证大小
            return false;
        }
        if(!$this->checkHttpPost($file)){    //验证文件是否是http的post上传
            return false;
        }
        //创建文件夹
        $foldername=date('Y-m-d');      //文件夹名
        $folderpath=  $this->path.$foldername;  //文件夹路径
        if(!file_exists($folderpath))
            mkdir ($folderpath);
        //文件上传
        $filename=  uniqid('',true).strtolower(strrchr($file['name'],'.'));  //文件名
        $filepath=  $folderpath.DS.$filename;   //文件路径
        if(move_uploaded_file($file['tmp_name'], $filepath))
                return $foldername.'/'.$filename;
        else{
            $this->error='文件上传失败';
            return false;
        }
    }
    //检查上传过程中是否有误
    private function checkError($file){
        //$file['error']!=0表示文件上传有误
        if($file['error']!=0){
            switch ($file['error']){
                case 1:
                    $this->error='上传文件超出了PHP配置文件允许的最大值';
                    break;
                case 2:
                    $this->error='上传文件超出了表单允许的最大值';
                    break;
                case 3:
                    $this->error='只有部分文件上传';
                    break;
                case 4:
                    $this->error='上传文件为空';
                    break;
                case 6:
                    $this->error='找不到临时文件';
                    break;
                case 7:
                    $this->error='文件写入失败';
                    break;
                default:
                    $this->error='未知错误';
            }
            return false;
        }
        return true;
    }
    //验证上传格式
    private function checkType($file){
        $finfo=  finfo_open(FILEINFO_MIME);
        $info=finfo_file($finfo, $file['tmp_name']);
        $info_array=  explode(';', $info);
        if(!in_array($info_array[0], $this->type)){
            $this->error='文件类型上传错误，只能允许：'.implode(',', $this->type);
            return false;
        }
        return true;
    }
    //验证大小
    private function checkSize($file){
        if($file['size']>$this->size){
            $this->error='文件不能操作'.  number_format($this->size/1024,1).'K';
            return false;
        }
        return true;
    }
    //验证是否是http的post上传
    private function checkHttpPost($file){
        if(!is_uploaded_file($file['tmp_name'])){
            $this->error='文件必须是HTTP上传';
            return false;
        }
        return true;
    }
}