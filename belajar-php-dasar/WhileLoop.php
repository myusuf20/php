<?php
// While Loop
/*
 - While Loop adalah versi perulangan yang lebih sederhana dibanding for loop.
 - Di while loop, hanya terdapat kondisi perulangan, tanpa ada Init Statement, dan Post Statement.
 */

$counter = 1;

while ($counter <= 10) {
    echo "Hello While Loop : " . $counter . PHP_EOL;
    $counter++;
}

// Syntax Alternatif While Loop
$counter = 1;

while ($counter <= 10) :
    echo "Hello While Loop : " . $counter . PHP_EOL;
    $counter++;
endwhile;