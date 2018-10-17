<?php

$a = [
    'fizz',
];

function changeArray($a) {
    $a[] = 'buzz';
}

changeArray($a);

// 参照私なので buzz は追加されていない
var_dump($a);
