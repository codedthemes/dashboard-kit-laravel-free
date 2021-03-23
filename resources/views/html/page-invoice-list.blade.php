<!DOCTYPE html>
<html lang="en">

<head>
	@@include('./layouts/head.html')
	@@include('./layouts/head-bottom-link.html')
</head>
@@include('layouts/layout-vertical.html')
<!-- [ Main Content ] start -->
<div class="pc-container">
	<div class="pcoded-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Invoice List</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item"><a href="#!">Invoice</a></li>
							<li class="breadcrumb-item">Invoice List</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Invoice ] start -->
		<div class="row">
			<!-- [ Invoice-left ] start -->
			<div class="col-xl-3 col-lg-4">
				<div class="card">
					<div class="card-body border-bottom">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search">
							<span class="input-group-text"><i data-feather="search"></i></span>
						</div>
					</div>
					<div class="card-body py-3 border-bottom">
						<a data-bs-toggle="collapse" href="#" data-bs-target="#taskfilstatus" class="link-dark" aria-expanded="false" aria-controls="taskfilstatus">
							<div class="h6 mb-0"><i class="material-icons-two-tone f-20 text-primary">emoji_flags</i> Completed Status <i data-feather="chevron-down" class="float-end me-1 wid-15 hei-15"></i></div>
						</a>
						<div class="collapse border-top show pt-3 mt-3" id="taskfilstatus">
							<div class="h6 mb-2">Paid</div>
							<div class="progress rounded mb-3" style="height: 5px;">
								<div class="progress-bar bg-success rounded" role="progressbar" style="width: 85%"></div>
							</div>
							<div class="h6 mb-2">Pending</div>
							<div class="progress rounded mb-3" style="height: 5px;">
								<div class="progress-bar bg-primary rounded" role="progressbar" style="width: 68%"></div>
							</div>
							<div class="h6 mb-2">On Hold</div>
							<div class="progress rounded mb-3" style="height: 5px;">
								<div class="progress-bar bg-warning rounded" role="progressbar" style="width: 48%"></div>
							</div>
							<div class="h6 mb-2">Canceled</div>
							<div class="progress rounded mb-2" style="height: 5px;">
								<div class="progress-bar bg-danger rounded" role="progressbar" style="width: 35%"></div>
							</div>
						</div>
					</div>
					<div class="card-body py-3 border-bottom">
						<a data-bs-toggle="collapse" href="#" data-bs-target="#taskfilassign" class="link-dark" aria-expanded="false" aria-controls="taskfilassign">
							<div class="h6 mb-0"><i class="material-icons-two-tone f-20 text-primary">account_circle</i> Assign User <i data-feather="chevron-down" class="float-end me-1 wid-15 hei-15"></i></div>
						</a>
						<div class="collapse border-top show pt-3 mt-3" id="taskfilassign">
							<div class="row mb-3">
								<div class="col-auto pr-0">
									<img class="img-fluid img-radius wid-55 me-n3" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
								</div>
								<div class="col">
									<span class="h6">Josephin Doe</span>
									<small class="text-muted d-block">Santa Ana,CA</small>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-auto pr-0">
									<img class="img-fluid img-radius wid-55 me-n3" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
								</div>
								<div class="col">
									<span class="h6">Ashoka T.</span>
									<small class="text-muted d-block">Santa Ana,CA</small>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-auto pr-0">
									<img class="img-fluid img-radius wid-55 me-n3" src="assets/images/user/avatar-3.jpg" alt="Generic placeholder image">
								</div>
								<div class="col">
									<span class="h6">Josephin Doe</span>
									<small class="text-muted d-block">Santa Ana,CA</small>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-auto pr-0">
									<img class="img-fluid img-radius wid-55 me-n3" src="assets/images/user/avatar-4.jpg" alt="Generic placeholder image">
								</div>
								<div class="col">
									<span class="h6">Ashoka T.</span>
									<small class="text-muted d-block">Santa Ana,CA</small>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-auto pr-0">
									<img class="img-fluid img-radius wid-55 me-n3" src="assets/images/user/avatar-5.jpg" alt="Generic placeholder image">
								</div>
								<div class="col">
									<span class="h6">Josephin Doe</span>
									<small class="text-muted d-block">Santa Ana,CA</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- [ Invoice-left ] end -->
			<!-- [ Invoice-right ] start -->
			<div class="col-xl-9 col-lg-8">
				<div class="card">
					<div class="card-body py-3">
						<div class="row align-items-center">
							<div class="col-md-8">
								<ul class="list-inline m-0">
									<li class="list-inline-item dropdown py-1">
										<a class="dropdown-toggle link-secondary" href="#" data-bs-toggle="dropdown">
											<i class="material-icons-two-tone f-20 text-primary">calendar_today</i> By Date
										</a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="#!">Show all</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#!">Today</a>
											<a class="dropdown-item" href="#!">Yesterday</a>
											<a class="dropdown-item" href="#!">This week</a>
											<a class="dropdown-item" href="#!">This month</a>
											<a class="dropdown-item" href="#!">This year</a>
										</div>
									</li>
									<li class="list-inline-item dropdown py-1">
										<a class="dropdown-toggle link-secondary" href="#" data-bs-toggle="dropdown">
											<i class="material-icons-two-tone f-20 text-primary">emoji_flags</i> By Status
										</a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="#!">Show all</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#!">Pending</a>
											<a class="dropdown-item" href="#!">Paid</a>
											<a class="dropdown-item" href="#!">On Hold</a>
											<a class="dropdown-item" href="#!">Canceled</a>
										</div>
									</li>
								</ul>
							</div>
							<div class="col-md-4 text-md-end">
								<span class="m-r-15">View Mode:</span>
								<div class="nav nav-tabs btn-group btn-group-sm d-inline-flex" id="myTab" role="tablist">
									<a class=" btn btn-light-primary active" id="grid-tab" data-bs-toggle="tab" href="#grid" role="tab" aria-controls="grid" aria-selected="true"><i class="fas fa-grip-horizontal"></i></a>
									<a class=" btn btn-light-primary" id="list-tab" data-bs-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false"><i class="fas fa-list-ul"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header py-3 d-flex align-items-center justify-content-between">
										<h5 class="d-flex align-items-center"><img class="img-fluid img-radius wid-25 me-2" src="assets/images/user/avatar-2.jpg" alt="1">John Doe</h5>
										<div class="dropdown">
											<a class="dropdown-toggle arrow-none text-secondary" href="#" data-bs-toggle="dropdown">
												<i data-feather="more-vertical"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">report_problem</i> Pending</a>
												<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">done_all</i> Paid</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item active" href="#!"><i class="material-icons-two-tone">hourglass_full</i>On Hold</a>
												<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cancel</i> Canceled</a>
											</div>
										</div>
									</div>
									<div class="card-body py-3 border-bottom d-flex align-items-center justify-content-between">
										<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-danger">timer</i> Due : 23 hours</p>
										<div>
											<p class="d-inline-block mb-0 h4"><i class="material-icons-two-tone f-24 text-primary">account_balance_wallet</i> $8,750</p>
										</div>
									</div>
									<div class="card-body pt-3">
										<table class="table table-xs w-auto table-borderless">
											<tbody>
												<tr>
													<td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">receipt</i> Invoice no :</td>
													<td class="pb-0">#0028</td>
												</tr>
												<tr>
													<td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">calendar_today</i> Issued on :</td>
													<td class="pb-0">2020/01/25</td>
												</tr>
												<tr>
													<td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">payment</i> Method:</td>
													<td class="pb-0">Phonepe</td>
												</tr>
											</tbody>
										</table>
										<p class="m-0">A collection of <b>textile samples</b> lay spread out on the table One morning...</p>
									</div>
									<div class="card-footer bg-light py-3 border-bottom d-flex align-items-center justify-content-between">
										<div>
											<button class="btn btn-light-success btn-sm"><i class="fas fa-eye me-1"></i>View</button>
										</div>
										<div>
											<div class="dropdown">
												<a class="dropdown-toggle btn btn-light-secondary btn-sm" href="#" data-bs-toggle="dropdown">
													Action
												</a>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">print</i> Print Invoice</a>
													<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cloud_download</i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">edit</i>Edit Invoice</a>
													<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">delete</i> Remove Invoice</a>
												</div>
											</div>
										</div>
                                    </div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header py-3 d-flex align-items-center justify-content-between">
										<h5 class="d-flex align-items-center"><img class="img-fluid img-radius wid-25 me-2" src="assets/images/user/avatar-5.jpg" alt="1">Joseph William</h5>
										<div class="dropdown">
											<a class="dropdown-toggle arrow-none text-secondary" href="#" data-bs-toggle="dropdown">
												<i data-feather="more-vertical"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">report_problem</i> Pending</a>
												<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">done_all</i> Paid</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item active" href="#!"><i class="material-icons-two-tone">hourglass_full</i>On Hold</a>
												<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cancel</i> Canceled</a>
											</div>
										</div>
									</div>
									<div class="card-body py-3 border-bottom d-flex align-items-center justify-content-between">
										<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-danger">timer</i> Due : 12 hours</p>
										<div>
											<p class="d-inline-block mb-0 h4"><i class="material-icons-two-tone f-24 text-primary">account_balance_wallet</i> $12,960</p>
										</div>
									</div>
									<div class="card-body pt-3">
										<table class="table table-xs w-auto table-borderless">
											<tbody>
												<tr>
													<td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">receipt</i> Invoice no :</td>
													<td class="pb-0">#0031</td>
												</tr>
												<tr>
													<td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">calendar_today</i> Issued on :</td>
													<td class="pb-0">2020/01/12</td>
												</tr>
												<tr>
													<td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">payment</i> Method:</td>
													<td class="pb-0">PayU</td>
												</tr>
											</tbody>
										</table>
										<p class="m-0">A <b>collection textile</b>  of <b>samples</b> lay spread out One morning on the table...</p>
									</div>
									<div class="card-footer bg-light py-3 border-bottom d-flex align-items-center justify-content-between">
										<div>
											<button class="btn btn-light-success btn-sm"><i class="fas fa-eye me-1"></i>View</button>
										</div>
										<div>
											<div class="dropdown">
												<a class="dropdown-toggle btn btn-light-secondary btn-sm" href="#" data-bs-toggle="dropdown">
													Action
												</a>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">print</i> Print Invoice</a>
													<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cloud_download</i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">edit</i>Edit Invoice</a>
													<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">delete</i> Remove Invoice</a>
												</div>
											</div>
										</div>
                                    </div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header py-3 d-flex align-items-center justify-content-between">
										<h5 class="d-flex align-items-center"><img class="img-fluid img-radius wid-25 me-2" src="assets/images/user/avatar-1.jpg" alt="1">Ashoka T.</h5>
										<div class="dropdown">
											<a class="dropdown-toggle arrow-none text-secondary" href="#" data-bs-toggle="dropdown">
												<i data-feather="more-vertical"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">report_problem</i> Pending</a>
												<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">done_all</i> Paid</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item active" href="#!"><i class="material-icons-two-tone">hourglass_full</i>On Hold</a>
												<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cancel</i> Canceled</a>
											</div>
										</div>
									</div>
									<div class="card-body py-3 border-bottom d-flex align-items-center justify-content-between">
										<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-danger">timer</i> Due : 9 hours</p>
										<div>
											<p class="d-inline-block mb-0 h4"><i class="material-icons-two-tone f-24 text-primary">account_balance_wallet</i> $9,060</p>
										</div>
									</div>
									<div class="card-body pt-3">
										<table class="table table-xs w-auto table-borderless">
											<tbody>
												<tr>
													<td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">receipt</i> Invoice no :</td>
													<td class="pb-0">#0005</td>
												</tr>
												<tr>
													<td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">calendar_today</i> Issued on :</td>
													<td class="pb-0">2020/01/29</td>
												</tr>
												<tr>
													<td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">payment</i> Method:</td>
													<td class="pb-0">Paypal</td>
												</tr>
											</tbody>
										</table>
										<p class="m-0">A <b>collection textile</b>  of <b>samples</b> lay spread out One morning on the table...</p>
									</div>
									<div class="card-footer bg-light py-3 border-bottom d-flex align-items-center justify-content-between">
										<div>
											<button class="btn btn-light-success btn-sm"><i class="fas fa-eye me-1"></i>View</button>
										</div>
										<div>
											<div class="dropdown">
												<a class="dropdown-toggle btn btn-light-secondary btn-sm" href="#" data-bs-toggle="dropdown">
													Action
												</a>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">print</i> Print Invoice</a>
													<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cloud_download</i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">edit</i>Edit Invoice</a>
													<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">delete</i> Remove Invoice</a>
												</div>
											</div>
										</div>
                                    </div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header py-3 d-flex align-items-center justify-content-between">
										<h5 class="d-flex align-items-center"><img class="img-fluid img-radius wid-25 me-2" src="assets/images/user/avatar-2.jpg" alt="1">John Doe</h5>
										<div class="dropdown">
											<a class="dropdown-toggle arrow-none text-secondary" href="#" data-bs-toggle="dropdown">
												<i data-feather="more-vertical"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">report_problem</i> Pending</a>
												<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">done_all</i> Paid</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item active" href="#!"><i class="material-icons-two-tone">hourglass_full</i>On Hold</a>
												<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cancel</i> Canceled</a>
											</div>
										</div>
									</div>
									<div class="card-body py-3 border-bottom d-flex align-items-center justify-content-between">
										<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-danger">timer</i> Due : 23 hours</p>
										<div>
											<p class="d-inline-block mb-0 h4"><i class="material-icons-two-tone f-24 text-primary">account_balance_wallet</i> $8,750</p>
										</div>
									</div>
									<div class="card-body pt-3">
										<table class="table table-xs w-auto table-borderless">
											<tbody>
												<tr>
													<td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">receipt</i> Invoice no :</td>
													<td class="pb-0">#0028</td>
												</tr>
												<tr>
													<td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">calendar_today</i> Issued on :</td>
													<td class="pb-0">2020/01/25</td>
												</tr>
												<tr>
													<td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">payment</i> Method:</td>
													<td class="pb-0">Phonepe</td>
												</tr>
											</tbody>
										</table>
										<p class="m-0">A collection of <b>textile samples</b> lay spread out on the table One morning...</p>
									</div>
									<div class="card-footer bg-light py-3 border-bottom d-flex align-items-center justify-content-between">
										<div>
											<button class="btn btn-light-success btn-sm"><i class="fas fa-eye me-1"></i>View</button>
										</div>
										<div>
											<div class="dropdown">
												<a class="dropdown-toggle btn btn-light-secondary btn-sm" href="#" data-bs-toggle="dropdown">
													Action
												</a>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">print</i> Print Invoice</a>
													<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cloud_download</i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">edit</i>Edit Invoice</a>
													<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">delete</i> Remove Invoice</a>
												</div>
											</div>
										</div>
                                    </div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header py-3 d-flex align-items-center justify-content-between">
										<h5 class="d-flex align-items-center"><img class="img-fluid img-radius wid-25 me-2" src="assets/images/user/avatar-5.jpg" alt="1">Joseph William</h5>
										<div class="dropdown">
											<a class="dropdown-toggle arrow-none text-secondary" href="#" data-bs-toggle="dropdown">
												<i data-feather="more-vertical"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">report_problem</i> Pending</a>
												<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">done_all</i> Paid</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item active" href="#!"><i class="material-icons-two-tone">hourglass_full</i>On Hold</a>
												<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cancel</i> Canceled</a>
											</div>
										</div>
									</div>
									<div class="card-body py-3 border-bottom d-flex align-items-center justify-content-between">
										<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-danger">timer</i> Due : 12 hours</p>
										<div>
											<p class="d-inline-block mb-0 h4"><i class="material-icons-two-tone f-24 text-primary">account_balance_wallet</i> $12,960</p>
										</div>
									</div>
									<div class="card-body pt-3">
										<table class="table table-xs w-auto table-borderless">
											<tbody>
												<tr>
													<td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">receipt</i> Invoice no :</td>
													<td class="pb-0">#0031</td>
												</tr>
												<tr>
													<td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">calendar_today</i> Issued on :</td>
													<td class="pb-0">2020/01/12</td>
												</tr>
												<tr>
													<td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">payment</i> Method:</td>
													<td class="pb-0">PayU</td>
												</tr>
											</tbody>
										</table>
										<p class="m-0">A <b>collection textile</b>  of <b>samples</b> lay spread out One morning on the table...</p>
									</div>
									<div class="card-footer bg-light py-3 border-bottom d-flex align-items-center justify-content-between">
										<div>
											<button class="btn btn-light-success btn-sm"><i class="fas fa-eye me-1"></i>View</button>
										</div>
										<div>
											<div class="dropdown">
												<a class="dropdown-toggle btn btn-light-secondary btn-sm" href="#" data-bs-toggle="dropdown">
													Action
												</a>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">print</i> Print Invoice</a>
													<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cloud_download</i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">edit</i>Edit Invoice</a>
													<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">delete</i> Remove Invoice</a>
												</div>
											</div>
										</div>
                                    </div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header py-3 d-flex align-items-center justify-content-between">
										<h5 class="d-flex align-items-center"><img class="img-fluid img-radius wid-25 me-2" src="assets/images/user/avatar-1.jpg" alt="1">Ashoka T.</h5>
										<div class="dropdown">
											<a class="dropdown-toggle arrow-none text-secondary" href="#" data-bs-toggle="dropdown">
												<i data-feather="more-vertical"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">report_problem</i> Pending</a>
												<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">done_all</i> Paid</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item active" href="#!"><i class="material-icons-two-tone">hourglass_full</i>On Hold</a>
												<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cancel</i> Canceled</a>
											</div>
										</div>
									</div>
									<div class="card-body py-3 border-bottom d-flex align-items-center justify-content-between">
										<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-danger">timer</i> Due : 9 hours</p>
										<div>
											<p class="d-inline-block mb-0 h4"><i class="material-icons-two-tone f-24 text-primary">account_balance_wallet</i> $9,060</p>
										</div>
									</div>
									<div class="card-body pt-3">
										<table class="table table-xs w-auto table-borderless">
											<tbody>
												<tr>
													<td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">receipt</i> Invoice no :</td>
													<td class="pb-0">#0005</td>
												</tr>
												<tr>
													<td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">calendar_today</i> Issued on :</td>
													<td class="pb-0">2020/01/29</td>
												</tr>
												<tr>
													<td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">payment</i> Method:</td>
													<td class="pb-0">Paypal</td>
												</tr>
											</tbody>
										</table>
										<p class="m-0">A <b>collection textile</b>  of <b>samples</b> lay spread out One morning on the table...</p>
									</div>
									<div class="card-footer bg-light py-3 border-bottom d-flex align-items-center justify-content-between">
										<div>
											<button class="btn btn-light-success btn-sm"><i class="fas fa-eye me-1"></i>View</button>
										</div>
										<div>
											<div class="dropdown">
												<a class="dropdown-toggle btn btn-light-secondary btn-sm" href="#" data-bs-toggle="dropdown">
													Action
												</a>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">print</i> Print Invoice</a>
													<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cloud_download</i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">edit</i>Edit Invoice</a>
													<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">delete</i> Remove Invoice</a>
												</div>
											</div>
										</div>
                                    </div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body py-3 border-bottom">
										<div class="row justify-content-sm-between">
											<div class="col-sm-3 mb-2 mb-sm-0">
												<div class="d-flex align-items-center m-0 h6"><img class="img-fluid img-radius wid-25 me-2" src="assets/images/user/avatar-2.jpg" alt="1">John Doe</div>
											</div>
											<div class="col-sm-3 mb-2 mb-sm-0">
												<p class="d-inline-block mb-0 h5"><i class="material-icons-two-tone f-20 text-primary">account_balance_wallet</i> $8,750</p>
											</div>
											<div class="col-sm-6">
												<div class="d-sm-flex justify-content-between">
													<div class="mb-2 mb-sm-0">
														<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-info">receipt</i> #0028</p>
													</div>
													<div>
														<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-primary">calendar_today</i> 2020/01/25</p>
														<p class="d-inline-block mb-0 ms-2"><i class="material-icons-two-tone f-18 text-success">payment</i> Phonepe</p>
														<div class="dropdown d-inline-block ms-2">
															<a class="dropdown-toggle arrow-none text-secondary" href="#" data-bs-toggle="dropdown">
																<i data-feather="more-vertical"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">print</i> Print Invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cloud_download</i> Download invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">edit</i>Edit Invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">delete</i> Remove Invoice</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">report_problem</i> Pending</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">done_all</i> Paid</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">hourglass_full</i>On Hold</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cancel</i> Canceled</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body py-3 border-bottom">
										<div class="row justify-content-sm-between">
											<div class="col-sm-3 mb-2 mb-sm-0">
												<div class="d-flex align-items-center m-0 h6"><img class="img-fluid img-radius wid-25 me-2" src="assets/images/user/avatar-5.jpg" alt="1">Joseph William</div>
											</div>
											<div class="col-sm-3 mb-2 mb-sm-0">
												<p class="d-inline-block mb-0 h5"><i class="material-icons-two-tone f-20 text-primary">account_balance_wallet</i> $12,960</p>
											</div>
											<div class="col-sm-6">
												<div class="d-sm-flex justify-content-between">
													<div class="mb-2 mb-sm-0">
														<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-info">receipt</i> #0031</p>
													</div>
													<div>
														<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-primary">calendar_today</i> 2020/01/12</p>
														<p class="d-inline-block mb-0 ms-2"><i class="material-icons-two-tone f-18 text-success">payment</i> PayU</p>
														<div class="dropdown d-inline-block ms-2">
															<a class="dropdown-toggle arrow-none text-secondary" href="#" data-bs-toggle="dropdown">
																<i data-feather="more-vertical"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">print</i> Print Invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cloud_download</i> Download invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">edit</i>Edit Invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">delete</i> Remove Invoice</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">report_problem</i> Pending</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">done_all</i> Paid</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">hourglass_full</i>On Hold</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cancel</i> Canceled</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body py-3 border-bottom">
										<div class="row justify-content-sm-between">
											<div class="col-sm-3 mb-2 mb-sm-0">
												<div class="d-flex align-items-center m-0 h6"><img class="img-fluid img-radius wid-25 me-2" src="assets/images/user/avatar-1.jpg" alt="1">Ashoka T.</div>
											</div>
											<div class="col-sm-3 mb-2 mb-sm-0">
												<p class="d-inline-block mb-0 h5"><i class="material-icons-two-tone f-20 text-primary">account_balance_wallet</i> $9,060</p>
											</div>
											<div class="col-sm-6">
												<div class="d-sm-flex justify-content-between">
													<div class="mb-2 mb-sm-0">
														<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-info">receipt</i> #0005</p>
													</div>
													<div>
														<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-primary">calendar_today</i> 2020/01/29</p>
														<p class="d-inline-block mb-0 ms-2"><i class="material-icons-two-tone f-18 text-success">payment</i> Paypal</p>
														<div class="dropdown d-inline-block ms-2">
															<a class="dropdown-toggle arrow-none text-secondary" href="#" data-bs-toggle="dropdown">
																<i data-feather="more-vertical"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">print</i> Print Invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cloud_download</i> Download invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">edit</i>Edit Invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">delete</i> Remove Invoice</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">report_problem</i> Pending</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">done_all</i> Paid</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">hourglass_full</i>On Hold</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cancel</i> Canceled</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body py-3 border-bottom">
										<div class="row justify-content-sm-between">
											<div class="col-sm-3 mb-2 mb-sm-0">
												<div class="d-flex align-items-center m-0 h6"><img class="img-fluid img-radius wid-25 me-2" src="assets/images/user/avatar-2.jpg" alt="1">John Doe</div>
											</div>
											<div class="col-sm-3 mb-2 mb-sm-0">
												<p class="d-inline-block mb-0 h5"><i class="material-icons-two-tone f-20 text-primary">account_balance_wallet</i> $8,750</p>
											</div>
											<div class="col-sm-6">
												<div class="d-sm-flex justify-content-between">
													<div class="mb-2 mb-sm-0">
														<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-info">receipt</i> #0028</p>
													</div>
													<div>
														<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-primary">calendar_today</i> 2020/01/25</p>
														<p class="d-inline-block mb-0 ms-2"><i class="material-icons-two-tone f-18 text-success">payment</i> Phonepe</p>
														<div class="dropdown d-inline-block ms-2">
															<a class="dropdown-toggle arrow-none text-secondary" href="#" data-bs-toggle="dropdown">
																<i data-feather="more-vertical"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">print</i> Print Invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cloud_download</i> Download invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">edit</i>Edit Invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">delete</i> Remove Invoice</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">report_problem</i> Pending</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">done_all</i> Paid</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">hourglass_full</i>On Hold</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cancel</i> Canceled</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body py-3 border-bottom">
										<div class="row justify-content-sm-between">
											<div class="col-sm-3 mb-2 mb-sm-0">
												<div class="d-flex align-items-center m-0 h6"><img class="img-fluid img-radius wid-25 me-2" src="assets/images/user/avatar-5.jpg" alt="1">Joseph William</div>
											</div>
											<div class="col-sm-3 mb-2 mb-sm-0">
												<p class="d-inline-block mb-0 h5"><i class="material-icons-two-tone f-20 text-primary">account_balance_wallet</i> $12,960</p>
											</div>
											<div class="col-sm-6">
												<div class="d-sm-flex justify-content-between">
													<div class="mb-2 mb-sm-0">
														<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-info">receipt</i> #0031</p>
													</div>
													<div>
														<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-primary">calendar_today</i> 2020/01/12</p>
														<p class="d-inline-block mb-0 ms-2"><i class="material-icons-two-tone f-18 text-success">payment</i> PayU</p>
														<div class="dropdown d-inline-block ms-2">
															<a class="dropdown-toggle arrow-none text-secondary" href="#" data-bs-toggle="dropdown">
																<i data-feather="more-vertical"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">print</i> Print Invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cloud_download</i> Download invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">edit</i>Edit Invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">delete</i> Remove Invoice</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">report_problem</i> Pending</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">done_all</i> Paid</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">hourglass_full</i>On Hold</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cancel</i> Canceled</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body py-3 border-bottom">
										<div class="row justify-content-sm-between">
											<div class="col-sm-3 mb-2 mb-sm-0">
												<div class="d-flex align-items-center m-0 h6"><img class="img-fluid img-radius wid-25 me-2" src="assets/images/user/avatar-1.jpg" alt="1">Ashoka T.</div>
											</div>
											<div class="col-sm-3 mb-2 mb-sm-0">
												<p class="d-inline-block mb-0 h5"><i class="material-icons-two-tone f-20 text-primary">account_balance_wallet</i> $9,060</p>
											</div>
											<div class="col-sm-6">
												<div class="d-sm-flex justify-content-between">
													<div class="mb-2 mb-sm-0">
														<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-info">receipt</i> #0005</p>
													</div>
													<div>
														<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-primary">calendar_today</i> 2020/01/29</p>
														<p class="d-inline-block mb-0 ms-2"><i class="material-icons-two-tone f-18 text-success">payment</i> Paypal</p>
														<div class="dropdown d-inline-block ms-2">
															<a class="dropdown-toggle arrow-none text-secondary" href="#" data-bs-toggle="dropdown">
																<i data-feather="more-vertical"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">print</i> Print Invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cloud_download</i> Download invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">edit</i>Edit Invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">delete</i> Remove Invoice</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">report_problem</i> Pending</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">done_all</i> Paid</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">hourglass_full</i>On Hold</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cancel</i> Canceled</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body py-3 border-bottom">
										<div class="row justify-content-sm-between">
											<div class="col-sm-3 mb-2 mb-sm-0">
												<div class="d-flex align-items-center m-0 h6"><img class="img-fluid img-radius wid-25 me-2" src="assets/images/user/avatar-2.jpg" alt="1">John Doe</div>
											</div>
											<div class="col-sm-3 mb-2 mb-sm-0">
												<p class="d-inline-block mb-0 h5"><i class="material-icons-two-tone f-20 text-primary">account_balance_wallet</i> $8,750</p>
											</div>
											<div class="col-sm-6">
												<div class="d-sm-flex justify-content-between">
													<div class="mb-2 mb-sm-0">
														<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-info">receipt</i> #0028</p>
													</div>
													<div>
														<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-primary">calendar_today</i> 2020/01/25</p>
														<p class="d-inline-block mb-0 ms-2"><i class="material-icons-two-tone f-18 text-success">payment</i> Phonepe</p>
														<div class="dropdown d-inline-block ms-2">
															<a class="dropdown-toggle arrow-none text-secondary" href="#" data-bs-toggle="dropdown">
																<i data-feather="more-vertical"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">print</i> Print Invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cloud_download</i> Download invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">edit</i>Edit Invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">delete</i> Remove Invoice</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">report_problem</i> Pending</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">done_all</i> Paid</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">hourglass_full</i>On Hold</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cancel</i> Canceled</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body py-3 border-bottom">
										<div class="row justify-content-sm-between">
											<div class="col-sm-3 mb-2 mb-sm-0">
												<div class="d-flex align-items-center m-0 h6"><img class="img-fluid img-radius wid-25 me-2" src="assets/images/user/avatar-5.jpg" alt="1">Joseph William</div>
											</div>
											<div class="col-sm-3 mb-2 mb-sm-0">
												<p class="d-inline-block mb-0 h5"><i class="material-icons-two-tone f-20 text-primary">account_balance_wallet</i> $12,960</p>
											</div>
											<div class="col-sm-6">
												<div class="d-sm-flex justify-content-between">
													<div class="mb-2 mb-sm-0">
														<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-info">receipt</i> #0031</p>
													</div>
													<div>
														<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-primary">calendar_today</i> 2020/01/12</p>
														<p class="d-inline-block mb-0 ms-2"><i class="material-icons-two-tone f-18 text-success">payment</i> PayU</p>
														<div class="dropdown d-inline-block ms-2">
															<a class="dropdown-toggle arrow-none text-secondary" href="#" data-bs-toggle="dropdown">
																<i data-feather="more-vertical"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">print</i> Print Invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cloud_download</i> Download invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">edit</i>Edit Invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">delete</i> Remove Invoice</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">report_problem</i> Pending</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">done_all</i> Paid</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">hourglass_full</i>On Hold</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cancel</i> Canceled</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body py-3 border-bottom">
										<div class="row justify-content-sm-between">
											<div class="col-sm-3 mb-2 mb-sm-0">
												<div class="d-flex align-items-center m-0 h6"><img class="img-fluid img-radius wid-25 me-2" src="assets/images/user/avatar-1.jpg" alt="1">Ashoka T.</div>
											</div>
											<div class="col-sm-3 mb-2 mb-sm-0">
												<p class="d-inline-block mb-0 h5"><i class="material-icons-two-tone f-20 text-primary">account_balance_wallet</i> $9,060</p>
											</div>
											<div class="col-sm-6">
												<div class="d-sm-flex justify-content-between">
													<div class="mb-2 mb-sm-0">
														<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-info">receipt</i> #0005</p>
													</div>
													<div>
														<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-primary">calendar_today</i> 2020/01/29</p>
														<p class="d-inline-block mb-0 ms-2"><i class="material-icons-two-tone f-18 text-success">payment</i> Paypal</p>
														<div class="dropdown d-inline-block ms-2">
															<a class="dropdown-toggle arrow-none text-secondary" href="#" data-bs-toggle="dropdown">
																<i data-feather="more-vertical"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">print</i> Print Invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cloud_download</i> Download invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">edit</i>Edit Invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">delete</i> Remove Invoice</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">report_problem</i> Pending</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">done_all</i> Paid</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">hourglass_full</i>On Hold</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cancel</i> Canceled</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body py-3 border-bottom">
										<div class="row justify-content-sm-between">
											<div class="col-sm-3 mb-2 mb-sm-0">
												<div class="d-flex align-items-center m-0 h6"><img class="img-fluid img-radius wid-25 me-2" src="assets/images/user/avatar-2.jpg" alt="1">John Doe</div>
											</div>
											<div class="col-sm-3 mb-2 mb-sm-0">
												<p class="d-inline-block mb-0 h5"><i class="material-icons-two-tone f-20 text-primary">account_balance_wallet</i> $8,750</p>
											</div>
											<div class="col-sm-6">
												<div class="d-sm-flex justify-content-between">
													<div class="mb-2 mb-sm-0">
														<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-info">receipt</i> #0028</p>
													</div>
													<div>
														<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-primary">calendar_today</i> 2020/01/25</p>
														<p class="d-inline-block mb-0 ms-2"><i class="material-icons-two-tone f-18 text-success">payment</i> Phonepe</p>
														<div class="dropdown d-inline-block ms-2">
															<a class="dropdown-toggle arrow-none text-secondary" href="#" data-bs-toggle="dropdown">
																<i data-feather="more-vertical"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">print</i> Print Invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cloud_download</i> Download invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">edit</i>Edit Invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">delete</i> Remove Invoice</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">report_problem</i> Pending</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">done_all</i> Paid</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">hourglass_full</i>On Hold</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cancel</i> Canceled</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body py-3 border-bottom">
										<div class="row justify-content-sm-between">
											<div class="col-sm-3 mb-2 mb-sm-0">
												<div class="d-flex align-items-center m-0 h6"><img class="img-fluid img-radius wid-25 me-2" src="assets/images/user/avatar-5.jpg" alt="1">Joseph William</div>
											</div>
											<div class="col-sm-3 mb-2 mb-sm-0">
												<p class="d-inline-block mb-0 h5"><i class="material-icons-two-tone f-20 text-primary">account_balance_wallet</i> $12,960</p>
											</div>
											<div class="col-sm-6">
												<div class="d-sm-flex justify-content-between">
													<div class="mb-2 mb-sm-0">
														<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-info">receipt</i> #0031</p>
													</div>
													<div>
														<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-primary">calendar_today</i> 2020/01/12</p>
														<p class="d-inline-block mb-0 ms-2"><i class="material-icons-two-tone f-18 text-success">payment</i> PayU</p>
														<div class="dropdown d-inline-block ms-2">
															<a class="dropdown-toggle arrow-none text-secondary" href="#" data-bs-toggle="dropdown">
																<i data-feather="more-vertical"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">print</i> Print Invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cloud_download</i> Download invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">edit</i>Edit Invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">delete</i> Remove Invoice</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">report_problem</i> Pending</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">done_all</i> Paid</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">hourglass_full</i>On Hold</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cancel</i> Canceled</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body py-3 border-bottom">
										<div class="row justify-content-sm-between">
											<div class="col-sm-3 mb-2 mb-sm-0">
												<div class="d-flex align-items-center m-0 h6"><img class="img-fluid img-radius wid-25 me-2" src="assets/images/user/avatar-1.jpg" alt="1">Ashoka T.</div>
											</div>
											<div class="col-sm-3 mb-2 mb-sm-0">
												<p class="d-inline-block mb-0 h5"><i class="material-icons-two-tone f-20 text-primary">account_balance_wallet</i> $9,060</p>
											</div>
											<div class="col-sm-6">
												<div class="d-sm-flex justify-content-between">
													<div class="mb-2 mb-sm-0">
														<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-info">receipt</i> #0005</p>
													</div>
													<div>
														<p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-primary">calendar_today</i> 2020/01/29</p>
														<p class="d-inline-block mb-0 ms-2"><i class="material-icons-two-tone f-18 text-success">payment</i> Paypal</p>
														<div class="dropdown d-inline-block ms-2">
															<a class="dropdown-toggle arrow-none text-secondary" href="#" data-bs-toggle="dropdown">
																<i data-feather="more-vertical"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">print</i> Print Invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cloud_download</i> Download invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">edit</i>Edit Invoice</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">delete</i> Remove Invoice</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">report_problem</i> Pending</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">done_all</i> Paid</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">hourglass_full</i>On Hold</a>
																<a class="dropdown-item" href="#!"><i class="material-icons-two-tone">cancel</i> Canceled</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- [ Invoice-right ] end -->
		</div>
		<!-- [ Invoice ] end -->
	</div>
</div>
<!-- [ Main Content ] end -->
@@include('./layouts/footer.html')
@@include('./layouts/footer-bottom-link.html')
</body>

</html>
