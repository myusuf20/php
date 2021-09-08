<?php

namespace Data;

//ini sama dengan abstract class hasBand
interface hasBrand
{
    function getBrand(): string;
}

//ini sama dengan abstract class isMaintenance
interface isMaintenance
{
    function isMaintenance(): bool;
}

//Interface Inheritance (Pewarisan Interface)
//pada child interface bisa mewarisi lebih dari 1 parent interface
interface Car extends hasBrand
{
    // ini sama dengan abstract function drive(): void;
    function drive(): void;

    // ini sama dengan abstract function getTire(): int;
    function getTire(): int;

    //Karena semua menggunakan abstract, maka lebih baik menggunakan interface.
}

//Implement Interface (Implementasi interface pada class)
//class Avanza yang mewarisi interface Car, dan isMaintenance
class Avanza implements Car, isMaintenance {

    //Wajib membuat public function drive yang ada di interface Car
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    //Wajib membuat public function getTire yang ada di interface Car
    public function getTire(): int
    {
        return 4;
    }

    //Wajib membuat public function getBrand yang ada di interface hasBrand
    public function getBrand(): string
    {
        return "Toyota" . PHP_EOL;
    }

    //Wajib membuat public function isMaintenance yang ada di interface isMaintenance
    public function isMaintenance(): bool
    {
        return false;
    }
}