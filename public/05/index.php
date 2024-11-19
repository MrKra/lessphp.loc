<?php
$title = 'Константы';

const CONST_2 = "value2";

define("CONST_1", "value");


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
</head>
<body>
<?php

echo CONST_1;
echo CONST_2;

?>
</body>
</html>