<?php
// For Each
/*
 - Kadang kita bisa mengakses data array menggunakan perulangan.
 - Mengakses data array menggunakan perulangan sangat bertele - tele, kita harus membuat counter,
   lalu mengakses array menggunakan counter yang kita buat.
 - Namun untungnya, di PHP terdapat perulangan for each, yang bisa digunakan untuk
   mengakses seluruh data di Array secara otomatis.
 */

// Contoh perulangan tanpa Foreach
$names = ["Mohammad", "Yusuf", "Fahmi"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

// Perulangan Dengan Menggunakan Foreach
$names = ["Ilyas", "Rian", "Bagas"];

foreach ($names as $index => $name) {
    echo "Data ke $index = $name" . PHP_EOL;
}

// Perulangan For Each dengan Key
$person = [
    "first_name" => "Mohammad",
    "middle_name" => "Yusuf",
    "last_name" => "Kurniawan"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}