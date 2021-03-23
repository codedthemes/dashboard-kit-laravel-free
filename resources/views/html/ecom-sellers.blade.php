<!DOCTYPE html>
<html lang="en">

<head>
    @@include('./layouts/head.html')
    <link rel="stylesheet" href="assets/css/plugins/dataTables.bootstrap4.min.css">
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
                            <h5 class="m-b-10">Sellers</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">E-Commerce</a></li>
                            <li class="breadcrumb-item">Sellers</li>
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
                                <button class="btn btn-success btn-sm mb-3 btn-round" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-plus"></i> Sellers</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Revenue</th>
                                        <th>Create Date</th>
                                        <th>Products</th>
                                        <th>Status</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="assets/images/user/avatar-2.jpg" class="img-fluid img-radius wid-40" alt="">
                                        </td>
                                        <td>Micheal Pewd</td>
                                        <td>patient@temp.com</td>
                                        <td>+984-9388638</td>
                                        <td>$451,45</td>
                                        <td>09/10/1990</td>
                                        <td>456</td>
                                        <td><span class="badge bg-danger">Disabled</span></td>
                                        <td>
                                            <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/user/avatar-3.jpg" class="img-fluid img-radius wid-40" alt="">
                                        </td>
                                        <td>Erich Mcbride</td>
                                        <td>xidim@temp.com</td>
                                        <td>+612-1385682</td>
                                        <td>$396,73</td>
                                        <td>09/10/1990</td>
                                        <td>354</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/user/avatar-3.jpg" class="img-fluid img-radius wid-40" alt="">
                                        </td>
                                        <td>Micheal Pewd</td>
                                        <td>patient@temp.com</td>
                                        <td>+984-9388638</td>
                                        <td>$451,45</td>
                                        <td>09/10/1990</td>
                                        <td>27</td>
                                        <td><span class="badge bg-danger">Disabled</span></td>
                                        <td>
                                            <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/user/avatar-5.jpg" class="img-fluid img-radius wid-40" alt="">
                                        </td>
                                        <td>Erich Mcbride</td>
                                        <td>xidim@temp.com</td>
                                        <td>+612-1385682</td>
                                        <td>$396,73</td>
                                        <td>09/10/1990</td>
                                        <td>54</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/user/avatar-1.jpg" class="img-fluid img-radius wid-40" alt="">
                                        </td>
                                        <td>Micheal Pewd</td>
                                        <td>patient@temp.com</td>
                                        <td>+984-9388638</td>
                                        <td>$451,45</td>
                                        <td>09/10/1990</td>
                                        <td>46</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/user/avatar-2.jpg" class="img-fluid img-radius wid-40" alt="">
                                        </td>
                                        <td>Micheal Pewd</td>
                                        <td>patient@temp.com</td>
                                        <td>+984-9388638</td>
                                        <td>$451,45</td>
                                        <td>09/10/1990</td>
                                        <td>257</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/user/avatar-3.jpg" class="img-fluid img-radius wid-40" alt="">
                                        </td>
                                        <td>Erich Mcbride</td>
                                        <td>xidim@temp.com</td>
                                        <td>+612-1385682</td>
                                        <td>$396,73</td>
                                        <td>09/10/1990</td>
                                        <td>73</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/user/avatar-3.jpg" class="img-fluid img-radius wid-40" alt="">
                                        </td>
                                        <td>Micheal Pewd</td>
                                        <td>patient@temp.com</td>
                                        <td>+984-9388638</td>
                                        <td>$451,45</td>
                                        <td>09/10/1990</td>
                                        <td>84</td>
                                        <td><span class="badge bg-danger">Disabled</span></td>
                                        <td>
                                            <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/user/avatar-5.jpg" class="img-fluid img-radius wid-40" alt="">
                                        </td>
                                        <td>Erich Mcbride</td>
                                        <td>xidim@temp.com</td>
                                        <td>+612-1385682</td>
                                        <td>$396,73</td>
                                        <td>09/10/1990</td>
                                        <td>246</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/user/avatar-1.jpg" class="img-fluid img-radius wid-40" alt="">
                                        </td>
                                        <td>Micheal Pewd</td>
                                        <td>patient@temp.com</td>
                                        <td>+984-9388638</td>
                                        <td>$451,45</td>
                                        <td>09/10/1990</td>
                                        <td>742</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/user/avatar-2.jpg" class="img-fluid img-radius wid-40" alt="">
                                        </td>
                                        <td>Micheal Pewd</td>
                                        <td>patient@temp.com</td>
                                        <td>+984-9388638</td>
                                        <td>$451,45</td>
                                        <td>09/10/1990</td>
                                        <td>765</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/user/avatar-3.jpg" class="img-fluid img-radius wid-40" alt="">
                                        </td>
                                        <td>Erich Mcbride</td>
                                        <td>xidim@temp.com</td>
                                        <td>+612-1385682</td>
                                        <td>$396,73</td>
                                        <td>09/10/1990</td>
                                        <td>345</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/user/avatar-3.jpg" class="img-fluid img-radius wid-40" alt="">
                                        </td>
                                        <td>Micheal Pewd</td>
                                        <td>patient@temp.com</td>
                                        <td>+984-9388638</td>
                                        <td>$451,45</td>
                                        <td>09/10/1990</td>
                                        <td>743</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/user/avatar-5.jpg" class="img-fluid img-radius wid-40" alt="">
                                        </td>
                                        <td>Erich Mcbride</td>
                                        <td>xidim@temp.com</td>
                                        <td>+612-1385682</td>
                                        <td>$396,73</td>
                                        <td>09/10/1990</td>
                                        <td>234</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/user/avatar-1.jpg" class="img-fluid img-radius wid-40" alt="">
                                        </td>
                                        <td>Micheal Pewd</td>
                                        <td>patient@temp.com</td>
                                        <td>+984-9388638</td>
                                        <td>$451,45</td>
                                        <td>09/10/1990</td>
                                        <td>624</td>
                                        <td><span class="badge bg-danger">Disabled</span></td>
                                        <td>
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
                <h5 class="modal-title">Add Sellers</h5>
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
                                <label class="form-label" for="Email">Email</label>
                                <input type="email" class="form-control" id="Email" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="form-label" for="Password">Password</label>
                                <input type="password" class="form-control" id="Password" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="Phone">Phone</label>
                                <input type="text" class="form-control" id="Phone" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label" for="Address">Address</label>
                                <textarea class="form-control" id="Address" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="Sex">Select Sex</label>
                                <select class="form-control" id="Sex">
                                    <option value=""></option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="form-label" for="Icon">Profie Image</label>
                                <input type="file" class="form-control" id="Icon" placeholder="sdf">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="form-label" for="Birth">Birth Date</label>
                                <input type="date" class="form-control" id="Birth" placeholder="123">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="Age">Age</label>
                                <input type="text" class="form-control" id="Age" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label" for="Blood">Select Blood Group</label>
                                <select class="form-control" id="Blood" placeholder="">
                                    <option value=""></option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
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
@@include('./layouts/footer.html')
<script src="assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>
<script>
    // DataTable start
    $('#report-table').DataTable();
    // DataTable end
</script>
@@include('./layouts/footer-bottom-link.html')
</body>

</html>
