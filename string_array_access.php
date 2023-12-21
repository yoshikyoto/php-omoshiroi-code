<?php

// PHP 7 でこのあたりの挙動が変わってめっちゃハマった記憶がある

// error_reporting を 0 にしてエラーが出ないようにする
// error_reporting(0);


echo '通常はこのように実装すると思う --------------' . PHP_EOL;
$array = null;
$array[0] = "hoge";
var_dump($array);

/* 結果
array(1) {
  [0]=>
  string(4) "hoge"
}
*/


echo 'null でもいい感じにやってくれる ------------' . PHP_EOL;
$array = null;
$array[0] = "hoge";
var_dump($array);



echo 'これはどうなる？ --------------------------' . PHP_EOL;
$tag = "";
$tag[0] = "flag";
var_dump($tag);



echo 'これはエラーになる --------------------------' . PHP_EOL;
$tag = 1;
$tag[0] = "flag";
var_dump($tag);
