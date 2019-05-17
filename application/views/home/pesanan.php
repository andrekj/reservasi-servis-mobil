<link href="<?= base_url('assets/'); ?>css/stylepes.css" rel="stylesheet">
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800" align="center"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= $this->session->flashdata('error'); ?>
            <?= $this->session->flashdata('sukses'); ?>

            <table class="table1 table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">No Telpon</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jam</th>
                        <th scope="col">Mobil</th>
                        <th scope="col">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($reservasi as $r) : ?>
                        <tr>
                            <td scope="row"><?= $i++; ?></td>
                            <td><?= $r['nama_customer']; ?> </td>
                            <td><?= $r['email']; ?> </td>
                            <td><?= $r['no_telpon']; ?> </td>
                            <td><?= $r['tanggal']; ?> </td>
                            <td><?= $r['jam']; ?> </td>
                            <td><?= $r['nama_mobil']; ?> </td>
                            <td>
                                <a class="badge badge-success" data-toggle="modal" data-target="#detail-cus<?= $r['id']; ?>"> DETAIL / EDIT </a>
                                <a href="<?= base_url('pesanan/hapus/' . $r['id']); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?= $r['nama_customer']; ?> ?');" class="badge badge-danger" data-placement="top"> HAPUS</i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<!-- Modal -->
