<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
check_login();
$aid = $_SESSION['admin_id'];
if (isset($_GET['del'])) {
  $id = intval($_GET['del']);
  $adn = "delete from assets where id=?";
  $stmt = $mysqli->prepare($adn);
  $stmt->bind_param('i', $id);
  $stmt->execute();
  $stmt->close();
  $msg = "Equipment Details Removed";
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
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="row">
            <script>
              function printContent(el) {
                var restorepage = $('body').html();
                var printcontent = $('#' + el).clone();
                $('body').empty().html(printcontent);
                window.print();
                $('body').html(restorepage);
              }
            </script>
            <div class="col-12 col-lg-12">
              <div id="printDetails" class="invoice">

                <div class="row invoice-header">
                  <div class="col-sm-7">
                    <div class="invoice-logo"></div>
                  </div>
                  <div class="col-sm-5 invoice-order"><span class="invoice-id">Patient Id #<?php echo $row->p_id; ?></span><span class="incoice-date"><?php echo $row->created_at; ?></span></div>
                </div>
                <div class="row invoice-data">
                  <div class="col-sm-5 invoice-person">Name: <span class="name"><?php echo $row->p_fname; ?> <?php echo $row->p_lname; ?></span>Address :<span><?php echo $row->p_address; ?></span> Age :<span><?php echo $row->p_age; ?> Years Old</span></div>
                  <div class="col-sm-2 invoice-payment-direction"></i></div>
                  <div class="col-sm-5 invoice-person"><span class="name"></span><span></span><span></span><span></span><span></span></div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <table class="invoice-details">
                      <tr>
                        <th style="width:60%;">Laboratory Tests</th>
                        <th class="amount" style="width:15%;">Laboratory Results</th>
                      </tr>
                      <tr>
                        <td class="description"><?php echo $row->p_lab_tests; ?></td>
                        <td class="amount"><?php echo $row->p_lab_results; ?></td>
                      </tr>
                    </table>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">Temperature</th>
                          <th scope="col">Weight</th>
                          <th scope="col">Height</th>
                          <th scope="col">Systolic Blood Pressure</th>
                          <th scope="col">Diastolic Blood Pressure</th>
                          <th scope="col">HeartBeat Rate</th>
                          <th scope="col">Respiratory Rate</th>


                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?php echo $row->temp; ?>°C</td>
                          <td><?php echo $row->weight; ?> Kgs</td>
                          <td><?php echo $row->height; ?> CMs</td>
                          <td><?php echo $row->sbp ?> mmHg</td>
                          <td><?php echo $row->dbp ?> mmHg</td>
                          <td><?php echo $row->heartrate ?> BPM</td>
                          <td><?php echo $row->respiratoryrate ?> BPM</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row invoice-footer">
                <div class="col-lg-12">
                  <button id="print" onclick="printContent('printDetails');" class="btn btn-lg btn-space btn-success">Print</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>

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