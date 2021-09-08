<?php
require_once "data/Car.php";
use Data\{Avanza};

$car = new Avanza();
$car->drive();
echo "Nama Brand : {$car->getBrand()}";
echo "Tire : {$car->getTire()}";
echo $car->isMaintenance();