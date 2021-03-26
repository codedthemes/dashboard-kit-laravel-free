<!DOCTYPE html>
<html lang="en">
<head>
    @include('html.layouts.head')
    @include('html.layouts.head-bottom-link')
</head>
@include('html.layouts.layout-vertical')
<!-- [ Main Content ] start -->
<section class="pc-container">
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
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Invoice-left ] start -->
            <div class="col-xl-3 col-lg-12">
                <div class="card task-board-left">
                    <div class="card-header">
                        <h5>Search Box</h5>
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control add_task_todo" placeholder="Search here..." required="">
                            <div class="input-group-append">
                                <button class="btn  btn-primary btn-icon btn-msg-send" type="button"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                        <div class="task-right">
                            <div class="task-right-header-status">
                                <span class="f-w-400" data-bs-toggle="collapse">Completed Status</span>
                                <i class="fas fa-caret-down float-end m-t-5"></i>
                            </div>
                            <div class="taskboard-right-progress">
                                <h6 class="m-t-10">Highest Priority</h6>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6 class="m-t-15">High priority</h6>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6 class="m-t-15">Normal priority</h6>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6 class="m-t-15">Low priority</h6>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="task-right-header-users">
                                <span class="f-w-400" data-bs-toggle="collapse">Assign Users</span>
                                <i class="fas fa-caret-down float-end m-t-5"></i>
                            </div>
                            <div class="user-box assign-user taskboard-right-users">
                                <div class="media mb-2">
                                    <div class="media-left media-middle me-3">
                                        <a href="#!">
                                            <img class="img-fluid media-object img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                            <div class="live-status bg-danger"></div>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h6>Josephin Doe</h6>
                                        <p>Santa Ana,CA</p>
                                    </div>
                                </div>
                                <div class="media mb-2">
                                    <div class="media-left media-middle me-3">
                                        <a href="#!">
                                            <img class="img-fluid media-object img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h6>Josephin Doe</h6>
                                        <p>Huntingston, NJ</p>
                                    </div>
                                </div>
                                <div class="media mb-2">
                                    <div class="media-left media-middle me-3">
                                        <a href="#!">
                                            <img class="img-fluid media-object img-radius" src="assets/images/user/avatar-3.jpg" alt="Generic placeholder image">
                                            <div class="live-status bg-danger"></div>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h6>Josephin Doe</h6>
                                        <p>Willingstion, WA</p>
                                    </div>
                                </div>
                                <div class="media mb-2">
                                    <div class="media-left media-middle me-3">
                                        <a href="#!">
                                            <img class="img-fluid media-object img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h6>Josephin Doe</h6>
                                        <p>Illions, IL</p>
                                    </div>
                                </div>
                            </div>
                            <div class="task-right-header-revision">
                                <span class="f-w-400" data-bs-toggle="collapse">Revision</span>
                                <i class="fas fa-caret-down float-end m-t-5"></i>
                            </div>
                            <div class="taskboard-right-revision user-box">
                                <div class="media">
                                    <div class="media-left me-3">
                                        <a class="btn  btn-outline-primary btn-icon" href="#!" role="button"><i class="fas fa-cogs"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="chat-header f-w-400 mb-1">Drop the IE specific hacks for temporal inputs</div>
                                        <p class="chat-header  text-muted">4 minutes ago</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left me-3">
                                        <a class="btn  btn-outline-danger btn-icon" href="#!" role="button"><i class="fas fa-share-alt"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="chat-header f-w-400 mb-1">Have Carousel ignore keyboard events</div>
                                        <p class="chat-header text-muted">12 Dec,2015</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left me-3">
                                        <a class="btn  btn-outline-warning btn-icon" href="#!" role="button"><i class="fas fa-font"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="chat-header f-w-400 mb-1">Add full font overrides for popovers and tooltips</div>
                                        <p class="chat-header text-muted">2 month ago</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left me-3">
                                        <a class="btn  btn-outline-success btn-icon" href="#!" role="button"><i class="fas fa-mobile-alt"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="chat-header">Responsive Asssignment</div>
                                        <p class="chat-header  text-muted">6 month ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Invoice-left ] end -->
            <!-- [ Invoice-right ] start -->
            <div class="col-xl-9 col-lg-12 filter-bar invoice-list">
                <nav class="navbar m-b-30 p-10">
                    <ul class="nav">
                        <li class="nav-item f-text active">
                            <a class="nav-link text-secondary" href="#!">Filter: <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-secondary" href="#" id="bydate" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-clock"></i> By Date</a>
                            <div class="dropdown-menu" aria-labelledby="bydate">
                                <a class="dropdown-item" href="#!">Show all</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#!">Today</a>
                                <a class="dropdown-item" href="#!">Yesterday</a>
                                <a class="dropdown-item" href="#!">This week</a>
                                <a class="dropdown-item" href="#!">This month</a>
                                <a class="dropdown-item" href="#!">This year</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-secondary" href="#" id="bystatus" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-chart-line"></i> By Status</a>
                            <div class="dropdown-menu" aria-labelledby="bystatus">
                                <a class="dropdown-item" href="#!">Show all</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#!">Open</a>
                                <a class="dropdown-item" href="#!">On hold</a>
                                <a class="dropdown-item" href="#!">Resolved</a>
                                <a class="dropdown-item" href="#!">Closed</a>
                                <a class="dropdown-item" href="#!">Dublicate</a>
                                <a class="dropdown-item" href="#!">Wontfix</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-secondary" href="#" id="bypriority" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-list-ol"></i> By Priority</a>
                            <div class="dropdown-menu" aria-labelledby="bypriority">
                                <a class="dropdown-item" href="#!">Show all</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#!">Highest</a>
                                <a class="dropdown-item" href="#!">High</a>
                                <a class="dropdown-item" href="#!">Normal</a>
                                <a class="dropdown-item" href="#!">Low</a>
                            </div>
                        </li>
                    </ul>
                    <div class="nav-item nav-grid f-view">
                        <span class="m-r-15">View Mode: </span>
                        <button type="button" class="btn  btn-primary btn-icon m-0" data-bs-toggle="tooltip" data-bs-placement="top" title="list view">
                            <i class="fas fa-list-ul"></i>
                        </button>
                        <button type="button" class="btn  btn-primary btn-icon m-0" data-bs-toggle="tooltip" data-bs-placement="top" title="grid view">
                            <i class="fas fa-th-large"></i>
                        </button>
                    </div>
                </nav>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="card card-border-c-blue">
                            <div class="card-body">
                                <div class="mb-3">
                                    <h5 class="d-inline-block m-b-10">John Doe</h5>
                                    <div class="dropdown-secondary dropdown float-end">
                                        <span>Status : </span>
                                        <button class="btn  btn-primary btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Overdue</button>
                                        <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                            <a class="dropdown-item" href="#!">Pending</a>
                                            <a class="dropdown-item" href="#!">Paid</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item active" href="#!">On Hold</a>
                                            <a class="dropdown-item" href="#!">Canceled</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0028</li>
                                            <li>Issued on: <span class="text-semibold">2015/01/25</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="list list-unstyled text-end">
                                            <li>$8,750</li>
                                            <li>Method: <span class="text-semibold">SWIFT</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-t-30">
                                    <div class="task-list-table">
                                        <p class="task-due"><strong> Due : </strong><strong class="label label-primary">23 hours</strong></p>
                                    </div>
                                    <div class="task-board m-0 float-end">
                                        <a href="invoice.html" class="btn  btn-primary"><i class="fas fa-eye m-0"></i></a>
                                        <div class="dropdown-secondary dropdown d-inline">
                                            <button class="btn  btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i></button>
                                            <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                <a class="dropdown-item" href="#!"><i class="fas fa-bell me-2"></i>Print Invoice</a>
                                                <a class="dropdown-item" href="#!"><i class="fas fa-download me-2"></i>Download invoice</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#!"><i class="fas fa-edit me-2"></i>Edit Invoice</a>
                                                <a class="dropdown-item" href="#!"><i class="fas fa-trash me-2"></i>Remove Invoice</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="card card-border-c-green">
                            <div class="card-body">
                                <div class="mb-3">
                                    <h5 class="d-inline-block m-b-10">John Doe</h5>
                                    <div class="dropdown-secondary dropdown float-end">
                                        <span>Status : </span>
                                        <button class="btn  btn-success btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Overdue</button>
                                        <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                            <a class="dropdown-item" href="#!">Pending</a>
                                            <a class="dropdown-item" href="#!">Paid</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item active" href="#!">On Hold</a>
                                            <a class="dropdown-item" href="#!">Canceled</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0028</li>
                                            <li>Issued on: <span class="text-semibold">2015/01/25</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="list list-unstyled text-end">
                                            <li>$8,750</li>
                                            <li>Method: <span class="text-semibold">Payoneer</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-t-30">
                                    <div class="task-list-table">
                                        <p class="task-due"><strong> Due : </strong><strong class="label label-success">23 hours</strong></p>
                                    </div>
                                    <div class="task-board m-0 float-end">
                                        <a href="invoice.html" class="btn  btn-success"><i class="fas fa-eye m-0"></i></a>
                                        <div class="dropdown-secondary dropdown d-inline">
                                            <button class="btn  btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i></button>
                                            <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                <a class="dropdown-item" href="#!"><i class="fas fa-bell me-2"></i>Print Invoice</a>
                                                <a class="dropdown-item" href="#!"><i class="fas fa-download me-2"></i>Download invoice</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#!"><i class="fas fa-edit me-2"></i>Edit Invoice</a>
                                                <a class="dropdown-item" href="#!"><i class="fas fa-trash me-2"></i>Remove Invoice</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="card card-border-c-red">
                            <div class="card-body">
                                <div class="mb-3">
                                    <h5 class="d-inline-block m-b-10">John Doe</h5>
                                    <div class="dropdown-secondary dropdown float-end">
                                        <span>Status : </span>
                                        <button class="btn  btn-danger btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Overdue</button>
                                        <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                            <a class="dropdown-item" href="#!">Pending</a>
                                            <a class="dropdown-item" href="#!">Paid</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item active" href="#!">On Hold</a>
                                            <a class="dropdown-item" href="#!">Canceled</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0028</li>
                                            <li>Issued on: <span class="text-semibold">2015/01/25</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="list list-unstyled text-end">
                                            <li>$8,750</li>
                                            <li>Method: <span class="text-semibold">Paypal</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-t-30">
                                    <div class="task-list-table">
                                        <p class="task-due"><strong> Due : </strong><strong class="label label-danger">23 hours</strong></p>
                                    </div>
                                    <div class="task-board m-0 float-end">
                                        <a href="invoice.html" class="btn  btn-danger"><i class="fas fa-eye m-0"></i></a>
                                        <div class="dropdown-secondary dropdown d-inline">
                                            <button class="btn  btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i></button>
                                            <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                <a class="dropdown-item" href="#!"><i class="fas fa-bell me-2"></i>Print Invoice</a>
                                                <a class="dropdown-item" href="#!"><i class="fas fa-download me-2"></i>Download invoice</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#!"><i class="fas fa-edit me-2"></i>Edit Invoice</a>
                                                <a class="dropdown-item" href="#!"><i class="fas fa-trash me-2"></i>Remove Invoice</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="card card-border-c-yellow">
                            <div class="card-body">
                                <div class="mb-3">
                                    <h5 class="d-inline-block m-b-10">John Doe</h5>
                                    <div class="dropdown-secondary dropdown float-end">
                                        <span>Status : </span>
                                        <button class="btn  btn-warning btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Overdue</button>
                                        <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                            <a class="dropdown-item" href="#!">Pending</a>
                                            <a class="dropdown-item" href="#!">Paid</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item active" href="#!">On Hold</a>
                                            <a class="dropdown-item" href="#!">Canceled</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0028</li>
                                            <li>Issued on: <span class="text-semibold">2015/01/25</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="list list-unstyled text-end">
                                            <li>$8,750</li>
                                            <li>Method: <span class="text-semibold">Paypal</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-t-30">
                                    <div class="task-list-table">
                                        <p class="task-due"><strong> Due : </strong><strong class="label label-warning">23 hours</strong></p>
                                    </div>
                                    <div class="task-board m-0 float-end">
                                        <a href="invoice.html" class="btn  btn-warning"><i class="fas fa-eye m-0"></i></a>
                                        <div class="dropdown-secondary dropdown d-inline">
                                            <button class="btn  btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i></button>
                                            <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                <a class="dropdown-item" href="#!"><i class="fas fa-bell me-2"></i>Print Invoice</a>
                                                <a class="dropdown-item" href="#!"><i class="fas fa-download me-2"></i>Download invoice</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#!"><i class="fas fa-edit me-2"></i>Edit Invoice</a>
                                                <a class="dropdown-item" href="#!"><i class="fas fa-trash me-2"></i>Remove Invoice</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="card card-border-c-green">
                            <div class="card-body">
                                <div class="mb-3">
                                    <h5 class="d-inline-block m-b-10">John Doe</h5>
                                    <div class="dropdown-secondary dropdown float-end">
                                        <span>Status : </span>
                                        <button class="btn  btn-success btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Overdue</button>
                                        <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                            <a class="dropdown-item" href="#!">Pending</a>
                                            <a class="dropdown-item" href="#!">Paid</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item active" href="#!">On Hold</a>
                                            <a class="dropdown-item" href="#!">Canceled</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0028</li>
                                            <li>Issued on: <span class="text-semibold">2015/01/25</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="list list-unstyled text-end">
                                            <li>$8,750</li>
                                            <li>Method: <span class="text-semibold">Payoneer</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-t-30">
                                    <div class="task-list-table">
                                        <p class="task-due"><strong> Due : </strong><strong class="label label-success">23 hours</strong></p>
                                    </div>
                                    <div class="task-board m-0 float-end">
                                        <a href="invoice.html" class="btn  btn-success"><i class="fas fa-eye m-0"></i></a>
                                        <div class="dropdown-secondary dropdown d-inline">
                                            <button class="btn  btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i></button>
                                            <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                <a class="dropdown-item" href="#!"><i class="fas fa-bell me-2"></i>Print Invoice</a>
                                                <a class="dropdown-item" href="#!"><i class="fas fa-download me-2"></i>Download invoice</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#!"><i class="fas fa-edit me-2"></i>Edit Invoice</a>
                                                <a class="dropdown-item" href="#!"><i class="fas fa-trash me-2"></i>Remove Invoice</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="card card-border-c-blue">
                            <div class="card-body">
                                <div class="mb-3">
                                    <h5 class="d-inline-block m-b-10">John Doe</h5>
                                    <div class="dropdown-secondary dropdown float-end">
                                        <span>Status : </span>
                                        <button class="btn  btn-primary btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Overdue</button>
                                        <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                            <a class="dropdown-item" href="#!">Pending</a>
                                            <a class="dropdown-item" href="#!">Paid</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item active" href="#!">On Hold</a>
                                            <a class="dropdown-item" href="#!">Canceled</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0028</li>
                                            <li>Issued on: <span class="text-semibold">2015/01/25</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="list list-unstyled text-end">
                                            <li>$8,750</li>
                                            <li>Method: <span class="text-semibold">SWIFT</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-t-30">
                                    <div class="task-list-table">
                                        <p class="task-due"><strong> Due : </strong><strong class="label label-primary">23 hours</strong></p>
                                    </div>
                                    <div class="task-board m-0 float-end">
                                        <a href="invoice.html" class="btn  btn-primary"><i class="fas fa-eye m-0"></i></a>
                                        <div class="dropdown-secondary dropdown d-inline">
                                            <button class="btn  btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i></button>
                                            <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                <a class="dropdown-item" href="#!"><i class="fas fa-bell me-2"></i>Print Invoice</a>
                                                <a class="dropdown-item" href="#!"><i class="fas fa-download me-2"></i>Download invoice</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#!"><i class="fas fa-edit me-2"></i>Edit Invoice</a>
                                                <a class="dropdown-item" href="#!"><i class="fas fa-trash me-2"></i>Remove Invoice</a>
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
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- invoice-list js -->
<script src="assets/js/pages/invoice-list.js"></script>
@include('html.layouts.footer-bottom-link')
</body>
</html>
