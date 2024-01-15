<?php
abstract class shapeAbstract
{
    public function __construct(
        protected int $x,
        protected int $y,

    ) {
    }
     public abstract function calculateArea();
}
