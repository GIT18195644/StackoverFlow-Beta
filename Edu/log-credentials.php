<?php
include('./php/Session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Credentials Management | Login Credentials Management | Edu.lk</title>
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/logo.jpg" alt="AdminLTELogo" height="60" width="60">
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
                <!-- Notifications Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-user"></i>
                        <span class="badge badge-warning navbar-badge">
                            <?php
                            $connection = mysqli_connect("localhost", "root", "", "edu-portal");

                            // Check connection 
                            if (mysqli_connect_errno()) {
                                echo "Database connection failed.";
                            }
                            $total = 0;
                            $student_total = 0;
                            $instructor_total = 0;

                            $query = "SELECT * FROM `users` WHERE `authorize_status` = 'Unauthorized'";
                            $res = mysqli_query($connection, $query);
                            while ($row = mysqli_fetch_array($res)) {
                                $total = $total + 1;
                                if ($row['user_role'] == "Student") {
                                    $student_total = $student_total + 1;
                                }
                                if ($row['user_role'] == "Instructor") {
                                    $instructor_total = $instructor_total + 1;
                                }
                            }

                            if ($total >= 99) {
                                $total = "+99";
                            }

                            echo $total;
                            ?>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header"><?php echo $total; ?> New Subscribers</span>
                        <div class="dropdown-divider"></div>
                        <a href="./subscribers-management.php" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> <?php echo $instructor_total; ?> Instructor requests
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="./subscribers-management.php" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> <?php echo $student_total; ?> Student requests
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="./subscribers-management.php" class="dropdown-item dropdown-footer">See All New Subscribers</a>
                    </div>
                </li>
                <?php mysqli_close($connection); ?>

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
                    <a class="nav-link" href="./php/logout.php" role="button">
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
                <img src="dist/img/logo.jpg" alt="Edu.lk Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Edu.LK</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/admin-avatar.png" class="img-circle elevation-2" alt="User Image">
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
                            <a href="./subscribers-management.php" class="nav-link">
                                <i class="nav-icon fas fa-user-plus"></i>
                                <p>
                                    New Subscribers
                                    <span class="right badge badge-danger">
                                        <?php
                                        $connection = mysqli_connect("localhost", "root", "", "edu-portal");

                                        // Check connection 
                                        if (mysqli_connect_errno()) {
                                            echo "Database connection failed.";
                                        }
                                        $total = 0;

                                        $query = "SELECT * FROM `users` WHERE `authorize_status` = 'Unauthorized'";
                                        $res = mysqli_query($connection, $query);
                                        while ($row = mysqli_fetch_array($res)) {
                                            $total = $total + 1;
                                        }

                                        if ($total > 0) {
                                            echo "+ " . $total;
                                        } else {
                                            echo "0";
                                        }
                                        mysqli_close($connection);
                                        ?>
                                    </span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-tie"></i>
                                <p>
                                    Current Subscribers
                                    <i class="fas fa-angle-left right"></i>
                                    <!-- <span class="badge badge-info right">6</span> -->
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./student-list.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Students List
                                            <span class="right badge badge-danger">
                                                <?php
                                                $connection = mysqli_connect("localhost", "root", "", "edu-portal");

                                                // Check connection 
                                                if (mysqli_connect_errno()) {
                                                    echo "Database connection failed.";
                                                }
                                                $total = 0;

                                                $query = "SELECT * FROM `users` WHERE `authorize_status` = 'Authorized' && `user_role` = 'Student'";
                                                $res = mysqli_query($connection, $query);
                                                while ($row = mysqli_fetch_array($res)) {
                                                    $total = $total + 1;
                                                }

                                                if ($total > 0) {
                                                    echo $total;
                                                } else {
                                                    echo "0";
                                                }
                                                mysqli_close($connection);
                                                ?>
                                            </span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./instructor-list.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Instructors List
                                            <span class="right badge badge-danger">
                                                <?php
                                                $connection = mysqli_connect("localhost", "root", "", "edu-portal");

                                                // Check connection 
                                                if (mysqli_connect_errno()) {
                                                    echo "Database connection failed.";
                                                }
                                                $total = 0;

                                                $query = "SELECT * FROM `users` WHERE `authorize_status` = 'Authorized' && `user_role` = 'Instructor'";
                                                $res = mysqli_query($connection, $query);
                                                while ($row = mysqli_fetch_array($res)) {
                                                    $total = $total + 1;
                                                }

                                                if ($total > 0) {
                                                    echo $total;
                                                } else {
                                                    echo "0";
                                                }
                                                mysqli_close($connection);
                                                ?>
                                            </span>
                                        </p>
                                    </a>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="./log-credentials.php" class="nav-link active">
                                <i class="nav-icon fas fa-fingerprint"></i>
                                <p>
                                    Login Credentials
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    All Questions
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./activate-questions.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Enable Questions</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./deactivate-questions.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Disable Questions</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./manage-category.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manage Categories</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
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
                            <h1 class="m-0">Login Credentials</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                                <li class="breadcrumb-item active">Login Credentials</li>
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
                                    <h3 class="card-title"><b>Edu.LK</b> Subscribers (Authorized)</h3>

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
                                <div class="card-body" style="max-height: 1000px; overflow-y: scroll;">
                                    <div class="row" style="padding: 25px;">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search">
                                        </div>
                                    </div>
                                    <table id="TblUsers" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Account Name</th>
                                                <th scope="col">User ID</th>
                                                <th scope="col">User Role</th>
                                                <th scope="col">NIC</th>
                                                <th scope="col">Subscrption Timestamp</th>
                                                <th scope="col">Email (User Name)</th>
                                                <th scope="col">Password</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $connection = mysqli_connect("localhost", "root", "", "edu-portal");

                                            // Check connection 
                                            if (mysqli_connect_errno()) {
                                                echo "Database connection failed.";
                                            }

                                            $query = "SELECT * FROM users WHERE authorize_status = 'Authorized' ORDER BY account_name ASC";
                                            $res = mysqli_query($connection, $query);
                                            while ($row = mysqli_fetch_array($res)) {
                                                echo "<tr>";
                                                echo "<td>";
                                                echo $row["account_name"];
                                                echo "</td>";
                                                echo "<td>";
                                                echo $row["user_id"];
                                                echo "</td>";
                                                echo "<td>";
                                                echo $row["user_role"];
                                                echo "</td>";
                                                echo "<td>";
                                                echo $row["nic"];
                                                echo "</td>";
                                                echo "<td>";
                                                echo $row["subscription_date"];
                                                echo "</td>";
                                                echo "<td>";
                                                echo $row["email"];
                                                echo "</td>";
                                                echo "<td>";
                                                echo $row["password"];
                                                echo "</td>";
                                            }
                                            mysqli_close($connection);
                                            ?>
                                        </tbody>
                                    </table>
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
                        <section class="col-lg-6 connectedSortable">
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
                                            <form action="./php/ResetPassword.php" method="POST">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"><i class="fas fa-envelope-open-text"></i> Email address</label>
                                                    <input type="email" class="form-control" id="userEmail" name="userEmail" aria-describedby="emailHelp" placeholder="Enter email" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1"><i class="fas fa-key"></i> Password</label>
                                                    <input type="text" class="form-control" id="userpwd" name="userpwd" placeholder="Password" required>
                                                    <small id="emailHelp" class="form-text text-muted">Default reset password is <b>EDU.user123</b></small>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                </div>
                                                <div class="form-group" style="text-align: end;">
                                                    <button type="submit" class="btn btn-primary">Reset Password</button>
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
                        <section class="col-lg-6 connectedSortable">
                            <!-- DIRECT CHAT -->
                            <div class="card direct-chat direct-chat-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Block User Account</h3>

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
                                            <form action="./php/BlockUser.php" method="POST">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"><i class="fas fa-envelope-open-text"></i> Email address</label>
                                                    <input type="email" class="form-control" id="userEmail" name="userEmail" aria-describedby="emailHelp" placeholder="Enter email" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1"><i class="fas fa-id-card"></i> NIC</label>
                                                    <input type="text" class="form-control" id="userNIC" name="userNIC" placeholder="NIC" required>
                                                    <small id="emailHelp" class="form-text text-muted">Old NIC number format - <b>xxxxxxxxxV</b> | New NIC number format - <b>xxxxxxxxxxxx</b></small>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                                    <label class="form-check-label" for="exampleCheck1">I accept terms & conditions</label>
                                                </div>
                                                <div class="form-group" style="text-align: end;">
                                                    <button type="submit" class="btn btn-danger">BLOCK</button>
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
                        <!-- /.right col -->
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
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>

    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("TblUsers");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>

</html>