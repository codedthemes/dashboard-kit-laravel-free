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
                            <h5 class="m-b-10">Exchange</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Crypto</a></li>
                            <li class="breadcrumb-item">Exchange</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- candlestick chart start -->
            <div class="col-md-12">
                <div class="card background-pattern">
                    <div class="card-body py-5">
                        <h1 class="text-center mb-4"><span class="text-success">Buy</span> and <span class="text-danger">Sell</span> Coins at the Crypto</h1>
                        <h4 class="text-center mb-4">Buy now and get +30% extra bonus</h4>
                        <div class="row justify-content-center">
                            <div class="col-sm-9">
                                <div class="px-sm-4 py-sm-4 bg-white rounded-lg shadow-sm">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="input-group">
                                                <input type="text" class="form-control" value="10.1548">
                                                <select class="form-control">
                                                        <option>BTC</option>
                                                        <option>Ethereum</option>
                                                        <option>Ripple</option>
                                                        <option>Bitcoin Cash</option>
                                                        <option>Cardano</option>
                                                        <option>Litecoin</option>
                                                        <option>NEO</option>
                                                        <option>Stellar</option>
                                                        <option>EOS</option>
                                                        <option>NEM</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto text-center my-2 my-sm-0">
                                            <i data-feather="repeat" class="text-muted f-26"></i>
                                        </div>
                                        <div class="col">
                                            <div class="input-group">
                                                <input type="text" class="form-control" value="125.158">
                                                <select class="form-control">
                                                        <option value="USD">USD</option>
                                                        <option value="EURO">EURO</option>
                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <a href="#" class="btn btn-primary mt-4">EXCHANGE NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- candlestick chart end -->
            <!-- liveline2-section start -->
            <div class="col-md-6 col-xl-3">
                <div class="card mrr-card">
                    <div class="card-body mb-3">
                        <div class="row justify-content-between align-items-center mb-3">
                            <div class="col">
                                <span class="d-flex justify-content-center align-items-center"><i class="fab fa-bitcoin text-primary f-22 m-r-5"></i>Bitcoin</span>
                            </div>
                            <div class="col">
                                <h6 class="badge bg-light-primary float-end d-inline-block m-0">-0.997896</h6>
                            </div>
                        </div>
                    </div>
                    <div id="average-chart11" class="position-absolute bottom-chart w-100"></div>
                    <div class="card-body d-flex flex-row-reverse align-items-end justify-content-between">
                        <span>Goal: $75</span>
                        <h3 class="m-0">$80</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card mrr-card">
                    <div class="card-body mb-3">
                        <div class="row justify-content-between align-items-center mb-3">
                            <div class="col">
                                <span class="d-flex justify-content-center align-items-center"><i class="fab fa-ethereum text-danger f-22 m-r-5"></i>Ethereum</span>
                            </div>
                            <div class="col">
                                <h6 class="badge bg-light-danger float-end d-inline-block m-0">+1.1456</h6>
                            </div>
                        </div>
                    </div>
                    <div id="average-chart12" class="position-absolute bottom-chart w-100"></div>
                    <div class="card-body d-flex flex-row-reverse align-items-end justify-content-between">
                        <span>Goal: $75</span>
                        <h3 class="m-0">$80</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card mrr-card">
                    <div class="card-body mb-3">
                        <div class="row justify-content-between align-items-center mb-3">
                            <div class="col">
                                <span class="d-flex justify-content-center align-items-center"><i class="fab fa-asymmetrik text-warning f-22 m-r-5"></i>Neo(NEO)</span>
                            </div>
                            <div class="col">
                                <h6 class="badge bg-light-warning float-end d-inline-block m-0">+5.78787</h6>
                            </div>
                        </div>
                    </div>
                    <div id="average-chart14" class="position-absolute bottom-chart w-100"></div>
                    <div class="card-body d-flex flex-row-reverse align-items-end justify-content-between">
                        <span>Goal: $75</span>
                        <h3 class="m-0">$80</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card mrr-card">
                    <div class="card-body mb-3">
                        <div class="row justify-content-between align-items-center mb-3">
                            <div class="col">
                                <span class="d-flex justify-content-center align-items-center"><i class="fab fa-cloudsmith text-success f-22 m-r-5"></i>Ripple(RPL)</span>
                            </div>
                            <div class="col">
                                <h6 class="badge bg-light-success float-endd-inline-block m-0">-7.99999</h6>
                            </div>
                        </div>
                    </div>
                    <div id="average-chart13" class="position-absolute bottom-chart w-100"></div>
                    <div class="card-body d-flex flex-row-reverse align-items-end justify-content-between">
                        <span>Goal: $75</span>
                        <h3 class="m-0">$80</h3>
                    </div>
                </div>
            </div>
            <!-- liveline2-section end -->

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
    // [ average-chart ] start
    $(function() {
        var btcchartoption1 = {
            chart: {
                type: 'area',
                height: 145,
                width: '100%',
                sparkline: {
                    enabled: true
                }
            },
            colors: ["#5052FC"],
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.8,
                    opacityTo: 0.4,
                    stops: [0, 80, 100]
                }
            },
            stroke: {
                curve: 'smooth',
                width: 2,
            },
            series: [{
                name: 'series1',
                data: [40, 60, 35, 55, 35, 75, 50]
            }],
            yaxis: {
                min: 0,
                max: 100,
            },
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false,
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return '$'
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        }
        new ApexCharts(document.querySelector("#average-chart11"), btcchartoption1).render();
        var btcchartoption2 = {
            chart: {
                type: 'area',
                height: 145,
                sparkline: {
                    enabled: true
                }
            },
            colors: ["#ED4C13"],
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.8,
                    opacityTo: 0.4,
                    stops: [0, 90, 100]
                }
            },
            stroke: {
                curve: 'smooth',
                width: 2,
            },
            series: [{
                name: 'series1',
                data: [40, 55, 35, 75, 50, 80, 50]
            }],
            yaxis: {
                min: 0,
                max: 100,
            },
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false,
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return '$'
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        }
        new ApexCharts(document.querySelector("#average-chart12"), btcchartoption2).render();
        var btcchartoption3 = {
            chart: {
                type: 'area',
                height: 145,
                sparkline: {
                    enabled: true
                }
            },
            colors: ["#06CA98"],
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.8,
                    opacityTo: 0.4,
                    stops: [0, 90, 100]
                }
            },
            stroke: {
                curve: 'smooth',
                width: 2,
            },
            series: [{
                name: 'series1',
                data: [40, 60, 35, 55, 35, 75, 50]
            }],
            yaxis: {
                min: 0,
                max: 100,
            },
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false,
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return '$'
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        }
        new ApexCharts(document.querySelector("#average-chart13"), btcchartoption3).render();
        var btcchartoption4 = {
            chart: {
                type: 'area',
                height: 145,
                sparkline: {
                    enabled: true
                }
            },
            colors: ["#ffba57"],
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.8,
                    opacityTo: 0.4,
                    stops: [0, 90, 100]
                }
            },
            stroke: {
                curve: 'smooth',
                width: 2,
            },
            series: [{
                name: 'series1',
                data: [40, 55, 35, 75, 50, 80, 50]
            }],
            yaxis: {
                min: 0,
                max: 100,
            },
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false,
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return '$'
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        }
        new ApexCharts(document.querySelector("#average-chart14"), btcchartoption4).render();
    });
    // [ average-chart ] end
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
