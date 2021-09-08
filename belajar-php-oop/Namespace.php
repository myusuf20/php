<?php
// Membuat Object dari Namespace

namespace { //Ini adalah black global namespace
    require_once "data/Conflict.php";
    require_once "data/Helper.php";

    $conflict1 = new \Data\One\Conflict();
    $conflict2 = new \Data\Two\Conflict();

    echo Helper\APPLICATION . PHP_EOL;

    \Helper\helpMe();

}
