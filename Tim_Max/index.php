<?php
function findMax($array)
{
    $max = $array[0][0];
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array[$i]); $j++) {
            if ($max < $array[$i][$j]) {
                $max = $array[$i][$j];
            }
        }
    }
    return "So lon nhat trong mang la : " . $max;
}

echo findMax([
    [1, 2, 3],
    [4, 5, 6]
]);
