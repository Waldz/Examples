<?php

$primeNumbersUntil = 10;
$primeNumbers = [];

for ($i=2; $i<=$primeNumbersUntil/$i; $i++) {
    while ($primeNumbersUntil % $i == 0) {
        $pf[] = $i;
        $primeNumbersUntil = $primeNumbersUntil / $i;
    }
}

$i = 1;
$sum = 0;
while (true) {
    $number = isset($primeNumbers[$i-1]) ? $primeNumbers[$i-1] : 0;
    $number += isset($primeNumbers[$i-2]) ? $primeNumbers[$i-2] : 0;
    if ($number>4000000) {
        break;
    }

    $primeNumbers[$i] = $number;
    if ($number % 2 ==0) {
        $sum += $number;
    }
    
    $i++;
    echo $number;
    echo "\n";
}

echo 'SUM: '.$sum;
