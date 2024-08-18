<h2>Edit Lokasi</h2>
<form action="<?= base_url('lokasi/update/' . $lokasi[0]->id) ?>" method="post">
    <label>Nama Lokasi:</label><br>

    <?php
    // var_dump($lokasi);
    // die;
    ?>
    <input type="text" name="namaLokasi" value="<?= $lokasi[0]->namaLokasi ?>" required><br><br>
    <label>Negara:</label><br>
    <input type="text" name="negara" value="<?= $lokasi[0]->negara ?>" required><br><br>
    
    <label>Provinsi:</label><br>
    <input type="text" name="provinsi" value="<?= $lokasi[0]->provinsi ?>" required><br><br>
    
    <label>Kota:</label><br>
    <input type="text" name="kota" value="<?= $lokasi[0]->kota ?>" required><br><br>
    <button type="submit">Update</button>
</form>
