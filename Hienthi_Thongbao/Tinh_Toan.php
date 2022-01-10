<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $first = $_POST["first"];
    $second = $_POST["second"];
    if ( $first == "" && $second == ""){
        echo " Khong co gia tri , moi ban nhap vao gia tri";
    }
    else{
      echo " Voi so dau tien la : " . $first  . " va so tu hai la : " . $second ;
      echo "<br>";
      echo " Tong cua hai so do la : " . $first . " + " . $second . " = ". $first + $second;
      echo "<br>";
      echo " Hieu cua hai so do la : " . $first . " - " . $second . " = ". $first - $second;
      echo "<br>";
      echo " Tich cua hai so do la : " . $first . " * " . $second . " = ". $first * $second;
      echo "<br>";
      echo " Thuong cua hai so do la : " . $first . " / " . $second . " = ". $first / $second;
    }
}
?>
