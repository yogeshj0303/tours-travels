<!doctype html>
<html lang="en">


<!-- Mirrored from themezhub.net/geotrip-live/geotrip/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jan 2024 08:21:45 GMT -->
@extends('include.main')
@section('content')
<style>
	.error-msg {
    color: red;
    font-size: 12px;
    margin-top: 5px;
}
</style>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->


	
		<!-- ============================ Booking Title ================================== -->
		<section class="bg-cover position-relative" style="background:url(assets/img/bg-title.jpg)no-repeat;" data-overlay="5">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-xl-7 col-lg-9 col-md-12">

						<div class="fpc-capstion text-center my-4">
							<div class="fpc-captions">
								<h1 class="xl-heading text-light">Get-in Touch</h1>
								<p class="text-light">Please Connect With us</p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- ============================ Booking Title ================================== -->


		<!-- ============================ Form Section ================================== -->
		<section>
			<div class="container">

				<div class="row justify-content-between g-4 mb-5">
					<div class="col-xl-4 col-lg-4 col-md-6">
						<div class="card p-4 rounded-4 border br-dashed text-center h-100">
							<div class="crds-icons d-inline-flex mx-auto mb-3 text-primary fs-2"><i class="fa-solid fa-briefcase"></i>
							</div>
							<div class="crds-desc">
								<h5>Drop a Mail</h5>
								<p class="fs-6 text-md lh-2 mb-0">Themezhub@gmail.com<br>Paythemezhub@gmail.com</p>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6">
						<div class="card p-4 rounded-4 border br-dashed text-center h-100">
							<div class="crds-icons d-inline-flex mx-auto mb-3 text-primary fs-2"><i class="fa-solid fa-headset"></i>
							</div>
							<div class="crds-desc">
								<h5>Call Us</h5>
								<p class="fs-6 text-md lh-2 mb-0">(0522) 2563568<br>+91 256 6548 457</p>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6">
						<div class="card p-4 rounded-4 border br-dashed text-center h-100">
							<div class="crds-icons d-inline-flex mx-auto mb-3 text-primary fs-2"><i class="fa-solid fa-globe"></i>
							</div>
							<div class="crds-desc">
								<h5>Connect with Social</h5>
								<p class="text-md lh-2">Let's Connect with Us via social media</p>
								<ul class="list-inline mb-0">
									<li class="list-inline-item"> <a class="square--40 circle gray-simple color--facebook" href="#"><i
												class="fa-brands fa-facebook-f"></i></a> </li>
									<li class="list-inline-item"> <a class="square--40 circle gray-simple color--instagram" href="#"><i
												class="fa-brands fa-instagram"></i></a> </li>
									<li class="list-inline-item"> <a class="square--40 circle gray-simple color--twitter" href="#"><i
												class="fa-brands fa-twitter"></i></a> </li>
									<li class="list-inline-item"> <a class="square--40 circle gray-simple color--dribbble" href="#"><i
												class="fa-brands fa-dribbble"></i></a> </li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="row align-items-center justify-content-between g-4">

					<div class="col-xl-7 col-lg-7 col-md-12">
						<div class="contactForm gray-simple p-4 rounded-3">
						<form id="contactForm">
								<div class="row align-items-center">
									<div class="col-xl-12 col-lg-12 col-md-12">
										<div class="touch-block d-flex flex-column mb-4">
											<h2>Drop Us a Line</h2>
											<p>Get in touch via form below and we will reply as soon as we can.</p>
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Your Name</label>
											<input type="text" name="name" class="form-control" tabindex="1">
											<div class="error-msg" id="nameError"></div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-6">
										<div class="form-group">
											<label class="form-label">eMail ID</label>
											<input type="email" name="email" class="form-control" tabindex="2">
											<div class="error-msg" id="emailError"></div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Phone No.</label>
											<input type="number" name="phone_no" class="form-control" tabindex="3">
											<div class="error-msg" id="phoneError"></div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Subject</label>
											<input type="text" name="subject" class="form-control" tabindex="4">
											<div class="error-msg" id="subjectError"></div>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12">
										<div class="form-group">
											<label class="form-label">Your Query</label>
											<textarea class="form-control ht-120" name="query" tabindex="5"></textarea>
											<div class="error-msg" id="queryError"></div>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12">
										<div class="form-group mb-0">
											<button type="submit" class="btn fw-medium btn-primary" tabindex="6">Send Message<i class="fa-solid fa-paper-plane ms-2"></i></button>
										</div>
									</div>
								</div>
							</form>

						</div>
					</div>

					<div class="col-xl-5 col-lg-5 col-md-12">
						<iframe class="full-width ht-100 grayscale rounded"
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9663095343008!2d-74.00425878428698!3d40.74076684379132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259bf5c1654f3%3A0xc80f9cfce5383d5d!2sGoogle!5e0!3m2!1sen!2sin!4v1586000412513!5m2!1sen!2sin"
							height="500" style="border:0;" aria-hidden="false" tabindex="0"></iframe>
					</div>

				</div>

			</div>
		</section>
		<!-- ============================ Form Section End ================================== -->


		<!-- ============================ Call To Action Start ================================== -->
		<div class="py-5 bg-primary">
			<div class="container">
				<div class="row align-items-center justify-content-between">

					<div class="col-xl-4 col-lg-4 col-md-6">
						<h4 class="text-light fw-bold lh-base m-0">Join our Newsletter To Keep Up To Date With Us!</h4>
					</div>

					<div class="col-xl-5 col-lg-5 col-md-6">
						<div class="newsletter-forms mt-md-0 mt-4">
							<form>
								<div class="row align-items-center justify-content-between bg-white rounded-3 p-2 gx-0">

									<div class="col-xl-9 col-lg-8 col-md-8">
										<div class="form-group m-0">
											<input type="text" class="form-control bold ps-1 border-0" placeholder="Enter Your Mail!">
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4">
										<div class="form-group m-0">
											<button type="button" class="btn btn-dark fw-medium full-width">Submit<i
													class="fa-solid fa-arrow-trend-up ms-2"></i></button>
										</div>
									</div>

								</div>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- ============================ Call To Action Start ================================== -->


		<!-- ============================ Footer Start ================================== -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#contactForm').submit(function(event) {
            event.preventDefault(); // Prevent default form submission

            // Validate form
            var isValid = true;

            // Validate each field
            $('#contactForm input, #contactForm textarea').each(function() {
                if (!validateField($(this))) {
                    isValid = false;
                }
            });

            // If form is not valid, prevent submission
            if (!isValid) {
                return false;
            }

            // If form is valid, proceed with form submission
            var formData = $(this).serialize(); // Serialize form data

            $.ajax({
                url: "{{ route('submit.contact') }}",
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    // Show success message
                    alert(response.message);
                    
                    // Optionally, you can reset the form here
                    $('#contactForm')[0].reset();
                },
                error: function(xhr) {
                    // Handle errors
                    alert('Error: ' + xhr.responseText);
                }
            });
        });

        // Function to validate individual fields
        function validateField(field) {
            var value = field.val().trim();
            var errorDiv = field.closest('.form-group').find('.error-msg');

            // Reset error message
            errorDiv.text('');

            // Perform validation based on field type
            if (field.attr('name') === 'email') {
                // Validate email format
                if (value === '') {
                    errorDiv.text('Please enter your email');
                    return false;
                }
            } else if (field.attr('name') === 'phone_no') {
                // Validate phone number format
                if (value === '') {
                    errorDiv.text('Please enter your phone number');
                    return false;
                }
            } else {
                // Validate other fields (e.g., name, subject, query)
                if (value === '') {
                    errorDiv.text('Please enter your ' + field.attr('name'));
                    return false;
                }
            }

            // Add more validation rules as needed...

            return true;
        }

        // Show validation error messages when fields lose focus
        $('#contactForm input, #contactForm textarea').blur(function() {
            validateField($(this));
        });
    });
</script>


 @endsection

<!-- Mirrored from themezhub.net/geotrip-live/geotrip/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jan 2024 08:21:45 GMT -->
</html>