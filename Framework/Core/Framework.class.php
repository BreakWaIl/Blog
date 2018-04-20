<?php
namespace Core;
class Framework{
    public static function run(){
        self::initConst();
        self::initConfig();
        self::initError();
        self::initRoutes();
        self::initRegisterLoadClass();
        self::initDispatch();
    }
    //初始化错误显示
    private static function initError(){
        ini_set('error_reporting', E_ALL);
        if($GLOBALS['config']['app']['debug']){ //开发模式
            ini_set('display_errors', 'on');
            ini_set('log_errors', 'off');
        }else{      //运行模式
            ini_set('display_errors', 'off');
            ini_set('log_errors', 'on');
            ini_set('error_log', APP_PATH.'Log'.DS.'log.log');
        }
    }
    //定义路径常量
    private static function initConst(){
        define('DS', DIRECTORY_SEPARATOR);  //定义目录分隔符
        define('ROOT_PATH', getcwd().DS);      //定义根目录路径
        //定义一级目录
        define('APP_PATH', ROOT_PATH.'Application'.DS);  //定义Application目录的路径
        define('FRAMEWROK_PATH', ROOT_PATH.'Framework'.DS);
        //定义二级目录
        define('CONFIG_PATH', APP_PATH.'Config'.DS);
        define('CONTROLLER_PATH', APP_PATH.'Controller'.DS);
        define('MODEL_PATH', APP_PATH.'Model'.DS);
        define('VIEW_PATH', APP_PATH.'View'.DS);
        define('CORE_PATH', FRAMEWROK_PATH.'Core'.DS);
        define('LIB_PATH', FRAMEWROK_PATH.'Lib'.DS);
    }
    //加载配置文件
    private static function initConfig(){
        $GLOBALS['config']=require CONFIG_PATH.'config.php';
    }
    /*
     * 确定路由
     * $p用来确定平台
     * $c用来确定控制器
     * $a用来确定方法
     */
    private static function initRoutes(){
        $p=isset($_REQUEST['p'])?$_REQUEST['p']:$GLOBALS['config']['app']['default_platform'];
        $c=isset($_REQUEST['c'])?$_REQUEST['c']:$GLOBALS['config']['app']['default_controller'];
        $a=isset($_REQUEST['a'])?$_REQUEST['a']:$GLOBALS['config']['app']['default_action'];
        $p=ucfirst(strtolower($p));     //首字母大写
        $c=ucfirst(strtolower($c));	//首字母大写
        $a=strtolower($a);		//全部小写
        define('PLATFORM_NAME', $p);    //定义平台名称常量
        define('CONTROLLER_NAME', $c);  //定义控制器名称常量
        define('ACTION_NAME', $a);      //定义方法名称常量
        define('__URL__', CONTROLLER_PATH.$p.DS);   //当前请求的控制器的路径
        define('__VIEW__', VIEW_PATH.$p.DS);    //当前请求视图的路径
        define('__VIEWC__', APP_PATH.'View_c'.DS.$p.DS);    //定义当前混编文件目录地址
    }
    /*
     * 加载类的方法
     * @param $class_name string 需要加载的类
     */
    private static function loadClass($class_name) {
        //将Smarty类和保存路径映射到数组中
        $class_map=array(
            'Smarty'    =>  CORE_PATH.'Smarty'.DS.'Smarty.class.php'
        );
        //如果在映射数组中找到，就直接加载类
        if(isset($class_map[$class_name]))
            require $class_map[$class_name];
        
        $namespace=  dirname($class_name);      //获取命名空间
        $class_name=  basename($class_name);    //类名
        if(in_array($namespace,array('Core','Lib')))
                $path=FRAMEWROK_PATH.$namespace.DS.$class_name.'.class.php';
        elseif($namespace=='Model')
            $path=MODEL_PATH.$class_name.'.class.php';
        else
            $path=__URL__.$class_name.'.class.php';
        //如果文件存在就加载
        if(isset($path) && file_exists($path))
            require $path;
    }
    //将加载类的方法注册到autoload()栈中
    private static function initRegisterLoadClass(){
        spl_autoload_register('self::loadClass');
    }
    //请求分发
    private static function initDispatch(){
        $controller_name='\Controller\\'.PLATFORM_NAME.'\\'.CONTROLLER_NAME.'Controller';	//拼接控制器类名
        $action_name=ACTION_NAME.'Action';			//拼接方法名
        //请求分发
        $controller=new $controller_name();
        $controller->$action_name();
    }
}
