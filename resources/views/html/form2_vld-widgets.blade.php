<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    <link rel="stylesheet" href="assets/css/plugins/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="assets/css/plugins/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="assets/css/plugins/daterangepicker.css">
    <link rel="stylesheet" href="assets/css/plugins/bootstrap-switch.min.css">
    <link rel="stylesheet" href="assets/css/plugins/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/plugins/select2.min.css">
    <link rel="stylesheet" href="assets/js/plugins/markdown/bootstrap-markdown.min.css">
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
                            <h5 class="m-b-10">Form Widgets</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Validation</a></li>
                            <li class="breadcrumb-item">Form Widgets</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Form Widgets Validation Examples</h5>
                    </div>
                    <form id="pc-form_1">
                        <div class="card-body">
                            <div class="pc-portlet__body">
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Bootstrap Date Picker *</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <div class='input-group'>
                                            <input type='text' class="form-control" name="date" placeholder="Select date" id='pc-datepicker' />
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="feather icon-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <span class="form-text text-muted">Select a date</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Bootstrap Time Picker *</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <div class='input-group date'>
                                            <input class="form-control" id='pc-timepicker' placeholder="Select time" name="time" type="text" />
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="feather icon-clock"></i></span>
                                            </div>
                                        </div>
                                        <span class="form-text text-muted">Select time</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Bootstrap Date Range Picker *</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <div class='input-group' id='pc-daterangepicker'>
                                            <input type='text' class="form-control" name="daterange" placeholder="Select date range" />
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="feather icon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <span class="form-text text-muted">Select a date range</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Bootstrap Switch *</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <div class="input-group validate">
                                            <input data-switch="true" type="checkbox" name="switch" id="test" data-on-color="success" data-off-color="warning">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Bootstrap Select *</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <select class="form-control" id="pc-bootstrap_select" multiple name="select">
                                            <optgroup label="Picnic" data-max-options="2">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </optgroup>
                                            <optgroup label="Camping" data-max-options="2">
                                                <option>Tent</option>
                                                <option>Flashlight</option>
                                                <option>Toilet Paper</option>
                                            </optgroup>
                                        </select>
                                        <span class="form-text text-muted">Select at least 2 and maximum 4 options</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Select2 *</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <select class="form-control pc-select2" id="pc-select2" name="select2">
                                            <option></option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>
                                        <span class="form-text text-muted">Select an option</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Typeahead *</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <div class="input-group validate">
                                            <div class="pc-typeahead">
                                                <input class="form-control" id="pc-typeahead" type="text" name="typeahead" placeholder="States of USA">
                                            </div>
                                            <span class="form-text text-muted">Please select a state</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Markdown *</label>
                                    <div class="col-lg-7 col-md-9 col-sm-12">
                                        <div class="input-group validate">
                                            <textarea name="markdown" class="form-control" data-provide="markdown" rows="10"></textarea>
                                            <span class="form-text text-muted">Enter some markdown content</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-3 col-sm-12"></div>
                                <div class="col-lg-7 col-md-9 col-sm-12">
                                    <button class="btn btn-primary me-2">Submit</button>
                                    <button class="btn btn-secondary">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<script src="assets/js/plugins/bootstrap-datepicker.min.js"></script>
