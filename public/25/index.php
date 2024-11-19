<?php error_reporting(-1);
//Пользовательские функции 2

function sum($a, $b, ...$nums)
{
    $res = $a * $b;
    foreach ($nums as $num){
        $res += $num;
    }
    echo $res;
}

sum(1,2,3,4,5,6,7,8,9,10);

echo "<br><hr>";

function test()
{
    static $a = 0;
    echo $a;
    $a++;
}

test();
test();
test();

echo "<br><hr>";

function sum2(int $a, int $b, int $c)
{
    echo $a + $b+ $c;
}

sum2(1, 5.2, 3);

echo "<br><hr>";

function sum3($a, $b, $c): int
{
    return $a + $b+ $c;
}

echo sum3(1, 5.2, 3);

echo "<br><hr>";

function test2(): void
{

}

echo "<br><hr>";

function test3(string $name): ?string
{
    if($name)
    {
        return 'Test';
    }
    return null;
}

echo "<br><hr>";

function sum4($term1, $term2 = 1, $factor = 8, $cococo = 99)
{
    return $term1 + $term2 * $factor;
}

echo sum4(1, 8, factor: 3, cococo: 52);