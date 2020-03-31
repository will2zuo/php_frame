<?php

namespace app\controller;
use core\lib\model;

class indexController extends \core\imooc
{
    public function index()
    {
        // 加载模型
//        $model = new model();
//        $sql = "select * from users limit 1";
//        $results = $model->query($sql);
//
//         加载配置
//        $env = \core\lib\conf::get('CONTROLLER', 'route');
//        $env = \core\lib\conf::get('ACTION', 'route');

        $data = 'Hello world';
        $title = '视图文件';
        $this->assign('data', $data);
        $this->assign('title', $title);
        $this->display('index.html');
    }
}
