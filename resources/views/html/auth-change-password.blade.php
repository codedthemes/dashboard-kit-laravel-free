<!DOCTYPE html>
<html lang="en">

<head>

	@include('html.layouts.head')
	@include('html.layouts.head-bottom-link')

</head>

<div class="auth-wrapper">
	<div class="blur-bg-images"></div>
	<!-- [ change-password ] start -->
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center">
				<div class="col-md-12">
					<div class="card-body">
						<div class="text-center">
							<img src="assets/images/logo-dark.svg" alt="" class="img-fluid mb-4">
							<h4 class="mb-4 f-w-400">Change your password</h4>
						</div>
						<div class="input-group mb-2">
							<input type="password" class="form-control" placeholder="Current Password">
						</div>
						<div class="input-group mb-2">
							<input type="password" class="form-control" placeholder="New Password">
						</div>
						<div class="input-group mb-4">
							<input type="password" class="form-control" placeholder="Re-Type New Password">
						</div>
						<button class="btn btn-block btn-primary mb-4">Change password</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- [ change-password ] end -->
</div>

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/feather.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>
@include('html.layouts.footer-bottom-link')

</body>

</html>
