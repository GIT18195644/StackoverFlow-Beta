<?php
include('../php/Session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Profile | Edu.lk</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../dist/img/logo.jpg" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="./index.php" class="nav-link">Dashboard</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- fullscreen -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

                <!-- control-sidebar -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>

                <!-- User Profile -->
                <li class="nav-item">
                    <a class="nav-link" href="./profile.php" role="button">
                        <i class="fas fa-user-circle"></i>
                    </a>
                </li>

                <!-- Logout -->
                <li class="nav-item">
                    <a class="nav-link" href="../php/logout.php" role="button">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="./index.php" class="brand-link">
                <img src="../dist/img/logo.jpg" alt="Edu.lk Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Edu.LK</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../dist/img/admin-avatar.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <!-- Profile link name PHP -->
                        <a href="./profile.php" class="d-block"><?php echo $l_s_ACCOUNT; ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="./index.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./post-question.php" class="nav-link">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>
                                    Post New Question
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./my-issues.php" class="nav-link">
                                <i class="nav-icon fas fa-bug"></i>
                                <p>
                                    Submit Issue
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./clear-account.php" class="nav-link">
                                <i class="nav-icon fas fa-eraser"></i>
                                <p>
                                    Clear Data
                                </p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="./index.php" class="nav-link">
                                <i class="nav-icon fas fa-sliders-h"></i>
                                <p>
                                    Settings
                                </p>
                            </a>
                        </li> -->
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">My Profile</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                                <li class="breadcrumb-item active">My Profile</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Main row 1-->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-12 connectedSortable">
                            <!-- DIRECT CHAT -->
                            <div class="card direct-chat direct-chat-primary">
                                <div class="card-header">
                                    <h3 class="card-title"><b>Edu.LK</b> <?php echo $l_s_ACCOUNT; ?>'s Profile</h3>

                                    <!-- <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div> -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form action="../php/ProfileUpdate.php" method="post">
                                        <input type="text" value="<?php echo $l_s_ID; ?>" id="uid" name="uid" hidden>
                                        <div class="row" style="padding: 2%;">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-2 col-form-label">Full Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $l_s_ACCOUNT; ?>" placeholder="fullname" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">User Role</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="role" name="role" value="<?php echo $l_s_ROLE; ?>" placeholder="role" disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Zip/Postal</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control" id="pcode" name="pcode" value="<?php echo $l_s_PCODE; ?>" placeholder="pcode" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                                <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" id="uEmail" name="uEmail" value="<?php echo $l_s_EMAIL; ?>" placeholder="Email" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">NIC</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="nic" name="nic" value="<?php echo $l_s_NIC; ?>" placeholder="National Identity Card Number" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-2 col-form-label">Phone</label>
                                                    <div class="col-sm-10">
                                                        <input type="tel" class="form-control" id="Phone" name="Phone" value="<?php echo $l_s_PHONE; ?>" placeholder="Phone" required>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row" style="padding: 2%;">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Sex</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="<?php echo $l_s_GENDER; ?>" placeholder="sex" disabled>
                                                        <input type="text" id="sex" name="sex" value="<?php echo $l_s_GENDER; ?>" hidden>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">BOD</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" class="form-control" id="bday" name="bday" value="<?php echo $l_s_BDAY; ?>" placeholder="Birth Day" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Age</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control" id="Age" name="Age" value="<?php echo $l_s_AGE; ?>" placeholder="Age" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 2%;">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Account Status (Current)</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="Status" name="Status" value="<?php echo $l_s_STATUS; ?>" placeholder="Status" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 2%;">
                                            <div class="col-sm-10" style="text-align: end;">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary" style="width: 100%;">Update Bio</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <!-- <form action="#" method="post">
                    <div class="input-group">
                      <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-append">
                        <button type="button" class="btn btn-primary">Send</button>
                      </span>
                    </div>
                  </form> -->
                                </div>
                                <!-- /.card-footer-->
                            </div>
                            <!--/.direct-chat -->
                            <!-- /.card -->
                        </section>
                        <!-- /.Left col -->
                    </div>

                    <!-- /.row (main row) -->

                    <!-- Main row 2-->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-12 connectedSortable">
                            <!-- DIRECT CHAT -->
                            <div class="card direct-chat direct-chat-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Reset Password</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row" style="padding: 2%;">
                                        <div class="col">
                                            <form action="../php/ProfilePasswordReset.php" method="POST">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"><i class="fas fa-envelope-open-text"></i> Email address</label>
                                                    <input type="email" class="form-control" id="userEmaildisable" name="userEmaildisable" value="<?php echo $l_s_EMAIL; ?>" aria-describedby="emailHelp" placeholder="Enter email" disabled>
                                                    <input type="text" value="<?php echo $l_s_ID; ?>" id="uid" name="uid" hidden>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1"><i class="fas fa-key"></i> Current Password</label>
                                                            <input type="text" class="form-control" id="currentuserpwd" name="currentuserpwd" placeholder="Current Password" required>
                                                            <input type="text" id="userpwdtrue" name="userpwdtrue" value="<?php echo $l_s_PASSWORD; ?>" hidden>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1"><i class="fas fa-key"></i> New Password</label>
                                                            <input type="text" class="form-control" id="newuserpwd" name="newuserpwd" placeholder="New Password" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1"><i class="fas fa-key"></i> Confirm Password</label>
                                                            <input type="text" class="form-control" id="confirmuserpwd" name="confirmuserpwd" placeholder="Confirm Password" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" style="padding: 2%;">
                                                    <div class="col-sm-10" style="text-align: end;">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary" style="width: 100%;">Reset Password</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <!-- <form action="#" method="post">
                    <div class="input-group">
                      <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-append">
                        <button type="button" class="btn btn-primary">Send</button>
                      </span>
                    </div>
                  </form> -->
                                </div>
                                <!-- /.card-footer-->
                            </div>
                            <!--/.direct-chat -->
                            <!-- /.card -->
                        </section>
                        <!-- /.Left col -->

                        <!-- right col -->

                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2021 Edu.lk</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Last Login Time</b> <?php echo $last_login_time; ?>
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>
</body>

</html>