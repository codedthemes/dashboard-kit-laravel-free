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
                            <h5 class="m-b-10">Transactions</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Crypto</a></li>
                            <li class="breadcrumb-item">Transactions</li>
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
                        <h5>Transactions </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="report-table" class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Type</th>
                                        <th>Amount</th>
                                        <th>Price</th>
                                        <th>USD ($)</th>
                                        <th>Fee (%)</th>
                                        <th>Status</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div>#14342</div>
                                        </td>
                                        <td>
                                            <div class="text-success">Buy</div>
                                        </td>
                                        <td>
                                            <div class="amount">
                                                <i class="fab fa-bitcoin m-r-5"></i>0.586
                                            </div>
                                        </td>
                                        <td>
                                            <div>119.12</div>
                                        </td>
                                        <td>
                                            <div>979.78</div>
                                        </td>
                                        <td>
                                            <div>0.2</div>
                                        </td>
                                        <td>
                                            <div class="badge bg-success rounded-pill">Completed</div>
                                        </td>
                                        <td>
                                            <div>04.40 am</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>#14321</div>
                                        </td>
                                        <td>
                                            <div class="text-danger">Sell</div>
                                        </td>
                                        <td>
                                            <div class="amount">
                                                <i class="fab fa-ethereum m-r-5"></i>1.386</div>
                                        </td>
                                        <td>
                                            <div>134.12</div>
                                        </td>
                                        <td>
                                            <div>346.23</div>
                                        </td>
                                        <td>
                                            <div>0.2</div>
                                        </td>
                                        <td>
                                            <div class="badge bg-danger rounded-pill">Cancel</div>
                                        </td>
                                        <td>
                                            <div>03.50 pm</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>#23531</div>
                                        </td>
                                        <td>
                                            <div class="text-success">Buy</div>
                                        </td>
                                        <td>
                                            <div class="amount">
                                                <i class="fab fa-asymmetrik m-r-5"></i>0.231
                                            </div>
                                        </td>
                                        <td>
                                            <div>124.12</div>
                                        </td>
                                        <td>
                                            <div>456.23</div>
                                        </td>
                                        <td>
                                            <div>0.2</div>
                                        </td>
                                        <td>
                                            <div class="badge bg-success rounded-pill">Completed</div>
                                        </td>
                                        <td>
                                            <div>12.23 pm</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>#12463</div>
                                        </td>
                                        <td>
                                            <div class="text-success">Buy</div>
                                        </td>
                                        <td>
                                            <div class="amount">
                                                <i class="fab fa-bitcoin m-r-5"></i>0.231
                                            </div>
                                        </td>
                                        <td>
                                            <div>231.12</div>
                                        </td>
                                        <td>
                                            <div>346.34</div>
                                        </td>
                                        <td>
                                            <div>0.2</div>
                                        </td>
                                        <td>
                                            <div class="badge bg-primary rounded-pill">Pending</div>
                                        </td>
                                        <td>
                                            <div>02.12 pm</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>#12431</div>
                                        </td>
                                        <td>
                                            <div class="text-danger">Sell</div>
                                        </td>
                                        <td>
                                            <div class="amount">
                                                <i class="fab fa-bitcoin m-r-5"></i>2.945
                                            </div>
                                        </td>
                                        <td>
                                            <div>431.12</div>
                                        </td>
                                        <td>
                                            <div>125.12</div>
                                        </td>
                                        <td>
                                            <div>0.2</div>
                                        </td>
                                        <td>
                                            <div class="badge bg-danger rounded-pill">Cancel</div>
                                        </td>
                                        <td>
                                            <div>10.00 am</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>#12532</div>
                                        </td>
                                        <td>
                                            <div class="text-danger">Sell</div>
                                        </td>
                                        <td>
                                            <div class="amount">
                                                <i class="fab fa-asymmetrik m-r-5"></i>0.235
                                            </div>
                                        </td>
                                        <td>
                                            <div>215.34</div>
                                        </td>
                                        <td>
                                            <div>236.12</div>
                                        </td>
                                        <td>
                                            <div>0.2</div>
                                        </td>
                                        <td>
                                            <div class="badge bg-primary rounded-pill">Pending</div>
                                        </td>
                                        <td>
                                            <div>08.22 am</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>#23165</div>
                                        </td>
                                        <td>
                                            <div class="text-success">Buy</div>
                                        </td>
                                        <td>
                                            <div class="amount">
                                                <i class="fab fa-bitcoin m-r-5"></i>2.346
                                            </div>
                                        </td>
                                        <td>
                                            <div>235.12</div>
                                        </td>
                                        <td>
                                            <div>332.23</div>
                                        </td>
                                        <td>
                                            <div>0.2</div>
                                        </td>
                                        <td>
                                            <div class="badge bg-success rounded-pill">Completed</div>
                                        </td>
                                        <td>
                                            <div>12.43 am</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>#63423</div>
                                        </td>
                                        <td>
                                            <div class="text-danger">Sell</div>
                                        </td>
                                        <td>
                                            <div class="amount">
                                                <i class="fab fa-ethereum m-r-5"></i>3.213
                                            </div>
                                        </td>
                                        <td>
                                            <div>456.12</div>
                                        </td>
                                        <td>
                                            <div>231.53</div>
                                        </td>
                                        <td>
                                            <div>0.2</div>
                                        </td>
                                        <td>
                                            <div class="badge bg-primary rounded-pill">Pending</div>
                                        </td>
                                        <td>
                                            <div>11.21 am</div>
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
    // DataTable end
</script>

@include('html.layouts.footer-bottom-link')
</body>

</html>
