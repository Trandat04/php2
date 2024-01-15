<?php

require_once './vehicleinterface.php';
require_once './OnLaneAbstract.php';
require_once './Car.php';
require_once './Motobike.php';

$car = new Car('Mec', '2024', 'DAHJDADA', 'ẠHDAHDJ');
echo "<pre>";
print_r($car);
$car ->diChuyen();
$car ->tangToc();

$car->setYom(2025);
print_r($car);

echo "YOM ". $car->getYom() . PHP_EOL;

$moto = new Motobike('Mecc', '2023', 'DAHJDADA', 'ẠHDAHDJ','agaeg');

print_r($moto);