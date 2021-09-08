<?php
require_once "data/Person.php"; //Lokasi class Person dibuat

//Penggunaan Object
$personOne = new Person("Gilang", "Jakarta");
//Memanggil Attribut didalam objectnya
$personOne->name = "Yusuf";
//Memanggil Function didalam objectnya
$personOne->sayHello("Mohammad");

$personTwo = new Person("Simon", "Bandung");
//Memanggil Attribut didalam objectnya
$personTwo->name = "Fahmi";
//Memanggil Function didalam Objeknya
$personTwo->sayHello(null);

//Memanggil Object
//$personOne = new Person();
////Memanggil attribut didalam objectnya
//$personOne->name = "Mohammad";
//$personOne->address = "Jakarta";
//$personOne->country = "Indonesia";
////Memanggil Function didalam Objeknya
//$personOne->sayHello("Yusuf");


//$person1->info();
//$person2->info();