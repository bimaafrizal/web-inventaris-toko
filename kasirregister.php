<?php

require "function.php";

if (isset ($_POST["registrasi"])){

    if (registrasikasir($_POST)>0){
        echo "
            <script>
                alert('Registrasi Berhasil');
                document.location.href = 'userkasir.php';
            </script>
        ";
    }
    else{
        echo mysqli_error($conn);
    }
}

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
    <title>Registrasi Kasir</title>
</head>


        <div class="col-md-6">
                <div class="card">
                    <form class="box" method="post" action="">
                        <h1>Registrasi Kasir</h1><br>
                        <input type="text" name="username" id="username" placeholder="Username">
                        <input type="text" name="email" id="email" placeholder="Email">
                        <input type="text" name="id_kasir" id="id_kasir" required placeholder="ID">
                        <input type="password" name="password" id="password" required placeholder="Password">
                        <input type="password" name="password2" id="password2" required placeholder="Konfirmasi Password">
                        <input class="login" type="submit" name="registrasi" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


</body>

</html>