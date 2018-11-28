<?php

$a = [
	['key1' => 'value1'],
	['key1' => 'value1'],
];

var_dump($a);
var_dump(array_values(array_unique($a)));

$b = [];
$b[] = $a[0];

var_dump($b);


var_dump(in_array($a[1], $b));
