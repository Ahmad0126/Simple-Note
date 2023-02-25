<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
$servername = "localhost";
$username = "root";
$password = "";
$database = "simple_note";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn){
    die("connection failed: ".mysqli_connect_error());
}
$username = $_SESSION['username'];
 
$query = "select * from users where username='$username'";
$query1 = "SELECT noteid, judul FROM $username;";
$dat = mysqli_query($conn, $query1);
$hasil = mysqli_query($conn, $query);
$cek = mysqli_num_rows($hasil);
while($id = mysqli_fetch_array($hasil)){$no = $id['userid'];}
$num = intval($no);
$ceklog = mysqli_num_rows($dat);
?>
<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.css">
    <style>
        .danger{
            color: red;
        }
        .merger{
            margin-right: 7px;
        }
        .nav-brand{color: #f4f4f4;}
        .navbar{
            background: rgb(132, 0, 255);
        }
        .items{
            display: flex;
            list-style: none;
            margin-bottom: 0px;
        }
        .nav-link{
            color: #f4f4f4;
            cursor: pointer;
            background: transparent;
        }
        .nav-link{
            color: white;
            margin: 0px 15px;
            padding: 6px 15px;
            transition: all 0.3s;
            border: none;
            border-radius: 5px;
        }
        .nav-link:hover{
            background: #f4f4f4;
            color: black;
            border: none;
            border-radius: 5px;
        }
        body{
            height: 100vh;
            background-image: linear-gradient(0deg, #dbafc0, #7becf2);
        }
        .row{
            margin-right: 0px; 
        }
    </style>
    <title>Simple Note User</title>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <ul class="items">
                <li class="nav-item active">
                    <form method="post" action="profl.php">
                        <button type='submit' class='nav-link'>Profil</button>
                    </form>
                </li>
            </ul>
            <ul class="items">
                <li class="nav-item">
                    <form method="post" action="logout.php">
                        <button type='submit' class='nav-link'>Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="col-6">
            <table class="table table-striped">
                <?php
                if($ceklog==false){
                    echo "<p class='text-center'>Belum ada catatan.</p>";
                }else{
                    while($data = mysqli_fetch_array($dat)){
                        $judul = $data['judul'];
                        $note = $data['noteid'];
                ?>
                <tr>
                    <td><?php echo "<h5>$judul</h5>" ?></td>
                    <td>
                        <form method="post">
                            <button type='submit' name='edit' <?php echo "value='$num,$note'"; ?> class='btn btn-primary merger'>Lihat/Edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="del.php" method="post">
                            <button type='submit' name='hapus' <?php echo "value='$num,$note'"; ?> class='btn btn-danger'>Hapus</button>
                        </form>
    
                    </td>
                </tr>
                <?php
                    }
                }
                ?>
            </table>
        </div>
        <div class="col-6">
            <?php
            if(isset($_POST['edit'])){
                $data = $_POST['edit'];
                $id = explode(",", $data);
                $q = $id[1];
                $w = $id[0];
                $num = intval($w);
                $note = intval($q);
                $sql = "SELECT username FROM users WHERE userid=$num";
                $hasil = mysqli_query($conn, $sql);
                while($user = mysqli_fetch_array($hasil)){
                    $tabel = $user['username'];
                }
                $query = "SELECT * FROM $tabel WHERE noteid=$note;";
                $fer = mysqli_query($conn, $query);
            ?>
            <form action="del.php" method="post">
                <?php
                while ($f = mysqli_fetch_array($fer)) {
                    $title = $f['judul'];
                    $notes = $f['catatan'];
                ?>
                <input type="text" name="judul" placeholder="Masukkan Judul" <?php echo "value='$title'" ?> class="form-control mt-2">
                <textarea class="form-control mt-2" name="catatan" rows="10" placeholder="Buat Catatan Baru"><?php echo $notes ?></textarea>
                <button type="submit" name="editing" <?php echo "value='$num,$note'"; ?> class="btn btn-success mt-2">Simpan</button>
            </form>
            <?php
                }
            }else{
                echo "
                <form action='del.php' method='post'>
                    <input type='text' name='judul' placeholder='Masukkan Judul' class='form-control mt-2'>
                    <textarea class='form-control mt-2' name='catatan' rows='10' placeholder='Buat Catatan Baru'></textarea>
                    <button type='submit' name='simpan' value='$num' class='btn btn-success mt-2'>Simpan</button>
                </form>";
            }
            ?>
        </div>
    </div>
</body>
</html>