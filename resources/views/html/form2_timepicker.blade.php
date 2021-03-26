<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    <link rel="stylesheet" href="assets/css/plugins/bootstrap-timepicker.min.css">
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
                            <h5 class="m-b-10">Bootstrap Timepicker</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item">Bootstrap Timepicker</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row mb-3">
            <div class="col-md-8">
              <h3>Bootstrap Timepicker</h3>
              <p class="lead">Simple Bootstrap Timepicker with all possible options included for grab the time.</p>
              <p class="f-w-500">Check out <a href="https://github.com/jdewit/bootstrap-timepicker" target="_blank" class="badge bg-light-dark">Github</a></p>
            </div>
        </div>
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
              <div class="row align-items-center mb-3">
                  <div class="col-sm-12">
                      <a href="#" class="btn btn-success mt-3 mt-sm-0" data-bs-toggle="modal" data-bs-target="#pc-timepicker-modal">Launch Timepicker in Modal</a>
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
                                    <input class="form-control" id="pc-timepicker-1" type="text" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">With Input Group</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <div class="input-group timepicker">
                                        <input class="form-control" id="pc-timepicker-2" placeholder="Select time" type="text" />
                                        <span class="input-group-text">
                                            <i class="feather icon-clock"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">With Meridiem</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <div class="input-group timepicker">
                                        <span class="input-group-text">
                                            <i class="feather icon-clock"></i>
                                        </span>
                                        <input class="form-control" id="pc-timepicker-3" placeholder="Select time" type="text" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Steps</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <div class="input-group timepicker">
                                        <span class="input-group-text">
                                            <i class="feather icon-clock"></i>
                                        </span>
                                        <input class="form-control" id="pc-timepicker-4" placeholder="Select time" type="text" />
                                    </div>
                                    <small>Second Steps:60 & Minute Steps:15</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">24 Hours</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <div class="input-group timepicker">
                                        <span class="input-group-text">
                                            <i class="feather icon-clock"></i>
                                        </span>
                                        <input class="form-control" id="pc-timepicker-5" type="text" />
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
<div class="modal fade" id="pc-timepicker-modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Bootstrap Time Picker Examples</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form class="pc-form pc-form--fit pc-form--label-right">
                <div class="modal-body">
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Minimum Setup</label>
                        <div class="col-lg-9 col-sm-12">
                            <input class="form-control" id="pc-timepicker-1-modal" placeholder="Select time" type="text" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Current Time</label>
                        <div class="col-lg-9 col-sm-12">
                            <div class="input-group timepicker">
                                <input class="form-control" id="pc-timepicker-2-modal" placeholder="Select time" type="text" />
                                <span class="input-group-text">
                                    <i class="feather icon-clock"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">With Meridiem</label>
                        <div class="col-lg-9 col-sm-12">
                            <div class="input-group timepicker">
                                <span class="input-group-text">
                                    <i class="feather icon-clock"></i>
                                </span>
                                <input class="form-control" id="pc-timepicker-3-modal" placeholder="Select time" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Preset Time</label>
                        <div class="col-lg-9 col-sm-12">
                            <div class="input-group timepicker">
                                <span class="input-group-text">
                                    <i class="feather icon-clock"></i>
                                </span>
                                <input class="form-control" id="pc-timepicker-4-modal" value="10:30:20 AM" type="text" />
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
<script src="assets/js/plugins/bootstrap-timepicker.min.js"></script>
<script>
    $.fn.timepicker.defaults = $.extend(true, {}, $.fn.timepicker.defaults, {
        icons: {
            up: 'feather icon-chevron-up',
            down: 'feather icon-chevron-down'
        }
    });
    // minimum setup
    $('#pc-timepicker-1, #pc-timepicker-1-modal').timepicker();

    // minimum setup
    $('#pc-timepicker-2, #pc-timepicker-2-modal').timepicker({
        minuteStep: 1,
        defaultTime: '',
        showSeconds: true,
        showMeridian: false,
        snapToStep: true
    });

    // default time
    $('#pc-timepicker-3, #pc-timepicker-3-modal').timepicker({
        defaultTime: '11:45:20 AM',
        minuteStep: 1,
        showSeconds: true,
        showMeridian: true
    });

    // default time
    $('#pc-timepicker-4, #pc-timepicker-4-modal').timepicker({
        defaultTime: '10:30:20 AM',
        minuteStep: 15,
        secondStep:30,
        showSeconds: true,
        showMeridian: true,
    });

    // default time
    $('#pc-timepicker-5').timepicker({
        defaultTime: '10:30:20',
        minuteStep: 15,
        secondStep:30,
        showSeconds: true,
        maxHours:24,
        showMeridian: false
    });
    // validation state demos
    // minimum setup
    $('#pc-timepicker-3_validate').timepicker({
        minuteStep: 1,
        showSeconds: true,
        showMeridian: false,
        snapToStep: true
    });
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
