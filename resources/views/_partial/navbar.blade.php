<div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li><a href="{{ url('/')}}">Home</a></li>
                   
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >About</a>
                        <ul class="dropdown-menu">
							<li><a href="{{ url('/mission')}}">Our Mission</a></li>
							<li><a href="{{ url('/why_us')}}">Why OHCMS</a></li>
							
                        </ul>
                    </li>
                    
					<li><a href="{{ url('/modules')}}">OHCMS Modules</a></li>
					<li><a href="{{ url('/sample_ohcms')}}">Try OHCMS</a></li>
					<li><a href="#">Download OHCMS</a></li>
					<li><a href="{{ url('/contact')}}">Contact us</a></li>
                </ul>
</div>
<!-- /.navbar-collapse -->