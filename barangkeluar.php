<?php
// require "beli.php";
// require "function.php";

// $id = $_GET['id'];
// $sisa = (int)$Jumlah - $klik;

// function editStock($databarang)
// {
//     global $conn;
//     global $sisa;

//     $id = $databarang['id'];
//     $query = "UPDATE tb_inventaris SET
//     Jumlah = $sisa
//     WHERE id =$id
//     ";
//     mysqli_query($conn, $query);
//     return mysqli_affected_rows($conn);
// }

// if (isset($_POST["barangKeluar"])) {
//     if (editStock($_POST) > 0) {
//         echo "<script>
//         alert('Barang Keluar Sukses');
//         </script>";
//         echo "<script>
//         location='riwayat.php';
//         </script>";
//     } else {
//         echo "<script>alert('Barang gagal keluar');</script>";
//         echo "<script>
//         location='beli.php';
//         </script>";
//     }
// }
$db = mysqli_connect('bariskode.online', 'bariskod', 'passforlife9', 'bariskod_joorg');
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Add item
if (isset($_POST['update'])) {
    // receive all input values from the form
    //echo "connect";


    $id = $_POST['id'];

    $product = mysqli_query($db, "SELECT * FROM  tb_inventaris WHERE id = '$id'");
    $array_product = mysqli_fetch_assoc($product);
    // var_dump($array_product);
    $Jumlah = (int)$array_product['Jumlah'];
    $item_name = mysqli_real_escape_string($db, $id);
    // $quant = (int) $_POST['quantity'];
    $ambilbarang = (int) $_POST['ambil_material'];

    //var_dump($Jumlah, $ambilbarang);
    if ($Jumlah < $ambilbarang) {
        echo "<script>  
        if(confirm('Stok tidak mencukupi')) {
            window.location.href = 'dashboardbaru.php'
        }
        </script>";
    } else {
        $quant = $Jumlah - $ambilbarang;
        // var_dump($quant, $Jumlah, $ambilbarang);
        // die;
        $query = "UPDATE tb_inventaris SET Jumlah=$quant WHERE id='$id'";
        if ($item_name == $array_product['id']) {
            if (mysqli_query($db, $query)) {
                echo "<script>alert('berhasil diupdate');</script>";
            } else {
                echo "<script>alert('gagal');</script>";
            }
            header('location: dashboardbaru.php');
        }
    }


    // $query = "UPDATE tb_product SET quantity=$quant WHERE product_id=$id";
    // if (mysqli_query($db, $query)) {
    //     echo "<script>alert('berhasil diupdate');</script>";
    // } else {
    //     echo "<script>alert('gagal');</script>";
    // }

}
