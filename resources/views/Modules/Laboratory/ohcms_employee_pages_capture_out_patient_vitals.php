<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
check_login();
$aid = $_SESSION['em_id'];
if (isset($_POST['capture_outpatient_vitals'])) {
  $p_id = $_GET['p_id'];
  $date_recorded = $_POST['date_recorded'];
  $temp = $_POST['temp'];
  $weight = $_POST['weight'];
  $height = ($_POST['height']);
  $sbp = $_POST['sbp'];
  $dbp = $_POST['dbp'];
  $heartrate = $_POST['heartrate'];
  $respiratoryrate = $_POST['respiratoryrate'];
  //$=$_POST['location'];
  //$website=$_POST['website'];
  //$bio=$_POST['bio'];
  //$skill=$_POST['skill'];
  //$dpic=$_FILES["dpic"]["name"];
  //move_uploaded_file($_FILES["dpic"]["tmp_name"],"assets/img/".$_FILES["dpic"]["name"]);
  //$cover=$_FILES["cover"]["name"];
  // move_uploaded_file($_FILES["cover"]["tmp_name"],"assets/img/cover/".$_FILES["cover"]["name"]);

  //sql to inset the values to the database
  $query = "update patients set date_recorded=?, temp=?, weight=?, height=?, sbp=?, dbp=?, heartrate=?, respiratoryrate=? where p_id=?";
  $stmt = $mysqli->prepare($query);
  //bind the submitted values with the matching columns in the database.
  $rc = $stmt->bind_param('ssssssssi',  $date_recorded, $temp, $weight, $height, $sbp, $dbp, $heartrate, $respiratoryrate, $p_id);
  $stmt->execute();
  //if binding is successful, then indicate that a new value has been added.
  $msg = "Patient Vitals Captured";
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
            <div class="card card-border-color card-border-color-primary">
              <div class="card-header card-header-divider">Capture OutPatient Vitals<span class="card-subtitle">Please fill required details.</span></div>
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
                <?php
                $p_id = $_GET['p_id'];
                $ret = "select * from patients where p_id=?";
                //code for getting rooms using a certain id
                $stmt = $mysqli->prepare($ret);
                $stmt->bind_param('i', $p_id);
                $stmt->execute(); //ok
                $res = $stmt->get_result();
                //$cnt=1;
                while ($row = $res->fetch_object()) {
                ?>
                  <form method="POST">
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Patient Name</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" id="inputText3" value="<?php echo $row->p_fname; ?> <?php echo $row->p_lname; ?> " name="user_name" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Date Vitals Captured</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" id="inputText3" name="date_recorded" type="date">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Patient Temperature(°C)</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" id="inputText3" name="temp" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Patient Weight (Kgs)</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" id="inputText3" name="weight" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Patient Height (Cm)</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" id="inputText3" name="height" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Patient Mean Systolic Blood Pressure (SBP)</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" id="inputText3" name="sbp" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Patient Mean Diastolic Blood Pressure (DBP)</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" id="inputText3" name="dbp" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Patient HeartBeat Rate</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" id="inputText3" name="heartrate" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Patient Respiratory Rate</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" id="inputText3" name="respiratoryrate" type="text">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <p class="text-right">
                        <button class="btn btn-space btn-primary" name="capture_outpatient_vitals" type="submit">Capture Vitals</button>
                        <button class="btn btn-space btn-secondary">Cancel</button>
                      </p>
                    </div>
              </div>
              </form>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
  <script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
  <script type="text/javascript">
    CKEDITOR.replace('editor')
    CKEDITOR.replace('editor1')
  </script>
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