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
                            <h5 class="m-b-10">Form Masking</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item">Form Masking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ date-form ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Date</h5>
                        <span class="d-block m-t-5">Add class of <code>.date</code> with <code>data-mask</code> attribute</span>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Insert Date 1</label>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" class="form-control date" data-mask="99/99/9999">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Insert Date 2</label>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" class="form-control date2" data-mask="99-99-9999">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ date-form ] end -->
            <!-- [ Time-form ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Time</h5>
                        <span class="d-block m-t-5">Add class of <code>.hour</code> with <code>data-mask</code> attribute</span>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Hour</label>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" class="form-control hour" data-mask="99:99:99">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Date & Hour</label>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" class="form-control dateHour" data-mask="99/99/9999 99:99:99">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ Time-form ] end -->
            <!-- [ phone-number ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Phone no.</h5>
                        <span class="d-block m-t-5">Add class of <code>.mob_no</code> with <code>data-mask</code> attribute</span>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Mobile No.</label>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" class="form-control mob_no" data-mask="9999-999-999">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Telephone</label>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" class="form-control phone" data-mask="9999-9999">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Tel. with Code Area</label>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" class="form-control telphone_with_code" data-mask="(99) 9999-9999">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">US Telephone</label>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" class="form-control us_telephone" data-mask="(999) 999-9999">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ phone-number ] end -->
            <!-- [ network ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Network</h5>
                        <span class="d-block m-t-5">Add class of <code>.ip</code> with <code>data-mask</code> attribute</span>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">IP Address</label>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" class="form-control ip" data-mask="999.999.999.999">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">IPV4</label>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" class="form-control ipv4" data-mask="99/99/9999 99:99:99">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">IPV6</label>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" class="form-control ipv6" data-mask="9999:9999:9999:9:999:9999:9999:9999">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ network ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- Input mask Js -->
<script src="assets/js/plugins/jquery.mask.min.js"></script>
<!-- form-picker-custom Js -->
<script src="assets/js/pages/form-masking-custom.js"></script>
@include('html.layouts.footer-bottom-link')
</body>
</html>
