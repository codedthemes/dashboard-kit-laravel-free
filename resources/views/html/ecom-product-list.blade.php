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
                            <h5 class="m-b-10">Product</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">E-Commerce</a></li>
                            <li class="breadcrumb-item">Product</li>
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
                                <button class="btn btn-success btn-sm mb-3 btn-round" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-plus"></i> Product</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Category</th>
                                        <th>Added Date</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="assets/images/product/prod-1.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48" />
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="#!" class="text-body">Amazing Rolling Chair</a>
                                                <br />
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Office Chairs
                                        </td>
                                        <td class="align-middle">
                                            16/12/2019
                                        </td>
                                        <td class="align-middle">
                                            $597.66
                                        </td>
                                        <td class="align-middle">
                                            654
                                        </td>
                                        <td class="align-middle">
                                            <span class="badge bg-success">Active</span>
                                        </td>

                                        <td class="table-action">
                                            <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="assets/images/product/prod-2.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48" />
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="#!" class="text-body">Minicap Dining Chair</a>
                                                <br />
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star"></span>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Wooden Chairs
                                        </td>
                                        <td class="align-middle">
                                            28/01/2019
                                        </td>
                                        <td class="align-middle">
                                            $63.56
                                        </td>
                                        <td class="align-middle">
                                            236
                                        </td>
                                        <td class="align-middle">
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                        <td class="table-action">
                                            <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="assets/images/product/prod-3.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48" />
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="#!" class="text-body">Marvel T-shirts</a>
                                                <br />
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star"></span>
                                                <span class="text-warning feather icon-star"></span>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Man cloths
                                        </td>
                                        <td class="align-middle">
                                            08/23/2018
                                        </td>
                                        <td class="align-middle">
                                            $12.00
                                        </td>

                                        <td class="align-middle">
                                            234
                                        </td>
                                        <td class="align-middle">
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                        <td class="table-action">
                                            <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="assets/images/product/prod-4.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48" />
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="#!" class="text-body">Lonaval jacket</a>
                                                <br />
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Man cloths
                                        </td>
                                        <td class="align-middle">
                                            08/02/2018
                                        </td>
                                        <td class="align-middle">
                                            $49.54
                                        </td>
                                        <td class="align-middle">
                                            124
                                        </td>
                                        <td class="align-middle">
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                        <td class="table-action">
                                            <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="assets/images/product/prod-5.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48" />
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="#!" class="text-body">Goldyrose Kurta</a>
                                                <br />
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star"></span>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Woman cloths
                                        </td>
                                        <td class="align-middle">
                                            01/12/2018
                                        </td>
                                        <td class="align-middle">
                                            $58.57
                                        </td>

                                        <td class="align-middle">
                                            243
                                        </td>
                                        <td class="align-middle">
                                            <span class="badge bg-danger">Deactive</span>
                                        </td>
                                        <td class="table-action">
                                            <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="assets/images/product/prod-6.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48" />
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="#!" class="text-body">Zigzag shirts</a>
                                                <br />
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Man cloths
                                        </td>
                                        <td class="align-middle">
                                            12/04/2019
                                        </td>
                                        <td class="align-middle">
                                            $45.26
                                        </td>
                                        <td class="align-middle">
                                            350
                                        </td>
                                        <td class="align-middle">
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                        <td class="table-action">
                                            <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="assets/images/product/prod-7.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48" />
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="#!" class="text-body">Foxy Bag</a>
                                                <br />
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Woman cloths
                                        </td>
                                        <td class="align-middle">
                                            06/30/2018
                                        </td>
                                        <td class="align-middle">
                                            $76
                                        </td>

                                        <td class="align-middle">
                                            560
                                        </td>
                                        <td class="align-middle">
                                            <span class="badge bg-danger">Deactive</span>
                                        </td>
                                        <td class="table-action">
                                            <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="assets/images/product/prod-8.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48" />
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="#!" class="text-body">Bluffly bag</a>
                                                <br />
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star"></span>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Kids cloths
                                        </td>
                                        <td class="align-middle">
                                            06/13/2019
                                        </td>
                                        <td class="align-middle">
                                            $23
                                        </td>
                                        <td class="align-middle">
                                            758
                                        </td>
                                        <td class="align-middle">
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                        <td class="table-action">
                                            <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="assets/images/product/prod-9.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48" />
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="#!" class="text-body">Sonaminya Suits</a>
                                                <br />
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star"></span>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Woman cloths
                                        </td>
                                        <td class="align-middle">
                                            05/02/2019
                                        </td>
                                        <td class="align-middle">
                                            $54
                                        </td>
                                        <td class="align-middle">
                                            12
                                        </td>
                                        <td class="align-middle">
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                        <td class="table-action">
                                            <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="assets/images/product/prod-10.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48" />
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="#!" class="text-body">Offradys bag</a>
                                                <br />
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star"></span>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Travel bag
                                        </td>
                                        <td class="align-middle">
                                            04/09/2019
                                        </td>
                                        <td class="align-middle">
                                            $78.66
                                        </td>
                                        <td class="align-middle">
                                            12
                                        </td>
                                        <td class="align-middle">
                                            <span class="badge bg-danger">Deactive</span>
                                        </td>
                                        <td class="table-action">
                                            <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="assets/images/product/prod-11.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48" />
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="#!" class="text-body">Fostroad watch</a>
                                                <br />
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star"></span>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Man watch
                                        </td>
                                        <td class="align-middle">
                                            03/24/2019
                                        </td>
                                        <td class="align-middle">
                                            $5
                                        </td>
                                        <td class="align-middle">
                                            204
                                        </td>
                                        <td class="align-middle">
                                            <span class="badge bg-danger">Deactive</span>
                                        </td>
                                        <td class="table-action">
                                            <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="assets/images/product/prod-12.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48" />
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="#!" class="text-body">Chamiu lipstick</a>
                                                <br />
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star"></span>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Woman cloath
                                        </td>
                                        <td class="align-middle">
                                            09/05/2019
                                        </td>
                                        <td class="align-middle">
                                            $2.24
                                        </td>
                                        <td class="align-middle">
                                            541
                                        </td>
                                        <td class="align-middle">
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                        <td class="table-action">
                                            <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
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
                <h5 class="modal-title">Add Doctor</h5>
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
                            <div class="form-group">
                                <label class="form-label" for="Category">Category</label>
                                <select class="form-control" id="Category">
                                    <option value=""></option>
                                    <option value="1">Kids cloths</option>
                                    <option value="2">Man cloths</option>
                                    <option value="3">Man watch</option>
                                    <option value="3">Office Chairs</option>
                                    <option value="3">Travel bag</option>
                                    <option value="3">Woman cloath</option>
                                    <option value="3">Wooden Chairs</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="Price">Price</label>
                                <input type="text" class="form-control" id="Price" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="Quantity">Quantity</label>
                                <input type="text" class="form-control" id="Quantity" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="form-label" for="Icon">Profie Image</label>
                                <input type="file" class="form-control" id="Icon" placeholder="sdf">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                <label class="form-check-label" for="flexSwitchCheckChecked">Active</label>
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
    $('#report-table').DataTable({
        "lengthMenu": [
            [5, 10, 25, 50, -1],
            [5, 10, 25, 50, "All"]
        ]
    });
    // DataTable end
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
