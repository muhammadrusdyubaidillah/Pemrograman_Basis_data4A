<?php
$nik = $_POST['nik'];
$nama = $_POST ['nama_lengkap'];
$tempat = $_POST ['tempat_lahir'];
$tanggal = $_POST ['tanggal_lahir'];
$kelamin = $_POST ['jenis_kelamin'];
$agama = $_POST ['agama'];

include 'config.php';
$db = new config();

$sql = "INSERT INTO penduduk (nik,nama_lengkap,tempat_lahir,tanggal_lahir,jenis_kelamin,agama) VALUES ('$nik','$nama','$tempat','$tanggal','$kelamin','$agama')";

$query = $db->aksiQuery($sql);
if($query){
    header('Location:index.php');
}else{
    die("Data Gagal Disimpan");
}
?>