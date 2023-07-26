<?php
$nik = $_GET['id'];
$nama = $_POST ['nama_lengkap'];
$kelamin = $_POST ['Jenis_kelamin'];
$agama = $_POST ['agama'];
$tempat = $_POST ['tempat_lahir'];
$tanggal = $_POST ['Tanggal_lahir'];
$darah = $_POST ['golongan_darah'];

include 'config.php';
$db = new Config();

$sql = "UPDATE penduduk  SET nama_lengkap='$nama',jenis_kelamin='$kelamin',agama='$agama',tempat_lahir='$tempat',tanggal_lahir='$tanggal',golongan_darah='$darah' WHERE nik={$nik}";
$query = mysqli_query($koneksi, $sql);
if($query){
    header('Location: index.php');
}else{
    die('Data Gagal Diubah');
}
?>