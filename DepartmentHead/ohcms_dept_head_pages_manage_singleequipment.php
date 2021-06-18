<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
check_login();
$aid=$_SESSION['dept_id'];
            if(isset($_POST['update_equipment']))
        {
            $id=$_GET['id'];
            $name=$_POST['name'];
            $description=$_POST['description'];
            $status=$_POST['status'];
            //$created_at=$_POST['created_at'];
        //$=$_POST['location'];
        //$website=$_POST['website'];
        //$bio=$_POST['bio'];
        //$skill=$_POST['skill'];
        //$dpic=$_FILES["dpic"]["name"];
        //move_uploaded_file($_FILES["dpic"]["tmp_name"],"assets/img/".$_FILES["dpic"]["name"]);
        //$cover=$_FILES["cover"]["name"];
       // move_uploaded_file($_FILES["cover"]["tmp_name"],"assets/img/cover/".$_FILES["cover"]["name"]);
        
    //sql to inset the values to the database
        $query="update assets set name=?, description=?, status=?  where id=?";
        $stmt = $mysqli->prepare($query);
        //bind the submitted values with the matching columns in the database.
        $rc=$stmt->bind_param('sssi', $name, $description, $status, $id);
        $stmt->execute();
        //if binding is successful, then indicate that a new value has been added.
        $msg = "Laboratory Equipment Record Updated!";
  
    }
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
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Update Lab Equipment Details<span class="card-subtitle">Please fill required details.</span></div>
                <div class="card-body">
                <?php if(isset($msg)) 
                 {?>
                    <script>
                        setTimeout(function () 
                        { 
                            swal("Success!","<?php echo $msg;?>!","success");
                        },
                            100);
                    </script>
                    <!--Trigger a pretty success alert-->

                 <?php } ?>
                 <?php	
                    $id=$_GET['id'];
                    $ret="select * from assets where id=?";
                    //code for getting rooms using a certain id
                    $stmt= $mysqli->prepare($ret) ;
                    $stmt->bind_param('i',$id);
                    $stmt->execute() ;//ok
                    $res=$stmt->get_result();
                    //$cnt=1;
                    while($row=$res->fetch_object())
                    {
                ?>
                    <form method="POST" >
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Equipment Name</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" id="inputText3" value="<?php echo $row->name;?>" name="name" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Equipment Description</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <textarea class="form-control" id="editor" name="description" type="text"><?php echo $row->description;?></textarea>
                      </div>
                    </div>                   
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Equipment Status</label>
                      <select class="col-12 col-sm-8 col-lg-6" name="status">
                        <option>Functional</option>
                        <option>Faulty</option>
                      </select>
                    </div>                      
                    <div class="col-sm-6">
                        <p class="text-right">
                          <button class="btn btn-space btn-primary" name="update_equipment" type="submit">Update Details</button>
                          <button class="btn btn-space btn-secondary">Cancel</button>
                        </p>
                      </div>
                    </div>
                  </form>
                    <?php }?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
    <script type="text/javascript">
      CKEDITOR.replace('editor')
    </script>
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