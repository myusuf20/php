<?php
require_once "data/Student.php";

$studentOne = new Student();
$studentOne->id = "1";
$studentOne->name = "Yusuf";
$studentOne->value = 100;
$studentOne->setSample("XXX");

var_dump($studentOne);

$studentTwo = clone $studentOne;
var_dump($studentTwo);

//Cara manual tanpa di clone
//$studentTwo = new Student();
//$studentTwo->id = $studentOne->id;
//$studentTwo->name = $studentOne->name;
//$studentTwo->value = $studentOne->value;

//$studentOne=>clone $studentTwo => $studentTwo->__clone()
