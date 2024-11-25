<?php require_once("connect.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <h1>Đăng nhập</h1>
    <form action="" method="get">
        <div class="user">
            <span>Tên đăng nhập: </span>
            <input type="text" name="username">
        </div>
        <div class="pass">
            <span>Mật khẩu: </span>
            <input type="password" name="password">
        </div>
        <input type="submit" name="signin" value="Đăng nhập">
        <input type="submit" name="signup" value="Đăng kí">
    </form>

    <?php
        $username = " ";
        $password = " ";
        if(isset($_GET['username'])){
            $username = $_GET["username"];
        }
        if(isset($_GET['password'])){
            $password = $_GET["password"];
        }
        if(isset($_GET['signin'])){
            $accountInfo = $conn -> query('select * from user');
            $accountInfo = $accountInfo -> fetch();
            
        }
    ?>
</body>
</html>