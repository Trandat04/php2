<?php

abstract class OnLaneAbstract
{


    public function __construct(
        protected string $theFirm,
        protected string $yom,
        protected string $Vin,//số khung
        protected string $Ven //Số máy
    ) {
    }
    abstract public function tangToc();

    public function bamCoi()
    {
        echo 'Xe đang bấm còi' . __CLASS__;
    }
}
