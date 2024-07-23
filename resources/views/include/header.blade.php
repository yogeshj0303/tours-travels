<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GeoTrip - Tour & Travel Booking Agency HTML Template | ThemezHub</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">

  <!-- All Plugins -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/animation.css" rel="stylesheet">
  <link href="assets/css/dropzone.min.css" rel="stylesheet">
  <link href="assets/css/flatpickr.min.css" rel="stylesheet">
  <link href="assets/css/flickity.min.css" rel="stylesheet">
  <link href="assets/css/lightbox.min.css" rel="stylesheet">
  <link href="assets/css/magnifypopup.css" rel="stylesheet">
  <link href="assets/css/select2.min.css" rel="stylesheet">
  <link href="assets/css/rangeSlider.min.css" rel="stylesheet">
  <link href="assets/css/prism.css" rel="stylesheet">

  <!-- Fontawesome & Bootstrap Icons CSS -->
  <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/fontawesome.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<!-- <div id="preloader">
		<div class="preloader"><span></span><span></span></div>
	</div> -->

	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GeoTrip - Tour & Travel Booking Agency HTML Template | ThemezHub</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">

  <!-- All Plugins -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/animation.css" rel="stylesheet">
  <link href="assets/css/dropzone.min.css" rel="stylesheet">
  <link href="assets/css/flatpickr.min.css" rel="stylesheet">
  <link href="assets/css/flickity.min.css" rel="stylesheet">
  <link href="assets/css/lightbox.min.css" rel="stylesheet">
  <link href="assets/css/magnifypopup.css" rel="stylesheet">
  <link href="assets/css/select2.min.css" rel="stylesheet">
  <link href="assets/css/rangeSlider.min.css" rel="stylesheet">
  <link href="assets/css/prism.css" rel="stylesheet">

  <!-- Fontawesome & Bootstrap Icons CSS -->
  <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/fontawesome.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<!-- <div id="preloader">
		<div class="preloader"><span></span><span></span></div>
	</div> -->

	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">

		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->
		<!-- Start Navigation -->
		<div class="header header-transparent theme">
			<div class="container-fluid">
				<nav id="navigation" class="navigation navigation-landscape">
					<div class="nav-header">
						<a class="nav-brand static-show" href="index.php"><img src="assets/img/logo-light.png" class="logo" alt=""></a>
						<a class="nav-brand mob-show" href="index.php"><img src="assets/img/logo.png" class="logo" alt=""></a>
						<div class="nav-toggle"></div>
						<div class="mobile_nav">
							<ul>
								<li class="currencyDropdown me-2">
									<a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#currencyModal"><span
											class="fw-medium">INR</span></a>
								</li>
								<li class="languageDropdown me-2">
									<a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#countryModal"><img
											src="assets/img/flag/flag.png" class="img-fluid" width="17" alt="Country"></a>
								</li>
								<li>
									<a href="#" class="bg-light-primary text-primary rounded" data-bs-toggle="modal"
										data-bs-target="#login"><i class="fa-regular fa-circle-user fs-6"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="nav-menus-wrapper" style="transition-property: none;">
	
						<ul class="nav-menu">

							<li><a href="{{url('/')}}">Home<span class="submenu-indicator"></span></a>
								
							</li>
                            <li><a href="{{url('about')}}">About Us<span class="submenu-indicator"></span></a>
								
							</li>

                            <li><a href="{{url('destination')}}">India Tour<span class="submenu-indicator"></span></a>
								
							</li>

                            <li><a href="{{url('car')}}">Tourist Transport Service<span class="submenu-indicator"></span></a>
								
							</li>

                          


							


							<li><a href="{{url('hotel')}}">Hotel<span class="submenu-indicator"></span></a>
								
							</li>

						
                        	<li><a href="{{url('blog')}}">Blog<span class="submenu-indicator"></span></a>
                        
								
							</li>

							<li class=""><a href="#">Gallery</span></a>
								<ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
									<li class="">
										<a href="{{url('Photo')}}">Photo Gallery</a>
									</li>
									<li>
										<a href="{{url('Video')}}">Video Gallery</a>
									</li>
								
								</ul>
							</li>

                            <li><a href="{{url('contact')}}" >Contact Us</a></li>

						</ul>

						<ul class="nav-menu nav-menu-social align-to-right">
	
						
							<li class="list-buttons light">
								<a href="#" data-bs-toggle="modal" data-bs-target="#login"><i
										class="fa-regular fa-call fs-6 me-2"></i>Enquiry Now</a>
							</li>

							<li class="list-buttons light mt-1 mx-4">
    @if(session()->has('customer_id'))
        <?php
        $customerId = session()->get('customer_id');
        $customer = \App\Models\Customer::find($customerId);
        ?>
		  @endif
        @if(!empty($customer))
		<div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" id="customerDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-regular fa-user fs-6 me-2"></i>{{ $customer->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="customerDropdown">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li> <a class="dropdown-item" href="{{ route('front-logout') }}">Logout</a></li>
                </ul>
            </div>
      
    @else
        <a href="{{ url('front-login') }}"><i class="fa-regular fa-user fs-6 me-2"></i>Login</a>
		@endif
</li>

						</ul>
					</div>
				</nav>
			</div>
		</div>
		<!-- End Navigation -->
		<div class="clearfix"></div>