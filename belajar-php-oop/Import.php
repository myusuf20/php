<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict; //Import namespace
use function Helper\helpMe; //Import namepace yang didalamnya ada function
use const Helper\APPLICATION; //Import namespace yang didalamnya ada constanta

//Membuat object dari namespace Conflict
$conflict1 = new Conflict();
$conflict2 = new Data\Two\Conflict();

//Mengakses dari namespace Helper
helpMe();

echo APPLICATION . PHP_EOL;