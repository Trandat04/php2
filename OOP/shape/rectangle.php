<?php

class rectangle extends shapeAbstract implements shapeInterface{
    public function __construct(
        protected int $x,
        protected int $y,
        private int $width,
        private int $height
    ) {
    }
public function calculateArea()
{
    return $this->$width * $this-> $height;
}
 public function calculatePerimeter()
 {
   
 }
}