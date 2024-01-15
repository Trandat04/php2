<?php

require_once "./employeeAbstract.php";
require_once "./employeeInterface.php";
require_once "./manager.php";
require_once "./engineer.php";
require_once "./salesperson.php";

$manager = new manager('Dat', 01, '5000$');
echo '<pre>';

print_r($manager);

$salasperson = new salesperson('Hieu', 02, '1000$', '100$');
print_r($salasperson);
echo "Nhan Vien " .$salasperson-> getName() .PHP_EOL;
$salasperson ->tangCa();


$kysu = new engineer('Canh', 01, '2000$');
print_r($kysu);