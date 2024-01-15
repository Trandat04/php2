<?php

class Car extends OnLaneAbstract implements VehicleInterface
{
    
    public function diChuyen() {
        echo __CLASS__ . ' di chuyen truoc sau, quay dau duoc' .PHP_EOL;
    }

    public function tangToc(){
        echo __CLASS__ . ' tang toc tu 0 -> 100 trong 3s' .PHP_EOL;
    }
    public function setYom($yomNew){
        $this->yom = $yomNew;
    }

    public function getYom(){
       return  $this->yom ;
    }
}