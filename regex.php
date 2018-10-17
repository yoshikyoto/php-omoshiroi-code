<?php

$origins = [
	'http://www.nicovideo.jp',
	'https://www.nicovideo.jp',
	'http://google.com',
	'www.nicovideo.jp',
];

// $regexp = 'https?:\/\/[^\/\?#]*\.nicovideo\.jp$';

foreach ($origins as $origin) {
	var_dump($origin);
	var_dump(preg_match('/https?:\/\/[^\/\?#]*\.nicovideo\.jp$/', $origin));
}
