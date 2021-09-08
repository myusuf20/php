<?php
// Callback Function
/*
 - Callback adalah sebuah mekanisme function dalam memanggil function lainnya
   sesuai dengan yang diberikan di argument.
 - Hal ini sebenarnya sudah kita lakukan di materi Variable Function dan Anonymous Function.
 - Namun di PHP ada cara lain untuk implementasi callback, yaitu menggunakan tipe data callable.
 - Dan untuk memanggil callback function tersebut, kita bisa menggunakan function
   call_user_func(callable, arguments).
 */

function sayHallo(string $name, callable $filter) {
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHallo("Yusuf", "strtoupper");
sayHallo("Yusuf", "strtolower");
sayHallo("Yusuf", function(string $name): string {
    return strtoupper($name);
});
sayHallo("Yusuf", fn($name) => strtolower($name));