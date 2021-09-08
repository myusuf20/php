<?php
// Recursive Function
/*
 - Recursive function adalah kemampuan function memanggil function dirinya sendiri.
 - Kadang memang ada banyak problem, yang lebih mudah diselesaikan menggunakan
   recursive function, seperti contohnya kasus factorial.
 */

// Contohnya Factorial Mengguanakan Loop
function factorialLoop(int $value): int {
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
}

var_dump(factorialLoop(6));

// Dari pada menggunakan Looping, lebih baik menggunakan Recursive
function factorialRecursive(int $value): int {
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}

var_dump(factorialRecursive(6));

// Problem Menggunakan Recursive
/*
 - Walaupun recursive function itu sangat menarik, namun kita perlu berhati - hati.
 - Jika recursive terlalu dalam, maka akan ada kemungkinan terjadi memory overflow,
   yaitu error dimana memory terlalu banyak digunakan di PHP.
 - Kenapa problem ini bisa terjadi? Karena ketika kita memanggil function, PHP akan menyimpannya
   dalam stack, jika function tersebut memanggil function lain, maka stack akan menumpuk terus,
   dan jika terlalu banyak, maka akan membutuhkan konsumsi memory besar, jika sudah melawti batas,
   maka akan terjadi error memory.
 */

// Contoh Penggunaan Recursive Yang Error
function loop(int $value) {
    if ($value == 0) {
        echo "End loop" . PHP_EOL;
    } else {
        echo "Loop-$value" . PHP_EOL;
        loop($value - 1);
    }
}

loop(3000000); // Ketika di looping 333203 terjadi Error pada Memory