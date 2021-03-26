<!DOCTYPE html>
<html lang="en">
<head>
    @include('html.layouts.head')
    <!-- select2 css -->
    <link rel="stylesheet" href="assets/css/plugins/select2.min.css">
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
                            <h5 class="m-b-10">Form Select</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item">Form Select</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Select2 ] start -->
            <div class="col-sm-12">
                <div class="card select-card">
                    <div class="card-header">
                        <h5>Select2</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-4 col-md-6 mb-5">
                                <h5>Single Select</h5>
                                <hr>
                                <p>The<code>select2</code> can take a regular select box like this...</p>
                                <select class="js-example-basic-single form-control">
                                    <optgroup label="Developer">
                                        <option value="AL">Alabama</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Designer">
                                        <option value="WY">Peter</option>
                                        <option value="WY">Hanry Die</option>
                                        <option value="WY">John Doe</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="col-xl-4 col-md-6 mb-5">
                                <h5>Multi Select</h5>
                                <hr>
                                <p>The select below is declared with the<code>multiple</code> attribute</p>
                                <select class="js-example-basic-multiple col-sm-12" multiple="multiple">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="WY">Coming</option>
                                    <option value="WY">Hanry Die</option>
                                    <option value="WY">John Doe</option>
                                </select>
                            </div>

                            <div class="col-xl-4 col-md-6 mb-5">
                                <h5>With Placeholder</h5>
                                <hr>
                                <p><code>select2</code> uses the <code>placeholder</code> attribute on multiple select boxes</p>
                                <select class="js-example-placeholder-multiple col-sm-12">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="WY">Coming</option>
                                    <option value="WY">Hanry Die</option>
                                    <option value="WY">John Doe</option>
                                </select>
                            </div>

                            <div class="col-xl-4 col-md-6 mb-5">
                                <h5>Tagging Support</h5>
                                <hr>
                                <p>The select below is declared with the class<code>.js-example-tags</code></p>
                                <select class="js-example-tags col-sm-12" multiple="multiple">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="WY">Coming</option>
                                    <option value="WY">Hanry Die</option>
                                    <option value="WY">John Doe</option>
                                </select>
                            </div>

                            <div class="col-xl-4 col-md-6 mb-5">
                                <h5>Automatic Tokenization</h5>
                                <hr>
                                <p>The select below is declared with the class<code>.js-example-tokenizer</code></p>
                                <select class="js-example-tokenizer col-sm-12" multiple="multiple">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="WY">Coming</option>
                                    <option value="WY">Hanry Die</option>
                                    <option value="WY">John Doe</option>
                                </select>
                            </div>

                            <div class="col-xl-4 col-md-6 mb-5">
                                <h5>RTL Support</h5>
                                <hr>
                                <p>The select below is declared with the class<code>.js-example-rtl</code></p>
                                <select class="js-example-rtl col-sm-12" multiple="multiple">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="WY">Coming</option>
                                    <option value="WY">Hanry Die</option>
                                    <option value="WY">John Doe</option>
                                </select>
                            </div>

                            <div class="col-xl-4 col-md-6 mb-5">
                                <h5>Limiting the Number of Selections</h5>
                                <hr>
                                <p>The select below is declared with the class<code>.js-example-basic-multiple-limit</code></p>
                                <select class="js-example-basic-multiple-limit col-sm-12" multiple="multiple">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="WY">Coming</option>
                                    <option value="WY">Hanry Die</option>
                                    <option value="WY">John Doe</option>
                                </select>
                            </div>

                            <div class="col-xl-4 col-md-6 mb-5">
                                <h5>Diacritics Support</h5>
                                <hr>
                                <p>The select below is declared with the class<code>.js-example-diacritics</code></p>
                                <select class="js-example-diacritics col-sm-12" multiple="multiple">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="WY">Coming</option>
                                    <option value="WY">Hanry Die</option>
                                    <option value="WY">John Doe</option>
                                </select>
                            </div>

                            <div class="col-xl-4 col-md-6 mb-5">
                                <h5>Responsive Width</h5>
                                <hr>
                                <p>The select below is declared with the class<code>.js-example-responsive</code></p>
                                <select class="js-example-responsive col-sm-12" multiple="multiple" style="width:75%;">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="WY">Coming</option>
                                    <option value="WY">Hanry Die</option>
                                    <option value="WY">John Doe</option>
                                </select>
                            </div>

                            <div class="col-xl-4 col-md-6 mb-5">
                                <h5>Loading with Array</h5>
                                <hr>
                                <p>The select below is declared with the class<code>.js-example-data-array</code></p>
                                <select class="js-example-data-array col-sm-12"></select>
                            </div>

                            <div class="col-xl-4 col-md-6 mb-5">
                                <h5>Load Remote Data ( Ajax )</h5>
                                <hr>
                                <p>The select below is declared with the class<code>.js-data-example-ajax</code>
                                </p>
                                <select class="js-data-example-ajax col-sm-12">
                                    <option value="3620194" selected="selected">select2</option>
                                </select>
                            </div>

                            <div class="col-xl-4 col-md-6 mb-5">
                                <h5>Disabled Results</h5>
                                <hr>
                                <p>The select below is declared with the class<code>.js-example-disabled-results</code></p>
                                <select class="js-example-disabled-results col-sm-12">
                                    <option value="one">First</option>
                                    <option value="two" disabled="disabled">Second (disabled)
                                    </option>
                                    <option value="three">Third</option>
                                </select>
                            </div>

                            <div class="col-xl-4 col-md-6 mb-5">
                                <h5 class="sub-title">Hiding the Search Box</h5>
                                <hr>
                                <p>The select below is declared with the class<code>.js-example-basic-hide-search</code></p>
                                <select class="js-example-basic-hide-search col-sm-12" multiple="multiple" style="width: 75%">
                                    <optgroup label="Developer">
                                        <option value="AL">Smith</option>
                                        <option value="WY">Peter</option>
                                        <option value="WY">James</option>
                                        <option value="WY">Hanry Die</option>
                                        <option value="WY">John Doe</option>
                                        <option value="WY">Harry Poter</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="col-xl-8 col-md-12  mb-5">
                                <h5>Enable-Disable</h5>
                                <hr>
                                <p>The select below is declared with the class<code>.js-example-disabled</code></p>
                                <select class="js-example-disabled col-sm-8">
                                    <option value="AL">Smith</option>
                                    <option value="WY">Peter</option>
                                    <option value="WY">James</option>
                                    <option value="WY">Hanry Die</option>
                                    <option value="WY">John Doe</option>
                                    <option value="WY">Harry Poter</option>
                                </select>
                                <button class="btn  btn-success m-t-20 m-b-20 m-l-10   js-programmatic-enable">Enable</button>
                                <button class="btn  btn-danger m-t-20 m-b-20 m-l-10   js-programmatic-disable">Disable</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Select2 ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- select2 Js -->
<script src="assets/js/plugins/select2.full.min.js"></script>
<!-- form-select-custom Js -->
<script src="assets/js/pages/form-select-custom.js"></script>
@include('html.layouts.footer-bottom-link')
</body>
</html>
