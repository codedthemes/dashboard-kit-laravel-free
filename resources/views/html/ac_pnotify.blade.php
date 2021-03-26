<!DOCTYPE html>
<html lang="en">

<head>
	@include('html.layouts.head')
	<!-- pnotify-custom css -->
	<link rel="stylesheet" href="assets/css/plugins/PNotifyBrightTheme.css">
	@include('html.layouts.head-bottom-link')
</head>
@include('html.layouts.layout-vertical')
<!-- [ Main Content ] start -->
<section class="pc-container">
	<div class="pcoded-content">
		<!-- [ Main Content ] start -->
		<div class="row mb-3">
				<div class="col-md-8">
					<h3>pNotify</h3>
					<p class="lead">pNotify provides a unique notification flow called <a href="https://sciactive.com/2020/02/11/the-modalish-notification-flow/" target="_blank">modalish</a> that provides a good user experience, even when many notifications are shown at once.</p>
					<p class="f-w-500">Check out <a href="https://dashboardkit.io/bootstrap/docs/index-ac-package.html#page-pnotify" target="_blank" class="badge bg-light-primary">Documentation</a> <a href="https://github.com/sciactive/pnotify" target="_blank" class="badge bg-light-dark">github</a></p>
				</div>
		</div>
		<div class="row">
			<!-- [ notification-alert ] start -->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Notification Alert</h5>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table">
								<tbody>
									<tr>
										<td>warning Notice</td>
										<td>
											<button type="button" class="btn  btn-warning btn-sm" id="pnotify-default"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-warning</code> to use this style notification</td>
									</tr>
									<tr>
										<td>Primary Notice</td>
										<td>
											<button type="button" class="btn  btn-primary btn-sm" id="pnotify-primary"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-default</code> to use this style notification</td>
									</tr>
									<tr>
										<td>Success Notice</td>
										<td>
											<button type="button" class="btn  btn-success btn-sm" id="pnotify-success"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-success</code> to use this style notification</td>
									</tr>
									<tr>
										<td>Info Notice</td>
										<td>
											<button type="button" class="btn  btn-info btn-sm" id="pnotify-info"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-info</code> to use this style notification</td>
									</tr>
									<tr>
										<td>Danger Notice</td>
										<td>
											<button type="button" class="btn  btn-danger btn-sm" id="pnotify-danger"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-danger</code> to use this style notification</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- [ notification-alert ] end -->
			<!-- [ desktop-notification ] start -->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Desktop Notifications</h5>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table">
								<tbody>
									<tr>
										<td>Desktop Notice</td>
										<td>
											<button type="button" class="btn  btn-primary btn-sm" id="pnotify-desktop-notice"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-desktop-notice</code> to use this style notification</td>
									</tr>
									<tr>
										<td>Success Notification</td>
										<td>
											<button type="button" class="btn  btn-success btn-sm" id="pnotify-desktop-success"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-desktop-success</code> to use this style notification</td>
									</tr>
									<tr>
										<td>Info Notification</td>
										<td>
											<button type="button" class="btn  btn-info btn-sm" id="pnotify-desktop-info"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-desktop-info</code> to use this style notification</td>
									</tr>
									<tr>
										<td>Danger Notification</td>
										<td>
											<button type="button" class="btn  btn-danger btn-sm" id="pnotify-desktop-danger"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-desktop-danger</code> to use this style notification</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- [ desktop-notification ] end -->
			<!-- [ notification-position ] start -->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Notification Position</h5>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table">
								<tbody>
									<tr>
										<td>Top Left</td>
										<td>
											<button type="button" class="btn  btn-primary btn-sm" id="pnotify-stack-top-left"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-stack-top-left</code> to use this style notification</td>
									</tr>
									<tr>
										<td>Bottom Left</td>
										<td>
											<button type="button" class="btn  btn-primary btn-sm" id="pnotify-stack-bottom-left"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-stack-bottom-left</code> to use this style notification</td>
									</tr>
									<tr>
										<td>Bottom Right</td>
										<td>
											<button type="button" class="btn  btn-primary btn-sm" id="pnotify-stack-bottom-right"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-stack-bottom-right</code> to use this style notification</td>
									</tr>
									<tr>
										<td>Custom Left</td>
										<td>
											<button type="button" class="btn  btn-primary btn-sm" id="pnotify-stack-custom-left"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-stack-custom-left</code> to use this style notification</td>
									</tr>
									<tr>
										<td>Custom Right</td>
										<td>
											<button type="button" class="btn  btn-primary btn-sm" id="pnotify-stack-custom-right"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-stack-custom-right</code> to use this style notification</td>
									</tr>
									<tr>
										<td>Custom Top</td>
										<td>
											<button type="button" class="btn  btn-primary btn-sm" id="pnotify-stack-custom-top"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-stack-custom-top</code> to use this style notification</td>
									</tr>
									<tr>
										<td>Custom Bottom</td>
										<td>
											<button type="button" class="btn  btn-primary btn-sm" id="pnotify-stack-custom-bottom"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-stack-custom-bottom</code> to use this style notification</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- [ notification-position ] end -->
			<!-- [ notification-option ] start -->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Notification Option</h5>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table">
								<tbody>
									<tr>
										<td>No Title</td>
										<td>
											<button type="button" class="btn  btn-primary btn-sm" id="pnotify-no-title"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-no-title</code> to use this style notification</td>
									</tr>
									<tr>
										<td>Rich Title</td>
										<td>
											<button type="button" class="btn  btn-primary btn-sm" id="pnotify-rich"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-rich</code> to use this style notification</td>
									</tr>
									<tr>
										<td>Click to Close</td>
										<td>
											<button type="button" class="btn  btn-primary btn-sm" id="pnotify-click"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-click</code> to use this style notification</td>
									</tr>
									<tr>
										<td>Custom Button</td>
										<td>
											<button type="button" class="btn  btn-primary btn-sm" id="pnotify-buttons"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-buttons</code> to use this style notification</td>
									</tr>
									<tr>
										<td>Callback Button</td>
										<td>
											<button type="button" class="btn  btn-primary btn-sm" id="pnotify-callbacks"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-callbacks</code> to use this style notification</td>
									</tr>
									<tr>
										<td>Progress Button</td>
										<td>
											<button type="button" class="btn  btn-primary btn-sm" id="pnotify-progress"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-progress</code> to use this style notification</td>
									</tr>
									<tr>
										<td>Dynamic progress Button</td>
										<td>
											<button type="button" class="btn  btn-primary btn-sm" id="pnotify-dynamic"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-dynamic</code> to use this style notification</td>
									</tr>
									<tr>
										<td>Multiline Button</td>
										<td>
											<button type="button" class="btn  btn-primary btn-sm" id="pnotify-multiline"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-multiline</code> to use this style notification</td>
									</tr>
									<tr>
										<td>Prompt Button</td>
										<td>
											<button type="button" class="btn  btn-primary btn-sm" id="pnotify-prompt"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-prompt</code> to use this style notification</td>
									</tr>
									<tr>
										<td>Confirm Button</td>
										<td>
											<button type="button" class="btn  btn-primary btn-sm" id="pnotify-confirm"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-confirm</code> to use this style notification</td>
									</tr>
									<tr>
										<td>Stickey Button</td>
										<td>
											<button type="button" class="btn  btn-primary btn-sm" id="pnotify-sticky"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-sticky</code> to use this style notification</td>
									</tr>
									<tr>
										<td>Permenant Button</td>
										<td>
											<button type="button" class="btn  btn-primary btn-sm" id="pnotify-permanent-buttons"><i data-feather="bell"></i> Click here!</button>
										</td>
										<td>Use id <code>pnotify-permanent-buttons</code> to use this style notification</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- [ notification-option ] end -->
		</div>
		<!-- [ Main Content ] end -->
	</div>
</section>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- pnotify Js -->
<script src="assets/js/plugins/PNotify.js"></script>
<script src="assets/js/plugins/PNotifyButtons.js"></script>
<script src="assets/js/plugins/PNotifyCallbacks.js"></script>
<script src="assets/js/plugins/PNotifyDesktop.js"></script>
<script src="assets/js/plugins/PNotifyConfirm.js"></script>
<script src="assets/js/pages/notify-event.js"></script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
