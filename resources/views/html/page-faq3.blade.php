<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    <link rel="stylesheet" href="assets/css/plugins/select2.min.css">
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
                            <h5 class="m-b-10">Faq</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Faq</a></li>
                            <li class="breadcrumb-item"><a href="#!">faq 3</a></li>
                            <li class="breadcrumb-item">view</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-8 col-md-10">
                        <h2 class="mt-2">
                            We're here to help !!
                        </h2>
                        <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                            scrambled it to make a type specimen book.</p>
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-8 col-md-10">
                                <form class="form-group mb-5">
                                    <input class="form-control" placeholder="Search in faqs...." type="text">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body text-center">
                            <a href="page-faq3-category.html">
                                <i class="feather icon-users text-primary d-block h2 mb-3"></i>
                                <h5>My Account</h5>
                                <p class="mb-0 text-muted">Lorem Ipsum is simply dummy text of the printing and</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body text-center">
                            <a href="page-faq3-category.html">
                                <i class="feather icon-command text-primary d-block h2 mb-3"></i>
                                <h5>Connect</h5>
                                <p class="mb-0 text-muted">Lorem Ipsum is simply dummy text of the printing and</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body text-center">
                            <a href="page-faq3-category.html">
                                <i class="feather icon-repeat text-primary d-block h2 mb-3"></i>
                                <h5>Charges & Refunds</h5>
                                <p class="mb-0 text-muted">Lorem Ipsum is simply dummy text of the printing and</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body text-center">
                            <a href="page-faq3-category.html">
                                <i class="feather icon-globe text-primary d-block h2 mb-3"></i>
                                <h5>International</h5>
                                <p class="mb-0 text-muted">Lorem Ipsum is simply dummy text of the printing and</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body text-center">
                            <a href="page-faq3-category.html">
                                <i class="feather icon-file-text text-primary d-block h2 mb-3"></i>
                                <h5>Payouts</h5>
                                <p class="mb-0 text-muted">Lorem Ipsum is simply dummy text of the printing and</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body text-center">
                            <a href="page-faq3-category.html">
                                <i class="feather icon-shield text-primary d-block h2 mb-3"></i>
                                <h5>Disputes & Fraud</h5>
                                <p class="mb-0 text-muted">Lorem Ipsum is simply dummy text of the printing and</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<script src="assets/js/plugins/select2.full.min.js"></script>
<script>
    $(function() {
        $(".skill-mlt-select").select2();
    });
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
