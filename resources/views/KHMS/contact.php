<!doctype html>
<html lang="en">
<?php include('includes/head.php');?>
  <body>
    
    <?php include("includes/navbar.php");?>
    <!-- END header -->
    
    <section class="home-slider inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('img/slider-2.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1>Contact Us</h1>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->


    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 element-animate">
            <form action="#" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="fname">First Name</label>
                  <input type="text" class="form-control form-control-lg" id="fname">
                </div>
                <div class="col-md-6 form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control form-control-lg" id="lname">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control form-control-lg">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Write Message</label>
                  <textarea name="message" id="message" class="form-control form-control-lg" cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary btn-lg btn-block">
                </div>

              </div>
            </form>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5 element-animate">
            
            <h5 class="text-uppercase mb-3">Address</h5>
            <p class="mb-5">90100 Kaseve, Along Machakos - Kitui Road <br> Machakos <br> Kenya</p>
            
            <h5 class="text-uppercase mb-3">Email Us At</h5>
            <p class="mb-5"><a href="mailto:info@kasevehospital.com">info@kasevehospital.com</a> <br> <a href="mailto:customer@kasevehospital.com">customer@kasevehospital.com</a></p>
            
            <h5 class="text-uppercase mb-3">Call Us</h5>
            <p class="mb-5">Phone: (+254) 706 690 398 <br> Mobile: (+254) 737 229 776 <br> Fax: (+254) 435 3534</p>
  

          </div>
        </div>
      </div>
    </section>

    

    <a href="#" class="cta-link element-animate" data-aniamte-effect="fadeIn" data-toggle="modal" data-target="#modalAppointment">
      <span class="sub-heading">Ready to Visit?</span>
      <span class="heading">Make an Appointment</span>
    </a>
    <!-- END cta-link -->

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