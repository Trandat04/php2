<?php

abstract class employeeAbstract
{
    
    public function __construct(
        protected string $name,
        protected int $ms,
        protected string $luong
    ) {
    }

}
