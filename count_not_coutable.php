<?php

// PHP7 から countable でないものを count するようにすると Warning が出るように
var_dump(count("string"));

/*
Warning: count(): Parameter must be an array or an object that implements Countable in /Users/yoshiyuki_sakamoto/php-samplecode/count_not_coutable.php on line 3
int(1)
*/
