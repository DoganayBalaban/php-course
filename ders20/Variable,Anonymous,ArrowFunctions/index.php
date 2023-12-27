<?php
function sum(int|float ...$numbers): int|float
{
    return array_sum($numbers);
}

$x = 'sum';
$y = 'sub';

if (is_callable($x)) {
    echo $x(1, 2, 3, 4);
} else {
    echo 'Not Callable';
}
echo '<br>';

if (is_callable($y)) {
    echo $x(1, 2, 3, 4);
    echo '<br>';
} else {
    echo 'Not Callable';
    echo '<br>';
}
// ananymous functions
$a = 1;
$sum = function (int|float ...$numbers) use ($a): int|float {
    $a = 12;
    echo $a . '<br>';
    return array_sum($numbers);
};

echo $sum(1, 2, 3, 4);
echo '<br>';
echo $a;
echo '<br>';
$array = [1,2,3,4];

$array2 = array_map(function ($element){
    return $element * 2;
},$array);
echo '<pre>';
print_r($array);

print_r($array2);
echo '</pre>';

// arrow functions
$sayilar = [1,2,3,4];
$sayilar2 = array_map(fn($number) => $number * $number,$sayilar);
echo '<pre>';
print_r($sayilar2);
echo '</pre>';
