<!doctype html>
<html lang="en">


<!-- Mirrored from themezhub.net/geotrip-live/geotrip/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jan 2024 08:21:45 GMT -->
@extends('include.main')
@section('content')
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->


	<!-- ============================ Articles Thumb Section ================================== -->
	<section class="bg-cover position-relative" style="background:url(assets/img/about-us.jpg)no-repeat;" data-overlay="5">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-xl-7 col-lg-9 col-md-12">

						<div class="fpc-capstion text-center my-4">
							<div class="fpc-captions">
								<h1 class="xl-heading text-light">Blog Details</h1>
								<p class="text-light">Cicero famously orated against his political opponent Lucius Sergius Catilina.
									Occasionally the first Oration against Catiline is taken for type specimens</p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- ============================ Articles Thumb Section ================================== -->
		
		<section class="py-3">
			<div class="container">



				<div class="row g-4">

					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
						<div class="blogGrid-wrap d-flex flex-column h-100">
							<div class="blogGrid-pics">
								<a href="{{url('photo-detail')}}" class="d-block"><img src="assets/img/blog-1.jpg" class="img-fluid rounded" alt="Blog image"></a>
							</div>
							<div class="blogGrid-caps pt-3">
								
								<h4 class="fw-bold fs-6 lh-base"><a href="{{url('photo-detail')}}" class="text-dark">VARANASI</a></h4>
								
							</div>
						</div>
					</div>


					

				</div>
			</div>
		</section>
		<!-- ============================ Footer Start ================================== -->
	
       @endsection

<!-- Mirrored from themezhub.net/geotrip-live/geotrip/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jan 2024 08:21:45 GMT -->
</html>