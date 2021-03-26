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
							<h4 class="mb-3 f-w-600">Create Account</h4>
						</div>
						<div class="">
							<div class="input-group mb-3">
								<span class="input-group-text"><i data-feather="user"></i></span>
								<input type="text" class="form-control" placeholder="Username">
							</div>
							<div class="input-group mb-3">
								<span class="input-group-text"><i data-feather="mail"></i></span>
								<input type="email" class="form-control" placeholder="Email address">
							</div>
							<div class="input-group mb-3">
								<span class="input-group-text"><i data-feather="lock"></i></span>
								<input type="password" class="form-control" placeholder="Password">
							</div>
							<div class="input-group mb-4">
								<span class="input-group-text"><i data-feather="lock"></i></span>
								<input type="password" class="form-control" placeholder="Password (Conform)">
							</div>
							<div class="form-group  mb-4">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
									<label class="form-check-label" for="flexCheckChecked">
										I accept the <a href="#!"> Term & condition</a>
									</label>
								</div>
							</div>
							<div class="">
								<button class="btn btn-primary btn-block mt-2">Create Account</button>
							</div>
						</div>
						<p class="mb-2 ">Already have an account? <a href="#!" class="f-w-400">Signin</a></p>
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
