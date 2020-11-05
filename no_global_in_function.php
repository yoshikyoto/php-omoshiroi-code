<?php

function doAaa() {
	require_once __DIR__ . "/no_global_in_function_required.php";
	var_dump($a);
}

doAaa();
