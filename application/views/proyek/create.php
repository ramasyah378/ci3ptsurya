<h2>Tambah Proyek Baru</h2>
<form action="<?= base_url('proyek/store') ?>" method="post">
    <label>Nama Proyek:</label><br>
    <input type="text" name="namaProyek" required><br><br>
    
    <label>Client:</label><br>
    <input type="text" name="client" required><br><br>
    
    <label>Tanggal Mulai:</label><br>
    <input type="date" name="tglMulai" required><br><br>
    
    <label>Tanggal Selesai:</label><br>
    <input type="date" name="tglSelesai" required><br><br>
    
    <label>Pimpinan Proyek:</label><br>
    <input type="text" name="pimpinanProyek" required><br><br>
    
    <label>Keterangan:</label><br>
    <textarea name="keterangan"></textarea><br><br>
    
    <label>Lokasi:</label><br>
    <?php foreach ($lokasi as $l) : ?>
        <input type="checkbox" name="lokasiIds[]" value="<?= $l->id ?>"> <?= $l->namaLokasi ?><br>
    <?php endforeach; ?><br>
    
    <button type="submit">Simpan</button>
</form>
<h2>Tambah Lokasi Baru</h2>
<form action="<?= base_url('lokasi/store') ?>" method="post">
    <label>Nama Lokasi:</label><br>
    <input type="text" name="namaLokasi" required><br><br>
    <button type="submit">Simpan</button>
</form>
