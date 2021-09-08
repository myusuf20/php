<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

//Setelah menggunakan Group use declaration beserta aliasnya
use Data\One\{Conflict as firstConflict, Dummy as firstDummy, Sample as firstSample};
use function Helper\{helpMe};

//Membuat objectnya
$conflict = new firstConflict();
$dummy = new firstDummy();
$sample = new firstSample();

helpMe();