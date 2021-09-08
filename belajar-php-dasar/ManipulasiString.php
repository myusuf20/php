<?php
// Dot Operator
/*
 - Dot(titik) operator adalah operator yang bisa kita gunakan untuk menambahkan
   sting dengan data lain (bisa string atau tipe data lainnya)
 - Sebenarnya kita bisa menggunakan +(plus) untuk menambahkan string,
   namun jika kita coba tambahkan string dengan tipe data number, maka akan terjadi error.
   Oleh karena itu direkomendasikan menggunakan .(dot) untuk menambahkan string dengan data lain.
 */
$name = "Mohammad Yusuf";
echo 'Name : ' . $name . PHP_EOL;
echo 'Value : ' . 100 . PHP_EOL;


// Konversi ke Number dan Sebaliknya
/*
 - Kadang kita sering melakukan konversi tipe data dari string ke number (int/float)
   atau sebaliknya.
 - Di PHP untuk melakukan konversi cukup mudah, kita hanya perlu menggunakan
   tanda kurung (tipe data).
 - Tipe data untuk string ada string, untuk number bisa menggunakan int untuk
   integer dan float untuk floating point.
 */

$convertionToString = (string)100;
var_dump($convertionToString);

$convertionToInt = (int)"100";
var_dump($convertionToInt);

$convertionToFloat = (float)"100.20";
var_dump($convertionToFloat);


// Mengakses Karakter
/*
 - String di PHP seperti array karakter, dimana kita bisa mengakses data tiap
   karakternya menggunakan kurung siku.
 - Sama seperti di array, index pertama dimulai dari 0
 - Jika kita mengakses index melebihi karakter di string, maka akan terjadi error.
 */

$firstName = "Yusuf";
echo $firstName[0] . PHP_EOL;
echo $firstName[1] . PHP_EOL;
echo $firstName[2] . PHP_EOL;
echo $firstName[3] . PHP_EOL;
echo $firstName[4] . PHP_EOL;


// Variable Parsing
/*
 - Khusus string menggunakan double quote atau heredoc, kita bisa mengguanakan
   karakter $ untuk mengakses variable.
 - Ini memudahkan ketika kita ingin menggabungkan string dengan variable.
 - Cara penggunaannya adalah dengan menggunakan karakter $ lalu diikuti dengan nama variablenya.
 */

$lastName = "Mohammad";
echo "Hello $lastName, Selamat Belajar" . PHP_EOL;


// Curly Brace
/*
 - Kadang kita butuh menggabungkan variable dengan string tanpa ada spasi.
   Hal ini akan menyulitkan jika hanya menggunakan variable parsing.
 - Untungnya di PHP kita bisa menambahkan kurung kurawal sebelum menggunakan
   variable parsing.
 */

$eat = "somay";
echo "This is {$eat}s " . PHP_EOL;


