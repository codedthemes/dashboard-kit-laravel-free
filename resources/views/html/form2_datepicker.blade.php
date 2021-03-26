<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    <link rel="stylesheet" href="assets/css/plugins/bootstrap-datepicker3.min.css">
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
                            <h5 class="m-b-10">Bootstrap Datepicker</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item">Bootstrap Datepicker</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row mb-3">
            <div class="col-md-8">
                <h3>Bootstrap Date Picker</h3>
                <p class="lead">It is the must need Date Picker with all possible options available. You can tweak the settings whatever you required for Date selection.</p>
                <p class="f-w-500">Check out <a href="https://github.com/uxsolutions/bootstrap-datepicker" target="_blank" class="badge bg-light-dark">Github</a></p>
            </div>
        </div>
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="row align-items-center mb-3">
                    <div class="col-sm-12">
                        <a href="#" class="btn btn-success mt-3 mt-sm-0" data-bs-toggle="modal" data-bs-target="#pc-datepicker-modal">Launch DatePicker in Modal</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Preview</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Simple Input</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <input type="text" class="form-control" id="pc-datepicker-1" placeholder="Select date" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">With Input Group</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <div class="input-group date">
                                        <input type="text" class="form-control" placeholder="Select date" id="pc-datepicker-2" />
                                        <span class="input-group-text">
                                            <i class="feather icon-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Helper Button</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <div class="input-group date">
                                        <input type="text" class="form-control" value="05/20/2017" id="pc-datepicker-3" />
                                        <span class="input-group-text">
                                            <i class="feather icon-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Range Picker</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <div class="input-daterange input-group" id="pc-datepicker-5">
                                        <input type="text" class="form-control" />
                                        <span class="input-group-text"><i>to</i></span>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Inline Mode</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <div class id="pc-datepicker-6"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Position</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <div class="input-group date mb-3">
                                        <input type="text" class="form-control" placeholder="Top left" id="pc-datepicker-4_1" />
                                        <span class="input-group-text">
                                            <i class="feather icon-calendar"></i>
                                        </span>
                                    </div>
                                    <div class="input-group date mb-3">
                                        <input type="text" class="form-control" placeholder="Top right" id="pc-datepicker-4_2" />
                                        <span class="input-group-text">
                                            <i class="feather icon-calendar"></i>
                                        </span>
                                    </div>
                                    <div class="input-group date mb-3">
                                        <input type="text" class="form-control" placeholder="Bottom left" id="pc-datepicker-4_3" />
                                        <span class="input-group-text">
                                            <i class="feather icon-calendar"></i>
                                        </span>
                                    </div>
                                    <div class="input-group date mb-3">
                                        <input type="text" class="form-control" placeholder="Bottom right" id="pc-datepicker-4_4" />
                                        <span class="input-group-text">
                                            <i class="feather icon-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!--begin::Modal-->
<div class="modal fade" id="pc-datepicker-modal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bootstrap Date Picker Examples</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form class="pc-form">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Simple Setup</label>
                        <div class="col-lg-9 col-sm-12">
                            <input type="text" class="form-control" id="pc-datepicker-1_modal" placeholder="Select date" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">With Input Group</label>
                        <div class="col-lg-9 col-sm-12">
                            <div class="input-group date">
                                <input type="text" class="form-control" placeholder="Select date" id="pc-datepicker-2_modal" />
                                <span class="input-group-text">
                                    <i class="feather icon-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-secondary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end::Modal-->
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- bootstrap-datepicker -->
<script src="assets/js/plugins/bootstrap-datepicker.min.js"></script>
<script>
    arrows = {
        leftArrow: '<i class="feather icon-chevron-left"></i>',
        rightArrow: '<i class="feather icon-chevron-right"></i>'
    }
    // minimum setup
    $('#pc-datepicker-1').datepicker({
        todayHighlight: true,
        orientation: "bottom left",
        templates: arrows
    });

    // minimum setup for modal demo
    $('#pc-datepicker-1_modal').datepicker({
        todayHighlight: true,
        orientation: "bottom left",
        templates: arrows
    });

    // input group layout
    $('#pc-datepicker-2').datepicker({
        todayHighlight: true,
        orientation: "bottom left",
        templates: arrows
    });

    // input group layout for modal demo
    $('#pc-datepicker-2_modal').datepicker({
        todayHighlight: true,
        orientation: "bottom left",
        templates: arrows
    });

    // enable clear button
    $('#pc-datepicker-3, #pc-datepicker-3_validate').datepicker({
        todayBtn: "linked",
        clearBtn: true,
        todayHighlight: true,
        templates: arrows
    });

    // enable clear button for modal demo
    $('#pc-datepicker-3_modal').datepicker({
        todayBtn: "linked",
        clearBtn: true,
        todayHighlight: true,
        templates: arrows
    });

    // orientation
    $('#pc-datepicker-4_1').datepicker({
        orientation: "top left",
        todayHighlight: true,
        templates: arrows
    });

    $('#pc-datepicker-4_2').datepicker({
        orientation: "top right",
        todayHighlight: true,
        templates: arrows
    });

    $('#pc-datepicker-4_3').datepicker({
        orientation: "bottom left",
        todayHighlight: true,
        templates: arrows
    });

    $('#pc-datepicker-4_4').datepicker({
        orientation: "bottom right",
        todayHighlight: true,
        templates: arrows
    });

    // range picker
    $('#pc-datepicker-5').datepicker({
        todayHighlight: true,
        templates: arrows
    });

    // inline picker
    $('#pc-datepicker-6').datepicker({
        todayHighlight: true,
        templates: arrows
    });
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
