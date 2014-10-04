<?php

$string = '11112333335622411';

preg_match_all('/(.)\1*/', $string, $matches);
var_dump($matches[0]);
