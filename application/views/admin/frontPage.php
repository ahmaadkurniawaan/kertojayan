<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $this->load->view('admin/header');
    ?>
</head>

<body class="bg-gradient-primary">
    <div id="wrapper">
        <?php
        $this->load->view('admin/menu');
        ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?php echo site_url('settings') ?>">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo site_url('loginProcess/logout') ?>">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Halaman Depan</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block"></div>
                        <div class="col-lg-12">
                            <?php if ($this->session->flashdata('category_success')) { ?>
                            <div class="alert alert-success"> <?= $this->session->flashdata('category_success') ?>
                            </div>
                            <?php } ?>
                            <div class="p-5">
                                <h1 class="h4 text-gray-900 mb-4">Ubah Data</h1>
                                <hr>
                                <?php echo form_open_multipart('FrontPageData/editFront'); ?>
                                <div class="user" action="<?php echo site_url(); ?>" method="post">
                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <input type="text" name="kata_pembuka"
                                                class="form-control form-control-user" placeholder="Kata Pembuka"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="sub_kata_pembuka"
                                            class="form-control form-control-user" placeholder="Sub Kata Pembuka"
                                            required>
                                    </div>

                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <input type="number" name="penduduk"
                                                    class="form-control form-control-user" placeholder="Jumlah Penduduk"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <input type="number" name="keluarga"
                                                    class="form-control form-control-user" placeholder="Jumlah Keluarga"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <input type="number" name="wilayah"
                                                    class="form-control form-control-user" placeholder="Jumlah Wilayah"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <input type="number" name="umkm" class="form-control form-control-user"
                                                    placeholder="Jumlah UMKM" required>
                                            </div>
                                        </div>
                                    </div>

                                    <p>Tentang Desa</p>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <textarea name="tentang"></textarea>
                                        </div>
                                    </div>
                                    <p>Visi</p>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <textarea name="visi"></textarea>
                                        </div>
                                    </div>
                                    <p>Misi</p>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <textarea name="misi"></textarea>
                                        </div>
                                    </div>
                                    <p>Demografi</p>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <textarea name="demografi"></textarea>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <p>Gambar Pertama</p>
                                        <input type="file" name="gbr1" class="form-control-file" required>
                                    </div> -->
                                    <!-- <div class="form-group">
                                        <p>Gambar Visi & Misi</p>
                                        <input type="file" name="gbr2" class="form-control-file" required>
                                    </div> -->
                                    <hr>
                                    <button class="btn btn-facebook btn-user btn-block">
                                        Simpan
                                    </button>
                                    <?php echo form_close(); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $this->load->view('admin/footer');
            ?>
        </div>
    </div>
    <script src="<?php echo base_url() ?>assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/sb-admin-2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/tinymce/tinymce.min.js"></script>

    <script type="text/javascript">
    tinymce.init({
        selector: 'textarea'
    });
    </script>
</body>

</html>