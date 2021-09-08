<?php
// Ternary Operator
/*
 - Kadang ada kasus kita butuh melakukan pengecekan kondisi menggunakan if statement,
   lalu jika benar kita ingin memberi nilai terhadap variable dengan nilai X dan jika salah dengan nilai Y.
 - Penggunaan if statement pada kasus seperti bisa dipersingkat menggunakan ternary operator.
 - Ternary operator menggunakan kata kunci ? dan :
 */

$gander = "PRIA";
$hi = null;

if ($gander == "PRIA") {
    $hi = "Hi bro!";
} else {
    $hi = "Hi nona!";
}

echo $hi . PHP_EOL;

// Bila menggunakan Ternary Operator akan menjadi seperti dibawah ini :

$gander = "WANITA";
$hi = $gander == "PRIA" ? "Hi Bro!" : "Hi Nona!";

echo $hi . PHP_EOL;