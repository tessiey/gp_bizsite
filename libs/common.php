<?php
$rootDomain = $_SERVER['HTTP_HOST'];
if(substr_count($rootDomain, '.')>1){
    $rootDomain = explode('.', $_SERVER['HTTP_HOST']);
    $rootDomain = "{$rootDomain[sizeof($rootDomain)-2]}.{$rootDomain[sizeof($rootDomain)-1]}";
}
define('ROOT_DOMAIN', $rootDomain);
define('ROOT_PATH', dirname(__DIR__));

// 强制设置Session Cookie信息
ini_set('session.cookie_path', '/');
ini_set('session.gc_maxlifetime', '86400');
// ini_set('session.cookie_domain', '.'.ROOT_DOMAIN);
ini_set('session.cookie_domain', $_SERVER['HTTP_HOST']);

ini_set('display_errors', 'on');
ini_set('date.timezone','Asia/Shanghai');
error_reporting( E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);


// 开启会话
session_start();

require_once ROOT_PATH . "/libs/db_connection.php";


// 载入缓存文件
$ent_info = require_once ROOT_PATH . "/libs/cache/ent_info.php";
