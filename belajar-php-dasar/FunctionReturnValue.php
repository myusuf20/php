<?php
// Function Return Value
/*
 - Secara default, function itu tidak menghasilkan value apapun, namun jika kita ingin,
   kita bisa membuat sebuah function mengembalikan nilai.
 - Dan didalam block funtion, untuk menghasilkan nilai tersebut, kita harus menggunakan kata
   kunci return, lalu diikuti dengan data yang ingin dihasilkan.
 - Kita hanya bisa menghasilkan 1 data di sebuah function, tidak bisa lebih dari satu.
 */

function sum(int $x, int $y) {
    $total = $x + $y;
    return $total;
}

$result = sum(10, 10);
var_dump($result);

// Contoh ke dua penggunaan Return Value
function getFinalValue(int $value) {
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return  "C";
    } else if ($value >= 50) {
        return  "D";
    } else {
        return "E";
    }

    echo "Upsss" . PHP_EOL;
}

$score = getFinalValue(90);
var_dump($score);

$score = getFinalValue(30);
var_dump($score);


// Return Type Declaration
/*
 - Sama seperti pada argument, pada return value pun kita bisa mendeklarasikan tipe datanya.
 - Hal ini selain mempermudah kia ketika membaca tipe data kembalian function,
   bisa juga digunakan untuk menjaga jangan sampai kita mengembalikan tipe data yang salah di funtion.
 - untuk mendeklarasikan tipe data kembalian function, setelah kurung() kita bisa tambahkan titik dua :
   diikuti tipe data kembaliannya.
 */

function jumlah(int $first, int $second): int //dibacanya function jumlah itu mengembalikan tipe datanya integer
{
    return $first + $second;
}

$hasil = jumlah(100, 100);
var_dump($hasil);

// Contoh ke dua
function getNilaiAkhir(int $value): string //dibacanya function getNilaiAkhir itu mengembalikan tipe datanya string
{
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return  "C";
    } else if ($value >= 50) {
        return  "D";
    } else {
        return "E";
    }

    echo "Upsss" . PHP_EOL;
}

$sekor = getNilaiAkhir(80);
var_dump($sekor);

