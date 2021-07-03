<?php

require "function.php";

    
$rows = query("SELECT * FROM tb_userkasir");

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
    <title>User Kasir</title>
</head>
<div class="col-md-8">
            <div class="container">
                <div class="row pl-3">
                    <div class="col-md-12 pl-5 justify-content-center">
                        <h3 class="text-center pl-5 mt-5">Data User Kasir</h3>
                    </div>
                </div>

        <div class="col-md-6 mt-5 ml-4 ">
            <table class="isi" border="1" cellspacing=10 cellpadding=5 style="width: 150%">
                <thead class="tulisan">
                    <th>No</th>
                    <th>Nama</th>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Action</th>
                </thead>
                <tbody class="tulisan">
                    <?php $i=1; ?>
                    <?php foreach ($rows as $row) :?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row["username"]; ?></td>
                        <td><?php echo $row["id_kasir"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td>
                            <a href="editkasir.php?id=<?php echo $row["id"];?>">Ubah | </a>
                            <a href="hapuskasir.php?id=<?php echo $row["id"];?>"
                                onclick="return confirm(' Apakah anda yakin akan menghapus data?')">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>