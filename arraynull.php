<?php

$a = [];

error_reporting(E_ALL);

// array の key にアクセスした時の警告　あり・なし　がややこしい

// 警告なし
var_dump(isset($a['hoge']));

// 警告なし
var_dump($a['hoge'] ?? null);

// Warning
var_dump($a['hoge'] ? "a" : "b");

// Warning
var_dump($a['hoge'] === null);
