 <!--User sign upphp code-->
 <?php
  session_start();
  include('assets/configs/config.php');
  if (isset($_POST['sign_up'])) {
    //$fname=$_POST['fname'];
    // $lname=$_POST['lname'];
    //$id_no=$_POST['id_no'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $password = sha1($_POST['password']);
    //$acc_status=$_POST['acc_status'];
    //$dpic=$_FILES["dpic"]["name"];
    //move_uploaded_file($_FILES["dpic"]["tmp_name"],"../client/img/".$_FILES["dpic"]["name"]);

    //sql to inset the values to the database
    $query = "insert into admin (email, uname, password) values(?,?,?)";
    $stmt = $mysqli->prepare($query);
    //bind the submitted values with the matching columns in the database.
    $rc = $stmt->bind_param('sss', $email, $uname, $password);
    $stmt->execute();

    $msg = "Your Account Has Been Created!";
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
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <!--Sweet alert js-->
 </head>

 <body class="be-splash-screen">
   <div class="be-wrapper be-login be-signup">
     <div class="be-content">
       <div class="main-content container-fluid">
         <div class="splash-container sign-up">
           <div class="card card-border-color card-border-color-primary">
             <div class="card-header"><img class="logo-img" src="assets/img/logo-xx.png" alt="logo" width="102" height="27"><span class="splash-description">Please enter your user information.</span></div>
             <div class="card-body">
               <?php if (isset($msg)) { ?>
                 <script>
                   setTimeout(function() {
                       swal("Success!", "<?php echo $msg; ?>!", "success");
                     },
                     100);
                 </script>
               <?php } ?>
               <form method="post"><span class="splash-title pb-4">Sign Up</span>
                 <div class="form-group">
                   <input class="form-control" type="text" name="uname" required="required" placeholder="Username" autocomplete="off">
                 </div>
                 <div class="form-group">
                   <input class="form-control" type="email" name="email" required="required" placeholder="E-mail" autocomplete="off">
                 </div>
                 <div class="form-group">
                   <input class="form-control" type="password" name="password" required="required" placeholder="Password" autocomplete="off">
                 </div>
                 <div class="form-group pt-2">
                   <input type="submit" class="btn btn-block btn-primary btn-xl" name="sign_up" value="Sign Up">
                 </div>

                 <div class="form-group pt-3 mb-3">
                   <div class="custom-control custom-checkbox">
                     <input class="custom-control-input" type="checkbox" id="check1">
                     <label class="custom-control-label" for="check1">By creating an account, you agree the <a href="#">terms and conditions</a>.</label>
                   </div>
                 </div>
                 <div class="splash-footer"><a href="ohcms_admin_login.php">Sign In</div>
               </form>

             </div>
           </div>
           <div class="splash-footer">&copy; 2017-<?php echo date('Y'); ?> Orion HealthCare Hospital Management System</div>
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