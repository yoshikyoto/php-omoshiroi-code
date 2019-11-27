<?php

var_dump(is_numeric("0.234"));
// bool(true)
// 少数でもnumericなので注意

var_dump(is_numeric(0.234));
// bool(true)
// 型はstringでもfloatでもよい

var_dump(is_float("0.234"));
// bool(false)
// これは型のチェックになる
