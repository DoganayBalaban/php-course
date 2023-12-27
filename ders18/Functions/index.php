<?php

function foo()
{
    echo 'Hello World';
}
echo '<br>';
function foo2()
{
    return 'Hello World';
}
echo '<br>';
foo();
echo '<br>';
foo2();
echo '<br>';
var_dump(foo());
echo '<br>';
var_dump(foo2());
echo '<br>';

$x = foo2();
echo $x;
echo '<br>';

function foo3()
{
    echo 'Foo';
    function bar()
    {
        echo 'Bar';
    }
}
foo3();
bar(); //foo3 çalışmadan bar çalışmaz
echo '<br>';
function deneme():int
{
    return '1';
}
var_dump(deneme());
echo '<br>';
function deneme2():void
{
    return;
}
var_dump(deneme2());