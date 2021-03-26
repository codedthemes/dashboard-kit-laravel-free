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
                            <h5 class="m-b-10">Validation States</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Validation</a></li>
                            <li class="breadcrumb-item">Validation States</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Default Form Validation States</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group validated">
                                <label class="form-control-label" for="inputSuccess1">Input with success</label>
                                <input type="text" class="form-control is-valid" id="inputSuccess1">
                                <div class="valid-feedback">Success! You've done it.</div>
                                <small class="form-text text-muted">Example help text that remains unchanged.</small>
                            </div>
                            <div class="form-group validated">
                                <label class="form-control-label" for="inputWarning1">Input with error</label>
                                <input type="text" class="form-control is-invalid" id="inputWarning1">
                                <div class="invalid-feedback">Shucks, check the formatting of that and try again.</div>
                                <small class="form-text text-muted">Example help text that remains unchanged.</small>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Horizontal Form Validation States</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row validated">
                                <label class="col-form-label col-lg-3">Input with success</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control is-valid">
                                    <div class="valid-feedback">Success! You've done it.</div>
                                    <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                </div>
                            </div>
                            <div class="form-group row validated">
                                <label class="col-form-label col-lg-3">Input with error</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control is-invalid">
                                    <div class="invalid-feedback">Shucks, check the formatting of that and try again.</div>
                                    <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <label class=" col-lg-3"></label>
                            <div class="col-lg-9">
                                <button class="btn btn-primary me-2">Submit</button>
                                <button class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Input Group Validation States</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group validated">
                                <label class="form-control-label" for="inputSuccess1">Left Addon</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="feather icon-mail"></i></span></div>
                                    <input type="text" class="form-control is-valid" placeholder="Email">
                                    <div class="valid-feedback">Success! You've done it.</div>
                                </div>
                                <span class="form-text text-muted">Example help text that remains unchanged.</span>
                            </div>
                            <div class="form-group validated">
                                <label class="form-control-label" for="inputWarning1">Right Addon</label>
                                <div class="input-group">
                                    <input type="text" class="form-control is-invalid" value="4444a" placeholder="Email">
                                    <div class="input-group-append"><span class="input-group-text">USD</span></div>
                                    <div class="invalid-feedback">Shucks, check the formatting of that and try again.</div>
                                </div>
                                <span class="form-text text-muted">Example help text that remains unchanged.</span>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Checkbox & Radio Validation States</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group validated">
                                <label class="form-control-label" for="inputSuccess1">Checkboxes</label>
                                <div class="custom-control custom-checkbox is-valid">
                                    <input type="checkbox" class="custom-control-input" id="customvalid1" required>
                                    <label class="custom-control-label" for="customvalid1">Option 1</label>
                                </div>
                                <div class="custom-control custom-checkbox is-valid">
                                    <input type="checkbox" class="custom-control-input" id="customvalid2" required>
                                    <label class="custom-control-label" for="customvalid2">Option 2</label>
                                </div>
                                <div class="custom-control custom-checkbox is-valid">
                                    <input type="checkbox" class="custom-control-input" id="customvalid3" required>
                                    <label class="custom-control-label" for="customvalid3">Option 3</label>
                                </div>
                                <div class="valid-feedback">Success! You've done it.</div>
                                <span class="form-text text-muted">Example help text that remains unchanged.</span>
                            </div>
                            <div class="form-group validated">
                                <label class="form-control-label d-block" for="inputSuccess1">Inline Checkboxes</label>
                                <div class="custom-control custom-checkbox is-invalid custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customvalid21" required>
                                    <label class="custom-control-label" for="customvalid21">Option 1</label>
                                </div>
                                <div class="custom-control custom-checkbox is-invalid custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customvalid22" required>
                                    <label class="custom-control-label" for="customvalid22">Option 2</label>
                                </div>
                                <div class="custom-control custom-checkbox is-invalid custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customvalid23" required>
                                    <label class="custom-control-label" for="customvalid23">Option 3</label>
                                </div>
                                <div class="invalid-feedback">Success! You've done it.</div>
                                <span class="form-text text-muted">Example help text that remains unchanged.</span>
                            </div>
                            <div class="form-group validated">
                                <label class="form-control-label" for="inputSuccess1">Radios</label>
                                <div class="custom-control custom-radio is-valid">
                                    <input type="radio" class="custom-control-input" id="customvalid31" required>
                                    <label class="custom-control-label" for="customvalid31">Option 1</label>
                                </div>
                                <div class="custom-control custom-radio is-valid">
                                    <input type="radio" class="custom-control-input" id="customvalid32" required>
                                    <label class="custom-control-label" for="customvalid32">Option 2</label>
                                </div>
                                <div class="custom-control custom-radio is-valid">
                                    <input type="radio" class="custom-control-input" id="customvalid33" required>
                                    <label class="custom-control-label" for="customvalid33">Option 3</label>
                                </div>
                                <div class="valid-feedback">Success! You've done it.</div>
                                <span class="form-text text-muted">Example help text that remains unchanged.</span>
                            </div>
                            <div class="form-group validated">
                                <label class="form-control-label d-block" for="inputSuccess1">Inline Radios</label>
                                <div class="custom-control custom-radio is-invalid custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customvalid41" required>
                                    <label class="custom-control-label" for="customvalid41">Option 1</label>
                                </div>
                                <div class="custom-control custom-radio is-invalid custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customvalid42" required>
                                    <label class="custom-control-label" for="customvalid42">Option 2</label>
                                </div>
                                <div class="custom-control custom-radio is-invalid custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customvalid43" required>
                                    <label class="custom-control-label" for="customvalid43">Option 3</label>
                                </div>
                                <div class="invalid-feedback">Success! You've done it.</div>
                                <span class="form-text text-muted">Example help text that remains unchanged.</span>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Icon Input Validation States</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group validated">
                                <label class="form-control-label" for="inputSuccess1">Left Icon</label>
                                <div class="input-group search-form">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent"><i class="feather icon-map-pin"></i></span>
                                    </div>
                                    <input type="text" class="form-control is-valid" placeholder="Email">
                                </div>
                                <div class="valid-feedback">Success! You've done it.</div>
                                <span class="form-text text-muted">Example help text that remains unchanged.</span>
                            </div>
                            <div class="form-group validated">
                                <label class="form-control-label" for="inputWarning1">Right Icon</label>
                                <div class="input-group search-form">
                                    <input type="text" class="form-control is-invalid" placeholder="Email">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-transparent p-r-40"><i class="feather icon-map-pin"></i></span>
                                    </div>
                                </div>
                                <div class="invalid-feedback">Shucks, check the formatting of that and try again.</div>
                                <span class="form-text text-muted">Example help text that remains unchanged.</span>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-secondary">Cancel</button>
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
@include('html.layouts.footer-bottom-link')</body>

</html>
