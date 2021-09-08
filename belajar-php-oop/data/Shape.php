<?php

namespace Data;

class Shape
{
    public function getCorner()
    {
        return 0;
    }
}

class Rectangle extends Shape
{
    public function getCorner()
    {
        return 6;
    }

    public function getParentCorner()
    {
        //Mengakses function getCorner yang ada di class Parent(Shape)
        return parent::getCorner();
    }
}
