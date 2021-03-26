<!DOCTYPE html>
<html lang="en">
<head>
	@include('html.layouts.head')
	@include('html.layouts.head-bottom-link')
</head>
<!-- [ signin-img ] start -->
<div class="auth-wrapper align-items-stretch aut-bg-img">
	<div class="flex-grow-1">
		<div class="h-100 d-lg-flex align-items-end auth-side-img">
			<div class="col-sm-10 auth-content w-auto">
				<img src="assets/images/logo.svg" alt="" class="img-fluid">
				<h1 class="text-white my-4">Change securely!</h1>
				<h4 class="text-white font-weight-normal">Change your account password and make your self more securely Nextro Dashboard Template.<br/>Do not forget to play with live customizer</h4>
			</div>
		</div>
		<div class="auth-side-form">
			<div class=" auth-content">
				<img src="assets/images/auth/auth-logo-dark.svg" alt="" class="img-fluid mb-4 d-block d-xl-none d-lg-none">
				<div class="input-group mb-4">
					<h4 class="mb-4 f-w-400">Change your password</h4>
					<div class="input-group mb-2">
						<input type="password" class="form-control" placeholder="Current Password">
					</div>
					<div class="input-group mb-2">
						<input type="password" class="form-control" placeholder="New Password">
					</div>
					<div class="input-group mb-4">
						<input type="password" class="form-control" placeholder="Re-Type New Password">
					</div>
				</div>
				<button class="btn btn-block btn-primary mb-4">Change password</button>
				<div class="text-center">
					<div class="saprator my-4"><span>OR</span></div>
					<button class="btn text-white bg-facebook mb-2 me-2  wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-facebook-f"></i></button>
					<button class="btn text-white bg-googleplus mb-2 me-2 wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-google-plus-g"></i></button>
					<button class="btn text-white bg-twitter mb-2  wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-twitter"></i></button>
					<p class="mb-0 mt-4 text-muted">Don’t have an account? <a href="{{ route('auth_signup_img_side')}}" class="f-w-400">Signup</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ signin-img ] end -->
<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/feather.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>
@include('html.layouts.footer-bottom-link')
</body>
</html>
