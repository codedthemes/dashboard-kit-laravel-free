<body class="@@bodyclass minimenu">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ Mobile header ] start -->
	<div class="pc-mob-header pc-header">
		<div class="pcm-logo">
			<img src="assets/images/logo.svg" alt="" class="logo logo-lg">
		</div>
		<div class="pcm-toolbar">
			<a href="#!" class="pc-head-link" id="mobile-collapse">
				<div class="hamburger hamburger--arrowturn">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
				<!-- <i data-feather="menu"></i> -->
			</a>
			<a href="#!" class="pc-head-link" id="headerdrp-collapse">
				<i data-feather="align-right"></i>
			</a>
			<a href="#!" class="pc-head-link" id="header-collapse">
				<i data-feather="more-vertical"></i>
			</a>
		</div>
	</div>
	<!-- [ Mobile header ] End -->

	<!-- [ navigation menu ] start -->
	<nav class="pc-sidebar @@menuclass">
		<div class="navbar-wrapper">
			<div class="m-header">
				<a href="{{ route('index') }}" class="b-brand">
					<!-- ========   change your logo hear   ============ -->
					<img src="assets/images/logo.svg" alt="" class="logo logo-lg">
					<img src="assets/images/logo-sm-light.svg" alt="" class="logo logo-sm">
				</a>
			</div>
			<div class="navbar-content">
				<ul class="pc-navbar">
					<li class="pc-item pc-hasmenu">
						<a href="#!" class="pc-link "><span class="pc-micon"><i data-feather="home"></i></span><span class="pc-mtext">Navigation</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item pc-hasmenu">
								<a href="#!" class="pc-link">Dashboard<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
								<ul class="pc-submenu">
									<li class="pc-item"><a class="pc-link" href="{{ route('index') }}">Sales</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('dashboard_analytics') }}">Analytics</a></li>
								</ul>
							</li>
							<li class="pc-item pc-hasmenu">
								<a href="#!" class="pc-link ">Widget<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
								<ul class="pc-submenu">
									<li class="pc-item"><a class="pc-link" href="{{ route('widget_statistic') }}">Statistic</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('widget_data') }}">Data</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('widget_chart') }}">Chart</a></li>
								</ul>
							</li>
							<li class="pc-item pc-hasmenu">
								<a href="#!" class="pc-link ">User<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
								<ul class="pc-submenu">
									<li class="pc-item"><a class="pc-link" href="{{ route('user_profile') }}">Profile</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('user_profile_social') }}">Social Profile</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('user_card') }}">User Card</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('user_list') }}">User List</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="pc-item pc-hasmenu">
						<a href="#!" class="pc-link "><span class="pc-micon"><i data-feather="box"></i></span><span class="pc-mtext">Components</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item pc-hasmenu">
								<a href="#!" class="pc-link">Basic<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
								<ul class="pc-submenu">
									<li class="pc-item"><a class="pc-link" href="{{ route('bc_alert') }}">Alert</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('bc_button') }}">Button</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('bc_badges') }}">Badges</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('bc_breadcrumb_pagination') }}">Breadcrumb & paggination</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('bc_card') }}">Cards</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('bc_collapse') }}">Collapse</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('bc_carousel') }}">Carousel</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('bc_grid') }}">Grid system</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('bc_progress') }}">Progress</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('bc_modal') }}">Modal</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('bc_spinner') }}">Spinner</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('bc_tabs') }}">Tabs & pills</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('bc_typography') }}">Typography</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('bc_tooltip-popover') }}">Tooltip & popovers</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('bc_toasts') }}">Toasts</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('bc_extra') }}">Other</a></li>
								</ul>
							</li>
							<li class="pc-item pc-hasmenu">
								<a href="#!" class="pc-link">Advance<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
								<ul class="pc-submenu">
									<li class="pc-item"><a class="pc-link" href="{{ route('ac_alert') }}">Sweet alert</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('ac_datepicker_componant') }}">Datepicker</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('ac_lightbox') }}">Lightbox</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('ac_notification') }}">Notification</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('ac_pnotify') }}">Pnotify</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('ac_rating') }}">Rating</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('ac_rangeslider') }}">Rangeslider</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('ac_syntax_highlighter') }}">Syntax highlighter</a></li>
								</ul>
							</li>
							<li class="pc-item pc-hasmenu">
								<a href="#!" class="pc-link">Icons<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
								<ul class="pc-submenu">
									<li class="pc-item"><a class="pc-link" href="{{ route('icon_feather') }}">Feather</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('icon_fontawsome') }}">Font Awesome 5</a></li>
								</ul>
							</li>
							<li class="pc-item pc-hasmenu">
								<a href="#!" class="pc-link">Forms Elements<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
								<ul class="pc-submenu">
									<li class="pc-item"><a class="pc-link" href="{{ route('form_elements') }}">Form Basic</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('form2_basic') }}">Form Options</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('form2_input_group') }}">Input Groups</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('form2_checkbox') }}">Checkbox</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('form2_radio') }}">Radio</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('form2_switch') }}">Switch</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('form2_megaoption') }}">Mega option</a></li>
								</ul>
							</li>
							<li class="pc-item pc-hasmenu">
								<a href="#!" class="pc-link">Forms Plugins<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
								<ul class="pc-submenu">
									<li class="pc-item"><a class="pc-link" href="{{ route('form2_datepicker') }}">Datepicker</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('form2_daterangepicker') }}">Date Range Picker</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('form2_timepicker') }}">Timepicker</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('form2_multipleselectsplitter') }}">Multiple Select Splitter</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('form2_select') }}">Select</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('form2_select2') }}">Select2</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('form2_recaptcha') }}">Google reCaptcha</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('form2_inputmask') }}">Input Masks</a></li>
									<li class="pc-item"><a class="pc-link" href="{{ route('form2_rangeslider') }}">Range Slider</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="pc-item pc-hasmenu">
						<a href="#!" class="pc-link "><span class="pc-micon"><i data-feather="grid"></i></span><span class="pc-mtext">Bootstrap table</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href="{{ route('tbl_bootstrap') }}">Basic table</a></li>
							<li class="pc-item"><a class="pc-link" href="{{ route('tbl_sizing') }}">Sizing table</a></li>
							<li class="pc-item"><a class="pc-link" href="{{ route('tbl_border') }}">Border table</a></li>
							<li class="pc-item"><a class="pc-link" href="{{ route('tbl_styling') }}">Styling table</a></li>
						</ul>
					</li>
					<li class="pc-item"><a href="{{ route('sample_page') }}" class="pc-link "><span class="pc-micon"><i data-feather="sidebar"></i></span><span class="pc-mtext">Sample page</span></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="pc-header @@headerclass">
		<div class="header-wrapper">
			@include('html.layouts.header-content')
		</div>
	</header>

	<!-- Modal -->
	<div class="modal notification-modal fade" id="notification-modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close">
					</button>
					<ul class="nav nav-pill tabs-light mb-3" id="pc-noti-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="pc-noti-home-tab" data-bs-toggle="pill" href="#pc-noti-home" role="tab" aria-controls="pc-noti-home" aria-selected="true">Notification</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pc-noti-news-tab" data-bs-toggle="pill" href="#pc-noti-news" role="tab" aria-controls="pc-noti-news" aria-selected="false">News<span class="badge bg-danger ms-2 d-none d-sm-inline-block">4</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pc-noti-settings-tab" data-bs-toggle="pill" href="#pc-noti-settings" role="tab" aria-controls="pc-noti-settings" aria-selected="false">Setting<span
									class="badge bg-success ms-2 d-none d-sm-inline-block">Update</span></a>
						</li>
					</ul>
					<div class="tab-content pt-4" id="pc-noti-tabContent">
						<div class="tab-pane fade show active" id="pc-noti-home" role="tabpanel" aria-labelledby="pc-noti-home-tab">
							<div class="media">
								<img src="assets/images/user/avatar-1.jpg" alt="images" class="img-fluid avtar avtar-l">
								<div class="media-body ms-3 align-self-center">
									<div class="float-end">
										<div class="btn-group card-option">
											<button type="button" class="btn shadow-none">
												<i data-feather="heart" class="text-danger"></i>
											</button>
											<button type="button" class="btn shadow-none px-0 dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i data-feather="more-horizontal"></i>
											</button>
											<div class="dropdown dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#!"><i data-feather="refresh-cw"></i> reload</a>
												<a class="dropdown-item" href="#!"><i data-feather="trash"></i> remove</a>
											</div>
										</div>
									</div>
									<h6 class="mb-0 d-inline-block">Ashoka T.</h6>
									<p class="mb-0 d-inline-block f-12 text-muted"> • 06/20/2019 at 6:43 PM </p>
									<p class="my-3">Cras sit amet nibh libero in gravida nulla Nulla vel metus scelerisque ante sollicitudin.</p>
									<div class="p-3 border rounded">
										<div class="media align-items-center">
											<div class="media-body">
												<h6 class="mb-1 f-14">Death Star original maps and blueprint.pdf</h6>
												<p class="mb-0 text-muted">by<a href="#!"> Ashoka T </a>.</p>
											</div>
											<div class="btn-group d-none d-sm-inline-flex">
												<button type="button" class="btn shadow-none">
													<i data-feather="download-cloud"></i>
												</button>
												<button type="button" class="btn shadow-none px-0 dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i data-feather="more-horizontal"></i>
												</button>
												<div class="dropdown dropdown-menu dropdown-menu-end">
													<a class="dropdown-item" href="#!"><i data-feather="refresh-cw"></i> reload</a>
													<a class="dropdown-item" href="#!"><i data-feather="trash"></i> remove</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<hr class="mb-4">
							<div class="media">
								<img src="assets/images/user/avatar-2.jpg" alt="images" class="img-fluid avtar avtar-l">
								<div class="media-body ms-3 align-self-center">
									<div class="float-end">
										<div class="btn-group card-option">
											<button type="button" class="btn shadow-none px-0 dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i data-feather="more-horizontal"></i>
											</button>
											<div class="dropdown dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#!"><i data-feather="refresh-cw"></i> reload</a>
												<a class="dropdown-item" href="#!"><i data-feather="trash"></i> remove</a>
											</div>
										</div>
									</div>
									<h6 class="mb-0 d-inline-block">Ashoka T.</h6>
									<p class="mb-0 d-inline-block  f-12 text-muted"> • 06/20/2019 at 6:43 PM </p>
									<p class="my-3">Cras sit amet nibh libero in gravida nulla Nulla vel metus scelerisque ante sollicitudin.</p>
									<img src="assets/images/slider/img-slide-3.jpg" alt="images" class="img-fluid wid-90 rounded m-r-10 m-b-10">
									<img src="assets/images/slider/img-slide-7.jpg" alt="images" class="img-fluid wid-90 rounded m-r-10 m-b-10">
								</div>
							</div>
							<hr class="mb-4">
							<div class="media mb-3">
								<img src="assets/images/user/avatar-3.jpg" alt="images" class="img-fluid avtar avtar-l">
								<div class="media-body ms-3 align-self-center">
									<div class="float-end">
										3 <i data-feather="heart" class="text-danger fill-danger"></i>
									</div>
									<h6 class="mb-0 d-inline-block">Ashoka T.</h6>
									<p class="mb-0 d-inline-block  f-12 <text-muted></text-muted>"> • 06/20/2019 at 6:43 PM </p>
									<p class="my-3">Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur.</p>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pc-noti-news" role="tabpanel" aria-labelledby="pc-noti-news-tab">
							<div class="pb-3 border-bottom mb-3 media">
								<a href="#!"><img src="assets/images/news/img-news-2.jpg" class="wid-90 rounded" alt="..."></a>
								<div class="media-body ms-3">
									<p class="float-end mb-0 text-success"><small>now</small></p>
									<a href="#!">
										<h6>This is a news image</h6>
									</a>
									<p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
								</div>
							</div>
							<div class="pb-3 border-bottom mb-3 media">
								<a href="#!"><img src="assets/images/news/img-news-1.jpg" class="wid-90 rounded" alt="..."></a>
								<div class="media-body ms-3">
									<p class="float-end mb-0 text-muted"><small>3 mins ago</small></p>
									<a href="#!">
										<h6>Industry's standard dummy</h6>
									</a>
									<p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
									<a href="#" class="bg-light">Html</a>
									<a href="#" class="bg-light">UI/UX designed</a>
								</div>
							</div>
							<div class="pb-3 border-bottom mb-3 media">
								<a href="#!"><img src="assets/images/news/img-news-2.jpg" class="wid-90 rounded" alt="..."></a>
								<div class="media-body ms-3">
									<p class="float-end mb-0 text-muted"><small>5 mins ago</small></p>
									<a href="#!">
										<h6>Ipsum has been the industry's</h6>
									</a>
									<p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
									<a href="#" class="bg-light">JavaScript</a>
									<a href="#" class="bg-light">Scss</a>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pc-noti-settings" role="tabpanel" aria-labelledby="pc-noti-settings-tab">
							<h6 class="mt-2"><i data-feather="monitor" class="me-2"></i>Desktop settings</h6>
							<hr>
							<div class="custom-control custom-switch">
								<input type="checkbox" class="custom-control-input" id="pcsetting1" checked>
								<label class="custom-control-label f-w-600 pl-1" for="pcsetting1">Allow desktop notification</label>
							</div>
							<p class="text-muted ms-5">you get lettest content at a time when data will updated</p>
							<div class="custom-control custom-switch">
								<input type="checkbox" class="custom-control-input" id="pcsetting2">
								<label class="custom-control-label f-w-600 pl-1" for="pcsetting2">Store Cookie</label>
							</div>
							<h6 class="mb-0 mt-5"><i data-feather="save" class="me-2"></i>Application settings</h6>
							<hr>
							<div class="custom-control custom-switch">
								<input type="checkbox" class="custom-control-input" id="pcsetting3">
								<label class="custom-control-label f-w-600 pl-1" for="pcsetting3">Backup Storage</label>
							</div>
							<p class="text-muted mb-4 ms-5">Automaticaly take backup as par schedule</p>
							<div class="custom-control custom-switch">
								<input type="checkbox" class="custom-control-input" id="pcsetting4">
								<label class="custom-control-label f-w-600 pl-1" for="pcsetting4">Allow guest to print file</label>
							</div>
							<h6 class="mb-0 mt-5"><i data-feather="cpu" class="me-2"></i>System settings</h6>
							<hr>
							<div class="custom-control custom-switch">
								<input type="checkbox" class="custom-control-input" id="pcsetting5" checked>
								<label class="custom-control-label f-w-600 pl-1" for="pcsetting5">View other user chat</label>
							</div>
							<p class="text-muted ms-5">Allow to show public user message</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light-danger btn-sm" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-light-primary btn-sm">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<!-- [ Header ] end -->
