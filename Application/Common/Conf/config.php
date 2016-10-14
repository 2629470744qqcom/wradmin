<?php
return array(
	//'配置项'=>'配置值'

    'URL_MODEL'             =>  2,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
    'TMPL_FILE_DEPR'        =>  '_', //模板文件CONTROLLER_NAME与ACTION_NAME之间的分割符

    'DB_TYPE'               =>  'mysqli',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'db_wradmin',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PREFIX'             =>  'wr_',    // 数据库表前缀
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8

    'image_path'            => '/public/images',
);