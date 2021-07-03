<?php
session_start();

if(!isset($_SESSION["loginadmin"])){
    header("Location: loginadmin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
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
                JOORG | Mode Admin
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
                <a class="nav-link text-white" aria-current="page" href="dashboardregistrasibaru.php">
                    <button type="button" class="btn btn-outline-warning">
                        Registrasi
                    </button>
                </a>
                <hr class=".bg-dark">
                <a class="nav-link text-white" aria-current="page" href="dashboarduser.php">
                    <button type="button" class="btn btn-outline-warning">
                        User
                    </button>
                </a>
                <hr class=".bg-dark">
                <a class="nav-link text-white" aria-current="page" href="dashboardbaru.php">
                    <button type="button" class="btn btn-outline-warning">
                        Data Barang
                    </button>
                </a>
                <hr class="bg-secondary">
                <a class="nav-link text-white" aria-current="page" href="dashboardbarangmasukbaru.php">
                    <button type="button" class="btn btn-outline-warning">
                        Barang Masuk
                    </button>
                </a>
                <hr class=".bg-dark">
                <a class="nav-link text-white" aria-current="page" href="dashboardbarangkeluarbaru.php">
                    <button type="button" class="btn btn-outline-warning">
                        Barang Keluar
                    </button>
                </a>
                <hr class=".bg-darky">
                <!-- <a class="nav-link text-white" aria-current="page" href="#">
                    <button type="button" class="btn btn-outline-warning">
                        Riwayat
                    </button>
                </a> -->
                <hr class=".bg-dark">
                <a class="nav-link text-white" aria-current="page" href="logout.php">
                    <button type="button" class="btn btn-danger">
                        Logout
                    </button>
                </a>
            </nav>
        </div>