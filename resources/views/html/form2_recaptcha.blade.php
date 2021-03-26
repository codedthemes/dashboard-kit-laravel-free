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
                            <h5 class="m-b-10">Google reCaptcha</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item">Google reCaptcha</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="row align-items-center mb-3">
                    <div class="col-md-8">
                        <h3>Google reCaptcha</h3>
                        <p class="lead">reCAPTCHA protects you against spam and other types of automated abuse. Here, we explain how to add reCAPTCHA to your site or application.</p>
                        <p class="f-w-500">Check out <a href="https://developers.google.com/recaptcha/intro" target="_blank" class="badge bg-light-primary">website</a></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group mb-0 row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">reCaptcha</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <div class="g-recaptcha" data-sitekey="6LdnLwgUAAAAAAIb9L3PQlHQgvSCi16sYgbMIMFR"></div>
                                </div>
                                <script src='https://www.google.com/recaptcha/api.js'></script>
                            </div>
                        </form>
                    </div>
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
<!-- tagify -->
<script>
    $(function() {});
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
