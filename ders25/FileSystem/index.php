<?php
/*
$dir = scandir(__DIR__);
var_dump($dir);
var_dump(is_dir($dir[2]));
var_dump(is_file($dir[2]));

mkdir('foo');
rmdir('foo');
*/

/*
mkdir('foo/bar', recursive: true);
rmdir('foo/bar');
*/

/*
if (file_exists('foo.txt')){
    echo filesize('foo.txt');

    file_put_contents('foo.txt','hello world');
    clearstatcache();

    echo filesize('foo.txt');
}else{
    echo 'File not found';
}
*/

/*
if (! file_exists('foo.txt')){
    echo 'File Not Found';
    return;
}
$file = fopen('foo.txt','r');
while (($line = fgets($file)) !== false){
    echo $line . '<br>';
}
fclose($file);
*/

/*
$content = file_get_contents('foo.txt',offset: 3,length: 2);
echo $content;
*/

file_put_contents('bar.txt','hello');
unlink('bar.txt');
copy('foo.txt','bar.txt');