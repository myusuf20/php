<?php
// Array Function
/*
 - Di PHP juga terdapat banyak sekali function bawaan yang bisa kita gunakan untuk
   memanipulasi data array.
 - https://www.php.net/manual/en/ref.array.php
 */

// Contoh Beberapa Array Function
/*
 - array_keys() -> Mengambil semua keys milik array.
 - array_values() -> Mengambil semua values milik array.
 - array_map() -> Mengubah semua data array dengan callback.
 - sort() -> Mengurutkan array.
 - rsort() -> Mengurutkan array terbalik.
 - shuffle() -> Mengubah posisi data di array secara random.
 */

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$dataResult = array_map(fn(int $value) => $value * 10, $data);
var_dump($dataResult);

rsort($data);
var_dump($data);

$person = [
    "first_name" => "Mohammad",
    "last_name" => "Yusuf"
];
var_dump(array_keys($person));
var_dump(array_values($person));