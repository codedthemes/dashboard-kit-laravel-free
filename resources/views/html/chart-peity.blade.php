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
                            <h5 class="m-b-10">Peity Chart</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Chart</a></li>
                            <li class="breadcrumb-item">Peity Chart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ update-chart1 ] start -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Updating Chart 1</h5>
                    </div>
                    <div class="card-body">
                        <span class="updating-chart peity-chart">5,3,6,4,2,10,2,3,9,1,2,8</span>
                    </div>
                </div>
            </div>
            <!-- [ update-chart1 ] end -->
            <!-- [ update-chart2 ] start -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Updating Chart 2</h5>
                    </div>
                    <div class="card-body">
                        <span class="updating-chart1 peity-chart">5,3,9,6,5,9,7,3,5,2</span>
                    </div>
                </div>
            </div>
            <!-- [ update-chart2 ] end -->
            <!-- [ line-chart1 ] start -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Line Chart 1</h5>
                    </div>
                    <div class="card-body">
                        <span class="updating-chart2 peity-chart">5,3,2,-1,-3,-2,2,3,5,2</span>
                    </div>
                </div>
            </div>
            <!-- [ line-chart1 ] end -->
            <!-- [ line-chart2 ] start -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Line Chart 2</h5>
                    </div>
                    <div class="card-body">
                        <span class="updating-chart3 peity-chart">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
                    </div>
                </div>
            </div>
            <!-- [ line-chart2 ] end -->
            <!-- [ bar-chart1 ] start -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Bar Chart 1</h5>
                    </div>
                    <div class="card-body">
                        <span class="bar-colours-1 peity-chart">0,3,6,4,7,3,5,2,2</span>
                    </div>
                </div>
            </div>
            <!-- [ bar-chart1 ] end -->
            <!-- [ bar-chart1 ] start -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Bar Chart 2</h5>
                    </div>
                    <div class="card-body">
                        <span class="bar-colours-2 peity-chart">0,-3,-6,-4,5,-4,-5,-2,2</span>
                    </div>
                </div>
            </div>
            <!-- [ bar-chart1 ] end -->
            <!-- [ custom-chart1 ] start -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Custom Chart 1</h5>
                    </div>
                    <div class="card-body">
                        <div class="data-attributes">
                            <span data-peity='{ "fill": ["#5052FC", "#eeeeee"],"innerRadius": 10, "radius": 40 }'>1/7</span>
                            <span data-peity='{ "fill": ["#ED4C13", "#eeeeee"],"innerRadius": 14, "radius": 36 }'>2/7</span>
                            <span data-peity='{ "fill": ["#FF9800", "#eeeeee"],"innerRadius": 16, "radius": 32 }'>3/7</span>
                            <span data-peity='{ "fill": ["#06CA98", "#eeeeee"],"innerRadius": 18, "radius": 28 }'>4/7</span>
                            <span data-peity='{ "fill": ["#69CEC6", "#eeeeee"],"innerRadius": 20, "radius": 24 }'>5/7</span>
                            <span data-peity='{ "fill": ["#7759de", "#eeeeee"],"innerRadius": 18, "radius": 20 }'>6/7</span>
                            <span data-peity='{ "fill": ["#536dfe", "#eeeeee"],"innerRadius": 15, "radius": 16 }'>7/7</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ custom-chart1 ] end -->
            <!-- [ custom-chart2 ] start -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Custom Chart 2</h5>
                    </div>
                    <div class="card-body">
                        <span class="pie_1">1/5</span>
                        <span class="pie_2">226/360</span>
                        <span class="pie_3">0.52/1.561</span>
                        <span class="pie_4">1,4</span>
                        <span class="pie_5">226,134</span>
                        <span class="pie_6">0.52,1.041</span>
                        <span class="pie_7">1,2,3,2,2</span>
                    </div>
                </div>
            </div>
            <!-- [ custom-chart2 ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- peity chart js -->
<script src="assets/js/plugins/jquery.peity.min.js"></script>
<script src="assets/js/pages/chart-peity-custom.js"></script>
@include('html.layouts.footer-bottom-link')
</body>
</html>
