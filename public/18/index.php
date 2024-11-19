<?php error_reporting(-1);
//Оператор switch

$i = 7;
/*switch($i)
{
    case 0:
        echo 0;
    break;
    case 1:
        echo 1;
    break;
    case 2:
        echo 2;
    break;
    case 3:
        echo 3;
    break;
    case 4:
        echo 4;
    break;
    default:
        echo 5;
}*/

switch($i)
{
    case 0:
    case 1:
    case 2:
    case 3:
    case 4:
        echo "Переменная <= 4";
    break;
    case 5:
        echo "Переменная = 5";
    break;
    case 6:
        echo "Переменная = 6";
    break;
    case 7:
        echo "Переменная = 7";
    break;
    case 8:
        echo "Переменная = 8";
    break;
    case 9:
        echo "Переменная = 9";
    break;
    default:
        echo 10;
}