<?php error_reporting(-1);
//Пользовательские функции

function test()
{
    echo 'Hello PHP!!!';
}

test();

echo "<br>";

function hello($name = 'Guest')
{
    echo "Hello, {$name}";
}

hello();

echo "<br>";

function sum($b, $a = 7, $c = 5)
{
    echo ($a + $b) * $c;
}

sum(14);

echo "<br>";

$n = 5;

function test2($n)
{
    global $n;
    echo  $n += 10;

}

var_dump($n);
test2($n);
var_dump($n);

echo "<br>";

function test3(&$num)
{
    $num += 10;
}

$num = 20;
test3($num);
var_dump($num);
