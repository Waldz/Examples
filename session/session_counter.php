<?php

session_start();

if (!isset($_SESSION['timesPageReloaded'])) {
    $_SESSION['timesPageReloaded'] = 1;
}

if ($_SESSION['timesPageReloaded']%2 == 1) {
    echo 'VAR1 (odd reload)';
} else {
    echo 'VAR2 (even reload)';
}

$_SESSION['timesPageReloaded']++;
