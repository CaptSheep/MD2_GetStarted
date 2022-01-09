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
            padding: 10px;
            border-collapse: collapse;
        }
        .input input {
            padding: 5px; margin: 5px;
        }
        .submit{
            text-align: center;
            padding: 5px;
            margin: 0;
        }

    </style>
</head>
<body>
<div class="input">
    <form action="display_discount.php" method="post">
        <input type="text" name="product" placeholder="Input the product's description" >
        <input type="text"  placeholder="List Price" name="price">
        <input type="text" placeholder="Discount Percent" name="discount">
        <input type="submit" name="Submit" class="submit">
    </form>
</div>
</body>
</html>
