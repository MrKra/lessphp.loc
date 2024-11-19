<?php

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