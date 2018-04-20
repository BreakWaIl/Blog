<?php
namespace Model;
class ArticleModel extends \Core\Model{
    //获取上一篇和下一篇
    public function getArticlePrevOrNext($art_id,$prev){
        if($prev){
            $sql="select * from article where art_id<$art_id and is_public=1 and is_recycle=0 order by art_id desc limit 1";
        }else{
            $sql="select * from article where art_id>$art_id and is_public=1 and is_recycle=0 order by art_id asc limit 1";
        }
        return $this->mypdo->fetchRow($sql);
    }
    //文章点赞 
    public function up($art_id){
        $sql='update article set art_up=art_up+1 where art_id='.$art_id;
        return $this->mypdo->exec($sql);
    }
    //通过关键字查找文章
    public function getArticleListByKeyWords($key){
        $sql="select * from article where art_label like '%{$key}%' and is_public=1 and is_recycle=0";
        return $this->mypdo->fetchAll($sql);
    }
    //获取article和category表、user表的数据
    public function getArticleList(){
        $sql= 'select * from article a,category c,user u where a.cat_id=c.cat_id and u.user_id=a.user_id and is_recycle=0 and is_public=1 order by is_top desc,art_id desc';
        return $this->mypdo->fetchAll($sql);
    }
    //创建索引词
    public function getLabel(){
        $sql="select art_label from article where is_public=1 and is_recycle=0";
        $rs=  $this->mypdo->fetchAll($sql,'num');
        foreach($rs as $rows){
            $result=preg_split('/,|，/',$rows[0],0,PREG_SPLIT_NO_EMPTY);
            foreach($result as $r){
                $r=  strtoupper($r);
                if(isset($array[$r]))
                    $array[$r]++;
                else
                    $array[$r]=1;
            }
        }
        arsort($array); //保持原来的键，反向排序
        return $array;
    }
    /*
     * 删除文章
     * @param $ids string 删除id通过逗号连接的字符串
     */
    public function deleteArticle($ids){
        $sql="update article set is_recycle=1 where art_id in ($ids)";
        return $this->mypdo->exec($sql);
    }
    /*
     * 拼接查询的SQL语句
     * @param $condition array 查询条件
     * @param $is_list bool true:查询结果SQL，false：查询数量SQL 
     */
    private function createSQL($condition,$is_list=true){
        if($is_list)
            $sql= 'select a.art_id,a.art_title,a.art_content,a.is_top,is_public,c.cat_name,a.art_time';
        else
            $sql='select count(*)';
        $sql.=' from article a,category c where a.cat_id=c.cat_id and is_recycle=0 and user_id='.$_SESSION['user']['user_id'];
        /*************通过类别查找************/
            $cat_array=array();         // 保存类别id数组
            if(isset($condition['cat_id'])){
                $cat_id=$condition['cat_id'];   //选中的cat_id
                $cat_model=new \Model\CategoryModel();
                $sub_cat=$cat_model->getCategoryTree($cat_id);  //获取cat_id的子级
                foreach ($sub_cat as $rows){        //子级下面所有cat_id
                    $cat_array[]=$rows['cat_id'];
                }
                $cat_array[]=$cat_id;   //当前cat_id和所有的子级cat_id数组
                $cat_ids=implode(',', $cat_array);  //将cat_id数组转成逗号连接的字符串
                if($cat_ids!='')
                    $sql.=" and c.cat_id in ($cat_ids)";
            }
            /*************通过标题查找************/
            if(isset($condition['title']))
                $sql.=" and art_title like '%{$condition['title']}%'";
            /*************通过内容查找************/
            if(isset($condition['content']))
                $sql.=" and art_content like '%{$condition['content']}%'";
            /*************通过是否公开查找************/
            if(isset($condition['is_public']))
                $sql.=" and is_public=".$condition['is_public'];
            /*************通过是否置顶查找************/
            if(isset($condition['is_top']))
                $sql.=" and is_top=".$condition['is_top'];
            if($is_list)
                $sql.=' order by is_top desc,art_id desc';
            return $sql;
    }
    //通过条件获取满足条件的记录数
    public function getArticleCount($condition){
        $sql=$this->createSQL($condition,false);
        return $this->mypdo->fetchColumn($sql);
    }
    //通过条件检索文章 
    public function getArticleListByCondition($condition,$startno,$pagesize){
        $sql=$this->createSQL($condition,true);
        $sql.=" limit $startno,$pagesize";
        return $this->mypdo->fetchAll($sql);
    }
	//显示回收站文章内容列表
    public function getRbList(){
        $sql= 'select a.art_id,a.art_title,a.art_content,a.is_top,is_public,c.cat_name,a.art_time from article a,category c where a.cat_id=c.cat_id and is_recycle=1 order by is_top desc,art_id desc';
        return $this->mypdo->fetchAll($sql);
    }
	/*
     * 删除回收站文章
     * @param $ids string 删除id通过逗号连接的字符串
     */
    public function delRb($ids){
        $sql="delete from article where art_id in ($ids)";
        return $this->mypdo->exec($sql);
    }
    /*
     * 还原回收站文章
     * @param $ids string 删除id通过逗号连接的字符串
     */
    public function rcRb($ids){
        $sql="update article set is_recycle=0 where art_id in ($ids)";
        return $this->mypdo->exec($sql);
    }
    /*
     * 拼接查询的SQL语句
     * @param $condition array 查询条件
     * @param $is_list bool true:查询结果SQL，false：查询数量SQL
     */
    private function createRbSQL($condition,$is_list=true){
        if($is_list)
            $sql= 'select a.art_id,a.art_title,a.art_content,a.is_top,is_public,c.cat_name,a.art_time';
        else
            $sql='select count(*)';
        $sql.=' from article a,category c where a.cat_id=c.cat_id and is_recycle=1 and user_id='.$_SESSION['user']['user_id'];
        /*************通过类别查找************/
        $cat_array=array();         // 保存类别id数组
        if(isset($condition['cat_id'])){
            $cat_id=$condition['cat_id'];   //选中的cat_id
            $cat_model=new \Model\CategoryModel();
            $sub_cat=$cat_model->getCategoryTree($cat_id);  //获取cat_id的子级
            foreach ($sub_cat as $rows){        //子级下面所有cat_id
                $cat_array[]=$rows['cat_id'];
            }
            $cat_array[]=$cat_id;   //当前cat_id和所有的子级cat_id数组
            $cat_ids=implode(',', $cat_array);  //将cat_id数组转成逗号连接的字符串
            if($cat_ids!='')
                $sql.=" and c.cat_id in ($cat_ids)";
        }
        /*************通过标题查找************/
        if(isset($condition['title']))
            $sql.=" and art_title like '%{$condition['title']}%'";
        /*************通过内容查找************/
        if(isset($condition['content']))
            $sql.=" and art_content like '%{$condition['content']}%'";
        /*************通过是否公开查找************/
        if(isset($condition['is_public']))
            $sql.=" and is_public=".$condition['is_public'];
        /*************通过是否置顶查找************/
        if(isset($condition['is_top']))
            $sql.=" and is_top=".$condition['is_top'];
        if($is_list)
            $sql.=' order by is_top desc,art_id desc';
        return $sql;
    }
    //通过条件获取满足条件的记录数
    public function getRbCount($condition){
        $sql=$this->createRbSQL($condition,false);
        return $this->mypdo->fetchColumn($sql);
    }
    //通过条件检索文章
    public function getRbListByCondition($condition,$startno,$pagesize){
        $sql=$this->createRbSQL($condition,true);
        $sql.=" limit $startno,$pagesize";
        return $this->mypdo->fetchAll($sql);
    }
}










