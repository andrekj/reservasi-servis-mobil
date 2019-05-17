<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg">
            <?= $this->session->flashdata('error'); ?>
            <?= $this->session->flashdata('sukses'); ?>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pesanan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No Telpon</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Nama Mobil</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($riwayat as $r) : ?>
                                    <tr>
                                        <td scope="row"><?= $i++; ?></td>
                                        <td><?= $r['nama_customer']; ?> </td>
                                        <td><?= $r['email']; ?> </td>
                                        <td><?= $r['no_telpon']; ?> </td>
                                        <td><?= $r['tanggal']; ?> </td>
                                        <td><?= $r['jam']; ?> </td>
                                        <td><?= $r['nama_mobil']; ?> </td>
                                        <td>
                                            <a class="badge badge-success" data-toggle="modal" data-target="#detail-cus<?= $r['id']; ?>"> DETAIL</i></a>
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

<?php $i = 1;
foreach ($riwayat as $r) : $i++; ?>
    <div class="row">
        <div class="modal fade" id="detail-cus<?= $r['id']; ?>" role="dialog">
            <div class="modal-dialog">
                <form action="" method="">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <pre><h4 class="modal-title">DETAIL</h4></pre>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">

                            <input type="hidden" value="<?= $r['id']; ?>" name="id">
                            <div class="form-group row">
                                <b><label class='col'>Nama &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label></b>
                                <div class='col-md-9'><input type="text" readonly onkeyup="this.value = this.value.toUpperCase()" name="nama_customer" autocomplete="off" value="<?= $r['nama_customer']; ?>" required placeholder="Masukkan Nama" class="form-control"></div>
                            </div>
                            <div class="form-group row">
                                <b><label class='col'>Telpon &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label></b>
                                <div class='col-md-9'><input type="tel" readonly name="no_telpon" autocomplete="off" value="<?= $r['no_telpon']; ?>" required placeholder="Masukkan No Telpon" class="form-control"></div>
                            </div>
                            <div class="form-group row">
                                <b><label class='col'>Email &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label></b>
                                <div class='col-md-9'><input type="email" readonly name="email" autocomplete="off" value="<?= $r['email']; ?>" required placeholder="Masukkan Email" class="form-control"></div>
                            </div>
                            <div class="form-group row">
                                <b><label class='col'>Tgl &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label></b>
                                <div class='col-md-9'><input type="date" readonly name="tanggal" autocomplete="off" value="<?= $r['tanggal']; ?>" required placeholder="Masukkan Tanggal" class="form-control"></div>
                            </div>
                            <div class="form-group row">
                                <b><label class='col'>Jam &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label></b>
                                <div class='col-md-9'>
                                    <input type id="jam" readonly name="jam" value="<?= $r['jam']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <b><label class='col'>Mobil &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label></b>
                                <div class='col-md-9'>
                                    <input type id="nama_mobil" readonly name="nama_mobil" value="<?= $r['nama_mobil']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <b><label class='col'>Tipe &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label></b>
                                <div class='col-md-9'><input type="text" readonly onkeyup="this.value = this.value.toUpperCase()" name="tipe_mobil" autocomplete="off" value="<?= $r['tipe_mobil']; ?>" required placeholder="Masukkan Tipe Mobil" class="form-control"></div>
                            </div>
                            <div class="form-group row">
                                <b><label class='col'>Plat &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label></b>
                                <div class='col-md-9'><input type="text" readonly onkeyup="this.value = this.value.toUpperCase()" name="no_plat" autocomplete="off" value="<?= $r['no_plat']; ?>" required placeholder="Masukkan No Plat" class="form-control"></div>
                            </div>
                            <div class="form-group row">
                                <b><label class='col'>Servis &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label></b>
                                <div class='col-md-9'>
                                    <input type id="jenis_servis" readonly name="jenis_servis" value="<?= $r['jenis_servis']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <b><label class='col'>Keluhan &nbsp&nbsp&nbsp&nbsp:</label></b>
                                <div class='col-md-9'><input type="text" readonly name="keluhan" autocomplete="off" value="<?= $r['keluhan']; ?>" required placeholder="Masukkan Keluhan" class="form-control"></div>
                            </div>
                            <div class="form-group row">
                                <b><label class='col'>Dealer &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label></b>
                                <div class='col-md-9'>
                                    <input type id="dealer" readonly name="dealer" value="<?= $r['dealer']; ?>" class="form-control">
                                </div>
                            </div><br>
                            <pre align="right">Total Harga : <?= $r['total']; ?></pre>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>