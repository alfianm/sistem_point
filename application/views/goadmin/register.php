<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Register Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="<?= base_url('templates/highadmin') ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('templates/highadmin') ?>/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('templates/highadmin') ?>/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('templates/highadmin') ?>/css/style.css" rel="stylesheet" type="text/css" />

        <script src="<?= base_url('templates/highadmin') ?>/js/modernizr.min.js"></script>

    </head>


    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('assets/images/bg-2.jpg');background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="index.html" class="text-success">
                                    <span>Register</span>
                                </a>
                            </h2>

                            <form class="form-horizontal" action="<?= base_url('goadmin/addcustomer') ?>" method="post">
                                <?= $this->session->flashdata('message'); ?>
                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="username">Username</label>
                                        <input class="form-control" name="username" type="username" required="" id="username" placeholder="Masukkan username">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="password">Password</label>
                                        <input class="form-control" name="password" type="password" required="" id="password" placeholder="Masukkan password">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="nama">Nama</label>
                                        <input class="form-control" name="nama" type="text" id="nama" required="" placeholder="Masukkan nama">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control" name="alamat" type="text" id="alamat" required="" placeholder="Masukkan alamat" cols="30" rows="5"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="no">No. Telpon</label>
                                        <input class="form-control" name="no" type="text" id="no" required="" placeholder="Masukkan no telpon">
                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Sign Up Free</button>
                                    </div>
                                </div>

                            </form>

                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Already have an account?  <a href="<?= base_url('goadmin') ?>" class="text-dark m-l-5"><b>Sign In</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            

        </div>



        <!-- jQuery  -->
        <script src="<?= base_url('templates/highadmin') ?>/js/jquery.min.js"></script>
        <script src="<?= base_url('templates/highadmin') ?>/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('templates/highadmin') ?>/js/metisMenu.min.js"></script>
        <script src="<?= base_url('templates/highadmin') ?>/js/waves.js"></script>
        <script src="<?= base_url('templates/highadmin') ?>/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="<?= base_url('templates/highadmin') ?>/js/jquery.core.js"></script>
        <script src="<?= base_url('templates/highadmin') ?>/js/jquery.app.js"></script>

    </body>
</html>