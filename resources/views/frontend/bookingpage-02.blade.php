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
					<div class="col-xl-7 col-lg-9 col-md-12">

						<div class="fpc-capstion text-center my-4">
							<div class="fpc-captions">
								<h1 class="xl-heading text-light">Booking</h1>
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

				

				<div class="row align-items-start">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="div-title d-flex align-items-center mb-3">
							<h4>Guests Detail</h4>
						</div>
						<div class="row align-items-start">
							<div class="col-xl-8 col-lg-8 col-md-12">
								 <!-- Card for Form Section -->
    <div class="card mb-3" id="mylist">
      <div class="card-header">
        <h4>Guest 01</h4>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="form-group">
              <label class="form-label">First Name</label>
              <input type="text" class="form-control" placeholder="First Name">
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="form-group">
              <label class="form-label">Last Name</label>
              <input type="text" class="form-control" placeholder="Last Name">
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="form-group">
              <label class="form-label">Date of Birth</label>
              <input type="date" class="form-control">
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="form-group">
              <label class="form-label">Passport Number</label>
              <input type="text" class="form-control" placeholder="Passport Number">
            </div>
          </div>
        </div>
      </div>
    </div>

	<!-- Buttons to add and remove form section -->
    <button class="btn btn-info btn-sm" onclick="addGuest()">Add Guest</button>
    <button class="btn btn-info btn-sm" onclick="removeLastGuest()">Remove  Guest</button>
 

								

								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="text-center d-flex align-items-center justify-content-center mt-4">
										<a href="booking-page.php" class="btn btn-md btn-dark fw-semibold mx-2"><i
												class="fa-solid fa-arrow-left me-2"></i>Previous</a>
										<a href="{{url('bookingpage-03')}}" class="btn btn-md btn-primary fw-semibold mx-2">Make Your Payment<i
												class="fa-solid fa-arrow-right ms-2"></i></a>
						       </div>
								
					         </div>

					

								

							</div>

							<div class=" col-lg-4 col-md-12">
								<div class="side-block card rounded-2 p-3">
									<h5 class="fw-semibold fs-6">Reservation Summary</h5>
									<div class="mid-block rounded-2 border br-dashed p-2 mb-3">
										<div class="row align-items-center justify-content-between g-2 mb-4">
											<div class="col-6">
												<div class="gray rounded-2 p-2">
													<span class="d-block text-muted-3 text-sm fw-medium text-uppercase mb-2">Check-In</span>
													<p class="text-dark fw-semibold lh-base text-md mb-0">27 Aug 2023</p>
													<span class="text-dark text-md">From 14:40</span>
												</div>
											</div>
											<div class="col-6">
												<div class="gray rounded-2 p-2">
													<span class="d-block text-muted-3 text-sm fw-medium text-uppercase mb-2">Check-Out</span>
													<p class="text-dark fw-semibold lh-base text-md mb-0">31 Aug 2023</p>
													<span class="text-dark text-md">By 11:50</span>
												</div>
											</div>
										</div>
										<div class="row align-items-center justify-content-between mb-4">
											<div class="col-12">
												<p class="text-muted-2 text-sm text-uppercase fw-medium mb-1">Total Length of Stay:</p>
												<div class="d-flex align-items-center">
													<div class="square--30 circle text-seegreen bg-light-seegreen"><i
															class="fa-regular fa-calendar"></i></div><span class="text-dark fw-semibold ms-2">3 Days \
														2 Night</span>
												</div>
											</div>
										</div>
										<div class="row align-items-center justify-content-between">
											<div class="col-12">
												<p class="text-muted-2 text-sm text-uppercase fw-medium mb-1">You Selected</p>
												<div class="d-flex align-items-center flex-column">
													<p class="mb-0">King Bed Appolo Resort with 3 Rooms. <a href="#"
															class="fw-medum text-primary">Change your Selection</a></p>
												</div>
											</div>
										</div>
									</div>

									<div class="bott-block d-block mb-3">
										<h5 class="fw-semibold fs-6">Your Price Summary</h5>
										<ul class="list-group list-group-borderless">
											<li class="list-group-item d-flex justify-content-between align-items-center">
												<span class="fw-medium mb-0">Rooms & Offers</span>
												<span class="fw-semibold">Rs750.52</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center">
												<span class="fw-medium mb-0">Total Discount<span
														class="badge rounded-1 text-bg-danger smaller mb-0 ms-2">10% off</span></span>
												<span class="fw-semibold">Rs7.50</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center">
												<span class="fw-medium mb-0">8% Taxes % Fees</span>
												<span class="fw-semibold">Rs10.10</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center">
												<span class="fw-medium text-success mb-0">Total Price</span>
												<span class="fw-semibold text-success">Rs772.40</span>
											</li>
										</ul>
									</div>
									
								</div>
							</div>

						</div>
					</div>

					
				</div>
			</div>
		</section>

		<!-- ============================ Footer Start ================================== -->
		<script>
    // Function to add a new guest
    function addGuest() {
      var lastGuestId = document.querySelectorAll('.card').length;
      var newGuestId = lastGuestId + 1;

      var newCard = document.createElement("div");
      newCard.className = "card mb-3";
      newCard.innerHTML = `
        <div class="card-header">
          <h4>Guest ${newGuestId}</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="form-group">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" placeholder="First Name">
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="form-group">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" placeholder="Last Name">
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="form-group">
                <label class="form-label">Date of Birth</label>
                <input type="date" class="form-control">
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="form-group">
                <label class="form-label">Passport Number</label>
                <input type="text" class="form-control" placeholder="Passport Number">
              </div>
            </div>
          </div>
        </div>
      `;
      document.getElementById("mylist").appendChild(newCard);
    }

    // Function to remove the last guest
    function removeLastGuest() {
      var guestList = document.getElementById("mylist");
      var lastGuest = guestList.lastElementChild;
      if (lastGuest !== null) {
        guestList.removeChild(lastGuest);
      } else {
        alert("No guest to remove.");
      }
    }
  </script>
@endsection

<!-- Mirrored from themezhub.net/geotrip-live/geotrip/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jan 2024 08:21:45 GMT -->
</html>