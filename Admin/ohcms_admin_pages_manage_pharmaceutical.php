<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
check_login();
$aid = $_SESSION['admin_id'];
if (isset($_GET['del'])) {
  $id = intval($_GET['del']);
  $adn = "delete from  pharmaceuticals where pharm_id=?";
  $stmt = $mysqli->prepare($adn);
  $stmt->bind_param('i', $id);
  $stmt->execute();
  $stmt->close();
  $msg = "Pharmaceutical Details Removed";
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
                <li class="breadcrumb-item"><a href="ohcms_pages_admin_dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Pharmacy</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Pharmaceutical</li>
              </ol>
            </nav>
            <div class="card card-table">
              <div class="card-header">
                <div class="title">Pharmaceutical Records</div>
              </div>
              <?php if (isset($msg)) { ?>
                <script>
                  setTimeout(function() {
                      swal("Success!", "<?php echo $msg; ?>!", "success");
                    },
                    100);
                </script>

              <?php } ?>
              <div class="card-body table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Vendor</th>
                      <th>Qty</th>
                      <th>Purchase Date</th>
                      <th>Expiry date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <?php

                  $ret = "SELECT * FROM pharmaceuticals";
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
                        <td><?php echo $row->pharm_name; ?></td>
                        <td><?php echo $row->pharm_cat; ?></td>
                        <td><?php echo $row->pharm_vendor; ?></td>
                        <td><?php echo $row->pharm_qty; ?></td>
                        <td><?php echo $row->pharm_pur_date; ?></td>
                        <td><?php echo $row->pharm_exp_date; ?></td>
                        <td><a class="badge badge-danger" href='ohcms_admin_pages_manage_pharmaceutical.php?del=<?php echo $row->pharm_id; ?>' onClick="return confirm('Remove  This Record?');"><i class="mdi mdi-delete"></i> Delete</a>
                          <a class="badge badge-primary" href='ohcms_admin_pages_manage_singlepharmaceutical.php?pharm_id=<?php echo $row->pharm_id; ?>'><i class="mdi mdi-check-circle"></i> Update</a>
                          <a class="badge badge-success" href='ohcms_admin_pages_view_single_pharmaceutical.php?pharm_id=<?php echo $row->pharm_id; ?>'><i class="mdi mdi-eye-check-outline"></i> View</a>
                        </td>
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