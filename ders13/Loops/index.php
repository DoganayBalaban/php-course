<?php

#while
$i = 0;
while ($i <= 15) {
    echo $i++;
}

#do while
do {
    echo $i++ .'<br>';
} while ($i <= 15);
#for
for ($i = 0; $i < 15; $i++) {
    echo $i .'<br>';
}
$text = ['a','b','c','d'];
$length = count($text);
for ($j = 0; $j < $length; $j++) {
    echo $text[$j]. '<br>';
}
#foreach
$programmingLanguages = ['php','java','c++','go','rust'];

foreach ($programmingLanguages as $key => $languages){
    echo $key . ': ' . $languages . '<br>';
}

$user = [
    'name' => 'Gio',
    'email' => 'gio@email.com',
    'skills' => ['php','graphql','react'],
];
foreach ($user as $item => $value){
    echo $item . ': ' . json_encode($value). '<br>';
}