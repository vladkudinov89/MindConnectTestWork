<?php

use App\MainClass;

ini_set('display_errors',1);
error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));
require ROOT . '/vendor/autoload.php';

$main = new MainClass();

echo "Last word length is " . $main::last_word('test testing. Test erwwq');
echo  "<br>";
echo  "<br>";
echo "a date formatted in sql date format. " .
    $main::sql_date_format(
        "12/12/2014 02.02.02"
    );
echo  "<br>";
echo  "<br>";
echo "Extract text is:";
echo $main::extract_string("The quick [brown fox].Its li wd [test]. int [testing] sting ");