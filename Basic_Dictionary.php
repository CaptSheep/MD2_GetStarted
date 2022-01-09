<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .input {
            width: 25%;
            border: 1px solid black;
            margin: 0;
            padding: 10px;
        }

        .name {
            text-align: center;
        }
    </style>
</head>
<body>
<form method="post">
    <div class="input">
        <label class="name"> VN_EN Dictionary</label>
        <br>
        <input type="text" placeholder="Nhap tu can dich" name="search">
        <input type="submit" value="Tim">
    </div>

</form>
<?php
$dictionary = [
    "hello" => "xin chào",
    "how" => "thế nào",
    "book" => "quyển vở",
    "computer" => "máy tính"
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $searchWord = $_POST["search"];
   $flag = 0;
   foreach ($dictionary as $word => $description){
       if ($word == $searchWord){
           echo "Tu". " ". $word . " " . "co nghia la :" . $description;
           $flag = 1;
       }
       }
    if ($flag = 0){
        echo " Khong tim thay tu vua nhap";
   }
}
?>
</body>
</html>

