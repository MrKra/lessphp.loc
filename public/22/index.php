<?php error_reporting(-1);
//Цикл foreach 

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$i = 0;
while($i < 11)
{
    echo $nums[$i];
    $i++;
}
for($i = 0; $i < 11; $i++)
{
    echo $nums[$i];
}

foreach($nums as $key){
    echo $key;
}

foreach($nums as $key => $value){
    echo "Key: {$key} Value: {$value}";
}

echo "<br><br>";

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
    [
        'brand' => 'LG',
        'price' => 98,
        'qty' => 14,
    ],
];

for($i = 0; $i < 5; $i++){
    echo "Names: {$goods[$i]['brand']} <br>";
    echo "Price: {$goods[$i]['price']} <br>";
    echo "Qantity: {$goods[$i]['qty']} <br>";
    echo "<hr>";
}

echo "<br><br>";
echo "<pre>" . print_r($goods, true) . "</pre>";
// Добавление элемента в массиф и  изменения значение в массиве
for($i = 0; $i < 5; $i++){
    $goods[$i]['total'] = $goods[$i]['price'] * $goods[$i]['qty'];
    $goods[$i]['price'] *= 2;
}
echo "<pre>" . print_r($goods, true) . "</pre>";
echo "<br><br>";

foreach($goods as $good){
    echo "Names: {$good['brand']} <br>";
    echo "Price: {$good['price']} <br>";
    echo "Qantity: {$good['qty']} <br>";
    echo "<hr>";
}



echo "<br><br>";
echo "<br><br>";
echo "<pre>" . print_r($goods, true) . "</pre>";
echo "<br><br>";
