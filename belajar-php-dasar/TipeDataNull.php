<?php
// Data NULL
/*
- Nilai NULL merepresentasikan sebuah variable tanpa nilai.
- Saat kita membuat variable, lalu ingin menghapus data yang dapat di variable tersebut,
  kita bisa menggunakan NULL untuk mengosongkan variable tersebut.
- Untuk membuat data NULL, kita bisa menggunakan kata kunci NULL (case insensitive)
*/

$name = "Yusuf";
$name = null;

$age = null;

echo "Nama : ";
echo "$name";
echo "\n";

echo "Age : ";
echo "$age";
echo "\n";

// Mengecek Apakah Data NULL
/*
- Kadang kita ingin tahu apakah sebuah data bernilai null atau tidak
- Untuk mengecek apakah sebuah data bernilai null, kita bisa menggunakan function is_null($variable)
 */
echo  "Is Name Null? : ";
echo var_dump(is_null($name)); //Hasil dari is_null adalah true

// Menghapus Variable
/*
- Selain mengubah menjadi NULL, di PHP juga kita bisa menghapus sebuah variable,
  caranya dengan menggunakan function unset($variable)
- Namun hati - hati, ketika kita hapus variable, kita tidak bisa lagi mengakses variable tersebut,
  bahkan function is_null($variable) pun akan menjadi error jika mengakses variable tersebut.
- Agar lebih aman, kita bisa menggunakan function isset($variable) untuk mengecek
  apakah sebuah variable dan nilainya tidak NULL
 */
$contoh = "Yusuf";
unset($contoh); //Variable $contoh akan terhapus/hilang

var_dump(isset($contoh)); //Mengecek hasil dengan perintah isset adalah bool(false)