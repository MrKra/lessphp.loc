<?php error_reporting(-1);
//Цикл for

/*for ($i = null; $i <= 10; $i++){
    echo $i . "<br>";
}
for ($i = 20; $i >= 1; $i--){
    echo "<br>" . $i . "<br>";
}*/

echo '<select style="width: 120px;">';
echo '<option value="Выбирите год">Выбирите год</option>';
for ($i = 1989; $i <= 2024; $i++){
    echo "<option value='{$i}'>год - {$i}</option>";
}
echo '</select>';
echo "<hr><br>";
echo '<table border="1">';
for ($tr = 2; $tr <= 9; $tr++){
    echo "<tr>";
    for ($td = 2; $td <= 9; $td++){
        echo "<td>$tr * $td = ". $tr * $td ."</td>";
    }
    echo "</tr>";
}
echo '<table>';






