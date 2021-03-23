<!DOCTYPE html>
<html lang="en">

<head>

	@@include('./layouts/head.html')
	@@include('./layouts/head-bottom-link.html')

</head>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper auth-v3 lockscreen">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-stretch text-center">
				<div class="col-md-12">
					<div class="card-body">
						<div class="">
							<img src="assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar">
							<h4 class="mb-3 f-w-600">Joseph William</h4>
						</div>
						<div class="">
							<div class="input-group">
								<span class="input-group-text"><i data-feather="lock"></i></span>
								<input type="password" class="form-control" placeholder="Password">
							</div>
						</div>
						<div>
							<button class="btn btn-primary btn-block mt-4">Unlock</button>
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
@@include('./layouts/footer-bottom-link.html')

</body>

</html>
