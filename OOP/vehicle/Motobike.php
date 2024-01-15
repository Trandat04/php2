<?php

class Motobike extends OnLaneAbstract implements VehicleInterface
{
    public function __construct(
        protected string $theFirm,
        protected string $yom,
        protected string $Vin, //số khung
        protected string $Ven, //Số máy
        protected string $seat
    ) {
    }
    public function diChuyen() {
        echo __CLASS__ . ' di chuyen truoc sau, quay dau duoc' .PHP_EOL;
    }

    public function tangToc(){
        echo __CLASS__ . ' tang toc tu 0 -> 100 trong 3s' .PHP_EOL;
    }
   
}