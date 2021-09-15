<?php

var_dump("more_entropy=false");
$ids = [];
$ids[] = uniqid();
$ids[] = uniqid();
$ids[] = uniqid();
$ids[] = uniqid();
$ids[] = uniqid();
var_dump([$ids]);

var_dump("more_entropy=true");
$ids = [];
$ids[] = uniqid("", true);
$ids[] = uniqid("", true);
$ids[] = uniqid("", true);
$ids[] = uniqid("", true);
$ids[] = uniqid("", true);
var_dump($ids);
