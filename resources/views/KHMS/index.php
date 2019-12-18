<!doctype html>
<html lang="en">
 <?php include('includes/head.php');?>
  <body>
    
    <!--nvigation Bar-->
    <?php include('includes/navbar.php');?>
    <!-- END header -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('img/slider-2.jpeg');">
        
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h2 class="text-black">We Provide Quality Health Care Solutions</h2>
              <p>A Treatment Plan that Fits Your Whole Life</p>
            </div>
          </div>
        </div>

      </div>

      <div class="slider-item" style="background-image: url('img/slider-1.jpeg');">
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h2 class="text-black">Multi Disciplinary Team</h2>
              <p class="text-black">Of Specialists Committed To Providing Top Quality Healthcare </p>
            </div>
          </div>
        </div>
        
      </div>

    </section>
    <!-- END slider -->

    
    <section class="container home-feature mb-5">
      <div class="row">
        <div class="col-md-4 p-0 one-col element-animate">
          <div class="col-inner p-xl-5 p-lg-5 p-md-4 p-sm-4 p-4">
            <span class="icon flaticon-hospital-bed"></span>
            <h2>MULTI-DISPLINARY</h2>
            <p>Offering a range of departments and services. Whatever needs you have, we offer the best car</p>
          </div>
        </div>
        <div class="col-md-4 p-0 two-col element-animate">
          <div class="col-inner p-xl-5 p-lg-5 p-md-4 p-sm-4 p-4">
            <span class="icon flaticon-first-aid-kit"></span>
            <h2>PATIENT CENTERED</h2>
            <p>You have a life to live and we will get you back to it as soon as we can.</p>
          </div>
        </div>
        <div class="col-md-4 p-0 three-col element-animate">
          <div class="col-inner p-xl-5 p-lg-5 p-md-4 p-sm-4 p-4">
            <span class="icon flaticon-hospital"></span>
            <h2>BIGGER THAN JUST US</h2>
            <p>The world needs more than just a doctor. We express our care for the community in a variety of programs.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="section stretch-section">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center mb-5">
            <h2 class="text-uppercase heading border-bottom mb-4">Why Choose Us</h2>
            <p class="mb-0 lead">.</p>
          </div>
        </div>
        <div class="row align-items-center">
          
          <div class="col-md-6 stretch-left-1 element-animate" data-animate-effect="fadeInLeft">
            <a href="#" class="video"><img src="img/img_1.jpg" alt="" class="img-fluid"></a>
          </div>
          <div class="col-md-6 stretch-left-1-offset pl-md-5 pl-0 element-animate" data-animate-effect="fadeInLeft">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="media d-block media-feature text-center">
                  <span class="icon flaticon-hospital"></span>
                  <div class="media-body">
                    <h3 class="mt-0 text-black">Amenities</h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="media d-block media-feature text-center">
                  <span class="icon flaticon-first-aid-kit"></span>
                  <div class="media-body">
                    <h3 class="mt-0 text-black">Medical Services</h3>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="media d-block media-feature text-center">
                  <span class="icon flaticon-hospital-bed"></span>
                  <div class="media-body">
                    <h3 class="mt-0 text-black">Patient Services</h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="media d-block media-feature text-center">
                  <span class="icon flaticon-doctor"></span>
                  <div class="media-body">
                    <h3 class="mt-0 text-black">Expert Doctors</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center mb-5">
            <h2 class="text-uppercase heading border-bottom mb-4">Client Testimonials</h2>
            <p class="mb-0 lead">Our Satisfied Clients Had The Following To Say</p>
          <div class="major-caousel js-carousel-1 owl-carousel">
          <?php
                        
          $ret="SELECT * FROM  feedback ";
          $stmt= $mysqli->prepare($ret) ;
          //$stmt->bind_param('i',$aid);
          $stmt->execute() ;//ok
          $res=$stmt->get_result();
          $cnt=1;
          while($row=$res->fetch_object())
              {
          ?>
            <div>
              <div class="media d-block media-custom text-center">
                <div class="media-body">
                  <h3 class="mt-0 text-black"><?php echo $row->p_name;?></h3>
                  <p><?php echo $row->p_feedback;?></p>
                </div>
              </div>
            </div>
            <?php }?>
          </div>
          <!-- END slider -->
        </div>
      </div>
    </section>

    <section class="section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center mb-5">
            <h2 class="text-uppercase heading border-bottom mb-4">News &amp; Events</h2>
          </div>
        </div>
        <div class="row element-animate">
          <div class="major-caousel js-carousel-2 owl-carousel">
            <div>
              <div class="media d-block media-custom text-left">
                <img src="img/img_thumb_1.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <span class="meta-post">January 7, 2017</span>
                  <h3 class="mt-0 text-black"><a href="#" class="text-black">Be Breast Aware – Early Detection Saves Lives!</a></h3>
                  <p>Breast cancer is one of the most common cancers in East Africa, where its mortality rates are among the highest in the world. It is increasingly affecting young women in their thirties.</p>
                  
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-left">
                <img src="img/img_thumb_2.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <span class="meta-post">November 12, 2017</span>
                  <h3 class="mt-0 text-black"><a href="#" class="text-black">Liver disease detection made painless</a></h3>
                  <p>When you, unfortunately, get sick and go to a hospital, it is routine to be examined by the doctor. He or she may request some extra investigations. Other examinations may not be as painful and are more readily accepted</p>
                  
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-left">
                <img src="img/img_thumb_3.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <span class="meta-post">November 9, 2017</span>
                  <h3 class="mt-0 text-black"><a href="#" class="text-black">Kaseve Hospital Performs 25 Free Heart Surgeries </a></h3>
                  <p>25 children with heart-related defects have undergone free medical operations at Kaseve Hospital sponsored by the hospital in collaboration with a medical team from Healing Little Hearts Charity and Jain Social Group</p>
                  
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-left">
                <img src="img/img_thumb_4.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <span class="meta-post">December 2, 2018</span>
                  <h3 class="mt-0 text-black"><a href="#" class="text-black">24 Patients get Pacemakers at Kaseve Hospital</a></h3>
                  <p>24 patients have benefited from subsidized pacemakers after Kaseve Hospital partnered with the East African Heart Rhythm Project, a German non-profit organization, to offer subsidized pacemakers in a two-week medical mission.</p>
                 
                </div>
              </div>
            </div>                                  

          </div>
          <!-- END slider -->
        </div>
      </div>
    </section>
    <!-- END section -->

    <a href="#" class="cta-link element-animate" data-animate-effect="fadeIn" data-toggle="modal" data-target="#modalAppointment">
      <span class="sub-heading">Ready to Visit?</span>
      <span class="heading">Make an Appointment</span>
    </a>
    <!-- END cta-link -->

    
    <?php include('includes/footer.php');?>


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