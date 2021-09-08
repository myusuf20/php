<?php
require_once "data/Person.php";

define("APPLICATION", "Belajar PHP OOP"); //Contoh membuat constant yang lama
const APP_VERSION = "1.0.0"; //Contoh membuat constant pada PHP 7.4++

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;

//Mengakses Constant di Class
echo Person::AUTHOR . PHP_EOL;