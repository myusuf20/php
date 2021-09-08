<?php
// Null Coalescing Operator
/*
 - Sebelumnya kita tahu bahwa data kosong direpresentasikan dengan data NULL di PHP
 - Dan hal yang paling repot di PHP adalah mengecek apakah sebuah data ada atau tidak,
   dan juga apakah data tersebut isinya null atau bukan.
 - Biasanya untuk melakukan itu, kita perlu menggunakan pengecekan if statement dengan function isset($variable)
 - Namun untungnya di PHP ada null coalescing operator menggunakan tanda ??
 */

// Tanpa Null Coalescing Operator
$data = [
    "action" => "create"
];

if (isset($data['action'])) {
    $action = $data['action'];
} else {
    $action = 'Nothing';
}

echo $action . PHP_EOL;

// Munggnakan Null Coalescing Operator
$action = $data["action"] ?? "Nothing";

echo $action . PHP_EOL;