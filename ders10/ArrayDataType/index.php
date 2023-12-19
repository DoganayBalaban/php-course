<?php

$programmingLanguages = ["PHP", "Java", "Python"];
echo $programmingLanguages[0];

var_dump(isset($programmingLanguages[3]));

$programmingLanguages[1]="C++";
echo $programmingLanguages[1];

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';
echo count($programmingLanguages);

$programmingLanguages[] = "C#";
array_push($programmingLanguages,'GO','HTML');

echo '<br>';

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';
echo count($programmingLanguages);

//Assign the specific key
$programmingLanguages = [
    'PHP' => '8.0',
    'Python' => '3.9'
];
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';
echo $programmingLanguages['PHP'];
$programmingLanguages = [
    'PHP' => [
        'creator' => "Doanay",
        'website'=> "php.com",
        'release year' => 2020,
        'isOpenSource'=>true
    ]
];
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

//overriding
$array = [true => 'a', 1 => 'b', '1' =>'c', 1.0=>'d'];
print_r($array);

$array2 = ['a','b',50=>'c','d','f'];
print_r($array2);
array_pop($array2); //sondan eleman siler
array_shift($array2); // baştan eleman siler
//dizi baştan otomatik indekslenir
print_r($array2);
unset($array2[0]);
print_r($array2);

