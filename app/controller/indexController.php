<?php

namespace app\controller;
use core\lib\model;

class indexController extends \core\imooc
{
    public function index()
    {
        $this->display('index.html');
    }

    public function add()
    {
        $this->display('add.html');
    }

    public function save()
    {

    }
}
