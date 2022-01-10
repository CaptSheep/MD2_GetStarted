<?php
function checkMin($array)
{
    $min = $array[0];
    $index = 0;
    for ($i = 1 ; $i < count($array); $i++) {
        if ($min > $array[$i]) {
            $min = $array[$i];
            $index = $i;
        }
    }
    return "So nho nhat la : " . $min . " tai vi tri :" . $index;
}

echo (checkMin([1, 2, 3, 4, 6]));




