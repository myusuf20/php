<?php
// Variable Function
/*
 - PHP mendukung konsep yang bernama variable function
 - Variable function adalah kemampuan sebuah function dari value yang terdapat di
   di sebuah variable.
 - Untuk menggunakan variable function, kita bisa secara langsung memanggil $namaVariable(),
   jika ingin menambahkan argument, kita bisa menggunakan $namaVariable(argument).
 */
function foo(){
    echo "Foo" . PHP_EOL;
}

function bar(){
    echo "Bar" . PHP_EOL;
}

$functionYangAkanDipanggil = "foo";
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "bar";
$functionYangAkanDipanggil();

// Contoh lain :
function sayHello(string $name, $filter) {
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string {
    return "Nama Saya $name";
}

sayHello("Yusuf", "sampleFunction");
sayHello("Mohammad", "strtoupper");
sayHello("Mohammad", "strtolower");
