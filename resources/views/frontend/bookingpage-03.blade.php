<!doctype html>
<html lang="en">


<!-- Mirrored from themezhub.net/geotrip-live/geotrip/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jan 2024 08:21:45 GMT -->
@extends('include.main')
@section('content')
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->


		<!-- ============================ Booking Title ================================== -->
        <section class="bg-cover position-relative" style="background:url(assets/img/about-us.jpg)no-repeat;" data-overlay="5">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class=" col-lg-9 col-md-12">

						<div class="fpc-capstion text-center my-4">
							<div class="fpc-captions">
								<h1 class="xl-heading text-light">Get-in Touch</h1>
								<p class="text-light">Cicero famously orated against his political opponent Lucius Sergius Catilina.
									Occasionally the first Oration against Catiline is taken for type specimens</p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- ============================ Booking Title ================================== -->

        <section class="pt-4 gray-simple position-relative">
			<div class="container">

				<div class="row">
					
				</div>

				<div class="row align-items-center">
					<div class=" col-lg-12 col-md-12">
						
						<div class="row align-items-start">
							<div class="col-xl-8 col-lg-8 col-md-12 m-auto">

								<div class="card mb-3">
									<div class="card-header">
										<h4>Basic Detail</h4>
									</div>
									<div class="card-body">
										<div class="row">

											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Billing Name</label>
													<input type="text" class="form-control" placeholder="First Name">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Email</label>
													<input type="text" class="form-control" placeholder="Last Name">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Phone</label>
													<input type="text" class="form-control" placeholder="Phone Number">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Address 01</label>
													<input type="text" class="form-control" placeholder="Passport Number">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Address 02</label>
													<input type="text" class="form-control" placeholder="Passport Number">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Country</label>
													<input type="text" class="form-control" placeholder="Passport Number">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">City\State</label>
													<input type="text" class="form-control" placeholder="Passport Number">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Postal Code</label>
													<input type="text" class="form-control" placeholder="Passport Number">
												</div>
											</div>
											<div class="col-xl-12 col-lg-12 col-md-12">
												<div class="form-group">
													<label class="form-label">Special notes</label>
													<textarea class="form-control ht-200"></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>

						

						</div>
					</div>

					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="text-center d-flex align-items-center justify-content-center mt-4">
							<a href="bookingpage-02.php" class="btn btn-md btn-dark fw-semibold mx-2"><i
									class="fa-solid fa-arrow-left me-2"></i>Previous</a>
							<a href="{{url('bookingpage-success')}}" class="btn btn-md btn-primary fw-semibold mx-2">Pay Now<i
									class="fa-solid fa-arrow-right ms-2"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- ============================ Footer Start ================================== -->
	
       @endsection

<!-- Mirrored from themezhub.net/geotrip-live/geotrip/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jan 2024 08:21:45 GMT -->
</html>