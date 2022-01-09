<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        .login{
            width: 230px;
            margin: 0;
            padding: 10px;
            border: 1px solid #CCC;
        }
        h1{
            text-align: center;
        }
        .login input{
            padding: 5px; margin: 5px;
        }
    </style>
</head>
<body>
<form method="post" action="Form.php" >
    <div class="login">
        <h1> Login </h1>
        <label> User Name
            <input type="text" placeholder="username" name="username">
        </label>
        <label> Password
            <input type="password" placeholder="password" name="password">
        </label>
        <input type="submit" value="Sign in">
    </div>

</form>
</body>
</html>
