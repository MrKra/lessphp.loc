<?php error_reporting(-1);
//Операторы continue и break

echo "Вывод цикла while";
echo "<br><br>";
$i = 1;
while($i <= 20){
    if(!($i % 2)){ // выводит не четные числа (if($i % 2 == 0))
        $i++;
        continue;
    }
    echo $i . '<br>';
    $i++;
}
echo "<br><br>";
$i = 1;
while($i <= 20){
    if($i % 2){ // выводит не четные числа (if($i % 2 == 0))
        $i++;
        continue;
    }
    echo $i . '<br>';
    $i++;
}

echo "<br><br>";

echo "Вывод цикла for";
echo "<br><br>";
for($i = 1; $i <= 20; $i++){
    if(!($i % 2)){ // выводит не четные числа (if($i % 2 == 0))
        continue;
    }
    echo "{$i} <br>";
}
echo "<br><br>";
for($i = 1; $i <= 20; $i++){
    if($i % 2){ // выводит четные числа (if($i % 2 != 0))
        continue;
    }
    echo "{$i} <br>";
}

echo "<br><br>";

echo"<table border='1' style='width: 95%;'>";
for($tr = 2; $tr <= 9; $tr++){
    echo"<tr>";
    for($td = 2; $td <= 9; $td++){
        if($td == 5)
        {
            continue 2;
        }
        //echo"<td>{$tr} * {$td} = " . $tr * $td . "</td>";
        echo "<td>{$td}</td>";
    }
    echo"<tr>";
}
echo"</table>";

echo "<br><br>";

$a = 1;
while(true)
{
    echo "{$a} <br>";
    if($a == 14)
    {
        echo "{$a} == 20";
        break;
    }
    $a++;
}