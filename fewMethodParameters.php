<?php

function methodParameters($a, $b) {
    var_dump($a);
    var_dump($b);
}

// Too many
methodParameters("fizz", 3, 4);
/* 引数が多くても問題なく動く
string(4) "fizz"
int(3)
*/

// nomally
methodParameters("fizz", 3);
/*
string(4) "fizz"
int(3)
*/

// Few parameters
methodParameters("fizz");

/*
Fatal error: Uncaught ArgumentCountError: Too few arguments to function methodParameters(), 1 passed and exactly 2 expected
*/
