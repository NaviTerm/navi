<?php
return array(
	//'配置项'=>'配置值'
    'LOAD_EXT_CONFIG' => 'config.inc',//引入配置文件
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'qdm114262662.my3w.com', // 服务器地址
    'DB_NAME'               =>  'qdm114262662_db',          // 数据库名
    'DB_USER'               =>  'qdm114262662',      // 用户名
    'DB_PWD'                =>  '12345678',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'dh_',    // 数据库表前缀

    'URL_CASE_INSENSITIVE' =>   true,   //URL不区分大小写
    // 'TMPL_ENGINE_TYPE'=>'Smarty'
    'MODULE_ALLOW_LIST'      =>    array('Home','Admin'),// 允许访问的模块列表
    'DEFAULT_MODULE'         =>    'Home',  // 默认模块
    // 'URL_HTML_SUFFIX'=>'htm'
    'DEFAULT_FILTER'         =>  '', // 默认参数过滤方法 用于I函数...
    'ERROR_PAGE'             =>  '/404.html',//定义404页面

    /* 错误页面模板 */
/*  'TMPL_ACTION_ERROR'     =>  MODULE_PATH.'View/Public/error.html', // 默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS'   =>  MODULE_PATH.'View/Public/success.html', // 默认成功跳转对应的模板文件
    'TMPL_EXCEPTION_FILE'   =>  MODULE_PATH.'View/Public/exception.html',// 异常页面的模板文件*/
);