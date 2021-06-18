<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
check_login();
$aid = $_SESSION['em_id'];
if (isset($_POST['add_outpatient'])) {

  $p_fname = $_POST['p_fname'];
  $p_lname = $_POST['p_lname'];
  $p_age = $_POST['p_age'];
  //$p_ailment=$_POST['p_ailment'];
  $p_address = ($_POST['p_address']);
  //$p_diagonisis=$_POST['p_diagonisis'];
  //$p_prescription=$_POST['p_prescription'];
  $p_type = $_POST['p_type'];
  $created_at = $_POST['created_at'];
  //$skill=$_POST['skill'];
  //$dpic=$_FILES["dpic"]["name"];
  //move_uploaded_file($_FILES["dpic"]["tmp_name"],"assets/img/".$_FILES["dpic"]["name"]);
  //$cover=$_FILES["cover"]["name"];
  // move_uploaded_file($_FILES["cover"]["tmp_name"],"assets/img/cover/".$_FILES["cover"]["name"]);

  //sql to inset the values to the database
  $query = "insert into patients  (p_fname, p_lname, p_age,  p_address,  p_type, created_at) values(?,?,?,?,?,?)";
  $stmt = $mysqli->prepare($query);
  //bind the submitted values with the matching columns in the database.
  $rc = $stmt->bind_param('ssssss', $p_fname, $p_lname, $p_age,  $p_address, $p_type, $created_at);
  $stmt->execute();
  //if binding is successful, then indicate that a new value has been added.
  $msg = "Patient Details Added";
}
?>
<!DOCTYPE html>
<html lang="en">
<!--Header-->
<?php include('includes/header.php'); ?>
<!--End Header-->

<body>
  <div class="be-wrapper be-fixed-sidebar">
    <!--Navigation bar-->
    <?php include("includes/navbar.php"); ?>
    <!--Navigation-->

    <!--Sidebar-->
    <?php include("includes/sidebar.php"); ?>
    <!--Sidebar-->
    <div class="be-content">
      <div class="main-content container-fluid">
        <div class="row">
          <div class="col-md-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="ohcms_pages_employee_dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Out Patients</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Out Patient Record</li>
              </ol>
            </nav>
            <div class="card card-border-color card-border-color-primary">
              <div class="card-header card-header-divider">Add OutPatient Details<span class="card-subtitle">Please fill required details.</span></div>
              <div class="card-body">
                <?php if (isset($msg)) { ?>
                  <script>
                    setTimeout(function() {
                        swal("Success", "<?php echo $msg; ?>!", "success");
                      },
                      100);
                  </script>
                  <!--Trigger a pretty success alert-->

                <?php } ?>
                <form method="POST">
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">First Name</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" id="inputText3" name="p_fname" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Last Name</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" id="inputText3" name="p_lname" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Age</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" id="inputText3" name="p_age" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Address</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" id="inputText3" name="p_address" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Registration Date</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" id="inputText3" name="created_at" type="date">
                    </div>
                  </div>
                  <div class="form-group row" style="display:none">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Patient Category</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" id="inputText3" readonly value="OutPatient" name="p_type" type="text">
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <p class="text-right">
                      <button class="btn btn-space btn-primary" name="add_outpatient" type="submit">Register OutPatient</button>
                      <button class="btn btn-space btn-secondary">Cancel</button>
                    </p>
                  </div>
              </div>
              </form>
            </div>
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
    $(document).ready(function() {
      //-initialize the javascript
      App.init();
      App.dashboard();

    });
  </script>
</body>

</html>