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
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Single Select</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
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
                                <small class="d-block">The<code>select2</code> can take a regular select box like this...</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Multi Select</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <select class="js-example-basic-multiple col-sm-12" multiple="multiple">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="WY">Coming</option>
                                    <option value="WY">Hanry Die</option>
                                    <option value="WY">John Doe</option>
                                </select>
                                <small class="d-block">The select below is declared with the<code>multiple</code> attribute</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">With Placeholder</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <select class="js-example-placeholder-multiple col-sm-12">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="WY">Coming</option>
                                    <option value="WY">Hanry Die</option>
                                    <option value="WY">John Doe</option>
                                </select>
                                <small class="d-block"><code>select2</code> uses the <code>placeholder</code> attribute on multiple select boxes</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Tagging Support</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <select class="js-example-tags col-sm-12" multiple="multiple">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="WY">Coming</option>
                                    <option value="WY">Hanry Die</option>
                                    <option value="WY">John Doe</option>
                                </select>
                                <small class="d-block">The select below is declared with the class<code>.js-example-tags</code></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Automatic Tokenization</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <select class="js-example-tokenizer col-sm-12" multiple="multiple">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="WY">Coming</option>
                                    <option value="WY">Hanry Die</option>
                                    <option value="WY">John Doe</option>
                                </select>
                                <small class="d-block">The select below is declared with the class<code>.js-example-tokenizer</code></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">RTL Support</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <select class="js-example-rtl col-sm-12" multiple="multiple">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="WY">Coming</option>
                                    <option value="WY">Hanry Die</option>
                                    <option value="WY">John Doe</option>
                                </select>
                                <small class="d-block">The select below is declared with the class<code>.js-example-rtl</code></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Limiting the Number of Selections</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <select class="js-example-basic-multiple-limit col-sm-12" multiple="multiple">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="WY">Coming</option>
                                    <option value="WY">Hanry Die</option>
                                    <option value="WY">John Doe</option>
                                </select>
                                <small class="d-block">The select below is declared with the class<code>.js-example-basic-multiple-limit</code></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Diacritics Support</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <select class="js-example-diacritics col-sm-12" multiple="multiple">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="WY">Coming</option>
                                    <option value="WY">Hanry Die</option>
                                    <option value="WY">John Doe</option>
                                </select>
                                <small class="d-block">The select below is declared with the class<code>.js-example-diacritics</code></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Responsive Width</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <select class="js-example-responsive col-sm-12" multiple="multiple" style="width:75%;">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="WY">Coming</option>
                                    <option value="WY">Hanry Die</option>
                                    <option value="WY">John Doe</option>
                                </select>
                                <small class="d-block">The select below is declared with the class<code>.js-example-responsive</code></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Loading with Array</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <select class="js-example-data-array col-sm-12"></select>
                                <small class="d-block">The select below is declared with the class<code>.js-example-data-array</code></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Load Remote Data ( Ajax )</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <select class="js-data-example-ajax col-sm-12">
                                    <option value="3620194" selected="selected">select2</option>
                                </select>
                                <small class="d-block">The select below is declared with the class<code>.js-data-example-ajax</code></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Disabled Results</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <select class="js-example-disabled-results col-sm-12">
                                    <option value="one">First</option>
                                    <option value="two" disabled="disabled">Second (disabled)
                                    </option>
                                    <option value="three">Third</option>
                                </select>
                                <small class="d-block">The select below is declared with the class<code>.js-example-disabled-results</code></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Hiding the Search Box</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
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
                                <small class="d-block">The select below is declared with the class<code>.js-example-basic-hide-search</code></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Enable-Disable</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <select class="js-example-disabled col-sm-8">
                                    <option value="AL">Smith</option>
                                    <option value="WY">Peter</option>
                                    <option value="WY">James</option>
                                    <option value="WY">Hanry Die</option>
                                    <option value="WY">John Doe</option>
                                    <option value="WY">Harry Poter</option>
                                </select>
                                <div class="d-block">
                                    <button class="btn btn-sm btn-success m-t-20 m-b-20 js-programmatic-enable">Enable</button>
                                    <button class="btn btn-sm btn-danger m-t-20 m-b-20 m-l-10 js-programmatic-disable">Disable</button>
                                </div>
                                <small class="d-block">The select below is declared with the class<code>.js-example-disabled</code></small>
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
<!--end::Modal-->
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- select2 Js -->
<script src="assets/js/plugins/select2.full.min.js"></script>
<!-- form-select-custom Js -->
<script src="assets/js/pages/form-select-custom.js"></script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
