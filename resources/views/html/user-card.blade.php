<!DOCTYPE html>
<html lang="en">
<head>
	@include('html.layouts.head')
	@include('html.layouts.head-bottom-link')
</head>
@include('html.layouts.layout-vertical')
<!-- [ Main Content ] start -->
<div class="pc-container">
	<div class="pcoded-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5>User card</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
							<li class="breadcrumb-item"><a href="#!">Advance Components</a></li>
							<li class="breadcrumb-item">User card</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->
		<div class="row">
			<div class="col-sm-12">
				<ul class="nav nav-pills mb-4" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active text-uppercase" id="user1-tab" data-bs-toggle="tab" href="#user1" role="tab" aria-controls="user1" aria-selected="true">Simple</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-uppercase" id="user2-tab" data-bs-toggle="tab" href="#user2" role="tab" aria-controls="user2" aria-selected="false">Clip image</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-uppercase" id="user3-tab" data-bs-toggle="tab" href="#user3" role="tab" aria-controls="user3" aria-selected="false">Footer</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-uppercase" id="user4-tab" data-bs-toggle="tab" href="#user4" role="tab" aria-controls="user4" aria-selected="false">Social</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-uppercase" id="user5-tab" data-bs-toggle="tab" href="#user5" role="tab" aria-controls="user5" aria-selected="false">Other</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<!-- [ user card1 ] start -->
					<div class="tab-pane fade show active" id="user1" role="tabpanel" aria-labelledby="user1-tab">
						<div class="row mb-n4">
							<div class="col-xl-4 col-md-6">
								<h6 class="text-center mb-3">Simple</h6>
								<div class="card user-card user-card-1">
									<div class="card-header border-0 p-2 pb-0">
										<div class="cover-img-block">
											<img src="assets/images/widget/slider5.jpg" alt="" class="img-fluid">
										</div>
									</div>
									<div class="card-body pt-0">
										<div class="user-about-block text-center">
											<div class="row align-items-end">
												<div class="col"></div>
												<div class="col"><img class="img-radius img-fluid wid-80" src="assets/images/user/avatar-2.jpg" alt="User image"></div>
												<div class="col"></div>
											</div>
										</div>
										<div class="text-center">
											<h6 class="mb-1 mt-3">Josephin Doe</h6>
											<p class="mb-3 text-muted">UI/UX Designer</p>
											<p class="mb-1">Lorem Ipsum is simply dummy text</p>
											<p class="mb-0">been the industry's standard</p>
										</div>
										<hr class="wid-80 pt-1 mx-auto my-4">
										<div class="row text-center">
											<div class="col">
												<h6 class="mb-1">37</h6>
												<p class="mb-0">Mails</p>
											</div>
											<div class="col">
												<h6 class="mb-1">2749</h6>
												<p class="mb-0">Followers</p>
											</div>
											<div class="col">
												<h6 class="mb-1">678</h6>
												<p class="mb-0">Following</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6">
								<h6 class="text-center mb-3">With option</h6>
								<div class="card user-card user-card-1">
									<div class="card-header border-0 p-2 pb-0">
										<div class="cover-img-block">
											<img src="assets/images/widget/slider7.jpg" alt="" class="img-fluid">
										</div>
									</div>
									<div class="card-body pt-0">
										<div class="user-about-block text-center">
											<div class="row align-items-end">
												<div class="col  pb-3"><a href="#!"><i class="icon feather icon-star text-muted f-20"></i></a></div>
												<div class="col"><img class="img-radius img-fluid wid-80" src="assets/images/user/avatar-1.jpg" alt="User image"></div>
												<div class="col text-end pb-3">
													<div class="dropdown">
														<a class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Action</a>
															<a class="dropdown-item" href="#">Another action</a>
															<a class="dropdown-item" href="#">Something else here</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="text-center">
											<h6 class="mb-1 mt-3">Lary Doe</h6>
											<p class="mb-3 text-muted">UI/UX Designer</p>
											<p class="mb-1">Lorem Ipsum is simply dummy text</p>
											<p class="mb-0">been the industry's standard</p>
										</div>
										<hr class="wid-80 pt-1 mx-auto my-4">
										<div class="row text-center">
											<div class="col">
												<h6 class="mb-1">37</h6>
												<p class="mb-0">Mails</p>
											</div>
											<div class="col">
												<h6 class="mb-1">2749</h6>
												<p class="mb-0">Followers</p>
											</div>
											<div class="col">
												<h6 class="mb-1">678</h6>
												<p class="mb-0">Following</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6">
								<h6 class="text-center mb-3">Option selected</h6>
								<div class="card user-card user-card-1">
									<div class="card-header border-0 p-2 pb-0">
										<div class="cover-img-block">
											<img src="assets/images/widget/slider6.jpg" alt="" class="img-fluid">
										</div>
									</div>
									<div class="card-body pt-0">
										<div class="user-about-block text-center">
											<div class="row align-items-end">
												<div class="col  pb-3"><a href="#!"><i class="icon feather icon-star-on text-warning f-20"></i></a></div>
												<div class="col"><img class="img-radius img-fluid wid-80" src="assets/images/user/avatar-3.jpg" alt="User image"></div>
												<div class="col text-end pb-3">
													<div class="dropdown">
														<a class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Action</a>
															<a class="dropdown-item" href="#">Another action</a>
															<a class="dropdown-item" href="#">Something else here</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="text-center">
											<h6 class="mb-1 mt-3">Sara Soudein</h6>
											<p class="mb-3 text-muted">UI/UX Designer</p>
											<p class="mb-1">Lorem Ipsum is simply dummy text</p>
											<p class="mb-0">been the industry's standard</p>
										</div>
										<hr class="wid-80 pt-1 mx-auto my-4">
										<div class="row text-center">
											<div class="col">
												<h6 class="mb-1">37</h6>
												<p class="mb-0">Mails</p>
											</div>
											<div class="col">
												<h6 class="mb-1">2749</h6>
												<p class="mb-0">Followers</p>
											</div>
											<div class="col">
												<h6 class="mb-1">678</h6>
												<p class="mb-0">Following</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6">
								<h6 class="text-center mb-3">Slider</h6>
								<div class="card user-card user-card-1">
									<div class="card-header border-0 p-2 pb-0">
										<div class="cover-img-block">
											<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
												<div class="carousel-inner">
													<div class="carousel-item active">
														<img src="assets/images/widget/slider5.jpg" alt="" class="img-fluid">
													</div>
													<div class="carousel-item">
														<img src="assets/images/widget/slider6.jpg" alt="" class="img-fluid">
													</div>
													<div class="carousel-item">
														<img src="assets/images/widget/slider7.jpg" alt="" class="img-fluid">
													</div>
												</div>
												<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span></a>
												<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span></a>
											</div>
										</div>
									</div>
									<div class="card-body pt-0">
										<div class="user-about-block text-center">
											<div class="row align-items-end">
												<div class="col  pb-3"><a href="#!"><i class="icon feather icon-star text-muted f-20"></i></a></div>
												<div class="col"><img class="img-radius img-fluid wid-80" src="assets/images/user/avatar-4.jpg" alt="User image"></div>
												<div class="col text-end pb-3">
													<div class="dropdown">
														<a class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Action</a>
															<a class="dropdown-item" href="#">Another action</a>
															<a class="dropdown-item" href="#">Something else here</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="text-center">
											<h6 class="mb-1 mt-3">Joseph William</h6>
											<p class="mb-3 text-muted">UI/UX Designer</p>
											<p class="mb-1">Lorem Ipsum is simply dummy text</p>
											<p class="mb-0">been the industry's standard</p>
										</div>
										<hr class="wid-80 pt-1 mx-auto my-4">
										<div class="row text-center">
											<div class="col">
												<h6 class="mb-1">37</h6>
												<p class="mb-0">Mails</p>
											</div>
											<div class="col">
												<h6 class="mb-1">2749</h6>
												<p class="mb-0">Followers</p>
											</div>
											<div class="col">
												<h6 class="mb-1">678</h6>
												<p class="mb-0">Following</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6">
								<h6 class="text-center mb-3">Certificated badge</h6>
								<div class="card user-card user-card-1">
									<div class="card-header border-0 p-2 pb-0">
										<div class="cover-img-block">
											<img src="assets/images/widget/slider6.jpg" alt="" class="img-fluid">
										</div>
									</div>
									<div class="card-body pt-0">
										<div class="user-about-block text-center">
											<div class="row align-items-end">
												<div class="col  pb-3"><a href="#!"><i class="icon feather icon-star-on text-warning f-20"></i></a></div>
												<div class="col">
													<div class="position-relative d-inline-block">
														<img class="img-radius img-fluid wid-80" src="assets/images/user/avatar-5.jpg" alt="User image">
														<div class="certificated-badge">
															<i class="fas fa-certificate text-primary bg-icon"></i>
															<i class="fas fa-check front-icon text-white"></i>
														</div>
													</div>
												</div>
												<div class="col text-end pb-3">
													<div class="dropdown">
														<a class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Action</a>
															<a class="dropdown-item" href="#">Another action</a>
															<a class="dropdown-item" href="#">Something else here</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="text-center">
											<h6 class="mb-1 mt-3">Suzen</h6>
											<p class="mb-3 text-muted">UI/UX Designer</p>
											<p class="mb-1">Lorem Ipsum is simply dummy text</p>
											<p class="mb-0">been the industry's standard</p>
										</div>
										<hr class="wid-80 pt-1 mx-auto my-4">
										<div class="row text-center">
											<div class="col">
												<h6 class="mb-1">37</h6>
												<p class="mb-0">Mails</p>
											</div>
											<div class="col">
												<h6 class="mb-1">2749</h6>
												<p class="mb-0">Followers</p>
											</div>
											<div class="col">
												<h6 class="mb-1">678</h6>
												<p class="mb-0">Following</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6">
								<h6 class="text-center mb-3">Hover data</h6>
								<div class="card user-card user-card-1">
									<div class="card-header border-0 p-2 pb-0">
										<div class="cover-img-block">
											<img src="assets/images/widget/slider7.jpg" alt="" class="img-fluid">
										</div>
									</div>
									<div class="card-body pt-0">
										<div class="user-about-block text-center">
											<div class="row align-items-end">
												<div class="col"></div>
												<div class="col">
													<div class="position-relative d-inline-block">
														<img class="img-radius img-fluid wid-80" src="assets/images/user/avatar-1.jpg" alt="User image">
													</div>
												</div>
												<div class="col"></div>
											</div>
										</div>
										<div class="text-center">
											<h6 class="mb-1 mt-3">John Doe</h6>
											<p class="mb-3 text-muted">UI/UX Designer</p>
											<p class="mb-1">Lorem Ipsum is simply dummy text</p>
											<p class="mb-0">been the industry's standard</p>
										</div>
										<hr class="wid-80 pt-1 mx-auto my-4">
										<div class="row text-center">
											<div class="col">
												<h6 class="mb-1">37</h6>
												<p class="mb-0">Mails</p>
											</div>
											<div class="col">
												<h6 class="mb-1">2749</h6>
												<p class="mb-0">Followers</p>
											</div>
											<div class="col">
												<h6 class="mb-1">678</h6>
												<p class="mb-0">Following</p>
											</div>
										</div>
									</div>
									<div class="card-body hover-data text-white">
										<div class="">
											<h4 class="text-white">Hire Me?</h4>
											<p class="mb-1">Lorem Ipsum is simply dummy text</p>
											<p class="mb-3">been the industry's standard</p>
											<button type="button" class="btn  btn-warning"><i class="feather icon-link"></i> Meating</button>
											<button type="button" class="btn  btn-danger"><i class="feather icon-download"></i> Resume</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- [ user card1 ] end -->
					<!-- varient [ 2 ][ cover shape ] card Start -->
					<div class="tab-pane fade" id="user2" role="tabpanel" aria-labelledby="user2-tab">
						<div class="row mb-n4">
							<div class="col-xl-4 col-md-6">
								<h6 class="text-center mb-3">Left</h6>
								<div class="card user-card user-card-2 shape-left">
									<div class="card-header border-0 p-2 pb-0">
										<div class="cover-img-block">
											<img src="assets/images/widget/slider5.jpg" alt="" class="img-fluid">
										</div>
									</div>
									<div class="card-body pt-0">
										<div class="user-about-block text-center">
											<div class="row align-items-end">
												<div class="col  pb-3"><a href="#!"><i class="icon feather icon-star-on text-warning f-20"></i></a></div>
												<div class="col">
													<div class="position-relative d-inline-block">
														<img class="img-radius img-fluid wid-80" src="assets/images/user/avatar-1.jpg" alt="User image">
														<div class="certificated-badge">
															<i class="fas fa-certificate text-primary bg-icon"></i>
															<i class="fas fa-check front-icon text-white"></i>
														</div>
													</div>
												</div>
												<div class="col text-end pb-3">
													<div class="dropdown">
														<a class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Action</a>
															<a class="dropdown-item" href="#">Another action</a>
															<a class="dropdown-item" href="#">Something else here</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="text-center">
											<h6 class="mb-1 mt-3">Lary Doe</h6>
											<p class="mb-3 text-muted">UI/UX Designer</p>
											<p class="mb-1">Lorem Ipsum is simply dummy text</p>
											<p class="mb-0">been the industry's standard</p>
										</div>
										<hr class="wid-80 pt-1 mx-auto my-4">
										<div class="row text-center">
											<div class="col">
												<h6 class="mb-1">37</h6>
												<p class="mb-0">Mails</p>
											</div>
											<div class="col">
												<h6 class="mb-1">2749</h6>
												<p class="mb-0">Followers</p>
											</div>
											<div class="col">
												<h6 class="mb-1">678</h6>
												<p class="mb-0">Following</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6">
								<h6 class="text-center mb-3">Center</h6>
								<div class="card user-card user-card-2 shape-center">
									<div class="card-header border-0 p-2 pb-0">
										<div class="cover-img-block">
											<img src="assets/images/widget/slider6.jpg" alt="" class="img-fluid">
										</div>
									</div>
									<div class="card-body pt-0">
										<div class="user-about-block text-center">
											<div class="row align-items-end">
												<div class="col  pb-3"><a href="#!"><i class="icon feather icon-star-on text-warning f-20"></i></a></div>
												<div class="col">
													<div class="position-relative d-inline-block">
														<img class="img-radius img-fluid wid-80" src="assets/images/user/avatar-2.jpg" alt="User image">
														<div class="certificated-badge">
															<i class="fas fa-certificate text-primary bg-icon"></i>
															<i class="fas fa-check front-icon text-white"></i>
														</div>
													</div>
												</div>
												<div class="col text-end pb-3">
													<div class="dropdown">
														<a class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Action</a>
															<a class="dropdown-item" href="#">Another action</a>
															<a class="dropdown-item" href="#">Something else here</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="text-center">
											<h6 class="mb-1 mt-3">Josephin Doe</h6>
											<p class="mb-3 text-muted">UI/UX Designer</p>
											<p class="mb-1">Lorem Ipsum is simply dummy text</p>
											<p class="mb-0">been the industry's standard</p>
										</div>
										<hr class="wid-80 pt-1 mx-auto my-4">
										<div class="row text-center">
											<div class="col">
												<h6 class="mb-1">37</h6>
												<p class="mb-0">Mails</p>
											</div>
											<div class="col">
												<h6 class="mb-1">2749</h6>
												<p class="mb-0">Followers</p>
											</div>
											<div class="col">
												<h6 class="mb-1">678</h6>
												<p class="mb-0">Following</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6">
								<h6 class="text-center mb-3">Right</h6>
								<div class="card user-card user-card-2 shape-right">
									<div class="card-header border-0 p-2 pb-0">
										<div class="cover-img-block">
											<img src="assets/images/widget/slider7.jpg" alt="" class="img-fluid">
										</div>
									</div>
									<div class="card-body pt-0">
										<div class="user-about-block text-center">
											<div class="row align-items-end">
												<div class="col  pb-3"><a href="#!"><i class="icon feather icon-star-on text-warning f-20"></i></a></div>
												<div class="col">
													<div class="position-relative d-inline-block">
														<img class="img-radius img-fluid wid-80" src="assets/images/user/avatar-3.jpg" alt="User image">
														<div class="certificated-badge">
															<i class="fas fa-certificate text-primary bg-icon"></i>
															<i class="fas fa-check front-icon text-white"></i>
														</div>
													</div>
												</div>
												<div class="col text-end pb-3">
													<div class="dropdown">
														<a class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Action</a>
															<a class="dropdown-item" href="#">Another action</a>
															<a class="dropdown-item" href="#">Something else here</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="text-center">
											<h6 class="mb-1 mt-3">Sara Soudein</h6>
											<p class="mb-3 text-muted">UI/UX Designer</p>
											<p class="mb-1">Lorem Ipsum is simply dummy text</p>
											<p class="mb-0">been the industry's standard</p>
										</div>
										<hr class="wid-80 pt-1 mx-auto my-4">
										<div class="row text-center">
											<div class="col">
												<h6 class="mb-1">37</h6>
												<p class="mb-0">Mails</p>
											</div>
											<div class="col">
												<h6 class="mb-1">2749</h6>
												<p class="mb-0">Followers</p>
											</div>
											<div class="col">
												<h6 class="mb-1">678</h6>
												<p class="mb-0">Following</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6">
								<h6 class="text-center mb-3">Left slider</h6>
								<div class="card user-card user-card-2 shape-left">
									<div class="card-header border-0 p-2 pb-0">
										<div class="cover-img-block">
											<div id="carouselExampleControls-1" class="carousel slide" data-bs-ride="carousel">
												<div class="carousel-inner">
													<div class="carousel-item active">
														<img src="assets/images/widget/slider5.jpg" alt="" class="img-fluid">
													</div>
													<div class="carousel-item">
														<img src="assets/images/widget/slider6.jpg" alt="" class="img-fluid">
													</div>
													<div class="carousel-item">
														<img src="assets/images/widget/slider7.jpg" alt="" class="img-fluid">
													</div>
												</div>
												<a class="carousel-control-prev" href="#carouselExampleControls-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span></a>
												<a class="carousel-control-next" href="#carouselExampleControls-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span></a>
											</div>
										</div>
									</div>
									<div class="card-body pt-0">
										<div class="user-about-block text-center">
											<div class="row align-items-end">
												<div class="col  pb-3"><a href="#!"><i class="icon feather icon-star-on text-warning f-20"></i></a></div>
												<div class="col">
													<div class="position-relative d-inline-block">
														<img class="img-radius img-fluid wid-80" src="assets/images/user/avatar-4.jpg" alt="User image">
														<div class="certificated-badge">
															<i class="fas fa-certificate text-primary bg-icon"></i>
															<i class="fas fa-check front-icon text-white"></i>
														</div>
													</div>
												</div>
												<div class="col text-end pb-3">
													<div class="dropdown">
														<a class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Action</a>
															<a class="dropdown-item" href="#">Another action</a>
															<a class="dropdown-item" href="#">Something else here</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="text-center">
											<h6 class="mb-1 mt-3">Joseph William</h6>
											<p class="mb-3 text-muted">UI/UX Designer</p>
											<p class="mb-1">Lorem Ipsum is simply dummy text</p>
											<p class="mb-0">been the industry's standard</p>
										</div>
										<hr class="wid-80 pt-1 mx-auto my-4">
										<div class="row text-center">
											<div class="col">
												<h6 class="mb-1">37</h6>
												<p class="mb-0">Mails</p>
											</div>
											<div class="col">
												<h6 class="mb-1">2749</h6>
												<p class="mb-0">Followers</p>
											</div>
											<div class="col">
												<h6 class="mb-1">678</h6>
												<p class="mb-0">Following</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6">
								<h6 class="text-center mb-3">Center slider</h6>
								<div class="card user-card user-card-2 shape-center">
									<div class="card-header border-0 p-2 pb-0">
										<div class="cover-img-block">
											<div id="carouselExampleControls-2" class="carousel slide" data-bs-ride="carousel">
												<div class="carousel-inner">
													<div class="carousel-item active">
														<img src="assets/images/widget/slider7.jpg" alt="" class="img-fluid">
													</div>
													<div class="carousel-item">
														<img src="assets/images/widget/slider6.jpg" alt="" class="img-fluid">
													</div>
													<div class="carousel-item">
														<img src="assets/images/widget/slider5.jpg" alt="" class="img-fluid">
													</div>
												</div>
												<a class="carousel-control-prev" href="#carouselExampleControls-2" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span></a>
												<a class="carousel-control-next" href="#carouselExampleControls-2" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span></a>
											</div>
										</div>
									</div>
									<div class="card-body pt-0">
										<div class="user-about-block text-center">
											<div class="row align-items-end">
												<div class="col  pb-3"><a href="#!"><i class="icon feather icon-star-on text-warning f-20"></i></a></div>
												<div class="col">
													<div class="position-relative d-inline-block">
														<img class="img-radius img-fluid wid-80" src="assets/images/user/avatar-5.jpg" alt="User image">
														<div class="certificated-badge">
															<i class="fas fa-certificate text-primary bg-icon"></i>
															<i class="fas fa-check front-icon text-white"></i>
														</div>
													</div>
												</div>
												<div class="col text-end pb-3">
													<div class="dropdown">
														<a class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Action</a>
															<a class="dropdown-item" href="#">Another action</a>
															<a class="dropdown-item" href="#">Something else here</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="text-center">
											<h6 class="mb-1 mt-3">Suzen</h6>
											<p class="mb-3 text-muted">UI/UX Designer</p>
											<p class="mb-1">Lorem Ipsum is simply dummy text</p>
											<p class="mb-0">been the industry's standard</p>
										</div>
										<hr class="wid-80 pt-1 mx-auto my-4">
										<div class="row text-center">
											<div class="col">
												<h6 class="mb-1">37</h6>
												<p class="mb-0">Mails</p>
											</div>
											<div class="col">
												<h6 class="mb-1">2749</h6>
												<p class="mb-0">Followers</p>
											</div>
											<div class="col">
												<h6 class="mb-1">678</h6>
												<p class="mb-0">Following</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6">
								<h6 class="text-center mb-3">Right slider</h6>
								<div class="card user-card user-card-2 shape-right">
									<div class="card-header border-0 p-2 pb-0">
										<div class="cover-img-block">
											<div id="carouselExampleControls-3" class="carousel slide" data-bs-ride="carousel">
												<div class="carousel-inner">
													<div class="carousel-item active">
														<img src="assets/images/widget/slider6.jpg" alt="" class="img-fluid">
													</div>
													<div class="carousel-item">
														<img src="assets/images/widget/slider5.jpg" alt="" class="img-fluid">
													</div>
													<div class="carousel-item">
														<img src="assets/images/widget/slider7.jpg" alt="" class="img-fluid">
													</div>
												</div>
												<a class="carousel-control-prev" href="#carouselExampleControls-3" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span></a>
												<a class="carousel-control-next" href="#carouselExampleControls-3" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span></a>
											</div>
										</div>
									</div>
									<div class="card-body pt-0">
										<div class="user-about-block text-center">
											<div class="row align-items-end">
												<div class="col  pb-3"><a href="#!"><i class="icon feather icon-star-on text-warning f-20"></i></a></div>
												<div class="col">
													<div class="position-relative d-inline-block">
														<img class="img-radius img-fluid wid-80" src="assets/images/user/avatar-1.jpg" alt="User image">
														<div class="certificated-badge">
															<i class="fas fa-certificate text-primary bg-icon"></i>
															<i class="fas fa-check front-icon text-white"></i>
														</div>
													</div>
												</div>
												<div class="col text-end pb-3">
													<div class="dropdown">
														<a class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Action</a>
															<a class="dropdown-item" href="#">Another action</a>
															<a class="dropdown-item" href="#">Something else here</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="text-center">
											<h6 class="mb-1 mt-3">John Doe</h6>
											<p class="mb-3 text-muted">UI/UX Designer</p>
											<p class="mb-1">Lorem Ipsum is simply dummy text</p>
											<p class="mb-0">been the industry's standard</p>
										</div>
										<hr class="wid-80 pt-1 mx-auto my-4">
										<div class="row text-center">
											<div class="col">
												<h6 class="mb-1">37</h6>
												<p class="mb-0">Mails</p>
											</div>
											<div class="col">
												<h6 class="mb-1">2749</h6>
												<p class="mb-0">Followers</p>
											</div>
											<div class="col">
												<h6 class="mb-1">678</h6>
												<p class="mb-0">Following</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- varient [ 2 ][ cover shape ] card end -->
					<!-- varient [ footer color ] card Start -->
					<div class="tab-pane fade" id="user3" role="tabpanel" aria-labelledby="user3-tab">
						<div class="row mb-n4">
							<div class="col-xl-4 col-md-6">
								<h6 class="text-center mb-3">Footer gray</h6>
								<div class="card user-card user-card-1 support-bar">
									<div class="card-header border-0 p-2 pb-0">
										<div class="cover-img-block">
											<img src="assets/images/widget/slider7.jpg" alt="" class="img-fluid">
										</div>
									</div>
									<div class="card-body pt-0">
										<div class="user-about-block text-center">
											<div class="row align-items-end">
												<div class="col"></div>
												<div class="col">
													<div class="position-relative d-inline-block">
														<img class="img-radius img-fluid wid-80" src="assets/images/user/avatar-1.jpg" alt="User image">
														<div class="certificated-badge">
															<i class="fas fa-certificate text-primary bg-icon"></i>
															<i class="fas fa-check front-icon text-white"></i>
														</div>
													</div>
												</div>
												<div class="col text-end pb-3">
													<div class="dropdown">
														<a class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Action</a>
															<a class="dropdown-item" href="#">Another action</a>
															<a class="dropdown-item" href="#">Something else here</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="text-center">
											<h6 class="mb-1 mt-3">Lary Doe</h6>
											<p class="mb-3 text-muted">UI/UX Designer</p>
											<p class="mb-1">Lorem Ipsum is simply dummy text</p>
											<p class="mb-0">been the industry's standard</p>
										</div>
									</div>
									<div class="card-footer bg-secondary text-white">
										<div class="row text-center">
											<div class="col">
												<h6 class="mb-1 text-white">37</h6>
												<p class="mb-0">Mails</p>
											</div>
											<div class="col">
												<h6 class="mb-1 text-white">2749</h6>
												<p class="mb-0">Followers</p>
											</div>
											<div class="col">
												<h6 class="mb-1 text-white">678</h6>
												<p class="mb-0">Following</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6">
								<h6 class="text-center mb-3">Footer white</h6>
								<div class="card user-card user-card-1 support-bar1">
									<div class="card-header border-0 p-2 pb-0">
										<div class="cover-img-block">
											<img src="assets/images/widget/slider6.jpg" alt="" class="img-fluid">
										</div>
									</div>
									<div class="card-body pt-0">
										<div class="user-about-block text-center">
											<div class="row align-items-end">
												<div class="col"></div>
												<div class="col">
													<div class="position-relative d-inline-block">
														<img class="img-radius img-fluid wid-80" src="assets/images/user/avatar-2.jpg" alt="User image">
													</div>
												</div>
												<div class="col"></div>
											</div>
										</div>
										<div class="text-center">
											<h6 class="mb-1 mt-3">Josephin Doe</h6>
											<p class="mb-3 text-muted">UI/UX Designer</p>
											<p class="mb-1">Lorem Ipsum is simply dummy text</p>
											<p class="mb-0">been the industry's standard</p>
										</div>
									</div>
									<div class="card-footer">
										<div class="row text-center">
											<div class="col">
												<h6 class="mb-1">37</h6>
												<p class="mb-0">Mails</p>
											</div>
											<div class="col">
												<h6 class="mb-1">2749</h6>
												<p class="mb-0">Followers</p>
											</div>
											<div class="col">
												<h6 class="mb-1">678</h6>
												<p class="mb-0">Following</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6">
								<h6 class="text-center mb-3">Social link</h6>
								<div class="card user-card user-card-2 support-bar1 shape-right">
									<div class="card-header border-0 p-2 pb-0">
										<div class="cover-img-block">
											<img src="assets/images/widget/slider5.jpg" alt="" class="img-fluid">
										</div>
									</div>
									<div class="card-body pt-0">
										<div class="user-about-block text-center">
											<div class="row align-items-center">
												<div class="col">
													<div class="row align-items-center">
														<div class="col-auto col pr-0">
															<img class="img-radius img-fluid wid-80" src="assets/images/user/avatar-3.jpg" alt="User image">
														</div>
														<div class="col">
															<h6 class="mb-1">Sara Soudein</h6>
															<p class="mb-0">UI/UX Designer</p>
														</div>
													</div>
												</div>
												<div class="col col-auto">
													<div class="dropdown">
														<a class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Action</a>
															<a class="dropdown-item" href="#">Another action</a>
															<a class="dropdown-item" href="#">Something else here</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="mt-3">
											<p class="mb-1">Lorem Ipsum is simply dummy text</p>
											<p class="mb-0">been the industry's standard</p>
										</div>
										<ul class="list-inline f-20 mt-3 mb-0">
											<li class="list-inline-item"><a href="#!" class="text-facebook"><i class="fab fa-facebook-f"></i></a></li>
											<li class="list-inline-item"><a href="#!" class="text-twitter"><i class="fab fa-twitter"></i></a></li>
											<li class="list-inline-item"><a href="#!" class="text-dribbble"><i class="fab fa-dribbble"></i></a></li>
											<li class="list-inline-item"><a href="#!" class="text-pinterest"><i class="fab fa-pinterest"></i></a></li>
											<li class="list-inline-item"><a href="#!" class="text-youtube"><i class="fab fa-youtube"></i></a></li>
											<li class="list-inline-item"><a href="#!" class="text-googleplus"><i class="fab fa-google-plus-g"></i></a></li>
											<li class="list-inline-item"><a href="#!" class="text-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
										</ul>
									</div>
									<div class="card-footer">
										<div class="row text-center">
											<div class="col">
												<h6 class="mb-1">37</h6>
												<p class="mb-0">Mails</p>
											</div>
											<div class="col">
												<h6 class="mb-1">2749</h6>
												<p class="mb-0">Followers</p>
											</div>
											<div class="col">
												<h6 class="mb-1">678</h6>
												<p class="mb-0">Following</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- varient [ footer color ] card end -->
					<!-- varient [ Profile ] card Start -->
					<div class="tab-pane fade" id="user4" role="tabpanel" aria-labelledby="user4-tab">
						<div class="row mb-n4">
							<div class="col-xl-12">
								<h6 class="text-center mb-3">Social profile</h6>
								<div class="card user-card user-card-2 shape-right">
									<div class="card-header border-0 p-2 pb-0">
										<div class="cover-img-block">
											<img src="assets/images/user/cover.jpg" alt="" class="img-fluid">
											<div class="overlay"></div>
											<div class="change-cover">
												<div class="dropdown">
													<a class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon feather icon-camera"></i></a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#"><i class="feather icon-upload-cloud me-2"></i>upload new</a>
														<a class="dropdown-item" href="#"><i class="feather icon-image me-2"></i>from photos</a>
														<a class="dropdown-item" href="#"><i class="feather icon-film me-2"></i> upload video</a>
														<a class="dropdown-item" href="#"><i class="feather icon-trash-2 me-2"></i>remove</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body pt-0">
										<div class="user-about-block">
											<div class="row align-items-center">
												<div class="col">
													<div class="row align-items-center">
														<div class="col-auto col pr-0">
															<div class="change-profile">
																<div class="dropdown">
																	<a class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		<div class="profile-dp">
																			<img class="img-radius img-fluid wid-100" src="assets/images/user/avatar-1.jpg" alt="User image">
																			<div class="overlay">
																				<span>change</span>
																			</div>
																		</div>
																	</a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="feather icon-upload-cloud me-2"></i>upload new</a>
																		<a class="dropdown-item" href="#"><i class="feather icon-image me-2"></i>from photos</a>
																		<a class="dropdown-item" href="#"><i class="feather icon-shield me-2"></i>Protact</a>
																		<a class="dropdown-item" href="#"><i class="feather icon-trash-2 me-2"></i>remove</a>
																	</div>
																</div>
															</div>
														</div>
														<div class="col">
															<h6 class="mb-1">Lary Doe</h6>
															<p class="mb-0">UI/UX Designer</p>
														</div>
													</div>
												</div>
												<div class="col col-auto">
													<!-- <div class="dropdown">
                                                                        <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                                    </div>
                                                                </div> -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6">
								<h6 class="text-center mb-3">Badge</h6>
								<div class="card user-card user-card-3 support-bar1">
									<div class="card-body ">
										<div class="text-center">
											<div class="position-relative d-inline-block">
												<img class="img-radius img-fluid wid-150" src="assets/images/user/img-avatar-3.jpg" alt="User image">
												<div class="certificated-badge" data-bs-toggle="tooltip" data-bs-placement="right" title="Certificated">
													<i class="fas fa-certificate text-primary bg-icon"></i>
													<i class="fas fa-medal front-icon text-white"></i>
												</div>
											</div>
											<h3 class="mb-1 mt-3 f-w-400">Joseph William</h3>
											<p class="mb-3 text-muted">UI/UX Designer</p>
										</div>
									</div>
									<div class="card-footer bg-light">
										<div class="row text-center">
											<div class="col">
												<h6 class="mb-1">37</h6>
												<p class="mb-0">Mails</p>
											</div>
											<div class="col">
												<h6 class="mb-1">2749</h6>
												<p class="mb-0">Followers</p>
											</div>
											<div class="col">
												<h6 class="mb-1">678</h6>
												<p class="mb-0">Following</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6">
								<h6 class="text-center mb-3">Social link 1</h6>
								<div class="card user-card user-card-3 support-bar1">
									<div class="card-body ">
										<div class="text-center">
											<img class="img-radius img-fluid wid-150" src="assets/images/user/img-avatar-1.jpg" alt="User image">
											<h3 class="mb-1 mt-3 f-w-400">Sara Soudein</h3>
											<p class="mb-3 text-muted">UI/UX Designer</p>
											<ul class="list-inline f-20 mt-3 mb-0">
												<li class="list-inline-item"><a href="#!" class="text-facebook"><i class="fab fa-facebook-f"></i></a></li>
												<li class="list-inline-item"><a href="#!" class="text-twitter"><i class="fab fa-twitter"></i></a></li>
												<li class="list-inline-item"><a href="#!" class="text-dribbble"><i class="fab fa-dribbble"></i></a></li>
												<li class="list-inline-item"><a href="#!" class="text-pinterest"><i class="fab fa-pinterest"></i></a></li>
												<li class="list-inline-item"><a href="#!" class="text-youtube"><i class="fab fa-youtube"></i></a></li>
												<li class="list-inline-item"><a href="#!" class="text-googleplus"><i class="fab fa-google-plus-g"></i></a></li>
												<li class="list-inline-item"><a href="#!" class="text-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="card-footer bg-light">
										<div class="row text-center">
											<div class="col">
												<h6 class="mb-1">37</h6>
												<p class="mb-0">Mails</p>
											</div>
											<div class="col">
												<h6 class="mb-1">2749</h6>
												<p class="mb-0">Followers</p>
											</div>
											<div class="col">
												<h6 class="mb-1">678</h6>
												<p class="mb-0">Following</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6">
								<h6 class="text-center mb-3">Social link 2 on hover</h6>
								<div class="card user-card user-card-3 social-hover support-bar1">
									<div class="card-body">
										<div class="text-center">
											<img class="img-radius img-fluid wid-150" src="assets/images/user/img-avatar-3.jpg" alt="User image">
											<h3 class="mb-1 mt-3 f-w-400">Suzen</h3>
											<p class="mb-3 text-muted">UI/UX Designer</p>
											<ul class="list-unstyled f-20 mb-0 social-top-link">
												<li class="list-item"><a href="#!" class="text-facebook"><i class="fab fa-facebook-f"></i></a></li>
												<li class="list-item"><a href="#!" class="text-twitter"><i class="fab fa-twitter"></i></a></li>
												<li class="list-item"><a href="#!" class="text-dribbble"><i class="fab fa-dribbble"></i></a></li>
												<li class="list-item"><a href="#!" class="text-pinterest"><i class="fab fa-pinterest"></i></a></li>
												<li class="list-item"><a href="#!" class="text-youtube"><i class="fab fa-youtube"></i></a></li>
												<li class="list-item"><a href="#!" class="text-googleplus"><i class="fab fa-google-plus-g"></i></a></li>
												<li class="list-item"><a href="#!" class="text-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="card-footer bg-light">
										<div class="row text-center">
											<div class="col">
												<h6 class="mb-1">37</h6>
												<p class="mb-0">Mails</p>
											</div>
											<div class="col">
												<h6 class="mb-1">2749</h6>
												<p class="mb-0">Followers</p>
											</div>
											<div class="col">
												<h6 class="mb-1">678</h6>
												<p class="mb-0">Following</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- varient [ Profile ] card End -->
					<!-- user card [ 3 ] Start -->
					<div class="tab-pane fade" id="user5" role="tabpanel" aria-labelledby="user5-tab">
						<div class="row mb-n4">
							<div class="col-xl-4 col-md-6">
								<h6 class="text-center mb-3">User card 3</h6>
								<div class="card user-card user-card-3 support-bar1">
									<div class="card-body ">
										<div class="text-center">
											<img class="img-radius img-fluid wid-150" src="assets/images/user/img-avatar-1.jpg" alt="User image">
											<h3 class="mb-1 mt-3 f-w-400">Sara Soudein</h3>
											<p class="mb-3 text-muted">UI/UX Designer</p>
										</div>
									</div>
									<div class="card-footer bg-light">
										<div class="row text-center">
											<div class="col">
												<h6 class="mb-1">37</h6>
												<p class="mb-0">Mails</p>
											</div>
											<div class="col">
												<h6 class="mb-1">2749</h6>
												<p class="mb-0">Followers</p>
											</div>
											<div class="col">
												<h6 class="mb-1">678</h6>
												<p class="mb-0">Following</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6">
								<h6 class="text-center mb-3">hover data</h6>
								<div class="card user-card user-card-3 support-bar1">
									<div class="card-body ">
										<div class="text-center">
											<img class="img-radius img-fluid wid-150" src="assets/images/user/img-avatar-2.jpg" alt="User image">
											<h3 class="mb-1 mt-3 f-w-400">Jully Doe</h3>
											<p class="mb-3 text-muted">UI/UX Designer</p>
										</div>
									</div>
									<div class="card-footer bg-light">
										<div class="row text-center">
											<div class="col">
												<h6 class="mb-1">37</h6>
												<p class="mb-0">Mails</p>
											</div>
											<div class="col">
												<h6 class="mb-1">2749</h6>
												<p class="mb-0">Followers</p>
											</div>
											<div class="col">
												<h6 class="mb-1">678</h6>
												<p class="mb-0">Following</p>
											</div>
										</div>
									</div>
									<div class="card-body hover-data text-white">
										<div class="">
											<h4 class="text-white">Hire Me?</h4>
											<p class="mb-1">Lorem Ipsum is simply dummy text</p>
											<p class="mb-3">been the industry's standard</p>
											<button type="button" class="btn  btn-warning"><i class="feather icon-link"></i> Meating</button>
											<button type="button" class="btn  btn-danger"><i class="feather icon-download"></i> Resume</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6">
								<h6 class="text-center mb-3">Badge</h6>
								<div class="card user-card user-card-3 support-bar1">
									<div class="card-body ">
										<div class="text-center">
											<div class="position-relative d-inline-block">
												<img class="img-radius img-fluid wid-150" src="assets/images/user/img-avatar-3.jpg" alt="User image">
												<div class="certificated-badge" data-bs-toggle="tooltip" data-bs-placement="right" title="Certificated">
													<i class="fas fa-certificate text-primary bg-icon"></i>
													<i class="fas fa-medal front-icon text-white"></i>
												</div>
											</div>
											<h3 class="mb-1 mt-3 f-w-400">Joseph William</h3>
											<p class="mb-3 text-muted">UI/UX Designer</p>
										</div>
									</div>
									<div class="card-footer bg-light">
										<div class="row text-center">
											<div class="col">
												<h6 class="mb-1">37</h6>
												<p class="mb-0">Mails</p>
											</div>
											<div class="col">
												<h6 class="mb-1">2749</h6>
												<p class="mb-0">Followers</p>
											</div>
											<div class="col">
												<h6 class="mb-1">678</h6>
												<p class="mb-0">Following</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6">
								<h6 class="text-center mb-3">Social link</h6>
								<div class="card user-card user-card-3 support-bar1">
									<div class="card-body ">
										<div class="text-center">
											<img class="img-radius img-fluid wid-150" src="assets/images/user/img-avatar-1.jpg" alt="User image">
											<h3 class="mb-1 mt-3 f-w-400">Josephin Doe</h3>
											<p class="mb-3 text-muted">UI/UX Designer</p>
											<ul class="list-inline f-20 mt-3 mb-0">
												<li class="list-inline-item"><a href="#!" class="text-facebook"><i class="fab fa-facebook-f"></i></a></li>
												<li class="list-inline-item"><a href="#!" class="text-twitter"><i class="fab fa-twitter"></i></a></li>
												<li class="list-inline-item"><a href="#!" class="text-dribbble"><i class="fab fa-dribbble"></i></a></li>
												<li class="list-inline-item"><a href="#!" class="text-pinterest"><i class="fab fa-pinterest"></i></a></li>
												<li class="list-inline-item"><a href="#!" class="text-youtube"><i class="fab fa-youtube"></i></a></li>
												<li class="list-inline-item"><a href="#!" class="text-googleplus"><i class="fab fa-google-plus-g"></i></a></li>
												<li class="list-inline-item"><a href="#!" class="text-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="card-footer bg-light">
										<div class="row text-center">
											<div class="col">
												<h6 class="mb-1">37</h6>
												<p class="mb-0">Mails</p>
											</div>
											<div class="col">
												<h6 class="mb-1">2749</h6>
												<p class="mb-0">Followers</p>
											</div>
											<div class="col">
												<h6 class="mb-1">678</h6>
												<p class="mb-0">Following</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6">
								<h6 class="text-center mb-3">Social link on hover</h6>
								<div class="card user-card user-card-3 social-hover support-bar1">
									<div class="card-body ">
										<div class="text-center">
											<img class="img-radius img-fluid wid-150" src="assets/images/user/img-avatar-3.jpg" alt="User image">

											<h3 class="mb-1 mt-3 f-w-400">Joseph William</h3>
											<p class="mb-3 text-muted">UI/UX Designer</p>
											<ul class="list-unstyled f-20 mb-0 social-top-link">
												<li class="list-item"><a href="#!" class="text-facebook"><i class="fab fa-facebook-f"></i></a></li>
												<li class="list-item"><a href="#!" class="text-twitter"><i class="fab fa-twitter"></i></a></li>
												<li class="list-item"><a href="#!" class="text-dribbble"><i class="fab fa-dribbble"></i></a></li>
												<li class="list-item"><a href="#!" class="text-pinterest"><i class="fab fa-pinterest"></i></a></li>
												<li class="list-item"><a href="#!" class="text-youtube"><i class="fab fa-youtube"></i></a></li>
												<li class="list-item"><a href="#!" class="text-googleplus"><i class="fab fa-google-plus-g"></i></a></li>
												<li class="list-item"><a href="#!" class="text-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="card-footer bg-light">
										<div class="row text-center">
											<div class="col">
												<h6 class="mb-1">37</h6>
												<p class="mb-0">Mails</p>
											</div>
											<div class="col">
												<h6 class="mb-1">2749</h6>
												<p class="mb-0">Followers</p>
											</div>
											<div class="col">
												<h6 class="mb-1">678</h6>
												<p class="mb-0">Following</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-xl-4">
								<h6 class="text-center mb-3">User card 4</h6>
								<div class="card">
									<div class="widget-profile-card-1">
										<img class="img-fluid" src="assets/images/widget/slider7.jpg" alt="card-style-1">
										<div class="middle-user">
											<img class="img-fluid img-thumbnail" src="assets/images/widget/user-blur-bg.png" alt="Profile-user">
										</div>
									</div>
									<div class="card-body text-center">
										<h3>Lary Doe</h3>
										<p>Web Designer</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci a, rem accusantium recusandae beatae.
									</div>
									<div class="card-footer bg-inverse">
										<div class="row text-center">
											<div class="col">
												<h4>400</h4>
												<span>Designs</span>
											</div>
											<div class="col">
												<h4>90</h4>
												<span>Projects</span>
											</div>
											<div class="col">
												<h4>70</h4>
												<span>Devlopment</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-xl-4">
								<h6 class="text-center mb-3">User profile</h6>
								<div class="card widget-profile-card-2">
									<img class="img-fluid" src="assets/images/widget/slider5.jpg" alt="card-style-1">
									<div class="card-body text-center">
										<img class="img-fluid img-thumbnail img-radius user-img m-b-20 m-t-10" src="assets/images/widget/img-round1.jpg" alt="Profile-user">
										<h3>Jenny Joe</h3>
										<p>Web Designer</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci a, rem accusantium recusandae beatae.
									</div>
								</div>
							</div>
							<div class="col-md-6 col-xl-4">
								<h6 class="text-center mb-3">User profile 2</h6>
								<div class="card">
									<div class="widget-profile-card-3">
										<img class="img-fluid img-thumbnail" src="assets/images/widget/img-round1.jpg" alt="Profile-user">
									</div>
									<div class="card-body text-center">
										<h3>John Doe</h3>
										<p>Web Designer</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci a, rem accusantium recusandae beatae.
									</div>
									<div class="card-footer bg-inverse">
										<div class="row text-center">
											<div class="col">
												<h4>400</h4>
												<span>Designs</span>
											</div>
											<div class="col">
												<h4>90</h4>
												<span>Projects</span>
											</div>
											<div class="col">
												<h4>70</h4>
												<span>Devlopment</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-xl-4">
								<h6 class="text-center mb-3">Backround profile image</h6>
								<div class="card">
									<div class="profile-card">
										<img class="img-fluid" src="assets/images/widget/profile-person1.jpg" alt="">
										<div class="card-body">
											<h3 class="text-white">John Steve</h3>
											<p>UI/UX Designer at CreativesCastle Studio</p>
											<button class="btn  btn-info">+ Follow</button>
										</div>
									</div>
									<div class="card-footer bg-inverse">
										<div class="row text-center">
											<div class="col">
												<h4>134</h4>
												<span>Shots</span>
											</div>
											<div class="col">
												<h4>13,227</h4>
												<span>Shots</span>
											</div>
											<div class="col">
												<h4>488</h4>
												<span>Shots</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-xl-4">
								<h6 class="text-center mb-3">Backround cover image</h6>
								<div class="card">
									<div class="card-body p-0">
										<div class="widget-main-card blur-user-card">
											<img class="img-fluid" src="assets/images/widget/user-blur-bg.png" alt="">
											<h3 class="text-white">Linda Fox</h3>
											<p>UI Designer at CreativesCastle Studio</p>
											<button class="btn  btn-info m-t-30">+ Follow</button>
											<div class="mt-4 card-footer">
												<div class="row text-center">
													<div class="col">
														<h4 class="text-white">134</h4>
														<span>Shots</span>
													</div>
													<div class="col">
														<h4 class="text-white">13,227</h4>
														<span>Followers</span>
													</div>
													<div class="col">
														<h4 class="text-white">488</h4>
														<span>Following</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-5 col-md-6">
								<h6 class="text-center mb-3">User settings</h6>
								<div class="card">
									<div class="card-header">
										<div class="row align-items-center">
											<div class="col">
												<div class="row align-items-center">
													<div class="col-auto col pr-0">
														<img class="img-radius img-fluid wid-60" src="assets/images/user/avatar-2.jpg" alt="User image">
													</div>
													<div class="col">
														<h6 class="mb-1">Josephin Doe</h6>
														<p class="mb-0">UI/UX Designer</p>
													</div>
												</div>
											</div>
											<div class="col col-auto">
												<button class="btn  btn-primary">Edit</button>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row text-center">
											<div class="col">
												<h6 class="mb-1">69</h6>
												<p class="mb-0">Shots</p>
											</div>
											<div class="col">
												<h6 class="mb-1">2749</h6>
												<p class="mb-0">Followers</p>
											</div>
											<div class="col">
												<h6 class="mb-1">678</h6>
												<p class="mb-0">Following</p>
											</div>
											<div class="col">
												<h6 class="mb-1">78</h6>
												<p class="mb-0">Like</p>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="row align-items-center">
											<div class="col">
												<a href="#!"><i class="feather icon-mail"></i> Message</a>
											</div>
											<div class="col col-auto">
												<button class="btn  btn-secondory btn-sm m-0">Follow</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- user card [ 3 ] end -->
				</div>
			</div>
		</div>
		<!-- [ Main Content ] end -->
	</div>
</div>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
@include('html.layouts.footer-bottom-link')
</body>
</html>
