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
                        <h1 class="h3 mb-0 text-gray-800">Jenis Usaha</h1>
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
                                        <th>Usaha</th>
                                        <th>Pelaksanaan</th>
                                        <th>Lokasi</th>
                                        <th>Detail</th>
                                        <th>Dokumen</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($front as $data) : ?>
                                        <tr>
                                            <td><?php echo $data->agenda_detail; ?></td>
                                            <td><?php echo $data->time_agenda; ?></td>
                                            <td><?php echo $data->location_agenda; ?></td>
                                            <td><?php echo $data->agenda_description; ?></td>
                                            <?php if (!empty($data->img_agenda)) : ?>
                                                <td><a href="<?php echo base_url() ?>assets/img/agenda/<?php echo $data->img_agenda; ?>">Lihat</a></td>
                                                <td><a href="<?php echo site_url() ?>agendaProccess/delete2/<?php echo $data->idagenda; ?>/<?php echo $data->img_agenda; ?>" onclick="return confirm('Yakin Ingin Menghapus Data Ini?');">Hapus</a></td>
                                            <?php else : ?>
                                                <td>-</td>
                                                <td><a href="<?php echo site_url() ?>agendaProccess/delete1/<?php echo $data->idagenda; ?>" onclick="return confirm('Yakin Ingin Menghapus Data Ini?');">Hapus</a></td>
                                            <?php endif; ?>

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 50px;margin-bottom: 50px;">
                        <div class="col-lg-12">

                            <h1 class="h4 text-gray-900 mb-4">Tambah Data Usaha</h1>
                            <hr>
                            <?php echo form_open_multipart('agendaProccess/insert'); ?>
                            <div class="user" action="<?php echo site_url(); ?>" method="post">

                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label>Usaha</label>
                                        <input type="text" name="nama" class="form-control form-control-user" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <p>Detail Usaha</p>
                                    <textarea name="isi" class="form-control form-control-user"></textarea>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label>Penyelenggara</label>
                                        <input type="text" name="penyelenggara" class="form-control form-control-user" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label>Narahubung</label>
                                        <input type="text" name="kontak" class="form-control form-control-user" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label>Lokasi</label>
                                        <input type="text" name="lokasi" class="form-control form-control-user" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label>Waktu Oprasional</label>
                                        <input type="text" name="waktu" class="form-control form-control-user" required>
                                        <small id="emailHelp" class="form-text text-muted">Contoh : 09.00 - 10.00 ATAU 09.00 - Selesai</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label>Hari Pelaksanaan</label>
                                        <select name="hari" class="form-control form-control-user" required>
                                            <option value="">-- Pilih Hari --</option>
                                            <option value="Senin">Senin</option>
                                            <option value="Selasa">Selasa</option>
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                            <option value="Jumat">Jumat</option>
                                            <option value="Sabtu">Sabtu</option>
                                            <option value="Minggu">Minggu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <p>Tanggal Pelaksanaan</p>
                                    <select name="tanggal" class="form-control" required>
                                        <option value="">-- Pilih Tanggal --</option>
                                        <?php
                                        for ($a = 1; $a <= 31; $a++) :
                                            if ($a < 10) :
                                        ?>
                                                <option value="<?php echo "0" . $a ?>"><?php echo "0" . $a ?></option>
                                            <?php else : ?>
                                                <option value="<?php echo $a ?>"><?php echo $a ?></option>
                                            <?php endif; ?>
                                        <?php endfor; ?>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <p>Bulan Pelaksanaan</p>
                                    <select name="bulan" class="form-control" required>
                                        <option value="">-- Pilih Bulan --</option>
                                        <option value="Januari">Januari</option>
                                        <option value="Februari">Februari</option>
                                        <option value="Maret">Maret</option>
                                        <option value="April">April</option>
                                        <option value="Mei">Mei</option>
                                        <option value="Juni">Juni</option>
                                        <option value="Juli">Juli</option>
                                        <option value="Agustus">Agustus</option>
                                        <option value="September">September</option>
                                        <option value="Oktober">Oktober</option>
                                        <option value="November">November</option>
                                        <option value="Desember">Desember</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <p>Tahun Pelaksanaan</p>
                                    <input type="text" name="tahun" class="form-control form-control-user" required>
                                </div>
                                <div class="form-group">
                                    <p>Dokumen (Tidak Wajib)</p>
                                    <input type="file" name="gbr1" class="form-control-file">
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
        tinymce.init({
            selector: 'textarea'
        });
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
</body>

</html>