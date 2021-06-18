<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
check_login();
$aid = $_SESSION['dept_id'];
if (isset($_POST['add_employee'])) {

  $em_fname = $_POST['em_fname'];
  $em_lname = $_POST['em_lname'];
  $em_idno = $_POST['em_idno'];
  $em_email = $_POST['em_email'];
  $em_address = ($_POST['em_address']);
  $em_phone = $_POST['em_phone'];
  $em_dept = $_POST['em_dept'];
  $password = sha1($_POST['password']);
  //$website=$_POST['website'];
  //$bio=$_POST['bio'];
  //$skill=$_POST['skill'];
  //$dpic=$_FILES["dpic"]["name"];
  //move_uploaded_file($_FILES["dpic"]["tmp_name"],"assets/img/".$_FILES["dpic"]["name"]);
  //$cover=$_FILES["cover"]["name"];
  // move_uploaded_file($_FILES["cover"]["tmp_name"],"assets/img/cover/".$_FILES["cover"]["name"]);

  //sql to inset the values to the database
  $query = "insert into hospital_employees  (em_fname, em_lname, em_idno, em_email, em_address, em_phone, em_dept, password) values(?,?,?,?,?,?,?,?)";
  $stmt = $mysqli->prepare($query);
  //bind the submitted values with the matching columns in the database.
  $rc = $stmt->bind_param('ssssssss', $em_fname, $em_lname, $em_idno, $em_email, $em_address, $em_phone, $em_dept, $password);
  $stmt->execute();
  //if binding is successful, then indicate that a new value has been added.
  $msg = "Consultation Employee Added!";
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
                <li class="breadcrumb-item"><a href="ohcms_pages_dept_head_dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Consultation</a></li>
                <li class="breadcrumb-item active" aria-current="page">Consultant</li>
              </ol>
            </nav>
            <div class="card card-border-color card-border-color-primary">
              <div class="card-header card-header-divider">Add Consultation Employee<span class="card-subtitle">Please fill required details.</span></div>
              <div class="card-body">
                <?php if (isset($msg)) { ?>
                  <script>
                    setTimeout(function() {
                        swal("Success!", "<?php echo $msg; ?>!", "success");
                      },
                      100);
                  </script>
                  <!--Trigger a pretty success alert-->

                <?php } ?>
                <form method="POST">
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Employee First Name</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" id="inputText3" name="em_fname" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Employee Last Name</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" id="inputText3" name="em_lname" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Employee National ID Number</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" id="inputText3" name="em_idno" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Employee Email Adddress</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" id="inputText3" name="em_email" type="email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Employee Password</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" id="inputText3" name="password" type="password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Employee Address</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" id="inputText3" name="em_address" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Employee Mobile Phone Number</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" id="inputText3" name="em_phone" type="text">
                    </div>
                  </div>
                  <div class="form-group row" style="display:none">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Employee Department</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" id="inputText3" readonly value="Consultation" name="em_dept" type="text">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <p class="text-right">
                      <button class="btn btn-space btn-primary" name="add_employee" type="submit">Register Employee</button>
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