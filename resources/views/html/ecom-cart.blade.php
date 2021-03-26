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
                            <h5 class="m-b-10">Shopping Cart</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">E-Commerce</a></li>
                            <li class="breadcrumb-item">Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body border-bottom py-3">
                        <div class="row align-items-center justify-contact-between">
                            <div class="col-auto">
                                <h5 class="m-0"><i class="material-icons-two-tone f-20 text-primary">shopping_cart</i>My Cart (3)</h5>
                            </div>
                            <div class="col text-end">
                                <div class="row align-items-center justify-contact-between">
                                    <div class="col-auto">
                                        <h6 class="m-0 w-auto"><i class="material-icons-two-tone f-18 text-primary">pin_drop</i>Deliver to :</h6>
                                    </div>
                                    <div class="col text-end">
                                        <div class="input-group input-group-sm mb-0 m-r-10">
                                            <input type="text" class="form-control"  placeholder="Enter pincode">
                                            <button class="btn btn-primary btn-sm">Check</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-bottom py-3">
                        <div class="row">
                            <div class="col-sm-7 mb-3 mb-sm-0">
                                <div class="row">
                                    <div class="col-auto pr-0 text-center">
                                        <img src="assets/images/product/e-comm-1.jpg" alt="contact-img" title="contact-img" class="rounded mb-2" height="60" /><br>
                                        <div class="btn-group btn-group-sm mb-2" role="group" aria-label="button groups sm">
                                            <button type="button" id="decrease" onclick="decreaseValue('number')" class="btn btn-secondary">-</button>
                                            <input class="wid-35 text-center" type="text" type="number" id="number" value="0" />
                                            <button type="button" id="increase" onclick="increaseValue('number')" class="btn btn-secondary">+</button>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h6 class="d-inline-block m-0 text-truncate">Fit-Man Slip Sneakers</h6>
                                        <br>
                                        <p class="m-0 f-12 text-muted"><span class="f-w-500">Size: </span> Free Size</p>
                                        <p class="mb-1 f-12 text-muted"><span class="f-w-500">Seller: </span> PIRASO</p>
                                        <h4 class="d-inline-block my-3"><i class="material-icons-two-tone f-22 text-primary">account_balance_wallet</i> $139.58 <del class="text-danger font-weight-normal h5"> <small>$322.53</small></del></h4><br>
                                        <a href="#!" class="text-uppercase link-dark f-w-500 mb-1">Save for later</a>
                                        <a href="#!" class="text-uppercase link-dark f-w-500 m-l-10 mb-1">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class=" d-inline-block">
                                    <div class="h6 my-0">Delivery by Sat Aug 17 | <span class="">$50</span></div>
                                    <small class="text-muted">10 Days Replacement Policy</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-bottom py-3">
                        <div class="row">
                            <div class="col-sm-7 mb-3 mb-sm-0">
                                <div class="row">
                                    <div class="col-auto pr-0 text-center">
                                        <img src="assets/images/product/e-comm-2.jpg" alt="contact-img" title="contact-img" class="rounded mb-2" height="60" /><br>
                                        <div class="btn-group btn-group-sm mb-2" role="group" aria-label="button groups sm">
                                            <button type="button" id="decrease" onclick="decreaseValue('number1')" class="btn btn-secondary">-</button>
                                            <input class="wid-35 text-center" type="text" type="number" id="number1" value="0" />
                                            <button type="button" id="increase" onclick="increaseValue('number1')" class="btn btn-secondary">+</button>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h6 class="d-inline-block m-0 text-truncate">Fit-Man Slip Sneakers</h6>
                                        <br>
                                        <p class="m-0 f-12 text-muted"><span class="f-w-500">Size: </span> Free Size</p>
                                        <p class="mb-1 f-12 text-muted"><span class="f-w-500">Seller: </span> PIRASO</p>
                                        <h4 class="d-inline-block my-3"><i class="material-icons-two-tone f-22 text-primary">account_balance_wallet</i> $139.58 <del class="text-danger font-weight-normal h5"> <small>$132.53</small></del></h4><br>
                                        <a href="#!" class="text-uppercase link-dark f-w-500 mb-1">Save for later</a>
                                        <a href="#!" class="text-uppercase link-dark f-w-500 m-l-10 mb-1">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class=" d-inline-block">
                                    <div class="h6 my-0">Delivery by Sat Aug 17 | <span class="text-success">FREE</span></div>
                                    <small class="text-muted">10 Days Replacement Policy</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-bottom py-3">
                        <div class="row">
                            <div class="col-sm-7 mb-3 mb-sm-0">
                                <div class="row">
                                    <div class="col-auto pr-0 text-center">
                                        <img src="assets/images/product/e-comm-3.jpg" alt="contact-img" title="contact-img" class="rounded mb-2" height="60" /><br>
                                        <div class="btn-group btn-group-sm mb-2" role="group" aria-label="button groups sm">
                                            <button type="button" id="decrease" onclick="decreaseValue('number2')" class="btn btn-secondary">-</button>
                                            <input class="wid-35 text-center" type="text" type="number" id="number2" value="0" />
                                            <button type="button" id="increase" onclick="increaseValue('number2')" class="btn btn-secondary">+</button>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h6 class="d-inline-block m-0 text-truncate">Fit-Man Slip Sneakers</h6>
                                        <br>
                                        <p class="m-0 f-12 text-muted"><span class="f-w-500">Size: </span> Free Size</p>
                                        <p class="mb-1 f-12 text-muted"><span class="f-w-500">Seller: </span> PIRASO</p>
                                        <h4 class="d-inline-block my-3"><i class="material-icons-two-tone f-22 text-primary">account_balance_wallet</i> $139.58 <del class="text-danger font-weight-normal h5"> <small>$205.00</small></del></h4><br>
                                        <a href="#!" class="text-uppercase link-dark f-w-500 mb-1">Save for later</a>
                                        <a href="#!" class="text-uppercase link-dark f-w-500 m-l-10 mb-1">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class=" d-inline-block">
                                    <div class="h6 my-0">Delivery by Sat Aug 17 | <span class="text-success">FREE</span> <small class="text-muted"><del>$12</del></small></div>
                                    <small class="text-muted">10 Days Replacement Policy</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-end py-3">
                        <button class="btn btn-light-warning px-sm-5 ">PLACE ORDER</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-uppercase">Price details</h5>
                    </div>
                    <div class="card-body border-bottom py-3">
                        <div class="mb-2">Price (3 item) <span class="float-end">$2,834</span></div>
                        <div class="">Delivery Charges <span class="float-end text-success">FREE</span></div>
                    </div>
                    <div class="card-body border-bottom py-3">
                        <div class="h6 m-0">Total Payable <span class="float-end">$2,834</span></div>
                    </div>
                    <div class="card-body py-3">
                        <div class="text-success h6 m-0">Your Total Saving on this order $3,165</div>
                    </div>
                </div>
                <div class="media">
                    <i class="fas fa-shield-alt h3 m-r-10 text-muted f-w-900"></i>
                    <div class="media-body">
                        <h6 class="mt-0 text-muted"> Safe and Secure Payments.Easy returns.100% Authentic products.</h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<script>
    // quentity start
    function increaseValue(temp) {
        var value = parseInt(document.getElementById(temp).value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById(temp).value = value;
    }

    function decreaseValue(temp) {
        var value = parseInt(document.getElementById(temp).value, 10);
        value = isNaN(value) ? 0 : value;
        value < 1 ? value = 1 : '';
        value--;
        document.getElementById(temp).value = value;
    }
    // quentity end
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
