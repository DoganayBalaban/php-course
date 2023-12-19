<?php
$firstname = "Will";
$lastname =" $firstname Smith";
echo $lastname . '<br/>';

$name = $firstname . " " . $lastname;

echo $name . '<br/>';
echo $name[1];
$name[1] = "I";
echo '<br>'.$name.'<br>';
var_dump($name);
echo '<br>';

//Heredoc
$x = 1;
$y = 2;

$text = <<<TEXT
Line 1 $x
Line 2 $y
Line 3
TEXT;
echo nl2br($text);

//Nowdoc

$text = <<<'TEXT'
Line 1 $x
Line 2 $y
Line 3
TEXT;
echo '<br>';
echo nl2br($text);