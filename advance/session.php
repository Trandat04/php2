<?php 
echo "<pre>";

session_start();


$_SESSION['cart'][]=[
    'id'=>10,
    'name' => 'sp1',
    'quantity' => 2,
    'price' => 20000,
];

unset($_SESSION['cart']);
$_SESSION =[];
print_r($_SESSION);

