<!DOCTYPE html>
<html lang="en">

<head>
    @@include('./layouts/head.html')
    <!-- prism css -->
    <link rel="stylesheet" href="assets/css/plugins/prism-coy.css">
    <!-- ekko-lightbox css -->
    <link rel="stylesheet" href="assets/css/plugins/ekko-lightbox.css">
    <link rel="stylesheet" href="assets/css/plugins/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/plugins/trumbowyg.min.css">
    @@include('./layouts/head-bottom-link.html')
</head>
@@include('layouts/layout-vertical.html')
<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Customers</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Helpdesk</a></li>
                            <li class="breadcrumb-item">Customers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-none">
                    <div class="card-header">
                        <h5>Customers</h5>
                        <div class="card-header-right">
                            <button type="button" class="btn btn-light-warning m-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                New Customer
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><i data-feather="user" class="icon-svg-primary wid-20 me-2"></i>Add Customer</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body ">
                                                <small id="emailHelp" class="form-text text-muted mb-2 mt-0">We'll never share your email with anyone else.</small>
                                                <div class="form-group">
                                                    <label class="form-label">First Name</label>
                                                    <input type="email" class="form-control" id="fname" aria-describedby="emailHelp" placeholder="Enter email">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Last Name</label>
                                                    <input type="email" class="form-control" id="lname" aria-describedby="emailHelp" placeholder="Enter email">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Email address</label>
                                                    <input type="email" class="form-control" id="emial" aria-describedby="emailHelp" placeholder="Enter email">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Password</label>
                                                    <input type="password" class="form-control" id="passwd" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Confirm Password</label>
                                                    <input type="password" class="form-control" id="cnpasswd" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-light-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body shadow border-0">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0">Email</th>
                                        <th class="border-top-0">Account</th>
                                        <th class="border-top-0">Last Login</th>
                                        <th class="border-top-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mark Jason</td>
                                        <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                                        <td>N/A</td>
                                        <td>January 01,2019 at 03:35 PM</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                                            <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Alice Nicol</td>
                                        <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                                        <td>N/A</td>
                                        <td>January 01,2019 at 03:35 PM</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                                            <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Harry Cook</td>
                                        <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                                        <td>N/A</td>
                                        <td>January 01,2019 at 03:35 PM</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                                            <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tom Hannry</td>
                                        <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                                        <td>N/A</td>
                                        <td>January 01,2019 at 03:35 PM</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                                            <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Martin Frank</td>
                                        <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                                        <td>N/A</td>
                                        <td>January 01,2019 at 03:35 PM</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                                            <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Endrew Khan</td>
                                        <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                                        <td>N/A</td>
                                        <td>January 01,2019 at 03:35 PM</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                                            <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Chritina Methewv</td>
                                        <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                                        <td>N/A</td>
                                        <td>January 01,2019 at 03:35 PM</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                                            <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jakson Pit</td>
                                        <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                                        <td>N/A</td>
                                        <td>January 01,2019 at 03:35 PM</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                                            <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nikolas Jons</td>
                                        <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                                        <td>N/A</td>
                                        <td>January 01,2019 at 03:35 PM</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                                            <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nik Cage</td>
                                        <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                                        <td>N/A</td>
                                        <td>January 01,2019 at 03:35 PM</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                                            <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="pagination-block text-center">
                                <nav aria-label="Page navigation example" class="d-inline-block">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
@@include('./layouts/footer.html')
<!-- Apex Chart -->
<!-- trumbowyg editor -->
<!-- prism Js -->
<script src="assets/js/plugins/prism.js"></script>
<!-- Lightbox Js -->
<script src="assets/js/plugins/ekko-lightbox.min.js"></script>
<script src="assets/js/plugins/lightbox.min.js"></script>
<script src="assets/js/pages/ac-lightbox.js"></script>
@@include('./layouts/footer-bottom-link.html')
</body>

</html>
