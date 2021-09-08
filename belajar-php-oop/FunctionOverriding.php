<?php
require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("Yusuf");

//Object class child VicePresident overriding function sayHello
$vp = new VicePresident();
$vp->name = "Sulaiman";
$vp->sayHello("Yusuf");