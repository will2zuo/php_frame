<?php


namespace core\lib;


class log
{
    public static $class;
//    public function __construct()
//    {
//        $this->path = conf::get('DRIVE', 'log')['PATH'];
//    }
    // 1. 确定日志的存储方式
    // 2. 写日志

    public static function init()
    {
        $drive = conf::get('DRIVE', 'log');
        $class = '\core\lib\drive\log\\'.$drive;
        self::$class = new $class;
    }

    public static function log($message, $file = 'log')
    {
        self::$class->log($message, $file);
    }
}
