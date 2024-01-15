<?php
class manager extends employeeAbstract implements employeeInterface {
    
    
    public function quanLy() {
        echo __CLASS__ . ' dang tra luong ' .PHP_EOL;
    }
    
    public function lamviec(){
        echo __CLASS__ . ' dang lam viec ' .PHP_EOL;
    }

}