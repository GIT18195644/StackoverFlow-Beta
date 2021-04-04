<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edu.lk | Forgot My Password</title>
    <link rel="shortcut icon" href="./Edu/favicon.ico" type="image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./Edu/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="./Edu/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./Edu/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="./index.php"><b>Edu.</b>LK</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Find Your Account</p>

                <form action="./Edu/php/SearchMyAccount.php" method="post">
                    <div class="input-group mb-3">
                        <p>Please enter your email address and phone number to search for your account.</p>
                        <input type="email" class="form-control" id="usermail" name="usermail" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="tel" class="form-control" id="userphone" name="userphone" placeholder="Phone" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-block"><i class="fas fas fa-search mr-2"></i> Search</button>
                        </div>
                    </div>
                </form>

                <div class="social-auth-links text-center mb-3">
                    <p>---</p>
                    <a href="./index.html" class="btn btn-block btn-primary">
                        <i class="fas fa-arrow-circle-left mr-2"></i> Cancel
                    </a>
                </div>
                <!-- /.auth-links -->

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="./Edu/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="./Edu/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./Edu/dist/js/adminlte.min.js"></script>
</body>

</html>