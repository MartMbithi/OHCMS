<!doctype html>
<html lang="en">
<?php include("includes/head.php");?>
  <body>
    
    <?php include("includes/navbar.php");?>
    <!-- END header -->

    
    <section class="home-slider inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('img/slider-2.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1>Knowlege Base</h1>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->

    <section class="section">
      <div class="container">
        <!--Diaplay Knowledge Base Details-->
        
        <div class="row">
        <?php
                        
          $ret="SELECT * FROM  knowledge_base ";
          $stmt= $mysqli->prepare($ret) ;
          //$stmt->bind_param('i',$aid);
          $stmt->execute() ;//ok
          $res=$stmt->get_result();
          $cnt=1;
          while($row=$res->fetch_object())
              {
          ?>
          <div class="col-md-12 element-animate">
            <div class="media d-block media-feature text-center mb-5">
              <span class="icon flaticon-hospital"></span>
              <div class="media-body">
                <h3 class="mt-0 text-black"><?php echo $row->kb_name;?></h3>
                <p><?php echo $row->kb_desc;?></p>
              </div>
            </div>
            <?php }?>
        </div>
            
      </div>
    </section>
    <!-- END section -->


    <?php include("includes/footer.php");?>
    <!-- END footer -->


    <!-- Modal -->
    <div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalAppointmentLabel">Appointment</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form  method="post">
              <div class="form-group">
                <label for="appointment_name" class="text-black">Full Name</label>
                <input type="text" name="p_name" class="form-control" id="appointment_name">
              </div>
              <div class="form-group">
                <label for="appointment_name" class="text-black">Age</label>
                <input type="text" name="p_age" class="form-control" id="appointment_name">
              </div>
              <div class="form-group">
                <label for="appointment_email" class="text-black">Address</label>
                <input type="text" name="p_address" class="form-control" id="appointment_email">
              </div>
              <div class="form-group">
                <label for="appointment_email" class="text-black">Phone Number</label>
                <input type="text" name="p_mobile" class="form-control" id="appointment_email">
              </div>          

              <div class="form-group">
                <label for="appointment_message" class="text-black">Patient Consultancy</label>
                <textarea name=" p_consultancy" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="add_consultation" value="Submit" class="btn btn-primary">
              </div>
            </form>
          </div>

          
        </div>
      </div>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>