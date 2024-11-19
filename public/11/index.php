<?php error_reporting(-1);
//Логические операторы

$a = 3 == 3 && 3 < 2;
var_dump($a);
echo"<br>";
$a = 3 == 3 and 3 < 2;
var_dump($a);
echo"<br>";
$a = 3 == 3 || 3 < 2;
var_dump($a);
echo"<br>";
$a = 3 == 3 or 3 > 2;
var_dump($a);
echo"<br>";
echo"<br>";
var_dump(!(2 > 3));