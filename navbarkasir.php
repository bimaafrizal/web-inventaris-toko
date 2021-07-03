<?php
session_start();

if(!isset($_SESSION["loginkasir"])){
    header("Location: loginkasir.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
    <link rel="stylesheet" href='https://use.fontawesome.com/releases/v5.8.1/css/all.css'>
    <link rel="stylesheet" href="style1.css">
</head>
<!-- Header -->
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand active text-white" href="#">
                <img src="logo.png" alt="" width="30" height="30">
                JOORG | Mode Kasir
            </a>
            <div class="d-flex justify-content-around active text-white">
                <h3>Username</h3>
            </div>
        </div>
    </nav>
</div>

<!-- Konten dan Side Bar -->
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-md-2 mt-1 bg-secondary pr-3 pt-4">
            <nav class="nav flex-column ml-3 mb-5">
                <a class="nav-link text-white" aria-current="page" href="dashboardkasir.php">
                    <button type="button" class="btn btn-outline-warning">
                        Data Barang
                    </button>
                </a>
                <hr class=".bg-dark">
                <a class="nav-link text-white" aria-current="page" href="dashboardpembayaran.php">
                    <button type="button" class="btn btn-outline-warning">
                        Pembayaran
                    </button>
                </a>
                <hr class=".bg-dark">
                <a class="nav-link text-white" aria-current="page" href="logout.php">
                    <button type="button" class="btn btn-danger">
                        Logout
                    </button>
                </a>
            </nav>
        </div>