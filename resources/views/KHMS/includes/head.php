<?php
session_start();
include('Modules/Admin/assets/configs/config.php');
            if(isset($_POST['add_consultation']))
        {
        
        $p_name=$_POST['p_name'];
        $p_age=$_POST['p_age'];
        $p_mobile=$_POST['p_mobile'];
        $p_address=$_POST['p_address'];
        $p_consultancy=$_POST['p_consultancy'];
        //$dpic=$_FILES["dpic"]["name"];
        //move_uploaded_file($_FILES["dpic"]["tmp_name"],"assets/img/".$_FILES["dpic"]["name"]);
        //$cover=$_FILES["cover"]["name"];
       // move_uploaded_file($_FILES["cover"]["tmp_name"],"assets/img/cover/".$_FILES["cover"]["name"]);
        
    //sql to inset the values to the database
        $query="insert into consultancy  (p_name, p_age, p_mobile, p_address, p_consultancy) values(?,?,?,?,?)";
        $stmt = $mysqli->prepare($query);
        //bind the submitted values with the matching columns in the database.
        $rc=$stmt->bind_param('sssss', $p_name, $p_age, $p_mobile, $p_address, $p_consultancy);
        $stmt->execute();
        //if binding is successful, then indicate that a new value has been added.
        $msg = "Appointment Request Sent";
  
    }
?>
<head>
    <title>Kaseve Hospital</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <script src="Modules/Admin/assets/lib/sweetjs/swal.js"></script><!--Sweet alert js-->
    <?php if(isset($msg)) 
                 {?>
                    <script>
                        setTimeout(function () 
                        { 
                            swal("Success","<?php echo $msg;?>!","success");
                        },
                            100);
                    </script>
                    <!--Trigger a pretty success alert-->

                 <?php } ?>
  </head>