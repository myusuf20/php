<?php
// Posisi Require dan Include
/*
 - Kode program PHP akan dibaca dari atas ke bawah, oleh karena itu pastikan posisi
   require dan include sesuai dengan yang kita inginkan.
 - Misal jika sampai kita salah menempatkan posisi require dan include, bisa jadi
   kita malah memanggil function yang belum ada.
 */

require "Lib/MyFunction.php"; //Bila file terjadi error ketika dipanggil, maka program akan terhenti.
include "Lib/MyFunction.php"; //Bila file terjadi eror ketika dipanggil, maka program akan tetap dijalankan akan tetapi ada pemberitahuan warning.

echo sayHello("Mohammad", "Yusuf");