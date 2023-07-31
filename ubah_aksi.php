<?php
$nik = $_GET['id'];
$nama=$_POST['nama'];
$tempat=$_POST['tempat'];
$tanggal=$_POST['tanggal'];
$kelamin = $_POST ['kelamin'];
$agama = $_POST ['agama'];

include 'config.php';
$db = new config();

$sql = "UPDATE penduduk  SET nama_lengkap='$nama',tempat_lahir='$tempat',tanggal_lahir='$tanggal',jenis_kelamin='$kelamin',agama='$agama' WHERE nik={$nik}";

$query = $db->aksiQuery($sql);
if($query){
    header('Location: index.php');
}else{
    die('Data Gagal Diubah');
}
?>