<link rel="stylesheet" href="bootstrap.css">
<?php
$nik = $_GET['id'];

$server = "localhost";
$user = "root";
$password = "";
$database = "kk_rusdy";

// Koneksi ke database
$koneksi = mysqli_connect($server, $user, $password, $database);

$sql = "SELECT * FROM penduduk WHERE nik={$nik}";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);

print_r($data);
?>
<hr>
<form action="ubah_aksi.php?id=<?= $nik?>" name="from" method="POST">
<div class="form-group">
        Nama Lengkap :
        <input class="form-control"  name="nama" type="text" value="<?= $data['nama_lengkap'] ?>" placeholder="Isi Nama"/>
    </div>
    <div class="form-group">
        NIK :
        <input class="form-control"  name="nik" type="number" value="<?= $data['nik'] ?>" placeholder="Isi NIK"/>
    </div>
    <div class="form-group">
        Jenis Kelamin :
        <input class="form-control"  name="kelamin" type="text" value="<?= $data['jenis_kelamin'] ?>" placeholder="Isi Jenis Kelamin"/>
    </div>
    <div class="form-group">
        Agama :
        <input class="form-control"  name="agama" type="text" value="<?= $data['agama'] ?>" placeholder="Isi Agama"/>
    </div>
    <div class="form-group">
        Tempat Lahir :
        <input class="form-control"  name="tempat" type="text" value="<?= $data['tempat_lahir'] ?>" placeholder="Isi Tempat Lahir"/>
    </div>
    <div class="form-group">
        Tanggal Lahir :
        <input class="form-control"  name="tanggal" type="date" value="<?= $data['tanggal_lahir'] ?>" placeholder="Isi Tanggal"/>
    </div>
    <div class="form-group">
        Golongan Darah :
        <input class="form-control"  name="darah" type="text" value="<?= $data['golongan_darah'] ?>" placeholder="Isi Golongan Darah"/>
    </div>
    <div class="form-group">
        <input class="btn btn-success" type="submit" value="Simpan"/>
    </div>
</form>