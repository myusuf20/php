<?php
// Switch Statement
/*
 - Kadang kita hanya butuh menggunakan kondisi sederhana di if statement, seperti
   hanya menggunakan perbandingan ==
 - Swith adalah statement percabangan yang sama dengan if, namun lebih sederhana
   cara pembuatannya.
 - Kondisi di switch statement hanya untuk perbandingan ==
 */

$nilai = "A";

if ($nilai == "A") {
    echo "Anda lulus dengan sangat baik" . PHP_EOL;
} else if ($nilai == "B" || $nilai == "C") {
    echo "Anda lulus dengan baik" . PHP_EOL;
} else if ($nilai == "D") {
    echo "Anda tidak lulus" . PHP_EOL;
} else {
    echo "Sepertinya Anda Salah Jurusan!" . PHP_EOL;
}

// Kalau diubah menjadi Switch Statement akan seperti dibawah ini :

switch ($nilai) {
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B" :
    case "C" :
        echo "Anda lulus dengan baik" . PHP_EOL;
        break;
    case "D" :
        echo "Anda Tidak Lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah jurusan" . PHP_EOL;
}

// Penggunaan Syntax Alternatif
/*
 - Sama seperti if statement, switch statement juga bisa tanpa menggunakan {}(kurung kurawal)
 - Namun diakhir switch statement, kita harus menambahkan kata kunci endswitch.
 */

switch ($nilai) :
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B" :
    case "C" :
        echo "Anda lulus dengan baik" . PHP_EOL;
        break;
    case "D" :
        echo "Anda Tidak Lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah jurusan" . PHP_EOL;
endswitch;