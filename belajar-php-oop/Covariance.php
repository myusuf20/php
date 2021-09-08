<?php
require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

$catShelter = new \Data\CatShelter();
$cat = $catShelter->adobt("Mona");

$dogShelter = new \Data\DogShelter();
$dog = $dogShelter->adobt("Lisa");
