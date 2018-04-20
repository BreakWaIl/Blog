<?php
namespace Lib;
class Page{
    private $rowscount;     //总记录数
    private $pagecount;     //页面总数
    private $pageno;        //当前页码
    public $pagesize;      //页面大小
    public $startno;       //起始位置
    public function __construct($rowscount,$pagesize) {
        $this->initParam($rowscount, $pagesize);
    }
    //初始化分页数据
    private function initParam($rowscount,$pagesize){
        $this->rowscount=$rowscount;    //总记录数
        $this->pagesize=$pagesize;      //页面大小
        $this->pagecount=ceil($this->rowscount/$this->pagesize);    //总页数
        $this->pageno=isset($_REQUEST['pageno'])?(int)$_REQUEST['pageno']:1;    //当前页
        if($this->pageno<1){
            $this->pageno=1;
        }
        if($this->pageno>$this->pagecount && $this->pageno!=1)
            $this->pageno=  $this->pagecount;
        $this->startno=($this->pageno-1)*$this->pagesize;   //起始值

    }
    //拼接分页字符串
    public function show(){
        $url='index.php?p='.PLATFORM_NAME.'&c='.CONTROLLER_NAME.'&a='.ACTION_NAME.'&pageno=';
        $str="";
        $str.='<div class="panel-foot text-center">';
        $str.='<ul class="pagination"><li><a href="'.$url.(($this->pageno==1)?1:($this->pageno-1)).'">上一页</a></li></ul>';
        $str.='<ul class="pagination pagination-group">';
        for($i=1;$i<=$this->pagecount;$i++){
            if($i==$this->pageno)
                $str.='<li class="active"><a href="'.($url.$i).'">'.$i.'</a></li>';
            else
                $str.='<li><a href="'.($url.$i).'">'.$i.'</a></li>';
        }
        $str.='</ul>';
        $str.='<ul class="pagination"><li><a href="'.$url.(($this->pageno==$this->pagecount)?$this->pagecount:($this->pageno+1)).'">下一页</a></li></ul>';
        $str.='</div>';    
        return $str;
    }
}


