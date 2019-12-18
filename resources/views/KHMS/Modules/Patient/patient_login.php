<?php
  session_start();
  include('assets/configs/config.php');
    if(isset($_POST['login']))
      {
            $p_email=$_POST['p_email'];
            //$=$_POST['p_passwd'];
            $p_passwd=($_POST['p_passwd']);
            $stmt=$mysqli->prepare("SELECT p_email, p_passwd, p_id FROM  patients  WHERE   p_email=? and p_passwd=? ");
            $stmt->bind_param('ss',  $p_email, $p_passwd);
            $stmt->execute();
            $stmt -> bind_result($p_email, $p_passwd, $p_id);
            $rs=$stmt->fetch();
            $_SESSION['p_id']=$p_id;
            //$uip=$_SERVER['REMOTE_ADDR'];
            //$ldate=date('d/m/Y h:i:s', time());
            if($rs)
              {
                    
                header("location:ohcms_pages_patient_dashboard.php");
              }
            else
            {
              $error = "Please Check Your Login Credentials";
              
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
    <title>Kaseve Hospital Management System</title>
    <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="assets/css/app.css" type="text/css"/>
    <script src="assets/lib/sweetjs/swal.js"></script><!--Sweet alert js-->

  </head>
  <body class="be-splash-screen">
    <div class="be-wrapper be-login">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container">
            <div class="card card-border-color card-border-color-primary">
              <div class="card-header"><img class="logo-img" src="assets/img/logo-xx.png" alt="logo" width="102" height="27"><span class="splash-description">Patient Login Panel</span></div>
              <div class="card-body">
                <!--Code for Triggering an error-->
                <?php if(isset($error)) {?>
                    <script>
                                setTimeout(function () 
                                { 
                                    swal("Failed!","<?php echo $error;?>","error");
                                },
                                    100);
                    </script>                
                 <?php  } ?>

                <form method ="post">
               
                  <div class="form-group">
                    <input class="form-control" name="p_email" id="username" type="text" placeholder="Email" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <input class="form-control" name="p_passwd" id="password" type="password" placeholder="Password">
                  </div>
                  <div class="form-group row login-tools">
                    <div class="col-6 login-forgot-password"><a href="ohcms_patient_password_reset.php">Forgot Password?</a></div>
                  </div>
                  
                  <div class="form-group login-submit"><input type="submit" class="btn btn-primary btn-xl" name="login" data-dismiss="modal" value="Sign In"></div>
                </form>

              </div>
            </div>
            <div class="splash-footer"><span>© All Rights Reserved Kaseve Hospital Management System</span></div>
          <div class="splash-footer"><span>Powered By <a href="https://perpetualndanu.github.io">Perpetual Ndanu</a></span></div>
          <div class="splash-footer"><span><a href="../../">Home</a></span></div>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      });
      
    </script>
  </body>

</html>