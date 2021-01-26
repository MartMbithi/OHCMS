<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
check_login();
$aid = $_SESSION['admin_id'];
?>
<!DOCTYPE html>
<html lang="en">

<?php include('includes/header.php'); ?>

<body>
  <div class="be-wrapper">
    <!--Navbar-->
    <?php include('includes/navbar.php'); ?>
    <!--Sidebarbar-->
    <?php include('includes/sidebar.php'); ?>

    <div class="be-content">
      <div class="main-content container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="ohcms_pages_admin_dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Password Resets</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage</li>
              </ol>
            </nav>
            <div class="card card-table">
              <div class="card-header"> Manage Password Reset
                <div class="tools dropdown">
                  <div class="dropdown-menu" role="menu">
                    <div class="dropdown-divider"></div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table class="table table-striped table-hover table-fw-widget" id="table1">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>T. Stamp</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <?php

                  $ret = "SELECT * FROM `password_resets`  ";
                  $stmt = $mysqli->prepare($ret);
                  //$stmt->bind_param('i',$aid);
                  $stmt->execute(); //ok
                  $res = $stmt->get_result();
                  $cnt = 1;
                  while ($row = $res->fetch_object()) {
                  ?>
                    <tbody>
                      <tr>
                        <td><?php echo $cnt; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php echo $row->status; ?></td>
                        <td><?php echo $row->t_stamp; ?></td>
                        <td>
                          <a class="badge badge-success" href='ohcms_admin_pages_reset_pwd.php?id=<?php echo $row->id; ?>'><i class="mdi mdi-eye-check-outline"></i> Approve</a>
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
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net/js/jquery.dataTables.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-bs4/js/dataTables.bootstrap4.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons/js/buttons.flash.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/jszip/jszip.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/pdfmake/pdfmake.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/pdfmake/vfs_fonts.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons/js/buttons.colVis.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons/js/buttons.print.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons/js/buttons.html5.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        //-initialize the javascript
        App.init();
        App.dataTables();
      });
    </script>
</body>

</html>