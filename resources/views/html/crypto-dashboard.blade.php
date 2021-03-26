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
                            <h5 class="m-b-10">Crypto Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Crypto</a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- liveline2-section start -->
            <div class="col-sm-12 stastic-slider-full-card">
                <div class="row g-0">
                    <div class="col-md-6 col-xl-3">
                        <div class="card rounded-0">
                            <div class="card-body ">
                                <div class="row justify-content-between align-items-center mb-3">
                                    <div class="col">
                                        <span class="d-flex justify-content-center align-items-center"><i class="fab fa-bitcoin text-warning f-22 m-r-5"></i>Bitcoin(BTC)</span>
                                    </div>
                                    <div class="col">
                                        <h6 class="badge bg-light-warning float-end d-inline-block m-0">-0.997896</h6>
                                    </div>
                                </div>
                                <div id="coin-chart1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center mb-3">
                                    <div class="col">
                                        <span class="d-flex justify-content-center align-items-center"><i class="fab fa-ethereum text-danger f-22 m-r-5"></i>Ethereum(ETH)</span>
                                    </div>
                                    <div class="col">
                                        <h6 class="badge bg-light-danger float-end d-inline-block m-0">+1.1456</h6>
                                    </div>
                                </div>
                                <div id="coin-chart2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center mb-3">
                                    <div class="col">
                                        <span class="d-flex justify-content-center align-items-center"><i class="fab fa-asymmetrik text-primary f-22 m-r-5"></i>Neo(NEO)</span>
                                    </div>
                                    <div class="col">
                                        <h6 class="badge bg-light-primary float-end d-inline-block m-0">+5.78787</h6>
                                    </div>
                                </div>
                                <div id="coin-chart3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center mb-3">
                                    <div class="col">
                                        <span class="d-flex justify-content-center align-items-center"><i class="fab fa-cloudsmith text-success f-22 m-r-5"></i>Ripple(RPL)</span>
                                    </div>
                                    <div class="col">
                                        <h6 class="badge bg-light-success float-endd-inline-block m-0">-7.99999</h6>
                                    </div>
                                </div>
                                <div id="coin-chart4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- liveline2-section end -->

            <!-- candlestick chart start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Bitcoin (USD) Price</h5>
                    </div>
                    <div class="card-body">
                        <div id="candlestick-chart-1"></div>
                    </div>
                </div>
            </div>
            <!-- candlestick chart end -->

            <!-- Form widget start -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Transfer Coins</h5>
                    </div>
                    <div class="card-body">
                        <h5 class="text-primary">Payment* <small class="text-muted ms-5">0.00001BTC</small></h5>
                        <div class="input-group mb-5">
                            <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Enter your payment">
                            <select class="form-control">
                                <option value="">BTC</option>
                                <option value="">ETH</option>
                                <option value="">BTC</option>
                                <option value="">BTC</option>
                            </select>
                        </div>
                        <h5 class="text-primary">Wallet Address</h5>
                        <div class="input-group mb-5">
                            <div class="input-group-prepend">
                                <div class="input-group-text flex-column justify-content-center">
                                    <span><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="2xsD12F42xvR2deD4..." readonly="readonly">
                        </div>
                        <div class="row align-items-end">
                            <div class="col">
                                <table class="table table-borderless m-b-0">
                                    <tbody>
                                        <tr>
                                            <td class="p-0">
                                                <p class="m-b-10">Sub total</p>
                                                <p class="m-b-10">Coin fee</p>
                                                <h6 class="m-b-0">Total</h6>
                                            </td>
                                            <td class="p-0">
                                                <p class="m-b-10">BTC 143266</p>
                                                <p class="m-b-10">BTC 1320</p>
                                                <h6 class="m-b-0">BTC 12,342</h6>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary btn-sm">Transfer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Wallet Address</h5>
                    </div>
                    <div class="card-body">
                        <h5 class="text-success mt-2">Bitcoin Wallet Address*</h5>
                        <div class="form-group fill mb-5">
                            <label class="form-label" for="text1">Key</label>
                            <input type="text" class="form-control" id="text1" aria-describedby="emailHelp" value="2xsD12F42xvR2deD42xsD12F">
                        </div>
                        <h5 class="text-success">Ethereum Wallet Address*</h5>
                        <div class="form-group fill mb-5">
                            <label class="form-label" for="text2">Key</label>
                            <input type="text" class="form-control" id="text2" aria-describedby="emailHelp" value="sD12F42xvR2de2xsD12F42xv">
                        </div>
                        <a href="javascript:void()" class="btn btn-success btn-sl-sm">Settings</a>
                        <a href="javascript:void()" class="btn btn-outline-success btn-sl-sm">View All</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Choose asset to trade</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="input-group input-group-prepend-big mb-4">
                                <div class="input-group-text flex-column justify-content-center px-5 border-0 border-bottom">
                                    <p class="m-0 ">BTC</p>
                                    <span>945.34 <span><i class="fas fa-level-down-alt"></i></span></span>
                                </div>
                                <input type="text" class="form-control h-auto pl-5" aria-label="Text input with dropdown button" placeholder="0.25">
                            </div>
                            <div class="text-center">
                                <i class="fas fa-exchange-alt f-20"></i>
                            </div>
                            <div class="input-group input-group-prepend-big mt-4 mb-0">
                                <div class="input-group-text flex-column justify-content-center px-5 border-0 border-bottom">
                                    <p class="m-0 ">ETH</p>
                                    <span>945.34 <span><i class="fas fa-level-down-alt"></i></span></span>
                                </div>
                                <input type="text" class="form-control h-auto pl-5" aria-label="Text input with dropdown button" placeholder="0.25">
                            </div>
                            <div class="text-center">
                                <p class="muted-text my-3 ">You could save up to $45,42</p>
                                <button type="submit" class="btn btn-primary mt-3">Exchange</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- coin buy and sale card start -->
            <div class="col-lg-4 col-md-6">
                <div class="card recent-operations-card">
                    <div class="card-header">
                        <h5>Buy Bitcoin</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="m-b-25 text-primary">Amount</h6>
                        <div class="input-group mb-3">
                            <label class="input-group-text"><i class="fab fa-bitcoin"></i></label>
                            <input type="text" class="form-control" placeholder="Value" value="2">
                        </div>
                        <h6 class="m-b-25 text-primary">Ask Price</h6>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Value" value="at 721.3478  BTC each" disabled>
                        </div>
                        <div class="row align-items-end">
                            <div class="col">
                                <table class="table table-borderless m-b-0">
                                    <tr>
                                        <td class="p-0">
                                            <p class="m-b-10">Sub total</p>
                                            <p class="m-b-10">Coin fee</p>
                                            <h6 class="m-b-0">Total</h6>
                                        </td>
                                        <td class="p-0">
                                            <p class="m-b-10">BTC 143266</p>
                                            <p class="m-b-10">BTC 1320</p>
                                            <h6 class="m-b-0">BTC 12,342.098</h6>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary">Buy</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Sell Bitcoin</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="m-b-25 text-warning">Amount</h6>
                        <div class="input-group mb-3">
                            <label class="input-group-text"><i class="fab fa-bitcoin"></i></label>
                            <input type="text" class="form-control" placeholder="Value" value="2">
                        </div>
                        <h6 class="m-b-25 text-warning">Ask Price</h6>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Value" value="at 721.3478  BTC each" disabled>
                        </div>
                        <div class="row align-items-end">
                            <div class="col">
                                <table class="table table-borderless m-b-0">
                                    <tr>
                                        <td class="p-0">
                                            <p class="m-b-10">Sub total</p>
                                            <p class="m-b-10">Coin fee</p>
                                            <h6 class="m-b-0">Total</h6>
                                        </td>
                                        <td class="p-0">
                                            <p class="m-b-10">BTC 143266</p>
                                            <p class="m-b-10">BTC 1320</p>
                                            <h6 class="m-b-0">BTC 12,342.098</h6>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-warning">SELL</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form widget end -->
        </div>

    </div>
    <!-- [ Main Content ] end -->
