<?php

session_start();

if (isset($_SESSION["loginadmin"])){
    header('Location: dashboardbaru.php');
    exit;
}
require "function.php";

if (isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];


    $result = mysqli_query($conn, "SELECT * FROM tb_useradmin WHERE username ='$username'");

    if (mysqli_num_rows($result)){

        $rows= mysqli_fetch_assoc($result);

        if (password_verify($password, $rows["password"])){
            $_SESSION ["loginadmin"] = true;
            header("Location: dashboardbaru.php");
            exit;
        }
    }

    $error = true;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>

    <link rel="stylesheet" href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
    <link rel="stylesheet" href='https://use.fontawesome.com/releases/v5.8.1/css/all.css'>
    <link rel="stylesheet" href='Style/login1.css'>
</head>

<body>

    <div class="header">
        <img class="logo" src="logo.png">
        <ul class="website">
            <li><a href="index.php">Home</a></li>
        </ul>
        <h1 class="namestore">JOORG STORE</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form class="box" method="post" action="">
                        <h1>Login Admin</h1><br> <br>
                        <input type="text" name="username" id="username" placeholder="Username">
                        <input type="password" name="password" id="password" placeholder="Password"><br>
                        <?php if (isset($error)) : ?>
                            <p style="color:red; font-style:italic">ID Kasir atau Password Salah</p>
                        <?php endif ?>
                        <input class="login" type="submit" name="login" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>