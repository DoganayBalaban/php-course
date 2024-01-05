<?php
//error_reporting, error_log, display_errors
var_dump(ini_get('error_reporting'));
var_dump(E_ALL);

var_dump(ini_get('display_errors'));

ini_set('error_reporting',E_ALL & ~E_WARNING);
ini_set('display_errors',0);
$array = [1];

echo $array[3];