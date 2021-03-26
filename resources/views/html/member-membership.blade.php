<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
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
                            <h5 class="m-b-10">Membership</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Membership</a></li>
                            <li class="breadcrumb-item">Membership</li>
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
                        <img src="assets/images/pages/medal-trial.svg" alt="" class="img-fluid w-50">
                        <h4 class="mt-3">$1.99 Trial</h4>
                        <p class="mb-2">This is 2 days membership</p>
                        <p><span class="badge bg-primary">16 Sales</span> </p>
                        <hr>
                        <button type="button" class="btn btn-icon btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-edit-2"></i></button>
                        <button type="button" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="assets/images/pages/medal-bronze.svg" alt="" class="img-fluid w-50">
                        <h4 class="mt-3">$2.99 BRONZE</h4>
                        <p class="mb-2">This is 30 days basic membership</p>
                        <p><span class="badge bg-primary">29 Sales</span> </p>
                        <hr>
                        <button type="button" class="btn btn-icon btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-edit-2"></i></button>
                        <button type="button" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="assets/images/pages/medal-gold.svg" alt="" class="img-fluid w-50">
                        <h4 class="mt-3">$6.99 GOLD</h4>
                        <p class="mb-2">This is 90 days basic membership</p>
                        <p><span class="badge bg-primary">26 Sales</span> </p>
                        <hr>
                        <button type="button" class="btn btn-icon btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-edit-2"></i></button>
                        <button type="button" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="assets/images/pages/medal-platinum.svg" alt="" class="img-fluid w-50">
                        <h4 class="mt-3">$149.99 PLATINUM</h4>
                        <p class="mb-2">Platinum Yearly Subscription</p>
                        <p><span class="badge bg-primary">29 Sales</span> </p>
                        <hr>
                        <button type="button" class="btn btn-icon btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-edit-2"></i></button>
                        <button type="button" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="assets/images/pages/medal-silver.svg" alt="" class="img-fluid w-50">
                        <h4 class="mt-3">$1.99 SILVER</h4>
                        <p class="mb-2">This is 7 days basic membership</p>
                        <p><span class="badge bg-primary">0 Sales</span> </p>
                        <hr>
                        <button type="button" class="btn btn-icon btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-edit-2"></i></button>
                        <button type="button" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 text-center mb-4">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-plus"></i>New Membership</button>
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
                <h5 class="modal-title">Membership</h5>
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
                            <label class="form-label" for="Price"><small class="text-danger">* </small>Membership Price</label>
                            <input type="text" class="form-control" id="Price" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label" for="Period"><small class="text-danger">* </small>Membership Period</label>
                            <input type="text" class="form-control" id="Period" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group fill">
                            <label class="form-label" for="Icon">Membership Image</label>
                            <input type="file" class="form-control" id="Icon" placeholder="sdf">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="customswitch1" checked>
                            <label class="form-check-label" for="customswitch1">Private Membership</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="customswitch2" >
                            <label class="form-check-label" for="customswitch2">Recurring Payment</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="customswitch3" >
                            <label class="form-check-label" for="customswitch3">Published</label>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="Description">Description</label>
                            <textarea class="form-control" id="Description" rows="3" spellcheck="false"></textarea>
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
@include('html.layouts.footer')
<script>

</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
