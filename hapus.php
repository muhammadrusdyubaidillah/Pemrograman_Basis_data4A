<?php 
$nik = $_GET['id'];

include 'config.php';
$db = new config();

$sql = "DELETE FROM penduduk WHERE nik ='$nik'";

$query = $db->aksiQuery($sql);
if($query){
   header('Location: index.php');
}else{
   die('Data Gagal Dihapus');
}
?>
