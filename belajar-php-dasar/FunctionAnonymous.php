<?php
// Anonymous Function
/*
 - Anonymous function adalah function tanpa nama, di PHP disebut dengan Closure.
 - Anonymous function biasanya digunakan sebagai argument atau sebagai value di variable.
 - Anonymous function membuat kita bisa mengirim function sebagai argument di function lainnya.
 */

// Anonymous Function Sebagai Variable
$sayHallo = function (string $name) {
    echo "Hello nama saya $name" . PHP_EOL;
};

$sayHallo("Mohammad Yusuf");

// Anonymous Function Sebagai Argument
function sayGoodBye(string $name, $filter) {
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Mohammad Yusuf", function (string $name): string {
    return strtoupper($name);
});

// Atau bisa memanggil function dengan
$filterFunction = function (string $name): string {
    return strtoupper($name);
};
sayGoodBye("Mohammad Yusuf", $filterFunction);

// Mengakses di luar Closure
/*
 - Secara default, anonymous function tidak mengakses variable yang terdapat diluar function.
 - Jika kita ingin menggunakan variable yang terdapat diluar anonymous function,
   kita perlu secara explicit menyebutkannya menggunakan kata kunci use diikuti
   variable - variable yang ingin kita gunakan.
 */

//Berikut mengakses variable yang ada di luar
$firstName = "Mohammad";
$lastName = "Yusuf";
$fullName = function() use ($firstName, $lastName) {
    echo "Hallo nama saya $firstName $lastName";
};

$fullName();
