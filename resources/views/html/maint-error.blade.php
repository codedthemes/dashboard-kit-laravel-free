<!DOCTYPE html>
<html lang="en">
<head>
    @include('html.layouts.head')
    @include('html.layouts.head-bottom-link')
</head>
<!-- [ offline-ui ] start -->
<div class="auth-wrapper maintance">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center">
                    <img src="assets/images/maintance/404.png" alt="" class="img-fluid">
                    <h5 class="text-muted my-4">Oops! Page not found!</h5>
                    <form action="{{ route('index') }}">
                        <button class="btn  btn-primary mb-4"><i class="feather icon-refresh-ccw me-2"></i>Reload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ offline-ui ] end -->
<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
@include('html.layouts.footer-bottom-link')
</body>
</html>
