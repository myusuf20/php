<?php

namespace Data;

abstract class Location { //Karena abstract, maka object Location tidak bisa dibuat

    public string $name;

}

//Jadi hanya bisa membuat object dari turunan (child) dari class Location
class City extends Location
{

}

class Province extends Location
{

}

class Country extends Location
{

}




