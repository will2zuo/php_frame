<?php

namespace core\lib\drive\log;
use core\lib\conf;

class file
{
    public $path;
    public function __construct()
    {
        $this->path = conf::get('OPTION', 'log')['PATH'];
    }

    public function log($message, $file = 'log')
    {
        // 确定文件存储位置是否存在
        // 存在写入日志
        if (!is_dir($this->path.date('YmdH'))) {
            mkdir($this->path.date('YmdH'), '0777', true);
        }
        $path = $this->path.date('YmdH').'/'.$file.'.php';
        $message = date('Y-m-d H:i:s') . ' | '.json_encode($message);
        return file_put_contents($path, $message.PHP_EOL, FILE_APPEND);
    }
}
