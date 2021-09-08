<?php
require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = " "; //Kosong(error)
$loginRequest->password = " "; //Kosong(error)

//Multiple Try Catch (2)
try {
    validateLoginRequest($loginRequest);
    //Satu catch juga bisa menangkap beberapa jenis class exception
} catch (ValidationException | Exception $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
    //getTrace() untuk mengetahui errornya terjadi dimana dalam bentuk array
    var_dump($exception->getTrace());
    //getTraceAsString untuk mengetahui errornya terjadi dimana dalam bentuk string
    echo $exception->getTraceAsString();
} finally {
    //keyword finally
    echo "Error atau tidak, block finally akan dieksekusi" . PHP_EOL;
}