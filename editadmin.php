<?php

require 'function.php';
$id = $_GET["id"];

$edt = query("SELECT * FROM tb_useradmin WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    if (ubahadmin($_POST) > 0) {
    echo "
    <script>
     alert('data berhasil diubah');
    document.location.href = 'useradmin.php';
    </script>
    ";
    } else {
    echo "
    <script>
    alert('data gagal diubah');
    document.location.href = 'useradmin.php';
    </script>
    ";
    }
   }

   include 'navbar.php';
?>
        <div class="col-md-6">
                <div class="card">
                    <form class="box" method="post" action="">
                        <h1>Registrasi Admin</h1><br>
                        <input type="hidden" name="id" id="id" value="<?php echo $edt['id']?>">
                        <input type="text" name="username" id="username" placeholder="username" value="<?php echo $edt['username']?>">
                        <input type="text" name="email" id="email" placeholder="Email" value="<?php echo $edt['email']?>">
                        <input class="login" type="submit" name="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


</body>

</html>