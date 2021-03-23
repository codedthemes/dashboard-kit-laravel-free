<!DOCTYPE html>
<html lang="en">

<head>
	@@include('./layouts/head.html')
	<link rel="stylesheet" href="assets/css/plugins/daterangepicker.css">
	@@include('./layouts/head-bottom-link.html')
</head>
@@include('layouts/layout-vertical.html')
<!-- [ Main Content ] start -->
<section class="pc-container">
	<div class="pcoded-content">
		<!-- [ Main Content ] start -->
		<div class="row mb-3">
				<div class="col-md-8">
					<h3>Date Range Picker</h3>
					<p class="lead">Date range picker component creates a dropdown menu from which a user can select a range of dates.</p>
					<p class="f-w-500">Check out <a href="https://dashboardkit.io/bootstrap/docs/index-ac-package.html#page-datepicker" target="_blank" class="badge bg-light-primary">Documentation</a> <a href="https://github.com/dangrossman/daterangepicker" target="_blank" class="badge bg-light-dark">github</a></p>
				</div>
		</div>
		<div class="row">
			<!-- [ bootstrap-datetimepicker ] start -->
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Simple Date Range Picker With a Callback</h5>
					</div>
					<div class="card-body">
						<input type="text" name="daterange" class="form-control" value="01/01/2018 - 01/15/2018" />
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Date Range Picker With Times</h5>
					</div>
					<div class="card-body">
						<input type="text" name="datetimes" class="form-control" />
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Single Date Picker</h5>
					</div>
					<div class="card-body">
						<input type="text" name="birthday" value="10/24/1984" class="form-control" />
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Predefined Date Ranges</h5>
					</div>
					<div class="card-body">
						<div id="reportrange" class="form-control">
							<i data-feather="calendar"></i>&nbsp;
							<span></span> <i data-feather="chevron-down"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Input Initially Empty</h5>
					</div>
					<div class="card-body">
						<input type="text" name="datefilter" value="" class="form-control" />
					</div>
				</div>
			</div>

			<!-- [ bootstrap-datetimepicker ] End -->
		</div>
		<!-- [ Main Content ] end -->
	</div>
</section>
<!-- [ Main Content ] end -->
@@include('./layouts/footer.html')
<!-- datepicker js -->
<script src="assets/js/plugins/moment.min.js"></script>
<script src="assets/js/plugins/daterangepicker.js"></script>
<script src="assets/js/pages/ac-datepicker.js"></script>
@@include('./layouts/footer-bottom-link.html')
</body>
</html>
