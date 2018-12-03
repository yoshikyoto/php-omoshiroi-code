<?php

$a = [
	'k1' => false,
	'k2' => false,
];

$u = array_unique($a);

var_dump($u); // => ['k1' => false]
var_dump($u == array(false));
