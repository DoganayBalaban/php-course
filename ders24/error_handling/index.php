<?php
error_reporting(E_ALL & ~E_WARNING);
trigger_error('Example Error', E_USER_WARNING);

function errorHandler(
    int $type,
    string $msg,
    ?string $file = null,
    ?int $line = null
){
    echo $type . ': ' . $msg . ' in ' . $file . ' on line ' .$line;

    exit;
}
error_reporting(E_ALL & ~E_WARNING);
set_error_handler('errorHandler',E_ALL);
echo $x;