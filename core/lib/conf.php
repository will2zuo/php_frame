<?php

namespace core\lib;

class conf
{
    public static $conf = [];
    public static function get($name, $file)
    {
        /**
         * 1. 判断文件是否存在
         * 2. 判断配置是否存在
         * 3. 缓存文件
         */

        if (isset(self::$conf[$file])) {
            return self::$conf[$file][$name];
        }

        $path = IMMOC.'/core/config/'.$file.'.php';
        if (is_file($path)) {
            $conf = include $path;
            if (isset($conf[$name])) {
                self::$conf[$file] = $conf;
                return $conf[$name];
            }else {
                throw new \Exception('没有这个配置'.$name);
            }
        }else {
            throw new \Exception('找不到配置文件'.$file);
        }
    }

    public static function all($file)
    {
        if (isset(self::$conf[$file])) {
            return self::$conf[$file];
        }

        $path = IMMOC.'/core/config/'.$file.'.php';
        if (is_file($path)) {
            $conf = include $path;
            self::$conf[$file] = $conf;
            return $conf;
        }else {
            throw new \Exception('找不到配置文件'.$file);
        }
    }
}
