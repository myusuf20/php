<?php

require_once "data/Shape.php";

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

$rectangle = new Rectangle();
echo $rectangle->getCorner() . PHP_EOL;
//Menampilkan function getParentCorner yang mengambil dari function getCorner yang ada di class parent (Shape)
echo $rectangle->getParentCorner() . PHP_EOL;