<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.css">
    <style>
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
    </style>
    <title>Simple Note Admin</title>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <ul class="items">
                <li class="nav-item active">
                    <a href="register.php" class="nav-link">Buat Baru</a>
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
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>Usia</th>
                <th>Aksi</th>
            </tr>
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
            if(!isset($_SESSION['username'])){
                header("Location: login.php");
            }
            $query = "select * from users;";
            $data = mysqli_query($conn, $query);
            while($r = mysqli_fetch_array($data)){
                $id = $r['userid'];
                $nama = $r['nama'];
                $user = $r['username'];
                $email = $r['email'];
                $umur = $r['usia'];
                if($id!='1'){
            ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $nama; ?></td>
                <td><?php echo $user; ?></td>
                <td><?php echo $email; ?></td> 
                <td><?php echo $umur; ?></td>
                <td>
                    <form action="del.php" method="post">
                        <button type='submit' name='id' <?php echo "value='$id'"; ?> class='btn btn-danger'>Hapus User <?php echo $id; ?></button>
                    </form>
                </td>
            </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
</body>
</html>