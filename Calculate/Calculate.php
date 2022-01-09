<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$first = $_POST["first"];
$second = $_POST["second"];
$result = $_POST["operator"];
if ( $first == "" && $second == ""){
    echo " Khong co gia tri , moi ban nhap vao gia tri";
}
else{
    switch ($result){
        case "addition":
            $result = $first + $second;
            echo " Ket qua cua phep tinh la : " . " " . $first . " + " . $second . " = " . $result;
            break;
        case "minus":
            $result = $first - $second;
            echo " Ket qua cua phep tinh la : " . " " . $first . " - " . $second . " = " . $result;
            break;
        case "plus":
            $result = $first * $second;
            echo " Ket qua cua phep tinh la : " . " " .  $first . " * " . $second . " = " . $result;
            break ;
        case "division":
            $result = $first / $second;
            echo " Ket qua cua phep tinh la : " . " " . $first . " / " . $second . " = " . $result;
            break;
        default:
            echo " Khong co gia tri ";
            break;

    }

}

}
