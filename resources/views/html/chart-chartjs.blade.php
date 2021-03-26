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
                            <h5 class="m-b-10">Chart js</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Chart</a></li>
                            <li class="breadcrumb-item">Chart js</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ chartjs-chart ] start -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Bar Chart</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="chart-bar-1" style="width: 100%; height: 300px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Bar [ Stacked ] Chart</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="chart-bar-2" style="width: 100%; height: 300px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Bar [ Horizontal ] Chart</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="chart-bar-3" style="width: 100%; height: 300px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Line [ Interpolation Mode ] Chart</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="chart-line-1" style="width: 100%; height: 300px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Area [ Fill: 'origin' ] Chart</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="chart-area-2" style="width: 100%; height: 300px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Area [ Fill: 'end' ] Chart</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="chart-area-3" style="width: 100%; height: 300px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Area Chart</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="chart-area-1" style="width: 100%; height: 300px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Radar [ Area ] Chart</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="chart-radar-1" style="width: 100%; height: 300px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Radar [ Area ] Chart</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="chart-radar-2" style="width: 100%; height: 300px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Radar [ Area ] Chart</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="chart-radar-3" style="width: 100%; height: 300px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Pie Chart</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="chart-pie-1" style="width: 100%; height: 300px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Donut Chart</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="chart-donut-1" style="width: 100%; height: 300px"></canvas>
                    </div>
                </div>
            </div>
            <!-- [ chartjs-chart ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- chartjs js -->
<script src="assets/js/plugins/Chart.min.js"></script>
<script src="assets/js/pages/chart-chart-custom.js"></script>
@include('html.layouts.footer-bottom-link')
</body>
</html>
