<?php
// Variable Scope
/*
 - Di PHP, kita bisa membuat variable dimanapun yang kita mau
 - Scope variable adalah dibagian mana saja sebuah variable bisa diakses
 - PHP memiliki tiga jenis variable scope
   - global
   - local
   - static
 */

// 1. Global Scope
/*
 - Variable yang dibuat diluar function memiliki scope global.
 - Variable di scope global hanya bisa diakses dari luar funtion.
 - Artinya di dalam funtion, kita tidak bisa mengakses variable di global scope.
 */
$say = "Yusuf"; // Global Scope

function sayName() {
    echo "Nama saya $say" . PHP_EOL; // Error dikarenakan variable diluar scope functionya
}

sayName();

// global Keyword
/*
 - Namun jika kita ingin mengakses variable diluar funtion (global scope) dari dalam funtion,
   kita bisa menggunakan kata kunci global.
 - Dengan menggunakan kata kunci global, maka kita bisa mengakses variable yang ada
   di global scope dari dalam function.
 */
$name = "Mohammad"; // Global Scope

function sayNameGlobal() {
    global $name; // Global Keyword
    echo "Hello $name" . PHP_EOL;
}
sayNameGlobal();

// $GLOBAL Variable
/*
 - Selain menggunakan global keyword, setiap variable yang dibuat di global scope,
   secara otomatis akan disimpan di dalam array $GLOBAL oleh PHP.
 - Jadi kita bisa menggunakan $GLOBAL variable dengan key nama variablenya dari dari
   dalam function jika ingin mengakses global variable.
 - $GLOBAL adalah variable yang bersifat super global, artinya bisa diakses dari scope manapun.
 */
$person = "Yusuf"; // Variable Global Scope

function superGLobalScope() {
    echo $GLOBALS["person"] . PHP_EOL;
}
superGLobalScope();

// 2. Local Scope
/*
 - Variable yang dibuat di dalam funtion memiliki scope local.
 - Variable di scope local hanya bisa diakses dari dalam funtion itu sendiri.
 - Artinya variable tersebut tidak bisa diakses dari luar funtion ataupun dari funtion lain.
 */

//function createName() {
//    $name = "Yusuf"; //Variable Local Scope
//}
//
//createName();
//echo $name . PHP_EOL; // Error dikarenakan tidak bisa diakses dari luar function.
//
////Maka yang benar adalah
//function createName() {
//    $name = "Yusuf"; //Variable Local Scope
//    echo $name . PHP_EOL;
//}
//
//createName();

// 3. Static Scope
/*
 - Secara default local variable itu siklus hidupnya hanya sebatas functionnya dieksekusi.
 - Jika sebuah function selesai dieksekusi, maka siklus hidup local variablenya selesai.
 - PHP memiliki scope yang bernama static.
 - Saat kita membuat sebuah local variable menjadi static, maka siklus hidupnya tidak akan
   berhenti ketika sebuah function selesai dieksekusi.
 - Artinya jika function tersebut dieksekusi lagi, maka static variable tersebut akan meiliki
   value dari sebelumnya.
 */

function increment() {
    static $counter = 1; // Variable Static Scope
    echo "Counter : $counter" . PHP_EOL;
    $counter++;
}

increment(); //Outputnya 1
increment(); //Outputnya 2
increment(); //Outputnya 3
increment(); //Outputnya 4
increment(); //Outputnya 5
