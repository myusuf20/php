<?php
require_once "data/Sample.php";

use Data\TraitConflict\Sample;

//Pemanggilan objectnya
$sample = new Sample();
$sample->doA(); //Outputnya: a
$sample->doB();//Outputnya: B