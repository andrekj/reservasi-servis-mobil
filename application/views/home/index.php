<?= $this->session->flashdata('message'); ?>

<div id="my-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#my-carousel" data-slide-to="1"></li>
        <li data-target="#my-carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="<?= base_url('assets/'); ?>img/hero-slide-1.png" alt="Hero Slide">

            <div class="carousel-caption">
                <h1>Strategic Management</h1>

                <p>Efficiently develop parallel e-markets through impactful outsourcing.<br>Conveniently drive prospective functionalities before.</p>
            </div>
        </div>
        <div class="item">
            <img src="<?= base_url('assets/'); ?>img/hero-slide-2.png" alt="...">

            <div class="carousel-caption">
                <h1>Market Analyst</h1>

                <p>Synergistically enhance low-risk high-yield testing procedures<br>with clicks-and-mortar architectures.
                </p>
            </div>
        </div>
        <div class="item">
            <img src="<?= base_url('assets/'); ?>img/hero-slide-3.png" alt="...">

            <div class="carousel-caption">
                <h1>Customer Care</h1>

                <p>Monotonectally envisioneer 24/7 bandwidth with reliable imperatives. <br>Continually unleash unique
                    niches after go forward.</p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#my-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#my-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- #my-carousel-->



<section class="section-content-left-icon">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="left-icon-wraper">
                    <div class="icon">
                        <i class="flaticon-online-shop"></i>
                    </div>

                    <div class="content">
                        <h2>Servis jadi lebih mudah</h2>
                        <p>Customer dapat melakukan reservasi/booking melalui website dan menentukan servis.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="left-icon-wraper">
                    <div class="icon"><i class="flaticon-funnel"></i></div>

                    <div class="content">
                        <h2>Harga lebih murah 20%</h2>
                        <p>Kami memberikan harga lebih murah dibanding servis mobil lainnya agar customer senang.</p>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="left-icon-wraper">
                    <div class="icon"><i class="flaticon-target"></i></div>

                    <div class="content">
                        <h2>Profesional</h2>
                        <p>Kami melakukan servis secara teliti agar tidak terjadi hal yang tidak diinginkan.</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="left-icon-wraper">
                    <div class="icon"><i class="flaticon-customer"></i></div>

                    <div class="content">
                        <h2>Berpengalaman</h2>
                        <p>Para karyawan kami memiliki pengalaman yang sudah sangat mahir dalam melakukan bidangnya.</p>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="left-icon-wraper">
                    <div class="icon"><i class="flaticon-map"></i></div>

                    <div class="content">
                        <h2>Memiliki cabang di 10 kota besar</h2>
                        <p>Kami memiliki di 10 kota besar di Indonesia, yang dapat diketahui pada menu tentang kami.</p>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="left-icon-wraper">
                    <div class="icon"><i class="flaticon-quality"></i></div>

                    <div class="content">
                        <h2>Berkualitas dan Bergaransi</h2>
                        <p>Selain berkualitas, kami pun memberikan garansi 3 bulan setelah servis berjalan.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- .container -->
</section>
<!-- /.services-left-icon -->

<section class="featured-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="featured-content-wrapper">
                    <div class="featured-img">
                        <img class="img-responsive" src="<?= base_url('assets/'); ?>img/img-featured-1.png" alt="">
                    </div>
                    <div class="featured-content">
                        <h1>We Improve Your Online Performance</h1>
                        <p>
                            Dynamically enhance accurate methods of empowerment without interdependent applications. Appropriately e-enable synergistic platforms for visionary manufactured products. Dramatically develop state of the art relationships without enterprise-wide methodologies.
                        </p>
                        <a href="<?= base_url('home/tentang') ?>" class="btn btn-default btn-lg">Learn More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.featured-box -->

