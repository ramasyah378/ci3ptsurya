<h2>Edit Proyek</h2>


<?php
    // var_dump($proyek);
    // die;
?>
<form action="<?= base_url('proyek/update/' . $proyek[0]->id) ?>" method="post">
    <label>Nama Proyek:</label><br>
    <input type="text" name="namaProyek" value="<?= $proyek[0]->namaProyek ?>" required><br><br>
    
    <label>Client:</label><br>
    <input type="text" name="client" value="<?= $proyek[0]->client ?>" required><br><br>
    
    <label>Tanggal Mulai:</label><br>
    <input type="date" name="tglMulai" value="<?= $proyek[0]->tglMulai ?>" required><br><br>
    
    <label>Tanggal Selesai:</label><br>
    <input type="date" name="tglSelesai" value="<?= $proyek[0]->tglSelesai ?>" required><br><br>
    
    <label>Pimpinan Proyek:</label><br>
    <input type="text" name="pimpinanProyek" value="<?= $proyek[0]->pimpinanProyek ?>" required><br><br>
    
    <label>Keterangan:</label><br>
    <textarea name="keterangan"><?= $proyek[0]->keterangan ?></textarea><br><br>
  
    
    <button type="submit">Update</button>
</form>
<h2>Edit Lokasi</h2>
<form action="<?= base_url('lokasi/update/' . $lokasi[0]->id) ?>" method="post">
    <label>Nama Lokasi:</label><br>
    <input type="text" name="namaLokasi" value="<?= $lokasi[0]->namaLokasi ?>" required><br><br>
    <button type="submit">Update</button>
</form>
