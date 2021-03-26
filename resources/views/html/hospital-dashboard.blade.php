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
                            <h5 class="m-b-10">Hospital Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Hospital</a></li>
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
                                <i class="fas fa-user-md f-36 text-info"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Doctor</h6>
                                <h2 class="m-b-0">35</h2>
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
                                <i class="fas fa-user-injured f-36 text-danger"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Patient</h6>
                                <h2 class="m-b-0">368</h2>
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
                                <i class="fas fa-user-nurse f-36 text-success"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Nurse</h6>
                                <h2 class="m-b-0">79</h2>
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
                                <i class="fas fa-prescription-bottle-alt f-36 text-primary"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Pharmacist</h6>
                                <h2 class="m-b-0">10</h2>
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
                                <i class="fas fa-flask f-36 text-warning"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Laboratories</h6>
                                <h2 class="m-b-0">35</h2>
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
                                <i class="fas fa-user-tie f-36 text-primary"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Accountant</h6>
                                <h2 class="m-b-0">368</h2>
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
                                <i class="fas fa-file-invoice-dollar f-36 text-danger"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Payment</h6>
                                <h2 class="m-b-0">79</h2>
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
                                <i class="fas fa-pills f-36 text-info"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Medicine</h6>
                                <h2 class="m-b-0">10</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customar project  end -->
            <!-- subscribe start -->
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-procedures text-primary d-block f-40"></i>
                        <h4 class="m-t-20 m-b-20"><span class="text-primary">8.62k</span> Operation</h4>
                        <button class="btn btn-primary btn-sm btn-round" data-bs-toggle="modal" data-title="Operation" data-bs-target="#modal-report">View Report</button>
                    </div>
                    <div id="operation-chart"></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-skull-crossbones text-success d-block f-40"></i>
                        <h4 class="m-t-20 m-b-20"><span class="text-success">+40</span> Death</h4>
                        <button class="btn btn-success btn-sm btn-round" data-bs-toggle="modal" data-title="Death" data-bs-target="#modal-report">View Report</button>
                    </div>
                    <div id="death-chart"></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-baby text-danger d-block f-40"></i>
                        <h4 class="m-t-20 m-b-20"><span class="text-danger">+40</span> Birth</h4>
                        <button class="btn btn-danger btn-sm btn-round" data-bs-toggle="modal" data-title="Birth" data-bs-target="#modal-report">View Report</button>
                    </div>
                    <div id="birth-chart"></div>
                </div>
            </div>
            <!-- subscribe end -->

        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table id="report-table" class="table table-bordered table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Sex</th>
                                <th>Birth Date</th>
                                <th>Age</th>
                                <th>Blood Group</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="assets/images/user/avatar-1.jpg" class="img-radius" width="30px" height="30px"></td>
                                <td>Tanvir Hasan</td>
                                <td>patient@example.com</td>
                                <td>9876543</td>
                                <td>female</td>
                                <td>13/09/1994</td>
                                <td>54</td>
                                <td>o+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/user/avatar-2.jpg" class="img-radius" width="30px" height="30px"></td>
                                <td>Joseph William</td>
                                <td>Joseph@example.com</td>
                                <td>1234567</td>
                                <td>male</td>
                                <td>09/10/1990</td>
                                <td>27</td>
                                <td>B+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/user/avatar-3.jpg" class="img-radius" width="30px" height="30px"></td>
                                <td>Tanvir Hasan</td>
                                <td>patient@example.com</td>
                                <td>9876543</td>
                                <td>female</td>
                                <td>13/09/1994</td>
                                <td>54</td>
                                <td>o+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/user/avatar-4.jpg" class="img-radius" width="30px" height="30px"></td>
                                <td>Joseph William</td>
                                <td>Joseph@example.com</td>
                                <td>1234567</td>
                                <td>male</td>
                                <td>09/10/1990</td>
                                <td>27</td>
                                <td>B+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/user/avatar-1.jpg" class="img-radius" width="30px" height="30px"></td>
                                <td>Tanvir Hasan</td>
                                <td>patient@example.com</td>
                                <td>9876543</td>
                                <td>female</td>
                                <td>13/09/1994</td>
                                <td>54</td>
                                <td>o+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/user/avatar-2.jpg" class="img-radius" width="30px" height="30px"></td>
                                <td>Joseph William</td>
                                <td>Joseph@example.com</td>
                                <td>1234567</td>
                                <td>male</td>
                                <td>09/10/1990</td>
                                <td>27</td>
                                <td>B+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/user/avatar-3.jpg" class="img-radius" width="30px" height="30px"></td>
                                <td>Tanvir Hasan</td>
                                <td>patient@example.com</td>
                                <td>9876543</td>
                                <td>female</td>
                                <td>13/09/1994</td>
                                <td>54</td>
                                <td>o+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/user/avatar-4.jpg" class="img-radius" width="30px" height="30px"></td>
                                <td>Joseph William</td>
                                <td>Joseph@example.com</td>
                                <td>1234567</td>
                                <td>male</td>
                                <td>09/10/1990</td>
                                <td>27</td>
                                <td>B+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/user/avatar-1.jpg" class="img-radius" width="30px" height="30px"></td>
                                <td>Tanvir Hasan</td>
                                <td>patient@example.com</td>
                                <td>9876543</td>
                                <td>female</td>
                                <td>13/09/1994</td>
                                <td>54</td>
                                <td>o+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/user/avatar-2.jpg" class="img-radius" width="30px" height="30px"></td>
                                <td>Joseph William</td>
                                <td>Joseph@example.com</td>
                                <td>1234567</td>
                                <td>male</td>
                                <td>09/10/1990</td>
                                <td>27</td>
                                <td>B+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/user/avatar-3.jpg" class="img-radius" width="30px" height="30px"></td>
                                <td>Tanvir Hasan</td>
                                <td>patient@example.com</td>
                                <td>9876543</td>
                                <td>female</td>
                                <td>13/09/1994</td>
                                <td>54</td>
                                <td>o+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/user/avatar-4.jpg" class="img-radius" width="30px" height="30px"></td>
                                <td>Joseph William</td>
                                <td>Joseph@example.com</td>
                                <td>1234567</td>
                                <td>male</td>
                                <td>09/10/1990</td>
                                <td>27</td>
                                <td>B+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<script src="assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>
