<?php

namespace app\controller;
use core\lib\model;

class indexController extends \core\imooc
{
    public function index()
    {
//        $model = new model();
//
//        $sql = "select * from users limit 1";
//        $results = $model->query($sql)->fetchAll();
        $data = 'Hello world';
        $title = '视图文件';
        $this->assign('data', $data);
        $this->assign('title', $title);
        $this->display('index.html');
    }
}
