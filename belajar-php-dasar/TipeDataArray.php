<?php
// Tipe Data Array
/*
 - Array adalah tipe data yang berisikan kosong atau banyak data
 - Array di PHP bisa berisikan data dengan jenis berbeda - beda
 - Array di PHP memiliki panjang dinamis, artinya kita bisa menambah data ke array
   sebanyak - banyaknya, tidak dibatasi kapasitasnya.
 */
$values = array(1, 2, 3, 4.5);
var_dump($values);
// Atau
$names = ["Mohammad", "Yusuf"];
var_dump($names);

// Operasi Array
/*
 - $array[index] -> Mengakses data di array pada nomor index
 - $array[index] = value -> Mengubah data di array pada nomor index dengan value baru
 - $array[] = value -> Menambah data di array pada posisi paling belakang
 - $unset($array[index]) -> Menghapus data di array, index otomatis hilang dari array
 - count($array) -> Mengambil total data di array
 */
$mahasiswa = ["Yusuf", "Simon", "Tampobolon"];
var_dump($mahasiswa[0]);

// Merubah data yang ada di index 0 menjadi Mohammad
$mahasiswa[0] = "Mohammad";
var_dump($mahasiswa);

// Menghapus data array pada index 1
unset($mahasiswa[1]);
var_dump($mahasiswa);

// Menambahkan data array
$mahasiswa[] = "Yusuf";
var_dump($mahasiswa);

// Menghitung data array
var_dump(count($mahasiswa));

// Array Sebagai MAP
/*
 - Biasanya di kebanyakan bahasa pemrograman, terdapat tipe data bernama Map,
   yaitu asosiasi antara key dan value
 - Namun di PHP, map bisa dibuat menggunakan Array
 - Secara default Array akan menggunakan index (number) sebagai key dan valuenya
   kita bisa bebas memasukan data ke dalam Array
 - Namun jika kita ingin, kita juga bisa mengubah indexnya tidak harus menggunakan number,
   bisa gunakan tipe data lain, seperti string misalnya
 - Hal tersebut terlihat seperti Map di bahasa pemrograman lain.
 */
$dosen = array(
    "id" => "ID2010",
    "name" => "Mohammad",
    "age" => 22
);
var_dump($dosen);

var_dump($dosen["name"]);

$guru = [
    "id" => "G0232",
    "name" => "Yusuf",
    "age" => 22
];
var_dump($guru);

// Array di dalam Array
/*
 - Seperti dijelaskan di awal, Array di PHP bisa berisikan data apapun
 - Sehingga kita juga bisa membuat array di dalam array jika memang dibutuhkan
 */
$dosen1 = array(
    "id" => "ID9200",
    "name" => "Mohammad",
    "age" => 22,
    "address" => array(
        "city" => "Bandung",
        "country" => "Indonesia"
    )
);
var_dump($dosen1["address"]);
var_dump($dosen1["address"]["country"]);
// Atau
$dosen2 = [
    "id" => "ID9820",
    "name" => "Yusuf",
    "age" => 22,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ]
];
var_dump($dosen2["address"]);
var_dump($dosen2["address"]["city"]);
