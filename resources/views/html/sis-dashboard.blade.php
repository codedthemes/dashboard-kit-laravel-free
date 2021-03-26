<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    <link rel="stylesheet" href="assets/css/plugins/fullcalendar.min.css">
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
                            <h5 class="m-b-10">School Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">School</a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- customar project  start -->
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-sign-out-alt f-36 text-info"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Leave</h6>
                                <h2 class="m-b-0">45</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-book f-36 text-danger"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">submission</h6>
                                <h2 class="m-b-0">9</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-running f-36 text-success"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Events</h6>
                                <h2 class="m-b-0">5</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-bug f-36 text-primary"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Bug</h6>
                                <h2 class="m-b-0">3</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customar project  end -->
            <div class="col-sm-12">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Your <strong>Web Design</strong>Exam will active now <a href="#!" class="alert-link">Click hear</a> to start exam.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            <!-- Tasks start -->
            <div class="col-xl-5 col-md-12">
                <div class="card task-card">
                    <div class="card-header">
                        <h5>Notice</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled task-list">
                            <li>
                                <i class="feather icon-check f-w-600 task-icon bg-success"></i>
                                <p class="m-b-5">8:50</p>
                                <h6 class="text-muted">Your first semester Exam will held on <span class="text-primary">19-04-2018</span>.</h6>
                            </li>
                            <li>
                                <i class="task-icon bg-primary"></i>
                                <p class="m-b-5">Sat, 5 Mar</p>
                                <h6 class="text-muted">In your school campus on <span class="text-primary">1-03-2018</span> will held a program of <span class="text-primary">annual sports day</span>.You are all invited.</h6>
                            </li>
                            <li>
                                <i class="task-icon bg-danger"></i>
                                <p class="m-b-5">Sun, 17 Feb</p>
                                <h6 class="text-muted">Your second semester exam will held on 30-08-2018.Please be prepare for your exam</h6>
                            </li>
                            <li>
                                <i class="task-icon bg-warning"></i>
                                <p class="m-b-5">Sat, 18 Mar</p>
                                <h6 class="text-muted">On <span class="text-primary">20-11-2018</span> will held a programming contest in school campus.Registration start from today. </h6>
                            </li>
                            <li class="pb-2 mb-0">
                                <i class="task-icon bg-success"></i>
                                <p class="m-b-5">Sat, 22 Mar</p>
                                <h6 class="text-muted">Prize giving ceremony will held on <span class="text-primary">03-01-2019</span>.Best Student List published In your Website.</h6>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-md-12">
                <div class="card overflow-hidden">
                    <div class="card-body bg-primary">
                        <div id="absent-chart"></div>
                    </div>
                    <div class="card-footer">
                        <h6 class="text-muted m-b-30 m-t-15">Current year month wise Attendance</h6>
                        <div class="row text-center">
                            <div class="col-6 border-end">
                                <h6 class="text-muted m-b-10">Total present student</h6>
                                <h3 class="">175</h3>
                            </div>
                            <div class="col-6">
                                <h6 class="text-muted m-b-10">Total absent student</h6>
                                <h3 class="">76</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tasks end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<script src="assets/js/plugins/moment.js"></script>
<script src="assets/js/plugins/jquery-ui.min.js"></script>
<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>
<script>
    // [ proj-earning ] start
    $(function() {
        var options = {
            chart: {
                type: 'bar',
                height: 310,
                zoom: {
                    enabled: false
                },
                toolbar: {
                    show: false,
                },
            },
            dataLabels: {
                enabled: false,
            },
            colors: ["#fff"],
            plotOptions: {
                bar: {
                    color: '#fff',
                    columnWidth: '60%',
                }
            },
            fill: {
                type: 'solid',
                opacity: 1,
            },
            series: [{
                data: [5, 6, 1, 9, 3, 5, 4, 2, 6, 9, 4, 5]
            }],
            xaxis: {
                crosshairs: {
                    width: 1
                },
                labels: {
                    show: false,
                },
            },
            yaxis: {
                labels: {
                    style: {
                        color: '#fff',
                    }
                },
            },
            grid: {
                borderColor: '#ffffff85',
                padding: {
                    bottom: 0,
                    left: 10,
                }
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
                            return 'Total absent'
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#absent-chart"), options);
        chart.render();
    });
    // [ proj-earning ] end
</script>

@include('html.layouts.footer-bottom-link')
</body>

</html>
