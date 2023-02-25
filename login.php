<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "simple_note";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn){
    die("connection failed: ".mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="main.css">
    <style>
        body{
            height: 100vh;
            background-image: linear-gradient(0deg, #dbafc0, #7becf2);
        }
        .yellow{
            color: yellow;
        }
        .danger{
            color: red;
        }
    </style>
    <title>Log In</title>
</head>
<body>
    <div class="content pb-2 pt-3">
        <div class="invisible">
            <img src="IMG-20221031-WA0001.jpg" alt="">
        </div>
        <div class="forum position-absolute top-50 start-50 translate-middle">
            <h1 class="text-center">LOG IN</h1>
            <?php
            if(isset($_POST['daftar'])){
                session_start();
                $username = $_POST['username'];
                $password = $_POST['password'];
                
                $query = "select * from users where username='$username' and sandi='$password'";
                $query1 = "select * from users where username='$username'";
                $hasil = mysqli_query($conn, $query);
                $hasil1 = mysqli_query($conn, $query1);
                $cek = mysqli_num_rows($hasil);
                $cek1 = mysqli_num_rows($hasil1);
                if($cek1==true){
            ?>
            <form method="post">
                <label>Username</label>
                <input name="username" required <?php echo "class='form-control' value='$username'";?> type="text" placeholder="Masukkan Username">
                <br>
                <label>Password</label>
                <input name="password" required <?php echo "class='form-control is-invalid' value='$password'"; ?> type="password" placeholder="Masukkan Password">
                <div class="invalid-feedback">Password Salah</div>
                <br>
                <h5 class="text-center fix1">Belum punya akun? <a class="fixing" href="register.php">Daftar</a></h5>
                <br>
                <div class="d-flex justify-content-between">
                    <input name="daftar" type="submit" class="btn btn-success" value="LOG IN">
                    <a class="btn btn-danger" href="index.html">BATAL</a>
                </div>
            </form>
            <?php
                }else{
            ?>
            <form method="post">
                <label>Username</label>
                <input name="username" required <?php echo "class='form-control is-invalid' value='$username'";?> type="text" placeholder="Masukkan Username">
                <div class="invalid-feedback">Username Tidak Ada</div>
                <br>
                <label>Password</label>
                <input name="password" required <?php echo "class='form-control' value='$password'"; ?> type="password" placeholder="Masukkan Password">
                <br>
                <h5 class="text-center fix1">Belum punya akun? <a class="fixing" href="register.php">Daftar</a></h5>
                <br>
                <div class="d-flex justify-content-between">
                    <input name="daftar" type="submit" class="btn btn-success" value="LOG IN">
                    <a class="btn btn-danger" href="index.html">BATAL</a>
                </div>
            </form>
            <?php
                }
                if ($cek==true){
                    if ($username == 'admin' && $password == 'caart998') {
                        session_start();
                        $_SESSION['username'] = $username;
                        header("Location: Administrator.php");
                    }else{
                        session_start();
                        $_SESSION['username'] = $username;
                        header("Location:app.php");
                    }
                }
            }else{
                echo "
            <form method='post'>
                <label>Username</label>
                <input name='username' required class='form-control' type='text' placeholder='Masukkan Username'>
                <br>
                <label>Password</label>
                <input name='password' required class='form-control' type='password' placeholder='Masukkan Password'>
                <br>
                <h5 class='text-center fix1'>Belum punya akun? <a class='fixing' href='register.php'>Daftar</a></h5>
                <br>
                <div class='d-flex justify-content-between'>
                    <input name='daftar' type='submit' class='btn btn-success' value='LOG IN'></input>
                    <a class='btn btn-danger' href='index.html'>BATAL</a>
                </div>
            </form>";
            }
            
            ?>
        </div>
    </div>
</body>
</html>