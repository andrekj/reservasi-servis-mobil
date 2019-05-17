<br><br><br>
<section id="blog" class="padding" style="margin-top: -50px;">
    <left>

    </left>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2>Artikel Autocar</h2><br>
                <?php $r = 1;
                foreach ($data->result_array() as $r) :
                    $id = $r['id'];
                    $judul = $r['judul'];
                    $image = $r['gambar'];
                    $isi = $r['isi'];
                    $r++; ?>
                    <article class="blog_item heading_space wow fadeInLeft" data-wow-delay="300ms">
                        <div class="row">
                            <div class="col-md-5 col-sm-5 heading_space">
                                <div class="image"><img src="<?php echo base_url() . 'assets/img/artikel/' . $image; ?>" alt="blog" class="border_radius" height="180" width="350"></div><br>
                            </div>
                            <div class="col-md-7 col-sm-7 heading_space">
                                <h3><b><a href="<?php echo base_url() . 'home/detail/' . $id; ?>"><?php echo $judul; ?></a></b></h3>
                                <ul class="comment margin10">

                                </ul>
                                <p class="margin10">
                                    <?php echo word_limiter($isi, 15); ?>
                                </p>
                            </div>
                        </div>
                    </article>
                    <hr>
                <?php endforeach; ?>
            </div>
        </div>
    </div>