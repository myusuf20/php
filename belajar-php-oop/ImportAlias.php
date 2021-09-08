<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict as Conflict1; //Import namespace dengan alias Conflict1
use Data\Two\Conflict as Conflict2; //Import namespace dengan alias Conflict2
use function Helper\helpMe as help; //Import namespace function dengan alias help
use const Helper\APPLICATION as APP; //Import namespace constanta dengan alias APP


$conflict1 = new Conflict1(); //Dari use Data\One\Conflict as Conflict1;
$conflict2 = new Conflict2(); //Dari use Data\Two\Conflict as Conflict2;

help(); //Dari use function Helper\helpMe as help;

echo APP . PHP_EOL; //Dari use const Helper\APPLICATION as APP;