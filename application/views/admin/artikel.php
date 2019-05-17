<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg">
            <?= $this->session->flashdata('error'); ?>
            <?= $this->session->flashdata('sukses'); ?>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="<?= base_url('admin/post') ?>" class="btn btn-primary mb-3">Tambahkan Artikel Terbaru</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Judul</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($artikel as $r) : ?>
                                    <tr>
                                        <td scope="row"><?= $i++; ?></td>
                                        <td><?= date('d F Y', strtotime($r['tanggal_rilis'])); ?></td>
                                        <td><?= $r['judul']; ?> </td>
                                        <td>
                                            <a href="<?= base_url('admin/hapus_artikel/' . $r['id']); ?>" onclick="return confirm('Apakah Artikel <?= $r['judul']; ?> Ingin Dihapus ?');" class="badge badge-danger" data-placement="top"> HAPUS</i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>