<script>
    // report model start
    $('#modal-report').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('title')
        var modal = $(this)
        modal.find('.modal-title').text('Report of ' + recipient + ' on current month')
    })
    // report model end
    // DataTable start
    $('#report-table').DataTable();
    // DataTable end
    // [ operation-processed ] start
    $(function() {
        var options = {
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
                opacity: 0.3,
            },
            markers: {
                size: 3,
                opacity: 0.9,
                colors: "#fff",
                strokeColor: "#5052FC",
                strokeWidth: 2,
                hover: {
                    size: 7,
                }
            },
            stroke: {
                curve: 'straight',
                width: 3,
            },
            series: [{
                name: 'series1',
                data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54, 25, 66, 41, 89, 63, 54, 25, 66, 41, 89]
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
                            return 'Operation '
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#operation-chart"), options);
        chart.render();
    });
    // [ operation-processed ] end
    // [ death-processed ] start
    $(function() {
        var options = {
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
                opacity: 0.3,
            },
            markers: {
                size: 3,
                opacity: 0.9,
                colors: "#fff",
                strokeColor: "#06CA98",
                strokeWidth: 2,
                hover: {
                    size: 7,
                }
            },
            stroke: {
                curve: 'straight',
                width: 3,
            },
            series: [{
                name: 'series1',
                data: [9, 54, 25, 66, 41, 89, 63, 54, 25, 66, 41, 89, 63, 25, 44, 12, 36, 25, 66, 41, 89]
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
                            return 'Death '
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#death-chart"), options);
        chart.render();
    });
    // [ death-processed ] end
    // [ Birth-processed ] start
    $(function() {
        var options = {
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
                opacity: 0.3,
            },
            markers: {
                size: 3,
                opacity: 0.9,
                colors: "#fff",
                strokeColor: "#ED4C13",
                strokeWidth: 2,
                hover: {
                    size: 7,
                }
            },
            stroke: {
                curve: 'straight',
                width: 3,
            },
            series: [{
                name: 'series1',
                data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54, 25, 66, 41, 89, 63, 54, 25, 66, 41, 89]
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
                            return 'Birth '
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#birth-chart"), options);
        chart.render();
    });
    // [ Birth-processed ] end
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
