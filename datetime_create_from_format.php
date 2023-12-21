<?php

require_once __DIR__ . '/vendor/autoload.php';

$dateTime = DateTime::createFromFormat('Y-m', '2023-02');
var_dump($dateTime);
