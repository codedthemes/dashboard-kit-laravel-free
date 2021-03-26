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
                            <h5 class="m-b-10">Product</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">E-Commerce</a></li>
                            <li class="breadcrumb-item">Product</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ task-board-left ] start -->
            <div class="col-xl-3 col-lg-4">
                <div class="card e-comm-filter">
                    <div class="card-header">
                        <h5><i class="material-icons-two-tone f-18 text-primary">filter_alt</i> Filter</h5>
                    </div>
                    <div class="card-body py-3 border-bottom">
                        <a data-bs-toggle="collapse" href="#" data-bs-target="#ecommprice" class="link-dark" aria-expanded="false" aria-controls="ecommprice">
                            <div class="h6 mb-0">Price <i data-feather="chevron-down" class="float-end me-1 wid-15 hei-15"></i></div>
                        </a>
                        <div class="collapse border-top show pt-3 mt-3" id="ecommprice">
                            <div class="input-group input-group-sm">
                                <select class="form-select">
                                    <option selected>Min</option>
                                    <option value="1">$500</option>
                                    <option value="2">$1000</option>
                                    <option value="3">$2000</option>
                                    <option value="4">$3000</option>
                                </select>
                                <label class="input-group-text">To</label>
                                <select class="form-select">
                                    <option selected>Max</option>
                                    <option value="1">$10000</option>
                                    <option value="2">$20000</option>
                                    <option value="3">$30000</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-3 border-bottom">
                        <a data-bs-toggle="collapse" href="#" data-bs-target="#ecommfilstatus" class="link-dark" aria-expanded="false" aria-controls="ecommfilstatus">
                            <div class="h6 mb-0">Size - UK/India <i data-feather="chevron-down" class="float-end me-1 wid-15 hei-15"></i></div>
                        </a>
                        <div class="collapse border-top show pt-3 mt-3" id="ecommfilstatus">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chksize1">
                                <label class="form-check-label" for="chksize1">4</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chksize2">
                                <label class="form-check-label" for="chksize2">5</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chksize3">
                                <label class="form-check-label" for="chksize3">6</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chksize4">
                                <label class="form-check-label" for="chksize4">6.5</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chksize5">
                                <label class="form-check-label" for="chksize5">7</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="chksize6">
                                <label class="form-check-label" for="chksize6">8</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-3 border-bottom">
                        <a data-bs-toggle="collapse" href="#" data-bs-target="#ecommfilassign" class="link-dark" aria-expanded="false" aria-controls="ecommfilassign">
                            <div class="h6 mb-0">Customer Ratings <i data-feather="chevron-down" class="float-end me-1 wid-15 hei-15"></i></div>
                        </a>
                        <div class="collapse border-top show pt-3 mt-3" id="ecommfilassign">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chkratt1">
                                <label class="form-check-label" for="chkratt1">4★ &amp; above</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chkratt2">
                                <label class="form-check-label" for="chkratt2">3★ &amp; above</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chkratt3">
                                <label class="form-check-label" for="chkratt3">2★ &amp; above</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chkratt4">
                                <label class="form-check-label" for="chkratt4">1★ &amp; above</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-3 border-bottom">
                        <a data-bs-toggle="collapse" href="#" data-bs-target="#ecommfilldicount" class="link-dark" aria-expanded="false" aria-controls="ecommfilldicount">
                            <div class="h6 mb-0">Discount <i data-feather="chevron-down" class="float-end me-1 wid-15 hei-15"></i></div>
                        </a>
                        <div class="collapse border-top pt-3 mt-3" id="ecommfilldicount">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chkdisc1">
                                <label class="form-check-label" for="chkdisc1">10% or more</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chkdisc2">
                                <label class="form-check-label" for="chkdisc2">20% or more</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chkdisc3">
                                <label class="form-check-label" for="chkdisc3">30% or more</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chkdisc4">
                                <label class="form-check-label" for="chkdisc4">40% or more</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chkdisc5">
                                <label class="form-check-label" for="chkdisc5">50% or more</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chkdisc6">
                                <label class="form-check-label" for="chkdisc6">60% or more</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chkdisc7">
                                <label class="form-check-label" for="chkdisc7">70% or more</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chkdisc8">
                                <label class="form-check-label" for="chkdisc8">80% or more</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chkdisc9">
                                <label class="form-check-label" for="chkdisc9">10% and below</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-3 border-bottom">
                        <a data-bs-toggle="collapse" href="#" data-bs-target="#ecommfilltypeshoes" class="link-dark" aria-expanded="false" aria-controls="ecommfilltypeshoes">
                            <div class="h6 mb-0">Type of Shoes <i data-feather="chevron-down" class="float-end me-1 wid-15 hei-15"></i></div>
                        </a>
                        <div class="collapse border-top pt-3 mt-3" id="ecommfilltypeshoes">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chktypeshoes1">
                                <label class="form-check-label" for="chktypeshoes1">Running Shoes</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chktypeshoes2">
                                <label class="form-check-label" for="chktypeshoes2">Training & Gym Shoes</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chktypeshoes3">
                                <label class="form-check-label" for="chktypeshoes3">Hiking & Trekking Shoes</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chktypeshoes4">
                                <label class="form-check-label" for="chktypeshoes4">Motorsport Shoes</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chktypeshoes5">
                                <label class="form-check-label" for="chktypeshoes5">Wrestling Shoes</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chktypeshoes6">
                                <label class="form-check-label" for="chktypeshoes6">Squash Shoes</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chktypeshoes7">
                                <label class="form-check-label" for="chktypeshoes7">Riding Shoes</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-3 border-bottom">
                        <a data-bs-toggle="collapse" href="#" data-bs-target="#ecommfillcolor" class="link-dark" aria-expanded="false" aria-controls="ecommfillcolor">
                            <div class="h6 mb-0">Color <i data-feather="chevron-down" class="float-end me-1 wid-15 hei-15"></i></div>
                        </a>
                        <div class="collapse border-top pt-3 mt-3" id="ecommfillcolor">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chkcolor1">
                                <label class="form-check-label" for="chkcolor1">Beige</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chkcolor2">
                                <label class="form-check-label" for="chkcolor2">Black</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chkcolor3">
                                <label class="form-check-label" for="chkcolor3">Blue</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chkcolor4">
                                <label class="form-check-label" for="chkcolor4">Brown</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chkcolor5">
                                <label class="form-check-label" for="chkcolor5">Burgundy</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chkcolor6">
                                <label class="form-check-label" for="chkcolor6">Gold</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="chkcolor7">
                                <label class="form-check-label" for="chkcolor7">Green</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ task-board-left ] end -->
            <!-- [ task-board-right ] start -->
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
                                            <i class="material-icons-two-tone f-20 text-primary">list_alt</i> By Price
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#!">Low to High</a>
                                            <a class="dropdown-item" href="#!">High to Low</a>
                                            <a class="dropdown-item" href="#!">Newest First</a>
                                            <a class="dropdown-item" href="#!">Popularity</a>
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
                <div class="tab-content filter-data" id="myTabContent">
                    <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                        <div class="row row-cols-lg-3 row-cols-sm-6">
                            <div class="col">
                                <div class="card e-comm-card">
                                    <div class="card-body position-absolute end-0 top-0">
                                        <div class="form-check prod-likes">
                                            <input type="checkbox" class="form-check-input">
                                            <i data-feather="heart" class="prod-likes-icon"></i>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0">
                                        <img src="assets/images/product/e-comm-1.jpg" alt="prod img" class="img-fluid">
                                    </div>
                                    <div class="card-body prod-content">
                                        <small class="text-uppercase font-weight-bold text-muted">adidas</small>
                                        <a href="#">
                                            <div class="text-truncate w-100 h5">Puaro Ms Running Shoes For Men</div>
                                        </a>
                                        <div>
                                            <p class="d-inline-block mb-0 h4"><span class="text-primary">₹</span>1,499</p><small class="text-danger ms-2"><s>₹4,999</s></small> <span class="text-success f-w-500">70% off</span>
                                        </div>
                                        <div class="h-data">
                                            <table class="table table-xs w-auto table-borderless m-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="pl-0 f-w-500 pb-0"><i class="material-icons-two-tone text-primary f-16">color_lens</i> Color:</td>
                                                        <td class="pb-0">
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-danger"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-primary"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-success"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0 f-w-500 pb-0"><i class="material-icons-two-tone text-primary f-16">games</i> Size:</td>
                                                        <td class="pb-0">6, 7, 8, 9, 10, 11</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card e-comm-card">
                                    <div class="card-body position-absolute end-0 top-0">
                                        <div class="form-check prod-likes">
                                            <input type="checkbox" class="form-check-input">
                                            <i data-feather="heart" class="prod-likes-icon"></i>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0">
                                        <img src="assets/images/product/e-comm-2.jpg" alt="prod img" class="img-fluid">
                                    </div>
                                    <div class="card-body prod-content">
                                        <small class="text-uppercase font-weight-bold text-muted">adidas</small>
                                        <a href="#">
                                            <div class="text-truncate w-100 h5">Puaro Ms Running Shoes For Men</div>
                                        </a>
                                        <div>
                                            <p class="d-inline-block mb-0 h4"><span class="text-primary">₹</span>1,499</p><small class="text-danger ms-2"><s>₹4,999</s></small> <span class="text-success f-w-500">70% off</span>
                                        </div>
                                        <div class="h-data">
                                            <table class="table table-xs w-auto table-borderless m-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="pl-0 f-w-500 pb-0"><i class="material-icons-two-tone text-primary f-16">color_lens</i> Color:</td>
                                                        <td class="pb-0">
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-danger"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-primary"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-success"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0 f-w-500 pb-0"><i class="material-icons-two-tone text-primary f-16">games</i> Size:</td>
                                                        <td class="pb-0">6, 7, 8, 9, 10, 11</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card e-comm-card">
                                    <div class="card-body position-absolute end-0 top-0">
                                        <div class="form-check prod-likes">
                                            <input type="checkbox" class="form-check-input">
                                            <i data-feather="heart" class="prod-likes-icon"></i>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0">
                                        <img src="assets/images/product/e-comm-3.jpg" alt="prod img" class="img-fluid">
                                    </div>
                                    <div class="card-body prod-content">
                                        <small class="text-uppercase font-weight-bold text-muted">adidas</small>
                                        <a href="#">
                                            <div class="text-truncate w-100 h5">Puaro Ms Running Shoes For Men</div>
                                        </a>
                                        <div>
                                            <p class="d-inline-block mb-0 h4"><span class="text-primary">₹</span>1,499</p><small class="text-danger ms-2"><s>₹4,999</s></small> <span class="text-success f-w-500">70% off</span>
                                        </div>
                                        <div class="h-data">
                                            <table class="table table-xs w-auto table-borderless m-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="pl-0 f-w-500 pb-0"><i class="material-icons-two-tone text-primary f-16">color_lens</i> Color:</td>
                                                        <td class="pb-0">
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-danger"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-primary"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-success"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0 f-w-500 pb-0"><i class="material-icons-two-tone text-primary f-16">games</i> Size:</td>
                                                        <td class="pb-0">6, 7, 8, 9, 10, 11</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card e-comm-card">
                                    <div class="card-body position-absolute end-0 top-0">
                                        <div class="form-check prod-likes">
                                            <input type="checkbox" class="form-check-input">
                                            <i data-feather="heart" class="prod-likes-icon"></i>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0">
                                        <img src="assets/images/product/e-comm-4.jpg" alt="prod img" class="img-fluid">
                                    </div>
                                    <div class="card-body prod-content">
                                        <small class="text-uppercase font-weight-bold text-muted">adidas</small>
                                        <a href="#">
                                            <div class="text-truncate w-100 h5">Puaro Ms Running Shoes For Men</div>
                                        </a>
                                        <div>
                                            <p class="d-inline-block mb-0 h4"><span class="text-primary">₹</span>1,499</p><small class="text-danger ms-2"><s>₹4,999</s></small> <span class="text-success f-w-500">70% off</span>
                                        </div>
                                        <div class="h-data">
                                            <table class="table table-xs w-auto table-borderless m-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="pl-0 f-w-500 pb-0"><i class="material-icons-two-tone text-primary f-16">color_lens</i> Color:</td>
                                                        <td class="pb-0">
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-danger"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-primary"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-success"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0 f-w-500 pb-0"><i class="material-icons-two-tone text-primary f-16">games</i> Size:</td>
                                                        <td class="pb-0">6, 7, 8, 9, 10, 11</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card e-comm-card">
                                    <div class="card-body position-absolute end-0 top-0">
                                        <div class="form-check prod-likes">
                                            <input type="checkbox" class="form-check-input">
                                            <i data-feather="heart" class="prod-likes-icon"></i>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0">
                                        <img src="assets/images/product/e-comm-5.jpg" alt="prod img" class="img-fluid">
                                    </div>
                                    <div class="card-body prod-content">
                                        <small class="text-uppercase font-weight-bold text-muted">adidas</small>
                                        <a href="#">
                                            <div class="text-truncate w-100 h5">Puaro Ms Running Shoes For Men</div>
                                        </a>
                                        <div>
                                            <p class="d-inline-block mb-0 h4"><span class="text-primary">₹</span>1,499</p><small class="text-danger ms-2"><s>₹4,999</s></small> <span class="text-success f-w-500">70% off</span>
                                        </div>
                                        <div class="h-data">
                                            <table class="table table-xs w-auto table-borderless m-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="pl-0 f-w-500 pb-0"><i class="material-icons-two-tone text-primary f-16">color_lens</i> Color:</td>
                                                        <td class="pb-0">
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-danger"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-primary"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-success"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0 f-w-500 pb-0"><i class="material-icons-two-tone text-primary f-16">games</i> Size:</td>
                                                        <td class="pb-0">6, 7, 8, 9, 10, 11</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card e-comm-card">
                                    <div class="card-body position-absolute end-0 top-0">
                                        <div class="form-check prod-likes">
                                            <input type="checkbox" class="form-check-input">
                                            <i data-feather="heart" class="prod-likes-icon"></i>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0">
                                        <img src="assets/images/product/e-comm-6.jpg" alt="prod img" class="img-fluid">
                                    </div>
                                    <div class="card-body prod-content">
                                        <small class="text-uppercase font-weight-bold text-muted">adidas</small>
                                        <a href="#">
                                            <div class="text-truncate w-100 h5">Puaro Ms Running Shoes For Men</div>
                                        </a>
                                        <div>
                                            <p class="d-inline-block mb-0 h4"><span class="text-primary">₹</span>1,499</p><small class="text-danger ms-2"><s>₹4,999</s></small> <span class="text-success f-w-500">70% off</span>
                                        </div>
                                        <div class="h-data">
                                            <table class="table table-xs w-auto table-borderless m-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="pl-0 f-w-500 pb-0"><i class="material-icons-two-tone text-primary f-16">color_lens</i> Color:</td>
                                                        <td class="pb-0">
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-danger"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-primary"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-success"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0 f-w-500 pb-0"><i class="material-icons-two-tone text-primary f-16">games</i> Size:</td>
                                                        <td class="pb-0">6, 7, 8, 9, 10, 11</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card e-comm-card">
                                    <div class="card-body position-absolute end-0 top-0">
                                        <div class="form-check prod-likes">
                                            <input type="checkbox" class="form-check-input">
                                            <i data-feather="heart" class="prod-likes-icon"></i>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0">
                                        <img src="assets/images/product/e-comm-7.jpg" alt="prod img" class="img-fluid">
                                    </div>
                                    <div class="card-body prod-content">
                                        <small class="text-uppercase font-weight-bold text-muted">adidas</small>
                                        <a href="#">
                                            <div class="text-truncate w-100 h5">Puaro Ms Running Shoes For Men</div>
                                        </a>
                                        <div>
                                            <p class="d-inline-block mb-0 h4"><span class="text-primary">₹</span>1,499</p><small class="text-danger ms-2"><s>₹4,999</s></small> <span class="text-success f-w-500">70% off</span>
                                        </div>
                                        <div class="h-data">
                                            <table class="table table-xs w-auto table-borderless m-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="pl-0 f-w-500 pb-0"><i class="material-icons-two-tone text-primary f-16">color_lens</i> Color:</td>
                                                        <td class="pb-0">
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-danger"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-primary"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-success"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0 f-w-500 pb-0"><i class="material-icons-two-tone text-primary f-16">games</i> Size:</td>
                                                        <td class="pb-0">6, 7, 8, 9, 10, 11</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card e-comm-card">
                                    <div class="card-body position-absolute end-0 top-0">
                                        <div class="form-check prod-likes">
                                            <input type="checkbox" class="form-check-input">
                                            <i data-feather="heart" class="prod-likes-icon"></i>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0">
                                        <img src="assets/images/product/e-comm-8.jpg" alt="prod img" class="img-fluid">
                                    </div>
                                    <div class="card-body prod-content">
                                        <small class="text-uppercase font-weight-bold text-muted">adidas</small>
                                        <a href="#">
                                            <div class="text-truncate w-100 h5">Puaro Ms Running Shoes For Men</div>
                                        </a>
                                        <div>
                                            <p class="d-inline-block mb-0 h4"><span class="text-primary">₹</span>1,499</p><small class="text-danger ms-2"><s>₹4,999</s></small> <span class="text-success f-w-500">70% off</span>
                                        </div>
                                        <div class="h-data">
                                            <table class="table table-xs w-auto table-borderless m-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="pl-0 f-w-500 pb-0"><i class="material-icons-two-tone text-primary f-16">color_lens</i> Color:</td>
                                                        <td class="pb-0">
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-danger"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-primary"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-success"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0 f-w-500 pb-0"><i class="material-icons-two-tone text-primary f-16">games</i> Size:</td>
                                                        <td class="pb-0">6, 7, 8, 9, 10, 11</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card e-comm-card">
                                    <div class="card-body position-absolute end-0 top-0">
                                        <div class="form-check prod-likes">
                                            <input type="checkbox" class="form-check-input">
                                            <i data-feather="heart" class="prod-likes-icon"></i>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0">
                                        <img src="assets/images/product/e-comm-9.jpg" alt="prod img" class="img-fluid">
                                    </div>
                                    <div class="card-body prod-content">
                                        <small class="text-uppercase font-weight-bold text-muted">adidas</small>
                                        <a href="#">
                                            <div class="text-truncate w-100 h5">Puaro Ms Running Shoes For Men</div>
                                        </a>
                                        <div>
                                            <p class="d-inline-block mb-0 h4"><span class="text-primary">₹</span>1,499</p><small class="text-danger ms-2"><s>₹4,999</s></small> <span class="text-success f-w-500">70% off</span>
                                        </div>
                                        <div class="h-data">
                                            <table class="table table-xs w-auto table-borderless m-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="pl-0 f-w-500 pb-0"><i class="material-icons-two-tone text-primary f-16">color_lens</i> Color:</td>
                                                        <td class="pb-0">
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-danger"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-primary"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-success"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0 f-w-500 pb-0"><i class="material-icons-two-tone text-primary f-16">games</i> Size:</td>
                                                        <td class="pb-0">6, 7, 8, 9, 10, 11</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                                    <div class="border-bottom">
                                        <div class="row align-items-stretch g-0">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center position-relative h-100">
                                                    <img src="assets/images/product/e-comm-1.jpg" alt="prod img" class="img-fluid">
                                                    <div class="card-body position-absolute end-0 top-0">
                                                        <div class="form-check prod-likes">
                                                            <input type="checkbox" class="form-check-input">
                                                            <i data-feather="heart" class="prod-likes-icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <small class="text-uppercase font-weight-bold text-muted">adidas</small>
                                                    <a href="#">
                                                        <div class="text-truncate w-100 h5">Puaro Ms Running Shoes For Men</div>
                                                    </a>
                                                    <div>
                                                        <p class="d-inline-block mb-0 h4"><span class="text-primary">₹</span>1,499</p><small class="text-danger ms-2"><s>₹4,999</s></small> <span class="text-success f-w-500">70% off</span>
                                                    </div>
                                                    <p class="text-truncate w-100 mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item d-inline-flex align-items-center">
                                                            <span class="f-w-500 me-2"><i class="material-icons-two-tone text-primary f-16">color_lens</i> Color:</span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-danger"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-primary"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-success"></span>
                                                        </li>
                                                        <li class="list-inline-item d-inline-flex align-items-center">
                                                            <span class="f-w-500 me-2"><i class="material-icons-two-tone text-primary f-16">games</i> Size:</span>
                                                            <span class="d-inline-block">6, 7, 8, 9, 10, 11</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-bottom">
                                        <div class="row align-items-stretch g-0">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center position-relative h-100">
                                                    <img src="assets/images/product/e-comm-2.jpg" alt="prod img" class="img-fluid">
                                                    <div class="card-body position-absolute end-0 top-0">
                                                        <div class="form-check prod-likes">
                                                            <input type="checkbox" class="form-check-input">
                                                            <i data-feather="heart" class="prod-likes-icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <small class="text-uppercase font-weight-bold text-muted">adidas</small>
                                                    <a href="#">
                                                        <div class="text-truncate w-100 h5">Puaro Ms Running Shoes For Men</div>
                                                    </a>
                                                    <div>
                                                        <p class="d-inline-block mb-0 h4"><span class="text-primary">₹</span>1,499</p><small class="text-danger ms-2"><s>₹4,999</s></small> <span class="text-success f-w-500">70% off</span>
                                                    </div>
                                                    <p class="text-truncate w-100 mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item d-inline-flex align-items-center">
                                                            <span class="f-w-500 me-2"><i class="material-icons-two-tone text-primary f-16">color_lens</i> Color:</span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-danger"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-primary"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-success"></span>
                                                        </li>
                                                        <li class="list-inline-item d-inline-flex align-items-center">
                                                            <span class="f-w-500 me-2"><i class="material-icons-two-tone text-primary f-16">games</i> Size:</span>
                                                            <span class="d-inline-block">6, 7, 8, 9, 10, 11</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-bottom">
                                        <div class="row align-items-stretch g-0">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center position-relative h-100">
                                                    <img src="assets/images/product/e-comm-3.jpg" alt="prod img" class="img-fluid">
                                                    <div class="card-body position-absolute end-0 top-0">
                                                        <div class="form-check prod-likes">
                                                            <input type="checkbox" class="form-check-input">
                                                            <i data-feather="heart" class="prod-likes-icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <small class="text-uppercase font-weight-bold text-muted">adidas</small>
                                                    <a href="#">
                                                        <div class="text-truncate w-100 h5">Puaro Ms Running Shoes For Men</div>
                                                    </a>
                                                    <div>
                                                        <p class="d-inline-block mb-0 h4"><span class="text-primary">₹</span>1,499</p><small class="text-danger ms-2"><s>₹4,999</s></small> <span class="text-success f-w-500">70% off</span>
                                                    </div>
                                                    <p class="text-truncate w-100 mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item d-inline-flex align-items-center">
                                                            <span class="f-w-500 me-2"><i class="material-icons-two-tone text-primary f-16">color_lens</i> Color:</span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-danger"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-primary"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-success"></span>
                                                        </li>
                                                        <li class="list-inline-item d-inline-flex align-items-center">
                                                            <span class="f-w-500 me-2"><i class="material-icons-two-tone text-primary f-16">games</i> Size:</span>
                                                            <span class="d-inline-block">6, 7, 8, 9, 10, 11</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-bottom">
                                        <div class="row align-items-stretch g-0">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center position-relative h-100">
                                                    <img src="assets/images/product/e-comm-4.jpg" alt="prod img" class="img-fluid">
                                                    <div class="card-body position-absolute end-0 top-0">
                                                        <div class="form-check prod-likes">
                                                            <input type="checkbox" class="form-check-input">
                                                            <i data-feather="heart" class="prod-likes-icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <small class="text-uppercase font-weight-bold text-muted">adidas</small>
                                                    <a href="#">
                                                        <div class="text-truncate w-100 h5">Puaro Ms Running Shoes For Men</div>
                                                    </a>
                                                    <div>
                                                        <p class="d-inline-block mb-0 h4"><span class="text-primary">₹</span>1,499</p><small class="text-danger ms-2"><s>₹4,999</s></small> <span class="text-success f-w-500">70% off</span>
                                                    </div>
                                                    <p class="text-truncate w-100 mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item d-inline-flex align-items-center">
                                                            <span class="f-w-500 me-2"><i class="material-icons-two-tone text-primary f-16">color_lens</i> Color:</span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-danger"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-primary"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-success"></span>
                                                        </li>
                                                        <li class="list-inline-item d-inline-flex align-items-center">
                                                            <span class="f-w-500 me-2"><i class="material-icons-two-tone text-primary f-16">games</i> Size:</span>
                                                            <span class="d-inline-block">6, 7, 8, 9, 10, 11</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-bottom">
                                        <div class="row align-items-stretch g-0">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center position-relative h-100">
                                                    <img src="assets/images/product/e-comm-5.jpg" alt="prod img" class="img-fluid">
                                                    <div class="card-body position-absolute end-0 top-0">
                                                        <div class="form-check prod-likes">
                                                            <input type="checkbox" class="form-check-input">
                                                            <i data-feather="heart" class="prod-likes-icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <small class="text-uppercase font-weight-bold text-muted">adidas</small>
                                                    <a href="#">
                                                        <div class="text-truncate w-100 h5">Puaro Ms Running Shoes For Men</div>
                                                    </a>
                                                    <div>
                                                        <p class="d-inline-block mb-0 h4"><span class="text-primary">₹</span>1,499</p><small class="text-danger ms-2"><s>₹4,999</s></small> <span class="text-success f-w-500">70% off</span>
                                                    </div>
                                                    <p class="text-truncate w-100 mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item d-inline-flex align-items-center">
                                                            <span class="f-w-500 me-2"><i class="material-icons-two-tone text-primary f-16">color_lens</i> Color:</span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-danger"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-primary"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-success"></span>
                                                        </li>
                                                        <li class="list-inline-item d-inline-flex align-items-center">
                                                            <span class="f-w-500 me-2"><i class="material-icons-two-tone text-primary f-16">games</i> Size:</span>
                                                            <span class="d-inline-block">6, 7, 8, 9, 10, 11</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-bottom">
                                        <div class="row align-items-stretch g-0">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center position-relative h-100">
                                                    <img src="assets/images/product/e-comm-6.jpg" alt="prod img" class="img-fluid">
                                                    <div class="card-body position-absolute end-0 top-0">
                                                        <div class="form-check prod-likes">
                                                            <input type="checkbox" class="form-check-input">
                                                            <i data-feather="heart" class="prod-likes-icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <small class="text-uppercase font-weight-bold text-muted">adidas</small>
                                                    <a href="#">
                                                        <div class="text-truncate w-100 h5">Puaro Ms Running Shoes For Men</div>
                                                    </a>
                                                    <div>
                                                        <p class="d-inline-block mb-0 h4"><span class="text-primary">₹</span>1,499</p><small class="text-danger ms-2"><s>₹4,999</s></small> <span class="text-success f-w-500">70% off</span>
                                                    </div>
                                                    <p class="text-truncate w-100 mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item d-inline-flex align-items-center">
                                                            <span class="f-w-500 me-2"><i class="material-icons-two-tone text-primary f-16">color_lens</i> Color:</span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-danger"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-primary"></span>
                                                            <span class="d-inline-block p-2 me-1 rounded-circle bg-success"></span>
                                                        </li>
                                                        <li class="list-inline-item d-inline-flex align-items-center">
                                                            <span class="f-w-500 me-2"><i class="material-icons-two-tone text-primary f-16">games</i> Size:</span>
                                                            <span class="d-inline-block">6, 7, 8, 9, 10, 11</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="pagination mb-4 justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2 <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </div>
            <!-- [ task-board-right ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<script>
    $('.e-comm-filter .form-check-input').change(function() {
        $('.filter-data').append('<div class="overlay-div"><div class="spinner-border text-primary" role="status"></div></div>');
        setTimeout(function() {
            $('.filter-data .overlay-div').fadeOut(300, function() {
                $(this).remove();
            });
        }, 3000);
    });
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
