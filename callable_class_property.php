<?php

/**
 * callableなものをプロパティに突っ込んだときの挙動が面白い
 * PHP >= 7
 */
class FuncClass {

    private $func;
    
    private function func() {
        echo 'これはメソッド' . PHP_EOL;
    }

    public function __construct() {
        $this->func = function() {
            echo 'これはプロパティとして定義された関数' . PHP_EOL;
        };
    }

    public function exec() {
        echo '$this->func()' . PHP_EOL;
        $this->func();

        echo '($this->func)()' . PHP_EOL;
        ($this->func)();
    }
}


$i = new FuncClass();
$i->exec();
