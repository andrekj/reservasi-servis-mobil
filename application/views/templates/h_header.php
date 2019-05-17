<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?= $title; ?></title>
    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- off-canvas -->
    <link href="<?= base_url('assets/'); ?>css/mobile-menu.css" rel="stylesheet">
    <!-- font-awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Flat Icon -->
    <link href="<?= base_url('assets/'); ?>fonts/flaticon/flaticon.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Style CSS -->
    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?= base_url('assets/img/icon.ico') ?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="main-wrapper">
        <!-- Page Preloader -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>

        <div class="uc-mobile-menu-pusher">

            <div class="content-wrapper">
                <!-- Header Top -->
                <div class="header-top visible-md visible-lg">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <ul class="social-icon">
                                    <li><a href="" class="fa fa-facebook" aria-hidden="true"> </a></li>
                                    <li><a href="" class="fa fa-twitter" aria-hidden="true"> </a></li>
                                    <li><a href="" class="fa fa-pinterest-p" aria-hidden="true"> </a></li>
                                    <li><a href="" class="fa fa-google-plus" aria-hidden="true"> </a></li>
                                    <li><a href="" class="fa fa-linkedin" aria-hidden="true"> </a></li>

                                </ul>
                            </div>

                            <div class="col-sm-12 col-md-8">
                                <ul class="top-contact pull-right">
                                    <li class="phone"><i class="fa fa-phone-square" aria-hidden="true"></i> +62-8952-345-6</li>
                                    <li class="email"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        center@autocar.com
                                    </li>
                                    <li class="get-a-quote"><a href="<?= base_url('home/reservasi') ?>" title="">Reservasi/Booking</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .navbar-top -->
                <nav class="navbar m-menu navbar-default">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?= base_url(''); ?>"><img src="<?= base_url('assets/'); ?>img/logo.png" alt=""></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="#navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right main-nav">
                                <li><a href="<?= base_url(''); ?>">Home</a></li>
                                <li><a href="<?= base_url('home/artikel'); ?>">Artikel</a></li>
                                <li><a href="<?= base_url('home/tentang'); ?>">Tentang Kami</a></li>
                                <li><a href="<?= base_url('auth'); ?>">Masuk</a></li>
                        </div>
                        <!-- .navbar-collapse -->
                    </div>
                    <!-- .container -->
                </nav>