<?php
$nama = $_POST ['nama_lengkap'];
$nik = $_POST['nik'];
$kelamin = $_POST ['jenis_kelamin'];
$agama = $_POST ['agama'];
$tempat = $_POST ['tempat_lahir'];
$tanggal = $_POST ['tanggal_lahir'];
$darah = $_POST ['golongan_darah'];

include 'config.php';
$db = new Config();

$sql = "INSERT INTO penduduk(nama_lengkap,nik,jenis_kelamin,agama,tempat_lahir,tanggal_lahir,golongan_darah) VALUES ('$nama','$nik','$kelamin','$agama','$tempat','$tanggal','$darah')";

$query = $db->aksiQuery($sql);
if($query){
    header('Location: index.php');
}else{
    die('Data Gagal Disimpan');
}
?>