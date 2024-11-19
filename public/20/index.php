<?php error_reporting(-1);
//Выражение match

/*$a = 10;
$res = match($a){
    1 => 'One',
    2 => 'Two',
    3 => 'Three',
    4 => 'Four',
    5 => 'Five',
    6 => 'Six',
    7 => 'Seven',
    default => 'Ten',
};
echo $res;*/

/*$a = 2;
$res = match($a){
    1, 2, 3, 4 => 'Var <= 4',
    5 => 'Five',
    6 => 'Six',
    7 => 'Seven',
    default => 'Ten',
};
echo $res;*/

$a = 5;
$res = match(true){
    $a >= 10 => 'Very good',
    $a >= 7 => 'Good',
    $a >= 4 => 'Satisfactorily',
    $a >= 3 => 'Minimal',
    default => 'Bad',
};
echo $res;