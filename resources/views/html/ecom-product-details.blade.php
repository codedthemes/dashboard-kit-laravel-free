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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="sticky-md-top product-sticky">
                                    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="assets/images/product/prod-big-1.jpg" class="d-block w-100" alt="Product images">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/product/prod-big-2.jpg" class="d-block w-100" alt="Product images">
                                            </div>
                                            <!-- <div class="carousel-item">
                                                <img src="assets/images/product/prod-big-3.jpg" class="d-block w-100" alt="Product images">
                                            </div> -->
                                            <div class="carousel-item">
                                                <img src="assets/images/product/prod-big-4.jpg" class="d-block w-100" alt="Product images">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/product/prod-big-5.jpg" class="d-block w-100" alt="Product images">
                                            </div>
                                            <!-- <div class="carousel-item">
                                                <img src="assets/images/product/prod-big-6.jpg" class="d-block w-100" alt="Product images">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/product/prod-big-7.jpg" class="d-block w-100" alt="Product images">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/product/prod-big-8.jpg" class="d-block w-100" alt="Product images">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/product/prod-big-9.jpg" class="d-block w-100" alt="Product images">
                                            </div> -->
                                        </div>
                                        <ol class="carousel-indicators position-relative product-carousel-indicators my-sm-5">
                                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="w-25 h-auto active">
                                                <img src="assets/images/product/prod-big-1.jpg" class="d-block wid-50" alt="Product images">
                                            </li>
                                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="w-25 h-auto">
                                                <img src="assets/images/product/prod-big-2.jpg" class="d-block wid-50" alt="Product images">
                                            </li>
                                            <!-- <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="w-25 h-auto">
                                                <img src="assets/images/product/prod-big-3.jpg" class="d-block wid-50" alt="Product images">
                                            </li> -->
                                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="w-25 h-auto">
                                                <img src="assets/images/product/prod-big-4.jpg" class="d-block wid-50" alt="Product images">
                                            </li>
                                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" class="w-25 h-auto">
                                                <img src="assets/images/product/prod-big-5.jpg" class="d-block wid-50" alt="Product images">
                                            </li>
                                            <!-- <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" class="w-25 h-auto">
                                                <img src="assets/images/product/prod-big-6.jpg" class="d-block wid-50" alt="Product images">
                                            </li>
                                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" class="w-25 h-auto">
                                                <img src="assets/images/product/prod-big-7.jpg" class="d-block wid-50" alt="Product images">
                                            </li>
                                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" class="w-25 h-auto">
                                                <img src="assets/images/product/prod-big-8.jpg" class="d-block wid-50" alt="Product images">
                                            </li>
                                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" class="w-25 h-auto">
                                                <img src="assets/images/product/prod-big-9.jpg" class="d-block wid-50" alt="Product images">
                                            </li> -->
                                        </ol>
                                    </div>
                                    <div class="row g-0 mb-3 mb-md-0 me-sm-2 ecomm-desc-btn">
                                        <div class="col-6 d-grid">
                                            <button type="button" class="btn btn-block rounded-0 btn-lg btn-warning py-sm-3"><i class="fas fa-cart-plus me-1"></i> Add to cart</button>
                                        </div>
                                        <div class="col-6 d-grid">
                                            <button type="button" class="btn btn-block rounded-0 btn-lg btn-danger py-sm-3"><i class="fas fa-bolt me-1"></i> Buy now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <form class="pl-md-4">
                                    <h6 class="text-muted">Jolyecart logistic</h6>
                                    <h3 class="mt-0">Women Purple Sling Bag <a href="javascript: void(0);" class="text-muted"><i class="mdi mdi-square-edit-outline ms-2"></i></a> </h3>
                                    <p class="mb-1">Added Date: 09/12/2018</p>
                                    <div class="mt-3">
                                        <h5><span class="badge bg-success">Instock</span></h5>
                                    </div>
                                    <div class="mt-4">
                                        <h6>Special price:</h6>
                                        <h3>$139.58 <del class="text-danger font-weight-normal h5"> <small>$322.53</small></del> <small class="text-success h5">86% off</small></h3>
                                        <h5><span class="badge bg-success">3.8 <i class="feather icon-star-on"></i></span> 179 ratings and 43 reviews</h5>
                                    </div>
                                    <div class="mt-4">
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="media">
                                                    <i class="fas fa-tag text-success me-2 mt-2"></i>
                                                    <div class="media-body">
                                                        <strong class="">Bank Offer</strong>
                                                        <span>10% Instant Discount on ABCD Bank Credit &amp; Debit Cards</span>
                                                        <a href="#!">T&amp;C</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mt-2">
                                                <div class="media">
                                                    <i class="fas fa-tag text-success me-2 mt-2"></i>
                                                    <div class="media-body">
                                                        <strong class="">Bank Offer</strong>
                                                        <span>5% Unlimited Cashback on Flipkart PQR Bank Credit Card</span>
                                                        <a href="#!">T&amp;C</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mt-2">
                                                <div class="media">
                                                    <i class="fas fa-tag text-success me-2 mt-2"></i>
                                                    <div class="media-body">
                                                        <strong class="">Bank Offer</strong>
                                                        <span>Extra 5% off* with XYZ Bank Buzz Credit Card</span>
                                                        <a href="#!">T&amp;C</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h6><i class="feather icon-map-pin"></i> Deliver to</h6>
                                        </div>
                                        <div class="col-sm-6 mt-md-0 mt-2">
                                            <div class="form-group">
                                                <label class="form-label" for="pincode">Enter delivery pincode</label>
                                                <input type="password" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-sm-end mt-md-0 mt-2">
                                            <div class="form-group">
                                                <label class="form-label" for="pincode">Quantity</label>
                                                <input type="number" min="1" value="1" class="form-control" placeholder="Qty">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mt-4">
                                            <h6>Description:</h6>
                                            <p>This stylish Sling Bag SAHAL FASHION from is best to carry to work to add an element of style to your office wear.Made from premium. It is compact to store your important things with ease.Made From outer
                                                material PU and inner material From Fabric. Furthermore, they feature Turnlock closure are best suited for a casual and partywear occasion.</p>
                                                <div class="w-100">
                                                    <div class="row mb-2">
                                                        <div class="col-4 f-w-500">Material</div>
                                                        <div class="col-8">PU</div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-4 f-w-500">Number of Compartments</div>
                                                        <div class="col-8">2</div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-4 f-w-500">Model Name</div>
                                                        <div class="col-8">Sahalsling bag</div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-4 f-w-500">Bag Size</div>
                                                        <div class="col-8">Reguler</div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-4 f-w-500">Closure</div>
                                                        <div class="col-8">Magnetic Button</div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-4 f-w-500">Pattern</div>
                                                        <div class="col-8">Solid</div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-4 f-w-500">Pack of</div>
                                                        <div class="col-8">1</div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-4 f-w-500">Sales Package</div>
                                                        <div class="col-8">1 sling bag</div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-4 f-w-500">Width</div>
                                                        <div class="col-8">10 mm</div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-4 f-w-500">Height</div>
                                                        <div class="col-8">27 mm</div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-4 f-w-500">Weight</div>
                                                        <div class="col-8">250 g</div>
                                                    </div>
                                                </div>
                                                <h6><a href="#!">Manufacturing, Packaging and Import Info</a></h6>
                                            </div>
                                        </div>
                                        <div class="card-body table-body">
                                            <div class="table-responsive mt-4">
                                                <table class="table mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Seller</th>
                                                            <th>Price</th>
                                                            <th>Stock</th>
                                                            <th>Revenue</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Octroyee mall USA</td>
                                                            <td>$139.50</td>
                                                            <td>
                                                                <div class="mb-0">
                                                                    <span>478 </span>
                                                                    <div class="progress rounded" style="height:8px;">
                                                                        <div class="progress-bar rounded bg-success" role="progressbar" style="width: 56%;" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>$1,89,547</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Chromin - Brazil</td>
                                                            <td>$149.99</td>
                                                            <td>
                                                                <div class="mb-0">
                                                                    <span>73 </span>
                                                                    <div class="progress rounded" style="height:8px;">
                                                                        <div class="progress-bar rounded bg-danger" role="progressbar" style="width: 16%;" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>$87,245</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Milan - Navsari</td>
                                                            <td>$106.87</td>
                                                            <td>
                                                                <div class="mb-0">
                                                                    <span>781 </span>
                                                                    <div class="progress rounded" style="height:8px;">
                                                                        <div class="progress-bar rounded bg-success" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>$5,87,478</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Xendrasn - Japan</td>
                                                            <td>$239.66</td>
                                                            <td>
                                                                <div class="mb-0">
                                                                    <span>815 </span>
                                                                    <div class="progress rounded" style="height:8px;">
                                                                        <div class="progress-bar rounded bg-success" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>$55,781</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customar project  end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
@@include('./layouts/footer.html')
@@include('./layouts/footer-bottom-link.html')
</body>

</html>
