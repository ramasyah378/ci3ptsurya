<h2>Tambah Lokasi Baru</h2>
<form action="<?= base_url('lokasi/store') ?>" method="post">
    <label>Nama Lokasi:</label><br>
    <input type="text" name="namaLokasi" required><br><br>

    <label>Negara:</label><br>
    <input type="text" name="negara" required><br><br>
    
    <label>Provinsi:</label><br>
    <input type="text" name="Provinsi" required><br><br>
    
    <label>Kota:</label><br>
    <input type="text" name="Kota" required><br><br>
    
    <button type="submit">Simpan</button>
</form>
