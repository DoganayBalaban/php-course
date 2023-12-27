<?php
declare(strict_types=1);
function sum(int $x, int$y)
{
    $z = $x + $y;
    return $z;
}

$x = sum(5,10);
echo $x;

$a = 3;
$b = 5;
$c = $x * $y;

function onTick()
{
    echo 'Tick<br>';
}
register_tick_function('onTick');
declare(ticks=1);
$length = 10;
$i=0;

while ($i < $length){
    echo $i++ . '<br>';
}


function sum2(int $x, int$y)
{
    $z = $x + $y;
    return $z;
}
echo sum2((int)'5',10);