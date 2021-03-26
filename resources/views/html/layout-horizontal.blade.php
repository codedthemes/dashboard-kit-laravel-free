<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    @include('html.layouts.head-bottom-link')
    <link rel="stylesheet" href="assets/css/layout-horizontal.css">
</head>
@include('html.layouts.layout-horizontal')
<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="page-header-title">
                                <h5>Horizontal Layouts</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#!">Layouts</a></li>
                                <li class="breadcrumb-item">Horizontal Layouts</li>
                            </ul>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <button class="btn btn-sm btn-secondary rounded-pill" type="button">Action</button>
                            <div class="btn-group ms-2">
                                <button class="btn btn-sm btn-primary dropdown-toggle arrow-none rounded-pill" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="plus"></i></button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#!">Action</a>
                                    <a class="dropdown-item" href="#!">Another action</a>
                                    <a class="dropdown-item" href="#!">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- subscribe start -->
                <div class="col-md-12 col-lg-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="feather icon-mail text-primary d-block f-40"></i>
                            <h4 class="m-t-20"><span class="text-primary">8.62k</span> Subscribers</h4>
                            <p class="m-b-20">Your main list is growing</p>
                            <button class="btn btn-primary btn-sm btn-round">Manage List</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="feather icon-twitter text-success d-block f-40"></i>
                            <h4 class="m-t-20"><span class="text-success">+40</span> Followers</h4>
                            <p class="m-b-20">Your main list is growing</p>
                            <button class="btn btn-success btn-sm btn-round">Check them out</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="feather icon-briefcase text-danger d-block f-40"></i>
                            <h4 class="m-t-20">Business Plan</h4>
                            <p class="m-b-20">This is your current active plan</p>
                            <button class="btn btn-danger btn-sm btn-round">Upgrade to VIP</button>
                        </div>
                    </div>
                </div>
                <!-- subscribe end -->
                <!-- statustic start -->
                <div class="col-md-6 col-lg-3">
                    <div class="card statustic-card">
                        <div class="card-body text-center">
                            <h5 class="">Articles</h5>
                            <span class="d-block text-primary f-36">56</span>
                            <p class="m-b-0">Total</p>
                            <div class="progress">
                                <div class="progress-bar bg-primary" style="width:56%"></div>
                            </div>
                        </div>
                        <div class="card-footer bg-primary border-0">
                            <h6 class="text-white m-b-0">Draft: 22</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card statustic-card">
                        <div class="card-body text-center">
                            <h5 class="">Categories</h5>
                            <span class="d-block text-success f-36">14</span>
                            <p class="m-b-0">Total</p>
                            <div class="progress">
                                <div class="progress-bar bg-success" style="width:14%"></div>
                            </div>
                        </div>
                        <div class="card-footer bg-success border-0">
                            <h6 class="text-white m-b-0">Used: 14</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card statustic-card">
                        <div class="card-body text-center">
                            <h5 class="">Tickets</h5>
                            <span class="d-block text-danger f-36">85</span>
                            <p class="m-b-0">Total</p>
                            <div class="progress">
                                <div class="progress-bar bg-danger" style="width:85%"></div>
                            </div>
                        </div>
                        <div class="card-footer bg-danger border-0">
                            <h6 class="text-white m-b-0">Closed Today: 85</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card statustic-card">
                        <div class="card-body text-center">
                            <h5 class="">Forums</h5>
                            <span class="d-block text-warning f-36">42</span>
                            <p class="m-b-0">Total</p>
                            <div class="progress">
                                <div class="progress-bar bg-warning" style="width:42%"></div>
                            </div>
                        </div>
                        <div class="card-footer bg-warning border-0">
                            <h6 class="text-white m-b-0">Unanswered: 42</h6>
                        </div>
                    </div>
                </div>
                <!-- statustic end -->
                <!-- order-visitor start -->
                <div class="col-xl-3 col-md-6">
                    <div class="card text-center order-visitor-card">
                        <div class="card-body">
                            <h6 class="m-b-0">Total Subscription</h6>
                            <h4 class="m-t-15 m-b-15"><i class="icon feather icon-arrow-down m-r-15 text-danger"></i>7652</h4>
                            <p class="m-b-0">48% From Last 24 Hours</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card text-center order-visitor-card">
                        <div class="card-body">
                            <h6 class="m-b-0">Order Status</h6>
                            <h4 class="m-t-15 m-b-15"><i class="icon feather icon-arrow-up m-r-15 text-success"></i>6325</h4>
                            <p class="m-b-0">36% From Last 6 Months</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card text-center order-visitor-card">
                        <div class="card-body">
                            <h6 class="m-b-0">Unique Visitors</h6>
                            <h4 class="m-t-15 m-b-15"><i class="icon feather icon-arrow-down m-r-15 text-danger"></i>652</h4>
                            <p class="m-b-0">36% From Last 6 Months</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card text-center order-visitor-card">
                        <div class="card-body">
                            <h6 class="m-b-0">Monthly Earnings</h6>
                            <h4 class="m-t-15 m-b-15"><i class="icon feather icon-arrow-up m-r-15 text-success"></i>5963</h4>
                            <p class="m-b-0">36% From Last 6 Months</p>
                        </div>
                    </div>
                </div>
                <!-- order-visitor end -->
                <!-- order  start -->
                <div class="col-md-12 col-xl-4">
                    <div class="card bg-warning order-card">
                        <div class="card-body">
                            <h6 class="text-white">Revenue</h6>
                            <h2 class="text-white">$42,562</h2>
                            <p class="m-b-0">$5,032 <i class="feather icon-arrow-up m-l-10"></i></p>
                            <i class="card-icon feather icon-filter"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card bg-primary order-card">
                        <div class="card-body">
                            <h6 class="text-white">Orders Received</h6>
                            <h2 class="text-white">486</h2>
                            <p class="m-b-0">$5,032 <i class="feather icon-arrow-up m-l-10 m-r-10"></i>$1,055 <i class="feather icon-arrow-down"></i></p>
                            <i class="card-icon feather icon-users"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card bg-success order-card">
                        <div class="card-body">
                            <h6 class="text-white">Total Sales</h6>
                            <h2 class="text-white">1641</h2>
                            <p class="m-b-0">$5,032 <i class="feather icon-arrow-down m-l-10 m-r-10"></i>$1,055 <i class="feather icon-arrow-up"></i></p>
                            <i class="card-icon feather icon-radio"></i>
                        </div>
                    </div>
                </div>
                <!-- order  end -->

                <div class="col-xl-3 col-md-6">
                    <div class="card feed-card">
                        <div class="card-body p-t-0 p-b-0">
                            <div class="row">
                                <div class="col-4 bg-primary border-feed">
                                    <i class="fas fa-user-tie f-40"></i>
                                </div>
                                <div class="col-8">
                                    <div class="p-t-25 p-b-25">
                                        <h2 class="f-w-400 m-b-10">2,672</h2>
                                        <p class="text-muted m-0">Last week <span class="text-primary f-w-400">user's</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card feed-card">
                        <div class="card-body p-t-0 p-b-0">
                            <div class="row">
                                <div class="col-4 bg-success border-feed">
                                    <i class="fas fa-wallet f-40"></i>
                                </div>
                                <div class="col-8">
                                    <div class="p-t-25 p-b-25">
                                        <h2 class="f-w-400 m-b-10">$6391</h2>
                                        <p class="text-muted m-0">Total <span class="text-success f-w-400">earning</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card feed-card">
                        <div class="card-body p-t-0 p-b-0">
                            <div class="row">
                                <div class="col-4 bg-danger border-feed">
                                    <i class="fas fa-sitemap f-40"></i>
                                </div>
                                <div class="col-8">
                                    <div class="p-t-25 p-b-25">
                                        <h2 class="f-w-400 m-b-10">3,619</h2>
                                        <p class="text-muted m-0">New <span class="text-danger f-w-400">order</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card feed-card">
                        <div class="card-body p-t-0 p-b-0">
                            <div class="row">
                                <div class="col-4 bg-warning border-feed">
                                    <i class="fas fa-users f-40"></i>
                                </div>
                                <div class="col-8">
                                    <div class="p-t-25 p-b-25">
                                        <h2 class="f-w-400 m-b-10">9,276</h2>
                                        <p class="text-muted m-0">Today <span class="text-warning f-w-400">visitors</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
</div>
@include('html.layouts.footer')
@include('html.layouts.footer-bottom-link')
</body>

</html>
