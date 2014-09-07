<?php
return array(
        'DB_TYPE' => 'mysql', // 数据库类型
        'DB_HOST' => 'localhost', // 服务器地址
        'DB_NAME' => 'thinkdb', // 数据库名
        'DB_USER' => 'root', // 用户名
        'DB_PWD' => '', // 密码
        'DB_PORT' => '3306', // 端口
        'DB_PREFIX' => 'tp_' ,// 数据库表前缀
        'SHOW_PAGE_TRACE' =>true // 显示页面Trace信息

        ,'LOAD_EXT_FILE' => 'common'//自定义加载函数文件
        ,'AUTOLOAD_NAMESPACE' =>array(
    		 'Lib'     => APP_PATH.'Lib',
		)
);