<?php
require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Yusuf";
$student1->value = 300;

$student1("Mohammad", "Yusuf", 100, true);