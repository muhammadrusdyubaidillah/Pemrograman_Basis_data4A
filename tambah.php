<link rel="stylesheet" href="bootstrap.css">

<form action="tambah_aksi.php" name="from" method="POST">
    <div class="form-group">
        Nama Lengkap :
        <input class="form-control"  name="nama_lengkap" type="text" value="" placeholder="Isi Nama"/>
    </div>
    <div class="form-group">
        NIK :
        <input class="form-control"  name="nik" type="number" value="" placeholder="Isi NIK"/>
    </div>
    <div class="form-group">
        Jenis Kelamin :
        <input class="form-control"  name="jenis_kelamin" type="text" value="" placeholder="Isi Jenis Kelamin"/>
    </div>
    <div class="form-group">
        Agama :
        <input class="form-control"  name="agama" type="text" value="" placeholder="Isi Agama"/>
    </div>
    <div class="form-group">
        Tempat Lahir :
        <input class="form-control"  name="tempat_lahir" type="text" value="" placeholder="Isi Tempat Lahir"/>
    </div>
    <div class="form-group">
        Tanggal Lahir :
        <input class="form-control"  name="tanggal_lahir" type="date" value="" placeholder="Isi Tanggal"/>
    </div>
    <div class="form-group">
        Golongan Darah :
        <input class="form-control"  name="golongan_darah" type="text" value="" placeholder="Isi Golongan Darah"/>
    </div>
    <div class="form-group">
        <input class="btn btn-success" type="submit" value="Simpan"/>
    </div>
</form>