<?php
// Do While Loop
/*
 - Do While Loop adalah perulangan yang mirip dengan while.
 - Perbedaannya hanya pada pengecekan kondisi.
 - Pengecekan kondisi di while loop dilakukan di awal sebelum perulangan dilakukan,
   sedangkan di Do While Loop dilakukan setelah perulangan dilakukan.
 - Oleh karena itu dalam Do While Loop, minimal pasti sekali perulangan dilakukan
   walaupun kondisi tidak bernilai true.
 */

$counter = 100;

do {
    echo "Hello While Loop : " . $counter . PHP_EOL;
    $counter++;
} while ($counter <= 10);

// Biasanya digunakan untuk pembuatan aplikasi tanya & jawab.