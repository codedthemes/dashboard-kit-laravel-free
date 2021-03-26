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
                            <h5 class="m-b-10">Department</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Hospital</a></li>
                            <li class="breadcrumb-item">Department</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- customar project  start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">

                            </div>
                            <div class="col-sm-6 text-end">
                                <button class="btn btn-success btn-sm btn-round mb-3" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-plus"></i> Add Department</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Icon</th>
                                        <th>Name</th>
                                        <th width="50%">Description</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="assets/images/ticket/p1.jpg">
                                        </td>
                                        <td>Anesthetics</td>
                                        <td>There are many variations of passages of Lorem Ipsum ...</td>
                                        <td>
                                            <a href="#!" class="btn btn-primary btn-sm"><i class="feather icon-plus"></i>Manage Facilities</a>
                                            <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/ticket/p3.jpg">
                                        </td>
                                        <td>Cardiology</td>
                                        <td>There are many variations of passages of Lorem Ipsum ...</td>
                                        <td>
                                            <a href="#!" class="btn btn-primary btn-sm"><i class="feather icon-plus"></i>Manage Facilities</a>
                                            <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/ticket/p2.jpg">
                                        </td>
                                        <td>Gastroenterology</td>
                                        <td>There are many variations of passages of Lorem Ipsum ...</td>
                                        <td>
                                            <a href="#!" class="btn btn-primary btn-sm"><i class="feather icon-plus"></i>Manage Facilities</a>
                                            <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/ticket/p4.jpg">
                                        </td>
                                        <td>Anesthetics</td>
                                        <td>There are many variations of passages of Lorem Ipsum ...</td>
                                        <td>
                                            <a href="#!" class="btn btn-primary btn-sm"><i class="feather icon-plus"></i>Manage Facilities</a>
                                            <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/ticket/p5.jpg">
                                        </td>
                                        <td>Gastroenterology</td>
                                        <td>There are many variations of passages of Lorem Ipsum ...</td>
                                        <td>
                                            <a href="#!" class="btn btn-primary btn-sm"><i class="feather icon-plus"></i>Manage Facilities</a>
                                            <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customar project  end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Department</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="Name">Name</label>
                                <input type="text" class="form-control" id="Name" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="form-label" for="Icon">Icon</label>
                                <input type="file" class="form-control" id="Icon" placeholder="sdf">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label" for="Description">Description</label>
                                <textarea class="form-control" id="Description" rows="3"></textarea>
                            </div>
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
<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>
<script>
    // DataTable start
    $('#report-table').DataTable();
    // DataTable end
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
