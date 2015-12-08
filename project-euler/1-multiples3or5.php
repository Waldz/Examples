<?php

$i = 1;
$sum = 0;
while ($i<1000) {
    if ($i % 3==0) {
        echo $i."\n";
        $sum += $i;
    } else if ($i % 5==0) {
        $sum += $i;
        echo $i."\n";
    }
    $i++;
}

echo 'SUM: '.$sum;
