<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
check_login();
$aid=$_SESSION['admin_id'];
?>
<!DOCTYPE html>
<html lang="en">
<!--Header-->
  <?php include('includes/header.php');?>
  <!--End Header-->
  <body>
    <div class="be-wrapper be-fixed-sidebar">
      <!--Navigation bar-->
     <?php include("includes/navbar.php");?>
     <!--Navigation-->

     <!--Sidebar-->
     <?php include("includes/sidebar.php");?>
     <!--Sidebar-->
      <div class="be-content">
      <div class="main-content container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-table">
                <div class="row table-filters-container">
                  <div class="col-12 col-lg-12 col-xl-6">
                    <div class="row">
                      <div class="col-12 col-lg-6 table-filters pb-0 pb-xl-4"><span class="table-filter-title">Milestone progress</span>
                        <div class="filter-container">
                          <form>
                            <label class="control-label d-block"><span id="slider-value">0% - 100%</span></label>
                            <input class="bslider form-control" id="milestone_slider" type="text" data-slider-value="[0,100]" data-slider-step="1" data-slider-max="100" data-slider-min="0" value="50">
                          </form>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 table-filters pb-0 pb-xl-4"><span class="table-filter-title">Proyect</span>
                        <div class="filter-container">
                          <label class="control-label">Select a proyect:</label>
                          <form>
                            <select class="select2">
                              <option value="All">All</option>
                              <option value="Bootstrap">Bootstrap Admin</option>
                              <option value="CLI">CLI Connector</option>
                              <option value="Back-end">Back-end Manager</option>
                            </select>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-12 col-xl-6">
                    <div class="row">
                      <div class="col-12 col-lg-6 table-filters pb-0 pb-xl-4"><span class="table-filter-title">Date</span>
                        <div class="filter-container">
                          <form>
                            <div class="row">
                              <div class="col-6">
                                <label class="control-label">Since:</label>
                                <input class="form-control form-control-sm datetimepicker" id="dateSince" data-min-view="2" data-date-format="yyyy-mm-dd">
                              </div>
                              <div class="col-6">
                                <label class="control-label">To:</label>
                                <input class="form-control form-control-sm datetimepicker" id="dateTo" data-min-view="2" data-date-format="yyyy-mm-dd">
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 table-filters pb-xl-4"><span class="table-filter-title">Status</span>
                        <div class="filter-container">
                          <form>
                            <div class="row">
                              <div class="col-6">
                                <div class="custom-controls-stacked">
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="toDo" type="checkbox">
                                    <label class="custom-control-label" for="toDo">To Do</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="inReview" type="checkbox">
                                    <label class="custom-control-label" for="inReview">In review</label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-6">
                                <div class="custom-controls-stacked">
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="inProgress" type="checkbox">
                                    <label class="custom-control-label" for="inProgress">In progress</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="done" type="checkbox">
                                    <label class="custom-control-label" for="done">Done</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="noSwipe">
                    <table class="table table-striped table-hover be-table-responsive" id="table1">
                      <thead>
                        <tr>
                          <th style="width:5%;">
                            <div class="custom-control custom-control-sm custom-checkbox">
                              <input class="custom-control-input" type="checkbox" id="check5">
                              <label class="custom-control-label" for="check5"></label>
                            </div>
                          </th>
                          <th style="width:20%;">User</th>
                          <th style="width:17%;">Last Commit</th>
                          <th style="width:15%;">Milestone</th>
                          <th style="width:10%;">Branch</th>
                          <th style="width:10%;">Date</th>
                          <th style="width:10%;"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="success done">
                          <td>
                            <div class="custom-control custom-control-sm custom-checkbox">
                              <input class="custom-control-input" type="checkbox" id="check6">
                              <label class="custom-control-label" for="check6"></label>
                            </div>
                          </td>
                          <td class="user-avatar cell-detail user-info"><img class="mt-0 mt-md-2 mt-lg-0" src="assets/img/avatar6.png" alt="Avatar"><span>Penelope Thornton</span><span class="cell-detail-description">Developer</span></td>
                          <td class="cell-detail" data-project="Bootstrap"><span>Initial commit</span><span class="cell-detail-description">Bootstrap Admin</span></td>
                          <td class="milestone" data-progress="0,45"><span class="completed">8 / 15</span><span class="version">v1.2.0</span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-primary" style="width: 45%;"></div>
                            </div>
                          </td>
                          <td class="cell-detail"><span>master</span><span class="cell-detail-description">63e8ec3</span></td>
                          <td class="cell-detail"><span class="date">May 6, 2018</span><span class="cell-detail-description">8:30</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
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
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      	App.dashboard();
      
      });
    </script>
  </body>

</html>