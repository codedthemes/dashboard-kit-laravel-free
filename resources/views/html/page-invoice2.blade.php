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
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Invoice 2</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
							<li class="breadcrumb-item"><a href="#!">Invoice</a></li>
							<li class="breadcrumb-item">Invoice 2</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->
		<div class="row">
			<!-- [ basic-alert ] start -->
			<div class="col-md-12">
				<!-- [ Invoice ] start -->
			   <div id="printTable">
				   <div class="row justify-content-between">
					   <div class="col-sm-8 mb-4">
						   <div class="media mb-4">
							   <span class="avtar avtar-icon avtar-square avtar-l"><img src="assets/images/logo-sm.svg" alt="images" class="img-fluid"></span>
							   <div class="media-body ms-3 align-self-center">
								   <h1 class="mb-1 font-weight-normal">Mailchimp, Inc.</h1>
								   <p class="mb-0">9319 Leatherwood St. Merrick, NY 11566</p>
							   </div>
						   </div>
						   <p>Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit donec sed odio dui. </p>
					   </div>
					   <div class="col-sm-4 mb-4 text-end">
						   <h6 class="text-body text-uppercase f-12">Total due</h6>
						   <h1 class="display-4 font-weight-normal">$7,761.6</h1>
						   <h6 class="my-3 text-body text-uppercase f-12">invoice number #4412879005-J </h6>
						   <div class="btn-group btn-group-toggle d-print-none">
							   <button class="btn btn-print-invoice btn-outline-light text-dark border">Print</button>
						   </div>
						   <button type="button" class="btn btn-primary px-md-5 m-l-10 d-print-none">Pay now</button>
					   </div>
				   </div>
				   <div class="row">
					   <div class="col-md-4">
						   <h6 class="mb-3">Client Information :</h6>
						   <p class="mb-2">Joe Doe</p>
						   <p class="mb-2">9319 Leatherwood St. Merrick, NY 11566</p>
						   <p class="mb-2">(312) 555 44 22</p>
						   <p><a class="text-secondary" href="mailto:joe@demo.com" target="_top">joe@demo.com</a></p>
					   </div>
					   <div class="col-md-4">
						   <h6 class="mb-3">Order informarmation</h6>
						   <p class="mb-2">ID: #ZZ23749</p>
						   <p class="mb-2">Status: <span class="rounded-pill badge-warning">PENDING</span></p>
					   </div>
				   </div>
				   <div class="row mt-4">
					   <div class="col-sm-6 d-flex align-items-center mb-4">
						   <h2 class="d-inline-block font-weight-normal">Invoice detail</h2>
					   </div>
					   <div class="col-sm-6 d-flex align-items-center justify-content-end mb-4">
						   <div class="btn-group btn-group-toggle btn-group-link">
							   <label class="btn active">
								   <input type="radio" name="options"> <i class="fas fa-sort-amount-down m-r-5"></i>SORT</label>
							   <div class="btn ">
								   <div class="dropdown mb-0 me-2">
									   <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-sort-amount-up-alt m-r-5"></i>FILTER</a>
									   <div class="dropdown-menu dropdown-menu-end">
										   <a class="dropdown-item" href="#!"><i class="feather icon-alert-circle me-2"></i> Priority</a>
										   <a class="dropdown-item" href="#!"><i class="feather icon-check me-2"></i> Open Tasks</a>
										   <a class="dropdown-item" href="#!"><i class="feather icon-calendar me-2"></i> Due Date</a>
										   <a class="dropdown-item" href="#!"><i class="feather icon-target me-2"></i> Status</a>
									   </div>
								   </div>
							   </div>
						   </div>
					   </div>
				   </div>
				   <div class="card border-top-0">
					   <div class="card-body p-0">
						   <div class="table-responsive">
							   <table class="table invoice-detail-table">
								   <thead>
									   <tr>
										   <th>Description</th>
										   <th>Quantity</th>
										   <th>Amount</th>
										   <th>Total</th>
									   </tr>
								   </thead>
								   <tbody>
									   <tr>
										   <td>
											   <h6>Logo Design</h6>
											   <p class="m-0">lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
										   </td>
										   <td>6</td>
										   <td>$200.00</td>
										   <td>$1200.00</td>
									   </tr>
									   <tr>
										   <td>
											   <h6>Logo Design</h6>
											   <p class="m-0">lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
										   </td>
										   <td>7</td>
										   <td>$100.00</td>
										   <td>$700.00</td>
									   </tr>
									   <tr>
										   <td>
											   <h6>Logo Design</h6>
											   <p class="m-0">lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
										   </td>
										   <td>5</td>
										   <td>$150.00</td>
										   <td>$750.00</td>
									   </tr>
								   </tbody>
							   </table>
						   </div>
					   </div>
				   </div>
				   <div class="row justify-content-between">
					   <div class="col-sm-6 mb-4">
						   <div class="clearfix">
							   <p>Terms and Conditions:</p>
							   <p class="d-inline-block">Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit donec sed odio dui. </p>
						   </div>
					   </div>
					   <div class="col-sm-4 text-end">
						   <div class="">
							   <div class="row">
								   <div class="col-6">Sub Total :</div>
								   <div class="col-6 text-dark">$4725.00</div>
							   </div>
							   <div class="row my-2">
								   <div class="col-6">Taxes (10%) :</div>
								   <div class="col-6 text-dark">$57.00</div>
							   </div>
							   <div class="row">
								   <div class="col-6">Discount (5%) :</div>
								   <div class="col-6 text-dark">$45.00</div>
							   </div>
							   <div class="row">
								   <div class="col-12">
									   <hr>
								   </div>
								   <div class="col-6">
									   <h5>Total :</h5>
								   </div>
								   <div class="col-6">
									   <h5>$ 4827.00</h5>
								   </div>
							   </div>
						   </div>
						   <div class="clearfix"></div>
					   </div>
				   </div>
			   </div>
			   <!-- [ Invoice ] end -->
			</div>
			<!-- [ basic-alert ] end -->
		</div>
		<!-- [ Main Content ] end -->
	</div>
</div>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<script>
	$('.btn-print-invoice').on('click', function() {
		var link2 = document.createElement('link');
		link2.innerHTML =
			'<style>@media print{*,::after,::before{text-shadow:none!important;box-shadow:none!important}a:not(.btn){text-decoration:underline}abbr[title]::after{content:" ("attr(title) ")"}pre{white-space:pre-wrap!important}blockquote,pre{border:1px solid #adb5bd;page-break-inside:avoid}thead{display:table-header-group}img,tr{page-break-inside:avoid}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}@page{size:a3}body{min-width:992px!important}.container{min-width:992px!important}.navbar{display:none}.badge{border:1px solid #000}.table{border-collapse:collapse!important}.table td,.table th{background-color:#fff!important}.table-bordered td,.table-bordered th{border:1px solid #dee2e6!important}.table-dark{color:inherit}.table-dark tbody+tbody,.table-dark td,.table-dark th,.table-dark thead th{border-color:#dee2e6}.table .thead-dark th{color:inherit;border-color:#dee2e6}}</style>';

		document.getElementsByTagName('head')[0].appendChild(link2);
		window.print();
	})
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
