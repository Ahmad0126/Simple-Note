<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "simple_note";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn){
    die("connection failed: ".mysqli_connect_error());
}
$id = $_POST['id'];
$num = intval($id);
$sql = "SELECT username FROM users WHERE userid=$num";
$hasil = mysqli_query($conn, $sql);
$user = mysqli_fetch_array($hasil);
$tabel = $user['username'];
$query1 = "DROP table $tabel;";
$query = "DELETE FROM users WHERE userid=$num;";
if($id=='Buat Baru'){
    header("Location: register.html");
}else{
    mysqli_query($conn, $query1);
    mysqli_query($conn, $query);
    header("Location: Administrator.php");
}
?>