<!DOCTYPE html>
<html lang="en">
<head>
    @@include('./layouts/head.html')
    @@include('./layouts/head-bottom-link.html')
</head>
@@include('layouts/layout-vertical.html')
<!-- [ Main Content ] start -->
<section class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Google API</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Maps</a></li>
                            <li class="breadcrumb-item">Google Map Search API</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Map-API ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Google Map Search</h5>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <form method="post" id="address-search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter address">
                                    <button type="submit" class="btn  btn-primary m-0">Search</button>
                                </div>
                            </form>
                            <div class="clearfix"></div>
                            <br>
                            <div class="gmap1 full-page-google-map">
                                <div id="map-1" style='max-height:600px;height:1067px;'></div>
                            </div>
                            <div class="clearfix"></div>
                            <br>
                        </div>
                        <div class="map-toolbar">
                            <div class="row">
                                <div class="col-xl-12 text-center location-mob-btn">
                                    <div class="btn-group m-b-5">
                                        <button type="button" class="btn  btn-danger" id="map-unzoom">-</button>
                                        <button type="button" class="btn  btn-danger" id="map-resetzoom">Reset</button>
                                        <button type="button" class="btn  btn-danger" id="map-zoom">+</button>
                                    </div>
                                    &nbsp;
                                    <a href="#!" class="btn  btn-primary m-r-10" id="go-sthlm">Go to Stockholm</a>
                                    <a href="#!" class="btn  btn-warning" id="go-bln">Go to Berlin</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Map-API ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
@@include('./layouts/footer.html')
<!-- Map-API Js -->
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyDsucrEdmswqYrw0f6ej3bf4M4suDeRgNA"></script>
<script src="assets/js/plugins/gmaps.min.js"></script>
<script src="assets/js/pages/map-api.js"></script>
@@include('./layouts/footer-bottom-link.html')
</body>
</html>
