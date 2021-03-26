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
                    <div class="col-md-6">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard Analytics</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item">Dashboard Analytics</li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-end">
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ daily sales section ] start -->
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4">Daily Sales</h6>
                        <div class="row d-flex align-items-center">
                            <div class="col-9">
                                <h3 class="f-w-300 d-flex align-items-center "><i class="feather icon-arrow-up text-success f-30 m-r-10"></i>$249.95</h3>
                            </div>
                            <div class="col-3 text-end">
                                <p class="">67%</p>
                            </div>
                        </div>
                        <div class="progress m-t-30" style="height: 7px;">
                            <div class="progress-bar bg-theme" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ daily sales section ] end -->
            <!-- [ Monthly  sales section ] start -->
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4">Monthly Sales</h6>

                        <div class="row d-flex align-items-center">
                            <div class="col-9">
                                <h3 class="f-w-300 d-flex align-items-center  "><i class="feather icon-arrow-down text-danger f-30 m-r-10"></i>$2.942.32</h3>
                            </div>
                            <div class="col-3 text-end">
                                <p class="">36%</p>
                            </div>
                        </div>
                        <div class="progress m-t-30" style="height: 7px;">
                            <div class="progress-bar bg-theme2" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Monthly  sales section ] end -->
            <!-- [ year  sales section ] start -->
            <div class="col-md-12 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4">Yearly Sales</h6>
                        <div class="row d-flex align-items-center">
                            <div class="col-9">
                                <h3 class="f-w-300 d-flex align-items-center  "><i class="feather icon-arrow-up text-success f-30 m-r-10"></i>$8.638.32</h3>
                            </div>
                            <div class="col-3 text-end">
                                <p class="">80%</p>
                            </div>
                        </div>
                        <div class="progress m-t-30" style="height: 7px;">
                            <div class="progress-bar bg-theme" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ year  sales section ] end -->
            <!-- total-revenue start -->
            <div class="col-xl-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Website Audience Metrics</h5>
                    </div>
                    <div class="card-body pl-0 pb-0">
                        <div class="row d-flex align-items-center text-center">
                            <div class="col">
                                <h6>$1258</h6>
                                <span>Target</span>
                            </div>
                            <div class="col">
                                <h6>$975</h6>
                                <span>Last week</span>
                            </div>
                            <div class="col">
                                <h6>$500</h6>
                                <span>Last Day</span>
                            </div>
                        </div>
                        <div id="revenue-chart"></div>
                    </div>
                </div>
            </div>
            <!-- total-revenue end -->
            <div class="col-xl-6 col-md-12">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card background-pattern">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <span>Visitor</span>
                                    </div>
                                    <div class="col text-end">
                                        <h2 class="mb-0">826</h2>
                                        <span class="text-success">8.2%<i class="feather icon-trending-up ms-1"></i></span>
                                    </div>
                                </div>
                                <div id="customer-chart"></div>
                                <div class="row mt-3 text-center">
                                    <div class="col">
                                        <h3 class="m-0"><i class="fas fa-circle f-10 m-r-5 text-primary"></i>674</h3>
                                        <span class="ms-3">New</span>
                                    </div>
                                    <div class="col">
                                        <h3 class="m-0"><i class="fas fa-circle text-primary f-10 m-r-5 text-success"></i>182</h3>
                                        <span class="ms-3">Return</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card bg-primary background-pattern-white text-white">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <span>Traffic Source</span>
                                    </div>
                                    <div class="col text-end">
                                        <h2 class="mb-0 text-white">672</h2>
                                        <span class="text-white">12.7%<i class="feather icon-trending-up ms-1"></i></span>
                                    </div>
                                </div>
                                <div id="customer-chart1"></div>
                                <div class="row mt-3 text-center">
                                    <div class="col">
                                        <h3 class="m-0 text-white"><i class="fas fa-circle f-10 m-r-5 text-white"></i>674</h3>
                                        <span class="ms-3">Desktop</span>
                                    </div>
                                    <div class="col">
                                        <h3 class="m-0 text-white"><i class="fas fa-circle text-primary f-10 m-r-5 text-white"></i>182</h3>
                                        <span class="ms-3">Mobile</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card flat-card">
                            <div class="row-table">
                                <div class="col-sm-3 card-body br">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <i class="material-icons-two-tone text-primary mb-1">visibility</i>
                                        </div>
                                        <div class="col-sm-8 text-md-center">
                                            <h5>10k</h5>
                                            <span>Visitors</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 card-body br">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <i class="material-icons-two-tone text-primary mb-1">cloud_download</i>
                                        </div>
                                        <div class="col-sm-8 text-md-center">
                                            <h5>52.5 k+</h5>
                                            <span>Downloads</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 d-none d-md-table-cell d-lg-table-cell d-xl-table-cell card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <i class="material-icons-two-tone text-primary mb-1">description</i>
                                        </div>
                                        <div class="col-sm-8 text-md-center">
                                            <h5>2000 +</h5>
                                            <span>Files</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Advertising campaign monitor</h5>
                    </div>
                    <div class="card-body px-0 py-0">
                        <div class="table-responsive">
                            <div class="product-scroll" style="height:295px;position:relative;">
                                <table class="table table-hover m-b-0">
                                    <thead>
                                        <tr>
                                            <th>CAMPAIGN DATE</th>
                                            <th>CLICK <a class="help" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-14"></i></a></th>
                                            <th>COST <a class="help" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-14"></i></a></th>
                                            <th>CTR <a class="help" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-14"></i></a></th>
                                            <th>ARPU <a class="help" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-14"></i></a></th>
                                            <th>ECPI <a class="help" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-14"></i></a></th>
                                            <th>ROI <a class="help" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-14"></i></a></th>
                                            <th>TREVENUE <a class="help" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-14"></i></a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>24-11-2016</td>
                                            <td>125
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>140
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>856
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>45,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>9,7%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7,25
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>5:26
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>28-10-2016</td>
                                            <td>352
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>150
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>769
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>35,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,7%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>3,57
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>3:30
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8-9-2017</td>
                                            <td>145
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>869
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>453
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>76,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,4%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7,56
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>1:30
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12-12-2017</td>
                                            <td>458
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>769
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>456
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>56,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>9,4%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7,32
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6:30
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8-12-2017</td>
                                            <td>789
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>756
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>432
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>39,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,7%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>3,79
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>4:30
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>28-10-2016</td>
                                            <td>352
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>150
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>769
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>35,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,7%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>3,57
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>3:30
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8-9-2017</td>
                                            <td>145
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>869
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>453
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>76,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,4%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7,56
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>1:30
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12-12-2017</td>
                                            <td>458
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>769
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>456
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>56,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>9,4%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7,32
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6:30
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8-12-2017</td>
                                            <td>789
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>756
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>432
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>39,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 68%;" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,7%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>3,79
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 42%;" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>4:30
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 38%;" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card table-card">
                    <div class="card-header borderless">
                        <h5>Browser States</h5>
                    </div>
                    <div class="card-body px-0 py-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <tbody>
                                    <tr>
                                        <td>Google Chrome</td>
                                        <td><span class="text-end d-block m-0"><span class="m-r-15">21%</span><span class="data-attributes" data-peity='{ "fill": ["#5052FC", "#eeeeee"],"innerRadius": 8, "radius": 13 }'>5/7</span></span></td>
                                    </tr>
                                    <tr>
                                        <td>Mozila Firefox</td>
                                        <td><span class="text-end d-block m-0"><span class="m-r-15">76%</span><span class="data-attributes" data-peity='{ "fill": ["#ED4C13", "#eeeeee"],"innerRadius": 8, "radius": 13 }'>3/8</span></span></td>
                                    </tr>
                                    <tr>
                                        <td>Apple Safari</td>
                                        <td><span class="text-end d-block m-0"><span class="m-r-15">20%</span><span class="data-attributes" data-peity='{ "fill": ["#06CA98", "#eeeeee"],"innerRadius": 8, "radius": 13 }'>5/6</span></span></td>
                                    </tr>
                                    <tr>
                                        <td>Internet Explorer</td>
                                        <td><span class="text-end d-block m-0"><span class="m-r-15">26%</span><span class="data-attributes" data-peity='{ "fill": ["#7759de", "#eeeeee"],"innerRadius": 8, "radius": 13 }'>2/6</span></span></td>
                                    </tr>
                                    <tr>
                                        <td>Opera mini</td>
                                        <td><span class="text-end d-block m-0"><span class="m-r-15">27%</span><span class="data-attributes" data-peity='{ "fill": ["#FF9800", "#eeeeee"],"innerRadius": 8, "radius": 13 }'>5/7</span></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>
<!-- peity chart js -->
<script src="assets/js/plugins/jquery.peity.min.js"></script>

@include('html.layouts.footer-bottom-link')
<!-- custom-chart js -->
<script src="assets/js/pages/dashboard-main.js"></script>
</body>

</html>
