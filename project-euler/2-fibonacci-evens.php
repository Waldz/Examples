<?php

$cacheFibonacci = [1, 2];
$i = 1;
$sum = 0;
while (true) {
    $number = isset($cacheFibonacci[$i-1]) ? $cacheFibonacci[$i-1] : 0;
    $number += isset($cacheFibonacci[$i-2]) ? $cacheFibonacci[$i-2] : 0;
    if ($number>4000000) {
        break;
    }

    $cacheFibonacci[$i] = $number;
    if ($number % 2 ==0) {
        $sum += $number;
    }

    $i++;
    echo $number;
    echo "\n";
}

echo 'SUM: '.$sum;
