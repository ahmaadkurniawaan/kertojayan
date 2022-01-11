<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $this->load->view('admin/header');
    ?>
    <link href="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
                        <h1 class="h3 mb-0 text-gray-800">Dokumen</h1>
                    </div>
                    <div class="row">
                        <?php if ($this->session->flashdata('category_success')) { ?>
                            <div class="alert alert-success"> <?= $this->session->flashdata('category_success') ?> </div>
                        <?php } ?>
                        <div class="col-lg-5 d-none d-lg-block"></div>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Dokumen</th>
                                        <th>Tanggal</th>
                                        <th>Dokumen</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($front as $data) : ?>
                                        <tr>
                                            <td><?php echo $data->judul_unduh; ?></td>
                                            <td><?php echo $data->tanggal_unduh; ?></td>
                                            <td><a href="<?php echo base_url() ?>docs/<?php echo $data->link_unduh; ?>">Lihat</a></td>
                                            <td><a href="<?php echo site_url() ?>/dokumen/delete2/<?php echo $data->idunduh; ?>" onclick="return confirm('Yakin Ingin Menghapus Data Ini?');">Hapus</a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 50px;margin-bottom: 50px;">
                        <div class="col-lg-6">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Kategori</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($front2 as $data2) : ?>
                                        <tr>
                                            <td><?php echo $data2->nama_heading_unduh; ?></td>
                                            <td><a href="<?php echo site_url() ?>/dokumen/delete1/<?php echo $data2->idheading_unduh; ?>" onclick="return confirm('Yakin Ingin Menghapus Data Ini?');">Hapus</a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <hr>
                            <h1 class="h4 text-gray-900 mb-4">Tambah Data Kategori</h1>
                            <hr>
                            <?php echo form_open_multipart('dokumen/insert1'); ?>
                            <div class="user" action="<?php echo site_url(); ?>" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" name="nama1" class="form-control form-control-user" placeholder="Nama" required>
                                    </div>
                                </div>
                                <button class="btn btn-facebook btn-user btn-block">
                                    Simpan
                                </button>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h1 class="h4 text-gray-900 mb-4">Tambah Data Unduhan</h1>
                            <hr>
                            <?php echo form_open_multipart('dokumen/insert'); ?>
                            <div class="user" action="<?php echo site_url(); ?>" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <select name="kat" class="form-control" required>
                                            <option value="">-- Pilih Kategori --</option>
                                            <?php foreach ($front2 as $data2) : ?>
                                                <option value="<?php echo $data2->idheading_unduh ?>"><?php echo $data2->nama_heading_unduh ?></option>
                                            <?php endforeach; ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" name="nama" class="form-control form-control-user" placeholder="Nama Dokumen" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <p>Dokumen</p>
                                    <input type="file" name="gbr1" class="form-control-file" required>
                                </div>

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
    <script src="<?php echo base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
</body>

</html>