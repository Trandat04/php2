<?php

echo "<pre>";

//ham truyen thong
//co' tra ve va khong
function sum($a, $b)
{
    return $a + $b;
}
$SUM = sum(3, 6);
echo $SUM . PHP_EOL;

function sum2($a, $b)
{
    echo $a + $b . PHP_EOL;
}
sum2(5, 6);


//co' tham so va khong co tham so
function xinChao($mess)
{
    echo $mess . PHP_EOL;
}
xinChao('Xin chao');
xinChao('Hi');

function xinChao2()
{
    echo 'Xin Chao' . PHP_EOL;
}
xinChao2();
xinChao2();

//Tham so co gia tri mac dinh

function xinChao3($name, $mess)
{
    echo $name . '' . $mess . PHP_EOL;
}
xinChao3('Dat', ' Chao cac b');

function xinChao4($name, $mess = 'Hi')
{
    echo $mess . '' . $name . PHP_EOL;
}
xinChao4('dattc');

//===============================closure & arrow============================
$y =5;
$closure = function () use ($y) {
    echo "Closure 1 " . $y . PHP_EOL;
};
$closure();

$fn = fn($x) => $x * $y;
echo $fn(5) . PHP_EOL;
echo $fn(10);