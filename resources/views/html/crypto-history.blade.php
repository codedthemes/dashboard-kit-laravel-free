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
                            <h5 class="m-b-10">History</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Crypto</a></li>
                            <li class="breadcrumb-item">History</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- subscribe start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Deposit </h5>
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
                                        <td>
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
                        <h5>Withdraw </h5>
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
                <div class="card">
                    <div class="card-header">
                        <h5>Withdraw </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="report-table2" class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Coin</th>
                                        <th>Type</th>
                                        <th>Volume</th>
                                        <th>Price per unit</th>
                                        <th>Price</th>
                                        <th>Fees (%)</th>
                                        <th>Total Amount ($)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-ethereum text-danger"></i>Litecoin </div>
                                        </td>
                                        <td>
                                            <div>10/04/2020</div>
                                        </td>
                                        <td>
                                            <div class="badge bg-success ">Deposit</div>
                                        </td>
                                        <td>
                                            <div>0.75</div>
                                        </td>
                                        <td>
                                            <div>100</div>
                                        </td>
                                        <td>
                                            <div>75</div>
                                        </td>
                                        <td>
                                            <div>0.2</div>
                                        </td>
                                        <td>
                                            <div>60</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center"><i class="f-24 m-r-10 fab fa-asymmetrik text-primary"></i>NEO</div>
                                        </td>
                                        <td>
                                            <div>03/20/2021</div>
                                        </td>
                                        <td>
                                            <div class="badge bg-danger ">Withdraw</div>
                                        </td>
                                        <td>
                                            <div>1.225</div>
                                        </td>
                                        <td>
                                            <div>90</div>
                                        </td>
                                        <td>
                                            <div>110.25</div>
                                        </td>
                                        <td>
                                            <div>0.2</div>
                                        </td>
                                        <td>
                                            <div>88.20</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-bitcoin text-warning"></i> Bitcoin </div>
                                        </td>
                                        <td>
                                            <div>07/10/2019</div>
                                        </td>
                                        <td>
                                            <div class="badge bg-danger ">Withdraw</div>
                                        </td>
                                        <td>
                                            <div>0.525</div>
                                        </td>
                                        <td>
                                            <div>100</div>
                                        </td>
                                        <td>
                                            <div>52.50</div>
                                        </td>
                                        <td>
                                            <div>0.2</div>
                                        </td>
                                        <td>
                                            <div>42.00</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-cloudsmith text-success"></i>DASH </div>
                                        </td>
                                        <td>
                                            <div>12/02/2018</div>
                                        </td>
                                        <td>
                                            <div class="badge bg-success ">Deposit</div>
                                        </td>
                                        <td>
                                            <div>0.740</div>
                                        </td>
                                        <td>
                                            <div>100</div>
                                        </td>
                                        <td>
                                            <div>74.00</div>
                                        </td>
                                        <td>
                                            <div>0.2</div>
                                        </td>
                                        <td>
                                            <div>62.92</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- subscribe end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<script src="assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<script>
    // DataTable start
    $('#report-table').DataTable();
    $('#report-table1').DataTable();
    $('#report-table2').DataTable();
    // DataTable end
</script>

@include('html.layouts.footer-bottom-link')
</body>

</html>
