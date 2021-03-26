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
                            <h5 class="m-b-10">Google Map</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Maps</a></li>
                            <li class="breadcrumb-item">Google Maps</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ basic-map ] start -->
            <div class="col-lg-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic</h5>
                        <span class="d-block m-t-5">Map shows places around the world</span>
                    </div>
                    <div class="card-body">
                        <div id="basic-map" class="set-map" style="height:400px;"></div>
                    </div>
                </div>
            </div>
            <!-- [ basic-map ] end -->
            <!-- [ Markers-map ] start -->
            <div class="col-lg-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Markers</h5>
                        <span class="d-block m-t-5">Maps shows <code>location</code> of the place</span>
                    </div>
                    <div class="card-body">
                        <div id="markers-map" class="set-map" style="height:400px;"></div>
                    </div>
                </div>
            </div>
            <!-- [ Markers-map ] end -->
            <!-- [ Geo-Coding-map ] start -->
            <div class="col-lg-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Geo-Coding</h5>
                        <span class="d-block m-t-5">Search your location</span>
                    </div>
                    <div class="card-body">
                        <form method="post" id="geocoding_form1">
                            <div class="input-group input-group-button mb-3">
                                <input type="text" id="address" class="form-control" placeholder="Write your place">
                                <button class="btn  btn-primary m-0">Search Location</button>
                            </div>
                        </form>
                        <div id="mapGeo" class="set-map" style="height:400px;"></div>
                    </div>
                </div>
            </div>
            <!-- [ Geo-Coding-map ] end -->
            <!-- [ Overlay-map ] start -->
            <div class="col-lg-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Overlay</h5>
                        <span class="d-block m-t-5">Map shows places around the world</span>
                    </div>
                    <div class="card-body">
                        <form method="post" id="geocoding_form2">
                            <div id="mapOverlay" class="set-map" style="height:400px;"></div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ Overlay-map ] end -->
            <!-- [ Street-View-map ] start -->
            <div class="col-lg-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Street View</h5>
                        <span class="d-block m-t-5">Map shows view of street</span>
                    </div>
                    <div class="card-body">
                        <form method="post" id="geocoding_form3">
                            <div id="mapStreet" class="set-map" style="height:400px;"></div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ Street-View-map ] end -->
            <!-- [ Map-Types-map ] start -->
            <div class="col-lg-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Map Types</h5>
                        <span class="d-block m-t-5">Select your <code>map-types</code> to see differant views</span>
                    </div>
                    <div class="card-body">
                        <form method="post" id="geocoding_form4">
                            <div id="mapTypes" class="set-map" style="height:400px;"></div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ Map-Types-map ] end -->
            <!-- [ GeoRSS-Layers ] start -->
            <div class="col-lg-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>GeoRSS Layers</h5>
                        <span class="d-block m-t-5">Shows <code>RSS</code> location</span>
                    </div>
                    <div class="card-body">
                        <form method="post" id="geocoding_form5">
                            <div id="georssmap" class="set-map" style="height:400px;"></div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ GeoRSS-Layers ] end -->
            <!-- [ Marker-Clustering ] start -->
            <div class="col-lg-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Marker Clustering</h5>
                        <span class="d-block m-t-5">Multiple markers show differant location</span>
                    </div>
                    <div class="card-body">
                        <form method="post" id="geocoding_form6">
                            <div id="map" class="set-map" style="height:400px;"></div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ Marker-Clustering ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- google-map Js -->
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyDsucrEdmswqYrw0f6ej3bf4M4suDeRgNA"></script>
<script src="assets/js/plugins/gmaps.min.js"></script>
<script src="assets/js/pages/google-maps.js"></script>
@include('html.layouts.footer-bottom-link')
</body>
</html>
