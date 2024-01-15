<?php

class engineer extends employeeAbstract implements employeeInterface{
    public function nghienCuu() {
        echo __CLASS__ . ' dang nghien cuu ' .PHP_EOL;
    }

    public function lamviec(){
        echo __CLASS__ . ' dang lam viec ' .PHP_EOL;
    }
}