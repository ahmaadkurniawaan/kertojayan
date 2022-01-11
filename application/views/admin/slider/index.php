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
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
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
                        <h1 class="h3 mb-0 text-gray-800">Gambar Slider</h1>
                    </div>
                    <div class="row mt-4 mb-4">


                        <div class="col-md-6">
                            <?php if ($this->session->flashdata('category_success')) { ?>
                                <div class="alert alert-success"> <?= $this->session->flashdata('category_success') ?> </div>
                            <?php } ?>
                        </div>


                        <table class="table table-bordered mt-3" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">image</th>
                                    <th scope="col">Tanggal Upload</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                if (isset($slider)) {
                                    $no = 1;
                                    foreach ($slider as $sld) {
                                ?>
                                        <tr>
                                            <th scope="row"><?= $no++; ?></th>
                                            <td> <img class="img-fluid" style="width:70px" src="<?= base_url() ?>assets/img/slider/<?= $sld['img_slider']; ?>" class="mr-3" alt="image"></td>
                                            <td><?= $sld['date_created']; ?></td>
                                            <td class="text-center">

                                                <a class="" onclick="return confirm('Apakah anda yakin ingin menghapus !');" href="<?= base_url(); ?>slider/delete/<?= $sld['idslider']; ?> ">Hapus</a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "Tidak Ada Gambar";
                                }
                                ?>
                            </tbody>
                        </table>


                    </div>

                    <h2 class="mt-4">Tambah Gambar Slider</h2>

                    <div class="row mt-4 mb-4">

                        <div class="col-md-8 mb-5">
                            <?php echo form_open_multipart('slider/insert'); ?>
                            <div class="form-group">
                                <label>Pilih Foto</label>
                                <input type="file" class="form-control" name="gambar" id="gambar" size="20" required>
                                <?= form_error('image', '<small class="text-danger ">', '</small>'); ?>
                            </div>

                            <button type="submit" value="upload" class="btn btn-primary btn-block">Simpan</button>
                            <?php echo form_close(); ?>
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