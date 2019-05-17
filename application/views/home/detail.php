<?php
$b = $data->row_array();
?>
<title><?php echo $b['judul']; ?></title>

<body>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <h2><?php echo $b['judul']; ?></h2>
            <hr /><br>
            <center>
                <div class="image"><img src="<?php echo base_url() . 'assets/img/artikel/' . $b['gambar']; ?>" alt="blog" class="border_radius" height="360" width="700"></div><br>
            </center>
            <?php echo $b['isi']; ?>
        </div>
    </div>
    <center>
        <h2><a href="<?= base_url('home/artikel'); ?> " class="badge badge-success" data-placement="top"> KEMBALI</i></a>
            <h2>
    </center><br>