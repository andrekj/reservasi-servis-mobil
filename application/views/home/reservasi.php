<section class="case-studies">
    <div class="container">
        <div class="section-title text-center">
            <h1>Silahkan Masukan Data Untuk Melakukan Reservasi</h1>
        </div>
        <form method="post" action="<?= base_url('home/reservasi') ?>">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nama_customer">Nama Lengkap</label>
                    <input type="text" onkeyup="this.value = this.value.toUpperCase()" class=" form-control" id="nama_customer" name="nama_customer" placeholder="Nama Lengkap">
                </div>
                <div class="form-group col-md-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group col-md-3">
                    <label for="no_telpon">No Telepon</label>
                    <input type="number" required class="form-control" id="no_telpon" name="no_telpon" placeholder="No Telepon">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="keluhan">Service Lainnya/Keluhan</label>
                        <input type="text" class="form-control" id="keluhan" name="keluhan" placeholder="Service Lainnya/Keluhan">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="jam">Jam</label>
                            <select id="jam" name="jam" class="form-control">
                                <option value="09:00">09:00 AM</option>
                                <option value="10:00">10:00 AM</option>
                                <option value="11:00">11:00 AM</option>
                                <option value="12:00">12:00 AM</option>
                                <option value="13:00">13:00 AM</option>
                                <option value="14:00">14:00 AM</option>
                                <option value="15:00">15:00 AM</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="nama_mobil">Brand Mobil</label>
                            <select id="nama_mobil" name="nama_mobil" class="form-control">
                                <option selected>Pilih Jenis Mobil</option>
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
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="tipe_mobil">Tipe Mobil</label>
                                <input type="text" onkeyup="this.value = this.value.toUpperCase()" class="form-control" id="tipe_mobil" name="tipe_mobil" placeholder="Tipe Mobil">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="no_plat">No Plat</label>
                                <input type="text" onkeyup="this.value = this.value.toUpperCase()" class="form-control" id="no_plat" name="no_plat" placeholder="xx xxxx xx">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="jenis_servis">Jenis Service</label>
                                <select id="jenis_servis" name="jenis_servis" class="form-control">
                                    <option selected>Pilih Jenis Servis</option>
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
                            <div class="form-group col-md-3">
                                <label for="dealer">Kota</label>
                                <select id="dealer" name="dealer" class="form-control">
                                    <option selected>Pilih Kota</option>
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
                        <div class="form-row-">
                            <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-primary">Booking</button>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
    </div>
    </div>