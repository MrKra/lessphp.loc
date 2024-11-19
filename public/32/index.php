<?php error_reporting(-1);

$str = "Hello World";

function str_count($str, $substr)
{
   return substr_count($str, $substr);
}

echo str_count('Hello World', 'l');

function no_space(string $srt)
{
    return str_replace(' ', '', $srt);
}
echo no_space($str);

function max_number(int $num): int
{
    $digits = str_split(123);
    rsort($digits);
    return implode('', $digits);
}

echo max_number(123);