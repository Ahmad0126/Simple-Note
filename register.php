<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "simple_note";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn){
    die("connection failed: ".mysqli_connect_error());
}
session_start();
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
        .success{
            color: green;
        }
    </style>
    <title>Daftar Simple Note</title>
</head>
<body>
    <div class="content pb-2 pt-3">
        <div class="forum">
        <?php
        if (isset($_POST['daftar'])) {
            $name = $_POST['nama'];
            $usernama = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $umur = $_POST['umur'];
            $query = "CREATE table $usernama(noteid INT NOT NULL auto_increment,judul VARCHAR(255) NOT NULL,catatan TEXT,PRIMARY KEY(noteid));";
            $query0 = "INSERT INTO users (username, sandi, nama, email, usia) values ('$usernama', '$password', '$name', '$email', '$umur');";
            $query1 = "SELECT * FROM users WHERE username='$usernama';";
            $hasil = mysqli_query($conn, $query1);
            $cek = mysqli_num_rows($hasil);
            if ($cek == false){
                if(isset($_SESSION['username'])){
                    $user = $_SESSION['username'];
                    if($user=='admin'){
                        header("Location:Administrator.php");
                    }else
                    {echo "<h3 class='success position-absolute top-50 start-50 translate-middle'>Berhasil mendaftar. Silahkan kembali ke halaman <a href='login.html' class='fixing'>login</a></h3>";}
                }else
                {echo "<h3 class='success position-absolute top-50 start-50 translate-middle'>Berhasil mendaftar. Silahkan kembali ke halaman <a href='login.html' class='fixing'>login</a></h3>";}
                mysqli_query($conn, $query);
                mysqli_query($conn, $query0);
            }else {
        ?>
            <h1 class="text-center">DAFTAR</h1>
            <form action="register.php" method="post">
                <label>Nama</label>
                <input name="nama" class="form-control" type="text" required placeholder="Masukkan Nama Lengkap" <?php echo "value='$name'" ?>>
                <label class="pt-4">Email</label>
                <input name="email" class="form-control" type="text" required placeholder="Masukkan Email Anda" <?php echo "value='$email'" ?>>
                <br>
                <label>Username</label>
                <input name="username" class="form-control is-invalid" type="text" required placeholder="Masukkan Username" <?php echo "value='$usernama'" ?>>
                <div class="invalid-feedback">Username Sudah Ada. Ganti Username Lain</div>
                <br>
                <label>Password</label>
                <input name="password" class="form-control" type="password" required placeholder="Masukkan Password" <?php echo "value='$password'" ?>>
                <label class="pt-4">Umur</label>
                <select name="umur" class="form-select">
                    <option selected>Masukkan Umur</option>
                    <option value="< 20 Tahun">< 20 Tahun</option>
                    <option value="20-29 Tahun">20-29 Tahun</option>
                    <option value="30-39 Tahun">30-39 Tahun</option>
                    <option value="40-49 Tahun">40-49 Tahun</option>
                    <option value="> 50 Tahun">> 50 Tahun</option>
                </select>
                <br>
                <h5 class="text-center fix1">Sudah punya akun? <a class="fixing" href="login.php">Log In</a></h5>
                <br>
                <div class="d-flex justify-content-between">
                    <input name="daftar" type="submit" class="btn btn-success" value="DAFTAR"></input>
                    <a class="fixing btn btn-danger" href="index.html">BATAL</a>
                </div>
            </form>
        <?php
            }
        }else{
        ?>
            <h1 class="text-center">DAFTAR</h1>
            <form action="register.php" method="post">
                <label>Nama</label>
                <input name="nama" class="form-control" type="text" required placeholder="Masukkan Nama Lengkap">
                <label class="pt-4">Email</label>
                <input name="email" class="form-control" type="text" required placeholder="Masukkan Email Anda">
                <br>
                <label>Username</label>
                <input name="username" class="form-control" type="text" required placeholder="Masukkan Username">
                <br>
                <label>Password</label>
                <input name="password" class="form-control" type="password" required placeholder="Masukkan Password">
                <label class="pt-4">Umur</label>
                <select name="umur" class="form-select">
                    <option selected>Masukkan Umur</option>
                    <option value="< 20 Tahun">< 20 Tahun</option>
                    <option value="20-29 Tahun">20-29 Tahun</option>
                    <option value="30-39 Tahun">30-39 Tahun</option>
                    <option value="40-49 Tahun">40-49 Tahun</option>
                    <option value="> 50 Tahun">> 50 Tahun</option>
                </select>
                <br>
                <h5 class="text-center fix1">Sudah punya akun? <a class="fixing" href="login.php">Log In</a></h5>
                <br>
                <div class="d-flex justify-content-between">
                    <input name="daftar" type="submit" class="btn btn-success" value="DAFTAR"></input>
                    <a class="fixing btn btn-danger" href="index.html">BATAL</a>
                </div>
            </form>
        <?php
        }
        ?>
        </div>
    </div>
</body>
</html>
