<?php

namespace core;

class imooc
{
    public static $classMap = [];
    public $assign;
    public static function run()
    {
        $route = new \core\lib\route();
        $controller = $route->controller;
        $action = $route->action;
        $controllerFile = APP.'/controller/'.$controller.'Controller.php';
        $controllerClass = '\\'.MODULE.'\controller\\'.$controller.'Controller';
        if (is_file($controllerFile)) {
            include $controllerFile;
            $ctrl = new $controllerClass();
            $ctrl->$action();
        }else {
            throw new \Exception('找不到控制器'.$controller);
        }
    }

    public static function load($class)
    {
        if (isset($classMap[$class])) {
            return true;
        }else {
            $class = str_replace('\\', '/', $class);
            $file = IMMOC.'/'.$class.'.php';
            if (is_file($file)) {
                include $file;
                self::$classMap[$class] = $class;
            }else {
                return false;
            }
        }
    }

    public function assign($name, $value)
    {
        $this->assign[$name] = $value;
    }

    public function display($file)
    {
        $file = APP.'/views/'.$file;
        if (is_file($file)) {
            extract($this->assign);
            include $file;
        }
    }
}
