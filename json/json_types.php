<?php

$string = "Hello";
echo sprintf("String: %s\n\n", json_encode($string));

$array = array(
    1, 2, 3);
echo sprintf("Array: %s\n\n", json_encode($array));

$struct = array(
    'property1' => 1,
    'property2' => 2,
);
echo sprintf("Associative array: %s\n\n", json_encode($struct));
