<?php
// Require dan Inlcude
/*
 - Saat membuat aplikasi, ada baiknya tidak dibuat dalam satu file
 - Lebih baik dipisah ke beberapa file agar kode program tidak terlalu bertumpuk di satu file.
 - PHP memiliki function require dan include yang bisa kita gunakan untuk mengambil file php lain.
 - Lantas apa bedanya require dan include?
 - Pada require, jika file yang kita ambil tidak ada, maka akan terjadi error dan program terhenti.
 - Pada include, jika filte kita ambil tidak ada, maka hanya akan memberi peringatan,
   namun program akan tetap dilanjutkan.
 */

function sayHello(string $firstName, string $lastName): string {
    return "Hello $firstName $lastName";
}