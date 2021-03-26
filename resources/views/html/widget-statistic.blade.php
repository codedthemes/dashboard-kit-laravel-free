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
                            <h5 class="m-b-10">Widget statistic</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Widget</a></li>
                            <li class="breadcrumb-item">Widget statistic</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card text-center bg-primary text-white">
                    <div class="card-body">
                        <img src="assets/images/widget/prod1.jpg" alt="prodimg" class="img-fluid img-80 img-radius">
                        <h5 class="m-b-15 m-t-15 text-white">50% Off</h5>
                        <h6 class="m-b-0 text-white">on apple watch</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card text-center bg-success text-white">
                    <div class="card-body">
                        <img src="assets/images/widget/prod2.jpg" alt="prodimg" class="img-fluid img-80 img-radius">
                        <h5 class="m-b-15 m-t-15 text-white">20% Off</h5>
                        <h6 class="m-b-0 text-white">on canon printer</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card text-center bg-warning text-white">
                    <div class="card-body">
                        <img src="assets/images/widget/prod3.jpg" alt="prodimg" class="img-fluid img-80 img-radius">
                        <h5 class="m-b-15 m-t-15 text-white">40% Off</h5>
                        <h6 class="m-b-0 text-white">apple macbook</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card text-center bg-danger text-white">
                    <div class="card-body">
                        <img src="assets/images/widget/prod4.jpg" alt="prodimg" class="img-fluid img-80 img-radius">
                        <h5 class="m-b-15 m-t-15 text-white">50% Off</h5>
                        <h6 class="m-b-0 text-white">on any game</h6>
                    </div>
                </div>
            </div>
            <!-- page statustic card start -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-warning">$30200</h4>
                                <h6 class="text-muted m-b-0">All Earnings</h6>
                            </div>
                            <div class="col-4 text-end">
                                <i class="material-icons-two-tone f-38">donut_small</i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-warning py-3">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0">33% change</p>
                            </div>
                            <div class="col-3 text-end">
                                <i class="feather icon-trending-up text-white f-16"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-success">290+</h4>
                                <h6 class="text-muted m-b-0">Page Views</h6>
                            </div>
                            <div class="col-4 text-end">
                                <i class="material-icons-two-tone f-38">description</i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-success py-3">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0">4% change</p>
                            </div>
                            <div class="col-3 text-end">
                                <i class="feather icon-trending-up text-white f-16"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-danger">145</h4>
                                <h6 class="text-muted m-b-0">Task</h6>
                            </div>
                            <div class="col-4 text-end">
                                <i class="material-icons-two-tone f-38">event_note</i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-danger py-3">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0">32% change</p>
                            </div>
                            <div class="col-3 text-end">
                                <i class="feather icon-trending-down text-white f-16"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-primary">500</h4>
                                <h6 class="text-muted m-b-0">Downloads</h6>
                            </div>
                            <div class="col-4 text-end">
                                <i class="material-icons-two-tone f-38">thumb_up_alt</i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-primary py-3">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0">45.6% change</p>
                            </div>
                            <div class="col-3 text-end">
                                <i class="feather icon-trending-down text-white f-16"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page statustic card end -->
            <!-- order  start -->
            <div class="col-md-12 col-xl-4">
                <div class="card bg-warning order-card">
                    <div class="card-body">
                        <h6 class="text-white">Revenue</h6>
                        <h2 class="text-white">$42,562</h2>
                        <p class="m-b-0">$5,032 <i class="feather icon-arrow-up m-l-10"></i></p>
                        <i class="material-icons-two-tone d-block f-46 card-icon text-white">monetization_on</i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card bg-primary order-card">
                    <div class="card-body">
                        <h6 class="text-white">Orders Received</h6>
                        <h2 class="text-white">486</h2>
                        <p class="m-b-0">$5,032 <i class="feather icon-arrow-up m-l-10 m-r-10"></i>$1,055 <i class="feather icon-arrow-down"></i></p>
                        <i class="material-icons-two-tone d-block f-46 card-icon text-white">account_circle</i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card bg-success order-card">
                    <div class="card-body">
                        <h6 class="text-white">Total Sales</h6>
                        <h2 class="text-white">1641</h2>
                        <p class="m-b-0">$5,032 <i class="feather icon-arrow-down m-l-10 m-r-10"></i>$1,055 <i class="feather icon-arrow-up"></i></p>
                        <i class="material-icons-two-tone d-block f-46 card-icon text-white">local_mall</i>
                    </div>
                </div>
            </div>
            <!-- order  end -->
            <!-- subscribe start -->
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="material-icons-two-tone text-primary d-block f-46">local_post_office</i>
                        <h4 class="m-t-20"><span class="text-primary">8.62k</span> Subscribers</h4>
                        <p class="m-b-20">Your main list is growing</p>
                        <button class="btn btn-primary btn-sm btn-round">Manage List</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="material-icons-two-tone text-success d-block f-46">child_care</i>
                        <h4 class="m-t-20"><span class="text-success">+40</span> Followers</h4>
                        <p class="m-b-20">Your main list is growing</p>
                        <button class="btn btn-success btn-sm btn-round">Check them out</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="material-icons-two-tone text-danger d-block f-46">redeem</i>
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
                        <h5 class="text-start">Articles</h5>
                        <span class="d-block text-primary f-36">56</span>
                        <p class="m-b-0">Total</p>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width:56%"></div>
                        </div>
                    </div>
                    <div class="card-footer bg-primary border-0 py-3">
                        <h6 class="text-white m-b-0">Draft: 22</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card statustic-card">
                    <div class="card-body text-center">
                        <h5 class="text-start">Categories</h5>
                        <span class="d-block text-success f-36">14</span>
                        <p class="m-b-0">Total</p>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width:14%"></div>
                        </div>
                    </div>
                    <div class="card-footer bg-success border-0 py-3">
                        <h6 class="text-white m-b-0">Used: 14</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card statustic-card">
                    <div class="card-body text-center">
                        <h5 class="text-start">Tickets</h5>
                        <span class="d-block text-danger f-36">85</span>
                        <p class="m-b-0">Total</p>
                        <div class="progress">
                            <div class="progress-bar bg-danger" style="width:85%"></div>
                        </div>
                    </div>
                    <div class="card-footer bg-danger border-0 py-3">
                        <h6 class="text-white m-b-0">Closed Today: 85</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card statustic-card">
                    <div class="card-body text-center">
                        <h5 class="text-start">Forums</h5>
                        <span class="d-block text-warning f-36">42</span>
                        <p class="m-b-0">Total</p>
                        <div class="progress">
                            <div class="progress-bar bg-warning" style="width:42%"></div>
                        </div>
                    </div>
                    <div class="card-footer bg-warning border-0 py-3">
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
            <!-- visitors  start -->
            <div class="col-sm-4">
                <div class="card bg-danger text-white widget-visitor-card">
                    <div class="card-body text-center">
                        <h2 class="text-white">1,658</h2>
                        <h6 class="text-white">Daily user</h6>
                        <i class="material-icons-two-tone d-block f-46 text-white">account_circle</i>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-primary text-white widget-visitor-card">
                    <div class="card-body text-center">
                        <h2 class="text-white">5,678</h2>
                        <h6 class="text-white">Daily visitor</h6>
                        <i class="material-icons-two-tone d-block f-46 text-white">description</i>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-warning text-white widget-visitor-card">
                    <div class="card-body text-center">
                        <h2 class="text-white">5,678</h2>
                        <h6 class="text-white">Last month visitor</h6>
                        <i class="material-icons-two-tone d-block f-46 text-white">emoji_events</i>
                    </div>
                </div>
            </div>
            <!-- visitors  end -->
            <!-- project  start -->
            <div class="col-md-12 col-xl-6 ">
                <div class="card app-design">
                    <div class="card-body">
                        <button class="btn btn-primary float-end">Completed</button>
                        <h6 class="f-w-400 text-muted">App Design And Development</h6>
                        <p class="text-primary f-w-400">Android</p>
                        <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                        <div class="design-description d-inline-block m-r-40">
                            <h3 class="f-w-400">678</h3>
                            <p class="text-muted">Question</p>
                        </div>
                        <div class="design-description d-inline-block">
                            <h3 class="f-w-400">1,452</h3>
                            <p class="text-muted">Comments</p>
                        </div>
                        <div class="team-box p-b-20">
                            <p class="d-inline-block m-r-20 f-w-400">Team</p>
                            <div class="team-section d-inline-block">
                                <a href="#! "><img src="assets/images/user/avatar-2.jpg " data-bs-toggle="tooltip" title="Josephin Doe" alt=" "></a>
                                <a href="#! "><img src="assets/images/user/avatar-3.jpg " data-bs-toggle="tooltip" title="Lary Doe" alt=" " class="m-l-5 "></a>
                                <a href="#! "><img src="assets/images/user/avatar-4.jpg " data-bs-toggle="tooltip" title="Alia" alt=" " class="m-l-5 "></a>
                                <a href="#! "><img src="assets/images/user/avatar-2.jpg " data-bs-toggle="tooltip" title="Suzen" alt=" " class="m-l-5 "></a>
                            </div>
                        </div>
                        <div class="progress-box">
                            <p class="d-inline-block m-r-20 f-w-400">Progress</p>
                            <div class="progress d-inline-flex">
                                <div class="progress-bar bg-primary" style="width:78% "><label>78%</label></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-6 ">
                <div class="card app-design">
                    <div class="card-body">
                        <button class="btn btn-success float-end">Pending</button>
                        <h6 class="f-w-400 text-muted">Landing Page Design</h6>
                        <p class="text-success f-w-400">Webdesign</p>
                        <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                        <div class="design-description d-inline-block m-r-40">
                            <h3 class="f-w-400">271</h3>
                            <p class="text-muted">Question</p>
                        </div>
                        <div class="design-description d-inline-block">
                            <h3 class="f-w-400">816</h3>
                            <p class="text-muted">Comments</p>
                        </div>
                        <div class="team-box p-b-20">
                            <p class="d-inline-block m-r-20 f-w-400">Team</p>
                            <div class="team-section d-inline-block">
                                <div class="team-section d-inline-block">
                                    <a href="#! "><img src="assets/images/user/avatar-3.jpg " data-bs-toggle="tooltip" title="Lary Doe" alt=" " class="m-l-5 "></a>
                                    <a href="#! "><img src="assets/images/user/avatar-4.jpg " data-bs-toggle="tooltip" title="Alia" alt=" " class="m-l-5 "></a>
                                    <a href="#! "><img src="assets/images/user/avatar-2.jpg " data-bs-toggle="tooltip" title="Josephin Doe" alt=" "></a>
                                    <a href="#! "><img src="assets/images/user/avatar-3.jpg " data-bs-toggle="tooltip" title="Suzen" alt=" " class="m-l-5 "></a>
                                </div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <p class="d-inline-block m-r-20 f-w-400">Progress</p>
                            <div class="progress d-inline-flex">
                                <div class="progress-bar bg-success" style="width:78% "><label>78%</label></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- project  end -->
            <div class="col-md-12 col-xl-6 ">
                <div class="card total-request-card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-5 b-r-default">
                                <h2 class="f-40">827</h2>
                                <h6 class="text-muted p-b-20 f-w-400">Total request</h6>
                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width:50%"></div>
                                </div>
                            </div>
                            <div class="col-sm-7 personal-profile">
                                <div class="row">
                                    <div class="col-6 text-center">
                                        <h3>3,452</h3>
                                        <h6 class="text-muted f-w-400">Threats</h6>
                                        <hr>
                                        <p class="text-muted f-w-400 m-b-0">+384</p>
                                    </div>
                                    <div class="col-6 text-center">
                                        <h3>5,173</h3>
                                        <h6 class="text-muted f-w-400">Nuetral</h6>
                                        <hr>
                                        <p class="text-muted f-w-400 m-b-0">+384</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-6">
                <div class="card total-request-card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-2 text-end">
                                        <i class="fas fa-caret-down text-danger f-24"></i>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="request-contain">
                                            <h2 class="f-40">3,281</h2>
                                            <h6 class="text-muted f-w-400 p-b-20 p-t-10">Standard scans</h6>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" style="width:50%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-2 text-end">
                                        <i class="fas fa-caret-up text-success f-24"></i>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="request-contain">
                                            <h2 class="f-40">3,281</h2>
                                            <h6 class="text-muted f-w-400 p-b-20 p-t-10">Team scans</h6>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" style="width:50%">
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

            <div class="col-xl-3 col-md-6">
                <div class="card feed-card">
                    <div class="card-body p-t-0 p-b-0">
                        <div class="row">
                            <div class="col-4 bg-primary border-feed">
                                <i class="material-icons-two-tone d-block f-46">account_circle</i>
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
                                <i class="material-icons-two-tone d-block f-46">account_balance_wallet</i>
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
                                <i class="material-icons-two-tone d-block f-46">shopping_cart</i>
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
                                <i class="material-icons-two-tone d-block f-46">insert_emoticon</i>
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

            <div class="col-md-6 col-lg-4">
                <div class="card review-project">
                    <div class="card-header">
                        <h5>Sales</h5>
                    </div>
                    <div class="card-body">
                        <h2>$ 17,400</h2>
                        <p class="text-muted m-b-10">Total revenue</p>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <p class="text-success f-16 m-0 f-w-400">472</p>
                                <span class="text-muted">Deals added</span>
                                <div class="progress m-t-20">
                                    <div class="progress-bar bg-success" style="width:69%"><label class="my-0">69%</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <p class="text-primary f-16 m-0 f-w-400">89</p>
                                <span class="text-muted">Deals won</span>
                                <div class="progress m-t-20">
                                    <div class="progress-bar bg-primary" style="width:58%"><label class="my-0">58%</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card card-customer">
                    <div class="card-header">
                        <h5>Customer satisfaction</h5>
                    </div>
                    <div class="card-body">
                        <h2 class="text-success m-0 text-center f-w-400">89.73%</h2>
                        <div class="progress m-t-30 m-b-30">
                            <div class="progress-bar bg-success" style="width:85%"></div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-4 text-center">
                                <p class="text-muted m-b-5 f-14">previous</p>
                                <h6 class="f-w-900">56.75</h6>
                            </div>
                            <div class="col-6 col-md-4 text-center">
                                <p class="text-muted m-b-5 f-14">% Change</p>
                                <h6 class="f-w-900">+12.60</h6>
                            </div>
                            <div class="col-12 col-md-4 text-center">
                                <p class="text-muted m-b-5 f-14">Trend</p>
                                <h6 class="f-w-900">23.78</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card online-form">
                    <div class="card-header">
                        <h5>Online forms</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 m-b-10">
                                <h3>68</h3>
                                <p class="text-muted m-0">New submissions</p>
                            </div>
                            <div class="col-sm-6 m-b-10">
                                <h3>234</h3>
                                <p class="text-muted m-0">New contacts</p>
                            </div>
                        </div>
                        <div class="border-top m-t-5 p-t-10">
                            <div class="row">
                                <div class="col-sm-4 m-t-5">
                                    <span class="f-16 f-w-400 m-0">472</span>
                                    <p class="text-muted m-b-0">Active forms</p>
                                </div>
                                <div class="col-sm-4 m-t-5">
                                    <span class="f-16 f-w-400 m-0">623</span>
                                    <p class="text-muted m-b-0">Forms views</p>
                                </div>
                                <div class="col-sm-4 m-t-5">
                                    <span class="f-16 f-w-400 m-0">34.6%</span>
                                    <p class="text-muted m-b-0">Conversion</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card profile-view">
                    <div class="card-body">
                        <h5>Profile views</h5>
                        <strong class="text-center p-t-40 p-b-30 m-0 f-40 f-w-400 d-block">828</strong>
                        <div class="row">
                            <div class="col-6 text-center">
                                <p class="text-muted m-b-0">By Company</p>
                                <h3 class="my-2 text-success">456</h3>
                            </div>
                            <div class="col-6 text-center">
                                <p class="text-muted m-b-0">By Other</p>
                                <h3 class="my-2 text-primary">125</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card profile-view">
                    <div class="card-body">
                        <h5>Connection</h5>
                        <div class="p-t-35 p-b-35 text-center">
                            <i class="material-icons-two-tone d-block f-60">people_alt</i>
                        </div>
                        <div class="row">
                            <div class="col-6 text-center">
                                <p class="text-muted m-b-0">Followings</p>
                                <h3 class="my-2 text-success">456</h3>
                            </div>
                            <div class="col-6 text-center">
                                <p class="text-muted m-b-0">Follows</p>
                                <h3 class="my-2 text-primary">125</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Reffreals</h5>
                        <div class="card-header-left">
                        </div>
                        <div class="card-header-right">
                            <i class="icofont icofont-spinner-alt-5"></i>
                        </div>
                    </div>
                    <div class="card-body w-100">
                        <h2 class="f-40 m-b-20">38.1% </h2>
                        <div class="card-progress p-t-10">
                            <div class="row ">
                                <div class="col-sm-2 text-end ">
                                    <label class="text-muted ">March</label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary " style="width:50.3%"></div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label class="text-muted ">50.3%</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-progress p-t-10">
                            <div class="row">
                                <div class="col-sm-2 text-end">
                                    <label class="text-muted">February</label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" style="width:42.7%"></div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label class="text-muted">42.7%</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-progress p-t-10">
                            <div class="row">
                                <div class="col-sm-2 text-end">
                                    <label class="text-muted">January</label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" style="width:78.4%"></div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label class="text-muted">78.4%</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-4">
                <div class="card balance-card">
                    <div class="card-header ">
                        <h5>Your balance</h5>
                    </div>
                    <div class="card-body">
                        <h2>$167.20</h2>
                        <button class="btn btn-primary m-t-15 m-b-20">Recharge now</button>
                        <p class="text-muted f-15">Recharge of next month</p>
                        <h4 class="text-muted f-18 f-w-400">$167.20</h4>
                        <div class="progress m-t-30">
                            <div class="progress-bar bg-primary" style="width:60% "></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-4">
                <div class="card balance-card">
                    <div class="card-header ">
                        <h5>Your Stock</h5>
                    </div>
                    <div class="card-body">
                        <h2>95</h2>
                        <button class="btn btn-warning m-t-15 m-b-20">Make order now</button>
                        <p class="text-muted f-15">Order of next month</p>
                        <h4 class="text-muted f-18 f-w-400">1697.95 kg</h4>
                        <div class="progress m-t-30">
                            <div class="progress-bar bg-warning" style="width:85% "></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-4">
                <div class="card balance-card">
                    <div class="card-header ">
                        <h5>Your order</h5>
                    </div>
                    <div class="card-body">
                        <h2>19,540 kg</h2>
                        <button class="btn btn-danger m-t-15 m-b-20">Payment now</button>
                        <p class="text-muted f-15">Payment of next month</p>
                        <h4 class="text-muted f-18 f-w-400">$49,000.20</h4>
                        <div class="progress m-t-30">
                            <div class="progress-bar bg-danger" style="width:75% "></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card statustic-progress-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <i class="fas fa-user f-20 m-b-10"></i>
                                <h6 class="text-muted">Visitors</h6>
                            </div>
                            <div class="col text-end">
                                <h4 class="text-primary">6035</h4>
                            </div>
                        </div>
                        <div class="progress m-t-15">
                            <div class="progress-bar bg-primary" style="width:90%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card statustic-progress-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <i class="fas fa-file-alt f-20 m-b-10"></i>
                                <h6 class="text-muted">Invoices</h6>
                            </div>
                            <div class="col text-end">
                                <h4 class="text-danger">19</h4>
                            </div>
                        </div>
                        <div class="progress m-t-15">
                            <div class="progress-bar bg-danger" style="width:19%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card statustic-progress-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <i class="fas fa-bug f-20 m-b-10"></i>
                                <h6 class="text-muted">Issues</h6>
                            </div>
                            <div class="col text-end">
                                <h4 class="text-warning">63</h4>
                            </div>
                        </div>
                        <div class="progress m-t-15">
                            <div class="progress-bar bg-warning" style="width:63%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card statustic-progress-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <i class="fas fa-folder-open f-20 m-b-10"></i>
                                <h6 class="text-muted">Projects</h6>
                            </div>
                            <div class="col text-end">
                                <h4 class="text-success">95%</h4>
                            </div>
                        </div>
                        <div class="progress m-t-15">
                            <div class="progress-bar bg-success" style="width:95%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- liveline1-section start -->
            <div class="col-sm-12">
                <div id="stastic-slider-full4" class="carousel slide stastic-slider-full-card" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item" data-interval="12000">
                            <div class="row g-0">
                                <div class="col-md-6 col-xl-3">
                                    <div class="card bg-dark rounded-0 shadow-none">
                                        <div class="card-body d-flex justify-content-between align-items-center">
                                            <span class="text-white d-flex justify-content-center align-items-center"><i class="fab fa-ethereum text-danger f-22 m-r-5"></i>Ethereum(ETH)</span>
                                            <h6 class="badge bg-light-danger float-end d-inline-block m-0">+1.5278</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="card bg-dark rounded-0 shadow-none">
                                        <div class="card-body d-flex justify-content-between align-items-center">
                                            <span class="text-white d-flex justify-content-center align-items-center"><i class="fab fa-bitcoin text-warning f-22 m-r-5"></i>Bitcoin(BTC)</span>
                                            <h6 class="badge bg-light-warning float-end d-inline-block m-0">-0.997896</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="card bg-dark rounded-0 shadow-none">
                                        <div class="card-body d-flex justify-content-between align-items-center">
                                            <span class="text-white d-flex justify-content-center align-items-center"><i class="fab fa-cloudsmith text-primary f-22 m-r-5"></i>Ripple(RPL)</span>
                                            <h6 class="badge bg-light-primary float-endd-inline-block m-0">-7.66789</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="card bg-dark rounded-0 shadow-none">
                                        <div class="card-body d-flex justify-content-between align-items-center">
                                            <span class="text-white d-flex justify-content-center align-items-center"><i class="fab fa-asymmetrik text-warning f-22 m-r-5"></i>Neo(NEO)</span>
                                            <h6 class="badge bg-light-warning float-end d-inline-block m-0">+5.78789</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item active" data-interval="12000">
                            <div class="row g-0">
                                <div class="col-md-6 col-xl-3">
                                    <div class="card bg-dark rounded-0 shadow-none">
                                        <div class="card-body d-flex justify-content-between align-items-center">
                                            <span class="text-white d-flex justify-content-center align-items-center"><i class="fab fa-ethereum text-danger f-22 m-r-5"></i>Ethereum(ETH)</span>
                                            <h6 class="badge bg-light-danger float-end d-inline-block m-0">-7.6648</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="card bg-dark rounded-0 shadow-none">
                                        <div class="card-body d-flex justify-content-between align-items-center">
                                            <span class="text-white d-flex justify-content-center align-items-center"><i class="fab fa-bitcoin text-warning f-22 m-r-5"></i>Bitcoin(BTC)</span>
                                            <h6 class="badge bg-light-warning float-end d-inline-block m-0">+5.1024</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="card bg-dark rounded-0 shadow-none">
                                        <div class="card-body d-flex justify-content-between align-items-center">
                                            <span class="text-white d-flex justify-content-center align-items-center"><i class="fab fa-cloudsmith text-primary f-22 m-r-5"></i>Ripple(RPL)</span>
                                            <h6 class="badge bg-light-primary float-end d-inline-block m-0">+4.5896</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="card bg-dark rounded-0 shadow-none">
                                        <div class="card-body d-flex justify-content-between align-items-center">
                                            <span class="text-white d-flex justify-content-center align-items-center"><i class="fab fa-asymmetrik text-warning f-22 m-r-5"></i>Neo(NEO)</span>
                                            <h6 class="badge bg-light-warning float-end d-inline-block m-0">+1.4563</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- liveline1-section end -->
            <!-- table card-1 start -->
            <div class="col-md-12 col-xl-4">
                <div class="card flat-card">
                    <div class="row-table">
                        <div class="col-sm-6 card-body br">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="material-icons-two-tone text-success">visibility</i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>10k</h5>
                                    <span>Visitors</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="material-icons-two-tone text-danger">radio</i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>100%</h5>
                                    <span>Volume</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-table">
                        <div class="col-sm-6 card-body br">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="material-icons-two-tone text-primary">description</i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>2000 +</h5>
                                    <span>Files</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="material-icons-two-tone text-warning">move_to_inbox</i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>120</h5>
                                    <span>Mails</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- table card-1 end -->
            <!-- table card-2 start -->
            <div class="col-md-12 col-xl-4">
                <div class="card flat-card">
                    <div class="row-table">
                        <div class="col-sm-6 card-body br">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="material-icons-two-tone text-primary">local_florist</i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>1000</h5>
                                    <span>Shares</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="material-icons-two-tone text-primary">router</i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>600</h5>
                                    <span>Network</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-table">
                        <div class="col-sm-6 card-body br">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="material-icons-two-tone text-primary">filter_vintage</i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>3550</h5>
                                    <span>Returns</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="material-icons-two-tone text-primary">local_mall</i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>100%</h5>
                                    <span>Order</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- table card-2 end -->
            <!-- Widget primary-success card start -->
            <div class="col-md-12 col-xl-4">
                <!-- widget primary card start -->
                <div class="card flat-card widget-primary-card">
                    <div class="row-table row">
                        <div class="col-3 card-body">
                            <i class="material-icons-two-tone text-white">stars</i>
                        </div>
                        <div class="col-9">
                            <h4>4000 +</h4>
                            <h6>Ratings Received</h6>
                        </div>
                    </div>
                </div>
                <!-- widget primary card end -->
                <!-- widget-success-card start -->
                <div class="card flat-card widget-purple-card">
                    <div class="row-table row">
                        <div class="col-3 card-body">
                            <i class="material-icons-two-tone text-white">emoji_events</i>
                        </div>
                        <div class="col-9">
                            <h4>17</h4>
                            <h6>Achievements</h6>
                        </div>
                    </div>
                </div>
                <!-- widget-success-card end -->
            </div>
            <!-- Widget primary-success card end -->
            <!-- liveline-section start -->
            <div class="col-sm-12">
                <div class="row g-0">
                    <div class="col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <span>REALTY</span>
                                <h6 class="float-end text-danger d-inline-block m-0">-0.99</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <span>TELCOM</span>
                                <h6 class="float-end text-success d-inline-block m-0">+1.52</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <span>CPSE</span>
                                <h6 class="float-end text-success d-inline-block m-0">+5.78</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <span>INFRA</span>
                                <h6 class="float-end text-danger d-inline-block m-0">-7.66</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <span>TECK</span>
                                <h6 class="float-end text-success d-inline-block m-0">+4.56</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <span>BASMTR</span>
                                <h6 class="float-end text-success d-inline-block m-0">+0.78</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- liveline-section end -->
            <!-- liveline2-section start -->
            <div class="col-sm-12 stastic-slider-full-card">
                <div class="row g-0">
                    <div class="col-md-6 col-xl-3">
                        <div class="card rounded-0">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <span class="d-flex justify-content-center align-items-center"><i class="fab fa-bitcoin text-warning f-22 m-r-5"></i>Bitcoin(BTC)</span>
                                <h6 class="badge bg-light-warning float-end d-inline-block m-0">-0.997896</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card rounded-0">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <span class="d-flex justify-content-center align-items-center"><i class="fab fa-ethereum text-danger f-22 m-r-5"></i>Ethereum(ETH)</span>
                                <h6 class="badge bg-light-danger float-end d-inline-block m-0">+1.1456</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card rounded-0">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <span class="d-flex justify-content-center align-items-center"><i class="fab fa-asymmetrik text-warning f-22 m-r-5"></i>Neo(NEO)</span>
                                <h6 class="badge bg-light-warning  float-end d-inline-block m-0">+5.78787</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card rounded-0">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <span class="d-flex justify-content-center align-items-center"><i class="fab fa-cloudsmith text-success f-22 m-r-5"></i>Ripple(RPL)</span>
                                <h6 class="badge bg-light-success float-endd-inline-block m-0">-7.99999</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- liveline2-section end -->
            <!-- live-view start -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <h6>Sales view</h6>
                            </div>
                            <div class="col text-end">
                                <h2>1042</h2>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <h3 class="m-0"><i class="fas fa-circle text-success f-10 m-r-5"></i>66%</h3>
                                <span class="ms-3">Desktop</span>
                            </div>
                            <div class="col">
                                <h3 class="m-0"><i class="fas fa-circle text-primary f-10 m-r-5"></i>26%</h3>
                                <span class="ms-3">Tablet</span>
                            </div>
                            <div class="col">
                                <h3 class="m-0"><i class="fas fa-circle text-danger f-10 m-r-5"></i>8%</h3>
                                <span class="ms-3">Mobile</span>
                            </div>
                        </div>
                        <div class="progress mt-4" style="height:8px;">
                            <div class="progress-bar bg-success rounded me-1" role="progressbar" style="width: 66%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-primary rounded me-1" role="progressbar" style="width: 26%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 8%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-1">New York , NY</h6>
                        <span class="d-block mb-2">Monday 2:00 PM</span>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-auto">
                                <h2 class="m-0"><i class="feather icon-cloud-snow text-muted me-2"></i>23<sup class="f-20">°</sup></h2>
                            </div>
                            <div class="col text-end">
                                <div class="form-group mb-1">
                                    <label  for="switch-a-1" class="m-r-5 f-20 mb-0">°C</label>
                                    <div class="form-check form-switch form-check-inline m-0 p-0">
                                        <input class="form-check-input m-0" type="checkbox" id="switch-a-1" checked>
                                        <label class="form-check-label" for="switch-a-1"></label>
                                    </div>
                                    <label  for="switch-a-1" class="m-l-5 f-20 mb-0">°F</label>
                                </div>
                                <span class="d-block mt-1">Partly Cloudy</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- live-view end -->
            <!-- active-user start -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-start">
                            <div class="col">
                                <h2>954</h2>
                            </div>
                            <div class="col-auto text-end">
                                <h6 class="text-muted">New Order</h6>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <span class="d-block"><i class="fas fa-circle text-success f-10 m-r-10"></i>India</span>
                                <span class="d-block"><i class="fas fa-circle text-danger f-10 m-r-10"></i>France</span>
                                <span class="d-block"><i class="fas fa-circle text-primary f-10 m-r-10"></i>Other</span>
                            </div>
                            <div class="col-sm-6">
                                <span class="d-block"><i class="fas fa-circle text-warning f-10 m-r-10"></i>United states</span>
                                <span class="d-block"><i class="fas fa-circle text-primary f-10 m-r-10"></i>United Kingdom</span>
                            </div>
                        </div>
                        <div class="progress mt-3" style="height:20px;">
                            <div class="progress-bar text-success bg-light-success rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">24%</div>
                            <div class="progress-bar text-danger bg-light-danger rounded" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">12%</div>
                            <div class="progress-bar text-primary bg-light-primary rounded" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">10%</div>
                            <div class="progress-bar text-warning bg-light-warning rounded" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">8%</div>
                            <div class="progress-bar text-info bg-light-info rounded" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">35%</div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Overdue tasks</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h2 class="m-0"><i class="feather icon-arrow-up text-success"></i>4</h2>
                            </div>
                            <div class="col text-end">
                                <h5 class="text-success m-0">15%</h5>
                                <span class="d-block">Last Month:6</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- active-user end -->
            <!-- Revenue-section start -->
            <div class="col-xl-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <span>Revenue</span>
                            </div>
                            <div class="col text-end">
                                <div class="btn-group">
                                    <button class="btn  btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">This Year</button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#!">1 Week</a>
                                        <a class="dropdown-item" href="#!">2 Month</a>
                                        <a class="dropdown-item" href="#!">4 Year</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="progress mt-4" style="height:10px;">
                            <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <span class="text-uppercase mt-2 d-block">Earning</span>
                                <h5 class="mb-0">$6.455</h5>
                            </div>
                            <div class="col text-end">
                                <span class="text-uppercase mt-2 d-block">Expense</span>
                                <h5 class="mb-0">$3.869</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-auto">
                                <span class="text-uppercase d-block">budget</span>
                            </div>
                            <div class="col text-end">
                                <span class="text-uppercase d-block">Earning</span>
                                <h5 class="mb-0">$5,569 of $1,000</h5>
                            </div>
                        </div>
                        <div class="progress mt-2" style="height:10px;">
                            <div class="progress-bar bg-success rounded" role="progressbar" style="width: 50%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">40%</div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row d-flex align-items-center m-0">
                            <div class="col-6 text-center">
                                <div style="padding:20px 25px;">
                                    <h2 class="mb-0">19<sup class="f-20">°</sup></h2>
                                    <span>Sunny</span>
                                </div>
                            </div>
                            <div class="col-6 text-center bg-primary p-0">
                                <div style="padding:20px 25px;">
                                    <i class="feather icon-sun f-36 text-white"></i>
                                    <h6 class="mt-2 mb-0 text-white f-w-400">New York , NY</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Revenue-section end -->
            <!-- timeline-section start -->
            <div class="col-sm-12">
                <div class="row g-0 statstic-data-card">
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body border-bottom p-0">
                                <div class="row text-center m-0">
                                    <div class="col border-right">
                                        <h6 class="my-3 text-danger">0.56%</h6>
                                    </div>
                                    <div class="col border-right">
                                        <h6 class="my-3 text-danger">0.88</h6>
                                    </div>
                                    <div class="col">
                                        <h6 class="my-3 text-muted">160.40</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body level-up text-end">
                                <span class="float-start"><i class="feather icon-trending-up text-success f-16 me-2"></i>SPY</span>
                                <h3 class="d-inline-block m-0">CPSE</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body border-bottom p-0">
                                <div class="row text-center m-0">
                                    <div class="col border-right">
                                        <h6 class="my-3 text-success">0.76%</h6>
                                    </div>
                                    <div class="col border-right">
                                        <h6 class="my-3 text-success">0.45</h6>
                                    </div>
                                    <div class="col">
                                        <h6 class="my-3 text-muted">110.40</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body level-down text-end">
                                <span class="float-start"><i class="feather icon-trending-down text-danger f-16 me-2"></i>SPY</span>
                                <h3 class="d-inline-block m-0">BANKEX</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body border-bottom p-0">
                                <div class="row text-center m-0">
                                    <div class="col border-right">
                                        <h6 class="my-3 text-danger">1.26%</h6>
                                    </div>
                                    <div class="col border-right">
                                        <h6 class="my-3 text-success">1.57</h6>
                                    </div>
                                    <div class="col">
                                        <h6 class="my-3 text-muted">150.65</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body level-down text-end">
                                <span class="float-start"><i class="feather icon-trending-down text-danger f-16 me-2"></i>SPY</span>
                                <h3 class="d-inline-block m-0">UTILS</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body border-bottom p-0">
                                <div class="row text-center m-0">
                                    <div class="col border-right">
                                        <h6 class="my-3 text-success">0.73%</h6>
                                    </div>
                                    <div class="col border-right">
                                        <h6 class="my-3 text-success">0.65</h6>
                                    </div>
                                    <div class="col">
                                        <h6 class="my-3 text-muted">120.34</h6>
                                    </div>
                                </div>
                            </div>
                            <div id="stastic-slider-3" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item" data-interval="2000">
                                        <div class="card-body level-down text-end">
                                            <span class="float-start"><i class="feather icon-trending-down text-danger f-16 me-2"></i>SPY</span>
                                            <h3 class="d-inline-block m-0">REALTY</h3>
                                        </div>
                                    </div>
                                    <div class="carousel-item active" data-interval="2000">
                                        <div class="card-body level-up text-end">
                                            <span class="float-start"><i class="feather icon-trending-up text-success f-16 me-2"></i>DIA</span>
                                            <h3 class="d-inline-block m-0">METAL</h3>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-interval="2000">
                                        <div class="card-body text-end">
                                            <span class="float-start"><i class="feather icon-trending-down text-success f-16 me-2"></i>QQQ</span>
                                            <h3 class="d-inline-block m-0">OILGAS</h3>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-interval="2000">
                                        <div class="card-body level-down text-end">
                                            <span class="float-start"><i class="feather icon-trending-down text-danger f-16 me-2"></i>IWM</span>
                                            <h3 class="d-inline-block m-0">CDGS</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- timeline-section end -->
            <!-- Facebook card start -->
            <div class="col-md-6 col-xl-3">
                <div class="card social-widget-card bg-primary">
                    <div class="card-body">
                        <h3 class="text-white m-0">1165 +</h3>
                        <span class="m-t-10">Facebook Users</span>
                        <i class="fab fa-facebook"></i>
                    </div>
                </div>
            </div>
            <!-- Facebook card end -->
            <!-- Twitter card start -->
            <div class="col-md-6 col-xl-3">
                <div class="card social-widget-card bg-info">
                    <div class="card-body">
                        <h3 class="text-white m-0">780 +</h3>
                        <span class="m-t-10">Twitter Users</span>
                        <i class="fab fa-twitter"></i>
                    </div>
                </div>
            </div>
            <!-- Twitter card end -->
            <!-- Linked in card start -->
            <div class="col-md-6 col-xl-3">
                <div class="card social-widget-card bg-primary">
                    <div class="card-body">
                        <h3 class="text-white m-0">998 +</h3>
                        <span class="m-t-10">Linked In Users</span>
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                </div>
            </div>
            <!-- Linked in card end -->
            <!-- Google-plus card start -->
            <div class="col-md-6 col-xl-3">
                <div class="card social-widget-card bg-danger">
                    <div class="card-body bg-googleplus">
                        <h3 class="text-white m-0">650 +</h3>
                        <span class="m-t-10">Google Plus Users</span>
                        <i class="fab fa-google-plus-g"></i>
                    </div>
                </div>
            </div>
            <!-- Google-plus card end -->
            <!-- imprestion, goal, impect start -->
            <div class="col-xl-4 col-md-12">
                <div class="card comp-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-b-20">Impressions</h6>
                                <h3 class="text-primary">1,563</h3>
                                <p class="m-b-0">May 23 - June 01 (2018)</p>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-eye bg-light-primary text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card comp-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-b-20">Goal</h6>
                                <h3 class="text-success">30,564</h3>
                                <p class="m-b-0">May 28 - June 01 (2018)</p>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-bullseye bg-light-success text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card comp-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-b-20">Impact</h6>
                                <h3 class="text-warning">42.6%</h3>
                                <p class="m-b-0">May 30 - June 01 (2018)</p>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-hand-paper bg-light-warning text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- imprestion, goal, impect end -->
            <!-- product profit start -->
            <div class="col-xl-3 col-md-6">
                <div class="card prod-p-card bg-danger">
                    <div class="card-body">
                        <div class="row align-items-center m-b-25">
                            <div class="col">
                                <h6 class="m-b-5 text-white">Total Profit</h6>
                                <h3 class="m-b-0 text-white">$1,783</h3>
                            </div>
                            <div class="col-auto">
                                <i class="material-icons-two-tone text-white">account_balance_wallet</i>
                            </div>
                        </div>
                        <p class="m-b-0 text-white"><span class="label label-danger m-r-10">+11%</span>From Previous Month</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card prod-p-card bg-primary">
                    <div class="card-body">
                        <div class="row align-items-center m-b-25">
                            <div class="col">
                                <h6 class="m-b-5 text-white">Total Orders</h6>
                                <h3 class="m-b-0 text-white">15,830</h3>
                            </div>
                            <div class="col-auto">
                                <i class="material-icons-two-tone text-white">local_mall</i>
                            </div>
                        </div>
                        <p class="m-b-0 text-white"><span class="label label-primary m-r-10">+12%</span>From Previous Month</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card prod-p-card bg-success">
                    <div class="card-body">
                        <div class="row align-items-center m-b-25">
                            <div class="col">
                                <h6 class="m-b-5 text-white">Average Price</h6>
                                <h3 class="m-b-0 text-white">$6,780</h3>
                            </div>
                            <div class="col-auto">
                                <i class="material-icons-two-tone text-white">monetization_on</i>
                            </div>
                        </div>
                        <p class="m-b-0 text-white"><span class="label label-success m-r-10">+52%</span>From Previous Month</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card prod-p-card bg-warning">
                    <div class="card-body">
                        <div class="row align-items-center m-b-25">
                            <div class="col">
                                <h6 class="m-b-5 text-white">Product Sold</h6>
                                <h3 class="m-b-0 text-white">6,784</h3>
                            </div>
                            <div class="col-auto">
                                <i class="material-icons-two-tone text-white">local_offer</i>
                            </div>
                        </div>
                        <p class="m-b-0 text-white"><span class="label label-warning m-r-10">+52%</span>From Previous Month</p>
                    </div>
                </div>
            </div>
            <!-- product profit end -->
            <!-- client-section start -->
            <div class="col-sm-12">
                <div class="row g-0">
                    <div class="col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body border-bottom">
                                <span class="text-muted">Support Requests</span>
                                <h3 class="mt-3 mb-0"><i class="feather icon-arrow-down text-danger"></i>25<sup class="text-danger f-14 ms-1">-11%</sup></h3>
                            </div>
                            <div class="card-body">
                                <span class="text-muted">Open Ticket</span>
                                <h3 class="mt-3 mb-0"><i class="feather icon-arrow-down text-danger"></i>29<sup class="text-danger f-14 ms-1">-11%</sup></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body border-bottom">
                                <span class="text-muted">Agent Response</span>
                                <h3 class="mt-3 mb-0"><i class="feather icon-arrow-up text-success"></i>8<sup class="text-success f-14 ms-1">+6%</sup></h3>
                            </div>
                            <div class="card-body">
                                <span class="text-muted">Running Ticket</span>
                                <h3 class="mt-3 mb-0"><i class="feather icon-arrow-down text-danger"></i>15<sup class="text-danger f-14 ms-1">-13%</sup></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body border-bottom">
                                <span class="text-muted">Support Resolved</span>
                                <h3 class="mt-3 mb-0"><i class="feather icon-arrow-down text-danger"></i>1<sup class="text-danger f-14 ms-1">-11%</sup></h3>
                            </div>
                            <div class="card-body">
                                <span class="text-muted">Solved Ticket</span>
                                <h3 class="mt-3 mb-0"><i class="feather icon-arrow-up text-success"></i>4<sup class="text-success f-14 ms-1">+5%</sup></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body border-bottom">
                                <span class="text-muted">Pending Ticket</span>
                                <h3 class="mt-3 mb-0"><i class="feather icon-arrow-up text-success"></i>1.56<sup class="text-success f-14 ms-1">+8%</sup></h3>
                            </div>
                            <div class="card-body">
                                <span class="text-muted">Reassign Ticket</span>
                                <h3 class="mt-3 mb-0"><i class="feather icon-arrow-down text-danger"></i>2<sup class="text-danger f-14 ms-1">-11%</sup></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body border-bottom">
                                <span class="text-muted">Reopen Ticket</span>
                                <h3 class="mt-3 mb-0"><i class="feather icon-arrow-up text-success"></i>5.7%<sup class="text-success f-14 ms-1">+4%</sup></h3>
                            </div>
                            <div class="card-body">
                                <span class="text-muted">Close Ticket</span>
                                <h3 class="mt-3 mb-0"><i class="feather icon-arrow-up text-success"></i>10<sup class="text-success f-14 ms-1">+9%</sup></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body border-bottom">
                                <span class="text-muted">Return Ticket</span>
                                <h3 class="mt-3 mb-0"><i class="feather icon-arrow-down text-danger"></i>4<sup class="text-danger f-14 ms-1">+7%</sup></h3>
                            </div>
                            <div class="card-body">
                                <span class="text-muted">Satisfied Clients</span>
                                <h3 class="mt-3 mb-0"><i class="feather icon-arrow-down text-danger"></i>3<sup class="text-danger f-14 ms-1">+6%</sup></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- client-section end -->
            <!-- Project statustic start -->
            <div class="col-xl-12">
                <div class="card proj-progress-card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <h6>Published Project</h6>
                                <h5 class="m-b-25">532<span class="text-danger m-l-10 m-r-10">+1.69%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-danger bg-danger" style="width:25%"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <h6>Completed Task</h6>
                                <h5 class="m-b-25">4,569<span class="text-primary m-l-10 m-r-10">-0.5%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar progress-primary bg-primary" style="width:65%"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <h6>Successfull Task</h6>
                                <h5 class="m-b-25">89%<span class="text-success m-l-10 m-r-10">+0.99%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar progress-success bg-success" style="width:85%"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <h6>Ongoing Project</h6>
                                <h5 class="m-b-25">365<span class="text-warning m-l-10 m-r-10">+0.35%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar progress-warning bg-warning" style="width:45%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project statustic end -->
            <!-- project-ticket start -->
            <div class="col-xl-4 col-md-12">
                <div class="card proj-t-card">
                    <div class="card-body">
                        <div class="row align-items-center m-b-30">
                            <div class="col-auto">
                                <i class="material-icons-two-tone text-danger f-38">event_available</i>
                            </div>
                            <div class="col p-l-0">
                                <h6 class="m-b-5">Ticket Answered</h6>
                                <h6 class="m-b-0 text-danger">Live Update</h6>
                            </div>
                        </div>
                        <div class="row align-items-center text-center">
                            <div class="col">
                                <h6 class="m-b-0">327</h6>
                            </div>
                            <div class="col"><i class="fas fa-exchange-alt text-danger f-18"></i></div>
                            <div class="col">
                                <h6 class="m-b-0">10 Days</h6>
                            </div>
                        </div>
                        <h6 class="pt-badge bg-light-danger text-danger">53%</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card proj-t-card">
                    <div class="card-body">
                        <div class="row align-items-center m-b-30">
                            <div class="col-auto">
                                <i class="material-icons-two-tone text-success f-38">account_balance</i>
                            </div>
                            <div class="col p-l-0">
                                <h6 class="m-b-5">Project Launched</h6>
                                <h6 class="m-b-0 text-success">Live Update</h6>
                            </div>
                        </div>
                        <div class="row align-items-center text-center">
                            <div class="col">
                                <h6 class="m-b-0">3 Year</h6>
                            </div>
                            <div class="col"><i class="fas fa-exchange-alt text-success f-18"></i></div>
                            <div class="col">
                                <h6 class="m-b-0">623</h6>
                            </div>
                        </div>
                        <h6 class="pt-badge bg-light-success text-success">76%</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card proj-t-card">
                    <div class="card-body">
                        <div class="row align-items-center m-b-30">
                            <div class="col-auto">
                                <i class="material-icons-two-tone text-warning f-38">emoji_objects</i>
                            </div>
                            <div class="col p-l-0">
                                <h6 class="m-b-5">Unique Innovation</h6>
                                <h6 class="m-b-0 text-warning">Live Update</h6>
                            </div>
                        </div>
                        <div class="row align-items-center text-center">
                            <div class="col">
                                <h6 class="m-b-0">1 Month</h6>
                            </div>
                            <div class="col"><i class="fas fa-exchange-alt text-warning f-18"></i></div>
                            <div class="col">
                                <h6 class="m-b-0">248</h6>
                            </div>
                        </div>
                        <h6 class="pt-badge bg-light-warning text-warning">73%</h6>
                    </div>
                </div>
            </div>
            <!-- project-ticket end -->
            <!-- ticket, proj, clent start -->
            <div class="col-xl-3 col-md-6">
                <div class="card ticket-card">
                    <div class="card-body">
                        <p class="m-b-25 bg-light-danger text-danger lbl-card"><i class="fas fa-folder-open m-r-5"></i> Open Tickets</p>
                        <div class="text-center">
                            <h2 class="m-b-0 d-inline-block text-danger">128</h2>
                            <p class="m-b-0 d-inline-block">Tickets</p>
                            <p class="m-b-0 m-t-10"><i class="fas fa-caret-down m-r-10 f-18 text-danger"></i>From Previous Month</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card ticket-card">
                    <div class="card-body">
                        <p class="m-b-25 bg-light-primary text-primary lbl-card"><i class="fas fa-file-archive m-r-5"></i> Close Tickets</p>
                        <div class="text-center">
                            <h2 class="m-b-0 d-inline-block text-primary">134</h2>
                            <p class="m-b-0 d-inline-block">Tickets</p>
                            <p class="m-b-0 m-t-10"><i class="fas fa-caret-up m-r-10 f-18 text-primary"></i>From Previous Month</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card ticket-card">
                    <div class="card-body">
                        <p class="m-b-25 bg-light-success text-success lbl-card"><i class="fas fa-users m-r-5"></i> New Clients</p>
                        <div class="text-center">
                            <h2 class="m-b-0 d-inline-block text-success">307</h2>
                            <p class="m-b-0 d-inline-block">Clients</p>
                            <p class="m-b-0 m-t-10"><i class="fas fa-caret-up m-r-10 f-18 text-success"></i>From Previous Month</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card ticket-card">
                    <div class="card-body">
                        <p class="m-b-25 bg-light-warning text-warning lbl-card"><i class="fas fa-database m-r-5"></i> New Orders</p>
                        <div class="text-center">
                            <h2 class="m-b-0 d-inline-block text-warning">231</h2>
                            <p class="m-b-0 d-inline-block">Orders</p>
                            <p class="m-b-0 m-t-10"><i class="fas fa-caret-up m-r-10 f-18 text-warning"></i>From Previous Month</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ticket, proj, clent end -->
            <!-- analytic card start -->
            <div class="col-xl-4 col-md-12">
                <div class="card analytic-card bg-success">
                    <div class="card-body">
                        <div class="row align-items-center m-b-25">
                            <div class="col-auto">
                                <i class="fas fa-shopping-cart text-success f-18 analytic-icon"></i>
                            </div>
                            <div class="col text-end">
                                <h3 class="m-b-5 text-white">15,678</h3>
                                <h6 class="m-b-0 text-white">Total Sales</h6>
                            </div>
                        </div>
                        <p class="m-b-0  text-white d-inline-block">Total Income : </p>
                        <h5 class=" text-white d-inline-block m-b-0 m-l-10">$2,451</h5>
                        <h6 class="m-b-0 d-inline-block  text-white float-end"><i class="fas fa-caret-up m-r-10 f-18"></i>10%</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card analytic-card bg-primary">
                    <div class="card-body">
                        <div class="row align-items-center m-b-25">
                            <div class="col-auto">
                                <i class="fas fa-users text-primary f-18 analytic-icon"></i>
                            </div>
                            <div class="col text-end">
                                <h3 class="m-b-5 text-white">1,678</h3>
                                <h6 class="m-b-0 text-white">Total Users</h6>
                            </div>
                        </div>
                        <p class="m-b-0 text-white d-inline-block">Total Revenue : </p>
                        <h5 class="text-white d-inline-block m-b-0 m-l-10">$2,451</h5>
                        <h6 class="m-b-0 d-inline-block text-white float-end"><i class="fas fa-caret-up m-r-10 f-18"></i>30%</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card analytic-card bg-danger">
                    <div class="card-body">
                        <div class="row align-items-center m-b-25">
                            <div class="col-auto">
                                <i class="fas fa-file-code text-danger f-18 analytic-icon"></i>
                            </div>
                            <div class="col text-end">
                                <h3 class="m-b-5 text-white">15,678</h3>
                                <h6 class="m-b-0 text-white">Total Project</h6>
                            </div>
                        </div>
                        <p class="m-b-0 d-inline-block text-white">Active Projects : </p>
                        <h5 class="text-white d-inline-block m-b-0 m-l-10">$2,451</h5>
                        <h6 class="m-b-0 d-inline-block text-white float-end"><i class="fas fa-caret-down m-r-10 f-18"></i>10%</h6>
                    </div>
                </div>
            </div>
            <!-- project-ticket end -->
            <!-- analytic card start -->
            <div class="col-xl-3 col-md-6">
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
            <div class="col-xl-3 col-md-6">
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
            <div class="col-xl-3 col-md-6">
                <div class="card social-res-card">
                    <div class="card-header">
                        <h5>Google+ Source</h5>
                    </div>
                    <div class="card-body">
                        <p class="m-b-10">profile</p>
                        <div class="progress m-b-25">
                            <div class="progress-bar bg-success" style="width:65%"></div>
                        </div>
                        <p class="m-b-10">Connect</p>
                        <div class="progress m-b-25">
                            <div class="progress-bar bg-success" style="width:15%"></div>
                        </div>
                        <p class="m-b-10">Like News</p>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width:95%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card social-res-card">
                    <div class="card-header">
                        <h5>Linkedin Source</h5>
                    </div>
                    <div class="card-body">
                        <p class="m-b-10">Profile</p>
                        <div class="progress m-b-25">
                            <div class="progress-bar bg-warning" style="width:45%"></div>
                        </div>
                        <p class="m-b-10">Connect</p>
                        <div class="progress m-b-25">
                            <div class="progress-bar bg-warning" style="width:85%"></div>
                        </div>
                        <p class="m-b-10">Like Posts</p>
                        <div class="progress">
                            <div class="progress-bar bg-warning" style="width:35%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- project-ticket end -->
            <!-- peoduct statustic start -->
            <div class="col-xl-12">
                <div class="card product-progress-card">
                    <div class="card-body">
                        <div class="row pp-main">
                            <div class="col-xl-3 col-md-6">
                                <div class="pp-cont">
                                    <div class="row align-items-center m-b-20">
                                        <div class="col-auto">
                                            <i class="material-icons-two-tone text-mute f-38">business_center</i>
                                        </div>
                                        <div class="col text-end">
                                            <h2 class="m-b-0 text-primary">2476</h2>
                                        </div>
                                    </div>
                                    <div class="row align-items-center m-b-15">
                                        <div class="col-auto">
                                            <p class="m-b-0">Total Product</p>
                                        </div>
                                        <div class="col text-end">
                                            <p class="m-b-0 text-primary"><i class="fas fa-long-arrow-alt-up m-r-10"></i>64%</p>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" style="width:45%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="pp-cont">
                                    <div class="row align-items-center m-b-20">
                                        <div class="col-auto">
                                            <i class="material-icons-two-tone text-mute f-38">local_offer</i>
                                        </div>
                                        <div class="col text-end">
                                            <h2 class="m-b-0 text-danger">843</h2>
                                        </div>
                                    </div>
                                    <div class="row align-items-center m-b-15">
                                        <div class="col-auto">
                                            <p class="m-b-0">New Orders</p>
                                        </div>
                                        <div class="col text-end">
                                            <p class="m-b-0 text-danger"><i class="fas fa-long-arrow-alt-down m-r-10"></i>34%</p>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" style="width:75%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="pp-cont">
                                    <div class="row align-items-center m-b-20">
                                        <div class="col-auto">
                                            <i class="material-icons-two-tone text-mute f-38">settings_input_component</i>
                                        </div>
                                        <div class="col text-end">
                                            <h2 class="m-b-0 text-warning">63%</h2>
                                        </div>
                                    </div>
                                    <div class="row align-items-center m-b-15">
                                        <div class="col-auto">
                                            <p class="m-b-0">Conversion Rate</p>
                                        </div>
                                        <div class="col text-end">
                                            <p class="m-b-0 text-warning"><i class="fas fa-long-arrow-alt-up m-r-10"></i>64%</p>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" style="width:65%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="pp-cont">
                                    <div class="row align-items-center m-b-20">
                                        <div class="col-auto">
                                            <i class="material-icons-two-tone text-mute f-38">store</i>
                                        </div>
                                        <div class="col text-end">
                                            <h2 class="m-b-0 text-success">41M</h2>
                                        </div>
                                    </div>
                                    <div class="row align-items-center m-b-15">
                                        <div class="col-auto">
                                            <p class="m-b-0">Revenue</p>
                                        </div>
                                        <div class="col text-end">
                                            <p class="m-b-0 text-success"><i class="fas fa-long-arrow-alt-up m-r-10"></i>54%</p>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" style="width:35%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- peoduct statustic end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
@include('html.layouts.footer-bottom-link')
</body>

</html>
