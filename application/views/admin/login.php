<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $this->load->view('admin/header');
        ?>
    </head>
    <body class="bg-gradient-primary">
        <div class="container">
            <!-- Outer Row -->
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-3 d-none d-lg-block"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <?php if ($this->session->flashdata('error')) { ?>
                                                <div class="alert alert-danger" role="alert" style="margin-top: 10px;">
                                                    <?php echo $this->session->flashdata('error'); ?>
                                                </div>
                                            <?php } ?>
                                            <h1 class="h4 text-gray-900 mb-4">Login Admin</h1>
                                        </div>
                                        <form class="user" action="<?php echo site_url('LoginProcess/auth'); ?>" method="post" >
                                            <div class="form-group">
                                                <input type="text" name="user_name" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="pass_word" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>                                                                           
                                        </form>                                       
                                    </div>
                                </div>
                                <div class="col-lg-3 d-none d-lg-block"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url() ?>assets/admin/vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?php echo base_url() ?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?php echo base_url() ?>assets/admin/js/sb-admin-2.min.js"></script>
    </body>
</html>
