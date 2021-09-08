<?php

class Catagory
{
    private string $name;
    private bool $expensive;

    //Mengambil data filed atau properties $name
    public function getName(): string
    {
        return $this->name;
    }

    //Mengubah data filed atau properties $name
    public function setName(string $name): void
    {
        //Validation di setter untuk tidak terjadi penginputan kosong
        if (trim($name) != "") {
            $this->name = $name;
        }
    }

    //Mengambil data filed atau properties berjenis boolean $expansive
    public function isExpensive(): bool
    {
        return $this->expensive;
    }

    //Mengubah data filed atau properties $expansive
    public function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }
}