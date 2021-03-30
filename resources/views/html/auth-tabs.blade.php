<!DOCTYPE html>
<html lang="en">

<head>

	@include('html.layouts.head')
	@include('html.layouts.head-bottom-link')

</head>

<!-- [ signin-img-tabs ] start -->
<div class="blur-bg-images"></div>
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card text-center">
			<div class="card-body">
				<h3 class="mb-3">Welcome to <span class="text-primary">Nextro</span></h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
				<div class="toggle-block">
					<ol class="position-relative carousel-indicators justify-content-center">
						<li class="toggle-btn"></li>
						<li class="active"></li>
					</ol>
					<div class="input-group mb-2">
						<span class="input-group-text"><i data-feather="mail"></i></span>
						<input type="email" class="form-control" placeholder="Email address">
					</div>
					<div class="input-group mb-4">
						<span class="input-group-text"><i data-feather="lock"></i></span>
						<input type="password" class="form-control" placeholder="Password">
					</div>
					<div class="form-group ">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="customCheckdefh21" checked>
							<label class="form-check-label" for="customCheckdefh21">
								Save credentials
							</label>
						</div>
					</div>
					<button class="btn  btn-primary mb-4">Signin</button>
					<button class="btn  btn-outline-primary mb-4 toggle-btn">Create Profile</button>
					<p class="mb-2 text-muted">Forgot password? <a href="{{ route('auth_reset_password')}}" class="f-w-400">Reset</a></p>
				</div>
				<div class="toggle-block collapse">
					<ol class="position-relative carousel-indicators justify-content-center">
						<li class="active"></li>
						<li class="toggle-btn"></li>
					</ol>
					<div class="input-group mb-2">
						<span class="input-group-text"><i data-feather="user"></i></span>
						<input type="text" class="form-control" placeholder="Username">
					</div>
					<div class="input-group mb-2">
						<span class="input-group-text"><i data-feather="mail"></i></span>
						<input type="email" class="form-control" placeholder="Email address">
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text"><i data-feather="lock"></i></span>
						<input type="password" class="form-control" placeholder="Password">
					</div>
					<div class="form-group  mt-2">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="customCheckdefh2" checked>
							<label class="form-check-label" for="customCheckdefh2">
								Send me the <a href="#!"> Newsletter</a> weekly.
							</label>
						</div>
					</div>
					<button class="btn  btn-primary mb-4">Signup</button>
					<button class="btn  btn-outline-primary mb-4 toggle-btn">Existing user</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ signin-img-tabs ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/feather.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script>
	$('.toggle-btn').on('click', function() {
		$('.toggle-block').toggle();
	})
</script>

@include('html.layouts.footer-bottom-link')

</body>

</html>
