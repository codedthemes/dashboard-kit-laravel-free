<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    <link rel="stylesheet" href="assets/css/plugins/dataTables.bootstrap4.min.css">
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
                            <h5 class="m-b-10">Helpdesk dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Helpdesk</a></li>
                            <li class="breadcrumb-item">Helpdesk dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- support-section start -->
            <div class="col-xl-4 col-md-6">
                <div class="card support-bar">
                    <div class="card-body pb-0">
                        <h2 class="m-0">350</h2>
                        <span class="text-info">Support Requests</span>
                        <p class="mb-3 mt-3">Total number of support requests that come in.</p>
                    </div>
                    <div id="support-chart" style="height:100px;width:100%;"></div>
                    <div class="card-footer bg-info text-white">
                        <div class="row text-center">
                            <div class="col border-end">
                                <h4 class="m-0 text-white">10</h4>
                                <span>Open</span>
                            </div>
                            <div class="col border-end">
                                <h4 class="m-0 text-white">5</h4>
                                <span>Running</span>
                            </div>
                            <div class="col">
                                <h4 class="m-0 text-white">3</h4>
                                <span>Solved</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- support-section end -->
            <!-- support1-section start -->
            <div class="col-xl-4 col-md-6">
                <div class="card support-bar">
                    <div class="card-body pb-0">
                        <h2 class="m-0">500</h2>
                        <span class="text-primary">Agent Response</span>
                        <p class="mb-3 mt-3">Total number of support requests that come in.</p>
                    </div>
                    <div id="support-chart1" style="height:100px;width:100%;"></div>
                    <div class="card-footer bg-primary text-white">
                        <div class="row text-center">
                            <div class="col border-end">
                                <h4 class="m-0 text-white">50</h4>
                                <span>Open</span>
                            </div>
                            <div class="col border-end">
                                <h4 class="m-0 text-white">75</h4>
                                <span>Running</span>
                            </div>
                            <div class="col">
                                <h4 class="m-0 text-white">30</h4>
                                <span>Solved</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- support-section1 end -->
            <!-- support2-section start -->
            <div class="col-xl-4 col-md-12">
                <div class="card support-bar">
                    <div class="card-body pb-0">
                        <h2 class="m-0">800</h2>
                        <span class="text-success">Support Resolved</span>
                        <p class="mb-3 mt-3">Total number of support requests that come in.</p>
                    </div>
                    <div id="support-chart2" style="height:100px;width:100%;"></div>
                    <div class="card-footer bg-success text-white">
                        <div class="row text-center">
                            <div class="col border-end">
                                <h4 class="m-0 text-white">80</h4>
                                <span>Open</span>
                            </div>
                            <div class="col border-end">
                                <h4 class="m-0 text-white">60</h4>
                                <span>Running</span>
                            </div>
                            <div class="col">
                                <h4 class="m-0 text-white">90</h4>
                                <span>Solved</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- support-section2 end -->
            <!-- customer-section start -->
            <div class="col-xl-7 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h6>Customer Satisfaction</h6>
                        <span>It takes continuous effort to maintain high customer satisfaction levels.Internal and external quality measures are often tied together.,as the opinion...</span>
                        <span class="text-primary d-block">Learn more..</span>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col">
                                <div id="satisfaction-chart" style="height:200px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- rating-section start -->
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <div class="card social-res-card">
                            <div class="card-header">
                                <h5>Facebook Source</h5>
                            </div>
                            <div class="card-body">
                                <p class="m-b-10">Page Profile</p>
                                <div class="progress m-b-25">
                                    <div class="progress-bar bg-primary" style="width:25%"></div>
                                </div>
                                <p class="m-b-10">Favorite</p>
                                <div class="progress m-b-25">
                                    <div class="progress-bar bg-primary" style="width:85%"></div>
                                </div>
                                <p class="m-b-10">Like Story</p>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" style="width:65%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <div class="card social-res-card">
                            <div class="card-header">
                                <h5>Twitter Source</h5>
                            </div>
                            <div class="card-body">
                                <p class="m-b-10">Wall Profile</p>
                                <div class="progress m-b-25">
                                    <div class="progress-bar bg-danger" style="width:85%"></div>
                                </div>
                                <p class="m-b-10">Favorite</p>
                                <div class="progress m-b-25">
                                    <div class="progress-bar bg-danger" style="width:25%"></div>
                                </div>
                                <p class="m-b-10">Like Tweets</p>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" style="width:65%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- rating-section end -->
            </div>
            <!-- customer-section end -->
            <!-- latest-section start -->
            <div class="col-xl-5 col-md-6">
                <div class="card feed-card">
                    <div class="card-header">
                        <h5>Latest Activity</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a>
                                    </li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="latest-scroll" style="height:400px;position:relative;">
                        <div class="card-body">
                            <div class="row m-b-30">
                                <div class="col-auto p-r-0">
                                    <i class="feather icon-bell bg-light-primary feed-icon text-primary"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted float-end f-13">Just Now</span></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row m-b-30">
                                <div class="col-auto p-r-0">
                                    <i class="feather icon-shopping-cart bg-light-danger feed-icon text-danger"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">New order received <span class="text-muted float-end f-13">Just Now</span></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row m-b-30">
                                <div class="col-auto p-r-0">
                                    <i class="feather icon-file-text bg-light-success feed-icon text-success"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted float-end f-13">Just Now</span></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row m-b-30">
                                <div class="col-auto p-r-0">
                                    <i class="feather icon-shopping-cart bg-light-warning feed-icon text-warning"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">New order received <span class="text-muted float-end f-13">Just Now</span></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row m-b-30">
                                <div class="col-auto p-r-0">
                                    <i class="feather icon-bell bg-light-primary feed-icon text-primary"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted float-end f-13">Just Now</span></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row m-b-30">
                                <div class="col-auto p-r-0">
                                    <i class="feather icon-shopping-cart bg-light-danger feed-icon text-danger"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">New order received <span class="text-muted float-end f-13">Just Now</span></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row m-b-30">
                                <div class="col-auto p-r-0">
                                    <i class="feather icon-file-text bg-light-success feed-icon text-success"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted float-end f-13">Just Now</span></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row m-b-20">
                                <div class="col-auto p-r-0">
                                    <i class="feather icon-shopping-cart bg-light-warning feed-icon text-warning"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">New order received <span class="text-muted float-end f-13">Just Now</span></h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#!" class="b-b-primary text-primary">View all Feeds</a>
                    </div>
                </div>
                <div class="card feed-card">
                    <div class="card-body p-t-0 p-b-0">
                        <div class="row">
                            <div class="col-4 bg-primary border-feed">
                                <i class="material-icons-two-tone d-block f-46">menu_book</i>
                            </div>
                            <div class="col-8">
                                <div class="p-t-25 p-b-25">
                                    <h2 class="f-w-400 m-b-10">379</h2>
                                    <p class="text-muted m-0">Tickets <span class="text-primary f-w-400">Answered</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- latest-section end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
</div>

<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>
<!-- dashboard-custom js -->
<script src="assets/js/pages/dashboard-help.js"></script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
