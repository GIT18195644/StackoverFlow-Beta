<?php
include('../php/Session.php');

$connection = mysqli_connect("localhost", "root", "", "edu-portal");

// Check connection 
if (mysqli_connect_errno()) {
    echo "Database connection failed.";
}

$QUESTIONID = $_POST['Qesid'];

$sql = "SELECT q.qestionId, u.account_name, u.user_role FROM questions q, users u WHERE q.authorId = u.user_id && q.qestionId = '$QUESTIONID'";

$res = mysqli_query($connection, $sql);
while ($row = mysqli_fetch_array($res)) {
    // header("Location: ../user-account/question-view.php");
    $questionID = $row['qestionId'];
    $quesAuthor = $row['account_name'];
    $quesAuthorRole = $row['user_role'];
}

$connection->close();

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
                            <a href="./index.php" class="nav-link active">
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
                            <h1 class="m-0">Question Overview</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                                <li class="breadcrumb-item active">Question Overview</li>
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
                                    <h5 class="card-title">Author: <?php echo $quesAuthor; ?> (<?php echo $quesAuthorRole; ?>)</h5>

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
                                <div class="card-body" style="padding: 5px;">
                                    <?php
                                    $connection = mysqli_connect("localhost", "root", "", "edu-portal");

                                    // Check connection 
                                    if (mysqli_connect_errno()) {
                                        echo "Database connection failed.";
                                    }

                                    $query = "SELECT c.categoryName, q.qestionId, q.subject, q.question, q.time, q.status, u.account_name, u.email, u.user_role FROM questions q, users u, category c WHERE c.cid = q.categoryId && q.authorId = u.user_id && q.qestionId = '$questionID'";
                                    $res = mysqli_query($connection, $query);
                                    while ($row = mysqli_fetch_array($res)) {
                                    ?>
                                        <div class="card">
                                            <h2 class="card-header"><b><?php echo "#" . $row['categoryName'] . " - " . $row['subject']; ?></b></h2>
                                            <div class="card-body" style="padding: 25px;">
                                                <p class="card-text"><?php echo $row['question']; ?></p><br>
                                                <p style="font-size: 13px;" class="card-title">Question Category: <?php echo $row['categoryName']; ?></p><br>
                                                <p style="font-size: 13px;" class="card-title">Status: <?php echo $row['status'] . " - " . $row['time']; ?></p><br><br>
                                                <a href="#TypeYourAnswerHere" class="btn btn-primary">Your Answer</a>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <br>
                                    <h2 style="padding-left: 25px;">Answers</h2>
                                    <br>
                                    <?php
                                    $connection = mysqli_connect("localhost", "root", "", "edu-portal");

                                    // Check connection 
                                    if (mysqli_connect_errno()) {
                                        echo "Database connection failed.";
                                    }
                                    $totAnswers = 0;
                                    $query = "SELECT u.account_name, u.email, u.user_role, a.answer, a.time FROM users u, answers a WHERE a.authorId = u.user_id && a.questionId = '$questionID' ORDER BY a.time DESC";
                                    $res = mysqli_query($connection, $query);
                                    while ($row = mysqli_fetch_array($res)) {
                                        $totAnswers = $totAnswers + 1;
                                    ?>
                                        <div class="card">
                                            <h6 class="card-header"><b>User: <?php echo $row['account_name'] . " " . "(" . $row['user_role'] . ")"; ?></b></h6>
                                            <div class="card-body" style="padding: 25px;">
                                                <p class="card-text"><?php echo $row['answer']; ?></p>
                                                <h5 class="card-title">Time: <?php echo $row['time']; ?></h5><br><br>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <br>
                                    <div class="card text-white bg-dark" style="padding: 25px;" id="TypeYourAnswerHere">
                                        <div class="card-header">
                                            <h1>Your Answer</h1>
                                        </div>
                                        <div class="card-body">
                                            <form action="../php/PostMyAnswer.php" method="post">
                                                <div class="form-group">
                                                    <label for="AnswerUserEmail">Your Email</label>
                                                    <input type="email" class="form-control" id="AnswerUserEmail" name="AnswerUserEmail" aria-describedby="emailHelp" value="<?php echo $l_s_EMAIL; ?>" disabled>
                                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

                                                    <input type="text" id="QID" name="QID" value="<?php echo $QUESTIONID; ?>" hidden>
                                                    <input type="text" id="UID" name="UID" value="<?php echo $l_s_ID; ?>" hidden>
                                                </div>
                                                <div class="form-group">
                                                    <label for="UserAnswer">Answer</label>
                                                    <textarea class="form-control" id="UserAnswer" name="UserAnswer" rows="5" placeholder="Type your answer.." required></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Post Your Answer</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <div class="row">
                                        <?php
                                        if ($totAnswers == 0) {
                                            echo "No Answers";
                                        } else {
                                            echo $totAnswers . " Answers";
                                        }
                                        ?>
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
</body>

</html>