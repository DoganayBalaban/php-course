<?php

#Scalar Types
# bool true or false
$completed = true;
$isTrue=false; //boşluk döndürür
# ınt 1, 2, 3
$score = 75;
# float 1.1, 2.4, -13.4
$price = 8.99;
# string hello world
$greeting = 'Hello World';
echo $completed . '</br>';
echo $isTrue. '</br>';
echo $score . '</br>';;
echo $price . '</br>';;
echo $greeting . '</br>';;

var_dump($score);
echo gettype($completed);
echo  '</br>';
# Compound type
# array
$companies = [1,2,3,4.5,6.5,'a','B',true];
echo $companies. '</br>';;
print_r($companies);
# object
# callable
# iterable

# Special type
# resource
# null - no value , nothing
echo  '</br>';
$x = (int)'5';
var_dump($x);


?>