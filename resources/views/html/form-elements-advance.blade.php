<!DOCTYPE html>
<html lang="en">
<head>
    @include('html.layouts.head')
    <link rel="stylesheet" href="assets/css/plugins/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="assets/css/plugins/bootstrap-tagsinput-typeahead.css">
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
                            <h5 class="m-b-10">Basic Form Inputs</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item">Basic Form Inputs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Bootstrap-Tags-Input ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Bootstrap Tags Input</h5>
                        <span class="d-block m-t-5">Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                    </div>
                    <div class="card-body">
                        <div class="mb-5">
                            <h5>Markup</h5>
                            <hr>
                            <p>Just add <code>data-role="tagsinput"</code> to your input field to automatically change it to a tags input field.</p>
                            <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput" />
                        </div>
                        <div class="mb-5">
                            <h5 class="mt-5">True Multi Value</h5>
                            <hr>
                            <p>Use a <code>&lt;select multiple /&gt;</code> as your input element for a tags input, to gain true multi value support. Instead of a comma separated string, the values will be set in an array.
                                Existing <code>&lt;option /&gt;</code>elements will automatically be set as tags. This makes it also possible to create tags containing a comma.</p>
                            <select multiple data-role="tagsinput">
                                <option value="Amsterdam">Amsterdam</option>
                                <option value="Washington">Washington</option>
                                <option value="Sydney">Sydney</option>
                                <option value="Beijing">Beijing</option>
                                <option value="Cairo">Cairo</option>
                            </select>
                        </div>
                        <div class="mb-5">
                            <h5 class="mt-5">Typeahead</h5>
                            <hr>
                            <p>Typeahead is not included in Bootstrap 3, so you'll have to include your own typeahead library. I'd recommed <a href="http://twitter.github.io/typeahead.js/">typeahead.js</a>. An example of using
                                this is shown below.</p>
                            <input type="text" value="Amsterdam,Washington" class="typeahead" />
                        </div>
                        <div class="mb-5">
                            <h5>Categorizing Tags</h5>
                            <hr>
                            <p>You can set a fixed css class for your tags, or determine dynamically by providing a custom function.</p>
                            <input type="text" class="category-tag" />
                        </div>
                        <div class="mb-5">
                            <h5>Objects As Tags</h5>
                            <hr>
                            <p>Instead of just adding strings as tags, bind objects to your tags. This makes it possible to set id values in your input field's value, instead of just the tag's text.</p>
                            <input type="text" class="objects-tag" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Bootstrap-Tags-Input ] end -->

            <!-- [ Bootstrap maxlength ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>bootstrap Maxlength</h5>
                        <span class="d-block m-t-5">Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-xl-4 mb-5">
                                <h5>Default</h5>
                                <hr>
                                <p>The badge will show up by default when the remaining chars are <code>10</code> or <code>less</code>:</p>
                                <input type="text" class="form-control" placeholder="Type your keywords..." maxlength="10">
                            </div>
                            <div class="col-sm-12 col-xl-4 mb-5">
                                <h5>Threshold</h5>
                                <hr>
                                <p>Do you want the badge to show up when there are <code>20 chars</code> or less? Use the <code>threshold</code> option:</p>
                                <input type="text" class="form-control thresold-i" placeholder="Type your keywords..." maxlength="20">
                            </div>
                            <div class="col-sm-12 col-xl-4 mb-5">
                                <h5>Color-Lables</h5>
                                <hr>
                                <p>Just add <code>color-class</code>with <code>input</code></p>
                                <input type="text" class="form-control color-class" placeholder="Type your keywords..." maxlength="25">
                            </div>
                            <div class="col-sm-12 col-xl-4 mb-5">
                                <h5>Play with Positions</h5>
                                <hr>
                                <p>All you need to do is specify the <code>placement option</code>, with one of those strings. If none is specified, the positioning will be defauted to <code>'top-right'</code>.</p>
                                <input type="text" class="form-control position-class" placeholder="Type your keywords..." maxlength="25">
                            </div>
                            <div class="col-sm-12 col-xl-8">
                                <h5>Also Working with Textarea</h5>
                                <hr>
                                <p>Bootstrap maxlength supports textarea as well as inputs. Even on old IE.</p>
                                <textarea class="form-control max-textarea" maxlength="255" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Bootstrap maxlength ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- bootstrap-tagsinput-latest Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script src="assets/js/plugins/bootstrap-tagsinput.min.js"></script>
<!-- bootstrap-maxlength Js -->
<script src="assets/js/plugins/bootstrap-maxlength.js"></script>
<!-- form-advance custom js -->
<script src="assets/js/pages/form-advance-custom.js"></script>
@include('html.layouts.footer-bottom-link')
</body>
</html>
