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
                            <h5 class="m-b-10">Membership Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Membership</a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- visitors  start -->
            <div class="col-sm-3">
                <div class="card bg-primary text-white widget-visitor-card">
                    <div class="card-body text-center">
                        <h2 class="text-white">18</h2>
                        <h6 class="text-white">Registered Users</h6>
                        <i class="feather icon-user-plus"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-success text-white widget-visitor-card">
                    <div class="card-body text-center">
                        <h2 class="text-white">14</h2>
                        <h6 class="text-white">Active Users</h6>
                        <i class="feather icon-user-check"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-danger text-white widget-visitor-card">
                    <div class="card-body text-center">
                        <h2 class="text-white">1</h2>
                        <h6 class="text-white">Pending Users</h6>
                        <i class="feather icon-user-minus"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-warning text-white widget-visitor-card">
                    <div class="card-body text-center">
                        <h2 class="text-white">16</h2>
                        <h6 class="text-white">Active Memberships</h6>
                        <i class="feather icon-users"></i>
                    </div>
                </div>
            </div>
            <!-- visitors  end -->
            <!-- progressbar static data start -->
            <div class="col-lg-8 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Total collected all time</h5>
                    </div>
                    <div class="card-body">
                        <div id="collected-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h6>This Month</h6>
                        <div class="row mt-3">
                            <div class="col-6">
                                <span class="d-block text-uppercase">Amount</span>
                                <h3 class="mt-3">$2,144</h3>
                                <div class="mt-3" id="transactions1"></div>
                            </div>
                            <div class="col-6">
                                <span class="d-block text-uppercase">Sales</span>
                                <h3 class="mt-3">100</h3>
                                <div class="mt-3" id="transactions2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Sales by membership</h5>
                    </div>
                    <div class="card-body">
                        <div id="sales-chart"></div>
                    </div>
                </div>
            </div>
            <!-- progressbar static data end -->
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
    // [ revenue-map ] start
    $(function() {
        var options = {
            chart: {
                height: 200,
                type: 'line',
                toolbar: {
                    show: false,
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                width: 3,
                curve: 'smooth'
            },
            series: [{
                name: 'Sales',
                data: [20, 50, 30, 60, 30, 50, 40]
            }, {
                name: 'Amount',
                data: [40, 20, 50, 15, 40, 65, 20]
            }],
            xaxis: {
                type: 'datetime',
                categories: ['1/11/2019', '2/11/2019', '3/11/2019', '4/11/2019', '5/11/2019', '6/11/2019', '7/11/2019'],
            },
            colors: ['#448aff', '#06CA98'],
            fill: {
                type: 'solid',
            },
            markers: {
                size: 5,
                colors: ['#448aff', '#06CA98'],
                opacity: 0.9,
                strokeWidth: 2,
                hover: {
                    size: 7,
                }
            },
            grid: {
                borderColor: '#e2e5e885',
            },
            yaxis: {
                min: 10,
                max: 70,
            }
        };
        var chart = new ApexCharts(document.querySelector("#collected-chart"), options);
        chart.render();
    });
    // [ revenue-map ] end
    // [ sales-chart ] start
    $(function() {
        var options = {
            chart: {
                height: 250,
                type: 'line',
                toolbar: {
                    show: false,
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                width: 2,
                curve: 'smooth'
            },
            series: [{
                name: 'Trial',
                data: [20, 50, 30, 60, 30, 50, 40]
            }, {
                name: 'Bronze',
                data: [40, 20, 50, 15, 40, 65, 20]
            }, {
                name: 'Gold',
                data: [64, 40, 20, 30, 20, 40, 65]
            }, {
                name: 'Platinum',
                data: [30, 25, 40, 15, 20, 15, 30]
            }],
            xaxis: {
                type: 'datetime',
                categories: ['1/11/2019', '2/11/2019', '3/11/2019', '4/11/2019', '5/11/2019', '6/11/2019', '7/11/2019'],
            },
            colors: ['#5052FC', '#06CA98', "#ffba57", "#ED4C13"],
            fill: {
                type: 'solid',
            },
            markers: {
                size: 5,
                colors: ['#5052FC', '#06CA98', "#ffba57", "#ED4C13"],
                opacity: 0.9,
                strokeWidth: 2,
                hover: {
                    size: 7,
                }
            },
            grid: {
                borderColor: '#e2e5e885',
            },
            yaxis: {
                min: 10,
                max: 70,
            }
        };
        var chart = new ApexCharts(document.querySelector("#sales-chart"), options);
        chart.render();
    });
    // [ sales-chart ] end
    // [ Transection ] start
    $(function() {
        var options1 = {
            chart: {
                type: 'bar',
                height: 100,
                sparkline: {
                    enabled: true
                }
            },
            colors: ["#5052FC"],
            plotOptions: {
                bar: {
                    columnWidth: '80%'
                }
            },
            series: [{
                data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
            }],
            labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
            xaxis: {
                crosshairs: {
                    width: 1
                },
            },
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
                            return 'Amount'
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        }
        new ApexCharts(document.querySelector("#transactions1"), options1).render();
        var options2 = {
            chart: {
                type: 'bar',
                height: 100,
                sparkline: {
                    enabled: true
                }
            },
            colors: ["#ED4C13"],
            plotOptions: {
                bar: {
                    columnWidth: '80%'
                }
            },
            series: [{
                data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
            }],
            labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
            xaxis: {
                crosshairs: {
                    width: 1
                },
            },
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
                            return 'Sales'
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        }
        new ApexCharts(document.querySelector("#transactions2"), options2).render();
    });
    // [ Transection ] end
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
