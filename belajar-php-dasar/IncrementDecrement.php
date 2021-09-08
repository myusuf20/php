<?php
// PHP mendukung gaya bahasa pemrograman C untuk menaikkan dan menurunkan data number sejumlah 1 angka
// Ini bisa mempersingkat kita ketika ingin menaikkan data

/*
 - $a++ -> Post Increment -> Kembalikan $a, lalu naikkan 1 angka
 - ++$a -> Pre Increment -> Naikkan $a satu angka, lalu kembalikan $a
 - $a-- -> Post Decrement -> Kembalikan $a, lalu turunkan 1 angka
 - --$a -> Pre Decrement -> Turunkan $a satu angka, lalu kembalikan $a
 */

$a = 10;
$d = 10;

// Memberikan hasilnya dulu, baru menambahkan nilai variable $a sebanyak 1 angka
// a = a + 1;
$b = $a++;
$d++;
var_dump($b); // outputnya int(10)
var_dump($d); // outputnya int(11)

// Variable $a akan ditambahkan dahulu 1 angka, baru nilainya ditampilkan.
/*
 a = a + 1;
 c = a;
 */
$c = ++$a;
++$d;
var_dump($c); // outputnya int(12)
var_dump($d); // outputnya int(12)