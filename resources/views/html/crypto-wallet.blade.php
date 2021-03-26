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
                            <h5 class="m-b-10">Wallet</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Crypto</a></li>
                            <li class="breadcrumb-item">Wallet</li>
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
                        <h5>Wallet </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Cryptocurrency</th>
                                        <th>Total</th>
                                        <th>Price</th>
                                        <th>Total Price</th>
                                        <th>Transact</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-bitcoin text-warning"></i> Bitcoin </div>
                                        </td>
                                        <td class="align-middle">
                                            <div>100</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>10</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>1000</div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <div class="me-xl-2 me-1">
                                                    <a href="#" class="btn btn-success btn-sm"><i class="far fa-arrow-alt-circle-down"></i> Deposit</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-arrow-alt-circle-up"></i> Withdraw</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-ethereum text-danger"></i>Litecoin </div>
                                        </td>
                                        <td class="align-middle">
                                            <div>80</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>8</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>640</div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <div class="me-xl-2 me-1">
                                                    <a href="#" class="btn btn-success btn-sm"><i class="far fa-arrow-alt-circle-down"></i> Deposit</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-arrow-alt-circle-up"></i> Withdraw</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center"><i class="f-24 m-r-10 fab fa-asymmetrik text-primary"></i>NEO</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>75</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>10</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>750</div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <div class="me-xl-2 me-1">
                                                    <a href="#" class="btn btn-success btn-sm"><i class="far fa-arrow-alt-circle-down"></i> Deposit</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-arrow-alt-circle-up"></i> Withdraw</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-cloudsmith text-success"></i>DASH </div>
                                        </td>
                                        <td class="align-middle">
                                            <div> 90</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>10</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>900</div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <div class="me-xl-2 me-1">
                                                    <a href="#" class="btn btn-success btn-sm"><i class="far fa-arrow-alt-circle-down"></i> Deposit</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-arrow-alt-circle-up"></i> Withdraw</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-bitcoin text-warning"></i>ETH </div>
                                        </td>
                                        <td class="align-middle">
                                            <div>750</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>10</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>7500</div>
                                        </td>
                                        <td class="align-middle">
                                            <div class=" transact form-inline">
                                                <div class="me-xl-2 me-1">
                                                    <a href="#" class="btn btn-success btn-sm"><i class="far fa-arrow-alt-circle-down"></i> Deposit</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-arrow-alt-circle-up"></i> Withdraw</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-ethereum text-danger"></i> XRP </div>
                                        </td>
                                        <td class="align-middle">
                                            <div>500</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>15</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>7500</div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <div class="me-xl-2 me-1">
                                                    <a href="#" class="btn btn-success btn-sm"><i class="far fa-arrow-alt-circle-down"></i> Deposit</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-arrow-alt-circle-up"></i> Withdraw</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-asymmetrik text-primary"></i> BTA </div>
                                        </td>
                                        <td class="align-middle">
                                            <div>700</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>10</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>7000</div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <div class="me-xl-2 me-1">
                                                    <a href="#" class="btn btn-success btn-sm"><i class="far fa-arrow-alt-circle-down"></i> Deposit</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-arrow-alt-circle-up"></i> Withdraw</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-cloudsmith text-success"></i> XMR </div>
                                        </td>
                                        <td class="align-middle">
                                            <div>400</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>80</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>32000</div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <div class="me-xl-2 me-1">
                                                    <a href="#" class="btn btn-success btn-sm"><i class="far fa-arrow-alt-circle-down"></i> Deposit</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-arrow-alt-circle-up"></i> Withdraw</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-bitcoin text-warning"></i> ANC </div>
                                        </td>
                                        <td class="align-middle">
                                            <div>650</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>10</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>6500</div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <div class="me-xl-2 me-1">
                                                    <a href="#" class="btn btn-success btn-sm"><i class="far fa-arrow-alt-circle-down"></i> Deposit</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-arrow-alt-circle-up"></i> Withdraw</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-ethereum text-danger"></i> ARK </div>
                                        </td>
                                        <td class="align-middle">
                                            <div>200</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>200</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>40000</div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <div class="me-xl-2 me-1">
                                                    <a href="#" class="btn btn-success btn-sm"><i class="far fa-arrow-alt-circle-down"></i> Deposit</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-arrow-alt-circle-up"></i> Withdraw</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-asymmetrik text-primary"></i> BC </div>
                                        </td>
                                        <td class="align-middle">
                                            <div>000</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>10</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>10000</div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <div class="me-xl-2 me-1">
                                                    <a href="#" class="btn btn-success btn-sm"><i class="far fa-arrow-alt-circle-down"></i> Deposit</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-arrow-alt-circle-up"></i> Withdraw</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-cloudsmith text-success"></i> DCR </div>
                                        </td>
                                        <td class="align-middle">
                                            <div>800</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>15</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>12000</div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <div class="me-xl-2 me-1">
                                                    <a href="#" class="btn btn-success btn-sm"><i class="far fa-arrow-alt-circle-down"></i> Deposit</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-arrow-alt-circle-up"></i> Withdraw</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-bitcoin text-warning"></i> ETC </div>
                                        </td>
                                        <td class="align-middle">
                                            <div>900</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>200</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>180000</div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <div class="me-xl-2 me-1">
                                                    <a href="#" class="btn btn-success btn-sm"><i class="far fa-arrow-alt-circle-down"></i> Deposit</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-arrow-alt-circle-up"></i> Withdraw</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-ethereum text-danger"></i> FRK </div>
                                        </td>
                                        <td class="align-middle">
                                            <div>500</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>40</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>20000</div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <div class="me-xl-2 me-1">
                                                    <a href="#" class="btn btn-success btn-sm"><i class="far fa-arrow-alt-circle-down"></i> Deposit</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-arrow-alt-circle-up"></i> Withdraw</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-asymmetrik text-primary"></i> GAME </div>
                                        </td>
                                        <td class="align-middle">
                                            <div>850</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>100</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>85000</div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <div class="me-xl-2 me-1">
                                                    <a href="#" class="btn btn-success btn-sm"><i class="far fa-arrow-alt-circle-down"></i> Deposit</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-arrow-alt-circle-up"></i> Withdraw</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-cloudsmith text-success"></i>GNO </div>
                                        </td>
                                        <td class="align-middle">
                                            <div>750</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>100</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>75000</div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <div class="me-xl-2 me-1">
                                                    <a href="#" class="btn btn-success btn-sm"><i class="far fa-arrow-alt-circle-down"></i> Deposit</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-arrow-alt-circle-up"></i> Withdraw</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-bitcoin text-warning"></i> ICN </div>
                                        </td>
                                        <td class="align-middle">
                                            <div>720</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>200</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>144000</div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <div class="me-xl-2 me-1">
                                                    <a href="#" class="btn btn-success btn-sm"><i class="far fa-arrow-alt-circle-down"></i> Deposit</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-arrow-alt-circle-up"></i> Withdraw</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-ethereum text-danger"></i> ICO </div>
                                        </td>
                                        <td class="align-middle">
                                            <div>300</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>400</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>120000</div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <div class="me-xl-2 me-1">
                                                    <a href="#" class="btn btn-success btn-sm"><i class="far fa-arrow-alt-circle-down"></i> Deposit</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-arrow-alt-circle-up"></i> Withdraw</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-asymmetrik text-primary"></i> JBS </div>
                                        </td>
                                        <td class="align-middle">
                                            <div>850</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>100</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>85000</div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <div class="me-xl-2 me-1">
                                                    <a href="#" class="btn btn-success btn-sm"><i class="far fa-arrow-alt-circle-down"></i> Deposit</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-arrow-alt-circle-up"></i> Withdraw</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-cloudsmith text-success"></i> KORE </div>
                                        </td>
                                        <td class="align-middle">
                                            <div>630</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>300</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>189000</div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <div class="me-xl-2 me-1">
                                                    <a href="#" class="btn btn-success btn-sm"><i class="far fa-arrow-alt-circle-down"></i> Deposit</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-arrow-alt-circle-up"></i> Withdraw</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-bitcoin text-warning"></i> MCO </div>
                                        </td>
                                        <td class="align-middle">
                                            <div>470</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>200</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>94000</div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <div class="me-xl-2 me-1">
                                                    <a href="#" class="btn btn-success btn-sm"><i class="far fa-arrow-alt-circle-down"></i> Deposit</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-arrow-alt-circle-up"></i> Withdraw</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center"> <i class="f-24 m-r-10 fab fa-ethereum text-danger"></i> MRC </div>
                                        </td>
                                        <td class="align-middle">
                                            <div>100</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>10</div>
                                        </td>
                                        <td class="align-middle">
                                            <div>10000</div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <div class="me-xl-2 me-1">
                                                    <a href="#" class="btn btn-success btn-sm"><i class="far fa-arrow-alt-circle-down"></i> Deposit</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-arrow-alt-circle-up"></i> Withdraw</a>
                                                </div>
                                            </div>
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
