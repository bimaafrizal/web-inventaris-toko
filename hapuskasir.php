<?php

require 'function.php';

$id = $_GET["id"];

function hapus($id){
    global $conn;
 $query = "DELETE FROM tb_userkasir WHERE id=$id";
 mysqli_query($conn,$query);
 return mysqli_affected_rows($conn);
}

if (hapus($id) > 0){
    echo "
    <script>
    alert('Data BERHASIL dihapus');
    document.location.href = 'userkasir.php';
    </script>
    ";
   }
   else{
    echo "
    <script>
    alert('Data GAGAL dihapus');
    document.location.href = 'userkasir.php';
    </script>
    ";
   }
?>