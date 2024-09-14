
    <!-- top menu -->
<nav class="navbar fixed-top shadow-sm navbar-expand-lg py-md-0 py-1 bg-white navbar-light-cs">
	<div class="container">
		<a class="navbar-brand" href="index.php">
			<img src="{{asset('frontend/assets/icon/STK-Express-logo.png')}}" class="img-fluid" alt="Steadfastcourier">
		</a>
		<div>
			<a href="merchant-login" class="btn font-13 btn-log text-seagreen border-lightseagreen-1 mr-4 d-lg-none">Login</a>
			<button class="navbar-toggler without-focus border-0 px-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<!-- for desktop only -->
			<ul class="navbar-nav ml-auto d-none d-lg-flex dropdown">
					<li class="nav-item mx-lg-3 py-lg-3 py-md-2 py-1">
						<a class="nav-link font-sm-14 text-dark" href="/" id="gotoservicearea">Home</a>
					</li>
					<li class="nav-item mx-lg-3 py-lg-3 py-md-2 py-1">
						<a class="nav-link font-sm-14 text-dark" href="#" id="gotoservicearea">About Us</a>
					</li>
				<!-- <li class="nav-item mx-lg-3 py-lg-3 py-md-2 py-1">
					<a class="nav-link font-sm-14 text-dark" href="coverage-area.html" id="gotoservicearea">Service area</a>
				</li> -->
				<li class="nav-item mx-lg-3 py-lg-3 py-md-2 py-1">
					<a class="nav-link font-sm-14 text-dark" href="#" id="gotopricing">Pricing</a>
				</li>
				<li class="nav-item mx-lg-3 py-lg-3 py-md-2 py-1">
					<a class="nav-link font-sm-14 text-dark" href="">Contact Us</a>
				</li>
				<!-- <li class="nav-item dropdown mx-lg-3 py-lg-3 py-md-2 py-1">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Master
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown2">
					<a class="dropdown-item" href="district">District</a>
						<a class="dropdown-item" href="zone">Zone</a>
						<a class="dropdown-item" href="consignment-entry">Consigment Entry</a>
						<a class="dropdown-item" href="consignment-allocation-to-delivery-boy">Consignment Allocation To Delivery Boy</a>
						<a class="dropdown-item" href="consignment-allocation-to-pp-manager">Consignment Allocation To PP Manager</a>
						<a class="dropdown-item" href="consignment-received-by-delivery-boy">Consignment Received By Delivery Boy</a>
						<a class="dropdown-item" href="consignment-receiver">Consignment Receiver</a>

						<a class="dropdown-item" href="employee">Employee</a>
						<a class="dropdown-item" href="pickup">Pickup</a>
						<a class="dropdown-item" href="admin">Admin</a>
					</div>
				</li> -->
				<li class="nav-item mx-lg-3 py-lg-3 py-md-2 py-1">
					<a class="nav-link font-sm-14 text-dark outline rounded px-3 py-1" href="{{url('merchant-register')}}">Register</a>
				</li>
				<li class="nav-item mx-lg-3 py-lg-3 py-md-2 py-1">
					<a class="nav-link font-sm-14 text-white btn bg-color-lightseagreen py-1 px-4" href="{{ url('merchantlogin') }}">Login</a>
				</li>
			</ul>
			<!-- for tablet and mobile -->
			<ul class="navbar-nav d-block d-lg-none row">
				<li class="nav-item border-top active">
					<a class="nav-link font-sm-14 text-dark px-3" href="merchant-register" id="mbl-register">Register</a>
				</li>
				<li class="nav-item border-top active">
					<a class="nav-link font-sm-14 text-dark px-3" href="index.html#mbl-services" id="mbl-gotoservices">Service</a>
				</li>
				<li class="nav-item border-top">
					<a class="nav-link font-sm-14 text-dark px-3" href="coverage-area.html" id="mbl-gotoservicearea">Service area</a>
				</li>
				<li class="nav-item border-top">
					<a class="nav-link font-sm-14 text-dark px-3" href="index.html#mbl-pricing" id="mbl-gotopricing">Pricing</a>
				</li>
				<li class="nav-item border-top">
					<a class="nav-link font-sm-14 text-dark px-3" href="contact.html">Contact Us</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- end of top menu -->
