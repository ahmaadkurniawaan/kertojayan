<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Website Resmi Desa Kertojayan</title>
        <!-- WhatsApp Privew -->
    <title>Website Resmi Desa Kertojayan</title>
    <meta name="description" content="Website Resmi Desa Kertojayan Grabag Purworejo.">
    <meta property="og:title" content="Desa Kertojayan" />
    <meta property="og:url" content="<?= base_url(); ?>" />
    <meta property="og:description" content="Desa Kertojayan Grabag Purworejo">
    <meta property="og:image" content="<?= base_url() ?>assets/img/logo.png">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>assets/img/logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <a href="<?= base_url(); ?>" class="logo me-auto"><img src="<?= base_url(); ?>assets/img/logo.png" alt=""
                    class="img-fluid">Desa Kertojayan</a>
            <!-- <h1 class="logo me-auto"><a href="<?= base_url(); ?>">Desa Kertojayan</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <?php
            $uri = $this->uri->segment(1);
            ?>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="<?php if ($uri == 'Beranda') { ?>active<?php } ?>"><a href="<?= base_url() ?>">Home</a>
                    </li>
                    <li class="<?php if ($uri == 'profil') { ?>active<?php } ?>"><a
                            href="<?= base_url() ?>profil">Profil</a></li>
                    <li class="drop-down"><a href="">Pemerintahan</a>
                        <ul>
                            <li class="<?php if ($uri == 'pemerintahan') { ?>active<?php } ?>"><a
                                    href="<?= base_url() ?>pemerintahan">Pemerintahan Desa</a></li>
                            <li class="<?php if ($uri == 'pemerintahan/bpd') { ?>active<?php } ?>"><a
                                    href="<?= base_url() ?>pemerintahan/bpd">Badan Permusyawaratan Desa</a></li>
                        </ul>
                    </li>


                    <li class="<?php if ($uri == 'berita') { ?>active<?php } ?>"><a
                            href="<?= base_url() ?>berita">Berita</a></li>
                    <!-- <li class="<?php if ($uri == 'usaha') { ?>active<?php } ?>"><a href="<?= base_url() ?>usaha">Jenis
                            Usaha</a></li> -->
                    <li class="<?php if ($uri == 'kontak') { ?>active<?php } ?>"><a
                            href="<?= base_url() ?>kontak">Kontak</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->