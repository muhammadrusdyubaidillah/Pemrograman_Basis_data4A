<link rel="stylesheet" href="bootstrap.css">
<h1 class="text-primary">Kartu Keluarga</h1>

<a class="btn btn-primary" href="tambah.php">Tambah Data</a>
<table class="table table-striped table-bordered table-hover">
    <tr>
        <th class="text-center">No</th>
        <th class="text-center">NIK</th>
        <th class="text-center">NAMA LENGKAP</th>
        <th class="text-center">JENIS KELAMIN</th>
        <th class="text-center">TEMPAT TANGGAL LAHIR</th>
        <th class="text-center">AGAMA</th>
        <th class="text-center">AKSI</th>
    </tr>
    <?php
    include 'config.php';
    $db = new config();
    $hasil = $db->ambilSemua("SELECT * FROM penduduk");
    $no = 1;
    foreach ($hasil as $data){
        echo '<tr>';
        echo '<td class="text-center">'.$no.'</td>';
        echo '<td class="text-center">'.$data['nik'].'</td>';
        echo '<td class="text-center">'.$data['nama_lengkap'].'</td>';
        echo '<td class="text-center">'.$data['jenis_kelamin'].'</td>';
        echo '<td class="text-center">'.$data['tempat_lahir']. ','.$data['tanggal_lahir'].'</td>';
        echo '<td class="text-center">'.$data['agama'].'</td>';
        echo '<td class="text-center">
                <a class="btn btn-warning btn-xs" href="ubah.php?id='.$data['nik'].'">ubah</a>
                <a onclick="return confirm(`Anda yakin hapus ?`)" class="btn btn-danger btn-xs" href="hapus.php?id='.$data['nik'].'"> Hapus </a>
            </td>';
        echo "</tr>";
        $no++;
    }
    ?>
    <tr>
    	<th class="text-center" colspan="2">Total Data</th>
    	<th class="text-center" colspan="6">
	     <span class="label label-primary"><?= count($hasil) ?></span>
    	</th>
    </tr>
</table>