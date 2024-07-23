<!doctype html>
<html lang="en">


<!-- Mirrored from themezhub.net/geotrip-live/geotrip/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jan 2024 08:21:45 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GeoTrip - Tour & Travel Booking Agency HTML Template | ThemezHub</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#registrationForm').submit(function (e) {
            e.preventDefault();
            var valid = true;

            // Validate Name
            var name = $('#name').val();
            if (name.trim() === '') {
                $('#name').addClass('is-invalid');
                $('#name + .invalid-feedback').css('display', 'block');
                valid = false;
            } else {
                $('#name').removeClass('is-invalid');
                $('#name + .invalid-feedback').css('display', 'none');
            }

            // Validate Email
            var email = $('#email').val();
            if (email.trim() === '' || !isValidEmail(email)) {
                $('#email').addClass('is-invalid');
                $('#email + .invalid-feedback').css('display', 'block');
                valid = false;
            } else {
                $('#email').removeClass('is-invalid');
                $('#email + .invalid-feedback').css('display', 'none');
            }

            // Validate Password
            var password = $('#password-field').val();
            if (password.trim() === '') {
                $('#password-field').addClass('is-invalid');
                $('#password-field + .invalid-feedback').css('display', 'block');
                valid = false;
            } else {
                $('#password-field').removeClass('is-invalid');
                $('#password-field + .invalid-feedback').css('display', 'none');
            }

            // Validate Confirm Password
            var confirmPassword = $('#confirm-password').val();
            if (confirmPassword.trim() === '' || confirmPassword !== password) {
                $('#confirm-password').addClass('is-invalid');
                $('#confirm-password + .invalid-feedback').css('display', 'block');
                valid = false;
            } else {
                $('#confirm-password').removeClass('is-invalid');
                $('#confirm-password + .invalid-feedback').css('display', 'none');
            }

            // If all fields are valid, submit the form
            if (valid) {
                this.submit();
            }
        });

        // Function to validate email format
        function isValidEmail(email) {
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
    });
</script>

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
		<section class="py-5">
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
									<div class="p-4 p-sm-7">
										<!-- Logo -->
										<a href="index.html">
											<img class="img-fluid mb-4" src="assets/img/logo-icon.png" width="70" alt="logo">
										</a>
										<!-- Title -->
										<h1 class="mb-2 fs-2">Create New Account</h1>
										<p class="mb-0">Already a Member?<a href="<?php echo e(url('front-login')); ?>" class="fw-medium text-primary"> Signin</a></p>

										<!-- Form START -->
										<form id="registrationForm" class="mt-4 text-start">
    <div class="form py-4">
        <div class="form-group">
            <label class="form-label">Enter Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            <div class="invalid-feedback">Please enter your name.</div>
        </div>

        <div class="form-group">
            <label class="form-label">Enter email ID</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            <div class="invalid-feedback">Please enter a valid email address.</div>
        </div>

        <div class="form-group">
            <label class="form-label">Enter Password</label>
            <div class="position-relative">
                <input type="password" class="form-control" id="password-field" name="password" placeholder="Password">
                <span class="fa-solid fa-eye toggle-password position-absolute top-50 end-0 translate-middle-y me-3"></span>
            </div>
            <div class="invalid-feedback">Please enter a password.</div>
        </div>

        <div class="form-group">
            <label class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirm-password" name="password_confirmation" placeholder="*********">
            <div class="invalid-feedback">Please confirm your password.</div>
        </div>

        <div class="form-group">
            <button type="button" id="submitForm" class="btn btn-primary full-width font--bold btn-lg">Create An Account</button>
        </div>

        <div class="modal-flex-item d-flex align-items-center justify-content-between mb-3">
            <div class="modal-flex-first">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="savepassword" value="option1">
                    <label class="form-check-label" for="savepassword">Keep me signed in</label>
                </div>
            </div>
        </div>
    </div>

    <!-- Divider -->
    <div class="prixer px-3">
        <div class="devider-wraps position-relative">
            <div class="devider-text text-muted-2 text-md">Sign-Up with Socials</div>
        </div>
    </div>

    <!-- Google and facebook button -->
    <div class="social-login py-4 px-md-2">
        <ul class="row align-items-center justify-content-center g-3 p-0 m-0">
            <li class="col"><a href="#" class="square--60 border br-dashed rounded-2 mx-auto"><i class="fa-brands fa-facebook color--facebook fs-2"></i></a></li>
            <li class="col"><a href="#" class="square--60 border br-dashed rounded-2 mx-auto"><i class="fa-brands fa-whatsapp color--whatsapp fs-2"></i></a></li>
            <li class="col"><a href="#" class="square--60 border br-dashed rounded-2 mx-auto"><i class="fa-brands fa-linkedin color--linkedin fs-2"></i></a></li>
            <li class="col"><a href="#" class="square--60 border br-dashed rounded-2 mx-auto"><i class="fa-brands fa-dribbble color--dribbble fs-2"></i></a></li>
            <li class="col"><a href="#" class="square--60 border br-dashed rounded-2 mx-auto"><i class="fa-brands fa-twitter color--twitter fs-2"></i></a></li>
        </ul>
    </div>
</form>								<!-- Form END -->
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
    $(document).ready(function () {
        $('#submitForm').click(function (e) {
            e.preventDefault();

            // Get CSRF token value
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            var formData = $('#registrationForm').serialize();

            $.ajax({
                url: "<?php echo e(route('customers.store')); ?>",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': csrfToken // Include CSRF token in headers
                },
                data: formData,
                success: function (response) {
                    alert(response.message);
					$('#registrationForm')[0].reset();
                    // Handle success response, like showing a success message or redirecting the user
                },
                error: function (xhr) {
                    // Handle error response, like showing validation errors
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function (key, value) {
                        $("#" + key).addClass('is-invalid');
                        $("#" + key + " + .invalid-feedback").text(value[0]).show();
                    });
                }
            });
        });
    });
</script>

</body>


<!-- Mirrored from themezhub.net/geotrip-live/geotrip/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jan 2024 08:21:45 GMT -->
</html><?php /**PATH C:\xampp\htdocs\tours-travels\resources\views/frontend/register.blade.php ENDPATH**/ ?>