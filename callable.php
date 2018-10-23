<?php

class FuncClass {

    private $func;

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

    private function func() {
        echo 'これはメソッド' . PHP_EOL;
    }
}


$i = new FuncClass();
$i->exec();
