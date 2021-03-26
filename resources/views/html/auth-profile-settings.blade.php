<!DOCTYPE html>
<html lang="en">

<head>

	@include('html.layouts.head')
	@include('html.layouts.head-bottom-link')

</head>

<div class="auth-wrapper">
	<div class="blur-bg-images"></div>
	<!-- [ profile-settings ] start -->
	<div class="auth-content">
		<div class="auth-bg">
			<span class="r"></span>
			<span class="r s"></span>
			<span class="r s"></span>
			<span class="r"></span>
		</div>
		<div class="card">
			<div class="card-body text-center">
				<h5 class="mb-4">Profile Settings</h5>
				<img src="assets/images/user/avatar-3.jpg" class="img-radius mb-4" alt="User-Profile-Image">
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Name">
				</div>
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="User Name">
				</div>
				<div class="mb-4 ">
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
						<label class="form-check-label" for="flexRadioDefault1">
							Private Profile
						</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
						<label class="form-check-label" for="flexRadioDefault2">
							Public Profile
						</label>
					</div>
				</div>
				<button class="btn  btn-primary mb-4">Register</button>
				<p class="mb-0 text-muted">Don’t have an account? <a href="{{ route('auth_signup') }}">Signup</a></p>
			</div>
		</div>
	</div>
	<!-- [ profile-settings ] end -->
</div>

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/feather.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>
@include('html.layouts.footer-bottom-link')

</body>

</html>
