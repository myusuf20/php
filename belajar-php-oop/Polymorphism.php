<?php
require_once "data/Programmer.php";

$company = new Company();
//Perubahan bentuk dari class Programmer (Parentnya)
$company->programmer =  new Programmer("Yusuf");
var_dump($company);
//Perubahan bentuk dari class turunan Programmer yaitu class BackendProgrammer (Child)
$company->programmer = new BackendProgrammer("Mohammad");
var_dump($company);
//Perubahan bentuk dari class turunan Programmer yaitu class FrontendProgrammer (Child)
$company->programmer = new FrontendProgrammer("Ramadhan");
var_dump($company);

//Memanggil Function Argument Polymorphism
sayHelloProgrammer(new Programmer("Rizky")); //new Programmer mengambil data dari class parentnya
sayHelloProgrammer(new BackendProgrammer("Rian")); //new BackendProgrammer mengambil data dari class childnya
sayHelloProgrammer(new FrontendProgrammer("Nias")); //new FrontendProgrammer mengambil data dari class childnya
