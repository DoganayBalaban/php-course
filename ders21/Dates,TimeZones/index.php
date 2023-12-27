<?php
$currentTime = time();
echo date_default_timezone_get();
date_default_timezone_set('UTC');
echo date_default_timezone_get();

echo $currentTime . '<br>';
echo $currentTime + 5 * 24 * 60 * 60 . '<br>'; // 5 gün sonra
echo $currentTime - 24 * 60 * 60 . '<br>'; // dün

echo date('d/m/Y G:ia ').'<br>';
echo date('d/m/Y G:ia ',$currentTime + 5 * 24 * 60 * 60).'<br>';
echo date('d/m/Y G:ia ',$currentTime - 24 * 60 * 60).'<br>';

echo date('d/m/Y g:ia', mktime(0,0,0,4,10,null));

$date =  date('d/m/Y G:ia ',strtotime('tomorrow'));
echo '<pre>';
print_r(date_parse($date));
echo '</pre>';