<body class="pc-horizontal layout-horizontal-v2">
	<div class="container">
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
		<!-- [ Header ] start -->
		<header class="pc-header bg-dark @@headerclass">
			<div class="container">
				<div class="header-wrapper">
					<div class="m-header">
						<a href="{{ route('index') }}" class="b-brand">
							<!-- ========   change your logo hear   ============ -->
							<img src="assets/images/logo.svg" alt="" class="logo logo-lg">
						</a>
					</div>
					@include('html.layouts.header-content')
				</div>
			</div>
		</header>
		<!-- [ Header ] end -->
		<!-- [ navigation menu ] start -->
		<nav class="topbar @@menuclass">
			<div class="container">
				<div class="navbar-wrapper">
					<ul class="pc-navbar">
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link"><span class="pc-micon"><i class="material-icons-two-tone">home</i></span><span class="pc-mtext">Navigation</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
							<ul class="pc-submenu">
								<li class="pc-item pc-hasmenu">
									<a href="#!" class="pc-link">Dashboard<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item"><a class="pc-link" href="{{ route('index') }}">Sales</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('dashboard_analytics') }}">Analytics</a></li>
									</ul>
								</li>
								<li class="pc-item pc-hasmenu">
									<a href="#!" class="pc-link">Layouts<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item"><a target="_blank" class="pc-link" href="{{ route('layout_collapse') }}">Collapse</a></li>
										<li class="pc-item"><a target="_blank" class="pc-link" href="{{ route('layout_horizontal') }}">Horizontal</a></li>
										<li class="pc-item"><a target="_blank" class="pc-link" href="{{ route('layout_horizontal2') }}">Horizontal v2</a></li>
										<li class="pc-item"><a target="_blank" class="pc-link" href="{{ route('layout_modern') }}">Modern</a></li>
										<li class="pc-item"><a target="_blank" class="pc-link" href="{{ route('layout_advance') }}">Advance</a></li>
										<li class="pc-item"><a target="_blank" class="pc-link" href="{{ route('layout_topbar') }}">Topbar</a></li>
										<li class="pc-item"><a target="_blank" class="pc-link" href="{{ route('layout_tab') }}">Tab</a></li>
										<li class="pc-item"><a target="_blank" class="pc-link" href="{{ route('layout_nested') }}">Nested</a></li>
									</ul>
								</li>
								<li class="pc-item pc-hasmenu">
									<a href="#!" class="pc-link">Widget<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item"><a class="pc-link" href="{{ route('widget_statistic') }}">Statistic</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('widget_data') }}">Data</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('widget_chart') }}">Chart</a></li>
									</ul>
								</li>
								<li class="pc-item pc-hasmenu">
									<a href="#!" class="pc-link">User<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item"><a class="pc-link" href="{{ route('user_profile') }}">Profile</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('user_profile_social') }}">Social Profile</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('user_card') }}">User Card</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('user_list') }}">User List</a></li>
									</ul>
								</li>
								<li class="pc-item pc-hasmenu">
									<a href="#!" class="pc-link">Admin Panel<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item pc-hasmenu">
											<a href="#!" class="pc-link">Hospital<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
											<ul class="pc-submenu">
												<li class="pc-item"><a class="pc-link" href="{{ route('hospital_dashboard') }}">Dashboard</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('hospital_department') }}">Department</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('hospital_doctor') }}">Doctor</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('hospital_patient') }}">Patient</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('hospital_nurse') }}">Nurse</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('hospital_pharmacist') }}">Pharmacist</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('hospital_laboratorie') }}">Laboratory</a></li>
											</ul>
										</li>
										<li class="pc-item pc-hasmenu">
											<a href="#!" class="pc-link">Membership<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
											<ul class="pc-submenu">
												<li class="pc-item"><a class="pc-link" href="{{ route('member_dashboard') }}">Dashboard</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('member_mail_template') }}">Email templates</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('member_countries') }}">Country</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('member_coupons') }}">Coupons</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('member_newsletter') }}">Newsletter</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('member_user') }}">User</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('member_membership') }}">Membership</a></li>
											</ul>
										</li>
										<li class="pc-item pc-hasmenu">
											<a href="#!" class="pc-link">Helpdesk<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
											<ul class="pc-submenu">
												<li class="pc-item"><a class="pc-link" href="{{ route('help_dashboard') }}">Helpdesk dashboard</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('help_create_ticket') }}">Create ticket</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('help_ticket') }}">ticket list</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('help_ticket_details') }}">ticket Details</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('help_customer') }}">Customer</a></li>
											</ul>
										</li>
										<li class="pc-item pc-hasmenu">
											<a href="#!" class="pc-link">User<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
											<ul class="pc-submenu">
												<li class="pc-item"><a class="pc-link" href="{{ route('user_profile') }}">Profile</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('user_profile_social') }}">Social Profile</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('user_card') }}">User Card</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('user_list') }}">User List</a></li>
											</ul>
										</li>
										<li class="pc-item pc-hasmenu">
											<a href="#!" class="pc-link">School<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
											<ul class="pc-submenu">
												<li class="pc-item"><a class="pc-link" href="{{ route('school_dashboard') }}">Dashboard</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('school_student') }}">Student</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('school_parents') }}">Parents</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('school_teacher') }}">Teacher</a></li>
											</ul>
										</li>
										<li class="pc-item pc-hasmenu">
											<a href="#!" class="pc-link">SIS<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
											<ul class="pc-submenu">
												<li class="pc-item"><a class="pc-link" href="{{ route('sis_dashboard') }}">Dashboard</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('sis_leave') }}">Leave</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('sis_evaluation') }}">Evaluation</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('sis_event') }}">Event</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('sis_circular') }}">Circular</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('sis_course') }}">Course</a></li>
											</ul>
										</li>
										<li class="pc-item pc-hasmenu">
											<a href="#!" class="pc-link">Crypto<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
											<ul class="pc-submenu">
												<li class="pc-item"><a class="pc-link" href="{{ route('crypto_dashboard') }}">Dashboard</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('crypto_exchange') }}">Exchange</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('crypto_wallet') }}">Wallet</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('crypto_transactions') }}">Transactions</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('crypto_history') }}">History</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('crypto_trading') }}">Trading</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('crypto_initial_coin') }}">Initial coin</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('crypto_ico_listing') }}">Ico listing</a></li>
											</ul>
										</li>
										<li class="pc-item pc-hasmenu">
											<a href="#!" class="pc-link">E-Commerce<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
											<ul class="pc-submenu">
												<li class="pc-item"><a class="pc-link" href="{{ route('ecom_product') }}">Product</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('ecom_product_details') }}">Product details</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('ecom_order') }}">Order</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('ecom_checkout') }}">Checkout</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('ecom_cart') }}">Shopping Cart</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('ecom_customers') }}">Customers</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('ecom_sellers') }}">Sellers</a></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link"><span class="pc-micon"><i class="material-icons-two-tone">layers</i></span><span class="pc-mtext">UI Components</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
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
										<li class="pc-item"><a class="pc-link" href="{{ route('bc_color') }}">Color</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('bc_carousel') }}">Carousel</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('bc_grid') }}">Grid system</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('bc_progress') }}">Progress</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('bc_list_group') }}">List group</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('bc_modal') }}">Modal</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('bc_spinner') }}">Spinner</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('bc_tabs') }}">Tabs & pills</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('bc_typography') }}">Typography</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('bc_tooltip_popover') }}">Tooltip & popovers</a></li>
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
									<a href="#!" class="pc-link">Forms<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
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
										<li class="pc-item pc-hasmenu">
											<a href="#!" class="pc-link">Text Editors<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
											<ul class="pc-submenu">
												<li class="pc-item"><a class="pc-link" href="{{ route('editor_classic') }}">CK editor</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('editor_trumbowyg') }}">Trumbowyg editor</a></li>
											</ul>
										</li>
										<li class="pc-item pc-hasmenu">
											<a href="#!" class="pc-link">Form Wizard<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
											<ul class="pc-submenu">
												<li class="pc-item"><a class="pc-link" href="{{ route('form_wizard') }}">Wizard</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('page_wizard1') }}">Wizard 1</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('page_wizard2') }}">Wizard 2</a></li>
											</ul>
										</li>
										<li class="pc-item pc-hasmenu">
											<a href="{{ route('form_validation')}}" class="pc-link dropdown-toggle">Form Validation</a>
										</li>
										<li class="pc-item pc-hasmenu">
											<a href="{{ route('file_upload')}}" class="pc-link dropdown-toggle">File upload</a>
										</li>
										<li class="pc-item pc-hasmenu">
											<a href="{{ route('image_crop')}}" class="pc-link dropdown-toggle">Image cropper</a>
										</li>
									</ul>
								</li>
								<li class="pc-item pc-hasmenu">
									<a href="#!" class="pc-link">Table<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item pc-hasmenu">
											<a href="#!" class="pc-link">Bootstrap table<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
											<ul class="pc-submenu">
												<li class="pc-item"><a class="pc-link" href="{{ route('tbl_bootstrap') }}">Basic table</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('tbl_sizing') }}">Sizing table</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('tbl_border') }}">Border table</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('tbl_styling') }}">Styling table</a></li>
											</ul>
										</li>
										<li class="pc-item pc-hasmenu">
											<a href="#!" class="pc-link">Data table<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
											<ul class="pc-submenu">
												<li class="pc-item"><a class="pc-link" href="{{ route('dt_basic') }}">Basic initialization</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('dt_advance') }}">Advance initialization</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('dt_styling') }}">Styling</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('dt_api') }}">API</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('dt_plugin') }}">Plug-in</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('dt_sources') }}">Data sources</a></li>
											</ul>
										</li>
										<li class="pc-item pc-hasmenu">
											<a href="#!" class="pc-link">DT extensions<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
											<ul class="pc-submenu">
												<li class="pc-item"><a class="pc-link" href="{{ route('dt_ext_autofill') }}">Autofill</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('dt_ext_basic_buttons') }}">Basic button</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('dt_ext_export_buttons') }}">Data export</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('dt_ext_col_reorder') }}">Col reorder</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('dt_ext_fixed_columns') }}">Fixed columns</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('dt_ext_fixed_header') }}">Fixed header</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('dt_ext_key_table') }}">Key table</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('dt_ext_responsive') }}">Responsive</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('dt_ext_row_reorder') }}">Row reorder</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('dt_ext_scroller') }}">Scroller</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('dt_ext_select') }}">Select table</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="pc-item pc-hasmenu">
									<a href="#!" class="pc-link">Chart<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item"><a class="pc-link" href="{{ route('chart_apex') }}">Apex Chart</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('chart_chartjs') }}">Chart js</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('chart_highchart') }}">Highchart</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('chart_knob') }}">Knob</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('chart_peity') }}">Peity</a></li>
									</ul>
								</li>
								<li class="pc-item pc-hasmenu">
									<a href="#!" class="pc-link">Maps<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item"><a class="pc-link" href="{{ route('map_google') }}">Google</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('map_api') }}">Gmap search API</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link"><span class="pc-micon"><i class="material-icons-two-tone">collections_bookmark</i></span><span class="pc-mtext">Pages</span><span class="pc-arrow"><i
										data-feather="chevron-right"></i></span></a>
							<ul class="pc-submenu">
								<li class="pc-item">
									<a href="{{ route('landing') }}" class="pc-link dropdown-toggle" target="_blank">Landing</a>
								</li>
								<li class="pc-item pc-hasmenu">
									<a href="#!" class="pc-link">Authentication<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item pc-hasmenu">
											<a href="#!" class="pc-link">Variant 1<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
											<ul class="pc-submenu">
												<li class="pc-item"><a class="pc-link" href="{{ route('auth_signup') }}" target="_blank">Sign up</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('auth_signin') }}" target="_blank">Sign in</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('auth_reset_password') }}" target="_blank">Reset password</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('auth_change_password') }}" target="_blank">Change password</a></li>
											</ul>
										</li>
										<li class="pc-item pc-hasmenu">
											<a href="#!" class="pc-link">Variant 2<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
											<ul class="pc-submenu">
												<li class="pc-item"><a class="pc-link" href="{{ route('auth_signup_img_side') }}" target="_blank">Sign up</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('auth_signin_img_side') }}" target="_blank">Sign in</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('auth_reset_password_img_side') }}" target="_blank">Reset password</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('auth_change_password_img_side') }}" target="_blank">Change password</a></li>
											</ul>
										</li>
										<li class="pc-item pc-hasmenu">
											<a href="#!" class="pc-link">Variant 3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
											<ul class="pc-submenu">
												<li class="pc-item"><a class="pc-link" href="{{ route('auth_signup_3') }}" target="_blank">Sign up</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('auth_signin_3') }}" target="_blank">Sign in</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('auth_reset_password_3') }}" target="_blank">Reset password</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('auth_change_password_3') }}" target="_blank">Change password</a></li>
											</ul>
										</li>
										<li class="pc-item"><a class="pc-link" href="{{ route('auth_profile_settings') }}" target="_blank">Profile settings</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('auth_tabs') }}" target="_blank">Tabs Authentication</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('auth_lockscreen') }}" target="_blank">Lockscreen</a></li>
									</ul>
								</li>
								<li class="pc-item pc-hasmenu">
									<a href="#!" class="pc-link">Maintenance<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item"><a class="pc-link" href="{{ route('maint_error') }}">Error</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('maint_offline_ui') }}" target="_blank">Offline UI</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('maint_maintance') }}" target="_blank">Maintenance</a></li>
									</ul>
								</li>
								<li class="pc-item pc-hasmenu">
									<a href="#!" class="pc-link">Email<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item"><a class="pc-link" href="{{ route('email_inbox') }}">Inbox</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('email_read') }}">Read mail</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('email_compose') }}">Compose mail</a></li>
									</ul>
								</li>
								<li class="pc-item pc-hasmenu">
									<a href="#!" class="pc-link">Task<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item"><a class="pc-link" href="{{ route('task_list') }}">List</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('task_board') }}">Board</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('task_detail') }}">Detail</a></li>
									</ul>
								</li>
								<li class="pc-item pc-hasmenu">
									<a href="#!" class="pc-link">Gallery<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item"><a class="pc-link" href="{{ route('gallery_grid') }}">Grid</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('gallery_masonry') }}">Masonry</a></li>
									</ul>
								</li>
								<li class="pc-item pc-hasmenu">
									<a href="#!" class="pc-link">Faq<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item"><a class="pc-link" href="{{ route('page_faq') }}">Faq 1</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('page_faq2') }}">Faq 2</a></li>
										<li class="pc-item pc-hasmenu">
											<a href="#!" class="pc-link">Faq 3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
											<ul class="pc-submenu">
												<li class="pc-item"><a class="pc-link" href="{{ route('page_faq3') }}">view</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('page_faq3_category') }}">Category</a></li>
												<li class="pc-item"><a class="pc-link" href="{{ route('page_faq3_details') }}">Details</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="pc-item pc-hasmenu">
									<a href="#!" class="pc-link">Invoice<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item"><a class="pc-link" href="{{ route('page_invoice') }}">Invoice</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('page_invoice_summary') }}">Invoice Summary</a></li>
										<li class="pc-item"><a class="pc-link" href="{{ route('page_invoice_list') }}">Invoice List</a></li>
									</ul>
								</li>
								<li class="pc-item">
									<a href="{{ route('todo') }}" class="pc-link dropdown_toggle">To-Do</a>
								</li>
								<li class="pc-item">
									<a href="{{ route('full_calendar') }}" class="pc_link dropdown_toggle">Full calendar</a>
								</li>
							</ul>
						</li>
						<li class="pc-item"><a href="#!" class="pc-link"><span class="pc-micon"><i class="material-icons-two-tone">storefront</i></span><span class="pc-mtext">Sample page</span></a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- [ navigation menu ] end -->
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
								<a class="nav-link" id="pc-noti-news-tab" data-bs-toggle="pill" href="#pc-noti-news" role="tab" aria-controls="pc-noti-news" aria-selected="false">News<span
										class="bg-danger ms-2 d-none d-sm-inline-block">4</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pc-noti-settings-tab" data-bs-toggle="pill" href="#pc-noti-settings" role="tab" aria-controls="pc-noti-settings" aria-selected="false">Setting<span
										class="bg-success ms-2 d-none d-sm-inline-block">Update</span></a>
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
										<p class="mb-0 d-inline-block"> • 06/20/2019 at 6:43 PM </p>
										<p class="my-3">Cras sit amet nibh libero in gravida nulla Nulla vel metus scelerisque ante sollicitudin.</p>
										<div class="p-3 mb-3 border rounded">
											<div class="media align-items-center">
												<div class="media-body">
													<h6 class="mb-1">Death Star original maps and blueprint.pdf</h6>
													<p class="mb-0">by Ashoka T. • 06/20/2019 at 6:43 PM </p>
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
										<p class="mb-0 d-inline-block"> • 06/20/2019 at 6:43 PM </p>
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
											3 <i data-feather="heart" class="text-danger"></i>
										</div>
										<h6 class="mb-0 d-inline-block">Ashoka T.</h6>
										<p class="mb-0 d-inline-block"> • 06/20/2019 at 6:43 PM </p>
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
										<a href="#!" class="bg-light">Html</a>
										<a href="#!" class="bg-light">UI/UX designed</a>
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
										<a href="#!" class="bg-light">JavaScript</a>
										<a href="#!" class="bg-light">Scss</a>
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
