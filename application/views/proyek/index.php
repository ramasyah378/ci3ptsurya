<h2>Daftar Proyek</h2>
<a href="<?= base_url('proyek/create') ?>">Tambah Proyek Baru</a>
<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Proyek</th>
            <th>Client</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai</th>
            <th>Pimpinan Proyek</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if(!empty($proyek)): ?>
            <?php foreach ($proyek as $p) : ?>
                <tr>
                    <td><?= $p->id ?></td>
                    <td><?= $p->namaProyek ?></td>
                    <td><?= $p->client ?></td>
                    <td><?= $p->tglMulai ?></td>
                    <td><?= $p->tglSelesai ?></td>
                    <td><?= $p->pimpinanProyek ?></td>
                    <td><?= $p->keterangan ?></td>
                    
                    <td>
                        <a href="<?= base_url('proyek/edit/' . $p->id) ?>">Edit</a> | 
                        <a href="<?= base_url('proyek/delete/' . $p->id) ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="9">Tidak ada data proyek yang tersedia.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
<h2>Daftar Lokasi</h2>
<a href="<?= base_url('lokasi/create') ?>">Tambah Lokasi Baru</a>
<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Lokasi</th>
            <th>Negara</th>
            <th>Provinsi</th>
            <th>Kota</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if(!empty($lokasi)): ?>
            <?php foreach ($lokasi as $l) : ?>
                <tr>
                    <td><?= $l->id ?></td>
                    <td><?= $l->namaLokasi ?></td>
                    <td><?= $l->negara ?></td>
                    <td><?= $l->provinsi ?></td>
                    <td><?= $l->kota ?></td>
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
