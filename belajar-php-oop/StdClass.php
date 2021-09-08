<?php

$array = [
    "firstName" => "Mohammad",
    "middleName" => "Sinau",
    "lastName" => "Yusuf"
];

//Mengkonversi dari array menjadi object atau disebut stdClass
$object = (object) $array;

echo "First Name $object->firstName" . PHP_EOL;
echo "Middle Name $object->middleName" . PHP_EOL;
echo "Last Name $object->lastName" . PHP_EOL;

//Mengkonversi dari object menjadi array
$arrayLagi = (array) $object;
var_dump($arrayLagi);
