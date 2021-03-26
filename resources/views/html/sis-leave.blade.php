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
                            <h5 class="m-b-10">Leave</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">School</a></li>
                            <li class="breadcrumb-item">Leave</li>
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
                        <h5>Leave List </h5>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-end">
                                <button class="btn btn-success btn-sm mb-3 btn-round" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-plus"></i> Apply Leave</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Leave Reason</th>
                                        <th>Leave Status</th>
                                        <th>Remark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>16/09/2016 11:15 AM</td>
                                        <td>16/09/2016 03:30 PM</td>
                                        <td>Go to company for Interview.</td>
                                        <td>Granted</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>07/09/2016 11:15 AM</td>
                                        <td>07/09/2016 03:30 PM</td>
                                        <td>i am not feel so well</td>
                                        <td>Granted</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>23/08/2016 08:30 AM</td>
                                        <td>23/08/2016 03:30 PM</td>
                                        <td>for personal reason i am not attend tomorrow lecture.</td>
                                        <td>Granted</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>19/01/2016 08:00 AM</td>
                                        <td>22/01/2016 04:30 PM</td>
                                        <td>for high fever i did not come in college</td>
                                        <td>Granted</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>25/11/2015 12:12 PM</td>
                                        <td>26/11/2015 04:30 PM</td>
                                        <td>Go to attain family social function.</td>
                                        <td>Granted</td>
                                        <td></td>
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
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Apply For Leave</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-12">
                            <h5>From Date</h5>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="form-label" for="Date1">Date</label>
                                <input type="date" class="form-control" id="Date1" placeholder="123">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="form-label" for="Time1">Time</label>
                                <input type="time" class="form-control" id="Time1" placeholder="123">
                            </div>
                        </div>
                        <div class="col-12">
                            <h5>To Date</h5>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="form-label" for="Date2">Date</label>
                                <input type="date" class="form-control" id="Date2" placeholder="123">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="form-label" for="Time2">Time</label>
                                <input type="time" class="form-control" id="Time2" placeholder="123">
                            </div>
                        </div>
                        <div class="col-12">
                            <h5>Reason</h5>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label" for="Reason">Reason</label>
                                <textarea class="form-control" id="Reason" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn-primary">Submit</button>
                            <button class="btn btn-danger">Clear</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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
