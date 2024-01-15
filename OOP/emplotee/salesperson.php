<?php

class salesperson extends employeeAbstract implements employeeInterface
{

    public function __construct(
        protected string $name,
        protected int $ms,
        protected string $luong,
        protected string $troCap
    ) {
    }

    public function tangCa()
    {
        echo __CLASS__ . ' dang tăng ca ' . PHP_EOL;
    }
    public function banHang()
    {
        echo __CLASS__ . 'dang ban hang ' . PHP_EOL;
    }

    public function lamviec()
    {
        echo __CLASS__ . ' dang lam viec ' . PHP_EOL;
    }
    public function getName(){
        return $this->name;
    }
}
