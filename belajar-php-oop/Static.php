<?php
require_once "helper/MathHelper.php";

use Helper\MathHelper;

//Mengakses melalui classnya langsung
echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Mohammad Yusuf";
echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(10, 10, 10, 10, 10);
echo "Result : $result" . PHP_EOL;