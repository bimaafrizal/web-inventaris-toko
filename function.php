<?php
$conn = mysqli_connect('bariskode.online', 'bariskod', 'passforlife9', 'bariskod_joorg');

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
    }
    return $rows;
   }

//REGISTRASI KASIR
function registrasikasir($datakasir) {

    global $conn;
    $username = strtolower($datakasir["username"]);
    $email = strtolower($datakasir["email"]);
    $id =mysqli_escape_string($conn, $datakasir["id_kasir"]);
    $password = mysqli_escape_string($conn, $datakasir["password"]);
    $password2 = mysqli_escape_string($conn, $datakasir["password2"]);

    $result = mysqli_query($conn, "SELECT username FROM tb_userkasir WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "
            <script>
                alert('username sudah terdaftar');
            </script>
        ";
        return true;
    }

    if ($password != $password2) {
        echo "
        <script>
            alert('konfirmasi password tidak sama');
        </script>
        ";
        return false;
    } else {
        
        $password = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($conn, "INSERT INTO tb_userkasir VALUES ('', '$username','$id','$email', '$password')");
        
        return mysqli_affected_rows($conn);
    }
}

function ubahkasir($datakasir){
    global $conn;
    $id = $datakasir["id"];
    $username = $datakasir["username"];
    $email = $datakasir["email"];
    $kode = $datakasir["id_kasir"];
    $query = "UPDATE tb_userkasir SET
    username = '$username',
    email = '$email'
    WHERE id=$id
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
   }

//REGISTRASI ADMIN
function registrasiadmin($dataadmin) {

    global $conn;
    $username = strtolower($dataadmin["username"]);
    $email = strtolower($dataadmin["email"]);
    $id =mysqli_escape_string($conn, $dataadmin["id_admin"]);
    $password = mysqli_escape_string($conn, $dataadmin["password"]);
    $password2 = mysqli_escape_string($conn, $dataadmin ["password2"]);

    $result = mysqli_query($conn, "SELECT username FROM tb_useradmin WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "
            <script>
                alert('username sudah terdaftar');
            </script>
        ";
        return true;
    }

    if ($password != $password2) {
        echo "
        <script>
            alert('konfirmasi password tidak sama');
        </script>
        ";
        return false;
    } else {
        
        $password = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($conn, "INSERT INTO tb_useradmin VALUES ('', '$username','$id','$email', '$password')");
        
        return mysqli_affected_rows($conn);
    }
}

function ubahadmin($dataadmin){
    global $conn;
    $id = $dataadmin["id"];
    $username = $dataadmin["username"];
    $email = $dataadmin["email"];
    $kode = $dataadmin["id_admin"];
    $query = "UPDATE tb_useradmin SET
    username = '$username',
    email = '$email'
    WHERE id=$id
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
   }


//    Barang
function ubahbarang($databarang){
    global $conn;
    $id = $databarang["id"];
    $baju = $databarang["namaBarang"];
    $warna = $databarang["warna"];
    $size = $databarang["ukuran"];
    $jumlah = $databarang["jumlah"];
    $harga = $databarang["harga"];
    $query = "UPDATE tb_inventaris SET
    Baju = '$baju',
    Warna = '$warna',
    Size = '$size',
    Jumlah = '$jumlah',
    Harga = '$harga'
    WHERE id=$id
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
   }

   function tambahbarang($databarang) {

    global $conn;
    $baju = $databarang["namaBarang"];
    $warna = $databarang["warna"];
    $jumlah = $databarang["jumlah"];
    $size = $databarang["ukuran"];
    $harga = $databarang ["harga"];

    $result = mysqli_query($conn, "SELECT Baju FROM tb_inventaris WHERE Baju = '$baju'");

    if (mysqli_fetch_assoc($result)) {
        echo "
            <script>
                alert('Baju telah tersedia');
            </script>
        ";
        return true;
    }
    mysqli_query($conn, "INSERT INTO tb_inventaris VALUES ('', '$baju','$warna','$size', '$jumlah', '$harga')");
       
    return mysqli_affected_rows($conn);

}
?>