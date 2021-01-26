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
                <li class="breadcrumb-item"><a href="#">Pharmacy</a></li>
                <li class="breadcrumb-item active" aria-current="page">OutPatient Prescriptions</li>
              </ol>
            </nav>
            <div class="card card-table">
              <div class="card-header">Advanced Patients Prescription Records.
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
                      <th>Name</th>
                      <th>Age</th>
                      <th>Address</th>
                      <th>Drug type</th>
                      <th>Registration Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <?php

                  $ret = "SELECT * FROM patients Where p_type = 'OutPatient' ";
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
                        <td><?php echo $row->p_fname; ?> <?php echo $row->p_lname; ?></td>
                        <td><?php echo $row->p_age; ?></td>
                        <td><?php echo $row->p_address; ?></td>
                        <td><?php echo $row->p_drug_admin; ?></td>
                        <td class="center"><?php echo $row->created_at; ?></td>
                        <td>
                          <a class="badge badge-success" href='ohcms_admin_pages_view_administer_drug_patient.php?p_id=<?php echo $row->p_id; ?>'><i class="mdi mdi-eye-check-outline"></i> View</a>
                          <a class="badge badge-primary" href='ohcms_admin_pages_administer_drug_patient.php?p_id=<?php echo $row->p_id; ?>'><i class="mdi mdi-check-circle"></i> Administer</a>
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