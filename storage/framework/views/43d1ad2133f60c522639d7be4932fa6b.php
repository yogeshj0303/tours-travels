<!doctype html>
<html lang="en">


<!-- Mirrored from themezhub.net/geotrip-live/geotrip/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jan 2024 08:21:44 GMT -->
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
	<div id="preloader">
		<div class="preloader"><span></span><span></span></div>
	</div>

	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">

		<!-- ============================== Login Section ================== -->
		<section class="py-1">
			<div class="container">

				<div class="row justify-content-center align-items-center m-auto">
					<div class="col-12">
						<div class="bg-mode shadow rounded-3 overflow-hidden">
							<div class="row g-0">
								<!-- Vector Image -->
								<div class="col-lg-6 d-flex align-items-center order-2 order-lg-1">
									<div class="p-3 p-lg-5">
										<img src="assets/img/login.svg" class="img-fluid" alt="">
									</div>
									<!-- Divider -->
									<div class="vr opacity-1 d-none d-lg-block"></div>
								</div>

								<!-- Information -->
								<div class="col-lg-6 order-1">
									<div class="p-3 p-sm-4 p-md-5">
										<!-- Logo -->
										<a href="index.php">
											<img class="img-fluid mb-4" src="assets/img/logo-icon.png" width="70" alt="logo">
										</a>
										<!-- Title -->
										<h1 class="mb-2 fs-2">Welcome Back Adam!</h1>
										<p class="mb-0">Are you new here?<a href="<?php echo e(url('front-register')); ?>" class="fw-medium text-primary"> Create an
												account</a></p>

										<!-- Form START -->
										<form method="POST" action="<?php echo e(route('customer.login')); ?>" class="mt-4 text-start">
									<?php echo csrf_field(); ?> <!-- CSRF Protection -->

									<div class="form py-4">
									<div class="form-floating mb-4">
												<input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
												<label>User Name</label>
												<span id="emailError" class="error-message" style="color: red;"></span>
											</div>
										<div class="form-floating mb-4">
											<input type="password" class="form-control" name="password" id="password" placeholder="Password" >
											<label>Password</label>
											<span class="toggle-password position-absolute top-50 end-0 translate-middle-y me-3 fa-regular fa-eye"></span>
											<span id="passwordError" class="error-message" style="color: red;"></span>
										</div>

										<div class="form-group">
											<button type="submit" class="btn btn-md btn-primary full-width font--bold btn-lg">Log In</button>
										</div>

										<div class="modal-flex-item d-flex align-items-center justify-content-between mb-3">
											<div class="modal-flex-first">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" id="savepassword" name="remember" value="option1">
													<label class="form-check-label" for="savepassword">Save Password</label>
												</div>
											</div>
											<div class="modal-flex-last">
												<a href="<?php echo e(url('forgot-password')); ?>" class="text-primary fw-medium">Forget Password?</a>
											</div>
										</div>
									</div>
								</form>

										<!-- Form END -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- ============================== Login Section End ================== -->

	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->


	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/dropzone.min.js"></script>
    <script src="assets/js/flatpickr.js"></script>
    <script src="assets/js/flickity.pkgd.min.js"></script>
    <script src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/rangeslider.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/prism.js"></script>

	<script src="assets/js/custom.js"></script>
	<!-- ============================================================== -->
	<!-- This page plugins -->
	<!-- ============================================================== -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('form').submit(function(event) {
            var emailValue = $('#email').val().trim();
			var passwordValue = $('#password').val().trim();

            if (emailValue === '') {
                event.preventDefault(); // Prevent form submission
                $('#emailError').text('Username cannot be empty');
            }
			if (passwordValue === '') {
                event.preventDefault(); // Prevent form submission
                $('#passwordError').text('Password cannot be empty');
            }
        });
    });
</script>

</body>


<!-- Mirrored from themezhub.net/geotrip-live/geotrip/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jan 2024 08:21:45 GMT -->
</html><?php /**PATH C:\xampp\htdocs\tours-travels\resources\views/frontend/login.blade.php ENDPATH**/ ?>