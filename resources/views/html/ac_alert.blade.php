<!DOCTYPE html>
<html lang="en">

<head>
    @@include('./layouts/head.html')
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    @@include('./layouts/head-bottom-link.html')
</head>
@@include('layouts/layout-vertical.html')
<!-- [ Main Content ] start -->
<section class="pc-container">
    <div class="pcoded-content">
        <div class="row mb-3">
            <div class="col-md-8">
                <h3>Sweet Alert</h3>
                <p class="lead">Sweet Alert is a beautiful replacement for your alert message.</p>
                <p class="f-w-500">Check out <a href="https://dashboardkit.io/bootstrap/docs/index-ac-package.html#page-alert" target="_blank" class="badge bg-light-primary">Documentation</a> <a href="https://sweetalert2.github.io/" target="_blank" class="badge bg-light-dark">github</a></p>
            </div>
        </div>
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sweetalert ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Sweetalert 2</h5>
                    </div>
                    <div class="card-body btn-page">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Basic message</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-message">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Title with a text under</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-tit-txt">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Title with a error icon</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-danger bs-error-icon">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Long content inside</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-long-content">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Custom HTML</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-cust-html">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">dialog with three buttons</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-tre-button">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">custom positioned</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-cust-position">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Custom animation</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-cust-anim">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">By passing a parameter, you can execute something</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-pass-para">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Message with a custom image</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-cust-img">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Message with custom width, padding, background and animated Nyan Cat</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-cust-full">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Auto close timer</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-auto-close">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">RTL Languages</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-rtl-lang">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">AJAX request</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-ajex-req">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Chaining modals</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-chain-modal">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Dynamic queue</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-dynamic-que">Try me!</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Mixin</h5>
                    </div>
                    <div class="card-body btn-page">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Mixin example</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-mixin-exp">Try me!</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>ICONS</h5>
                    </div>
                    <div class="card-body btn-page">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Success icons</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-success bs-success-ico">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Error icons</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-danger bs-error-ico">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Warning icons</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-warning bs-warning-ico">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Info icons</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-info bs-info-ico">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Question icons</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-question-ico">Try me!</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Input types</h5>
                    </div>
                    <div class="card-body btn-page">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Text</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-text-input">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Email</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-email-input">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Url</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-url-input">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Password</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-password-input">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Textarea</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-textarea-input">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Select</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-select-input">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Radio</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-radio-input">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Checkbox</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-checkbox-input">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">File</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-file-input">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Range</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-range-input">Try me!</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">Multiple inputs</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <button class="btn btn-light-primary bs-multiple-input">Try me!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ sweetalert ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
@@include('./layouts/footer.html')
<!-- sweet alert Js -->
<script src="assets/js/plugins/sweetalert.min.js"></script>
<script src="assets/js/plugins/sweetalert2.all.min.js"></script>
<script src="assets/js/pages/ac-alert.js"></script>
@@include('./layouts/footer-bottom-link.html')
</body>

</html>
