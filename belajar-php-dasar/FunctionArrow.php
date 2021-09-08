<?php
// Arrow Function
/*
 - Arrow function diperkenalkan di PHP 7.4 sebagai alternative anonymous function
   yang lebih sederhana pembuatannya.
 - Secara garis besar, sebenarnya arrow function dan anonymous function adalah dua hal yang sama
 - Hal yang membedakan di arrow function adalah, secara otomatis variable diluar closure bisa digunakan,
   tidak seperti di anonymous function yang harus disebutkan secara manual menggunakan kata kunci use.
 - Pembuatan arrow function tidak menggunakn kata kunci funtion, melainkan fn
 - Arrow function di khususnya untuk pembuatan function yang sederhana.
 */
$firstName = "Mohammad";
$lastName = "Yusuf";

// Ketika menggunakan anonymous function maka akan seperti berikut
$anonymousFunction = function () use ($firstName, $lastName) : string {
    return "Hello $firstName $lastName" . PHP_EOL;
};

echo $anonymousFunction();

// Namun ketika menggunakan Arrow Function, maka kodenya seperti berikut
$arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $arrowFunction();