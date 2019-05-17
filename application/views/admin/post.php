<center>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <h2>Artikel</h2>
            <hr />
            <form action="<?php echo base_url('admin/simpan_artikel') ?>" method="post" enctype="multipart/form-data">
                <input type="text" name="judul" class="form-control" placeholder="Judul berita" required /><br />
                <textarea id="ckeditor" name="isi" class="form-control" required></textarea><br />
                <input type="file" name="filefoto" required><br><br>
                <button class="btn btn-primary btn-lg" type="submit">Post Artikel</button>
            </form>
        </div>
    </div>
    </div>
</center>