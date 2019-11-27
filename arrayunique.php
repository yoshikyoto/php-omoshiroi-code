<?php

$a = [
	['key1' => 'value1'],
	['key1' => 'value1'],
];

var_dump($a);
/*
array(2) {
  [0]=>
  array(1) {
    ["key1"]=>
    string(6) "value1"
  }
  [1]=>
  array(1) {
    ["key1"]=>
    string(6) "value1"
  }
}
*/

// unique とったらちゃんと unique になるのか
var_dump(array_values(array_unique($a)));
/* なる
array(1) {
  [0]=>
  array(1) {
    ["key1"]=>
    string(6) "value1"
  }
}
*/

$b = [];
$b[] = $a[0];

var_dump($b);
/*
array(1) {
  [0]=>
  array(1) {
    ["key1"]=>
    string(6) "value1"
  }
}
*/


var_dump(in_array($a[1], $b));
// true
