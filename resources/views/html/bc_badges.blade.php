<!DOCTYPE html>
<html lang="en">
<head>
	@include('html.layouts.head')
	@include('html.layouts.head-bottom-link')
</head>
@include('html.layouts.layout-vertical')
<!-- [ Main Content ] start -->
<div class="pc-container">
	<div class="pcoded-content">
		<!-- [ Main Content ] start -->
		<div class="row mb-3">
				<div class="col-md-8">
					<h3>Badges</h3>
					<p class="lead">Documentation and examples for badges, our small count and labeling component.</p>
					<p class="f-w-500">Check out <a href="https://dashboardkit.io/bootstrap/docs/index-bc-package.html#page-badge" target="_blank" class="badge bg-light-primary">Documentation</a></p>
				</div>
		</div>
		<div class="row">
			<!-- [ badge ] start -->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Basic Badges</h5>
					</div>
					<div class="card-body">
						<h1>Example heading <span class="badge bg-secondary">New</span></h1>
						<h2>Example heading <span class="badge bg-secondary">New</span></h2>
						<h3>Example heading <span class="badge bg-secondary">New</span></h3>
						<h4>Example heading <span class="badge bg-secondary">New</span></h4>
						<h5>Example heading <span class="badge bg-secondary">New</span></h5>
						<h6>Example heading <span class="badge bg-secondary">New</span></h6>
					</div>
				</div>
				<div class="card btn-page">
					<div class="card-header">
						<h5>Button Badges</h5>
					</div>
					<div class="card-body">
						<button type="button" class="btn  btn-primary">primary <span class="badge bg-secondary">4</span></button>
						<button type="button" class="btn  btn-secondary">secondary <span class="badge bg-secondary">4</span></button>
						<button type="button" class="btn  btn-success">success <span class="badge bg-secondary">4</span></button>
						<button type="button" class="btn  btn-danger">danger <span class="badge bg-secondary">4</span></button>
						<button type="button" class="btn  btn-warning">warning <span class="badge bg-secondary">4</span></button>
						<button type="button" class="btn  btn-info">info <span class="badge bg-secondary">4</span></button>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<h5>Contextual Variations</h5>
					</div>
					<div class="card-body">
						<span class="badge bg-primary">Primary</span>
						<span class="badge bg-secondary">Secondary</span>
						<span class="badge bg-success">Success</span>
						<span class="badge bg-danger">Danger</span>
						<span class="badge bg-warning">Warning</span>
						<span class="badge bg-info">Info</span>
						<span class="badge bg-light">Light</span>
						<span class="badge bg-dark">Dark</span>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<h5>Pill Badges</h5>
					</div>
					<div class="card-body">
						<span class="badge rounded-pill bg-primary">Primary</span>
						<span class="badge rounded-pill bg-secondary">Secondary</span>
						<span class="badge rounded-pill bg-success">Success</span>
						<span class="badge rounded-pill bg-danger">Danger</span>
						<span class="badge rounded-pill bg-warning">Warning</span>
						<span class="badge rounded-pill bg-info">Info</span>
						<span class="badge rounded-pill bg-light">Light</span>
						<span class="badge rounded-pill bg-dark">Dark</span>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<h5>Links</h5>
					</div>
					<div class="card-body">
						<a href="#!" class="badge bg-primary">Primary</a>
						<a href="#!" class="badge bg-secondary">Secondary</a>
						<a href="#!" class="badge bg-success">Success</a>
						<a href="#!" class="badge bg-danger">Danger</a>
						<a href="#!" class="badge bg-warning">Warning</a>
						<a href="#!" class="badge bg-info">Info</a>
						<a href="#!" class="badge bg-light">Light</a>
						<a href="#!" class="badge bg-dark">Dark</a>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<h5>Light variant</h5>
					</div>
					<div class="card-body">
						<span class="badge bg-light-primary">Primary</span>
						<span class="badge bg-light-secondary">Secondary</span>
						<span class="badge bg-light-success">Success</span>
						<span class="badge bg-light-danger">Danger</span>
						<span class="badge bg-light-warning">Warning</span>
						<span class="badge bg-light-info">Info</span>
						<span class="badge bg-light-light">Light</span>
						<span class="badge bg-light-dark">Dark</span>
					</div>
				</div>
			</div>
			<!-- [ badge ] end -->
		</div>
		<!-- [ Main Content ] end -->
	</div>
</div>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
@include('html.layouts.footer-bottom-link')
</body>

</html>
