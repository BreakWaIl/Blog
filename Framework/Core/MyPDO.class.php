<?php
namespace Core;
class MyPDO{
    private $type;      //数据库类型
    private $host;      //主机地址
    private $port;      //端口号
    private $dbname;    //数据库名
    private $charset;   //字符编码
    private $user;      //用户名
    private $pwd;       //密码
    private $pdo;       //PDO对象
    private static $instance;   //私有的静态属性保存MyPDO的单例
    private function __construct($config) {    //私有的构造函数阻止在类的外部实例化对象
        $this->initParam($config);
        $this->initPDO();
        $this->initException();
    }
    private function __clone(){ //私有的__clone()阻止在类的外部clone对象
    }
    public static function  getInstance($config=array()){  //公有的静态方法获取MyPDO的单例
        if(!self::$instance instanceof  self)
            self::$instance=new self($config);
        return self::$instance;
    }
    /*
     * 初始化成员变量
     * @param $config array 配置数组
     */
    private function initParam($config){
        $this->type=isset($config['type'])?$config['type']:'mysql';
        $this->host=isset($config['host'])?$config['host']:'127.0.0.1';
        $this->port=isset($config['port'])?$config['port']:'3306';
        $this->dbname=isset($config['dbname'])?$config['dbname']:'';
        $this->charset=isset($config['charset'])?$config['charset']:'utf8';
        $this->user=isset($config['user'])?$config['user']:'';
        $this->pwd=isset($config['pwd'])?$config['pwd']:'';
    }
    /*
     * 实例化pdo
     */
    private function initPDO(){
        try{
            $dsn="{$this->type}:host={$this->host};port={$this->port};dbname={$this->dbname};charset={$this->charset}";
            $this->pdo=new \PDO($dsn,  $this->user,  $this->pwd);
        } catch (Exception $e) {
            $this->showException($e);
        }        
    }
    /*
     * 设置自动抛出异常
     */
    private function initException(){
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
    }
    /*
     * 显示异常信息
     * @param $e object 错误对象
     * @parram $sql string 错误的SQL语句
     */
    private function showException($e,$sql=''){
        if($sql!='')
            echo "SQL语句执行失败<br>错误的SQL语句是：{$sql}<br>";
        echo '错误信息：'.$e->getMessage(),'<br>';
        echo '错误编号：'.$e->getCode(),'<br>';
        echo '错误文件：'.$e->getFile(),'<br>';
        echo '错误行号：'.$e->getLine(),'<br>';
        exit;
    }
    /*
     * 执行数据操作语句
     * @return 成功返回受影响的记录数，失败返回false
     */
    public function exec($sql){
        try
        {
            return $this->pdo->exec($sql);
        }catch(\PDOException $e){
            $this->showException($e, $sql);
        }
    }
    /*
     * 返回插入数据的自动增长的编号
     */
    public function lastInsertId(){
        return $this->pdo->lastInsertId();
    }
    
    /*
     * 获取PDOStatement对象
     * @param $sql string SQL语句
     * @return PDOStatement对象
     */
    private function getPDOStatement($sql){
        try
        {
            return $this->pdo->query($sql);
        } catch (Exception $e) {
            $this->showException($e);
        }
    }
    /*
     * 判断匹配类型
     * @param $type string 用户需要的类型
     * @return 常量 
     */
    private function getFetchType($type){
        $allow=array('num','assoc','both');
        if(!in_array($type, $allow))
            $type='assoc';
        switch($type){
            case 'num':
                return \PDO::FETCH_NUM;
            case 'assoc':
                return \PDO::FETCH_ASSOC;
            case 'both':
                return \PDO::FETCH_BOTH;
        }
    }
    /*
     * 获取一条记录
     * @param $sql string SQL语句
     * @param $type string 匹配类型  num,assoc,both
     * @return array 一维数组
     */
    public function fetchRow($sql,$type=''){
        $stmt=  $this->getPDOStatement($sql);
        $fetch_const=  $this->getFetchType($type);
        return $stmt->fetch($fetch_const);
    }
    /*
     * 匹配所有数据
     * @return array 二维数组
     */
    public function fetchAll($sql,$type=''){
        $stmt=  $this->getPDOStatement($sql);
        $fetch_const=  $this->getFetchType($type);
        return $stmt->fetchAll($fetch_const);
    }
    /*
     * 获取遗憾一列的数据
     */
    public function fetchColumn($sql){
        try{
             $stmt=  $this->getPDOStatement($sql);
             return $stmt->fetchColumn();
        } catch (Exception $e) {
            $this->showException($e);
        }
    }
    /*
     * 给参数添加单引号，如果参数中带有单引号就在单引号上加转义
     */
    public function addQuote($value){
        return $this->pdo->quote($value);
    }
}










