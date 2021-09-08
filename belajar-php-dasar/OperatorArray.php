<?php
// Di PHP, Arrau memiliki operator khusus
// Mungkin terlihat mirip dengan operator - operator sebelumnya, tapi cara kerjanya sedikit berbeda

/*
 - $a + $b -> Union -> Menggabungkan array $a dan $b
 - $a == $b -> Equality -> True jika $a dan $b memiliki key-value sama tanpa memperdulikan posisi
 - $a === $b -> Identity -> True jika $a dan $b memiliki key-value sama dan posisi sama
 - $a != $b -> Inequality -> True jika $a dan $b tidak sama
 - $a <> $b -> Inequality -> True jika $a dan $b tidak sama
 - $a !== $b -> Nonidentity -> True jika $a dan $b tidak identik
 */

$first = [
    "first_name" => "Mohammad"
];

$last = [
    "first_name" => "Kendati",
    "last_name" => "Yusuf"
];

$fullName = $first + $last;
var_dump($fullName);

$namaLengkap1 = [
    "nama_awal" => "Mohammad",
    "nama_akhir" => "Yusuf"
];

$namaLengkap2 = [
    "nama_akhir" => "Yusuf",
    "nama_awal" => "Mohammad"
];

var_dump($namaLengkap1 == $namaLengkap2); // Bernilai True
var_dump($namaLengkap1 === $namaLengkap2); // Bernilai False karena posisi key-value berbeda
