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
				<h1 class="text-white my-4">Welcome you!</h1>
				<h4 class="text-white font-weight-normal">Signup to your account and made member of the Nextro Dashboard Template.<br />Do not forget to play with live customizer</h4>
			</div>
		</div>
		<div class="auth-side-form">
			<div class=" auth-content">
				<img src="assets/images/auth/auth-logo-dark.svg" alt="" class="img-fluid mb-4 d-block d-xl-none d-lg-none">
				<h4 class="mb-3 f-w-400">Sign up</h4>
				<div class="input-group mb-3">
					<span class="input-group-text"><i data-feather="user"></i></span>
					<input type="text" class="form-control" placeholder="Username">
				</div>
				<div class="input-group mb-3">
					<span class="input-group-text"><i data-feather="mail"></i></span>
					<input type="email" class="form-control" placeholder="Email address">
				</div>
				<div class="input-group mb-4">
					<span class="input-group-text"><i data-feather="lock"></i></span>
					<input type="password" class="form-control" placeholder="Password">
				</div>
				<div class="form-group  mt-2">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
						<label class="form-check-label" for="flexCheckChecked">
							Send me the <a href="#!"> Newsletter</a> weekly.
						</label>
					</div>
				</div>
				<button class="btn btn-primary btn-block mb-4">Sign up</button>
				<div class="text-center">
					<div class="saprator my-4"><span>OR</span></div>
					<button class="btn text-white bg-facebook mb-2 me-2  wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-facebook-f"></i></button>
					<button class="btn text-white bg-googleplus mb-2 me-2 wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-google-plus-g"></i></button>
					<button class="btn text-white bg-twitter mb-2  wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-twitter"></i></button>
					<p class="mt-4">Already have an account? <a href="{{ route('auth_signin_img_side')}}" class="f-w-400">Signin</a></p>
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
