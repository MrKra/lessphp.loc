<?php error_reporting(-1);?>
//Альтернативный синтаксис управляющих структур
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium dicta dolorem laboriosam quas quisquam? Aliquam asperiores cumque, dignissimos illo incidunt ipsam iusto pariatur placeat quasi repellat rerum velit voluptatibus!</p>
<?php

$nums = [1,2,3,4,5];
foreach ($nums as $num):
    echo "<p>$num</p>";
endforeach;

?>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur doloribus ducimus enim iure labore omnis quidem similique? Dicta, ea
    <?php foreach ($nums as $num):?>
        <?php echo "<p>{$num}</p>"; ?>
    <?php endforeach; ?>
    eaque est iusto maiores nulla perferendis quod temporibus? Aut, ipsum veniam.</p>
</body>
</html>