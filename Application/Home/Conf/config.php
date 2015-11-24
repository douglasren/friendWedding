<?php
return array(
    //'配置项'=>'配置值'
    'DEFAULT_FILTER'   =>  'strip_tags,trim',
    'LOG_RECORD' => true,
    'LANG_SWITCH_ON' => true,
    'LANG_AUTO_DETECT' => true,
    'DEFAULT_LANG'      =>'en-us',
    'LANG_LIST'        => 'zh-cn,en-us',
    'VAR_LANGUAGE'     => 'l',

    'LOG_EXCEPTION_RECORD' => true,
    'LOG_LEVEL'  => 'EMERG,ALERT,CRIT,ERR,WARN,NOTIC,INFO,DEBUG,SQL',
    'HOME_PAGE' => '/',
    'STATIC_PATH' => '/Public/'. strtolower(MODULE_NAME). '/dev/',
    'ACTION_SUFFIX' => 'Action',


    // database
    'DB_TYPE'   => 'mysql',
    'DB_HOST'   => 'cm-launcher-theme.cq7ehxlwlj3o.us-west-2.rds.amazonaws.com-local',
    'DB_NAME'   => 'myself',
    'DB_USER'   => 'test_user',
    'DB_PWD'    => 'test123',
    'DB_PORT'   => 3306,

);