<?php

namespace Data\TraitConflict;

trait A
{
    function doA(): void
    {
        echo "a" . PHP_EOL;
    }

    function doB(): void
    {
        echo "b" . PHP_EOL;
    }
}

trait B
{
    function doA(): void
    {
        echo "A" . PHP_EOL;
    }

    function doB(): void
    {
        echo "B" . PHP_EOL;
    }
}

class Sample
{
    //Mengatasi trait yang conflict dengan insteadof
    use A, B
    {
        //Dari function doA yang diambil trait A daripada yang trait B
        A::doA insteadof B;
        //Dari function doB yang diambil trait B daripada yang trait A
        B::doB insteadof A;
    }
}
