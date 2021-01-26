<?php
session_start();
include('assets/configs/config.php');
if (isset($_POST['login'])) {
  //$em_dept=$_POST['em_dept'];
  $em_email = $_POST['em_email'];
  $password = sha1($_POST['password']);
  $stmt = $mysqli->prepare("SELECT em_email, password, em_id FROM  hospital_employees  WHERE   em_email=? and password=?");
  $stmt->bind_param('ss',  $em_email, $password);
  $stmt->execute();
  $stmt->bind_result($em_email, $password, $em_id);
  $rs = $stmt->fetch();
  $_SESSION['em_id'] = $em_id;
  //$uip=$_SERVER['REMOTE_ADDR'];
  //$ldate=date('d/m/Y h:i:s', time());
  if ($rs) {

    header("location:ohcms_pages_employee_dashboard.php");
  } else {
    $error = "Please Check Your Email Or Password";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="assets/img/logo-fav.png">
  <title>Orion HealthCare Hospital Management System</title>
  <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
  <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
  <link rel="stylesheet" href="assets/css/app.css" type="text/css" />
  <script src="assets/lib/sweetjs/swal.js"></script>
  <!--Sweet alert js-->

</head>

<body class="be-splash-screen">
  <div class="be-wrapper be-login">
    <div class="be-content">
      <div class="main-content container-fluid">
        <div class="splash-container">
          <div class="card card-border-color card-border-color-primary">
            <div class="card-header"><img class="logo-img" src="assets/img/logo-xx.png" alt="logo" width="102" height="27"><span class="splash-description">Patient Registration Department Login Panel</span></div>
            <div class="card-body">
              <!--Code for Triggering an error-->
              <?php if (isset($error)) { ?>
                <script>
                  setTimeout(function() {
                      swal("Failed!", "<?php echo $error; ?>!", "error");
                    },
                    100);
                </script>

              <?php } ?>

              <form method="post">

                <div class="form-group">
                  <input class="form-control" name="em_email" id="username" type="text" placeholder="Email" autocomplete="off">
                </div>
                <div class="form-group">
                  <input class="form-control" name="password" id="password" type="password" placeholder="Password">
                </div>
                <div class="form-group row login-tools">
                  <div class="col-6 login-forgot-password"><a href="ohcms_employee_password_reset.php">Forgot Password?</a></div>
                </div>

                <div class="form-group login-submit"><input type="submit" class="btn btn-primary btn-xl" name="login" data-dismiss="modal" value="Sign In"></div>
              </form>

            </div>
          </div>
          <div class="splash-footer"><span>© All Rights Reserved Orion Healthcare Hospital Management System</span></div>
          <div class="splash-footer"><span>Powered By <a href="https://martmbithi.github.io">MartDevelopers</a></span></div>
          <div class="splash-footer"><span><a href="../">Home</a></span></div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
  <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
  <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
  <script src="assets/js/app.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      //-initialize the javascript
      App.init();
    });
  </script>
</body>

</html>