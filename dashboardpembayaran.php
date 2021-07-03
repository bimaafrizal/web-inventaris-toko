<?php

require "function.php";

$rows = query("SELECT * FROM tb_inventaris");

include 'navbarkasir.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
    <link rel="stylesheet" href='https://use.fontawesome.com/releases/v5.8.1/css/all.css'>
    <title>Barang Keluar</title>
</head>

<body>
    <div class="col-md-8">
        <div class="container">
            <div class="row pl-3">
                <div class="col-md-12 pl-5 justify-content-center">
                    <h3 class="text-center pl-5 mt-5">Barang Keluar</h3>
                </div>
            </div>
            <form class="form-horizontal form-material mx-2" method="POST" action="barangkeluarkasir.php">
                <div class="form-group">
                    <label class="col-md-12" for="name">Produk : </label>
                    <div class="col-md-12">
                        <?php
                        $conn = mysqli_connect('bariskode.online', 'bariskod', 'passforlife9', 'bariskod_joorg');
                        $ambil = $conn->query("SELECT * FROM tb_inventaris");
                        ?>
                        <!-- <input autocomplete="off" type="text" class="form-control"
                                                    placeholder="Jenis Material" list="stock" name="product_name"> -->
                        <!-- <input autocomplete="off" type="hidden" class="form-control"
                                                    placeholder="Jenis Material" list="stock" name="product_id"> -->
                        <!-- <datalist id="stock"> -->
                        <select name="id" id="id" class="form-control p-0">
                            <?php
                            // while ($stock = $ambil->fetch_assoc()) { 
                            $namamaterial = mysqli_query($conn, "SELECT * FROM tb_inventaris");
                            while ($datamaterial = mysqli_fetch_assoc($namamaterial)) :
                            ?>
                                <option value="<?= $datamaterial["id"] ?>">
                                    <?= $datamaterial['Baju'] ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                        <!-- </datalist> -->
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-md-12">Barang Keluar</label>
                    <div class="col-md-12">
                        <input type="number" class="form-control form-control-line" placeholder="Jumlah" name="ambil_material" id="ambil_material" min="1" max="">
                    </div>
                </div>
                <div class="form-group float-right">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="update" class="btn btn-primary">Kurangi
                            Stock</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    </div>
    </div>
</body>
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

</html>