<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "simple_note";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn){
    die("connection failed: ".mysqli_connect_error());
}
if(isset($_POST['hapus'])){
    $data = $_POST['hapus'];
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
    $query = "DELETE FROM $tabel WHERE noteid=$note;";
    mysqli_query($conn, $query);
    header("Location: app.php");
}
if(isset($_POST['simpan'])){
    $judul = $_POST['judul'];
    $catatan = $_POST['catatan'];
    $id = $_POST['simpan'];
    $num = intval($id);
    $sql = "SELECT username FROM users WHERE userid=$num";
    $hasil = mysqli_query($conn, $sql);
    while($user = mysqli_fetch_array($hasil)){
        $tabel = $user['username'];
    }
    $query = "INSERT INTO $tabel (judul, catatan) values ('$judul','$catatan');";
    mysqli_query($conn, $query);
    header("Location: app.php");
}
if(isset($_POST['editing'])){
    $judul = $_POST['judul'];
    $catatan = $_POST['catatan'];
    $data = $_POST['editing'];
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
    $query = "UPDATE $tabel SET judul='$judul', catatan='$catatan' WHERE noteid=$note;";
    mysqli_query($conn, $query);
    header("Location: app.php");
}
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $num = intval($id);
    $sql = "SELECT username FROM users WHERE userid=$num";
    $hasil = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($hasil);
    $tabel = $user['username'];
    $query1 = "DROP table $tabel;";
    $query = "DELETE FROM users WHERE userid=$num;";
    mysqli_query($conn, $query1);
    mysqli_query($conn, $query);
    header("Location: Administrator.php");
}
?>