<?php $i = 1;
foreach ($reservasi as $r) : $i++; ?>
    <div class="row">
        <div class="modal fade" id="detail-cus<?= $r['id']; ?>">
            <div class="modal-dialog">
                <form action="<?= base_url('pesanan/edit'); ?>" method="post">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <pre><h4 class="modal-title">DETAIL</h4></pre>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">

                            <input type="hidden" readonly value="<?= $r['id']; ?>" name="id" class="form-control">
                            <div class="form-group">
                                <center><b><label class='col-md-3'>Nama</label></b></center>
                                <center>
                                    <div class='col-md-10'><input type="text" onkeyup="this.value = this.value.toUpperCase()" name="nama_customer" autocomplete="off" value="<?= $r['nama_customer']; ?>" required placeholder="Masukkan Nama" class="form-control"></div>
                                </center>
                            </div>
                            <div class="form-group">
                                <center><b><label class='col-md-3'>No Telpon</label></b></center>
                                <center>
                                    <div class='col-md-10'><input type="number" name="no_telpon" autocomplete="off" value="<?= $r['no_telpon']; ?>" required placeholder="Masukkan No Telpon" class="form-control"></div>
                                </center>
                            </div>
                            <div class="form-group">
                                <center><b><label class='col-md-3'>Email</label></b></center>
                                <center>
                                    <div class='col-md-10'><input type="email" name="email" autocomplete="off" value="<?= $r['email']; ?>" required placeholder="Masukkan Email" class="form-control"></div>
                                </center>
                            </div>
                            <div class="form-group">
                                <center><b><label class='col-md-3'>Tanggal</label></b></center>
                                <center>
                                    <div class='col-md-10'><input type="date" name="tanggal" autocomplete="off" value="<?= $r['tanggal']; ?>" required placeholder="Masukkan Tanggal" class="form-control"></div>
                                </center>
                            </div>
                            <div class="form-group">
                                <center><b><label class='col-md-3'>Jam</label></b></center>
                                <center>
                                    <div class='col-md-10'>
                                        <select id="jam" name="jam" class="form-control">
                                            <option selected> <?= $r['jam']; ?></option>
                                            <option value=" 09:00">09:00 AM</option>
                                            <option value="10:00">10:00 AM</option>
                                            <option value="11:00">11:00 AM</option>
                                            <option value="12:00">12:00 AM</option>
                                            <option value="13:00">13:00 AM</option>
                                            <option value="14:00">14:00 AM</option>
                                            <option value="15:00">15:00 AM</option>
                                        </select>
                                    </div>
                                </center>
                            </div>
                            <div class="form-group">
                                <center><b><label class='col-md-4'>Nama Mobil</label></b></center>
                                <center>
                                    <div class='col-md-10'>
                                        <select id="nama_mobil" name="nama_mobil" class="form-control">
                                            <option selected> <?= $r['nama_mobil']; ?></option>
                                            <option value="Honda">Honda</option>
                                            <option value="Toyota">Toyota</option>
                                            <option value="Suzuki">Suzuki</option>
                                            <option value="Daihatsu">Daihatsu</option>
                                            <option value="Mitsubishi">Mitsubishi</option>
                                            <option value="Nissan">Nissan</option>
                                            <option value="KIA">KIA</option>
                                            <option value="Bmw">Bmw</option>
                                            <option value="Datsun">Datsun</option>
                                            <option value="Izusu">Izusu</option>
                                        </select>
                                    </div>
                                </center>
                            </div>
                            <div class="form-group">
                                <center><b><label class='col-md-3'>Tipe Mobil</label></b></center>
                                <center>
                                    <div class='col-md-10'><input type="text" onkeyup="this.value = this.value.toUpperCase()" name="tipe_mobil" autocomplete="off" value="<?= $r['tipe_mobil']; ?>" required placeholder="Masukkan Tipe Mobil" class="form-control"></div>
                                </center>
                            </div>
                            <div class="form-group">
                                <center><b><label class='col-md-3'>No Plat</label></b></center>
                                <center>
                                    <div class='col-md-10'><input type="text" onkeyup="this.value = this.value.toUpperCase()" name="no_plat" autocomplete="off" value="<?= $r['no_plat']; ?>" required placeholder="Masukkan No Plat" class="form-control"></div>
                                </center>
                            </div>
                            <div class="form-group">
                                <center><b><label class='col-md-3'>Jenis Servis</label></b></center>
                                <center>
                                    <div class='col-md-10'>
                                        <select id="jenis_servis" name="jenis_servis" class="form-control">
                                            <option selected><?= $r['jenis_servis']; ?></option>
                                            <option value="1KM">Servis 1000 KM</option>
                                            <option value="10KM">Servis 10.000 KM</option>
                                            <option value="20KM">Servis 20.000 KM</option>
                                            <option value="30KM">Servis 30.000 KM</option>
                                            <option value="40KM">Servis 40.000 KM</option>
                                            <option value="50KM">Servis 50.000 KM</option>
                                            <option value="60KM">Servis 60.000 KM</option>
                                            <option value="70KM">Servis 70.000 KM</option>
                                            <option value="80KM">Servis 80.000 KM</option>
                                            <option value="90KM">Servis 90.000 KM</option>
                                            <option value="100KM">Servis 100.000 KM</option>
                                            <option value="120KM">Servis 120.000 KM</option>
                                            <option value="160KM">Servis 160.000 KM</option>
                                        </select>
                                    </div>
                                </center>
                            </div>
                            <div class="form-group">
                                <center><b><label class='col-md-3'>Keluhan</label></b></center>
                                <center>
                                    <div class='col-md-10'><input type="text" name="keluhan" autocomplete="off" value="<?= $r['keluhan']; ?>" required placeholder="Masukkan Keluhan" class="form-control"></div>
                                </center>
                            </div>
                            <div class="form-group">
                                <center><b><label class='col-md-3'>Dealer</label></b></center>
                                <center>
                                    <div class='col-md-10'>
                                        <select id="dealer" name="dealer" class="form-control">
                                            <option selected><?= $r['dealer']; ?></option>
                                            <option>Surabaya</option>
                                            <option>Medan</option>
                                            <option>Bekasi</option>
                                            <option>Bandung</option>
                                            <option>Jakarta</option>
                                            <option>Yogyakarta</option>
                                            <option>Semarang</option>
                                            <option>Balikpapan</option>
                                            <option>Solo</option>
                                            <option>Palembang</option>
                                        </select>
                                    </div>
                                </center>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Edit</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

<?php endforeach; ?>