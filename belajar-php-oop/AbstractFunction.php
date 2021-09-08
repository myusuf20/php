<?php
require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

/**
Karena classnya Abstract, maka hanya bisa memanggil object turunannya
Yaitu Cat, dan Dog */
$cat = new Cat();
$cat->name = "Mona";
$cat->run();

$dog = new Dog();
$dog->name = "Lisa";
$dog->run();