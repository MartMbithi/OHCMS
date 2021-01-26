 <!--User sign upphp code-->
 <?php
  session_start();
  include('assets/configs/config.php');
  if (isset($_POST['password_reset'])) {
    //$fname=$_POST['fname'];
    // $lname=$_POST['lname'];
    //$id_no=$_POST['id_no'];
    $email = $_POST['email'];
    //$uname=$_POST['uname'];
    //$acc_status=$_POST['acc_status'];
    //$dpic=$_FILES["dpic"]["name"];
    //move_uploaded_file($_FILES["dpic"]["tmp_name"],"../client/img/".$_FILES["dpic"]["name"]);

    //sql to inset the values to the database
    $query = "insert into password_resets (email, status) values(?,'Pending')";
    $stmt = $mysqli->prepare($query);
    //bind the submitted values with the matching columns in the database.
    $rc = $stmt->bind_param('s', $email);
    $stmt->execute();

    $msg = "Password Reset Details Will Be Sent To Your Email!";
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
             <div class="card-header"><img class="logo-img" src="assets/img/logo-xx.png" alt="logo" width="102" height="27"><span class="splash-description">Please enter your username and email address.</span></div>
             <div class="card-body">
               <!--Code for Triggering an error-->
               <?php if (isset($msg)) { ?>
                 <script>
                   setTimeout(function() {
                       swal("Success!", "<?php echo $msg; ?>!", "success");
                     },
                     100);
                 </script>

               <?php } ?>

               <form method="post">
                 <div class="form-group">
                   <input class="form-control" name="email" id="username" type="email" placeholder="Email" autocomplete="off">
                 </div>
                 <div class="form-group row login-tools">
                 </div>
                 <div class="form-group login-submit"><input type="submit" class="btn btn-primary btn-xl" name="password_reset" data-dismiss="modal" value="Reset Password"></div>
               </form>
               <div class="splash-footer"><span>Remembered Pssword? <a href="employee_login.php">Login</a></span></div>

             </div>
           </div>
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