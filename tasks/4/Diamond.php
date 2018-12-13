<?php

if ($argc > 2 || $argc <= 0) {
    die("base should be int and should not contain spaces\n");
}

$base = $argv[1];

for ($i = 0; $i < $base; $i++) {
    for ($j = $i; $j < $base; $j++) {
        echo ' ';
    }
    for ($j = 2 * $i - 1; $j > 0; --$j) {
        echo '*';
    }

    echo PHP_EOL;
}

for ($i = $base; $i > 0; $i--) {
    for ($j = $i; $j < $base; $j++) {
        echo ' ';
    }
    for ($j = 2 * $i - 1; $j > 0; --$j) {
        echo '*';
    }
    echo PHP_EOL;
}

