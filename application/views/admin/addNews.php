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


                    <div class="row">
                        <div class="col-lg-12">
                            <?php if ($this->session->flashdata('category_success')) { ?>
                                <div class="alert alert-success"> <?= $this->session->flashdata('category_success') ?> </div>
                            <?php } ?>
                            <div class="p-5">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Berita</h1>
                                <hr>
                                <?php echo form_open_multipart('addNews/insert'); ?>
                                <div class="user" action="<?php echo site_url(); ?>" method="post">
                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <input type="text" name="nama" class="form-control form-control-user" placeholder="Judul Berita" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <p>Gambar Berita</p>
                                        <input type="file" name="gbr2" class="form-control-file" required>
                                        <small id="emailHelp" class="form-text text-muted">Lebar HARUS 750px</small>
                                    </div>
                                    <div class="form-group">
                                        <p>Gambar Kedua</p>
                                        <input type="file" name="gbr3" id="myInput" class="form-control-file">
                                        <small id="emailHelp" class="form-text text-muted">Lebar HARUS 750px (Tidak Wajib)</small>
                                        <input type="text" id="gambar2" class="form-control form-control-user" readonly>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <input type="text" id="myInput2" name="caption" class="form-control form-control-user" placeholder="Caption Gambar" style="margin-bottom: 15px;">
                                            <input type="text" id="caption2" class="form-control form-control-user" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <input type="text" id="data-html" name="data-html" class="form-control form-control-user" readonly>
                                            <button class="btn btn-primary btn-user btn-block" type="button" style="margin-top: 10px;" onclick="myFunction()">Salin Gambar</button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <p>Isi Berita</p>
                                        <textarea name="isi"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <p>Kategori</p>
                                        <select name="kategori" class="form-control" required>
                                            <option>-- Pilih Kategori --</option>
                                            <?php foreach ($category as $data) : ?>
                                                <?php if ($data->status_category == 1) : ?>
                                                    <option value="<?php echo $data->idcategory ?>"><?php echo $data->name_category ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <p>Tanggal Berita</p>
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
                                        <p>Bulan Berita</p>
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
                                        <p>Tahun Berita</p>
                                        <input type="text" name="tahun" class="form-control form-control-user" placeholder="Tahun" required>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <p>Penulis</p>
                                            <input type="text" name="penulis" class="form-control form-control-user" placeholder="Nama Penulis" required>
                                        </div>
                                    </div>
                                    <hr>
                                    <button type="submit" class="btn btn-facebook btn-user btn-block">
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
    <script src="<?php echo base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        function myFunction() {
            var copyText = document.getElementById("gambar2");
            var copyText2 = document.getElementById("caption2");

            var copyReady = "<p><img class='img-fluid' src='<?php echo base_url() ?>assets/img/news/" + copyText.value + "'/></p><figcaption class='figure-caption'>" + copyText2.value + "</figcaption> <hr>";
            var anj = $('#data-html').val(copyReady);

            anj.select();
            document.execCommand("copy");

            alert("Berhasil");
        }
        tinymce.init({
            selector: 'textarea'

        });
        $(document).ready(function() {
            $('#myInput').on('change', function(e) {
                var a = e.target.files[0].name;
                $('#gambar2').val(a);
            });
            $('#myInput2').on('change', function(e) {
                var b = $(this).val();
                $('#caption2').val(b);
            });
            $('#dataTable').DataTable();
        });
    </script>
</body>

</html>