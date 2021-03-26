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
                            <h5 class="m-b-10">Order</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">E-Commerce</a></li>
                            <li class="breadcrumb-item">Order</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- customar project  start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body border-bottom py-3">
                        <div class="row align-items-center justify-contact-between">
                            <div class="col">
                                <h5 class="m-0"><i class="material-icons-two-tone f-20 text-primary">bookmarks</i>Order ID : 28246249364</h5>
                            </div>
                            <div class="col text-end">
                                <button class="btn btn-light-primary btn-sm">
                                    <i class="feather icon-map-pin"></i> track
                                </button>
                            </div>
                        </div>
                    </div>
                    <a href="#!" class="card-body border-bottom py-3">
                        <div class="row justify-content-sm-between align-items-center">
                            <div class="col-sm-5 mb-3 mb-sm-0 align-middle">
                                <img src="assets/images/product/e-comm-1.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="60" />
                                <div class="m-0 d-inline-block align-middle font-16">
                                    <h6 class="d-inline-block m-0 text-truncate">Fit-Man Slip Sneakers</h6>
                                    <br />
                                    <p class="m-0 f-12 text-muted"><span class="f-w-500">Size: </span> Free Size</p>
                                    <p class="m-0 f-12 text-muted"><span class="f-w-500">Seller: </span> PIRASO</p>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <h5 class="mb-3 mb-sm-0"><i class="material-icons-two-tone f-20 text-primary">account_balance_wallet</i> $123.95</h5>
                            </div>
                            <div class="col-sm-5">
                                <div class="row align-items-center">
                                    <div class="col-sm-4">
                                        <span class="text-warning feather icon-star-on"></span>
                                        <span class="text-warning feather icon-star-on"></span>
                                        <span class="text-warning feather icon-star-on"></span>
                                        <span class="text-warning feather icon-star-on"></span>
                                        <span class="text-warning feather icon-star-on"></span>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class=" d-inline-block">
                                            <h6 class="my-0"><i class="fas fa-circle text-success f-10 align-middle"></i> Delivered on Mon, Oct 16th 2018</h6>
                                            <small class="text-muted">Your item has been delivered</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#!" class="card-body border-bottom py-3">
                        <div class="row justify-content-sm-between align-items-center">
                            <div class="col-sm-5 mb-3 mb-sm-0 align-middle">
                                <img src="assets/images/product/e-comm-2.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="60" />
                                <div class="m-0 d-inline-block align-middle font-16">
                                    <h6 class="d-inline-block m-0 text-truncate">Slip On Sneakers For Men</h6>
                                    <br />
                                    <p class="m-0 f-12 text-muted"><span class="f-w-500">Size: </span> Free Size</p>
                                    <p class="m-0 f-12 text-muted"><span class="f-w-500">Seller: </span> PIRASO</p>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <h5 class="mb-3 mb-sm-0"><i class="material-icons-two-tone f-20 text-primary">account_balance_wallet</i> $167.46</h5>
                            </div>
                            <div class="col-sm-5">
                                <div class="row align-items-center">
                                    <div class="col-sm-4">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class=" d-inline-block">
                                            <h6 class="my-0"><i class="far fa-circle text-success f-10 align-middle"></i> Delivery expected by Wed, Oct 21</h6>
                                            <small class="text-muted">Your item has been shipped.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#!" class="card-body border-bottom py-3">
                        <div class="row justify-content-sm-between align-items-center">
                            <div class="col-sm-5 mb-3 mb-sm-0 align-middle">
                                <img src="assets/images/product/e-comm-3.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="60" />
                                <div class="m-0 d-inline-block align-middle font-16">
                                    <h6 class="d-inline-block m-0 text-truncate">Casual Shoes For Men</h6>
                                    <br />
                                    <p class="m-0 f-12 text-muted"><span class="f-w-500">Size: </span> Free Size</p>
                                    <p class="m-0 f-12 text-muted"><span class="f-w-500">Seller: </span> PIRASO</p>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <h5 class="mb-3 mb-sm-0"><i class="material-icons-two-tone f-20 text-primary">account_balance_wallet</i> $234.83</h5>
                            </div>
                            <div class="col-sm-5">
                                <div class="row align-items-center">
                                    <div class="col-sm-4">
                                        <span class="text-warning feather icon-star-on"></span>
                                        <span class="text-warning feather icon-star-on"></span>
                                        <span class="text-black-50 feather icon-star-on"></span>
                                        <span class="text-black-50 feather icon-star-on"></span>
                                        <span class="text-black-50 feather icon-star-on"></span>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class=" d-inline-block">
                                            <h6 class="my-0"><i class="fas fa-circle text-danger f-10 align-middle"></i> Cancelled</h6>
                                            <small class="text-muted">Shipment is cancelled</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#!" class="card-body py-3">
                        <div class="row justify-content-sm-between align-items-center">
                            <div class="col-sm-5 mb-3 mb-sm-0 align-middle">
                                <img src="assets/images/product/e-comm-4.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="60" />
                                <div class="m-0 d-inline-block align-middle font-16">
                                    <h6 class="d-inline-block m-0 text-truncate">Oxygen Running Shoes</h6>
                                    <br />
                                    <p class="m-0 f-12 text-muted"><span class="f-w-500">Size: </span> Free Size</p>
                                    <p class="m-0 f-12 text-muted"><span class="f-w-500">Seller: </span> PIRASO</p>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <h5 class="mb-3 mb-sm-0"><i class="material-icons-two-tone f-20 text-primary">account_balance_wallet</i> $434.00</h5>
                            </div>
                            <div class="col-sm-5">
                                <div class="row align-items-center">
                                    <div class="col-sm-4">
                                        <span class="text-warning feather icon-star-on"></span>
                                        <span class="text-black-50 feather icon-star-on"></span>
                                        <span class="text-black-50 feather icon-star-on"></span>
                                        <span class="text-black-50 feather icon-star-on"></span>
                                        <span class="text-black-50 feather icon-star-on"></span>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class=" d-inline-block">
                                            <h6 class="my-0"><i class="fas fa-circle text-warning f-10 align-middle"></i> Return requested</h6>
                                            <small class="text-muted">Shipment is cancelled</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <div class="card-body border-bottom py-3">
                        <div class="row align-items-center justify-contact-between">
                            <div class="col">
                                <h5 class="m-0"><i class="material-icons-two-tone f-20 text-primary">bookmarks</i>Order ID : 28246249364</h5>
                            </div>
                            <div class="col text-end">
                                <button class="btn btn-light-primary btn-sm">
                                    <i class="feather icon-map-pin"></i> track
                                </button>
                            </div>
                        </div>
                    </div>
                    <a href="#!" class="card-body border-bottom py-3">
                        <div class="row justify-content-sm-between align-items-center">
                            <div class="col-sm-5 mb-3 mb-sm-0 align-middle">
                                <img src="assets/images/product/e-comm-1.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="60" />
                                <div class="m-0 d-inline-block align-middle font-16">
                                    <h6 class="d-inline-block m-0 text-truncate">Fit-Man Slip Sneakers</h6>
                                    <br />
                                    <p class="m-0 f-12 text-muted"><span class="f-w-500">Size: </span> Free Size</p>
                                    <p class="m-0 f-12 text-muted"><span class="f-w-500">Seller: </span> PIRASO</p>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <h5 class="mb-3 mb-sm-0"><i class="material-icons-two-tone f-20 text-primary">account_balance_wallet</i> $123.95</h5>
                            </div>
                            <div class="col-sm-5">
                                <div class="row align-items-center">
                                    <div class="col-sm-4">
                                        <span class="text-warning feather icon-star-on"></span>
                                        <span class="text-warning feather icon-star-on"></span>
                                        <span class="text-warning feather icon-star-on"></span>
                                        <span class="text-warning feather icon-star-on"></span>
                                        <span class="text-warning feather icon-star-on"></span>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class=" d-inline-block">
                                            <h6 class="my-0"><i class="fas fa-circle text-success f-10 align-middle"></i> Delivered on Mon, Oct 16th 2018</h6>
                                            <small class="text-muted">Your item has been delivered</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <div class="card-body border-bottom py-3">
                        <div class="row align-items-center justify-contact-between">
                            <div class="col">
                                <h5 class="m-0"><i class="material-icons-two-tone f-20 text-primary">bookmarks</i>Order ID : 28246249364</h5>
                            </div>
                            <div class="col text-end">
                                <button class="btn btn-light-primary btn-sm">
                                    <i class="feather icon-map-pin"></i> track
                                </button>
                            </div>
                        </div>
                    </div>
                    <a href="#!" class="card-body border-bottom py-3">
                        <div class="row justify-content-sm-between align-items-center">
                            <div class="col-sm-5 mb-3 mb-sm-0 align-middle">
                                <img src="assets/images/product/e-comm-1.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="60" />
                                <div class="m-0 d-inline-block align-middle font-16">
                                    <h6 class="d-inline-block m-0 text-truncate">Fit-Man Slip Sneakers</h6>
                                    <br />
                                    <p class="m-0 f-12 text-muted"><span class="f-w-500">Size: </span> Free Size</p>
                                    <p class="m-0 f-12 text-muted"><span class="f-w-500">Seller: </span> PIRASO</p>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <h5 class="mb-3 mb-sm-0"><i class="material-icons-two-tone f-20 text-primary">account_balance_wallet</i> $123.95</h5>
                            </div>
                            <div class="col-sm-5">
                                <div class="row align-items-center">
                                    <div class="col-sm-4">
                                        <span class="text-warning feather icon-star-on"></span>
                                        <span class="text-warning feather icon-star-on"></span>
                                        <span class="text-warning feather icon-star-on"></span>
                                        <span class="text-warning feather icon-star-on"></span>
                                        <span class="text-warning feather icon-star-on"></span>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class=" d-inline-block">
                                            <h6 class="my-0"><i class="fas fa-circle text-success f-10 align-middle"></i> Delivered on Mon, Oct 16th 2018</h6>
                                            <small class="text-muted">Your item has been delivered</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#!" class="card-body border-bottom py-3">
                        <div class="row justify-content-sm-between align-items-center">
                            <div class="col-sm-5 mb-3 mb-sm-0 align-middle">
                                <img src="assets/images/product/e-comm-2.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="60" />
                                <div class="m-0 d-inline-block align-middle font-16">
                                    <h6 class="d-inline-block m-0 text-truncate">Slip On Sneakers For Men</h6>
                                    <br />
                                    <p class="m-0 f-12 text-muted"><span class="f-w-500">Size: </span> Free Size</p>
                                    <p class="m-0 f-12 text-muted"><span class="f-w-500">Seller: </span> PIRASO</p>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <h5 class="mb-3 mb-sm-0"><i class="material-icons-two-tone f-20 text-primary">account_balance_wallet</i> $167.46</h5>
                            </div>
                            <div class="col-sm-5">
                                <div class="row align-items-center">
                                    <div class="col-sm-4">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class=" d-inline-block">
                                            <h6 class="my-0"><i class="far fa-circle text-success f-10 align-middle"></i> Delivery expected by Wed, Oct 21</h6>
                                            <small class="text-muted">Your item has been shipped.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#!" class="card-body py-3">
                        <div class="row justify-content-sm-between align-items-center">
                            <div class="col-sm-5 mb-3 mb-sm-0 align-middle">
                                <img src="assets/images/product/e-comm-4.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="60" />
                                <div class="m-0 d-inline-block align-middle font-16">
                                    <h6 class="d-inline-block m-0 text-truncate">Oxygen Running Shoes</h6>
                                    <br />
                                    <p class="m-0 f-12 text-muted"><span class="f-w-500">Size: </span> Free Size</p>
                                    <p class="m-0 f-12 text-muted"><span class="f-w-500">Seller: </span> PIRASO</p>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <h5 class="mb-3 mb-sm-0"><i class="material-icons-two-tone f-20 text-primary">account_balance_wallet</i> $434.00</h5>
                            </div>
                            <div class="col-sm-5">
                                <div class="row align-items-center">
                                    <div class="col-sm-4">
                                        <span class="text-warning feather icon-star-on"></span>
                                        <span class="text-black-50 feather icon-star-on"></span>
                                        <span class="text-black-50 feather icon-star-on"></span>
                                        <span class="text-black-50 feather icon-star-on"></span>
                                        <span class="text-black-50 feather icon-star-on"></span>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class=" d-inline-block">
                                            <h6 class="my-0"><i class="fas fa-circle text-warning f-10 align-middle"></i> Return requested</h6>
                                            <small class="text-muted">Shipment is cancelled</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <div class="card-body border-bottom py-3">
                        <div class="row align-items-center justify-contact-between">
                            <div class="col">
                                <h5 class="m-0"><i class="material-icons-two-tone f-20 text-primary">bookmarks</i>Order ID : 28246249364</h5>
                            </div>
                            <div class="col text-end">
                                <button class="btn btn-light-primary btn-sm">
                                    <i class="feather icon-map-pin"></i> track
                                </button>
                            </div>
                        </div>
                    </div>
                    <a href="#!" class="card-body border-bottom py-3">
                        <div class="row justify-content-sm-between align-items-center">
                            <div class="col-sm-5 mb-3 mb-sm-0 align-middle">
                                <img src="assets/images/product/e-comm-1.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="60" />
                                <div class="m-0 d-inline-block align-middle font-16">
                                    <h6 class="d-inline-block m-0 text-truncate">Fit-Man Slip Sneakers</h6>
                                    <br />
                                    <p class="m-0 f-12 text-muted"><span class="f-w-500">Size: </span> Free Size</p>
                                    <p class="m-0 f-12 text-muted"><span class="f-w-500">Seller: </span> PIRASO</p>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <h5 class="mb-3 mb-sm-0"><i class="material-icons-two-tone f-20 text-primary">account_balance_wallet</i> $123.95</h5>
                            </div>
                            <div class="col-sm-5">
                                <div class="row align-items-center">
                                    <div class="col-sm-4">
                                        <span class="text-warning feather icon-star-on"></span>
                                        <span class="text-warning feather icon-star-on"></span>
                                        <span class="text-warning feather icon-star-on"></span>
                                        <span class="text-warning feather icon-star-on"></span>
                                        <span class="text-warning feather icon-star-on"></span>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class=" d-inline-block">
                                            <h6 class="my-0"><i class="fas fa-circle text-success f-10 align-middle"></i> Delivered on Mon, Oct 16th 2018</h6>
                                            <small class="text-muted">Your item has been delivered</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#!" class="card-body py-3">
                        <div class="row justify-content-sm-between align-items-center">
                            <div class="col-sm-5 mb-3 mb-sm-0 align-middle">
                                <img src="assets/images/product/e-comm-4.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="60" />
                                <div class="m-0 d-inline-block align-middle font-16">
                                    <h6 class="d-inline-block m-0 text-truncate">Oxygen Running Shoes</h6>
                                    <br />
                                    <p class="m-0 f-12 text-muted"><span class="f-w-500">Size: </span> Free Size</p>
                                    <p class="m-0 f-12 text-muted"><span class="f-w-500">Seller: </span> PIRASO</p>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <h5 class="mb-3 mb-sm-0"><i class="material-icons-two-tone f-20 text-primary">account_balance_wallet</i> $434.00</h5>
                            </div>
                            <div class="col-sm-5">
                                <div class="row align-items-center">
                                    <div class="col-sm-4">
                                        <span class="text-warning feather icon-star-on"></span>
                                        <span class="text-black-50 feather icon-star-on"></span>
                                        <span class="text-black-50 feather icon-star-on"></span>
                                        <span class="text-black-50 feather icon-star-on"></span>
                                        <span class="text-black-50 feather icon-star-on"></span>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class=" d-inline-block">
                                            <h6 class="my-0"><i class="fas fa-circle text-warning f-10 align-middle"></i> Return requested</h6>
                                            <small class="text-muted">Shipment is cancelled</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="text-center my-4">
                    <button class="btn btn-light-primary px-sm-5">Show Older Orders</button>
                </div>
            </div>
            <!-- customar project  end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<!-- [ Main Content ] end -->
@include('html.layouts.footer')
@include('html.layouts.footer-bottom-link')
</body>

</html>
