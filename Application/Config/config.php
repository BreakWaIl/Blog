<?php
return array(
    //数据库配置
    'database'  =>array(
            'dbname'    =>  'data',
            'user'      =>  'root',
            'pwd'       =>  'root'
    ),
    //应用程序配置
    'app'       =>  array(
        'debug'         =>      true,   //开发模式
        'upload_path'   =>  './Public/Uploads/',
         'upload_size'  =>  1024*1024,
         'upload_type'  =>  array('image/jpeg','image/png','image/gif'),
        
        'default_platform'      =>  'Home',
        'default_controller'    =>  'Index',
        'default_action'        =>  'index',
        'secure_key'            =>  '123'   //秘钥
    )
);












