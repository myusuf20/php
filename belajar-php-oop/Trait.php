<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayGoodBye, SayHello};

//Membuat object pada class Person
$person = new Person();
$person->goodBye("Yusuf");
$person->hello("");

$person->name = "Rian";
$person->run();