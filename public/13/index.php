<?php error_reporting(-1);
//Управляющие конструкции. IF-ELSE-ELSEIF

$lite = 'yellow';

//if ($lite == "green")
//{
//    echo "Go";
//}
//if ($lite == 'yellow')
//{
//    echo 'Redy';
//}
//if ($lite == 'red')
//{
//    echo "Stop";
//}
//
//if ($lite == 'red')
//{
//    echo 'stop';
//} else {
//    echo 'go';
//}

if ($lite == 'green')
{
    echo 'go';
}elseif ($lite == 'yellow')
{
    echo 'redy';
}elseif ($lite == 'red')
{
    echo 'stop';
}