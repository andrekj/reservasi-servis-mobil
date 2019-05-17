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
                                            <a class="badge badge-success" data-toggle="modal" data-target="#detail-cus<?= $r['id']; ?>"> DETAIL </i></a>
                                            <a href="<?= base_url('admin/selesai/' . $r['id']); ?>" onclick="return confirm('Apakah Pesanan <?= $r['nama_customer']; ?> Telah Selesai ?');" class="badge badge-danger" data-placement="top"> SELESAI</i></a>
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

<!-- Modal -->
<?php $i = 1;
foreach ($reservasi as $r) : $i++; ?>
    <div class="row">
        <div class="modal fade" id="detail-cus<?= $r['id']; ?>" role="dialog">
            <div class="modal-dialog">
                <form action="<?= base_url('admin/edit'); ?>" method="post">
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
                                <div class='col-md-9'><input type="date" name="tanggal" autocomplete="off" value="<?= $r['tanggal']; ?>" required placeholder="Masukkan Tanggal" class="form-control"></div>
                            </div>
                            <div class="form-group row">
                                <b><label class='col'>Jam &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label></b>
                                <div class='col-md-9'>
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
                            </div>
                            <div class="form-group row">
                                <b><label class='col'>Mobil &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label></b>
                                <div class='col-md-9'>
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
                            </div>
                            <div class="form-group row">
                                <b><label class='col'>Tipe &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label></b>
                                <div class='col-md-9'><input type="text" onkeyup="this.value = this.value.toUpperCase()" name="tipe_mobil" autocomplete="off" value="<?= $r['tipe_mobil']; ?>" required placeholder="Masukkan Tipe Mobil" class="form-control"></div>
                            </div>
                            <div class="form-group row">
                                <b><label class='col'>Plat &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label></b>
                                <div class='col-md-9'><input type="text" onkeyup="this.value = this.value.toUpperCase()" name="no_plat" autocomplete="off" value="<?= $r['no_plat']; ?>" required placeholder="Masukkan No Plat" class="form-control"></div>
                            </div>
                            <div class="form-group row">
                                <b><label class='col'>Servis &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label></b>
                                <div class='col-md-9'>
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
                            </div>
                            <div class="form-group row">
                                <b><label class='col'>Keluhan &nbsp&nbsp&nbsp&nbsp:</label></b>
                                <div class='col-md-9'><input type="text" name="keluhan" autocomplete="off" value="<?= $r['keluhan']; ?>" required placeholder="Masukkan Keluhan" class="form-control"></div>
                            </div>
                            <div class="form-group row">
                                <b><label class='col'>Dealer &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label></b>
                                <div class='col-md-9'>
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
                            </div>
                            <div class="form-group row">
                                <b><label class='col'>Total Harga</label></b>
                                <div class='col-md-9'><input type="text" name="total" autocomplete="off" value="Rp" class="form-control"></div>
                            </div><br>
                            <pre align="right">Total Harga : <?= $r['total']; ?></pre>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Edit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>