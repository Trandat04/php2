<?php
echo "<pre>";

$array1 = [16, 04, 24];
echo $array1[1] . PHP_EOL;

$array2 = [
    'name' => 'Tran Dat',
    'age' => 19

];
echo $array2['age'] . PHP_EOL;

$array3 = [
    ['name' => 'Tran Cong A',  'age' => 18],
    ['name' => 'Tran Cong B',  'age' => 19],
    ['name' => 'Tran Cong C',  'age' => 30]
];
echo $array3[1]['name'] . PHP_EOL;
$array4 = [
    ['name' => 'Tran Cong A',  'age' => 18],
    ['name' => 'Tran Cong B',  'age' => 19],
    [
        'name' => 'Tran Cong C',
        'age' => 30,
        'points' => [
            'web2' => 10,
            'PHP2' => 9
        ],
    ],

];
echo $array4[2]['points']['web2'] . PHP_EOL;

//Ham array_merge - gop 1 hoac nhieu mang

$arr1 = [1, 4, 5, 'x' =>'ahihi'];
$arr2 = ['kkk', 'kek', ['ok'=>'yes']];
$arr3 = [1, 4, 5, 'x' =>'ahihi-arr3'];

$arrMeg = array_merge($arr1, $arr2, $arr3);
$arrMeg2 = [...$arr1, ...$arr2,...$arr3];
print_r($arrMeg);
print_r($arrMeg2);

// arr_push - Them 1 hoac nhieu phan tu vao cuoi cung

$arr1 = [];
array_push($arr1,1, 6, 0, 4, ['ahihi'=> 'okela']);
print_r($arr1);

$arr2 =[];
$arr2[] = 1;
$arr2[] = 6;
$arr2[] = 0;
$arr2[] = 4;
$arr2[] = ['ahihi'=> 'okela'];

print_r($arr2);

// in_arr - Kiem tra xem 1 gtri co ton tai trong 1 mang hay ko

$arr =['kkk', 'kek', ['ok'=>'yes']];
$need =['ok'=>'yes'];
if (in_array($need, $arr)) {
    echo "Co gtri  trong mang Arr" . PHP_EOL;
}else{
    echo "Khong co gtri  trong mang Arr" . PHP_EOL;
}

// explode -Tach 1 chuoi thanh 1 mang theo 1 ky tu

$str = 'Tet den roi';
$arr = explode('', $str);

echo $str . PHP_EOL;
print_r($arr);

// implode - Gop 1 mang thanh chuoi theo 1 ky tu
 $str = implode('@', $arr);

 echo $str . PHP_EOL;

//  unset - Xoa bien hoac phan tu mang

$arr =[1,2, 'x' => 'okla'];

unset($arr['x']);
print_r($arr);
