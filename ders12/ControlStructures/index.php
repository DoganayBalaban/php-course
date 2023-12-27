<?php
$score = 95;
if ($score > 90) {
    echo 'çok';
    if ($score >= 95){
        echo '+';
    }
} elseif ($score < 50) {
    echo 'az';
} else {
    echo "hatalı";
}