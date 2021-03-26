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
							<h5 class="m-b-10">Invoice Summary</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
							<li class="breadcrumb-item"><a href="#!">Invoice</a></li>
							<li class="breadcrumb-item">Invoice Summary</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Invoice ] start -->
		<div class="row">
			<!-- [ Invoice-Sales ] start -->
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Sales and Expenses</h5>
					</div>
					<div class="card-body">
						<div id="bar-chart-1"></div>
					</div>
				</div>
			</div>
			<!-- [ Invoice-Sales ] end -->
			<!-- [ Invoice-Receipt ] start -->
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Sales, Receipt and Dues</h5>
					</div>
					<div class="card-body table-body pb-0">
						<div class="table-responsive">
							<table class="table table-hover m-0">
								<thead>
									<tr>
										<th>#</th>
										<th>Sales</th>
										<th>Receipt</th>
										<th>Dues</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">Today</th>
										<td>$250.00</td>
										<td>Otto</td>
										<td>@mdo</td>
									</tr>
									<tr>
										<th scope="row">This Week</th>
										<td>$380.00</td>
										<td>Thornton</td>
										<td>@fat</td>
									</tr>
									<tr>
										<th scope="row">This Month</th>
										<td>$450.00</td>
										<td>the Bird</td>
										<td>@twitter</td>
									</tr>
									<tr>
										<th scope="row">This Year</th>
										<td>$600.00</td>
										<td>the Bird</td>
										<td>@facebook</td>
									</tr>
									<tr>
										<th scope="row">Total</th>
										<td>$600.00</td>
										<td>the Bird</td>
										<td>@google</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- [ Invoice-Receipt ] end -->
			<!-- [ Invoice-Orders ] start -->
			<div class="col-xl-12">
				<div class="card">
					<div class="card-header">
						<h5>Recent Orders</h5>
					</div>
					<div class="table-responsive">
						<div class="card-body table-body pb-0">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Order No.</th>
										<th>Product Name</th>
										<th>Quantity</th>
										<th>Price</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>54822</td>
										<td>Product 1</td>
										<td>2</td>
										<td>
											<label class="label label-md label-danger m-0">$80.00</label>
										</td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>54823</td>
										<td>Product 2</td>
										<td>1</td>
										<td>
											<label class="label label-md label-success m-0">$75.00</label>
										</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>54824</td>
										<td>Product 3</td>
										<td>3</td>
										<td>
											<label class="label label-md label-warning m-0">$99.00</label>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- [ Invoice-Orders ] end -->
		</div>
		<!-- [ Invoice ] end -->
	</div>
</div>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<script src="assets/js/plugins/apexcharts.min.js"></script>
<script>
	$(document).ready(function() {
		var options = {
			chart: {
				height: 205,
				type: 'bar',
				toolbar: {
					show: false,
				}
			},
			plotOptions: {
				bar: {
					horizontal: false,
					columnWidth: '55%',
					endingShape: 'rounded'
				},
			},
			dataLabels: {
				enabled: false
			},
			colors: ["#06CA98", "#5052FC", "#ED4C13"],
			stroke: {
				show: true,
				width: 2,
				colors: ['transparent']
			},
			series: [{
				name: 'Net Profit',
				data: [44, 55, 57, 56, 61, 58, 63]
			}, {
				name: 'Revenue',
				data: [76, 85, 101, 98, 87, 105, 91]
			}, {
				name: 'Free Cash Flow',
				data: [35, 41, 36, 26, 45, 48, 52]
			}],
			xaxis: {
				categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
			},
			yaxis: {
				title: {
					text: '$ (thousands)'
				}
			},
			fill: {
				opacity: 1

			},
			tooltip: {
				y: {
					formatter: function(val) {
						return "$ " + val + " thousands"
					}
				}
			}
		}
		var chart = new ApexCharts(
			document.querySelector("#bar-chart-1"),
			options
		);
		chart.render();
	});
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
