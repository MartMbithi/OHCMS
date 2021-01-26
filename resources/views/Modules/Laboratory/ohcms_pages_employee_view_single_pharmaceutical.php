<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
check_login();
$aid = $_SESSION['em_id'];
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
    $pharm_id = $_GET['pharm_id'];
    $ret = "select * from pharmaceuticals where pharm_id=?";
    //code for getting rooms using a certain id
    $stmt = $mysqli->prepare($ret);
    $stmt->bind_param('i', $pharm_id);
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
                  <div class="col-sm-5 invoice-order"><span class="invoice-id">Pharmaceutical ID <?php echo $row->pharm_id; ?></span></div>
                </div>
                <div class="row invoice-data">
                  <div class="col-sm-5 invoice-person">Pharmaceuticcal Name:<span class="name"><?php echo $row->pharm_name; ?></span>Pharmaceutical Category :<span><?php echo $row->pharm_cat; ?></span>Pharmaceutical Vendor :<span><?php echo $row->pharm_vendor; ?></span></div>
                  <div class="col-sm-2 invoice-payment-direction"></i></div>
                  <div class="col-sm-5 invoice-person">Pharmaceutical Quantity: <span class="name"><?php echo $row->pharm_qty; ?></span>Pharmaceutical Purchase Date :<span><?php echo $row->pharm_pur_date; ?></span>Pharmaceutical Best Before<span><?php echo $row->pharm_exp_date; ?></span><span></span><span></span></div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <table class="invoice-details">
                      <tr>
                        <th style="width:60%;">Pharmaceutical Description</th>
                      </tr>
                      <tr>
                        <td><?php echo $row->pharm_desc; ?></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
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