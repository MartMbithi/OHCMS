<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
check_login();
$aid = $_SESSION['dept_id'];
if (isset($_POST['add_pharm'])) {

  $pharm_name = $_POST['pharm_name'];
  $pharm_cat = $_POST['pharm_cat'];
  //$pharm_desc=$_POST['pharm_desc'];
  $pharm_desc = $_POST['pharm_desc'];
  $pharm_qty = $_POST['pharm_qty'];
  $pharm_vendor = $_POST['pharm_vendor'];
  $pharm_pur_date = $_POST['pharm_pur_date'];
  $pharm_exp_date = $_POST['pharm_exp_date'];
  //$dpic=$_FILES["dpic"]["name"];
  //move_uploaded_file($_FILES["dpic"]["tmp_name"],"assets/img/".$_FILES["dpic"]["name"]);
  //$cover=$_FILES["cover"]["name"];
  // move_uploaded_file($_FILES["cover"]["tmp_name"],"assets/img/cover/".$_FILES["cover"]["name"]);

  //sql to inset the values to the database
  $query = "insert into pharmaceuticals  (pharm_name, pharm_cat, pharm_desc, pharm_qty, pharm_vendor, pharm_pur_date, pharm_exp_date) values(?,?,?,?,?,?,?)";
  $stmt = $mysqli->prepare($query);
  //bind the submitted values with the matching columns in the database.
  $rc = $stmt->bind_param('sssssss', $pharm_name, $pharm_cat, $pharm_desc, $pharm_qty, $pharm_vendor, $pharm_pur_date, $pharm_exp_date);
  $stmt->execute();
  //if binding is successful, then indicate that a new value has been added.
  $msg = "Pharmaceutical Details Added";
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
                <li class="breadcrumb-item active" aria-current="page">Add Pharmaceutical Record</li>
              </ol>
            </nav>
            <div class="card card-border-color card-border-color-primary">
              <div class="card-header card-header-divider">Add Pharmaceutical(Drug) Details<span class="card-subtitle">Please fill required details.</span></div>
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
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Pharmaceutical Name</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" id="inputText3" required name="pharm_name" type="text">
                    </div>
                  </div>
                  <div class="form-group row pt-1">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Pharmaceutical Category</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <select name="pharm_cat" class="form-control">
                        <?php

                        $ret = "SELECT * FROM pharmaceutical_category";
                        $stmt = $mysqli->prepare($ret);
                        //$stmt->bind_param('i',$aid);
                        $stmt->execute(); //ok
                        $res = $stmt->get_result();
                        //$cnt=1;
                        while ($row = $res->fetch_object()) {
                        ?>
                          <option value="<?php echo $row->category; ?>" selected><?php echo $row->category; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Pharmaceutical Quantity (In Containers) </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" id="inputText3" required name="pharm_qty" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Pharmaceutical Vendor</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" id="inputText3" required name="pharm_vendor" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Pharmaceutical Purchase Date</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" id="inputText3" required name="pharm_pur_date" type="date">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Pharmaceutical Best Before Date</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" id="inputText3" required name="pharm_exp_date" type="date">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Pharmaceutical Description</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <textarea class="form-control" id="editor" name="pharm_desc" type="text"></textarea>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <p class="text-right">
                      <button class="btn btn-space btn-primary" name="add_pharm" type="submit">Save</button>
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
  <script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
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