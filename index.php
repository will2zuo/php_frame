<?php

/**
 * 入口文件
 * 1. 定义常量
 * 2. 加载函数库
 * 3. 启动框架
 */

define('PATH', '/Users/will.zuo/phpFrame');
define('IMMOC', PATH);
define('CORE', IMMOC.'/core');
define('APP', IMMOC.'/app');
define('MODULE', 'app');
define('DEBUG', true);

if (DEBUG) {
    // 错误显示的开关
    ini_set('display_errors', 'On');
}else {
    ini_set('display_errors', 'Off');
}

// 记载函数库
include CORE.'/common/function.php';
include CORE.'/imooc.php';

// new 一个类不存在就会触发这个方法
spl_autoload_register('\core\imooc::load');

\core\imooc::run();
