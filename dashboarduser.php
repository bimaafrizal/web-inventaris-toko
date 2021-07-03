<?php

require "function.php";

// session_start();

// if(!isset($_SESSION["login"])){
//     header("Location: loginadmin.php");
//     exit;
// }
    
$rows = query("SELECT * FROM tb_inventaris");

include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
    <link rel="stylesheet" href='https://use.fontawesome.com/releases/v5.8.1/css/all.css'>
    <title>Dashboard User</title>
</head>
        <div class="col-md-8">
            <div class="container">
                <div class="row pl-5">
                    <div class="col-md-12 pl-5 justify-content-center">
                        <h3 class="text-center pl-5 mt-5">Pilih Mode</h3>
                    </div>
                </div>
                <div class="row mt-4 pl-5 justify-content-center">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-5 pl-3 ms-5">
                        <div class="card bg-danger text-white">
                            <div class="card-body">
                                <h5 class="card-title">Admin</h5>
                                <p class="card-text">Pilih Mode Admin.</p>
                                <a href="useradmin.php" class="btn btn-primary">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 pl-3 ms-5">
                        <div class="card bg-success text-white">
                            <div class="card-body">
                                <h5 class="card-title">Kasir</h5>
                                <p class="card-text">Pilih Mode Kasir.</p>
                                <a href="userkasir.php" class="btn btn-primary">Lihat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="container-fluid">
    <div class="row justify-content-center bg-light text-dark">
        <div class="col-5 p-2">
            <h5 class="text-center">ABOUT US</h5>
            <p class="text-center">
                JOORG merupakan toko yang menyediakan berbahagai kaos sablon
            </p>
        </div>
    </div>
</div>
<footer class="bg-primary">
    <div class="text-white text-center pt-3 pb-3">
        Copyright @2021 - JOORG STORE
    </div>
</footer>
</body>

</html>