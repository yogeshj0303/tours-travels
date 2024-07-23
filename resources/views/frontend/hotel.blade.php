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
								<h1 class="xl-heading text-light">Hotel</h1>
								<p class="text-light">Cicero famously orated against his political opponent Lucius Sergius Catilina.
									Occasionally the first Oration against Catiline is taken for type specimens</p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- ============================ Booking Title ================================== -->
		<div class="py-5 bg-primary position-relative my-3">
			<div class="container">

				<!-- Search Form -->
				<div class="row justify-content-center align-items-center">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
						<div class="search-wrap position-relative">
							<div class="row align-items-end gy-3 gx-md-3 gx-sm-2">

								<div class="col-xl-8 col-lg-7 col-md-12">
									<div class="row gy-3 gx-md-3 gx-sm-2">
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
											<div class="form-group hdd-arrow mb-0">
												<label class="text-light text-uppercase opacity-75">Pickup Location</label>
												<select class="pickup form-control fw-bold">
												<option value="">Select</option>
															  <option value="ny">Delhi</option>
															  <option value="sd">Varanasi</option>
															  <option value="sj">Lucknow</option>
															  <option value="ph">Mumbai</option>
															  <option value="nl">Agra</option>
															  <option value="sf">Rajsthan</option>
															  <option value="hu">Gujrat</option>
															  <option value="sa">Uttarakhand</option>
												</select>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
											<div class="form-group mb-0">
												<label class="text-light text-uppercase opacity-75">Select Date</label>
												<input type="text" class="form-control fw-bold" placeholder="Check-In & Check-Out"
													id="checkinout" readonly="readonly">
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-5 col-md-12">
									<div class="row align-items-end gy-3 gx-md-3 gx-sm-2">
										<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
											<div class="form-group mb-0">
												<label class="text-light text-uppercase opacity-75">Guests &amp; Rooms</label>
												<div class="booking-form__input guests-input mixer-auto">
													<button name="guests-btn" id="guests-input-btn" class="open">1 Adults</button>
													<div class="guests-input__options open" id="guests-input-options">
														<div>
															<span class="guests-input__ctrl minus disabled" id="adults-subs-btn"><i class="fa-solid fa-minus"></i></span>
															<span class="guests-input__value"><span id="guests-count-adults">1</span>Adults</span>
															<span class="guests-input__ctrl plus" id="adults-add-btn"><i class="fa-solid fa-plus"></i></span>
														</div>
														<div>
															<span class="guests-input__ctrl minus disabled" id="children-subs-btn"><i class="fa-solid fa-minus"></i></span>
															<span class="guests-input__value"><span id="guests-count-children">0</span>Children</span>
															<span class="guests-input__ctrl plus" id="children-add-btn"><i class="fa-solid fa-plus"></i></span>
														</div>
														<div>
															<span class="guests-input__ctrl minus disabled" id="room-subs-btn"><i class="fa-solid fa-minus"></i></span>
															<span class="guests-input__value"><span id="guests-count-room">0</span>Rooms</span>
															<span class="guests-input__ctrl plus" id="room-add-btn"><i class="fa-solid fa-plus"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
											<div class="form-group mb-0">
												<button type="button" class="btn btn-whites text-primary full-width fw-medium"><i class="fa-solid fa-magnifying-glass me-2"></i>Search</button>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<!-- </row> -->

			</div>
		</div>


		<section class="gray-simple">
			<div class="container">
				<div class="row justify-content-between gy-4 gx-lg-4 gx-md-3 gx-4">

					<!-- Sidebar Filter -->
					<div class="col-xl-3 col-lg-4 col-md-12">
						<div class="filter-searchBar bg-white rounded-3">
							<div class="filter-searchBar-head border-bottom">
								<div class="searchBar-headerBody d-flex align-items-start justify-content-between px-3 py-3">
									<div class="searchBar-headerfirst">
										<h6 class="fw-bold fs-5 m-0">Filters</h6>
										<p class="text-md text-muted m-0">Showing 180 Hotels</p>
									</div>
									<div class="searchBar-headerlast text-end">
										<a href="#" class="text-md fw-medium text-primary active">Clear All</a>
									</div>
								</div>
							</div>

							<div class="filter-searchBar-body">


								<!-- Bed types -->
								<div class="searchBar-single px-3 py-3 border-bottom">
									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Bed Type</h6>
									</div>
									<div class="searchBar-single-wrap">
										<ul class="row align-items-center justify-content-between p-0 gx-3 gy-2 mb-0">
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="doublebed">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="doublebed">1 Double
													Bed</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="2bed">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="2bed">2 Beds</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="singlebed">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="singlebed">1 Single
													Bed</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="3beds">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="3beds">3
													Beds</label>
											</li>
											
										</ul>
									</div>

								</div>

								<!-- Popular Filters -->
								<div class="searchBar-single px-3 py-3 border-bottom">
									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Popular Filters</h6>
									</div>
									<div class="searchBar-single-wrap">
										<ul class="row align-items-center justify-content-between p-0 gx-3 gy-2 mb-0">
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="fsq">
													<label class="form-check-label" for="fsq">Free Cancellation Available</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="bk1">
													<label class="form-check-label" for="bk1">Book @ ₹1</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="payh">
													<label class="form-check-label" for="payh">Pay At Hotel Available</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="brks">
													<label class="form-check-label" for="brks">Free Breakfast Included</label>
												</div>
											</li>
										</ul>
									</div>

								</div>

								<!-- Pricing -->
								<div class="searchBar-single px-3 py-3 border-bottom">
									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Pricing Range in Rs</h6>
									</div>
									<div class="searchBar-single-wrap">
									<div class="searchBar-single-wrap">
										<span class="irs-max" style="visibility: visible;">1 000</span><span class="irs-from" style="visibility: visible; left: 19.9016%;">245</span><span class="irs-to" style="visibility: visible; left: 63.0271%;">703</span><span class="irs-single" style="visibility: hidden; left: 33.227%;">245 — 703</span></span><span class="irs-grid"></span><span class="irs-bar" style="left: 25.9891%; width: 43.1255%;"></span><span class="irs-shadow shadow-from" style="display: none;"></span><span class="irs-shadow shadow-to" style="display: none;"></span><span class="irs-handle from" style="left: 23.0693%;"><i></i><i></i><i></i></span><span class="irs-handle to type_last" style="left: 66.1949%;"><i></i><i></i><i></i></span></span><input type="text" class="js-range-slider irs-hidden-input" name="my_range" value="" data-skin="round" data-type="double" data-min="0" data-max="1000" data-grid="false" tabindex="-1" readonly="" hidden>
									</div>
									</div>
								</div>

								<!-- Customer Ratings -->
								<div class="searchBar-single px-3 py-3 border-bottom">
									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Customer Ratings</h6>
									</div>
									<div class="searchBar-single-wrap">
										<ul class="row align-items-center justify-content-between p-0 gx-3 gy-2 mb-0">
											<li class="col-12">
												<div class="form-check lg">
													<div class="frm-slicing d-flex align-items-center">
														<div class="frm-slicing-first">
															<input class="form-check-input" type="checkbox" id="fourfive">
															<label class="form-check-label" for="fourfive"></label>
														</div>
														<div class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
															<div class="frms-flex d-flex align-items-center">
																<div class="frm-slicing-ico text-md">
																	<i class="fa fa-star text-warning"></i>
																</div>
																<div class="frm-slicing-title ps-1"><span class="text-dark fw-bold">4.5+</span></div>
															</div>
															<div class="text-end"><span class="text-md text-muted-2 opacity-75">16</span></div>
														</div>
													</div>

												</div>
											</li>
											<li class="col-12">
												<div class="form-check lg">
													<div class="frm-slicing d-flex align-items-center">
														<div class="frm-slicing-first">
															<input class="form-check-input" type="checkbox" id="fourplus">
															<label class="form-check-label" for="fourplus"></label>
														</div>
														<div class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
															<div class="frms-flex d-flex align-items-center">
																<div class="frm-slicing-ico text-md">
																	<i class="fa fa-star text-warning"></i>
																</div>
																<div class="frm-slicing-title ps-1"><span class="text-dark fw-bold">4+</span></div>
															</div>
															<div class="text-end"><span class="text-md text-muted-2 opacity-75">10</span></div>
														</div>
													</div>

												</div>
											</li>
											<li class="col-12">
												<div class="form-check lg">
													<div class="frm-slicing d-flex align-items-center">
														<div class="frm-slicing-first">
															<input class="form-check-input" type="checkbox" id="threefive">
															<label class="form-check-label" for="threefive"></label>
														</div>
														<div class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
															<div class="frms-flex d-flex align-items-center">
																<div class="frm-slicing-ico text-md">
																	<i class="fa fa-star text-warning"></i>
																</div>
																<div class="frm-slicing-title ps-1"><span class="text-dark fw-bold">3.5+</span></div>
															</div>
															<div class="text-end"><span class="text-md text-muted-2 opacity-75">08</span></div>
														</div>
													</div>

												</div>
											</li>
											<li class="col-12">
												<div class="form-check lg">
													<div class="frm-slicing d-flex align-items-center">
														<div class="frm-slicing-first">
															<input class="form-check-input" type="checkbox" id="threeplus">
															<label class="form-check-label" for="threeplus"></label>
														</div>
														<div class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
															<div class="frms-flex d-flex align-items-center">
																<div class="frm-slicing-ico text-md">
																	<i class="fa fa-star text-warning"></i>
																</div>
																<div class="frm-slicing-title ps-1"><span class="text-dark fw-bold">3+</span></div>
															</div>
															<div class="text-end"><span class="text-md text-muted-2 opacity-75">26</span></div>
														</div>
													</div>

												</div>
											</li>
										</ul>
									</div>

								</div>

								<!-- Star Ratings -->
							

								<!-- Amenities -->
								<div class="searchBar-single px-3 py-3 border-bottom">
									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Amenities</h6>
									</div>
									<div class="searchBar-single-wrap">
										<ul class="row align-items-center justify-content-between p-0 gx-3 gy-2 mb-0">
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="wififree">
													<label class="form-check-label" for="wififree">Free Wifi</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="bkrsdt">
													<label class="form-check-label" for="bkrsdt">4 Breakfast included</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="pool">
													<label class="form-check-label" for="pool">Pool</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="parking">
													<label class="form-check-label" for="parking">Free Parking</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="acrion">
													<label class="form-check-label" for="acrion">Air Conditioning</label>
												</div>
											</li>
										</ul>
									</div>

								</div>

								<!-- Popular Filters -->
								<div class="searchBar-single px-3 py-3">
									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Fun things To Do</h6>
									</div>
									<div class="searchBar-single-wrap">
										<ul class="row align-items-center justify-content-between p-0 gx-3 gy-2 mb-0">
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="beach">
													<label class="form-check-label" for="beach">Beach</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="ftns">
													<label class="form-check-label" for="ftns">Fitness center</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="cylc">
													<label class="form-check-label" for="cylc">Cycling</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="anms">
													<label class="form-check-label" for="anms">Animation Show</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="shpc">
													<label class="form-check-label" for="shpc">Shopping center</label>
												</div>
											</li>
										</ul>
									</div>

								</div>

							</div>
						</div>
					</div>


					<!-- All List -->
					<div class="col-xl-9 col-lg-8 col-md-12">

						<div class="row align-items-center justify-content-between">
							<div class="col-xl-4 col-lg-4 col-md-4">
								<h5 class="fw-bold fs-6 mb-lg-0 mb-3">Showing 280 Search Results</h5>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-12">
								<div class="d-flex align-items-center justify-content-start justify-content-lg-end flex-wrap">
									<div class="flsx-first me-2">
										<div class="bg-white rounded py-2 px-3">
											
										</div>
									</div>
									<div class="flsx-first mt-sm-0 mt-2">
									
									</div>
								</div>
							</div>
						</div>

						<div class="row align-items-center g-4 mt-2">

							<!-- Single List -->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card list-layout-block rounded-3 p-3">
									<div class="row">
                                        
										<div class="col-xl-4 col-lg-3 col-md">
										<a href="{{url('hotel-detail')}}">
											<div class="cardImage__caps rounded-2 overflow-hidden h-100">
												<img class="img-fluid h-100 object-fit" src="assets/img/hotel/hotel1.jpg" alt="image">
											</div></a>
										</div>

										<div class="col-xl col-lg col-md">
											<div class="listLayout_midCaps mt-md-0 mt-3 mb-md-0 mb-3">
												<h4 class="fs-5 fw-bold mb-1">Hotel Chancellor@Orchard</h4>
												
												<div class="detail ellipsis-container mt-3">
													<span class="ellipsis">Manual</span>
													<span class="ellipsis">1 Large Bag</span>
													<span class="ellipsis">1 Small Bag</span>
													<span class="ellipsis">Disel</span>
												</div>
												<div class="position-relative mt-3">
													<div class="fw-medium text-dark">Standard Twin Double Room</div>
													<div class="text-md text-muted">Free waiting up to 45 minutes</div>
                                                    <a href="cardetail.php" class="text-md text-dark">Read More</a>
												</div>
												<div class="position-relative mt-4">
													<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
															Cancellation, till 1 hour of Pick up</span></div>
													<div class="text-md">
														
													</div>
												</div>
											</div>
										</div>

										<div
											class="col-xl-auto col-lg-auto col-md-auto text-right text-md-left d-flex align-items-start align-items-md-end flex-column">
											<div class="row align-items-center justify-content-start justify-content-md-end gx-2 mb-3">
												<div class="col-auto text-start text-md-end">
													<div class="text-md text-dark fw-medium">Exceptional</div>
													<div class="text-md text-muted-2">3,014 reviews</div>
												</div>
												<div class="col-auto">
													<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
												</div>
											</div>

											<div class="position-relative mt-auto full-width">
												<div class="d-flex align-items-center justify-content-start justify-content-md-end mb-1">
													
												</div>
												<div class="d-flex align-items-center justify-content-start justify-content-md-end">
													
													<div class="text-dark fw-bold fs-3">Rs2000</div>
													<del class="mx-3">Rs 2999</del>
													
												</div>
												<div
													class="d-flex align-items-start align-items-md-end justify-content-start justify-content-md-end flex-column mb-2">
													
												</div>
												<div class="d-flex align-items-start align-items-md-end text-start text-md-end flex-row">
                                               
													<a href="{{url('booking-page')}}" class="btn btn-md btn-primary full-width fw-medium px-lg-4">Book Now<i
															class="fa-solid fa-arrow-trend-up ms-2"></i></a>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- /Single List -->

							<!-- Single List -->
                            <div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card list-layout-block rounded-3 p-3">
									<div class="row">

										<div class="col-xl-4 col-lg-3 col-md">
										<a href="{{url('hotel-detail')}}">
											<div class="cardImage__caps rounded-2 overflow-hidden h-100">
												<img class="img-fluid h-100 object-fit" src="assets/img/hotel/hotel1.jpg" alt="image">
											</div></a>
										</div>

										<div class="col-xl col-lg col-md">
											<div class="listLayout_midCaps mt-md-0 mt-3 mb-md-0 mb-3">
												<h4 class="fs-5 fw-bold mb-1">Dorsett Singapore</h4>
												
												<div class="detail ellipsis-container mt-3">
													<span class="ellipsis">Manual</span>
													<span class="ellipsis">1 Large Bag</span>
													<span class="ellipsis">1 Small Bag</span>
													<span class="ellipsis">Disel</span>
												</div>
												<div class="position-relative mt-3">
													<div class="fw-medium text-dark">Standard Twin Double Room</div>
													<div class="text-md text-muted">Free waiting up to 45 minutes</div>
                                                    <a href="cardetail.php" class="text-md text-dark">Read More</a>
												</div>
												<div class="position-relative mt-4">
													<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
															Cancellation, till 1 hour of Pick up</span></div>
													<div class="text-md">
														
													</div>
												</div>
											</div>
										</div>

										<div
											class="col-xl-auto col-lg-auto col-md-auto text-right text-md-left d-flex align-items-start align-items-md-end flex-column">
											<div class="row align-items-center justify-content-start justify-content-md-end gx-2 mb-3">
												<div class="col-auto text-start text-md-end">
													<div class="text-md text-dark fw-medium">Exceptional</div>
													<div class="text-md text-muted-2">3,014 reviews</div>
												</div>
												<div class="col-auto">
													<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
												</div>
											</div>

											<div class="position-relative mt-auto full-width">
												<div class="d-flex align-items-center justify-content-start justify-content-md-end mb-1">
													
												</div>
												<div class="d-flex align-items-center justify-content-start justify-content-md-end">
													
													<div class="text-dark fw-bold fs-3">Rs200</div>
													<del class="mx-3">Rs 2999</del>
												</div>
												<div
													class="d-flex align-items-start align-items-md-end justify-content-start justify-content-md-end flex-column mb-2">
													
												</div>
												<div class="d-flex align-items-start align-items-md-end text-start text-md-end flex-row">
                                               
													<a href="{{url('booking-page')}}" class="btn btn-md btn-primary full-width fw-medium px-lg-4">Book Now<i
															class="fa-solid fa-arrow-trend-up ms-2"></i></a>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- /Single List -->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card list-layout-block rounded-3 p-3">
									<div class="row">

										<div class="col-xl-4 col-lg-3 col-md">
										<a href="{{url('hotel-detail')}}">
											<div class="cardImage__caps rounded-2 overflow-hidden h-100">
												<img class="img-fluid h-100 object-fit" src="assets/img/hotel/hotel1.jpg" alt="image">
											</div></a>
										</div>

										<div class="col-xl col-lg col-md">
											<div class="listLayout_midCaps mt-md-0 mt-3 mb-md-0 mb-3">
												<h4 class="fs-5 fw-bold mb-1">Dorsett Singapore</h4>
												
												<div class="detail ellipsis-container mt-3">
													<span class="ellipsis">Manual</span>
													<span class="ellipsis">1 Large Bag</span>
													<span class="ellipsis">1 Small Bag</span>
													<span class="ellipsis">Disel</span>
												</div>
												<div class="position-relative mt-3">
													<div class="fw-medium text-dark">Standard Twin Double Room</div>
													<div class="text-md text-muted">Free waiting up to 45 minutes</div>
                                                    <a href="cardetail.php" class="text-md text-dark">Read More</a>
												</div>
												<div class="position-relative mt-4">
													<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
															Cancellation, till 1 hour of Pick up</span></div>
													<div class="text-md">
														
													</div>
												</div>
											</div>
										</div>

										<div
											class="col-xl-auto col-lg-auto col-md-auto text-right text-md-left d-flex align-items-start align-items-md-end flex-column">
											<div class="row align-items-center justify-content-start justify-content-md-end gx-2 mb-3">
												<div class="col-auto text-start text-md-end">
													<div class="text-md text-dark fw-medium">Exceptional</div>
													<div class="text-md text-muted-2">3,014 reviews</div>
												</div>
												<div class="col-auto">
													<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
												</div>
											</div>

											<div class="position-relative mt-auto full-width">
												<div class="d-flex align-items-center justify-content-start justify-content-md-end mb-1">
													
												</div>
												<div class="d-flex align-items-center justify-content-start justify-content-md-end">
													
													<div class="text-dark fw-bold fs-3">Rs200</div>
													<del class="mx-3">Rs 2999</del>
												</div>
												<div
													class="d-flex align-items-start align-items-md-end justify-content-start justify-content-md-end flex-column mb-2">
													
												</div>
												<div class="d-flex align-items-start align-items-md-end text-start text-md-end flex-row">
                                               
													<a href="hoteldetail.php" class="btn btn-md btn-primary full-width fw-medium px-lg-4">Book Now<i
															class="fa-solid fa-arrow-trend-up ms-2"></i></a>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>

							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card list-layout-block rounded-3 p-3">
									<div class="row">

										<div class="col-xl-4 col-lg-3 col-md">
										<a href="{{url('hotel-detail')}}">
											<div class="cardImage__caps rounded-2 overflow-hidden h-100">
												<img class="img-fluid h-100 object-fit" src="assets/img/hotel/hotel1.jpg" alt="image">
											</div></a>
										</div>

										<div class="col-xl col-lg col-md">
											<div class="listLayout_midCaps mt-md-0 mt-3 mb-md-0 mb-3">
												<h4 class="fs-5 fw-bold mb-1">Dorsett Singapore</h4>
												
												<div class="detail ellipsis-container mt-3">
													<span class="ellipsis">Manual</span>
													<span class="ellipsis">1 Large Bag</span>
													<span class="ellipsis">1 Small Bag</span>
													<span class="ellipsis">Disel</span>
												</div>
												<div class="position-relative mt-3">
													<div class="fw-medium text-dark">Standard Twin Double Room</div>
													<div class="text-md text-muted">Free waiting up to 45 minutes</div>
                                                    <a href="cardetail.php" class="text-md text-dark">Read More</a>
												</div>
												<div class="position-relative mt-4">
													<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
															Cancellation, till 1 hour of Pick up</span></div>
													<div class="text-md">
														
													</div>
												</div>
											</div>
										</div>

										<div
											class="col-xl-auto col-lg-auto col-md-auto text-right text-md-left d-flex align-items-start align-items-md-end flex-column">
											<div class="row align-items-center justify-content-start justify-content-md-end gx-2 mb-3">
												<div class="col-auto text-start text-md-end">
													<div class="text-md text-dark fw-medium">Exceptional</div>
													<div class="text-md text-muted-2">3,014 reviews</div>
												</div>
												<div class="col-auto">
													<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
												</div>
											</div>

											<div class="position-relative mt-auto full-width">
												<div class="d-flex align-items-center justify-content-start justify-content-md-end mb-1">
													
												</div>
												<div class="d-flex align-items-center justify-content-start justify-content-md-end">
													
													<div class="text-dark fw-bold fs-3">Rs200</div>
													<del class="mx-3">Rs 2999</del>
												</div>
												<div
													class="d-flex align-items-start align-items-md-end justify-content-start justify-content-md-end flex-column mb-2">
													
												</div>
												<div class="d-flex align-items-start align-items-md-end text-start text-md-end flex-row">
                                               
													<a href="{{url('booking-page')}}" class="btn btn-md btn-primary full-width fw-medium px-lg-4">Book Now<i
															class="fa-solid fa-arrow-trend-up ms-2"></i></a>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>

							<div class="col-xl-12 col-lg-12 col-12">
								<div class="pags card py-2 px-5">
									<nav aria-label="Page navigation example">
										<ul class="pagination m-0 p-0">
											<li class="page-item">
												<a class="page-link" href="#" aria-label="Previous">
													<span aria-hidden="true"><i class="fa-solid fa-arrow-left-long"></i></span>
												</a>
											</li>
											<li class="page-item active"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item">
												<a class="page-link" href="#" aria-label="Next">
													<span aria-hidden="true"><i class="fa-solid fa-arrow-right-long"></i></span>
												</a>
											</li>
										</ul>
									</nav>
								</div>
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