<?php
require_once 'Transactions.php';

/*
$class = 'Transaction';
$transactions = (new $class(100,'transactions'))
    ->addTax(8)
    ->applyDiscount(10)
    ->getAmount();
*/

/*
$transactions = (new Transactions(100,'transactions'))
    ->addTax(8)
    ->applyDiscount(10)
    ->getAmount();
*/

/*
$transactions1 = (new Transactions(100,'transactions 1'))
    ->addTax(8)
    ->applyDiscount(10);
$transactions2 = (new Transactions(200,'transactions 2'))
    ->addTax(8)
    ->applyDiscount(15);
var_dump($transactions1->getAmount(),$transactions2->getAmount());
*/

$amount = (new Transactions(100,'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(10)
    ->getAmount();
var_dump($amount);
echo '<br>';

//$transactions->addTax(8);
//$transactions->applyDiscount(10);

/*
var_dump($transactions);

$transactions->description='hellow world';
var_dump($transactions->amount);
var_dump($transactions->description);
*/

$str = '{"a":1,"b":2,"c":3}';
$arr = json_decode($str);
var_dump($arr);
var_dump($arr->a);
echo '<br>';

$obj = new \stdClass();
$obj->a = 1;
$obj->b=2;
var_dump($obj);
echo '<br>';

$array = [1,2,3];
$object = (object)$array;
var_dump($object);