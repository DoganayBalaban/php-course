<?php
#Aritmetik operatörler
$x = 10;
$y = 2;
var_dump($x + $y);
var_dump($x - $y);
var_dump($x * $y);
var_dump($x / $y);
var_dump($x % $y);
var_dump($x ** $y); // üs alma
echo '<br>';
echo '<br>';

#Assiginment operators
$a = $b = 4;
var_dump($a, $b);
var_dump($a += 3);
var_dump($a -= 3);
var_dump($a *= 3);
var_dump($a /= 3);
var_dump($a **= 3);

echo '<br>';
echo '<br>';
#string operators
$z = 'Hello';
$z = $z . 'World';
$z .= 'World';
echo $z;

echo '<br>';
echo '<br>';
#Comparison Operators
$c = 5;
$v = '3';
$h = 6;
var_dump($c == $v);
var_dump($c <> $v); // farklı mı
var_dump($c > $v);
var_dump($c < $v);
var_dump($c >= $v);
var_dump($c <= $v);
var_dump($c ?: $v);
var_dump($c === $v); #data tiplerini de kontrol eder.
echo '<br>';
echo '<br>';

#error control operators
$c = @file('foo.txt'); // sayfa yok hatası @ işareti konulunca hata silinir

echo '<br>';
echo '<br>';
#arttırma azaltma operatörleri
echo $x;
echo '<br>';
echo $x++; // ilk değer döndürür sonra arttırır
echo '<br>';
echo $x--; // ilk değer döndürür sonra azaltır
echo '<br>';
echo ++$x; // ilk arttırır sonra döndürür
echo '<br>';
echo --$x; // ilk azaltır sonra döndürür
echo '<br>';
echo '<br>';

#logical operators
$x = true;
$y = false;
var_dump($x && $y); # ve
var_dump($x || $y); # veya
var_dump(!$x && $y); # not x and y
echo '<br>';
echo '<br>';
#Bitwise Operators
$x = 6;
$y = 3;
// 110
// &
// 011
//-----
// 010 = 2
var_dump($x & $y);
// 110
// |
// 011
//-----
// 111 = 7
var_dump($x | $y);
// 110
// ^
// 011
//-----
// 101 = 5
var_dump($x ^ $y);
// 110
// ~
//001
// &
// 011
//-----
// 001 = 1
var_dump(~$x & $y);
// 110
// <<
// 110000 = 48
var_dump($x << $y);
// 110
// >>
// 0
var_dump($x >> $y);

echo '<br>';
echo '<br>';
$x = ['a' => 1, 'b' => 2, 'c' => 3];
$y = ['d', 'e', 'f', 'g', 'h'];
$z = $x + $y;
$p = $x == $y;
$o = $x === $y;
print_r($z);
var_dump($p);
var_dump($o);