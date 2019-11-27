<?php

// t はその月が何日あるかがわかる
// https://www.php.net/manual/ja/function.date.php
// うるう年も判定できるのか

// 2007年はうるう年が無い
$time = new DateTime("2007-02-22 10:00:00");
var_dump($time->format('Y-m-t'));
// string(10) "2007-02-28" => 正しく判定できている

// 2008年はうるう年がある
$time = new DateTime("2008-02-22 10:00:00");
var_dump($time->format('Y-m-t'));
// string(10) "2008-02-29" => 正しく判定できている

// 2100年は4で割り切れるが、100で割り切れる年は
// うるう年ではなくなる
$time = new DateTime("2100-02-22 10:00:00");
var_dump($time->format('Y-m-t'));
// string(10) "2100-02-28" => 正しく判定できている

// 2000年100で割り切れるが、
// 400で割り切れる年はうるう年である
$time = new DateTime("2000-02-22 10:00:00");
var_dump($time->format('Y-m-t'));
// string(10) "2000-02-29" => 正しく判定できている
