<?php error_reporting(-1);
//Массивы

/*$arr1 = array();
$arr2 = [];*/

//var_dump($arr1, $arr2);

$arr1 = [
     'Ivanov', 1 => 'Petrov', 2 => 'Sidorov', 'Kozlov',
];
$arr1[5] = 'Gvozdev';

echo "<pre>" . print_r($arr1, true) . "</pre>";

echo $arr1[5];

$goods = [
    [
        'brand' => 'Nokia',
        'price' => 102,
        'qty' => 10,
    ],
    [
        'brand' => 'Sony',
        'price' => 105,
        'qty' => 8,
    ],
    [
        'brand' => 'Apple',
        'price' => 200,
        'qty' => 12,
    ],
    [
        'brand' => 'Samsung',
        'price' => 180,
        'qty' => 18,
    ],
];

echo "<pre>" . print_r($goods, true) . "</pre>";

echo $goods[2]['brand'];

for($i = 1; $i < 21; $i++)
{
    $nums[] = $i;
}

echo "<pre>" . print_r($nums, true) . "</pre>";


echo $goods[0]['brand'];