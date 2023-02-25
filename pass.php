<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.html");
}
$servername = "localhost";
$username = "root";
$password = "";
$database = "simple_note";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn){
    die("connection failed: ".mysqli_connect_error());
}
$user = $_SESSION['username'];
$query = "SELECT sandi FROM users WHERE username='$user'";
$fer = mysqli_query($conn, $query);
while($data = mysqli_fetch_array($fer)){
    $pass = $data['sandi'];
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.css">
    <style>
        .vace{
            color: red;
        }
    </style>
    <title>Profil Anda</title>
</head>
<body>
    <div class="content pb-2 pt-3">
        <div class="forum">
            <h1 class="text-center">Ubah Password</h1>
        <?php
        if(isset($_POST['user'])){
            $pl = $_POST['pl'];
            $pb = $_POST['pb'];
            $pk = $_POST['pk'];
            if($pass == $pl && $pb == $pk){
                $query1 = "UPDATE users SET sandi='$pb' WHERE username='$user';";
                mysqli_query($conn, $query1);
                header("Location: app.php");
            }else if($pass != $pl && $pb == $pk){
        ?>
            <form method="post">
                <label>Password Lama</label>
                <input name="pl" class="form-control is-invalid" type="password" required placeholder="Masukkan Password Lama"<?php echo "value='$pl'" ?>>
                <div class="invalid-feedback">Password Salah</div>
                <label class="pt-4">Password Baru</label>
                <input name="pb" class="form-control" type="password" required placeholder="Masukkan Password Baru" <?php echo "value='$pb'" ?>>
                <br>
                <label>Konfirmasi Password Baru</label>
                <input name="pk" class="form-control" type="password" required placeholder="Konfirmasi Password Baru" <?php echo "value='$pk'" ?>>
                <br>
                <label class="vace"></label>
                <div class="d-flex justify-content-between">
                    <button name="user" type="submit" class="btn btn-success">SIMPAN</button>
                    <a href="app.php" class="btn btn-danger">BATAL</a>
                </div>
            </form>
        <?php
            }else if($pass == $pl && $pb != $pk){
        ?>
            <form method="post">
                <label>Password Lama</label>
                <input name="pl" class="form-control" type="password" required placeholder="Masukkan Password Lama" <?php echo "value='$pl'" ?>>
                <label class="pt-4">Password Baru</label>
                <input name="pb" class="form-control" type="password" required placeholder="Masukkan Password Baru" <?php echo "value='$pb'" ?>>
                <br>
                <label>Konfirmasi Password Baru</label>
                <input name="pk" class="form-control is-invalid" type="password" required placeholder="Konfirmasi Password Baru" <?php echo "value='$pk'" ?>>
                <div class="invalid-feedback">Password Salah. Konfirmasi Ulang Password Anda</div>
                <br>
                <label class="vace"></label>
                <div class="d-flex justify-content-between">
                    <button name="user" type="submit" class="btn btn-success">SIMPAN</button>
                    <a href="app.php" class="btn btn-danger">BATAL</a>
                </div>
            </form>
        <?php
            }else{
        ?>
            <form method="post">
                <label>Password Lama</label>
                <input name="pl" class="form-control is-invalid" type="password" required placeholder="Masukkan Password Lama" <?php echo "value='$pl'" ?>>
                <div class="invalid-feedback">Password Salah</div>
                <label class="pt-4">Password Baru</label>
                <input name="pb" class="form-control" type="password" required placeholder="Masukkan Password Baru" <?php echo "value='$pb'" ?>>
                <br>
                <label>Konfirmasi Password Baru</label>
                <input name="pk" class="form-control is-invalid" type="password" required placeholder="Konfirmasi Password Baru" <?php echo "value='$pk'" ?>>
                <div class="invalid-feedback">Password Salah. Konfirmasi Ulang Password Anda</div>
                <br>
                <label class="vace"></label>
                <div class="d-flex justify-content-between">
                    <button name="user" type="submit" class="btn btn-success">SIMPAN</button>
                    <a href="app.php" class="btn btn-danger">BATAL</a>
                </div>
            </form>
        <?php
            }
        }else{
        ?>
            <form method="post">
                <label>Password Lama</label>
                <input name="pl" class="form-control" type="password" required placeholder="Masukkan Password Lama">
                <label class="pt-4">Password Baru</label>
                <input name="pb" class="form-control" type="password" required placeholder="Masukkan Password Baru">
                <br>
                <label>Konfirmasi Password Baru</label>
                <input name="pk" class="form-control" type="password" required placeholder="Konfirmasi Password Baru">
                <br>
                <label class="vace"></label>
                <div class="d-flex justify-content-between">
                    <button name="user" type="submit" class="btn btn-success">SIMPAN</button>
                    <a href="app.php" class="btn btn-danger">BATAL</a>
                </div>
            </form>
        <?php
        }
        ?>
        </div>
    </div>
</body>
</html>