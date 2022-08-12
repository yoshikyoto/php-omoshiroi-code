<?php

// str_replace(置換前, 置換後, 文字列);
var_dump(str_replace('\*', '.*', '*'));
var_dump(str_replace('\*', '.*', 'hoge-*-fuga'));
var_dump(str_replace('\*', '.*', '\*'));
