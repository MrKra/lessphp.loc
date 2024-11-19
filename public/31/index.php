<?php error_reporting(-1);
//Функции для работы со строками

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

/*
 * strlen — Возвращает длину строки
 * explode — Разбивает строку с помощью разделителя
 * implode — Объединяет элементы массива в строку
 * htmlspecialchars — Преобразует специальные символы в HTML-сущности
 * htmlentities — Преобразует все возможные символы в соответствующие HTML-сущности
 * ltrim — Удаляет пробелы (или другие символы) из начала строки
 * rtrim — Удаляет пробелы (или другие символы) из конца строки
 * trim — Удаляет пробелы (или другие символы) из начала и конца строки
 * nl2br — Вставляет HTML-код разрыва строки перед каждым переводом строки
 * str_split — Преобразует строку в массив
 * strpos — Возвращает позицию первого вхождения подстроки
 * stripos — Возвращает позицию первого вхождения подстроки без учёта регистра
 * strtolower — Преобразует строку в нижний регистр
 * strtoupper — Преобразует строку в верхний регистр
 * substr — Возвращает подстроку
 */

$str = '    Hello, world!     ';
$str2 = 'Привет, мир!';
$str3 = "<script>alert('©Hello &gt;' + \" world\")</script>";
$str4 = "Привет!\nВо первых строках своего письма...";

echo strlen($str);
echo mb_strlen($str2, 'UTF-8');

$data = explode(',', $str2);
debug($data);

echo implode(',', $data);
echo "<br><hr>";
echo htmlspecialchars($str3);
echo "<br><hr>";
echo  htmlspecialchars($str3, ENT_QUOTES, double_encode: false);
echo "<br><hr>";
echo htmlentities($str3);
echo "<br><hr>";
echo trim($str);
echo "<br><hr>";
echo ltrim($str);
echo "<br><hr>";
echo rtrim($str);
echo "<br><hr>";
echo $str4;
echo "<br><hr>";
echo nl2br($str4);
echo "<br><hr>";
debug(str_split($str));
