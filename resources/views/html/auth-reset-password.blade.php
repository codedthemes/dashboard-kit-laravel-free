<!DOCTYPE html>
<html lang="en">

<head>

	@include('html.layouts.head')
	@include('html.layouts.head-bottom-link')

</head>

<div class="auth-wrapper">
	<!-- [ reset-password ] start -->
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="assets/images/logo-dark.svg" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Reset your password</h4>
						<div class="input-group mb-4">
							<span class="input-group-text"><i data-feather="mail"></i></span>
							<input type="email" class="form-control" placeholder="Email address">
						</div>
						<button class="btn btn-block btn-primary mb-4">Reset password</button>
						<p class="mb-0 text-muted">Don’t have an account? <a href="{{ route('auth_signup')}}" class="f-w-400">Signup</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- [ reset-password ] end -->
</div>

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/feather.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>
@include('html.layouts.footer-bottom-link')

</body>

</html>
