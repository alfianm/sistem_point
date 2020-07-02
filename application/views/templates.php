<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
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
        <!-- DataTables -->
        <link href="<?= base_url('templates/highadmin') ?>/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('templates/highadmin') ?>/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?= base_url('templates/highadmin') ?>/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <script src="<?= base_url('templates/highadmin') ?>/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="#" class="logo" style="color: black">
                            <span>
                                Sistem Poin
                            </span>
                        </a>
                    </div>

                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="<?= base_url('file/'.$user['image']) ?>" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        </div>
                        <h5><a href="#"><?= $user['username'] ?></a> </h5>
                        <p class="text-muted"><?= $user['level'] ?></p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <!--<li class="menu-title">Navigation</li>-->

                            <li>
                                <a href="<?= base_url('dashboard') ?>">
                                    <i class="fi-air-play"></i> <span> Dashboard </span>
                                </a>
                            </li>

                            <?php if ($user['level'] == 'superadmin'): ?>
                                <li>
                                <a href="<?= base_url('user') ?>">
                                    <i class="fa fa-users"></i> <span> User </span>
                                </a>
                                </li>

                                <li>
                                    <a href="<?= base_url('transaksi') ?>">
                                        <i class="fa fa-handshake-o"></i> <span> Transaksi </span>
                                    </a>
                                </li>

                            <?php endif ?>
                                <li>
                                    <a href="<?= base_url('hadiah') ?>">
                                        <i class="fa fa-gift"></i> <span> Hadiah </span>
                                    </a>
                                </li>

                            <?php if ($user['level'] == 'customer'): ?>
                                <li>
                                    <a href="<?= base_url('penukaran') ?>">
                                        <i class="fa fa-dropbox"></i> <span> Data Penukaran </span>
                                    </a>
                                </li>
                            <?php endif ?>

                            

                            

                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="<?= base_url('file/'.$user['image']) ?>" alt="user" class="rounded-circle"> <span class="ml-1"><?= $user['username'] ?> <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="<?= base_url('login/logout') ?>" class="dropdown-item notify-item">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title"><?= $title ?> </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Welcome to Highdmin admin panel !</li>
                                    </ol>
                                </div>
                            </li>

                        </ul>

                    </nav>

                </div>
                <!-- Top Bar End -->



                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">
                        <?= $contents; ?>
                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer">
                    2018 © Highdmin. - Coderthemes.com
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="<?= base_url('templates/highadmin') ?>/js/jquery.min.js"></script>
        <script src="<?= base_url('templates/highadmin') ?>/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('templates/highadmin') ?>/js/metisMenu.min.js"></script>
        <script src="<?= base_url('templates/highadmin') ?>/js/waves.js"></script>
        <script src="<?= base_url('templates/highadmin') ?>/js/jquery.slimscroll.js"></script>

        <!-- Required datatable js -->
        <script src="<?= base_url('templates/highadmin') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('templates/highadmin') ?>/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Responsive examples -->
        <script src="<?= base_url('templates/highadmin') ?>/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?= base_url('templates/highadmin') ?>/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- App js -->
        <script src="<?= base_url('templates/highadmin') ?>/js/jquery.core.js"></script>
        <script src="<?= base_url('templates/highadmin') ?>/js/jquery.app.js"></script>

        <script>
            $(document).ready(function() {
                 // Responsive Datatable
                $('#datatable').DataTable();
            });
        </script>

    </body>
</html>