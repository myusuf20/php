<?php
// Operator perbandingan, seperti namanya, digunakan untuk membandingkan dua buah value/nilai/variable
//  Hasil dari operator perbandingan adalah boolean, true jika perbandingannya benar, false jika perbandingannya salah

/*
 - $a == $b -> Sama Dengan -> True jika $a sama dengan $b setelah dilakukan konversi tipe data
 - $a === $b -> Identik -> True jika $a sama dengan $b dan memiliki tipe data yang sama
 - $a != $b -> Tidak sama dengan -> True jika $a tidak sama dengan $b setelah dilakukan konversi tipe data.
 - $a <> $b -> Tidak sama dengan -> True jika $a tidak sama dengan $b setelah dilakukan konversi tipe data.
 - $a !== $b -> Tidak identik -> True jika $a tidak sama dengan $b atau tidak sama tipe data
 - $a < $b -> Kurang dari -> True jika $a kurang dari $b.
 - $a <= $b -> kurang dari sama dengan -> True jika $a kurang dari sama dengan $b.
 - $a > $b -> Lebih dari -> True jika $a lebih dari $b.
 - $a >= $b -> Lebih dari sama dengan -> True jika $a lebih dari atau sama dengan $b.
*/

var_dump("10" == 10);
var_dump("10" === 10);
var_dump(9 > 9);
var_dump(10 >= 10);

