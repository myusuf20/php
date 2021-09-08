<?php
class SocialMedia
{
    public string $name;
}

class Facebook extends SocialMedia
{
    //Penggunaan final function
    final public function login(string $username, string $password): bool
    {
        return true;
    }
}

//Karena parent class Facebook bersifat final class
//Maka turunannya atau class child FakeFacebook akan error
class FakeFacebook extends Facebook
{
    //Ketika function login di override akan terjadi error
    public function login(string $username, string $password): bool
    {
        return true;
    }
}
