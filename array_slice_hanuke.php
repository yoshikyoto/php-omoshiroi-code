<?php

$a = [
	1 => "a",
	3 => "b",
	5 => "c",
	"d",
	"e",
];

var_dump($a);
var_dump(array_slice($a, 1, 2));
