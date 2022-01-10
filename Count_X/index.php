<?php
function countX($str, $X)
{
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == $X) {
            $count++;
        }
    }
    return $count;
}

$str = 'Hello World';
$n = 'l';
echo (countX($str ,'l'));
