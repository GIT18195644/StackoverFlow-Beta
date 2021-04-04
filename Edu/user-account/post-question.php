<?php
include('../php/Session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome <?php echo $l_s_ACCOUNT; ?> | Dashboard | Edu.lk</title>
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
                            <a href="./post-question.php" class="nav-link active">
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
                            <h1 class="m-0">Post New Question</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                                <li class="breadcrumb-item active">Post New Question</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-12 connectedSortable">
                            <!-- DIRECT CHAT -->
                            <div class="card direct-chat direct-chat-primary">
                                <div class="card-header">
                                    <h3 class="card-title"><b>Edu.lk</b> Post New Question</h3>

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
                                <div class="card-body" style="padding: 25px;">
                                    <form method="POST" action="../php/PostMyQuestion.php">
                                        <div class="form-group">
                                            <label for="Subject">Subject</label>
                                            <input type="text" class="form-control" id="Subject" name="Subject" placeholder="Subject" required>
                                            <input type="text" value="<?php echo $l_s_ID; ?>" id="UID" name="UID" hidden>
                                        </div>
                                        <div class="form-group">
                                            <label for="Subject">Category</label>
                                            <select class="form-control" id="cty" name="cty" required>
                                                <option disabled selected>- Select Category -</option>
                                                <?php
                                                include "../php/DBConnection.php";
                                                $sql = mysqli_query($con, "SELECT * FROM category ORDER BY categoryName ASC");

                                                while ($data = mysqli_fetch_array($sql)) {
                                                    echo "<option value='" . $data['cid'] . "'>" . $data['categoryName'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="bodymsg">Explain your Question</label>
                                            <textarea class="form-control" id="bodymsg" name="bodymsg" rows="10" required></textarea>
                                        </div>
                                        <div class="row" style="text-align: center;">
                                            <div class="col">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                                    <label class="form-check-label" for="exampleCheck1">I accept terms & conditions</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <button type="submit" class="btn btn-primary">Post my Question</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <div class="row">

                                    </div>
                                </div>
                                <!-- /.card-footer-->
                            </div>
                            <!--/.direct-chat -->
                            <!-- /.card -->
                        </section>
                        <!-- /.Left col -->
                    </div>

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-12 connectedSortable">
                            <!-- DIRECT CHAT -->
                            <div class="card direct-chat direct-chat-primary">
                                <div class="card-header">
                                    <h3 class="card-title"><b>Edu.lk</b> All Questions</h3>

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
                                    <div class="row" style="padding: 25px;">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search">
                                        </div>
                                    </div>
                                    <table id="AllQuestions" class="table table-hover">
                                        <tbody>
                                            <?php
                                            $connection = mysqli_connect("localhost", "root", "", "edu-portal");

                                            // Check connection 
                                            if (mysqli_connect_errno()) {
                                                echo "Database connection failed.";
                                            }

                                            $query = "SELECT q.qestionId, q.subject, q.time, u.account_name FROM questions q, users u WHERE u.user_id = q.authorId && status = 'Activate' ORDER BY time DESC";
                                            $res = mysqli_query($connection, $query);
                                            while ($row = mysqli_fetch_array($res)) {
                                                $iid = $row["qestionId"];
                                            ?>
                                                <form action="./question-view.php" method="POST">
                                                    <input type="text" value="<?php echo $iid; ?>" id="Qesid" name="Qesid" hidden>
                                                    <?php
                                                    echo "<tr>";
                                                    echo "<td>";
                                                    echo "<b>" . $row["subject"] . "</b> " . "(" . $row["account_name"] . ")";
                                                    echo "</td>";
                                                    echo "<td>";
                                                    echo $row["time"];
                                                    echo "</td>";
                                                    echo "<td>";
                                                    ?>
                                                    <button class="btn btn-sm btn-primary btn-block" type="submit">View Question</button>
                                                    <?php
                                                    echo "</td>";
                                                    echo "</tr>";
                                                    ?>
                                                </form> <?php
                                                    }
                                                    mysqli_close($connection); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <div class="row">

                                    </div>
                                </div>
                                <!-- /.card-footer-->
                            </div>
                            <!--/.direct-chat -->
                            <!-- /.card -->
                        </section>
                        <!-- /.Left col -->
                    </div>

                    <!-- /.row (main row) -->
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

    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("AllQuestions");
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