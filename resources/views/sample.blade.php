<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<html class="no-js" lang="en">
    @include('_partial.header')
<body>
	<!-- Start preloading -->
	<div id="loading" class="loading-invisible">
		<div class="loading-center">
			<div class="loading-center-absolute">
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_three"></div>
			</div>
			<p>Orion HealthCare Management System...</p>
		</div>
	</div>
	<!-- End preloading -->

	
	<div class="clearfix"></div>
	
    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">

        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Type something ann hit enter">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">            
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ url('/')}}"><img src="{{ url('img/brand/logo-black.png') }}" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
                @include('_partial.navbar')
        </div>   
    </nav>
    <!-- End Navigation -->
	
	<!-- Start inner page header -->
	<div class="innerheader-wrapp">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><i class="fa fa-sitemap"></i>OHCMS<span> Modules</span></h2>
					<ol class="breadcrumb">
						<li><a href="{{ url('/')}}"><i class="fa fa-home"></i> Home</a></li>
						<li class="active"><i class="fa fa-sitemap"></i> OHCMS Modules</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!-- End inner page header -->
	
	<div class="clearfix"></div>
	
		
	<!-- Start contain wrapp -->
	<div class="contain-wrapp padding-bot10">
		<div class="container">
			<div class="row marginbot40">
				<div class="col-md-10 col-md-offset-1">
					<div class="section-heading marginbot20">
						<h5>Orion HealthCare Hospital Management System Modules.</h5>
						<p>To Live Preview Click <strong>On</strong> Any <strong>Module</strong></p>
					</div>
								
				</div>
			</div>
			<!-- Start Modules -->
			<div class="row">
				<div class="col-md-4">
					<!-- Start Module 001 -->
					<div class="pricing-item pricing-column">
						<span class="pricing-icon"><i class="fa fa-user-secret icon-default"></i></span>
						<h3 class="pricing-title">Administrator</h3>
						<p class="pricing-sentence">Email: <span class="badge badge-pill badge-success"><b>admin@ohcms.com</b></span></p>
						<p class="pricing-sentence">Password: <span class="badge badge-pill badge-success"><b>admin</b></span></p></br>
						<a href="../public/Modules/Admin/ohcms_admin_login.php" class="btn btn-default btn-3d btn-icon icon-divider"><i class="fa fa-lock"></i>Log In</a>
					</div>
			    </div>
				<div class="col-md-4">
					<!-- Start MOdule 002 -->
					<div class="pricing-item pricing-column">
						<span class="pricing-icon"><i class="fa fa-user-md icon-default"></i></span>
						<h3 class="pricing-title">Departmental Head</h3>
						<p class="pricing-sentence">Email: <span class="badge badge-pill badge-success"><b>departmentalhead@ohcms.com</b></span></p>
						<p class="pricing-sentence">Password: <span class="badge badge-pill badge-success"><b>departmentalhead</b></span></p></br>
						<a href="#" class="btn btn-default btn-3d btn-icon icon-divider"><i class="fa fa-lock"></i>Log In</a>
					</div>
			    </div>
				<div class="col-md-4">
					<!-- Start MOdule 003 -->
					<div class="pricing-item pricing-column">
						<span class="pricing-icon"><i class="fa fa-user icon-default"></i></span>
						<h3 class="pricing-title">Employee</h3>
						<p class="pricing-sentence">Email: <span class="badge badge-pill badge-success"><b>employee@ohcms.com</b></span></p>
						<p class="pricing-sentence">Password: <span class="badge badge-pill badge-success"><b>employee</b></span></p></br>
						<a href="#" class="btn btn-default btn-3d btn-icon icon-divider"><i class="fa fa-lock"></i>Log In</a>
					</div>
			    </div>
			</div>
		</div>
	</div>
	<!-- End contain wrapp -->


		
	<!-- Start footer -->
	@include('_partial.footer')
	<!-- End footer -->
	
	<!-- Start to top -->  
    <a href="#" class="toTop">
        <i class="fa fa-chevron-up"></i>
    </a>  
    <!-- End to top -->
	
	<!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
    @include('_partial.scripts')
</body>

</html>
