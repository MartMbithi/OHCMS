<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]
Oh crap-->
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
						<li class="active"><i class="fa fa-laptop"></i>OHCMS Modules</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!-- End inner page header -->
	
	<div class="clearfix"></div>
	
	<!-- Start contain wrapp -->
	<div class="contain-wrapp padding-bot20">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="section-heading text-center">
						<h5>1. Administration Modules</h5>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="icon-box-circle">
						<div class="icon-box-content">
							<div class="bottom-icon"><i class="fa fa-user-secret icon-circle fa-3x icon-jaffa"></i></div>
							<h5>1. Administrator<span></span></h5>
							<p>
                            This module is for the super user of system. It has all previledges to access and manage all other modules.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box-circle">
						<div class="icon-box-content">
							<div class="bottom-icon"><i class="fa fa-user-md icon-circle fa-3x icon-meadow"></i></div>
							<h5>2. Departmental Head<span></span></h5>
							<p>
                                This module is for department head. It has all previledges to access and manage all other modules.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box-circle">
						<div class="icon-box-content">
							<div class="bottom-icon"><i class="fa fa-user-circle-o icon-circle fa-3x icon-picton"></i></div>
							<h5>3.Employee </h5>
							<p>
							    This module is for coporation employees. It has lesser previledges to access and manage all other modules.
							</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End contain wrapp -->

	<!-- Start contain wrapp -->
	<div class="contain-wrapp inverse-container padding-bot30">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="section-heading text-center">
						<h5>2. Functional Modules</h5>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<ul class="process-3colum">
						<li>
							<i class="fa fa-pencil icon-circle icon-mandy fa-6x"></i>
							<h5>Registration Desk Module</h5>
							<p>
                            This module is accessible by the front office department which will fill in patients records to the system.
							</p>
						</li>
                        <li>
							<i class="fa fa-wheelchair-alt icon-circle icon-mandy fa-6x"></i>
							<h5>OutPatient Module</h5>
							<p>
                                Out Patient module  manages records of all outPatients.
							</p>
						</li>
						<li>
							<i class="fa fa-flask icon-circle icon-mandy fa-6x"></i>
							<h5>Laboratory Module</h5>
							<p>
                                Laboratory module manages patients laboratory tests and  diagnosis records and also manage laboratory assets.
							</p>
						</li>
                        <li>
							<i class="fa fa-bed icon-circle icon-mandy fa-6x"></i>
							<h5>InPatient Module</h5>
							<p>
                                In Patient module manages records of all patients addmitted and also ward and nurses on duty allocation.
							</p>
						</li>
                        
                        <li>
							<i class="fa fa-medkit icon-circle icon-mandy fa-6x"></i>
							<h5>Pharmacy Module</h5>
							<p>
                                 Pharmacy/Pharmaceutical module manages records of all drugs and other Pharmaceuticals assets.
							</p>
						</li>
						<li>
							<i class="fa fa-exclamation-triangle icon-circle icon-picton fa-6x"></i>
							<h5>Isolation Module</h5>
							<p>
                                Isolation module manages records of isolated patients.
							</p>
						</li>
                        
					</ul>
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
