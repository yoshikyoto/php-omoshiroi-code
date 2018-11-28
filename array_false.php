<?php

$a = [
	'k1' => false,
	'k2' => false,
];

$u = array_unique($a);

var_dump($u);
var_dump($u == array(false));
