<?php
/* BOOLEAN */

$isComplete = 0;
$isSuccess = (string) false;
$isBla = (string) true;


// Integers 0 - 0 = false
// floats 0.0 - 0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false

var_dump($isSuccess);
echo "</br>";
var_dump($isBla);
echo "</br>";
echo $isComplete; //true ise 1 false ise boş string döner
echo "</br>";
if ($isComplete){
    //do
    echo "success";
}else{
    //do
    echo "fail";
}