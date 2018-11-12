<?php

function methodParameters($a, $b) {
    var_dump($a);
    var_dump($b);
}

// nomally
methodParameters("fizz", 3);

// Few parameters
methodParameters("fizz");

/*
Fatal error: Uncaught ArgumentCountError: Too few arguments to function methodParameters(), 1 passed and exactly 2 expected
*/
