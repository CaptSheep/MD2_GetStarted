<?php
function deletex($arr,$x){
    for ( $i = 0 ; $i < count($arr) ; $i++){
        if($x == $arr[$i]){
            unset($arr[$i]);
        }
    }
    return $arr;
}
$arr = [1,2,3,4,5];
$x = 3 ;
print_r(deletex($arr,$x));