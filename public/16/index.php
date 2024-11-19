<?php error_reporting(-1);

$i = 1900;
echo "<select>";
echo "<option>Default</option>";
while ($i <= 2024) {
    echo "<option value='{$i}'>{$i}</option>";
    $i++;
}
echo "</select>";


$a = 2;
echo '<table border="1" width="100%">';
while ($a <= 9) {
    echo "<tr>";
    $b = 2;
    while ($b <= 9) {
        echo "<td style='text-align: center;'>{$a} * {$b} = " . $a * $b . "</td>";
        $b++;
    }
    echo "</tr>";
    $a++;
}

echo '</table>';
