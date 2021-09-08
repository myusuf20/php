<?php
//Membuat exception
function validateLoginRequest(LoginRequest $request)
{
    //ValidationException pengecekan error buatan sendiri
    //Exception pengecekan error bawaan dari PHP
    if(!isset($request->username)) {
        throw new ValidationException("Username is null");
    } else if (!isset($request->password)) {
        throw new ValidationException("Username is null");
    } else if (trim($request->username) == "") {
        throw new Exception("Username is empty");
    } else if (trim($request->password) == "") {
        throw new Exception("Password is empty");
    }
}