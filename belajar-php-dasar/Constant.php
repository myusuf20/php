<?php
// Constant
/*
- Variable di PHP sifatnya mutable, artinya bisa dirubah.
- Jika kita ingin membuat variable yang immutable (tidak bisa dirubah),
  maka tidak bisa kita lakukan di PHP
- Sebagai gantinya, terdapat fitur yang namanya constant.
- Constant adalah tempat unutk menyimpan data yang tidak bisa dirubah lagi setelah di deklarasikan
- Untuk membuat constant kita bisa menggunakan function define()
- Best practice pembuatan nama constant adalah menggunakan UPPER_CASE
- define ("nama_dari_konstanta", "value_dari_nama_konstanta")
 */

define("AUTHOR", "Mohammad Yusuf");
define("APP_VERSION", 100);

echo "Author : ";
echo AUTHOR;
echo "\n";

echo "App Version : ";
echo APP_VERSION;
echo "\n";