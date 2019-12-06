<?php

function arraysikatoranai(array $a) {
	var_dump($a);
}

var_dump((array)'あいうえお');
/*
array(1) {
  [0]=>
  string(15) "あいうえお"
}
*/

arraysikatoranai('あいうえお');
// PHP Fatal error:  Uncaught TypeError: Argument 1 passed to arraysikatoranai() must be of the type array, string given
