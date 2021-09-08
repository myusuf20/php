<?php
// Function
/*
 - Function adalah block kode pogram yang akan berjalan saat kita panggil.
 - Sebelumnya kita sudah menggunakan function isset(), count() dan lain - lain.
 - Untuk membuat function di PHP, kita bisa menggunakan kata kuncti function,
   lalu diikuti dengan nama function, kurung() dan diakhiri dengan block {}
 - Kita bisa memangil function dengan menggunakan nama function lalu diikuti dengan kurung ()
 - Di bahasa pemrograman lain, function juga disebut dengan method.
 */
function sayHello() {
    echo "Hello Function" . PHP_EOL;
}

sayHello();

// Lokasi Function
/*
 - PHP sangat flexible dalam pembuatan function.
 - Tidak seperti pada bahasa pemrograman lain yang harus ada aturan lokasi
   dimana membuat function.
 - Di PHP kita bebas membuat function dimanapun, bisa didalam if statement,
   di dalam function, dan sebagainya.
 - Namun perlu diingat, jika kode function yang belum dieksekusi oleh PHP,
   maka function tersebut tidak akan bisa digunakan.
 */

$crate = true;

if ($crate) {
    function hiYusuf() {
        echo "Hello Nama Saya Mohammad Yusuf";
    }
}

hiYusuf();