<?php

echo "<h3>Deret Fibonacci PHP</h3>";

$a = 0; //bilangan pertama kita isi 0
$b = 1; //bilangan kedua kita isi 1

echo "$a $b "; //mencetak dua angka awal

for ($i = 1; $i <= 8; $i++) //memulai pengulangan untuk mencetak 10 digit angka Fibonacci. diisi angka 8 karena ada dua bilangan awal
{
    $c = $a + $b; //$c adalah bilangan yang kita cari. didapat dari penjumlahan dua bilangan sebelumnya.

    $a = $b; //bilangan pertama mengambil nilai bilangan kedua
    $b = $c; //bilangan kedua mengambil nilai bilangan yang dicari

    echo "$c "; //mencetak bilangan ketiga, keempat dst (dalam kasus ini sampai bilangan kesepuluh).
}
