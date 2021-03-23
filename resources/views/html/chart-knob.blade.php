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
                            <h5 class="m-b-10">Knob Chart</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Chart</a></li>
                            <li class="breadcrumb-item">Knob Chart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Tron-skin ] start -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Tron Skin</h5>
                    </div>
                    <div class="card-body  text-center dial-chart">
                        <input type="text" class="dial" value="24" data-width="200" data-height="200" data-fgColor="#5052FC" data-skin="tron" data-thickness=".1" data-angleOffset="180">
                    </div>
                </div>
            </div>
            <!-- [ Tron-skin ] end -->
            <!-- [ angle-offset ] start -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Angle Offset and Arc</h5>
                    </div>
                    <div class="card-body  text-center dial-chart">
                        <input type="text" class="dial" value="35" data-width="200" data-height="200" data-fgColor="#7759de" data-angleOffset="-125" data-angleArc="250" data-rotation="anticlockwise">
                    </div>
                </div>
            </div>
            <!-- [ angle-offset ] end -->
            <!-- [ cursor-mode ] start -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Cursor Mode</h5>
                    </div>
                    <div class="card-body  text-center dial-chart">
                        <input type="text" class="dial" value="70" data-width="200" data-height="200" data-cursor="true" data-thickness=".1" data-fgColor="#ED4C13">
                    </div>
                </div>
            </div>
            <!-- [ cursor-mode ] end -->
            <!-- [ disabled-mode ] start -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Disable Display Input</h5>
                    </div>
                    <div class="card-body  text-center dial-chart">
                        <input type="text" class="dial" value="50" data-width="200" data-height="200" data-linecap="round" data-displayInput="false" data-fgColor="#FF9800">
                    </div>
                </div>
            </div>
            <!-- [ disabled-mode ] end -->
            <!-- [ display-value ] start -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Display Previous Value</h5>
                    </div>
                    <div class="card-body text-center dial-chart">
                        <input type="text" class="dial" value="32" data-width="200" data-height="200" data-linecap="round" data-displayprevious="true" data-displayInput="true" data-fgColor="#06CA98">
                    </div>
                </div>
            </div>
            <!-- [ display-value ] end -->
            <!-- [ read-only ] start -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Read Only and Size</h5>
                    </div>
                    <div class="card-body text-center dial-chart">
                        <input type="text" class="dial" value="48" data-width="100" data-height="200" data-linecap="round" data-displayprevious="true" data-displayInput="true" data-readonly="true" data-fgColor="#3ec9d6">
                    </div>
                </div>
            </div>
            <!-- [ read-only ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
@@include('./layouts/footer.html')
<!-- chart-knob Js -->
<script src="assets/js/plugins/jquery.knob.min.js"></script>
<script src="assets/js/pages/jquery.knob-custom.min.js"></script>
@@include('./layouts/footer-bottom-link.html')
</body>
</html>
