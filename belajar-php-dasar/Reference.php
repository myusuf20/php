<?php
// Reference
/*
 - Reference adalah mengakses variable yang sama dengan nama variable yang berbeda.
 - Reference di PHP tidak sama dengan reference di bahasa pemrograman seperi C/C++
   yang memiliki fitur pointer.
 - Analogi reference itu seperti file, jika variable adalah file, dan valuenya adalah
   isi filenya, maka reference adalah membuat shortcut (di Windows) atau alias (di Linus/Mac)
   terhadap file yang sama.
 - Saat kita mengubah isi value dari reference, maka secara otomatis value variable
   aslinya pun berubah.
 - Untuk membuat reference terhadap variable, kita menggunakan karakter &
 */

// Assign By Referance
/*
 - Pertama, PHP Reference bisa memungkinkan kita bisa membuat beberapa variable
   menuju ke value yang sama.
 */
$name = "Yusuf";

$otherName = &$name;
$otherName = "Mohammad";

echo "Nama Saya adalah $otherName" . PHP_EOL; //Outputnya Mohammad

// Pass By Reference
/*
 - Selanjutnya yang bisa dilakukan di PHP adalah mengirim data ke function dengan reference.
 */
function increment(int &$value) {
    $value++;
}

$counter = 1;
increment($counter);

echo $counter . PHP_EOL; //Outputnya 2

// Return References
/*
 - PHP juga bisa mengembalikan reference pada function
 - Namun hati - hati, gunakan fitur ini jika memang ada alasannya,
   karena fitur ini bisa membingungkan.
 */
function &getValue() {
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL; //Outputnya 200