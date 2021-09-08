<?php

class Student
{
    public string $id;
    public string $name;
    public int $value;
    public string $sample;

    public function setSample(string $sample): void
    {
        $this->sample = $sample;
    }

    public function __invoke(...$arguments): void
    {
        $join = join(", ", $arguments);
        echo "Invoke student with arguments " . $join . PHP_EOL;
    }

    public function __toString(): string
    {
        return "Student id:$this->id, name:$this->name, value:$this->value";
    }
    //Memodifikasi properties dengan __clone() function

    public function __clone()
    {
        //Menghapus properties $sample
        unset($this->sample);
    }

    public function __debugInfo(): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
            "author" => "PHP",
            "version" => "1.2.3"
        ];
    }
}


//
//
