<?php

class circle extends shapeAbstract implements shapeInterface
{


    public function __construct(
        protected int $x,
        protected int $y,
        protected int $radius

    ) {
    }

    public function calculateArea()
    {
        return 3.14 * $this->$radius * $this->$radius;

    }

    public function calculatePerimeter()
    {
        echo __CLASS__ . "co chu vi la: " . PHP_EOL;
    }
}
