<!DOCTYPE html>
<html lang="en">

<head>
    @@include('./layouts/head.html')
    <link rel="stylesheet" href="assets/css/plugins/bootstrap-select.min.css">
    @@include('./layouts/head-bottom-link.html')
</head>
@@include('layouts/layout-vertical.html')
<!-- [ Main content ] start -->
<section class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Bootstrap Select</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item">Bootstrap Select</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="row align-items-center mb-3">
                    <div class="col-md-8">
                        <h3>Bootstrap Select</h3>
                        <p class="lead">plugin that brings <code>&lt;select&gt;</code> elements into intuitive multiselection, searching, and much more.</p>
                        <p class="f-w-500">Check out <a href="https://github.com/snapappointments/bootstrap-select" target="_blank" class="badge bg-light-dark">Github</a></p>
                        <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#pc-select-modal">Launch modal examples</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Basic examples</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Simple Setup</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                  <select class="form-control pc-selectpicker">
                                    <option>Mustard</option>
                                    <option>Ketchup</option>
                                    <option>Relish</option>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">With optgroups</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <select class="form-control pc-selectpicker">
                                      <optgroup label="Picnic">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                      </optgroup>
                                      <optgroup label="Camping">
                                        <option>Tent</option>
                                        <option>Flashlight</option>
                                        <option>Toilet Paper</option>
                                      </optgroup>
                                    </select>
                                    <small class="form-text text-muted">Select boxes with optgroups</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Multiple Select</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <select class="form-control pc-selectpicker" multiple>
                                      <option>Mustard</option>
                                      <option>Ketchup</option>
                                      <option>Relish</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Live search</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Live Search</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <select class="form-control pc-selectpicker" data-size="7" data-live-search="true">
                                      <option>Hot Dog, Fries and a Soda</option>
                                      <option>Burger, Shake and a Smile</option>
                                      <option>Sugar, Spice and all things nice</option>
                                    </select>
                                    <small>You can add a search input by passing <code>data-live-search="true"</code> attribute</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Key Words</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <select class="form-control pc-selectpicker" data-live-search="true">
                                        <option data-tokens="fruit">Apple, Pinapple, Banana</option>
                                        <option data-tokens="car">Rollce Royce, Fiat, Suzuki</option>
                                    </select>
                                    <small class="form-text text-muted">Add Key words to options to improve their searchability using <code>data-tokens</code>. Try <code>car, fruit</code></small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Limit no. of selections</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <select class="form-control pc-selectpicker mb-3" multiple data-max-options="2" data-width="200px">
                                      <option>Mustard</option>
                                      <option>Ketchup</option>
                                      <option>Relish</option>
                                    </select>
                                    <select class="form-control pc-selectpicker mb-3" multiple data-width="200px">
                                      <optgroup label="Condiments" data-max-options="2">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                      </optgroup>
                                      <optgroup label="Breads" data-max-options="2">
                                        <option>Plain</option>
                                        <option>Steamed</option>
                                        <option>Toasted</option>
                                      </optgroup>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Custom button text</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Placeholder</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <select class="form-control pc-selectpicker" title="Choose one of the following...">
                                      <option>Mustard</option>
                                      <option>Ketchup</option>
                                      <option>Relish</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Selected</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <select class="form-control pc-selectpicker" title="Choose one of the following...">
                                      <option title="Combo 1">Hot Dog, Fries and a Soda</option>
                                      <option title="Combo 2">Burger, Shake and a Smile</option>
                                      <option title="Combo 3" selected>Sugar, Spice and all things nice</option>
                                    </select>
                                    <small>Set the <code>title</code> attribute on individual options to display alternative text when the option is selected:</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Selected Text Format</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <select class="form-control pc-selectpicker" multiple data-selected-text-format="count">
                                      <option>Mustard</option>
                                      <option>Ketchup</option>
                                      <option>Relish</option>
                                    </select>
                                    <small>select <code>count</code></small>
                                    <div class="mt-2"></div>
                                    <select class="form-control pc-selectpicker" multiple data-selected-text-format="count > 3">
                                      <option>Mustard</option>
                                      <option>Ketchup</option>
                                      <option>Relish</option>
                                      <option>Onions</option>
                                    </select>
                                    <small>select <code>count>3</code></small>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Styling</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Style Options</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                  <select class="form-group pc-selectpicker mb-2" data-style="btn-primary">
                                    <option>Option</option>
                                  </select>

                                  <select class="form-group pc-selectpicker mb-2" data-style="btn-info">
                                    <option>Option</option>
                                  </select>

                                  <select class="form-group pc-selectpicker mb-2" data-style="btn-success">
                                    <option>Option</option>
                                  </select>

                                  <select class="form-group pc-selectpicker mb-2" data-style="btn-warning">
                                    <option>Option</option>
                                  </select>

                                  <select class="form-group pc-selectpicker mb-2" data-style="btn-danger">
                                    <option>Option</option>
                                  </select>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Checkmark on Select</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                  <select class="form-control selectpicker show-tick">
                                    <option>Mustard</option>
                                    <option>Ketchup</option>
                                    <option>Relish</option>
                                  </select>
                                  <small><code>show-tick</code> class</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Width</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <select class="form-control pc-selectpicker mb-2" data-width="auto" title="Auto">
                                      <option>Mustard</option>
                                      <option>Ketchup</option>
                                      <option>All Of the Above....</option>
                                    </select>
                                    <select class="form-control pc-selectpicker mb-2" data-width="fit" title="fit">
                                      <option>Mustard</option>
                                      <option>Ketchup</option>
                                      <option>All Of the Above....</option>
                                    </select>
                                    <select class="form-control pc-selectpicker mb-2" data-width="150px" title="150px">
                                      <option>Mustard</option>
                                      <option>Ketchup</option>
                                      <option>All Of the Above....</option>
                                    </select>
                                    <select class="form-control pc-selectpicker mb-2" data-width="75%" title="75%">
                                      <option>Mustard</option>
                                      <option>Ketchup</option>
                                      <option>All Of the Above....</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Customize options</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Icons</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <select class="form-control pc-selectpicker">
                                        <option data-icon="feather icon-bell">Mustard</option>
                                        <option data-icon="feather icon-camera">Ketchup</option>
                                        <option data-icon="feather icon-search">Relish</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Subtext</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <select class="form-control pc-selectpicker">
                                        <option data-subtext="French's">Mustard</option>
                                        <option data-subtext="Heinz">Ketchup</option>
                                        <option data-subtext="Sweet">Relish</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main content ] end -->
    </div>
</section>
<!--begin::Modal-->
<div class="modal fade" id="pc-select-modal" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Bootstrap Touchspin Examples</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form class="pc-form pc-form--label-right">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Minimum Setup</label>
                        <div class="col-lg-9 col-sm-12">
                            <select class="form-control pc-selectpicker">
                                <option>Nextro</option>
                                <option>Empire</option>
                                <option>Able</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end::Modal-->
<!-- [ Main content ] end -->
@@include('./layouts/footer.html')
<!-- tagify -->
<script src="assets/js/plugins/bootstrap-select.min.js"></script>
<script>
    $('.pc-selectpicker').selectpicker();
</script>
@@include('./layouts/footer-bottom-link.html')
</body>

</html>
