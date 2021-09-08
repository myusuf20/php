<?php
// If Statement
/*
 - Dalam PHP, if adalah salah satu kunci yang digunakan untuk percabangan.
 - Percabangan artinya kita bisa mengeksekusi kode program tertentu ketika suatu
   kondisi terpenuhi.
 - Hampir di semua bahasa pemrograman mendukung if expression.
 */

$nilai = 80;
$absensi = 90;
if ($nilai >= 75 && $absensi >= 75) {
    echo "Anda Lulus" . PHP_EOL;
}

// Else Statement
/*
 - Blok if akan dieksekusi ketika kondisi if berniali true
 - Kadang kita ingin melakukan eksekusi program tertentu jika kondisi if bernilai false
 - Hal ini bisa dilakukan menggunakan else statement.
 */

$value = 70;
$absen = 80;
if ($value >= 75 && $absen >= 75) {
    echo "Selamat Anda Lulus" . PHP_EOL;
} else {
    echo "Selamat Anda Tidak Lulus!" . PHP_EOL;
}

// Else If Statement
/*
 - Kadang dalam If, kita butuh membuat beberapa kondisi.
 - Kasus seperti ini, di PHP kita bisa menggunakan Else If Statement
 - Else If di PHP bisa lebih dari satu.
 - Kode Else If di PHP bisa mengguanakan "else if" atau "elseif" (digabung).
 */

$uts = 50;
$uas = 40;

if ($uts >= 80 && $uas >= 80) {
    echo "Nilai Anda A" . PHP_EOL;
} else if ($uts >= 70 && $uas >= 70) {
    echo "Nilai Anda B" . PHP_EOL;
} else if ($uts >= 60 && $uas >= 60) {
    echo "Nilai Anda C" . PHP_EOL;
} else if ($uts >= 50 && $uas >= 50) {
    echo "Nilai Anda D" . PHP_EOL;
} else {
    echo "Nilai Anda E" . PHP_EOL;
}

// Syntax Alternatif
/*
 - Selain menggunakan {}(kurung kurawal), PHP juga menyediakan syntax alternatif
   untuk menggunakan if, yaitu dengan menggunakan :(titik dua).
 - Namun untuk menggunakan ini, kita harus menggunakan kata kunci endif akhir if statement.
 */

if ($uts >= 80 && $uas >= 80) :
    echo "Nilai Anda A" . PHP_EOL;
 elseif ($uts >= 70 && $uas >= 70) :
    echo "Nilai Anda B" . PHP_EOL;
 elseif ($uts >= 60 && $uas >= 60) :
    echo "Nilai Anda C" . PHP_EOL;
 elseif ($uts >= 50 && $uas >= 50) :
    echo "Nilai Anda D" . PHP_EOL;
 else :
    echo "Nilai Anda E" . PHP_EOL;
endif;