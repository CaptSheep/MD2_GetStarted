<?php
if ( $_SERVER["REQUEST_METHOD"] == "POST"){
    $input = $_POST["input"];
    $total= $_POST["total"];
    $VND = 23000 * $input;
    echo " So tien " . $input . " ". "USD" . " chuyen sang VND co gia tri la : " . $VND  . " " . "VND";
 }




