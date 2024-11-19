<?php
//строки
$str = 'Hello1';
$str2 = "Hello2";

print $str;
print "<br>";
print $str2;

$str3 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid delectus deserunt eligendi eos fugit, hic illum inventore iusto libero optio perspiciatis, praesentium provident quasi quia quisquam quo rerum tenetur veritatis?";

$name = "John";
$str4 = <<<HEREDOC
<div>
Hello $name <br>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid delectus deserunt eligendi eos fugit, hic illum inventore iusto libero optio perspiciatis, praesentium provident quasi quia quisquam quo rerum tenetur veritatis?</div>
HEREDOC;



