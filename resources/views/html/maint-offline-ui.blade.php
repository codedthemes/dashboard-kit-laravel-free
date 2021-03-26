<!DOCTYPE html>
<html lang="en">
<head>
    @include('html.layouts.head')
    @include('html.layouts.head-bottom-link')
</head>
<!-- [ offline-ui ] start -->
<div class="auth-wrapper offline">
    <div class="offline-wrapper">
        <img src="assets/images/maintance/sparcle-1.png" alt="User-Image" class="img-fluid s-img-1">
        <img src="assets/images/maintance/sparcle-2.png" alt="User-Image" class="img-fluid s-img-2">
        <div class="container off-main">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="text-center">
                        <div class="moon"></div>
                        <img src="assets/images/maintance/ship.svg" alt="" class="img-fluid boat-img">
                    </div>
                </div>
            </div>
            <div class="row m-0 justify-content-center off-content">
                <div class="col-sm-12 p-0">
                    <div class="text-center">
                        <h1 class="text-white text-uppercase">Offline</h1>
                        <h5 class="text-white font-weight-normal m-b-30">The site is temporarily down</h5>
                        <button class="btn btn-primary mb-4"><i class="feather icon-refresh-ccw me-2"></i>Reload</button>
                    </div>
                </div>
                <div class="sark">
                    <img src="assets/images/maintance/sark.svg" alt="" class="img-fluid img-sark">
                    <div class="bubble"></div>
                </div>
            </div>
        </div>
        <svg width="100%" height="70%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave">
            <title>Wave</title>
            <defs></defs>
            <path id="feel-the-wave" d="" />
        </svg>
        <svg width="100%" height="70%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave">
            <title>Wave</title>
            <defs></defs>
            <path id="feel-the-wave-two" d="" />
        </svg>
    </div>
</div>
<!-- [ offline-ui ] end -->
<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/pages/TweenMax.min.js"></script>
<script src="assets/js/pages/jquery.wavify.js"></script>
@include('html.layouts.footer-bottom-link')
<script>
    $('#feel-the-wave').wavify({
        color: 'rgba(37, 54, 83, 0.93)',
        speed: .25
    });
    $('#feel-the-wave-two').wavify({
        color: 'rgba(37, 54, 83, .5)',
        speed: .35
    });
</script>
</body>
</html>
