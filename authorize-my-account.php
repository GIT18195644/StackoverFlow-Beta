<?php
include('./Edu/php/Session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edu.lk | Create My Account</title>
  <link rel="shortcut icon" href="./Edu/favicon.ico" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./Edu/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./Edu/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./Edu/dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="./register.html"><b>Edu.</b>LK</a>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Your membership request has accepted. Build your Account Now!</p>

        <form action="./Edu/php/BuildAccount.php" method="POST">
          <p>Full Name</p>
          <!-- uname -->
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Full name" id="uname" name="uname" value="<?php echo $l_s_ACCOUNT; ?>" disabled>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <p>Email Address</p>
          <!-- uemail -->
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" value="<?php echo $l_s_EMAIL; ?>" disabled>
            <input type="text" id="uid" name="uid" value="<?php echo $l_s_ID; ?>" hidden>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p>Create Password</p>
              <!-- upwd1 -->
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="New Password" id="upwd1" name="upwd1" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-unlock-alt"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <p>Re-type Password</p>
              <!-- upwd2 -->
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Re-type Password" id="upwd2" name="upwd2" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-unlock-alt"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                <label for="agreeTerms">
                  I agree to the <a href="#">terms & conditions</a>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Subscribe Now!</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <a href="./index.html" class="text-center">I already have a membership</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="./Edu/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="./Edu/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="./Edu/dist/js/adminlte.min.js"></script>
</body>

</html>