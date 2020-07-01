<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Login Page</title>
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
        <div class="accountbg" style="background: url('assets/images/bg-1.jpg');background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="index.html" class="text-success">
                                    <span><img src="assets/images/logo.png" alt="" height="26"></span>
                                </a>
                            </h2>

                            <form class="" action="#">

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Sign In</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="account-copyright">2020 © Highdmin. - <a href="https://kadetech.co.id">Kadetech.co.id</a></p>
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