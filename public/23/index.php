<?php error_reporting(0);

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

for ($i = 0; $i < 10; $i++)
{
    if($nums[$i] % 2)  continue;
    echo "{$nums[$i]} <br>";
}
echo "<br><br><hr>";
for ($i = 0; $i < 11; $i++)
{
    if(!($nums[$i] % 2)) 
    echo "{$nums[$i]} <br>";
}
echo "<br><br><hr>";
for ($i = 1; $i < 10; $i += 2){
    print $nums[$i] . "<br>";
}

echo "<br><br><hr>";
$goods = [
    [
        'brand' => 'Nokia',
        'price' => 100,
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
    /*if($goods[$i]['price'] < 200)
    {
        echo "Names: {$goods[$i]['brand']} <br>";
        echo "Price: " . $goods[$i]['price'] + 15 . "<br>";
        echo "Qantity: {$goods[$i]['qty']} <br>";
        echo "<hr>";
    }else{
        echo "Names: {$goods[$i]['brand']} <br>";
        echo "Price: {$goods[$i]['price']}<br>";
        echo "Qantity: {$goods[$i]['qty']} <br>";
        echo "<hr>";
    }*/

    if($goods[$i]['price'] < 200){
        $goods[$i]['price'] += 15;
    }
    echo "Names: {$goods[$i]['brand']} <br>";
    echo "Price: " . $goods[$i]['price'] . "<br>";
    echo "Qantity: {$goods[$i]['qty']} <br>";
    echo "<hr>";

}
echo "<br><br>";
foreach($goods as &$good){
    if($good['price'] < 200){
        echo "Names: {$good['brand']} <br>";
        echo "Price: " . $good['price'] . "<br>";
        echo "Qantity: {$good['qty']} <br>";
        echo "<hr>";
    }else{
        echo "Names: {$good['brand']} <br>";
        echo "Price: {$good['price']} <br>";
        echo "Qantity: {$good['qty']} <br>";
        echo "<hr>";
    }
}