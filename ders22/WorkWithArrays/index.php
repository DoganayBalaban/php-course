<?php
require 'helpers.php';

$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
prettyPrintArray(array_chunk($items,2,true));

$array1 = ['a', 'b', 'c'];
$array2 = [5,10,15];
prettyPrintArray(array_combine($array1,$array2));

$array = [1,2,3,4,5,6,7,8,9,10];
$even = array_filter($array,fn($number) => $number % 2 === 0);
prettyPrintArray($even);

$arrayKey = ['a' => 5, 'b' => 10, 'c' => 15, 'd' => 5, 'e' => 10];

$keys = array_keys($arrayKey,15);
prettyPrintArray($keys);

$array3 = [1,2,3,4,5,6];
$array3 = array_map(fn($number) => $number * 3, $array3);
prettyPrintArray($array3);

$array4 = [1,2,3];
$array5 = [4,5,6];
$merged = array_merge($array4,$array5);
prettyPrintArray($merged);

$invoiceItems = [
    ['price' => 9.99, 'qty'=>3, 'desc' =>'item 1'],
    ['price' => 29.99, 'qty'=>1, 'desc' =>'item 2'],
    ['price' => 149, 'qty'=>1, 'desc' =>'item 3'],
];
$total = array_reduce($invoiceItems,
    fn($sum,$item) => $sum + $item['qty'] * $item['price']
);
echo $total . '<br>';

$array6 = [1,2,3,4,5,6,7,8,9,10];
$key2 = array_search(4,$array6);
var_dump($key2);

prettyPrintArray(array_diff($array6,$array4));

$array7 = [1,5,3,8,2,6,7,4,9,10];
prettyPrintArray($array7);
asort($array7);
prettyPrintArray($array7);
