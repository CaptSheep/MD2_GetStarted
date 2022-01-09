
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $product = $_POST["product"];
    $price = $_POST["price"];
    $discount = $_POST["discount"];
    $discountAmount = $price * $discount * 0.1;
    $total = $price - $discountAmount;
        echo "San pham : " . $product . " " . "co gia la : " . $price . " " . " VND " .  "va duoc giam gia : " . " " . $discount . " %" ;
        echo "</br>";
        echo "So tien duoc chiet khau la : " . " " . $discountAmount . " VND" ;
        echo "</br>";
        echo "So tien con lai la : " . " " . $total . " VND ";


}


