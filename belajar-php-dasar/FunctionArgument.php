<?php
// Function Argument / Parameter
/*
 - Kita bisa mengirim informasi ke function yang ingin kita panggil.
 - Untuk melakukan hal tersebut, kita perlu menambahkan argument atau parameter
   di function yang sudah kita buat.
 - Cara membuat argument sama seperti cara membuat variable.
 - Argument ditempatkan di dalam kurung() di deklarasi function.
 - Argument bisa lebih dari satu, jika lebih dari satu, harus dipisah menggunakan tanda koma.
 */

function sayHello($name) {
    echo "Hello Nama Saya $name" . PHP_EOL;
}

sayHello("Mohammad");

// Contoh function lebih dari satu argument/parameter
function fullName($firstName, $lastName) {
    echo "Hello Nama Saya $firstName $lastName" . PHP_EOL;
}

fullName("Mohammad" , "Yusuf");

// Penggunaan Function Default Argument Value
/*
 - PHP mendukung default argument value.
 - Fitur ini memungkinkan jika ketika kita memanggil function tidak memasukkan parameter,
   kita bisa menentukan data defaultnya apa.
 */
function foods($food = "Semur Mujaer") {
    echo "Anda Telah Membeli Makanan $food" . PHP_EOL;
}

foods(); //Memanggil function argument defaultnya yaitu Semur Mujaer
foods("Lobster"); //Memanggil function dengan merubah argument defaultnya

// Kesalahan Default Argument Value
/*
 - Default argument value bisa disimpan di argument manapun.
 - Namun jika argument lebih dari satu, dan kita menyimpan default argument value
   di parameter awal, maka itu kurang berguna.
 - Maka dari itu argument default seharusnya ditempatkan pada akhir argument.
 */

function yourName($awalArgument, $akhirArgument = "") {
    echo "Hello $awalArgument $akhirArgument" . PHP_EOL;
}

yourName("Mohammad");
yourName("Mohammad", "Yusuf");

//Type Declaration
/*
 - Sama seperti variable, argument di PHP bisa kita masukkan data yang dinamis.
 - Kadang terlalu dinamis juga menyulitkan jika ternyata kita hanya ingin membuat
   function yang menggunakan argument dengan tipe data tertentu.
 - Untungnya di PHP, kita bisa menambahkan type data di argument, sehingga PHP
   akan melakukan pengecekan ketika kita mengirim value ke function tersebut.
 - Jika tipe data value tidak sesuai, maka akan terjadi error.
 - Secara default PHP akan melakukan konversi tipe data secara otomatis,
   misal jika kita menggunakan tipe data int, tapi kita mengirim string,
   maka PHP akan otomatis mengkonversi string tersebut menjadi int.
 - Berikut Valid Types :
   - Class / Interface -> Parameter harus tipe Class / Interface (Pembahasan di OOP)
   - Self -> Parameter harus sama dengan class dimana function ini dibuat (Pembahasan di OOP)
   - Array -> Parameter harus array
   - Callable -> Parameter harus callable
   - Bool -> Parameter harus boolean
   - Float -> Parameter harus floating point
   - Int -> Paramter harus integer number
   - String -> Paramater harus string
   - Interable -> Parameter harus array atau tipe Traversable (Pembahasan di OOP)
   - Object -> Parameter harus sebuah object (Pembahasan di OOP)
 */

// Contoh Penggunaan Type Declaration
function sum(int $x, int $y) {
    $result = $x + $y;
    echo "Total $x + $y = $result" . PHP_EOL;
}

sum(100, 100);
sum("100", "100"); //Akan dikonversi secara otomatis ke tipe data Integer
sum(true, false); //Akan dikonversi secara otomatis ke tipe data Integer dengan nilai true = 1 dan false = 0
sum([], []); //Tidak bisa dikonversi diakibatkan tipe data array tidak sesuai dengan tipe data integer.


// Variable-length Argument List
/*
 - Variable-length argument list merupakan kemampuan dimana kita bisa membuat
   parameter yang menerima banyak value.
 - Variable-length argument list secara otomatis akan membuat argument tersebut
   menjadi array, namun kita perlu manual mengirim array ke functionnya.
 - Variable-length argument list hanya bisa dilakukan di argument posisi terakhir.
 - Untuk membuat variable-length argument list, kita bisa menggunakan tanda
   ...(titik tiga kali) sebelum nama argument.
 */

//Contoh dengan penggunaan parameter array
function sumAll(array $values) {
    $result = 0;
    foreach ($values as $value) {
        $result += $value;
    }
    echo "Total " . implode(", ", $values) . " = $result" . PHP_EOL;
}

sumAll([10, 20, 30, 40]);

// Tapi kalau menggunakan Variable-length Argument akan berubah menjadi :
function sumAlls(...$values) {
    $result = 0;
    foreach ($values as $value) {
        $result += $value;
    }
    echo "Total " . implode(", ", $values) . " = $result" . PHP_EOL;
}

$values = [10, 20, 30, 40]; //Bila sudah terdapat variable yang bertipe data array

sumAlls(10, 20, 30, 40);
sumAlls(...$values); //Maka ketika memanggil sebuah function harus menggunakan ...(titik tiga) untuk mengkonversi ke variable-length list.