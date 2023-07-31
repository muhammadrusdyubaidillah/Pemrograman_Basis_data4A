<link rel="stylesheet" href="bootstrap.css">

<form action="tambah_aksi.php" name="from" method="POST">

    <div class="form-group">
        NIK :
        <input required class="form-control"  name="nik" type="number" value="" placeholder="Masukkan NIK"/>
    </div>
    <div class="form-group">
        Nama Lengkap :
        <input required class="form-control"  name="nama_lengkap" type="text" value="" placeholder="Masukkan Nama Anda"/>
    </div>
    <div class="form-group">
        Tempat Lahir :
        <input required class="form-control"  name="tempat_lahir" type="text" value="" placeholder="Masukkan Kota"/>
    </div>
    <div class="form-group">
        Tanggal Lahir :
        <input required class="form-control"  name="tanggal_lahir" type="date" value="" placeholder="Isi Tanggal"/>
    </div>
    <div class="form-group">
        Jenis Kelamin :
        <input required class="form-control"  name="jenis_kelamin" type="text" value="" placeholder="Isi Jenis Kelamin"/>
    </div>
    <div class="form-group">
        Agama :
        <input required class="form-control"  name="agama" type="text" value="" placeholder="Isi Agama"/>
    </div>
    <div class="form-group">
        <input class="btn btn-success" type="submit" value="Simpan"/>
    </div>
</form>