<section class="testimonial">
    <div class="container">
        <div id="testimonialSlider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#testimonialSlider" data-slide-to="0" class="active"></li>
                <li data-target="#testimonialSlider" data-slide-to="1"></li>
                <li data-target="#testimonialSlider" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <blockquote>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel lacus
                            pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec diam elit
                            consequat eget augue vitae aliquet sollicitudin.
                        </p>

                        <ul class="user-details">
                            <li class="avatar"><img src="<?= base_url('assets/'); ?>img/img-testimonial-1.jpg" class="img-responsive" alt="" /></li>
                            <li class="name">Justus Kühn</li>
                            <li class="company">uiCookies</li>
                        </ul>

                    </blockquote>
                </div>
                <div class="item">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel lacus
                            pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec diam elit
                            consequat eget augue vitae aliquet sollicitudin.
                        </p>
                        <ul class="user-details">
                            <li class="avatar"><img src="<?= base_url('assets/'); ?>img/img-testimonial-2.jpg" class="img-responsive" alt="" /></li>
                            <li class="name">Lennox Arnold</li>
                            <li class="company">uiCookies</li>
                        </ul>

                    </blockquote>
                </div>
                <div class="item">
                    <blockquote>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel lacus
                            pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec diam elit
                            consequat eget augue vitae aliquet sollicitudin.
                        </p>
                        <ul class="user-details">
                            <li class="avatar"><img src="<?= base_url('assets/'); ?>img/img-testimonial-3.jpg" class="img-responsive" alt="" /></li>
                            <li class="name">Paulina Berger</li>
                            <li class="company">uiCookies</li>
                        </ul>

                    </blockquote>
                </div>
            </div>
        </div>
        <!-- #testimonialSlider -->
    </div>
</section>
<!-- /.testimonial -->

<section class="client-logo ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="<?= base_url('assets/'); ?>img/logo-client-1.jpg" alt="Image"></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="<?= base_url('assets/'); ?>img/logo-client-2.jpg" alt="Image"></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="<?= base_url('assets/'); ?>img/logo-client-3.jpg" alt="Image"></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="<?= base_url('assets/'); ?>img/logo-client-4.jpg" alt="Image"></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="<?= base_url('assets/'); ?>img/logo-client-5.jpg" alt="Image"></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="<?= base_url('assets/'); ?>img/logo-client-6.jpg" alt="Image"></a>
            </div>
        </div>
    </div>
    <!--end of .container -->
</section>
<!-- /.client-logo -->

<section class="case-studies">
    <div class="container">
        <div class="section-title text-center">
            <h1>Our case Studies</h1>
            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy<br>with my whole heart. I am alone, and feel the charm of existence in this spot.</p>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="case-studies-content">
                    <img class="img-responsive" src="<?= base_url('assets/'); ?>img/img-case-sudies-1.png" alt="case sudies.png">
                    <h2>Solving the problem</h2>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="case-studies-content">
                    <img class="img-responsive" src="<?= base_url('assets/'); ?>img/img-case-sudies-2.png" alt="case sudies.png">
                    <h2>Analysis of the enterprise's activity</h2>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="case-studies-content">
                    <img class="img-responsive" src="<?= base_url('assets/'); ?>img/img-case-sudies-3.png" alt="case sudies.png">
                    <h2>Methods of the recruitment</h2>
                </div>
            </div>
        </div><!-- /.row -->

        <div class="row">
            <div class="col-sm-4">
                <div class="case-studies-content">
                    <img class="img-responsive" src="<?= base_url('assets/'); ?>img/img-case-sudies-4.png" alt="case sudies.png">
                    <h2>SEO and Web development</h2>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="case-studies-content">
                    <img class="img-responsive" src="<?= base_url('assets/'); ?>img/img-case-sudies-5.png" alt="case sudies.png">
                    <h2>Thinking only of profits</h2>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="case-studies-content">
                    <img class="img-responsive" src="<?= base_url('assets/'); ?>img/img-case-sudies-6.png" alt="case sudies.png">
                    <h2>The main objectives of the marketer</h2>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- /.client-logo -->