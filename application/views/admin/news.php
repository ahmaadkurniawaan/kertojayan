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
                        <h1 class="h3 mb-0 text-gray-800">Daftar Berita</h1>
                    </div>
                    <div class="row">
                        <?php if ($this->session->flashdata('category_success')) { ?>
                            <div class="alert alert-success"> <?= $this->session->flashdata('category_success') ?> </div>
                        <?php } ?>

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Posting</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($front as $data) : ?>
                                        <tr>
                                            <td><a href="<?php echo site_url() ?>berita/detail/<?php echo $data->idnews ?>"><?php echo $data->title_news; ?></a></td>
                                            <td><?php echo $data->full_date_news; ?></td>
                                            <td><a href="<?php echo site_url() ?>/newsData/delete/<?php echo $data->idnews; ?>" onclick="return confirm('Yakin Ingin Menghapus Data Ini?');">Hapus</a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 40px;">

                        <div class="col-lg-12">
                            <hr>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px;margin-bottom: 10px;">
                        <hr>
                        <div class="col-lg-9">
                            &nbsp;
                        </div>
                        <div class="col-lg-3">
                            <a href="<?php echo site_url('addNews') ?>"><button class="btn btn-facebook btn-user btn-block">Tambah Berita</button></a>
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
        tinymce.init({
            selector: 'textarea'
        });
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
</body>

</html>