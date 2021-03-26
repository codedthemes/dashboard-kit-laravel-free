<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css">
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
                            <h5 class="m-b-10">Clipboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item">Clipboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="row align-items-center mb-3">
                    <div class="col-md-8">
                        <h3>Clipboard</h3>
                        <p class="lead">It is the must need Clipboard with all possible options available. You can Copy the content whatever you required in page.</p>
                        <p class="f-w-500">Check out <a href="https://github.com/zenorocha/clipboard.js" target="_blank" class="badge bg-light-dark">Github</a></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Copy text from another element</label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="pc-clipboard-1" placeholder="Type some value to copy">
                                        <a href="#" class="btn btn-primary" data-clipboard="true" data-clipboard-target="#pc-clipboard-1"><i class="feather icon-copy"></i></a>
                                    </div>
                                    <small>You can do by adding a <code>data-clipboard-target</code> attribute in your trigger element</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Cut text from another element</label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <textarea class="form-control" id="pc-clipboard-3"
                                        rows="6">Lorem ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga.</textarea>
                                    <small>you can define a <code>data-clipboard-action</code> attribute to specify if you want to either <code>copy</code> or <code>cut</code> content</small><br>
                                    <a href="#" class="btn btn-danger mt-2" data-clipboard="true" data-clipboard-action="cut" data-clipboard-target="#pc-clipboard-3"> Cut to clipboard</a>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Copy text from attribute</label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <button class="btn btn-success" data-clipboard="true" data-clipboard-text="Just because you can doesn't mean you should — clipboard.js">
                                        Copy to clipboard
                                    </button>
                                    <br>
                                    <small>You can just include a <code>data-clipboard-text</code> attribute in your trigger element</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Copy From Container</label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div id="pc-clipboard-4" style="border: 4px solid #eaeaea; padding: 10px;">Lorem ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis
                                        santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga.</div>
                                    <a href="#" class="btn btn-primary mt-2" data-clipboard="true" data-clipboard-target="#pc-clipboard-4"> Copy to clipboard</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ form-element ] end -->
    </div>
    <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- tagify -->
<script src="assets/js/plugins/clipboard.min.js"></script>
<script>
    // basic example
    new ClipboardJS('[data-clipboard=true]').on('success', function(e) {
        e.clearSelection();
        alert('Copied!');
    });
    $(function() {});
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
