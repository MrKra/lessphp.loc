<?php

$goods = [
    [
        'title' => 'Nokia',
        'price' => '100',
        'qty' => '10',
    ],
    [
        'title' => 'Sony',
        'price' => '120',
        'qty' => '7',
    ],
    [
        'title' => 'LG',
        'price' => '105',
        'qty' => '15',
    ],
];
$arr = [1,2,3,4,5,6,7,8,9,10];
function get_count($arr): int
{
    $cnt = 0;
    foreach ($arr as $item){
        $cnt +=1;
    }
    return $cnt;
}
echo get_count($goods);
echo "<hr><br>";

function get_table($tr_cnt, $td_cnt)
{
    $table = "<table border='1'>";
    for ($tr = 2; $tr <= $tr_cnt; $tr++) {
        $table .= "<tr>";
        for ($td = 2; $td <= $td_cnt; $td++) {
            $table .= "<td> {$td} * {$tr} = " . $td * $tr . "</td>";
        }
        $table .= "</tr>";
    }
    $table .= "</table>";
    return $table;
}

echo get_table(9, 9);
