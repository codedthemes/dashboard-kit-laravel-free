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
				<h3>Carousel</h3>
				<p class="lead">A slideshow component for cycling through elements—images or slides of text—like a carousel.</p>
				<p class="f-w-500">Check out <a href="https://dashboardkit.io/bootstrap/docs/index-bc-package.html#page-carousel" target="_blank" class="badge bg-light-primary">Documentation</a></p>
			</div>
		</div>
		<div class="row">
			<!-- [ basic-carousel ] start -->
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header">
						<h5>Basic Carousel</h5>
					</div>
					<div class="card-body">
						<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="img-fluid d-block w-100" src="assets/images/slider/img-slide-1.jpg" alt="First slide">
								</div>
								<div class="carousel-item">
									<img class="img-fluid d-block w-100" src="assets/images/slider/img-slide-2.jpg" alt="Second slide">
								</div>
								<div class="carousel-item">
									<img class="img-fluid d-block w-100" src="assets/images/slider/img-slide-3.jpg" alt="Third slide">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- [ basic-carousel ] end -->
			<!-- [ carousel-control ] start -->
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header">
						<h5>Carousel Controls</h5>
					</div>
					<div class="card-body">
						<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="img-fluid d-block w-100" src="assets/images/slider/img-slide-4.jpg" alt="First slide">
								</div>
								<div class="carousel-item">
									<img class="img-fluid d-block w-100" src="assets/images/slider/img-slide-3.jpg" alt="Second slide">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
							<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
						</div>
					</div>
				</div>
			</div>
			<!-- [ carousel-control ] end -->
			<!-- [ carousel-indicators ] start -->
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header">
						<h5>Carousel Indicators</h5>
					</div>
					<div class="card-body">
						<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
							<ol class="carousel-indicators">
								<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
								<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="img-fluid d-block w-100" src="assets/images/slider/img-slide-7.jpg" alt="First slide">
								</div>
								<div class="carousel-item">
									<img class="img-fluid d-block w-100" src="assets/images/slider/img-slide-3.jpg" alt="Second slide">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
						</div>
					</div>
				</div>
			</div>
			<!-- [ carousel-indicators ] end -->
			<!-- [ carousel-Crossfade ] start -->
			<div class="col-sm-6">
				<div class="card">
					<div class="card-header">
						<h5>Carousel Crossfade</h5>
					</div>
					<div class="card-body">
						<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="img-fluid d-block w-100" src="assets/images/slider/img-slide-1.jpg" alt="First slide">
								</div>
								<div class="carousel-item">
									<img class="img-fluid d-block w-100" src="assets/images/slider/img-slide-2.jpg" alt="Second slide">
								</div>
								<div class="carousel-item">
									<img class="img-fluid d-block w-100" src="assets/images/slider/img-slide-3.jpg" alt="Third slide">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
							<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
						</div>
					</div>
				</div>
			</div>
			<!-- [ carousel-Crossfade ] end -->
			<!-- [ carousel-Caption ] start -->
			<div class="col-sm-6">
				<div class="card">
					<div class="card-header">
						<h5>Carousel with Captions</h5>
					</div>
					<div class="card-body">
						<div id="carouselExampleIndicatorscaption" class="carousel slide" data-bs-ride="carousel">
							<ol class="carousel-indicators">
								<li data-bs-target="#carouselExampleIndicatorscaption" data-bs-slide-to="0" class="active"></li>
								<li data-bs-target="#carouselExampleIndicatorscaption" data-bs-slide-to="1"></li>
								<li data-bs-target="#carouselExampleIndicatorscaption" data-bs-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="img-fluid d-block w-100" src="assets/images/slider/img-slide-2.jpg" alt="First slide">
									<div class="carousel-caption d-none d-md-block">
										<h5 class="text-white">First slide label</h5>
										<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
									</div>
								</div>
								<div class="carousel-item">
									<img class="img-fluid d-block w-100" src="assets/images/slider/img-slide-1.jpg" alt="Second slide">
									<div class="carousel-caption d-none d-md-block">
										<h5 class="text-white">Second slide label</h5>
										<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
									</div>
								</div>
								<div class="carousel-item">
									<img class="img-fluid d-block w-100" src="assets/images/slider/img-slide-3.jpg" alt="Third slide">
									<div class="carousel-caption d-none d-md-block">
										<h5 class="text-white">Third slide label</h5>
										<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
									</div>
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicatorscaption" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
							<a class="carousel-control-next" href="#carouselExampleIndicatorscaption" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
						</div>
					</div>
				</div>
			</div>
			<!-- [ carousel-Caption ] end -->
			<!-- [ Dark variant ] start -->
			<div class="col-sm-6">
				<div class="card">
					<div class="card-header">
						<h5>Dark variant</h5>
					</div>
					<div class="card-body">
						<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
							<ol class="carousel-indicators">
								<li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
								<li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
								<li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="img-fluid d-block w-100" src="assets/images/gallery-grid/img-grd-gal-2.jpg" alt="First slide">
									<div class="carousel-caption d-none d-md-block">
										<h5>First slide label</h5>
										<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
									</div>
								</div>
								<div class="carousel-item">
									<img class="img-fluid d-block w-100" src="assets/images/gallery-grid/img-grd-gal-1.jpg" alt="Second slide">
									<div class="carousel-caption d-none d-md-block">
										<h5>Second slide label</h5>
										<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
									</div>
								</div>
								<div class="carousel-item">
									<img class="img-fluid d-block w-100" src="assets/images/gallery-grid/img-grd-gal-3.jpg" alt="Third slide">
									<div class="carousel-caption d-none d-md-block">
										<h5>Third slide label</h5>
										<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
									</div>
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
							<a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
						</div>
					</div>
				</div>
			</div>
			<!-- [ Dark variant ] end -->
		</div>
		<!-- [ Main Content ] end -->
	</div>
</div>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
@include('html.layouts.footer-bottom-link')
</body>

</html>
