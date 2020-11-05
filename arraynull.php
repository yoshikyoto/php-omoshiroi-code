<?php

$a = [];

error_reporting(E_ALL);

var_dump(isset($a['hoge']));
// var_dump($a['hoge']);
var_dump($a['hoge'] ?? null);

var_dump($a['hoge'] ? "a" : "b");
