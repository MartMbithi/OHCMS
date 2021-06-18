<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
check_login();
$aid = $_SESSION['dept_id'];
if (isset($_POST['update_outpatient'])) {
  $p_id = $_GET['p_id'];
  $p_fname = $_POST['p_fname'];
  $p_lname = $_POST['p_lname'];
  $p_age = $_POST['p_age'];
  $p_ailment = $_POST['p_ailment'];
  $p_address = ($_POST['p_address']);
  $p_diagonisis = $_POST['p_diagonisis'];
  $p_prescription = $_POST['p_prescription'];
  //$p_type=$_POST['p_type'];
  $p_drug_admin = $_POST['p_drug_admin'];
  //$created_at=$_POST['created_at'];
  //$=$_POST['location'];
  //$website=$_POST['website'];
  //$bio=$_POST['bio'];
  //$skill=$_POST['skill'];
  //$dpic=$_FILES["dpic"]["name"];
  //move_uploaded_file($_FILES["dpic"]["tmp_name"],"assets/img/".$_FILES["dpic"]["name"]);
  //$cover=$_FILES["cover"]["name"];
  // move_uploaded_file($_FILES["cover"]["tmp_name"],"assets/img/cover/".$_FILES["cover"]["name"]);

  //sql to inset the values to the database
  $query = "update patients set p_fname=?, p_lname=?, p_age=?, p_ailment=?, p_address=?, p_diagonisis=?, p_prescription=?, p_drug_admin=? where p_id=?";
  $stmt = $mysqli->prepare($query);
  //bind the submitted values with the matching columns in the database.
  $rc = $stmt->bind_param('ssssssssi', $p_fname, $p_lname, $p_age, $p_ailment, $p_address, $p_diagonisis, $p_prescription, $p_drug_admin, $p_id);
  $stmt->execute();
  //if binding is successful, then indicate that a new value has been added.
  $msg = "Patient Details Updated!";
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
                <li class="breadcrumb-item"><a href="#">Pharmacy</a></li>
                <li class="breadcrumb-item active" aria-current="page">Patient Drug Administration</li>
              </ol>
            </nav>
            <div class="card card-border-color card-border-color-primary">
              <div class="card-header card-header-divider">Patient Drug Administration Details<span class="card-subtitle">Please fill required details.</span></div>
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
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">First Name</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" id="inputText3" readonly value="<?php echo $row->p_fname; ?>" name="p_fname" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Last Name</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" id="inputText3" readonly value="<?php echo $row->p_lname; ?>" name="p_lname" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Age</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" id="inputText3" readonly value="<?php echo $row->p_age; ?>" name="p_age" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Address</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" id="inputText3" readonly value="<?php echo $row->p_address; ?>" name="p_address" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Lab Tests</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <textarea class="form-control" id="inputText3" readonly value="" type="text"><?php echo $row->p_lab_tests; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Lab Results</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <textarea class="form-control" id="inputText3" readonly value="" type="text"><?php echo $row->p_lab_results; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Ailment</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" id="inputText3" readonlyu value="<?php echo $row->p_ailment; ?>" name="p_ailment" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Diagonisis</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <textarea class="form-control" id="inputText3" readonly name="p_diagonisis" type="text"><?php echo $row->p_diagonisis; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Prescription</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <textarea class="form-control" id="editor1" value="" name="p_prescription" type="text"><?php echo $row->p_prescription; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Drug Administration</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <textarea class="form-control" id="editor" value="" name="p_drug_admin" type="text"></textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <p class="text-right">
                        <button class="btn btn-space btn-primary" name="update_outpatient" type="submit">Save</button>
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
    CKEDITOR.replace('editor1')
  </script>
  <script type="text/javascript">
    CKEDITOR.replace('editor')
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