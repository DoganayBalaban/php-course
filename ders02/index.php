<?php

//constant

$firstName = 'Gio';
$firstName = 'Joe';
echo $firstName;

define('STATUS_PAID','paid');
echo STATUS_PAID;
//define('name','value')

echo defined("STATUS_PAID");
//define lıysa 1 döner

const STATUS_PAID = 'paid';
echo STATUS_PAID;
//define ile aynı işlevi yapar. define şart bloklarında kullanılır

$paid = 'PAID';
define("STATUS_" . $paid, 4);

//const değişmeyen değerler için kullanılır

echo PHP_VERSION;

echo STATUS_PAID;

// magic constların nerde kullanıldığına göre değeri değişebilir
echo __LINE__; // line'a göre değeri değişir.

//variable variables
$foo = 'bar';
$$foo = 'baz';
//$bar = 'baz' işlevini yapar
echo $foo,$bar,${$foo}
?>