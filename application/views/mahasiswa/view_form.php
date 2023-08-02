<link rel="stylesheet" href="<?= base_url('tema/bootstrap.min.css') ?>">

<h1><?= $title ?></h1>
<a class="btn btn-default" href="<?= site_url('mahasiswa') ?>">Kembali</a>

<form action="<?= site_url($action) ?>" method="post">
   <div class="form-group">
      NIM : 
      <input value="<?= $data['nim'] ?>" required type="number" name="nim" class="form-control" placeholder="Masukkan NIM">
   </div>
   <div class="form-group">
      Nama Lengkap : 
      <input value="<?= $data['nama_mhs'] ?>" required type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
   </div>
   <input class="btn btn-success" type="submit" value="Simpan">
</form>