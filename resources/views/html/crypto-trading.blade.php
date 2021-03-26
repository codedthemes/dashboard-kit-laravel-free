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
                                <h5 class="m-b-10">Trading</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#!">Crypto</a></li>
                                <li class="breadcrumb-item">Trading</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-xl-3 col-lg-12">
                    <div class="card task-board-left">
                        <div class="card-header">
                            <h5>Market</h5>
                        </div>
                        <div class="card-body">
                            <div class="input-group mb-0">
                                <input type="text" class="form-control add_task_todo" placeholder="Search here..." required="">
                                <button class="btn btn-primary btn-msg-send" type="button"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-top-0">
                                <div class="float-end">231.65</div>
                                <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-bitcoin text-warning"></i> Bitcoin </div>
                            </li>
                            <li class="list-group-item">
                                <div class="float-end">113.05</div>
                                <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-cloudsmith text-success"></i>DASH </div>
                            </li>
                            <li class="list-group-item">
                                <div class="float-end">341.22</div>
                                <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-ethereum text-danger"></i>Litecoin </div>
                            </li>
                            <li class="list-group-item">
                                <div class="float-end">241.68</div>
                                <div class="d-flex align-items-center"><i class="f-24 m-r-10 fab fa-asymmetrik text-primary"></i>NEO</div>
                            </li>
                            <li class="list-group-item">
                                <div class="float-end">231.65</div>
                                <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-bitcoin text-warning"></i> ANC </div>
                            </li>
                            <li class="list-group-item">
                                <div class="float-end">113.05</div>
                                <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-cloudsmith text-success"></i>ARK </div>
                            </li>
                            <li class="list-group-item">
                                <div class="float-end">341.22</div>
                                <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-ethereum text-danger"></i>BTA </div>
                            </li>
                            <li class="list-group-item">
                                <div class="float-end">241.68</div>
                                <div class="d-flex align-items-center"><i class="f-24 m-r-10 fab fa-asymmetrik text-primary"></i>ETH</div>
                            </li>
                            <li class="list-group-item">
                                <div class="float-end">113.05</div>
                                <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-cloudsmith text-success"></i>NEO </div>
                            </li>
                            <li class="list-group-item">
                                <div class="float-end">341.22</div>
                                <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-ethereum text-danger"></i>XMR </div>
                            </li>
                            <li class="list-group-item border-bottom-0">
                                <div class="float-end">241.68</div>
                                <div class="d-flex align-items-center"><i class="f-24 m-r-10 fab fa-asymmetrik text-primary"></i>XRP</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Trading Chart </h5>
                        </div>
                        <div class="card-body">
                            <div id="trade-cart"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Open Orders </h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="report-table" class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>Coin</th>
                                            <th>Date</th>
                                            <th>Volume</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-bitcoin text-warning"></i> Bitcoin </div>
                                            </td>
                                            <td>
                                                <div>02/12/2018</div>
                                            </td>
                                            <td>
                                                <div>0.725.00</div>
                                            </td>
                                            <td>
                                                <div class="badge bg-success ">Completed</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-ethereum text-danger"></i>Litecoin </div>
                                            </td>
                                            <td>7
                                                <div>05/30/2018</div>
                                            </td>
                                            <td>
                                                <div>0.134.00</div>
                                            </td>
                                            <td>
                                                <div class="badge bg-danger ">Cancel</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center"><i class="f-24 m-r-10 fab fa-asymmetrik text-primary"></i>NEO</div>
                                            </td>
                                            <td>
                                                <div>06/27/2019</div>
                                            </td>
                                            <td>
                                                <div>1.345.00</div>
                                            </td>
                                            <td>
                                                <div class="badge bg-primary ">Pending</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-cloudsmith text-success"></i>DASH </div>
                                            </td>
                                            <td>
                                                <div>12/10/2020</div>
                                            </td>
                                            <td>
                                                <div>0.755.00</div>
                                            </td>
                                            <td>
                                                <div class="badge bg-primary ">Pending</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-cloudsmith text-success"></i>DASH </div>
                                            </td>
                                            <td>
                                                <div>06/02/2021</div>
                                            </td>
                                            <td>
                                                <div>0.124.00</div>
                                            </td>
                                            <td>
                                                <div class="badge bg-success ">Completed</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-ethereum text-danger"></i>Litecoin </div>
                                            </td>
                                            <td>
                                                <div>08/11/2022</div>
                                            </td>
                                            <td>
                                                <div>0.123.00</div>
                                            </td>
                                            <td>
                                                <div class="badge bg-success ">Completed</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Your Trades </h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="report-table1" class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Coin</th>
                                            <th>Volume</th>
                                            <th>Receiver</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-ethereum text-danger"></i>Litecoin </div>
                                            </td>
                                            <td>
                                                <div>02/12/2018</div>
                                            </td>
                                            <td>
                                                <div>0.1235.00</div>
                                            </td>
                                            <td>Bank - 1025********347</td>
                                            <td>
                                                <div class="badge bg-success ">Completed</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center"><i class="f-24 m-r-10 fab fa-asymmetrik text-primary"></i>NEO</div>
                                            </td>
                                            <td>
                                                <div>07/12/2020</div>
                                            </td>
                                            <td>
                                                <div>0.550</div>
                                            </td>
                                            <td>NEO Wallet - #17642</td>
                                            <td>
                                                <div class="badge bg-primary ">Pending</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-bitcoin text-warning"></i> Bitcoin </div>
                                            </td>
                                            <td>
                                                <div>02/10/2017</div>
                                            </td>
                                            <td>
                                                <div>0.4345.00</div>
                                            </td>
                                            <td>BTC Wallet - #23562</td>
                                            <td>
                                                <div class="badge bg-success ">Completed</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-cloudsmith text-success"></i>DASH </div>
                                            </td>
                                            <td>
                                                <div>07/10/2020</div>
                                            </td>
                                            <td>
                                                <div>1.234.00</div>
                                            </td>
                                            <td>Bank - 1550********879</td>
                                            <td>
                                                <div class="badge bg-danger ">Cancel</div>
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
        </div>
    </div>

    <!-- [ Main Content ] end -->
    @include('html.layouts.footer')
    <script src="assets/js/plugins/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugins/dataTables.bootstrap4.min.js"></script>
    <!-- Apex Chart -->
    <script src="assets/js/plugins/apexcharts.min.js"></script>
    <script>
        // DataTable start
        $('#report-table').DataTable();
        $('#report-table1').DataTable();
        // DataTable end
        // [ realtime-visit-chart ] start
        $(function() {
            var lastDate = 0;
            var data = [];

            function getDayWiseTimeSeries(baseval, count, yrange) {
                var i = 0;
                while (i < count) {
                    var x = baseval;
                    var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

                    data.push({
                        x,
                        y
                    });
                    lastDate = baseval
                    baseval += 86400000;
                    i++;
                }
            }
            getDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 10, {
                min: 10,
                max: 90
            })

            function getNewSeries(baseval, yrange) {
                var newDate = baseval + 86400000;
                lastDate = newDate
                data.push({
                    x: newDate,
                    y: Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min
                })
            }

            function resetData() {
                data = data.slice(data.length - 10, data.length);
            }
            var options = {
                chart: {
                    height: 230,
                    type: 'area',
                    animations: {
                        enabled: true,
                        easing: 'linear',
                        dynamicAnimation: {
                            speed: 2000
                        }
                    },
                    toolbar: {
                        show: false
                    },
                    zoom: {
                        enabled: false
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth'
                },
                series: [{
                    name: 'Bitcoin :',
                    data: data
                }],
                colors: ["#ED4C13"],
                fill: {
                    type: 'solid',
                    opacity: 0,
                },
                markers: {
                    size: 0
                },
                xaxis: {
                    type: 'datetime',
                    range: 777600000,
                },
                yaxis: {
                    max: 100
                },
                legend: {
                    show: false
                },
            }
            var chart = new ApexCharts(
                document.querySelector("#trade-cart"),
                options
            );
            chart.render();
            var dataPointsLength = 10;
            window.setInterval(function() {
                getNewSeries(lastDate, {
                    min: 10,
                    max: 90
                })

                chart.updateSeries([{
                    data: data
                }])
            }, 2000)
            window.setInterval(function() {
                resetData()
                chart.updateSeries([{
                    data
                }], false, true)
            }, 60000)
        });
        // [ realtime-visit-chart ] end
    </script>

    @include('html.layouts.footer-bottom-link')
    </body>

    </html>
