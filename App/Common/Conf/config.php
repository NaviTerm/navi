<?php
return array(
	//'配置项'=>'配置值'
	    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'navi',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '123456',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'dh_',    // 数据库表前缀
    'SHOW_PAGE_TRACE' =>true, // 显示页面Trace信息
    // 'TMPL_ENGINE_TYPE'=>'Smarty'
    
    'MODULE_ALLOW_LIST'    =>    array('Home','Admin'),// 允许访问的模块列表
    'DEFAULT_MODULE'       =>    'Admin',  // 默认模块
    // 'URL_HTML_SUFFIX'=>'htm'
     'URL_MODEL' => '2',//开启伪静态
);