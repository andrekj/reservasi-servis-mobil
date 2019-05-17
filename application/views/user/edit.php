<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-6">
            <div class="card mb-7" style="max-width: 700px;"><br>
                <?= form_open_multipart('user/edit'); ?>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label"> &nbsp&nbsp&nbsp&nbsp&nbspEmail</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">&nbsp&nbsp&nbsp&nbsp&nbspNama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">&nbsp&nbsp&nbsp&nbsp&nbspGambar</div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Pilih Gambar</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row justify-contend-end">
                    <div class="col-sm-12">
                        &nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>

                </form>

            </div>
        </div>

    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -- >                                   