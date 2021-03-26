<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    @include('html.layouts.head-bottom-link')
    <link rel="stylesheet" href="assets/css/layout-nested.css">
</head>
@include('html.layouts.layout-vertical')
<!-- [ Main Content ] start -->
<div class="pc-container sidebar-layouts">
    <div class="pcoded-content">
        <div class="page-sidebar">
            <div class="mail-l-content">
                <ul class="mb-2 nav nav-tab flex-column nav-pills sidebar-links">
                    <li class="nav-item">
                        <a class="nav-link  active" href="#">
                            <span><i class="material-icons-two-tone">move_to_inbox</i> Inbox</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link "  href="#">
                            <span><i class="material-icons-two-tone">star</i> Starred</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">
                            <span><i class="material-icons-two-tone">collections_bookmark</i> Drafts</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">
                            <span><i class="material-icons-two-tone">send</i> Sent Mail</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">
                            <span><i class="material-icons-two-tone">delete</i> Trash</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#!" class="nav-link ">
                            <span><i class="material-icons-two-tone">stars</i> Important</span>
                            <span>18</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-bs-toggle="collapse" href="#level-menu" role="button" aria-expanded="false" aria-controls="level-menu">
                            <span><i class="material-icons-two-tone">list_alt</i> More</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                        </a>
                        <div class="collapse" id="level-menu">
                            <ul class="nav nav-tab flex-column nav-pills sidebar-links">
                                <li class="nav-item">
                                    <a class="nav-link " href="#">
                                        <span><i class="material-icons-two-tone">send</i> Sent Mail</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#">
                                        <span><i class="material-icons-two-tone">delete</i> Trash</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="px-3">
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="pc-head">
                <div class="mail-search">
                    <form class="px-3 w-100 h-100 d-flex align-items-center">
                        <div class="form-group mb-0 d-flex align-items-center w-100">
                            <i data-feather="search"></i>
                            <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
                            <a href="#!" class="search-close text-body"><i data-feather="x" class=""></i></a>
                        </div>
                    </form>
                </div>
                <div class="pc-toggle-sidemenu">
                    <a href="#!"><i class="material-icons-two-tone">menu_open</i></a>
                </div>
                <div class="pc-head-content">
                    <ul class="list-inline m-0">
                        <li class="list-inline-item">
                            <a href="#!" class="mail-search-toggle"><i class="material-icons-two-tone">search</i></a>
                        </li>
                        <li class="list-inline-item d-none d-sm-inline-block"><a href="#!"><i class="material-icons-two-tone">warning</i></a></li>
                        <li class="list-inline-item"><a href="#!"><i class="material-icons-two-tone">move_to_inbox</i></a></li>
                        <li class="list-inline-item"><a href="#!"><i class="material-icons-two-tone">delete</i></a></li>
                        <li class="list-inline-item d-none d-sm-inline-block"><a href="#!"><i class="material-icons-two-tone">collections_bookmark</i></a></li>
                        <li class="list-inline-item d-none d-sm-inline-block"><a href="#!"><i class="material-icons-two-tone">drafts</i></a></li>
                        <li class="list-inline-item">
                            <div class="dropdown">
                                <a class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons-two-tone">send</i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">drafts</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item pl-4" href="#"><span><i class="feather icon-users me-2"></i>Social</span></a>
                                    <a class="dropdown-item pl-4" href="#"><span><i class="feather icon-tag me-2"></i>Promotion</span></a>
                                    <a class="dropdown-item pl-4" href="#"><span><i class="feather icon-upload-cloud me-2"></i>Update</span></a>
                                    <a class="dropdown-item pl-4" href="#"><span><i class="feather icon-message-square me-2"></i>Forum</span></a>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="dropdown">
                                <a class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons-two-tone">more</i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#!">Mark as unread</a>
                                    <a class="dropdown-item" href="#!">Mark as important</a>
                                    <a class="dropdown-item" href="#!">Mark as not important</a>
                                    <a class="dropdown-item" href="#!">Filter messages like these</a>
                                    <a class="dropdown-item" href="#!">Mute</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="pc-body">
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5>Horizontal Layouts</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#!">Layouts</a></li>
                                    <li class="breadcrumb-item">Horizontal Layouts</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- page statustic card start -->
                    <div class="col-xl-4 col-md-6">
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
                    <div class="col-xl-4 col-md-6">
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
                    <div class="col-xl-4 col-md-12">
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
                    <!-- order  end -->
                    <!-- subscribe start -->
                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="material-icons-two-tone text-primary d-block f-46">local_post_office</i>
                                <h4 class="m-t-20"><span class="text-primary">8.62k</span> Subscribers</h4>
                                <p class="m-b-20">Your main list is growing</p>
                                <button class="btn btn-primary btn-sm btn-round">Manage List</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="material-icons-two-tone text-success d-block f-46">child_care</i>
                                <h4 class="m-t-20"><span class="text-success">+40</span> Followers</h4>
                                <p class="m-b-20">Your main list is growing</p>
                                <button class="btn btn-success btn-sm btn-round">Check them out</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12">
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
                    <!-- visitors  start -->
                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-danger text-white widget-visitor-card">
                            <div class="card-body text-center">
                                <h2 class="text-white">1,658</h2>
                                <h6 class="text-white">Daily user</h6>
                                <i class="material-icons-two-tone d-block f-46 text-white">account_circle</i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-primary text-white widget-visitor-card">
                            <div class="card-body text-center">
                                <h2 class="text-white">5,678</h2>
                                <h6 class="text-white">Daily visitor</h6>
                                <i class="material-icons-two-tone d-block f-46 text-white">description</i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="card bg-warning text-white widget-visitor-card">
                            <div class="card-body text-center">
                                <h2 class="text-white">5,678</h2>
                                <h6 class="text-white">Last month visitor</h6>
                                <i class="material-icons-two-tone d-block f-46 text-white">emoji_events</i>
                            </div>
                        </div>
                    </div>
                    <!-- visitors  end -->
                    <div class="col-xl-4 col-md-6">
                        <div class="card feed-card">
                            <div class="card-body p-t-0 p-b-0">
                                <div class="row">
                                    <div class="col-4 bg-primary border-feed">
                                        <i class="material-icons-two-tone d-block f-46">account_circle</i>
                                    </div>
                                    <div class="col-8">
                                        <div class="p-t-25 p-b-25">
                                            <h2 class="f-w-400 m-b-10">2,672</h2>
                                            <p class="text-muted m-0">New <span class="text-primary f-w-400">user</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
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
                    <div class="col-xl-4 col-md-12">
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
                </div>
            </div>
            <div class="pc-sideoverlay"></div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
@include('html.layouts.footer-bottom-link')
</body>

</html>
