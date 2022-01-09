<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>


<body>
<div class="calculate">
    <form action="Calculate.php" method="post" >
        Nhap so thu nhat : <input type="text" placeholder="Nhap so thu nhat" name="first">
        <br>
        Chon phep tinh : <select name="operator">
            <option value="addition"> Addition </option>
            <option value="minus"> Minus </option>
            <option value="plus"> Plus </option>
            <option value="division"> Division </option>
        </select>
        <br>
        Nhap so thu hai : <input type="text" placeholder="Nhap so thu hai" name="second">
        <input type="submit"  value="result" class="result">
    </form>
</div>






</body>
</html>