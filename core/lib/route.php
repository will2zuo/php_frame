<?php
namespace core\lib;

class route
{
    public $controller;
    public $action;

    public function __construct()
    {
        /**
         * 1. 隐藏 index.php
         * 2. 获取 url 参数部分
         */

        if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/') {
            // index/index
            $path = $_SERVER['REQUEST_URI'];
            $pathArr = explode('/', trim($path, '/'));
            if (isset($pathArr[0])) {
                $this->controller = $pathArr[0];
                unset($pathArr[0]);
            }

            if (isset($pathArr[1])) {
                $this->action = $pathArr[1];
                unset($pathArr[1]);
            }else {
                $this->action = 'index';
            }

            // url 多余部分处理 /id/1/str/2/test/3
            $count = count($pathArr) + 2;
            $i = 2;
            while ($i < $count) {
                if (isset($pathArr[$i + 1])) {
                    $_GET[$pathArr[$i]] = $pathArr[$i + 1];
                }

                $i = $i + 2;
            }

        }else {
            $this->controller = 'index';
            $this->action = 'index';
        }
    }
}
