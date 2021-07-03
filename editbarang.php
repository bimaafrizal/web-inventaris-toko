<?php
require 'function.php';

$id = $_GET["id"];

$edt = query("SELECT * FROM tb_inventaris WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    if (ubahbarang($_POST) >= 0) {
    echo "
    <script>
     alert('data berhasil diubah');
    document.location.href = 'dashboardbaru.php';
    </script>
    ";
    } else {
    echo "
    <script>
    alert('data gagal diubah');
    document.location.href = 'dashboardbaru.php';
    </script>
    ";
    }
   }

   include 'navbar.php';
?>

<div class="col-md-8">
            <div class="container">
                <div class="row pl-5">
                    <div class="col-md-12 pl-5 justify-content-center">
                        <h3 class="text-center pl-5 mt-5">Barang Masuk</h3>
                    </div>
                </div>
                <form action="" method="post" class="form-group">
                    <div class="row mt-3 pl-5 justify-content-center">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-5 pl-3">
                            <label for="namaBarang">Nama Barang : </label>
                            <input type="hidden" name="id" value="<?php echo $edt['id']?>">
                            <input type="text" class="form-control" name="namaBarang" value="<?php echo $edt['Baju']?>" placeholder="Nama Barang">
                        </div>
                        <div class="col-md-5 pl-3">
                            <label for="warna">Warna :</label>
                            <input type="text" class="form-control" name="warna" value="<?php echo $edt['Warna']?>" placeholder="Warna">
                        </div>
                    </div>

                    <div class="row mt-3 pl-5 justify-content-center">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-5 pl-3">
                            <label for="jumlah">Jumlah : </label>
                            <input type="numnber" class="form-control" name="jumlah" value="<?php echo $edt['Jumlah']?>" placeholder="Jumlah">
                        </div>
                        <div class="col-md-5 pl-3">
                            <label for="ukuran">Ukuran :</label>
                            <input type="text" class="form-control" name="ukuran" value="<?php echo $edt['Size']?>" placeholder="Ukuran">
                        </div>
                    </div>

                    <div class="row mt-3 pl-5 justify-content-center">
                        <div class="col-md-2">
                        </div>
                        <div class="form-group col-md-5 pl-3">
                            <label for="Harga"> Harga : </label>
                            <input type="number" class="form-control" name="harga" value="<?php echo $edt['Harga']?>" placeholder="Harga">
                        </div>
                        <div class="form-group col-md-5 pl-3">
                        </div>
                    </div>

                    <div class="row mt-3 pl-5 d-flex justify-content-end">
                        <div class="col-md-6 pl-5">
                        </div>
                        <div class="col-md-4 pl-5">
                        </div>
                        <div class="form-group col-md-2 pl-4">
                        <button type="submit" name="submit" class="btn btn-success">Update Data</button>
                        </div>
                    </div>
                </form>
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