</div>
</div>

<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<script src="assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>
<script src="assets/js/pages/todo.js"></script>

<script>
    // [ seo-anlytics1 ] start
    $(function() {
        var options1 = {
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true
                }
            },
            dataLabels: {
                enabled: false
            },
            colors: ["#ffba57"],
            fill: {
                type: 'solid',
                opacity: 0,
            },
            grid: {
                padding: {
                    left: 5,
                    right: 5
                }
            },
            markers: {
                size: 3,
                opacity: 0.9,
                colors: "#ffba57",
                strokeColor: "#ffba57",
                strokeWidth: 1,
                hover: {
                    size: 4,
                }
            },
            stroke: {
                curve: 'straight',
                width: 2,
            },
            series: [{
                name: 'series1',
                data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54, 25, 66, 41, 89]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return 'Bitcoin(BTC) :'
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#coin-chart1"), options1).render();
        var options2 = {
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true
                }
            },
            dataLabels: {
                enabled: false
            },
            colors: ["#ED4C13"],
            fill: {
                type: 'solid',
                opacity: 0,
            },
            grid: {
                padding: {
                    left: 5,
                    right: 5
                }
            },
            markers: {
                size: 3,
                opacity: 0.9,
                colors: "#ED4C13",
                strokeColor: "#ED4C13",
                strokeWidth: 1,
                hover: {
                    size: 4,
                }
            },
            stroke: {
                curve: 'straight',
                width: 2,
            },
            series: [{
                name: 'series1',
                data: [36, 9, 54, 25, 66, 41, 89, 25, 66, 41, 89, 63, 25, 44, 12]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return 'Ethereum(ETH) :'
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#coin-chart2"), options2).render();
        var options3 = {
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true
                }
            },
            dataLabels: {
                enabled: false
            },
            colors: ["#5052FC"],
            fill: {
                type: 'solid',
                opacity: 0,
            },
            grid: {
                padding: {
                    left: 5,
                    right: 5
                }
            },
            markers: {
                size: 3,
                opacity: 0.9,
                colors: "#5052FC",
                strokeColor: "#5052FC",
                strokeWidth: 1,
                hover: {
                    size: 4,
                }
            },
            stroke: {
                curve: 'straight',
                width: 2,
            },
            series: [{
                name: 'series1',
                data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54, 25, 66, 41, 89]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return 'Neo(NEO) :'
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#coin-chart3"), options3).render();
        var options4 = {
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true
                }
            },
            dataLabels: {
                enabled: false
            },
            colors: ["#06CA98"],
            fill: {
                type: 'solid',
                opacity: 0,
            },
            grid: {
                padding: {
                    left: 5,
                    right: 5
                }
            },
            markers: {
                size: 3,
                opacity: 0.9,
                colors: "#06CA98",
                strokeColor: "#06CA98",
                strokeWidth: 1,
                hover: {
                    size: 4,
                }
            },
            stroke: {
                curve: 'straight',
                width: 2,
            },
            series: [{
                name: 'series1',
                data: [36, 9, 54, 25, 66, 41, 89, 25, 66, 41, 89, 63, 25, 44, 12]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return 'Ripple(RPL) :'
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#coin-chart4"), options4).render();
    });
    // [ seo-anlytics1 ] end
    // [ candlestick-chart ] start
    $(function() {
        var options = {
            chart: {
                height: 350,
                type: 'candlestick',
            },
            series: [{
                data: [{
                        x: new Date(1538778600000),
                        y: [6629.81, 6650.5, 6623.04, 6633.33]
                    },
                    {
                        x: new Date(1538780400000),
                        y: [6632.01, 6643.59, 6620, 6630.11]
                    },
                    {
                        x: new Date(1538782200000),
                        y: [6630.71, 6648.95, 6623.34, 6635.65]
                    },
                    {
                        x: new Date(1538784000000),
                        y: [6635.65, 6651, 6629.67, 6638.24]
                    },
                    {
                        x: new Date(1538785800000),
                        y: [6638.24, 6640, 6620, 6624.47]
                    },
                    {
                        x: new Date(1538787600000),
                        y: [6624.53, 6636.03, 6621.68, 6624.31]
                    },
                    {
                        x: new Date(1538789400000),
                        y: [6624.61, 6632.2, 6617, 6626.02]
                    },
                    {
                        x: new Date(1538791200000),
                        y: [6627, 6627.62, 6584.22, 6603.02]
                    },
                    {
                        x: new Date(1538793000000),
                        y: [6605, 6608.03, 6598.95, 6604.01]
                    },
                    {
                        x: new Date(1538794800000),
                        y: [6604.5, 6614.4, 6602.26, 6608.02]
                    },
                    {
                        x: new Date(1538796600000),
                        y: [6608.02, 6610.68, 6601.99, 6608.91]
                    },
                    {
                        x: new Date(1538798400000),
                        y: [6608.91, 6618.99, 6608.01, 6612]
                    },
                    {
                        x: new Date(1538800200000),
                        y: [6612, 6615.13, 6605.09, 6612]
                    },
                    {
                        x: new Date(1538802000000),
                        y: [6612, 6624.12, 6608.43, 6622.95]
                    },
                    {
                        x: new Date(1538803800000),
                        y: [6623.91, 6623.91, 6615, 6615.67]
                    },
                    {
                        x: new Date(1538805600000),
                        y: [6618.69, 6618.74, 6610, 6610.4]
                    },
                    {
                        x: new Date(1538807400000),
                        y: [6611, 6622.78, 6610.4, 6614.9]
                    },
                    {
                        x: new Date(1538809200000),
                        y: [6614.9, 6626.2, 6613.33, 6623.45]
                    },
                    {
                        x: new Date(1538811000000),
                        y: [6623.48, 6627, 6618.38, 6620.35]
                    },
                    {
                        x: new Date(1538812800000),
                        y: [6619.43, 6620.35, 6610.05, 6615.53]
                    },
                    {
                        x: new Date(1538814600000),
                        y: [6615.53, 6617.93, 6610, 6615.19]
                    },
                    {
                        x: new Date(1538816400000),
                        y: [6615.19, 6621.6, 6608.2, 6620]
                    },
                    {
                        x: new Date(1538818200000),
                        y: [6619.54, 6625.17, 6614.15, 6620]
                    },
                    {
                        x: new Date(1538820000000),
                        y: [6620.33, 6634.15, 6617.24, 6624.61]
                    },
                    {
                        x: new Date(1538821800000),
                        y: [6625.95, 6626, 6611.66, 6617.58]
                    },
                    {
                        x: new Date(1538823600000),
                        y: [6619, 6625.97, 6595.27, 6598.86]
                    },
                    {
                        x: new Date(1538825400000),
                        y: [6598.86, 6598.88, 6570, 6587.16]
                    },
                    {
                        x: new Date(1538827200000),
                        y: [6588.86, 6600, 6580, 6593.4]
                    },
                    {
                        x: new Date(1538829000000),
                        y: [6593.99, 6598.89, 6585, 6587.81]
                    },
                    {
                        x: new Date(1538830800000),
                        y: [6587.81, 6592.73, 6567.14, 6578]
                    },
                    {
                        x: new Date(1538832600000),
                        y: [6578.35, 6581.72, 6567.39, 6579]
                    },
                    {
                        x: new Date(1538834400000),
                        y: [6579.38, 6580.92, 6566.77, 6575.96]
                    },
                    {
                        x: new Date(1538836200000),
                        y: [6575.96, 6589, 6571.77, 6588.92]
                    },
                    {
                        x: new Date(1538838000000),
                        y: [6588.92, 6594, 6577.55, 6589.22]
                    },
                    {
                        x: new Date(1538839800000),
                        y: [6589.3, 6598.89, 6589.1, 6596.08]
                    },
                    {
                        x: new Date(1538841600000),
                        y: [6597.5, 6600, 6588.39, 6596.25]
                    },
                    {
                        x: new Date(1538843400000),
                        y: [6598.03, 6600, 6588.73, 6595.97]
                    },
                    {
                        x: new Date(1538845200000),
                        y: [6595.97, 6602.01, 6588.17, 6602]
                    },
                    {
                        x: new Date(1538847000000),
                        y: [6602, 6607, 6596.51, 6599.95]
                    },
                    {
                        x: new Date(1538848800000),
                        y: [6600.63, 6601.21, 6590.39, 6591.02]
                    },
                    {
                        x: new Date(1538850600000),
                        y: [6591.02, 6603.08, 6591, 6591]
                    },
                    {
                        x: new Date(1538852400000),
                        y: [6591, 6601.32, 6585, 6592]
                    },
                    {
                        x: new Date(1538854200000),
                        y: [6593.13, 6596.01, 6590, 6593.34]
                    },
                    {
                        x: new Date(1538856000000),
                        y: [6593.34, 6604.76, 6582.63, 6593.86]
                    },
                    {
                        x: new Date(1538857800000),
                        y: [6593.86, 6604.28, 6586.57, 6600.01]
                    },
                    {
                        x: new Date(1538859600000),
                        y: [6601.81, 6603.21, 6592.78, 6596.25]
                    },
                    {
                        x: new Date(1538861400000),
                        y: [6596.25, 6604.2, 6590, 6602.99]
                    },
                    {
                        x: new Date(1538863200000),
                        y: [6602.99, 6606, 6584.99, 6587.81]
                    },
                    {
                        x: new Date(1538865000000),
                        y: [6587.81, 6595, 6583.27, 6591.96]
                    },
                    {
                        x: new Date(1538866800000),
                        y: [6591.97, 6596.07, 6585, 6588.39]
                    },
                    {
                        x: new Date(1538868600000),
                        y: [6587.6, 6598.21, 6587.6, 6594.27]
                    },
                    {
                        x: new Date(1538870400000),
                        y: [6596.44, 6601, 6590, 6596.55]
                    },
                    {
                        x: new Date(1538872200000),
                        y: [6598.91, 6605, 6596.61, 6600.02]
                    },
                    {
                        x: new Date(1538874000000),
                        y: [6600.55, 6605, 6589.14, 6593.01]
                    },
                    {
                        x: new Date(1538875800000),
                        y: [6593.15, 6605, 6592, 6603.06]
                    },
                    {
                        x: new Date(1538877600000),
                        y: [6603.07, 6604.5, 6599.09, 6603.89]
                    },
                    {
                        x: new Date(1538879400000),
                        y: [6604.44, 6604.44, 6600, 6603.5]
                    },
                    {
                        x: new Date(1538881200000),
                        y: [6603.5, 6603.99, 6597.5, 6603.86]
                    },
                    {
                        x: new Date(1538883000000),
                        y: [6603.85, 6605, 6600, 6604.07]
                    },
                    {
                        x: new Date(1538884800000),
                        y: [6604.98, 6606, 6604.07, 6606]
                    },
                ]
            }],
            colors: ["#0e9e4a", "#ED4C13"],
            xaxis: {
                type: 'datetime'
            },
            yaxis: {
                tooltip: {
                    enabled: true
                }
            }
        }
        var chart = new ApexCharts(
            document.querySelector("#candlestick-chart-1"),
            options
        );
        chart.render();
    });
    // [ candlestick-chart ] end
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
