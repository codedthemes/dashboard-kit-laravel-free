<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    <link rel="stylesheet" href="assets/css/plugins/daterangepicker.css">
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
                            <h5 class="m-b-10">Bootstrap Daterangepicker</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item">Bootstrap Daterangepicker</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row mb-3">
            <div class="col-md-8">
                <h3>Date Range picker</h3>
                <p class="lead">This date range picker component creates a dropdown menu from which a user can select a range of dates.</p>
                <p class="f-w-500">Check out <a href="https://github.com/dangrossman/daterangepicker" target="_blank" class="badge bg-light-dark">Github</a></p>
            </div>
        </div>
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="row align-items-center mb-3">
                    <div class="col-sm-4">
                        <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pc-daterangepicker-modal">Launch Pickers in Modal</a>
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
                                    <input type='text' class="form-control" id="pc-daterangepicker-1" placeholder="Select time" type="text" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">With Input Group</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <div class='input-group' id='pc-daterangepicker-2'>
                                        <input type='text' class="form-control" placeholder="Select date range" />
                                        <span class="input-group-text"><i class="feather icon-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Input Initially Empty</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <div class='input-group' id='pc-daterangepicker-3'>
                                        <input type='text' class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Date with Time Picker</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <div class='input-group pull-right' id='pc-daterangepicker-4'>
                                        <input type='text' class="form-control" placeholder="Select date & time range" />
                                        <span class="input-group-text"><i class="feather icon-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Single Date Picker</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <div class='input-group pull-right' id='pc-daterangepicker-5'>
                                        <input type='text' class="form-control" placeholder="Select Date Range" />
                                        <span class="input-group-text"><i class="feather icon-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Predefined Ranges</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <div class='input-group pull-right' id='pc-daterangepicker-6'>
                                        <input type='text' class="form-control" placeholder="Select date range" />
                                        <span class="input-group-text"><i class="feather icon-calendar"></i></span>
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
<div class="modal fade" id="pc-daterangepicker-modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Bootstrap Date Range Picker Examples</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form class="pc-form pc-form--fit pc-form--label-right">
                <div class="modal-body">
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Simple Input</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <input type='text' class="form-control" id="pc-daterangepicker-1-modal" placeholder="Select time" type="text" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">With Input Group</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <div class='input-group' id='pc-daterangepicker-2-modal'>
                                <input type='text' class="form-control" placeholder="Select Date" />
                                <span class="input-group-text"><i class="feather icon-calendar"></i></span>
                            </div>
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

<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- daterangepicker -->
<script src="assets/js/plugins/moment.min.js"></script>
<script src="assets/js/plugins/daterangepicker.js"></script>
<script>
    // minimum setup
    $('#pc-daterangepicker-1, #pc-daterangepicker-1-modal').daterangepicker({
        buttonClasses: ' btn',
        applyClass: 'btn-primary',
        cancelClass: 'btn-secondary'
    });

    // input group and left alignment setup
    $('#pc-daterangepicker-2').daterangepicker({
        buttonClasses: ' btn',
        applyClass: 'btn-primary',
        cancelClass: 'btn-secondary'
    }, function(start, end, label) {
        $('#pc-daterangepicker-2 .form-control').val(start.format('YYYY-MM-DD') + ' / ' + end.format('YYYY-MM-DD'));
    });

    $('#pc-daterangepicker-2-modal').daterangepicker({
        buttonClasses: ' btn',
        applyClass: 'btn-primary',
        cancelClass: 'btn-secondary'
    }, function(start, end, label) {
        $('#pc-daterangepicker-2 .form-control').val(start.format('YYYY-MM-DD') + ' / ' + end.format('YYYY-MM-DD'));
    });
    $(function() {
        $('input[name="datefilter"]').daterangepicker({
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            }
        });
        $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
        });
        $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
    });
    $('#pc-daterangepicker-3').daterangepicker({
        buttonClasses: ' btn',
        applyClass: 'btn-primary',
        cancelClass: 'btn-secondary'
    }, function(start, end, label) {
        $('#pc-daterangepicker-3').val(start.format('YYYY-MM-DD') + ' / ' + end.format('YYYY-MM-DD'));
    });


    // date & time
    $('#pc-daterangepicker-4').daterangepicker({
        buttonClasses: ' btn',
        applyClass: 'btn-primary',
        cancelClass: 'btn-secondary',

        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY h:mm A'
        }
    }, function(start, end, label) {
        $('#pc-daterangepicker-4 .form-control').val(start.format('MM/DD/YYYY h:mm A') + ' / ' + end.format('MM/DD/YYYY h:mm A'));
    });

    // date picker
    $('#pc-daterangepicker-5').daterangepicker({
        buttonClasses: ' btn',
        applyClass: 'btn-primary',
        cancelClass: 'btn-secondary',

        singleDatePicker: true,
        showDropdowns: true,
        locale: {
            format: 'MM/DD/YYYY'
        }
    }, function(start, end, label) {
        $('#pc-daterangepicker-5 .form-control').val(start.format('MM/DD/YYYY') + ' / ' + end.format('MM/DD/YYYY'));
    });

    // predefined ranges
    var start = moment().subtract(29, 'days');
    var end = moment();

    $('#pc-daterangepicker-6').daterangepicker({
        buttonClasses: ' btn',
        applyClass: 'btn-primary',
        cancelClass: 'btn-secondary',
        startDate: start,
        endDate: end,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, function(start, end, label) {
        $('#pc-daterangepicker-6 .form-control').val(start.format('MM/DD/YYYY') + ' / ' + end.format('MM/DD/YYYY'));
    });
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
