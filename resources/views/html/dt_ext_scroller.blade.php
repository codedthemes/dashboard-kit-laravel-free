<!DOCTYPE html>
<html lang="en">
<head>
    @include('html.layouts.head')
    <!-- data tables css -->
    <link rel="stylesheet" href="assets/css/plugins/dataTables.bootstrap4.min.css">
    @include('html.layouts.head-bottom-link')
</head>
@include('html.layouts.layout-vertical')
<!-- [ Main Content ] start -->
<section class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Scroller</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Table</a></li>
                            <li class="breadcrumb-item">Scroller</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- Basic scroll table start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Table Scroll</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table id="basic-scroller" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>ZIP / Post code</th>
                                        <th>Country</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic Scroll table end -->
            <!-- State saving scroll table start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>State Saving</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table id="state-scroller" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>ZIP / Post code</th>
                                        <th>Country</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- State saving Scroll table end -->
            <!-- Using APi scroll table start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>API</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table id="api-scroller" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>ZIP / Post code</th>
                                        <th>Country</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Using API Scroll table end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- datatable Js -->
<script src="assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<script src="assets/js/pages/data-scroller-custom.js"></script>
@include('html.layouts.footer-bottom-link')
</body>
</html>
