<?php
/* INTEGER */

$x = 5;
$y = 0x2A; //hexadeximal
$z = 055; // prefix
$a = 0b11; // binary
$b = PHP_INT_MAX + 1;

//casting
$c = (int) true;
$d = (int) 5.9;//aşağı yuvarlanır


echo $x;
echo "</br>";
echo $y;
echo "</br>";
echo $z;
echo "</br>";
echo $a;
echo "</br>";
echo $b;
echo "</br>";
var_dump($b);
echo "</br>";
var_dump($c);
echo "</br>";
var_dump($d);
echo "</br>";
var_dump(is_int($x));