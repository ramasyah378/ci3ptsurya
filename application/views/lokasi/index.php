<h2>Daftar Lokasi</h2>
<a href="<?= base_url('lokasi/create') ?>">Tambah Lokasi Baru</a>
<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Lokasi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if(!empty($lokasi)): ?>
            <?php foreach ($lokasi as $l) : ?>
                <tr>
                    <td><?= $l->id ?></td>
                    <td><?= $l->namaLokasi ?></td>
                    <td>
                        <a href="<?= base_url('lokasi/edit/' . $l->id) ?>">Edit</a> | 
                        <a href="<?= base_url('lokasi/delete/' . $l->id) ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3">Tidak ada data lokasi yang tersedia.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
