<!DOCTYPE html>
<html lang="en">

<head>

	@include('html.layouts.head')
	@include('html.layouts.head-bottom-link')

</head>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper auth-v3">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-stretch text-center">
				<div class="col-md-6 img-card-side">
					<img src="assets/images/auth/auth-side1.jpg" alt="" class="img-fluid">
					<div class="img-card-side-content">
						<img src="assets/images/logo-dark.svg" alt="" class="img-fluid">
					</div>
				</div>
				<div class="col-md-6">
					<div class="card-body">
						<div class="">
							<h4 class="mb-3 f-w-600">Change your password</h4>
						</div>
						<div class="">
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
						<div class="">
							<p class="mb-0 text-muted"></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/feather.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>
@include('html.layouts.footer-bottom-link')

</body>

</html>
