<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
check_login();
$aid = $_SESSION['dept_id'];
if (isset($_GET['del'])) {
  $id = intval($_GET['del']);
  $adn = "delete from patients where p_id=?";
  $stmt = $mysqli->prepare($adn);
  $stmt->bind_param('i', $id);
  $stmt->execute();
  $stmt->close();
  $msg = "Patient Details Removed";
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
          <div class="col-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="ohcms_pages_dept_head_dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Laboratory</a></li>
                <li class="breadcrumb-item active" aria-current="page">Patient Laboratory Records</li>
              </ol>
            </nav>
            <div class="card card-table">
              <div class="card-header">
                <div class="title">Patient Records</div>
              </div>
              <?php if (isset($msg)) { ?>
                <script>
                  setTimeout(function() {
                      swal("Success!", "<?php echo $error; ?>!", "success");
                    },
                    100);
                </script>

              <?php } ?>
              <div class="card-body table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th style="width:20%;">Name</th>
                      <th style="width:20%;">Age</th>
                      <th style="width:20%;">Diagonisis</th>
                      <th style="width:20%;">Date Registred</th>
                      <th style="width:20%;">Action</th>
                    </tr>
                  </thead>
                  <?php

                  $ret = "SELECT * FROM patients";
                  $stmt = $mysqli->prepare($ret);
                  //$stmt->bind_param('i',$aid);
                  $stmt->execute(); //ok
                  $res = $stmt->get_result();
                  $cnt = 1;
                  while ($row = $res->fetch_object()) {
                  ?>
                    <tbody class="no-border-x">
                      <tr>
                        <td><?php echo $cnt; ?></td>
                        <td><?php echo $row->p_fname; ?> <?php echo $row->p_lname; ?></td>
                        <td><?php echo $row->p_age; ?></td>
                        <td><?php echo $row->p_diagonisis; ?></td>
                        <td><?php echo $row->created_at; ?></td>
                        <td><a class="badge badge-success" href='ohcms_dept_head_pages_update_lab_test.php?p_id=<?php echo $row->p_id; ?>'><i class="mdi mdi-flask"></i> Lab Test</a></td>
                      </tr>
                    </tbody>
                  <?php $cnt = $cnt + 1;
                  } ?>
                </table>
              </div>
            </div>
          </div>
          <hr>
          <div class="col-12 col-lg-12">
            <div class="card card-table">
              <div class="card-header">
                <div class="title">Patient Laboratory Tests</div>
              </div>
              <?php if (isset($msg)) { ?>
                <script>
                  setTimeout(function() {
                      swal("Success!", "<?php echo $error; ?>!", "success");
                    },
                    100);
                </script>

              <?php } ?>
              <div class="card-body table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th style="width:20%;">Name</th>
                      <th style="width:20%;">Age</th>
                      <th style="width:20%;">Diagonisis</th>
                      <th style="width:20%;">Lab Test</th>
                      <th style="width:20%;">Lab Results</th>
                      <th style="width:20%;">Action</th>
                    </tr>
                  </thead>
                  <?php

                  $ret = "SELECT * FROM patients";
                  $stmt = $mysqli->prepare($ret);
                  //$stmt->bind_param('i',$aid);
                  $stmt->execute(); //ok
                  $res = $stmt->get_result();
                  $cnt = 1;
                  while ($row = $res->fetch_object()) {
                  ?>
                    <tbody class="no-border-x">
                      <tr>
                        <td><?php echo $cnt; ?></td>
                        <td><?php echo $row->p_fname; ?> <?php echo $row->p_lname; ?></td>
                        <td><?php echo $row->p_age; ?></td>
                        <td><?php echo $row->p_diagonisis; ?></td>
                        <td><?php echo $row->p_lab_tests; ?></td>
                        <td><?php echo $row->p_lab_results; ?></td>
                        <td><a class="badge badge-success" href='ohcms_dept_head_pages_view_outpatient_lab_results.php?p_id=<?php echo $row->p_id; ?>'><i class="mdi mdi-eye-check-outline"></i> View</a></td>
                      </tr>
                    </tbody>
                  <?php $cnt = $cnt + 1;
                  } ?>
                </table>
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