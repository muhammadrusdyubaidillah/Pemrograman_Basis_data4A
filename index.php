<link rel="stylesheet" href="bootstrap.css">
<h1 class="text-primary">Kartu Keluarga</h1>

<a class="btn btn-primary" href="tambah.php" >Tambah Data</a>
<table class="table table-striped table-bordered table-hover">
    <tr>
        <th class="text-center">No</th>
        <th class="text-center">Nama Lengkap</th>
        <th class="text-center">NIK</th>
        <th class="text-center">Jenis Kelamin</th>
        <th class="text-center">Agama</th>
        <th class="text-center">Tempat Lahir</th>
        <th class="text-center">Tanggal Lahir</th>
        <th class="text-center">Golongan Darah</th>
        <th class="text-center">Aksi</th>
    </tr>
    <?php
    include 'config.php';
    $db = new Config();
    $data = $db->ambilSemua("SELECT * FROM penduduk");
    $no=1;
    foreach($hasil as $data){
        echo '<tr>';
        echo '<td class="text-center">'.$no.'</td>';
        echo '<td class="text-center">'.$data['nama_lengkap'].'</td>';
        echo '<td class="text-center">'.$data['nik'].'</td>';
        echo '<td class="text-center">'.$data['jenis_kelamin'].'</td>';
        echo '<td class="text-center">'.$data['agama'].'</td>';
        echo '<td class="text-center">'.$data['tempat_lahir'].'</td>';
        echo '<td class="text-center">'.$data['tanggal_lahir'].'</td>';
        echo '<td class="text-center">'.$data['golongan_darah'].'</td>';
        echo '<td class="text-center">
                <a class="btn btn-warning btn-xs" href="ubah.php?id='.$data['nik'].'">ubah</a>
                <a onclick="return confirm(`Anda yakin hapus ?`)" class="btn btn-danger btn-xs" href="hapus.php?id='.$data['nik'].'"> Hapus </a>
            </td>';
        echo "</tr>";
        $no++;
    }
    ?>
    <tr>
    	<th class="text-center"colspan="2">Total Data</th>
    	<th class="text-center"colspan="7">
	     <span class="label label-primary"><?= count($hasil) ?></span>
    	</th>
    </tr>
</table>