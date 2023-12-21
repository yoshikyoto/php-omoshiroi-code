<?php

$a = [
	1 => "a",
	3 => "b",
	5 => "c",
	"d",
	"e",
];

// ちょっと不思議な key になる
var_dump($a);

// PHP の Array は key とは別に順序の概念を持っており、
// その順序ベースで slice が取られる
var_dump(array_slice($a, 0, 2));  // => [a, b]
var_dump(array_slice($a, 1, 2));  // => [b, c]
