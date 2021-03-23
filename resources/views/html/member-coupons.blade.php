<!DOCTYPE html>
<html lang="en">

<head>
    @@include('./layouts/head.html')
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
                            <h5 class="m-b-10">Coupons</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Membership</a></li>
                            <li class="breadcrumb-item">Coupons</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row justify-content-center">
            <!-- liveline-section start -->
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="assets/images/pages/gift-card.svg" alt="" class="img-fluid w-50">
                        <h5 class="mt-3">10% off</h5>
                        <hr>
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6 ">
                                <button type="button" class="btn  btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></button>
                            </div>
                            <div class="col-sm-6 text-end">
                                <div class="form-check d-inline-block">
                                    <input class="form-check-input" type="checkbox" value="" checked id="customSwitch1">
                                    <label class="form-check-label" for="customSwitch1">Active</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="assets/images/pages/coupon.svg" alt="" class="img-fluid w-50">
                        <h5 class="mt-3">10% off</h5>
                        <hr>
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6 ">
                                <button type="button" class="btn  btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></button>
                            </div>
                            <div class="col-sm-6 text-end">
                                <div class="form-check d-inline-block">
                                    <input class="form-check-input" type="checkbox" value="" checked id="customSwitch2">
                                    <label class="form-check-label" for="customSwitch2">Active</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="assets/images/pages/coupon1.svg" alt="" class="img-fluid w-50">
                        <h5 class="mt-3">10% off</h5>
                        <hr>
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6 ">
                                <button type="button" class="btn  btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></button>
                            </div>
                            <div class="col-sm-6 text-end">
                                <div class="form-check d-inline-block">
                                    <input class="form-check-input" type="checkbox" value="" checked id="customSwitch3">
                                    <label class="form-check-label" for="customSwitch3">Active</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="assets/images/pages/voucher.svg" alt="" class="img-fluid w-50">
                        <h5 class="mt-3">10% off</h5>
                        <hr>
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6 ">
                                <button type="button" class="btn  btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></button>
                            </div>
                            <div class="col-sm-6 text-end">
                                <div class="form-check d-inline-block">
                                    <input class="form-check-input" type="checkbox" value="" checked id="customSwitch4">
                                    <label class="form-check-label" for="customSwitch4">Active</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="assets/images/pages/discount.svg" alt="" class="img-fluid w-50">
                        <h5 class="mt-3">10% off</h5>
                        <hr>
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6 ">
                                <button type="button" class="btn  btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></button>
                            </div>
                            <div class="col-sm-6 text-end">
                                <div class="form-check d-inline-block">
                                    <input class="form-check-input" type="checkbox" value="" checked id="customSwitch5">
                                    <label class="form-check-label" for="customSwitch5">Active</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 text-center mb-4">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-plus"></i>New Coupon</button>
            </div>
            <!-- liveline-section end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit email template</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label" for="Name"><small class="text-danger">* </small>Name</label>
                            <input type="text" class="form-control" id="Name" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label" for="Code"><small class="text-danger">* </small>Coupon Code</label>
                            <input type="text" class="form-control" id="Code" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label" for="Apply"><small class="text-danger">* </small>Apply to memberships</label>
                            <select class="form-control" id="Apply">
                                <option value=""></option>
                                <option value="2">Bronze</option>
                                <option value="3">Gold</option>
                                <option value="4">Platinum</option>
                                <option value="5">Silver</option>
                                <option value="1">Trial</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label" for="Discount">Discount Amount</label>
                            <input type="text" class="form-control" id="Discount" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label class="d-block mb-2">Published</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pubradio" id="customRadioInline1" value="option1">
                            <label class="form-check-label" for="customRadioInline1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pubradio" id="customRadioInline2" value="option2">
                            <label class="form-check-label" for="customRadioInline2">No</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary"> Save </button>
                <button class="btn btn-danger"> Clear </button>
            </div>
        </div>
    </div>
</div>

<!-- [ Main Content ] end -->
@@include('./layouts/footer.html')
<script>

</script>
@@include('./layouts/footer-bottom-link.html')
</body>

</html>
