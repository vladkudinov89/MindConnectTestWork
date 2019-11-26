<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));
require ROOT . '/vendor/autoload.php';

$test = new \App\MainClass();

echo "Last word length is " . $test::last_word('test testing. Test erwwq');