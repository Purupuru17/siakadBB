
<link rel="stylesheet" href="<?= base_url('tema/bootstrap.min.css') ?>">
<?php
   echo '<h1>'.$title.'</h1>';
?>
<a class="btn btn-primary" href="<?= site_url('welcome') ?>">Beranda</a>
<a class="btn btn-success" href="<?= site_url('mahasiswa/tambah') ?>">Tambah</a>
<a class="btn btn-warning" href="<?= site_url('mahasiswa/ubah') ?>">Ubah</a>
<hr>
<table class="table table-bordered table-striped table-hover">
   <tr>
      <th class="text-center">No</th>
      <th class="text-center">NIM</th>
      <th class="text-center">Nama Lengkap</th>
      <th class="text-center">Jenis Kelamin</th>
   </tr>
   <?php
   $no = 1;
   foreach($list_mhs as $data){
   ?>
   <tr>
      <td class="text-center"><?= $no ?></td>
      <td class="text-center text-danger"><?= $data['nim'] ?></td>
      <td class="text-center"><?= $data['nama_mhs'] ?></td>
      <td class="text-center"><?= $data['kelamin_mhs'] ?></td>
   </tr>
   <?php 
      $no = $no + 1;
   }
   ?>
</table>