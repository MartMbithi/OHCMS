<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
check_login();
$aid = $_SESSION['dept_id'];
if (isset($_POST['update_password'])) {
  $dept_id = $_SESSION['dept_id'];
  $dept_head_password = sha1($_POST['password']);
  //$kb_desc =$_POST['kb_desc'];
  //$department=$_POST['department'];
  //$status=$_POST['status'];
  //$dpic=$_FILES["dpic"]["name"];
  //move_uploaded_file($_FILES["dpic"]["tmp_name"],"assets/img/".$_FILES["dpic"]["name"]);
  //$cover=$_FILES["cover"]["name"];
  // move_uploaded_file($_FILES["cover"]["tmp_name"],"assets/img/cover/".$_FILES["cover"]["name"]);

  //sql to inset the values to the database
  $query = "update department set  dept_head_password=?  where  dept_id=?";
  $stmt = $mysqli->prepare($query);
  //bind the submitted values with the matching columns in the database.
  $rc = $stmt->bind_param('si', $dept_head_password, $dept_id);
  $stmt->execute();
  //if binding is successful, then indicate that a new value has been added.
  $msg = "Password Updated";
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
                <li class="breadcrumb-item active" aria-current="page">Update Password</li>
              </ol>
            </nav>
            <div class="card card-border-color card-border-color-primary">
              <div class="card-header card-header-divider">Change Password<span class="card-subtitle">Please fill required details.</span></div>
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
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Old Password</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" id="inputText3" type="password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">New Password</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" id="inputText3" name="dept_head_password" type="password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Confirm Password</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" id="inputText3" name="password conf" type="password">
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <p class="text-right">
                      <button class="btn btn-space btn-primary" name="update_password" type="submit">Save</button>
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