<script src="assets/js/plugins/bootstrap-timepicker.min.js"></script>
<script src="assets/js/plugins/moment.min.js"></script>
<script src="assets/js/plugins/daterangepicker.js"></script>
<script src="assets/js/plugins/bootstrap-switch.min.js"></script>
<script src="assets/js/plugins/bootstrap-select.min.js"></script>
<script src="assets/js/plugins/select2.full.min.js"></script>
<script src="assets/js/plugins/typeahead.bundle.min.js"></script>
<script src='assets/js/plugins/markdown/bootstrap-markdown.js'></script>
<!-- jquery-validation Js -->
<script src="assets/js/plugins/jquery.validate.min.js"></script>
<!-- sweet alert Js -->
<script src="assets/js/plugins/sweetalert.min.js"></script>
<script>
    $.fn.markdown.defaults.iconlibrary = 'fa';
    $.fn.markdown.defaults.buttons[0][0]['data'][2]['icon']['fa'] = 'fa fa-heading';
    $.fn.markdown.defaults.buttons[0][1]['data'][1]['icon']['fa'] = 'fa fa-image';
    $.fn.markdown.defaults.buttons[0][2]['data'][1]['icon']['fa'] = 'fa fa-list-ol';
    $.fn.timepicker.defaults = $.extend(true, {}, $.fn.timepicker.defaults, {
        icons: {
            up: 'feather icon-chevron-up',
            down: 'feather icon-chevron-down'
        }
    });
</script>

<script>
    $(function() {
        // datepicker
        $('#pc-datepicker').datepicker({
            todayHighlight: true,
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        });

        $('#pc-datetimepicker').change(function() {
            validator.element($(this));
        });

        // timepicker
        $('#pc-timepicker').timepicker({
            minuteStep: 1,
            showSeconds: true,
            showMeridian: true
        });

        // daterangepicker
        $('#pc-daterangepicker').daterangepicker({
            buttonClasses: ' btn',
            applyClass: 'btn-primary',
            cancelClass: 'btn-secondary'
        }, function(start, end, label) {
            var input = $('#pc-daterangepicker').find('.form-control');

            input.val(start.format('YYYY/MM/DD') + ' / ' + end.format('YYYY/MM/DD'));
            validator.element(input); // validate element
        });

        // bootstrap switch
        $('[data-switch=true]').bootstrapSwitch();
        $('[data-switch=true]').on('switchChange.bootstrapSwitch', function() {
            validator.element($(this)); // validate element
        });

        // bootstrap select
        $('#pc-bootstrap_select').selectpicker();
        $('#pc-bootstrap_select').on('changed.bs.select', function() {
            validator.element($(this)); // validate element
        });

        // select2
        $('#pc-select2').select2({
            placeholder: "Select a state",
        });
        $('#pc-select2').on('select2:change', function() {
            validator.element($(this)); // validate element
        });

        // typeahead
        var countries = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: 'assets/json/typehead/countries.json'
        });

        $('#pc-typeahead').typeahead(null, {
            name: 'countries',
            source: countries
        });
        $('#pc-typeahead').bind('typeahead:select', function(ev, suggestion) {
            validator.element($('#pc-typeahead')); // validate element
        });
    });
    $(function() {
        validator = $("#pc-form_1").validate({
            // define validation rules
            rules: {
                date: {
                    required: true,
                    date: true
                },
                daterange: {
                    required: true
                },
                datetime: {
                    required: true
                },
                time: {
                    required: true
                },
                select: {
                    required: true,
                    minlength: 2,
                    maxlength: 4
                },
                select2: {
                    required: true
                },
                typeahead: {
                    required: true
                },
                switch: {
                    required: true
                },
                markdown: {
                    required: true
                }
            },

            errorPlacement: function errorPlacement(error, element) {
                var $parent = $(element).closest('.input-group');

                // Do not duplicate errors
                if ($parent.find('.jquery-validation-error').length) {
                    return;
                }

                $parent.append(
                    error.addClass('jquery-validation-error small form-text invalid-feedback')
                );
            },
            highlight: function(element) {
                var $el = $(element);
                var $parent = $el.parents('.form-group');

                $el.addClass('is-invalid');

                // Select2 and Tagsinput
                if ($el.hasClass('select2-hidden-accessible') || $el.attr('data-role') === 'tagsinput') {
                    $el.parent().addClass('is-invalid');
                }
            },
            unhighlight: function(element) {
                $(element).parents('.form-group').find('.is-invalid').removeClass('is-invalid');
            }
        });
    });
</script>
@include('html.layouts.footer-bottom-link')</body>

</html>
