<?php

/**
 * PHP は Array と Hash が両方とも array になってしまっているため、 JSON 化の時にややこしい
 */

// {"user1":"hoge","user2":"fuga"}
echo json_encode([
    "user1" => "hoge",
    "user2" => "fuga",
]) . PHP_EOL;


// ["hoge","fuga"]
echo json_encode([
    "hoge",
    "fuga",
]) . PHP_EOL;


// これは、空のHashなのか、空のArrayなのか区別できない
// この場合は [] になってしまう
echo json_encode([]) . PHP_EOL;


// {} にしたい場合はこうする
echo json_encode(new \stdClass()) . PHP_EOL;
