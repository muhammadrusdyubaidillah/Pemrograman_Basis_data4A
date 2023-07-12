<?php
$nik = $_POST['id'];

$server = "localhost";
$user = "root";
$password = "";
$database = "kk_rusdy";

# Koneksi database
$koneksi = mysqli_connect($server, $user, $password, $database);

$sql = "DELETE FROM penduduk WHERE nik ='$nik'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header('Location: index.php');
}else{
    die("Data Gagal Diubah");
}
?>