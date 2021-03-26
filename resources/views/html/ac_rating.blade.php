<!DOCTYPE html>
<html lang="en">

<head>
	@include('html.layouts.head')
	<!-- Rating css -->
	<link rel="stylesheet" href="assets/css/plugins/bars-1to10.css">
	<link rel="stylesheet" href="assets/css/plugins/bars-horizontal.css">
	<link rel="stylesheet" href="assets/css/plugins/bars-movie.css">
	<link rel="stylesheet" href="assets/css/plugins/bars-pill.css">
	<link rel="stylesheet" href="assets/css/plugins/bars-reversed.css">
	<link rel="stylesheet" href="assets/css/plugins/bars-square.css">
	<link rel="stylesheet" href="assets/css/plugins/bootstrap-stars.css">
	<link rel="stylesheet" href="assets/css/plugins/css-stars.css">
	@include('html.layouts.head-bottom-link')
</head>
@include('html.layouts.layout-vertical')
<!-- [ Main Content ] start -->
<section class="pc-container">
	<div class="pcoded-content">
		<!-- [ Main Content ] start -->
		<div class="row mb-3">
				<div class="col-md-8">
					<h3>Rating</h3>
					<p class="lead">jQuery Bar Rating Plugin works by transforming a standard select field into a rating widget. The rating widget can be flexibly styled with CSS. Take a look at a few examples.</p>
					<p class="f-w-500">Check out <a href="https://dashboardkit.io/bootstrap/docs/index-ac-package.html#page-rating" target="_blank" class="badge bg-light-primary">Documentation</a> <a href="https://github.com/antennaio/jquery-bar-rating" target="_blank" class="badge bg-light-dark">github</a></p>
				</div>
		</div>
		<div class="row">
			<!-- [ rating ] start -->
			<div class="col-sm-12">
				<div class="text-center">
					<button class="btn  btn-primary rating-enable mb-4">Enable</button>
					<button class="btn  btn-primary rating-disable mb-4">Disable</button>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>1/10 Rating</h5>
					</div>
					<div class="card-body">
						<p>Use <code>id="demo-1to10"</code> to see default rating</p>
						<div class="box-body">
							<select id="demo-1to10" name="rating" autocomplete="off">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7" selected="selected">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
							<span class="current-rating"></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Movie Rating</h5>
					</div>
					<div class="card-body">
						<p>Use <code>id="demo-movie"</code> to see movie rating</p>
						<div class="box-body">
							<select id="demo-movie" name="rating" autocomplete="off">
								<option value="Bad">Bad</option>
								<option value="Mediocre">Mediocre</option>
								<option value="Good" selected="selected">Good</option>
								<option value="Awesome">Awesome</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Square Rating</h5>
					</div>
					<div class="card-body">
						<p>Use <code>id="demo-square"</code> to see square rating</p>
						<div class="box-body">
							<select id="demo-square" name="rating" autocomplete="off">
								<option value="" label="0"></option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Pill Rating</h5>
					</div>
					<div class="card-body">
						<p>Use <code>id="demo-pill"</code> to see pill rating</p>
						<div class="box-body">
							<select id="demo-pill" name="rating" autocomplete="off">
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="C">C</option>
								<option value="D">D</option>
								<option value="E">E</option>
								<option value="F">F</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Reverse Rating</h5>
					</div>
					<div class="card-body">
						<p>Use <code>id="demo-reversed"</code> to see reverse rating</p>
						<div class="box-body">
							<select id="demo-reversed" name="rating" autocomplete="off">
								<option value="Strongly Agree">Strongly Agree</option>
								<option value="Agree">Agree</option>
								<option value="Neither Agree or Disagree" selected="selected">Neither Agree or Disagree</option>
								<option value="Disagree">Disagree</option>
								<option value="Strongly Disagree">Strongly Disagree</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Horizontal Rating</h5>
					</div>
					<div class="card-body">
						<p>Use <code>id="demo-horizontal"</code> to see horizontal rating</p>
						<div class="box-body">
							<select id="demo-horizontal" name="rating" autocomplete="off">
								<option value="10">10</option>
								<option value="9">9</option>
								<option value="8">8</option>
								<option value="7">7</option>
								<option value="6">6</option>
								<option value="5">5</option>
								<option value="4">4</option>
								<option value="3">3</option>
								<option value="2">2</option>
								<option value="1" selected="selected">1</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Font Awesome Rating</h5>
					</div>
					<div class="card-body">
						<p>Use <code>id="demo-fontawesome"</code> to see font awesome rating</p>
						<div class="stars stars-example-fontawesome">
							<select id="demo-fontawesome" name="rating" autocomplete="off">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>CSS Stars Rating</h5>
					</div>
					<div class="card-body">
						<p>Use <code>id="demo-css"</code> to see css stars rating</p>
						<div class="stars stars-example-css">
							<select id="demo-css" class="rating-star" name="rating" autocomplete="off">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Fractional Star Rating</h5>
					</div>
					<div class="card-body">
						<p>Use <code>id="demo-fontawesome-o"</code> to see fractional star rating</p>
						<div class="stars stars-example-fontawesome-o">
							<select id="demo-fontawesome-o" name="rating" data-current-rating="5.6" autocomplete="off">
								<option value="" label="0"></option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
							<span class="title current-rating">Current rating: <span class="value"></span></span>
							<span class="title your-rating hidden">Your rating: <span class="value"></span>&nbsp;<a href="#!" class="clear-rating"><i class="icofont icofont-close-circled"></i></a></span>
						</div>
					</div>
				</div>
			</div>
			<!-- [ rating ] end -->
		</div>
		<!-- [ Main Content ] end -->
	</div>
</section>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- Rating Js -->
<script src="assets/js/plugins/jquery.barrating.min.js"></script>
<script src="assets/js/pages/ac-rating.js"></script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
