<?php

class Sample {
    public function __call($name, $args) {
        var_dump($name);
        var_dump($args);
    }
}

$sample = new Sample();

$sample->go('hoge');

$sample->gogo();
