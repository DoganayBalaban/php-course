
<?php

echo "string print etmeye yarar echo daha hızlı";
print "echoya benzer değeri döndürür.";
$name = "değişken oluşturur";
echo $name;
$x = 1;
$y = $x;
$x = 3;
echo $y;
echo "1 döndürdü çünkü assign by value";
$firstname = "doganay";
echo "Hello $firstname";
echo 'hello' . $firstname;
?>
<!DOCTYPE html>
<html>
    <body>
        <h1>
             <?php
             //comment 1
             # comment
             /* comment */
                $x = 10;
                $y = 5;
                echo '<p>' . $x . ' . ' . $y .'</p>';

             ?>
            <?= "kısayoldan php echo tanımı" ?>
        </h1>
    </body>
</html>
