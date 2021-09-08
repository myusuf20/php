<?php
require_once "data/Person.php"; //Lokasi class Person dibuat

$person = new Person("Yusuf", "Bandung"); //Object pada class Person
//Manipulasi Properties
$person->name = "Mohammad";
$person->address = "Jakarta";
$person->country = "Jerman";
var_dump($person);

//Memanggil Manipulasi Propertiesnya
echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

//Ketika Ingin Membuat Object Yang Baru
$person2 = new Person("Mohammad", "Jakarta");
$person2->name = "Yusuf";
$person2->address = "Bandung";
//$person2->country = "Indonesia"; ketika tidak dipanggil, secara default outputnya bernilai Indonesia
var_dump($person2);

//Memanggil Manipulasi Propertiesnya
echo "Name : $person2->name" . PHP_EOL;
echo "Address : $person2->address" . PHP_EOL;
echo "Country : $person2->country" . PHP_EOL;