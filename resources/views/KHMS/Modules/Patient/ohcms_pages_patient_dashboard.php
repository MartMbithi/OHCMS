<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
check_login();
$aid=$_SESSION['p_id'];
?>
<!DOCTYPE html>
<html lang="en">
<!--Header-->
  <?php include('includes/header.php');?>
  <!--End Header-->
  <body>
    <div class="be-wrapper be-fixed-sidebar">
      <!--Navigation bar-->
     <?php include("includes/navbar.php");?>
     <!--Navigation-->

     <!--Sidebar-->
     <?php include("includes/sidebar.php");?>
     <!--Sidebar-->
     <div class="be-content">
        <div class="main-content container-fluid">
          <div class="row">
            
           <!--Allow Patient to view their profile--->
            <div class="col-12 col-lg-6 col-xl-3">
              <a href="ohcms_pages_patient_profile.php">
                <div class="widget widget-tile">
                  <div class="chart sparkline" ><i class="material-icons">account_circle</i></div>
                  <div class="data-info">
                    <div class="desc">My Profile</div>
                    <div class="value">
                    </div>
                  </div>
                </div>
              </a>
            </div>
            
            <!--Allow Patient view their vitals-->
            <div class="col-12 col-lg-6 col-xl-3">
              <a href="ohcms_pages_patient_vitals.php">
                <div class="widget widget-tile">
                  <div class="chart sparkline"><i class="material-icons">assignment_ind</i></div>
                  <div class="data-info">
                    <div class="desc">My Vitals</div>
                    <div class="value">
                    </div>
                  </div>
                </div>
              </a>  
            </div>

            <!--Allow Patient View Their Diagonisis-->
            <div class="col-12 col-lg-6 col-xl-3">
              <a href="ohcms_pages_patient_diagonisis.php">
                <div class="widget widget-tile">
                  <div class="chart sparkline"><i class="large material-icons">assignment_turned_in</i></div>
                  <div class="data-info">
                    <div class="desc">My Diagonisis </div>
                    <div class="value">
                    </div>
                  </div>
                </div>
              </a>
            </div>
            
            <!--Allow Patient View Their Laboratory records-->
            <div class="col-12 col-lg-6 col-xl-3">
            <a href="ohcms_pages_patient_lab_tests.php">
                <div class="widget widget-tile">
                  <div class="chart sparkline"><i class="large material-icons">contact_mail</i></div>
                  <div class="data-info">
                    <div class="desc">My Lab  Records</div>
                    <div class="value">
                    </div>
                  </div>
                </div>
              </a>
            </div>

          </div>
        </div>
      </div>
      <div class="splash-footer"><span> Kaseve Hospital Management System. Powered By <a href="https://perpetualndanu.github.io">Perpetual Ndanu</a></span></div>
 
    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.time.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="assets/lib/countup/countUp.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/lib/canvas/canvasjs.min.js"></script>
    <script src="assets/lib/canvas/jquery.canvasjs.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      	App.dashboard();
      
      });
    </script>
  </body>

</html>