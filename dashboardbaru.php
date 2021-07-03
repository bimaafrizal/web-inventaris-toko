<?php

require "function.php";
    
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
    <title>JOORG Data Barang</title>
</head>


<div class="col-md-8">
    <div class="container">
        <div class="row pl-3">
            <div class="col-md-12 pl-5 justify-content-center">
                <h3 class="text-center pl-5 mt-5">Data Barang</h3>
            </div>
        </div>
        <!-- Isi konten disini -->
        <div class="col-md-10 mt-5 mr-2">
            <table allign="center" class="isi" border="1" cellspacing=2 cellpadding=1 style="width: 100%">
                <thead class="tulisan">
                    <th>No</th>
                    <th>Baju</th>
                    <th>Warna</th>
                    <th>Size</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    <?php foreach ($rows as $row) :?>
                    <tr>
                    <td align=center valign=top><?php echo $i ?></td>
                        <td align=center valign=top><?php echo $row["Baju"]; ?></td>
                        <td align=center valign=top><?php echo $row["Warna"]; ?></td>
                        <td align=center valign=top><?php echo $row["Size"]; ?></td>
                        <td align=center valign=top><?php echo $row["Jumlah"]; ?></td>
                        <td align=center valign=top>Rp. <?php echo number_format($row["Harga"]) ; ?></td>
                        <td align=center valign=top>
                            <a class="nav-link text-white" aria-current="page"
                            href="editbarang.php?id=<?php echo $row["id"];?>">
                                <button type="button" class="btn- btn-info">
                                Ubah
                            </a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
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

<body>

</body>

</html>