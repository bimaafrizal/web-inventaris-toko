<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOORG Store</title>
    <link rel="stylesheet" href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
    <link rel="stylesheet" href='https://use.fontawesome.com/releases/v5.8.1/css/all.css'>

    <style>
        <?php
        include 'Style/home.css';
        ?>.warna-bg {
            background: linear-gradient(to right, rgba(91, 134, 229, .92), rgba(54, 209, 220, .92));
        }

        .jumbotron-bg {
            background-size: cover;
            background: url(baju.jpeg);
            background-size: 200px;
        }
    </style>
</head>

<body>
    <!-- Headaer -->
    <div class="header">
        <img class="logo" src="logo.png">
        <ul class="website">
            <li><a href="index.php">Home</a></li>
        </ul>
        <h1 class="namestore">JOORG STORE</h1>
    </div>

    <!-- Content -->
    <section class="jumbotron-bg">
        <div class="jumbotron warna-bg text-white">
            <div class="container">
                <h1 class="display-4">Selamat Datang di Sistem Inventoris JOORG</h1>
                <p class="lead">Silahkan Login menggunakan mode yang tersedia</p>
                <a class="btn btn-success btn-lg" href="loginadmin.php" role="button">Mode Admin</a>
                <a class="btn btn-success btn-lg" href="loginkasir.php" role="button">Mode Kasir</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <div class="container-fluid bg-info py-1 fixed-bottom">
        <div class="row justify-content-center text-light">
            <div class="col-5 p-2">
                <h5 class="text-center text-white">ABOUT US</h5>
                <p class="text-center text-white">
                    JOORG merupakan toko yang menyediakan berbahagai kaos sablon
                </p>
            </div>
        </div>
        <footer class="container-fluid bg-primary">
        <div class="text-white text-center pt-3 pb-3">
            Copyright @2021 - JOORG STORE
        </div>
    </footer>
    </div>
    
    

</html>