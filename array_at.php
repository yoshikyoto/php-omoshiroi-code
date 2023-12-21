<?php

$a = [];

// PHP Warning:  Undefined array key "not" in /Users/yoshiyuki.sakamoto/php-omoshiroi-code/array_at.php on line 5
// ただ、 warning のため処理は普通に進んで、 string(9) "falsedesu" になる
if ($a['not'] !== null) {
	var_dump('truedesu');
} else {
	var_dump('falsedesu');
}
