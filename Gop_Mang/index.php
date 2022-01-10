<?php

//cach 1 : dung ham array_merge
//$array3 = array_merge($array1,$array2);
//echo "<pre>";
//print_r($array3);
//echo "</pre>"

//Cach 2 :dung push
function mergeArray($array1, $array2)
{
    $array3 = [];
    for ($i = 0; $i < count($array1); $i++) {
        array_push($array3, $array1[$i]);
    }
        for ($j = 0; $j < count($array2); $j++) {
            array_push($array3, $array2[$j]);
        }

    return $array3;
}
$array1 = [1,2,3];
$array2 = [4,5,6];
print_r(mergeArray($array1,$array2)) ;



