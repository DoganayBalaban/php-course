<?php
declare(strict_types=1);
function foo(int|float $x, int $y)
{
    return $x + $y;
}

echo foo(5.0, 10);
echo '<br>';

function sum(...$numbers): int|float
{

    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;

}

echo sum(5, 6, 7, 8, 9);
echo '<br>';

function deneme(int $x, int $y): int
{
    if ($x % $y === 0) {
        return $x / $y;
    }
    return $x;
}
$x = 6;
$y = 3;

echo deneme(y:$y, x:$x);