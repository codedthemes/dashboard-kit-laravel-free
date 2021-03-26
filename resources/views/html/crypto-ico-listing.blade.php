<!DOCTYPE html>

<html lang="en">

<head>
    @include('html.layouts.head')
    <link rel="stylesheet" href="assets/css/plugins/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/fonts/cryptofont.css">
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
                            <h5 class="m-b-10">Ico listing</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Crypto</a></li>
                            <li class="breadcrumb-item">Ico listing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-xl-3 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-0">
                            <input type="text" class="form-control" placeholder="Search here">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div id="filters-side" class="button-group d-grid">
                        <button class="button btn border-0 m-0 text-start rounded-0 btn-outline-secondary active" data-filter="*">All</button>
                        <button class="button btn border-0 m-0 text-start rounded-0 btn-outline-secondary" data-filter=".sponsored">Sponsored</button>
                        <button class="button btn border-0 m-0 text-start rounded-0 btn-outline-secondary" data-filter=".medium">Medium</button>
                        <button class="button btn border-0 m-0 text-start rounded-0 btn-outline-secondary" data-filter=".neutral">Neutral</button>
                        <button class="button btn border-0 m-0 text-start rounded-0 btn-outline-secondary" data-filter=".notrated">Not rated</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div id="filters" class="button-group">
                            <button class="button btn btn-light-secondary my-1 active" data-filter="*">show all</button>
                            <button class="button btn btn-light-secondary my-1" data-filter=".finance">Finance</button>
                            <button class="button btn btn-light-secondary my-1" data-filter=".realestate">Real Estate</button>
                            <button class="button btn btn-light-secondary my-1" data-filter=".healthcare">Healthcare</button>
                            <button class="button btn btn-light-secondary my-1" data-filter=".advertising">Advertising</button>
                            <button class="button btn btn-light-secondary my-1" data-filter=".banking">Banking</button>
                        </div>
                    </div>
                </div>
                <div class="grid row">
                    <div class="col-lg-4 col-md-6 element-item realestate sponsored" data-category="realestate">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center p-0">
                                    <div class="text-center">
                                        <a href="#"><i class="cc XRP f-36 me-3" title="XRP"></i></a>
                                    </div>
                                    <div>
                                        <h4 class="m-0 text-bold">Ripple</h4>
                                        <span>Real Estate</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <div>
                                        <p class="m-0 font-weight-600"><span class="text-primary">$25.000</span> / $30.000</p>
                                        <p class="m-0">Sponsored</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="m-0 font-weight-600"><span class="text-primary">84%</span></p>
                                        <p class="m-0">9d left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 element-item finance sponsored " data-category="finance">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center p-0">
                                    <div class="text-center">
                                        <a href="#"><i class="cc BAT f-36 me-3" title="bat"></i></a>
                                    </div>
                                    <div>
                                        <h3 class="m-0 text-bold">BasicAtt</h3>
                                        <span>Finance</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <div>
                                        <p class="m-0 font-weight-600"><span class="text-primary">$2.000</span> / $3.000</p>
                                        <p class="m-0">Sponsored</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="m-0 font-weight-600"><span class="text-primary">40%</span></p>
                                        <p class="m-0">8d left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 element-item healthcare sponsored" data-category="healthcare">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center p-0">
                                    <div class="text-center">
                                        <a href="#"><i class="cc ADA f-36 me-3" title="ADA"></i></a>
                                    </div>
                                    <div>
                                        <h3 class="m-0 text-bold">Cardano</h3>
                                        <span>Healthcare</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <div>
                                        <p class="m-0 font-weight-600"><span class="text-primary">$13.900</span> / $25.000</p>
                                        <p class="m-0">Sponsored</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="m-0 font-weight-600"><span class="text-primary">62%</span></p>
                                        <p class="m-0">9d left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 element-item advertising sponsored " data-category="advertising">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center p-0">
                                    <div class="text-center">
                                        <a href="#"><i class="cc LTC f-36 me-3" title="LTC"></i></a>
                                    </div>
                                    <div>
                                        <h3 class="m-0 text-bold">Litecoin</h3>
                                        <span>Advertising</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <div>
                                        <p class="m-0 font-weight-600"><span class="text-primary">$4.600</span> / $15.200</p>
                                        <p class="m-0">Sponsored</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="m-0 font-weight-600"><span class="text-primary">31%</span></p>
                                        <p class="m-0">25d left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 element-item finance neutral " data-category="finance">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center p-0">
                                    <div class="text-center">
                                        <a href="#"><i class="cc XEM f-36 me-3" title="XEM"></i></a>
                                    </div>
                                    <div>
                                        <h3 class="m-0 text-bold">Nem</h3>
                                        <span>Finance</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <div>
                                        <p class="m-0 font-weight-600"><span class="text-primary">$9.600</span> / $20.000</p>
                                        <p class="m-0">Neutral</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="m-0 font-weight-600"><span class="text-primary">48%</span></p>
                                        <p class="m-0">6d left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 element-item banking neutral " data-category="banking">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center p-0">
                                    <div class="text-center">
                                        <a href="#"><i class="cc NEO f-36 me-3" title="NEO"></i></a>
                                    </div>
                                    <div>
                                        <h3 class="m-0 text-bold">NEO</h3>
                                        <span>Banking</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <div>
                                        <p class="m-0 font-weight-600"><span class="text-primary">$25.000</span> / $30.000</p>
                                        <p class="m-0">Neutral</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="m-0 font-weight-600"><span class="text-primary">84%</span></p>
                                        <p class="m-0">9d left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 element-item exchange medium " data-category="exchange">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center p-0">
                                    <div class="text-center">
                                        <a href="#"><i class="cc EOS f-36 me-3" title="EOS"></i></a>
                                    </div>
                                    <div>
                                        <h3 class="m-0 text-bold">EOS</h3>
                                        <span>Exchange</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <div>
                                        <p class="m-0 font-weight-600"><span class="text-primary">$25.000</span> / $30.000</p>
                                        <p class="m-0">Medium</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="m-0 font-weight-600"><span class="text-primary">84%</span></p>
                                        <p class="m-0">9d left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 element-item realestate notrated " data-category="realestate">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center p-0">
                                    <div class="text-center">
                                        <a href="#"><i class="cc XMR f-36 me-3" title="XMR"></i></a>
                                    </div>
                                    <div>
                                        <h3 class="m-0 text-bold">Monero</h3>
                                        <span>Real Estate</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <div>
                                        <p class="m-0 font-weight-600"><span class="text-primary">$25.000</span> / $30.000</p>
                                        <p class="m-0">Not Rated</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="m-0 font-weight-600"><span class="text-primary">84%</span></p>
                                        <p class="m-0">9d left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 element-item blockchain notrated " data-category="blockchain">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center p-0">
                                    <div class="text-center">
                                        <a href="#"><i class="cc QTUM f-36 me-3" title="QTUM"></i></a>
                                    </div>
                                    <div>
                                        <h3 class="m-0 text-bold">QTUM</h3>
                                        <span>Blockchain</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <div>
                                        <p class="m-0 font-weight-600"><span class="text-primary">$25.000</span> / $30.000</p>
                                        <p class="m-0">Not Rated</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="m-0 font-weight-600"><span class="text-primary">84%</span></p>
                                        <p class="m-0">9d left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 element-item trading notrated " data-category="trading">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center p-0">
                                    <div class="text-center">
                                        <a href="#"><i class="cc LSK f-36 me-3" title="LSK"></i></a>
                                    </div>
                                    <div>
                                        <h3 class="m-0 text-bold">Lisk</h3>
                                        <span>Trading</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <div>
                                        <p class="m-0 font-weight-600"><span class="text-primary">$25.000</span> / $30.000</p>
                                        <p class="m-0">Not Rated</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="m-0 font-weight-600"><span class="text-primary">84%</span></p>
                                        <p class="m-0">9d left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 element-item smart notrated " data-category="smart">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center p-0">
                                    <div class="text-center">
                                        <a href="#"><i class="cc OMG f-36 me-3" title="OMG"></i></a>
                                    </div>
                                    <div>
                                        <h3 class="m-0 text-bold">OmiGO</h3>
                                        <span>Smart</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <div>
                                        <p class="m-0 font-weight-600"><span class="text-primary">$25.000</span> / $30.000</p>
                                        <p class="m-0">Not Rated</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="m-0 font-weight-600"><span class="text-primary">84%</span></p>
                                        <p class="m-0">9d left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 element-item advertising medium " data-category="advertising">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center p-0">
                                    <div class="text-center">
                                        <a href="#"><i class="cc USDT f-36 me-3" title="USDT"></i></a>
                                    </div>
                                    <div>
                                        <h3 class="m-0 text-bold">Tether</h3>
                                        <span>Advertising</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <div>
                                        <p class="m-0 font-weight-600"><span class="text-primary">$25.000</span> / $30.000</p>
                                        <p class="m-0">Medium</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="m-0 font-weight-600"><span class="text-primary">84%</span></p>
                                        <p class="m-0">9d left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 element-item blockchain medium " data-category="blockchain">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center p-0">
                                    <div class="text-center">
                                        <a href="#"><i class="cc ZEC f-36 me-3" title="ZEC"></i></a>
                                    </div>
                                    <div>
                                        <h3 class="m-0 text-bold">Zcach</h3>
                                        <span>Blockchain</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <div>
                                        <p class="m-0 font-weight-600"><span class="text-primary">$25.000</span> / $30.000</p>
                                        <p class="m-0">Medium</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="m-0 font-weight-600"><span class="text-primary">84%</span></p>
                                        <p class="m-0">9d left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 element-item trading neutral " data-category="trading">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center p-0">
                                    <div class="text-center">
                                        <a href="#"><i class="cc STRAT f-36 me-3" title="STRAT"></i></a>
                                    </div>
                                    <div>
                                        <h3 class="m-0 text-bold">Stratis</h3>
                                        <span>Trading</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <div>
                                        <p class="m-0 font-weight-600"><span class="text-primary">$25.000</span> / $30.000</p>
                                        <p class="m-0">Neutral</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="m-0 font-weight-600"><span class="text-primary">84%</span></p>
                                        <p class="m-0">9d left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 element-item finance sponsored " data-category="finance">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center p-0">
                                    <div class="text-center">
                                        <a href="#"><i class="cc ARDR f-36 me-3" title="ARDR"></i></a>
                                    </div>
                                    <div>
                                        <h3 class="m-0 text-bold">Ardor</h3>
                                        <span>Finance</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <div>
                                        <p class="m-0 font-weight-600"><span class="text-primary">$25.000</span> / $30.000</p>
                                        <p class="m-0">Sponsored</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="m-0 font-weight-600"><span class="text-primary">84%</span></p>
                                        <p class="m-0">9d left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 element-item finance sponsored " data-category="finance">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center p-0">
                                    <div class="text-center">
                                        <a href="#"><i class="cc STEEM f-36 me-3" title="STEEM"></i></a>
                                    </div>
                                    <div>
                                        <h3 class="m-0 text-bold">Steem</h3>
                                        <span>Finance</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <div>
                                        <p class="m-0 font-weight-600"><span class="text-primary">$25.000</span> / $30.000</p>
                                        <p class="m-0">Sponsored</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="m-0 font-weight-600"><span class="text-primary">84%</span></p>
                                        <p class="m-0">9d left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 element-item banking sponsored " data-category="banking">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center p-0">
                                    <div class="text-center">
                                        <a href="#"><i class="cc WAVES f-36 me-3" title="WAVES"></i></a>
                                    </div>
                                    <div>
                                        <h3 class="m-0 text-bold">Wavrs</h3>
                                        <span>Banking</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <div>
                                        <p class="m-0 font-weight-600"><span class="text-primary">$25.000</span> / $30.000</p>
                                        <p class="m-0">Sponsored</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="m-0 font-weight-600"><span class="text-primary">84%</span></p>
                                        <p class="m-0">9d left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 element-item exchange sponsored " data-category="exchange">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center p-0">
                                    <div class="text-center">
                                        <a href="#"><i class="cc REP f-36 me-3" title="REP"></i></a>
                                    </div>
                                    <div>
                                        <h3 class="m-0 text-bold">Augur</h3>
                                        <span>Exchange</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <div>
                                        <p class="m-0 font-weight-600"><span class="text-primary">$25.000</span> / $30.000</p>
                                        <p class="m-0">Sponsored</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="m-0 font-weight-600"><span class="text-primary">84%</span></p>
                                        <p class="m-0">9d left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 element-item realestate sponsored " data-category="realestate">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center p-0">
                                    <div class="text-center">
                                        <a href="#"><i class="cc KMD f-36 me-3" title="KMD"></i></a>
                                    </div>
                                    <div>
                                        <h3 class="m-0 text-bold">Komodo</h3>
                                        <span>Real Estate</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <div>
                                        <p class="m-0 font-weight-600"><span class="text-primary">$25.000</span> / $30.000</p>
                                        <p class="m-0">Sponsored</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="m-0 font-weight-600"><span class="text-primary">84%</span></p>
                                        <p class="m-0">9d left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 element-item blockchain sponsored " data-category="blockchain">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center p-0">
                                    <div class="text-center">
                                        <a href="#"><i class="cc ARK f-36 me-3" title="ARK"></i></a>
                                    </div>
                                    <div>
                                        <h3 class="m-0 text-bold">Ark</h3>
                                        <span>Blockchain</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <div>
                                        <p class="m-0 font-weight-600"><span class="text-primary">$25.000</span> / $30.000</p>
                                        <p class="m-0">Sponsored</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="m-0 font-weight-600"><span class="text-primary">84%</span></p>
                                        <p class="m-0">9d left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<script src="assets/js/plugins/isotope.pkgd.min.js"></script>
<script>
    // init Isotope
    var $grid = $('.grid').isotope({
        itemSelector: '.element-item',
        layoutMode: 'fitRows',
        getSortData: {
            name: '.name',
            symbol: '.symbol',
            number: '.number parseInt',
            category: '[data-category]',
        }
    });

    // bind filter button click
    $('#filters').on('click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({
            filter: filterValue
        });
    });
    $('#filters-side').on('click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({
            filter: filterValue
        });
    });
    // change active class on buttons
    $('.button-group').each(function(i, buttonGroup) {
        var $buttonGroup = $(buttonGroup);
        $buttonGroup.on('click', 'button', function() {
            $buttonGroup.find('.active').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>

@include('html.layouts.footer-bottom-link')
</body>

</html>
