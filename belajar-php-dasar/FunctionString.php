<?php
// String Function
/*
 - Sebelumnya saya pernah menggunakan beberapa function bawaan dari PHP untuk
   memanipulasi data string.
 - Sebenarnya banyak sekali function bawaan PHP yang bisa kita guankan untuk memanipulasi string.
 - https://www.php.net/manual/en/ref.strings.php
 */

//Beberapa Contoh String Function
/*
 - join() / implode() -> Menggabungkan array menjadi string.
 - explode() -> Memecah string menjadi array.
 - strtolower() -> Mengubah string menjadi lowercase.
 - strtoupper() -> Mengubah string menjadi uppercase.
 - substr() -> Mengambil sebagian string.
 - trim() -> Menghapus whitespace di depan dan belakang string.
 */

var_dump(join(",", [10, 20, 30, 40, 50])); // paramater pertama sparator untuk melakukan joionnya, dan parameter keduanya adalah arraynya.
var_dump(explode(" ", "Mohammad Yusuf")); // Parameter pertama menggunakan spasi untuk memecah paramter kedua menjadi array
var_dump(strtolower("MOHAMMAD YUSUF")); //Merubah string dari huruf besar ke huruf kecil.
var_dump(strtoupper("mohammad yusuf")); //Merubah string dari huruf kecil ke huruf besar.
var_dump(trim("        yusuf       ")); //Menghapus whitespace pada bagian awal dan akhir pada string.
var_dump(substr("Mohammad Yusuf", 0, 3)); //Mengambil karakter dari 0 sampai 3 maka outputnya Moh