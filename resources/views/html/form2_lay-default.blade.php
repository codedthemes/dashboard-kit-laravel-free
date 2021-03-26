<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
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
                            <h5 class="m-b-10">Default Forms</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Layouts</a></li>
                            <li class="breadcrumb-item">Default Forms</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Simple Form Layout</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label class="form-label">Name:</label>
                                <input type="email" class="form-control" placeholder="Enter full name">
                                <small class="form-text text-muted">Please enter your full name</small>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email:</label>
                                <input type="email" class="form-control" placeholder="Enter email">
                                <small class="form-text text-muted">Please enter your Email</small>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="enter Password">
                            </div>
                            <div class="form-group">
                                <label class="form-label">language:</label>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckinl1" checked>
                                    <label class="form-check-label" for="customCheckinl1">English</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckinl2">
                                    <label class="form-check-label" for="customCheckinl2">French</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckinl3">
                                    <label class="form-check-label" for="customCheckinl3">Dutch</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Control Divider</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label class="form-label">Name:</label>
                                <input type="email" class="form-control" placeholder="Enter full name">
                                <small class="form-text text-muted">Please enter your full name</small>
                            </div>
                            <hr class="my-4">
                            <div class="form-group">
                                <label class="form-label">Email:</label>
                                <input type="email" class="form-control" placeholder="Enter email">
                                <small class="form-text text-muted">Please enter your Email</small>
                            </div>
                            <hr class="my-4">
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="enter Password">
                            </div>
                            <hr class="my-4">
                            <div class="form-group">
                                <label class="form-label">language:</label>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckinl21" checked>
                                    <label class="form-check-label" for="customCheckinl21">English</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckinl22">
                                    <label class="form-check-label" for="customCheckinl22">French</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckinl23">
                                    <label class="form-check-label" for="customCheckinl23">Dutch</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Horizontal Form Layout</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <h5 class="mb-3">A. Personal Info:</h5>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Name:</label>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" placeholder="Enter full name">
                                    <small class="form-text text-muted">Please enter your full name</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Email:</label>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" placeholder="Enter email">
                                    <small class="form-text text-muted">Please enter your Email</small>
                                </div>
                            </div>
                            <h5 class="mb-3">B. Educational Info:</h5>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Degree Name:</label>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" placeholder="Enter full name">
                                    <small class="form-text text-muted">Please enter your Final Degree</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Passing Year</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" placeholder="Enter Passing Year">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">language:</label>
                                <div class="col-lg-6">
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input input-primary" id="customCheckinl31" checked>
                                        <label class="form-check-label" for="customCheckinl31">English</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input input-primary" id="customCheckinl32">
                                        <label class="form-check-label" for="customCheckinl32">French</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input input-primary" id="customCheckinl33">
                                        <label class="form-check-label" for="customCheckinl33">Dutch</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Input Label Aligment</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <h5 class="mb-3">A. Personal Info:</h5>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label text-lg-end">Name:</label>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" placeholder="Enter full name">
                                    <small class="form-text text-muted">Please enter your full name</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label text-lg-end">Email:</label>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" placeholder="Enter email">
                                    <small class="form-text text-muted">Please enter your Email</small>
                                </div>
                            </div>
                            <hr class="my-4">
                            <h5 class="mb-3">B. Educational Info:</h5>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label text-lg-end">Degree Name:</label>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" placeholder="Enter full name">
                                    <small class="form-text text-muted">Please enter your Final Degree</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label text-lg-end">Passing Year</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" placeholder="Enter Passing Year">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label text-lg-end">language:</label>
                                <div class="col-lg-6">
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input input-primary" id="customCheckinl31" checked>
                                        <label class="form-check-label" for="customCheckinl31">English</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input input-primary" id="customCheckinl32">
                                        <label class="form-check-label" for="customCheckinl32">French</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input input-primary" id="customCheckinl33">
                                        <label class="form-check-label" for="customCheckinl33">Dutch</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</section>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
@include('html.layouts.footer-bottom-link')</body>

</html>
