<?php
$nama = $_POST ['nama_lengkap'];
$nik = $_POST['nik'];
$kelamin = $_POST ['Jenis_kelamin'];
$agama = $_POST ['agama'];
$tempat = $_POST ['tempat_lahir'];
$tanggal = $_POST ['Tanggal_lahir'];
$darah = $_POST ['golongan_darah'];

include 'config.php';
$db = new Config();

$sql = "INSERT INTO penduduk(nama_lengkap,nik,jenis_kelamin,agama,tempat_lahir,tanggal_lahir,golongan_darah) VALUES ('$nama','$nik','$kelamin','$agama','$tempat','$tanggal','$darah')";
$query = mysqli_query($koneksi, $sql);
if($query){
    header('Location: index.php');
}else{
    die('Data Gagal Disimpan');
}
?>