<?php
//基础模型类
namespace Core;
class Model {
    protected $mypdo;	//保存mypdo对象
    private $table;     //操作的表名
    public function __construct($table='') {
            $this->initMyPDO();
            $this->getTable($table);
    }
    //初始化mypdo对象
    private function initMyPDO() {
            $this->mypdo=  MyPDO::getInstance($GLOBALS['config']['database']);
    }
    //获取表名
    private function getTable($table){
        $this->table=$table;
        if($table=='')
            $this->table=substr(basename(get_class($this)),0,-5);	//获取模型名
    }
    //获取表的主键
    private function getPrimaryKey(){
        $rs=  $this->mypdo->fetchAll("desc `{$this->table}`");
        foreach($rs as $rows){
            if($rows['Key']=='PRI')
                return $rows['Field'];
        }
        return null;
    }
    //封装insert方法
    public function insert($data){
        $keys=array_keys($data);
        $keys=array_map(function($k){
                return "`{$k}`";
        },$keys);
        $keys=implode(',',$keys);
        $values=array_values($data);
        $values=array_map(function($v){	
            $v=str_replace(array('<script','</script'),array('< script','< /script'),$v);
            return "'{$v}'";
        },$values);
        $values=implode(',',$values);
        //拼接SQL语句
        $sql="insert into `{$this->table}` ($keys) values ($values)";
        if($this->mypdo->exec($sql))
            return $this->mypdo->lastInsertId();
        return false;
    }
    //封装update方法
    public function update($data){
        $pk=  $this->getPrimaryKey();
        $keys=array_keys($data);
        $index=array_search($pk,$keys);
        unset($keys[$index]);
        $fields=array_map(function($k) use ($data){
                return "`{$k}`='{$data[$k]}'";
        },$keys);
        $fields=implode(',',$fields);
        $sql="update `{$this->table}` set $fields where `{$pk}`='{$data[$pk]}'";
        return $this->mypdo->exec($sql);
    }
    //封装delete方法
    public function delete($id){
        $pk=  $this->getPrimaryKey();
        $sql="delete from `{$this->table}` where `{$pk}`='$id'";
        return $this->mypdo->exec($sql);
    }
    //封装查询的方法,返回二维数组
    public function select($field='',$order='asc'){
        if($field=='')
            $field=  $this->getPrimaryKey ();
        $sql="select * from `{$this->table}` order by `{$field}` $order";
        return $this->mypdo->fetchAll($sql);
    }
    //封装查询的方法，返回一维数组
    public function find($id){
        $pk=  $this->getPrimaryKey();
        $sql="select * from `{$this->table}` where `{$pk}`='$id'";
        return $this->mypdo->fetchRow($sql);
        
    }
}

