<?php

require_once "data/Location.php";

use Data\{Location, City, Province, Country};

//$location = new Location(); //Error, karena class Location berupa abstract

//Maka kalau kita buat object dari class turunannya
//yaitu City, Province, Country tidak akan terjadi error
$city = new City();
$province = new Province();
$country = new Country();