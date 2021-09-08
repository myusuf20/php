<?php
require_once "data/Manager.php";

//Memanggil Parent pada class Manager
$manager = new Manager();
$manager->name = "Yusuf";
$manager->sayHello("Mohammad");

//Secara otomatis child pada class VicePresident bisa memanggil object yang sama dengan class Manager(Parentnya)
$vicePresident = new VicePresident();
$vicePresident->name = "Mohammad";
$vicePresident->sayHello("Yusuf");