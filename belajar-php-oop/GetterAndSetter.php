<?php
require_once "data/Catagory.php";

$category = new Catagory();
$category->setName("Handphone");
$category->setExpensive(true);

$category->setName("   "); //Inputan data kosong
echo "Name : {$category->getName()}" . PHP_EOL;
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;