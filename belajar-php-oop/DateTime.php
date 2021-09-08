<?php
$dateTime = new DateTime();
//Merubah tanggal dari tahun, bulan, hari
$dateTime->setDate(1998, 10, 20);
//Merubah waktu dari jam, menit, detik
$dateTime->setTime(21,23,23);

//Menambahkan satu periode tahun.
$dateTime->add(new DateInterval("P1Y"));
//Mengurangi satu periode bulannya saja
$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$dateTime->add($minusOneMonth);

var_dump($dateTime);

//Mengubah date timezone dari Asia/Jakarta menjadi Europe/Berlin
$dateTimeZone = new DateTime();
$dateTimeZone->setTimezone(new DateTimeZone("Europe/Berlin"));
var_dump($dateTimeZone);