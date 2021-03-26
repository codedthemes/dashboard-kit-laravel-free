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
                            <h5 class="m-b-10">Validation Control</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Validation</a></li>
                            <li class="breadcrumb-item">Validation Control</li>
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
                        <h5>Default Validation 1</h5>
                    </div>
                    <form id="kt_form_1">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12">Email *</label>
                                <div class="col-lg-9 col-sm-12">
                                    <input type="text" class="form-control" name="email" placeholder="Enter your email">
                                    <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12">URL *</label>
                                <div class="col-lg-9 col-sm-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="url" placeholder="Enter your url">
                                        <div class="input-group-append"><span class="input-group-text">.via.com</span></div>
                                    </div>
                                    <span class="form-text text-muted">Please enter your website URL.</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12">Digits</label>
                                <div class="col-lg-9 col-sm-12">
                                    <div class="input-group">
                                        <div class="pc-input-icon pc-input-icon--left">
                                            <input type="text" class="form-control" name="digits" placeholder="Enter digits">
                                            <span class="pc-input-icon__icon pc-input-icon__icon--left"><span><i class="fas fa-calculator"></i></span></span>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted">Please enter only digits</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12">Credit Card</label>
                                <div class="col-lg-9 col-sm-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="creditcard" placeholder="Enter card number">
                                        <div class="input-group-append"><span class="input-group-text"><i class="feather icon-credit-card"></i></span></div>
                                    </div>
                                    <span class="form-text text-muted">Please enter your credit card number</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12">US Phone</label>
                                <div class="col-lg-9 col-sm-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="phone" placeholder="Enter phone">
                                        <div class="input-group-append"><span class="btn btn-primary btn-icon"><i class="feather icon-phone"></i></span></div>
                                    </div>
                                    <span class="form-text text-muted">Please enter your US phone number</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12">Option *</label>
                                <div class="col-lg-9 col-sm-12 input-group">
                                    <select class="form-control" name="option">
                                        <option value="">Select</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <span class="form-text text-muted">Please select an option.</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12">Options *</label>
                                <div class="col-lg-9 col-sm-12 input-group">
                                    <select class="form-control" name="options" multiple size="5">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <span class="form-text text-muted">Please select at least one or maximum 4 options</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12">Memo *</label>
                                <div class="col-lg-9 col-sm-12">
                                    <textarea class="form-control" name="memo" placeholder="Enter a menu" rows="8"></textarea>
                                    <span class="form-text text-muted">Please enter a menu within text length range 10 and 100.</span>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12">Checkbox *</label>
                                <div class="col-lg-9 col-sm-12">
                                    <div class="custom-control custom-checkbox is-invalid custom-control-inline">
                                        <input name="checkboxe" type="checkbox" class="custom-control-input" id="customvalid11" required="">
                                        <label class="custom-control-label" for="customvalid11">Tick me</label>
                                    </div>
                                    <span class="form-text text-muted">Please select at lease 1 and maximum 2 options</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12">Checkboxes *</label>
                                <div class="col-lg-9 col-sm-12">
                                    <div class="custom-control custom-checkbox is-invalid custom-control-inline">
                                        <input name="checkboxes" type="checkbox" class="custom-control-input" id="customvalid21" required="">
                                        <label class="custom-control-label" for="customvalid21">Option 1</label>
                                    </div>
                                    <div class="custom-control custom-checkbox is-invalid custom-control-inline">
                                        <input name="checkboxes" type="checkbox" class="custom-control-input" id="customvalid22" required="">
                                        <label class="custom-control-label" for="customvalid22">Option 2</label>
                                    </div>
                                    <div class="custom-control custom-checkbox is-invalid custom-control-inline">
                                        <input name="checkboxes" type="checkbox" class="custom-control-input" id="customvalid23" required="">
                                        <label class="custom-control-label" for="customvalid23">Option 3</label>
                                    </div>
                                    <span class="form-text text-muted">Please select at lease 1 and maximum 2 options</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12">Radios *</label>
                                <div class="col-lg-9 col-sm-12">
                                    <div class="custom-control custom-radio is-invalid custom-control-inline">
                                        <input name="radio" type="radio" class="custom-control-input" id="customvalid31" required="">
                                        <label class="custom-control-label" for="customvalid31">Option 1</label>
                                    </div>
                                    <div class="custom-control custom-radio is-invalid custom-control-inline">
                                        <input name="radio" type="radio" class="custom-control-input" id="customvalid32" required="">
                                        <label class="custom-control-label" for="customvalid32">Option 2</label>
                                    </div>
                                    <div class="custom-control custom-radio is-invalid custom-control-inline">
                                        <input name="radio" type="radio" class="custom-control-input" id="customvalid33" required="">
                                        <label class="custom-control-label" for="customvalid33">Option 3</label>
                                    </div>
                                    <span class="form-text text-muted">Please select an option</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Advanced Validation</h5>
                    </div>
                    <form id="kt_form_2">
                        <div class="card-body">
                            <h5 class="mb-3">
                                Billing Information:
                            </h5>
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <label class="form-control-label">* Cardholder Name:</label>
                                    <input type="text" name="billing_card_name" class="form-control" placeholder="" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <label class="form-control-label">* Card Number:</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 form-group">
                                    <label class="form-control-label">* Exp Month:</label>
                                    <select class="form-control" name="billing_card_exp_month">
                                        <option value="">Select</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 form-group">
                                    <label class="form-control-label">* Exp Year:</label>
                                    <select class="form-control" name="billing_card_exp_year">
                                        <option value="">Select</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 form-group">
                                    <label class="form-control-label">* CVV:</label>
                                    <input type="number" class="form-control" name="billing_card_cvv" placeholder="" value="">
                                </div>
                            </div>
                            <hr>
                            <h5 class="mb-3">
                                Billing Address
                                <i data-bs-toggle="pc-tooltip" data-width="auto" class="pc-section__help" title="If different than the corresponding address"></i>
                            </h5>
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <label class="form-control-label">* Address 1:</label>
                                    <input type="text" name="billing_address_1" class="form-control" placeholder="" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <label class="form-control-label">Address 2:</label>
                                    <input type="text" name="billing_address_2" class="form-control" placeholder="" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 form-group">
                                    <label class="form-control-label">* City:</label>
                                    <input type="text" class="form-control" name="billing_city" placeholder="" value="">
                                </div>
                                <div class="col-lg-4 form-group">
                                    <label class="form-control-label">* State:</label>
                                    <input type="text" class="form-control" name="billing_state" placeholder="" value="">
                                </div>
                                <div class="col-lg-4 form-group">
                                    <label class="form-control-label">* ZIP:</label>
                                    <input type="text" class="form-control" name="billing_zip" placeholder="" value="">
                                </div>
                            </div>
                            <hr>
                            <h5 class="mb-3">
                                Delivery Type:
                            </h5>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="border p-3">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="billing_delivery" class="custom-control-input input-primary" id="customCheckdef1">
                                                <label class="custom-control-label" for="customCheckdef1">
                                                    <span>
                                                        <span class="h5 d-block"><strong class="float-end">Free</strong>Standart Delevery</span>
                                                        <span class="">
                                                            Estimated 14-20 Day Shipping
                                                            (&nbsp;Duties end taxes may be due
                                                            upon delivery&nbsp;)
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="border p-3">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="billing_delivery" class="custom-control-input input-primary" id="customCheckdef2">
                                                <label class="custom-control-label" for="customCheckdef2">
                                                    <span>
                                                        <span class="h5 d-block"><strong class="float-end">$&nbsp;8.00</strong>Fast Delevery</span>
                                                        <span class="">
                                                            Estimated 2-5 Day Shipping
                                                            (&nbsp;Duties end taxes may be due
                                                            upon delivery&nbsp;)
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-text text-muted">

                                    <!--must use this helper element to display error message for the options-->
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-secondary">Cancel</button>
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
<!-- jquery-validation Js -->
<script src="assets/js/plugins/jquery.validate.min.js"></script>

<!-- sweet alert Js -->
<script src="assets/js/plugins/sweetalert.min.js"></script>
<script>
    $(function() {
        $("#kt_form_1").validate({
            // define validation rules
            rules: {
                email: {
                    required: true,
                    email: true,
                    minlength: 10
                },
                url: {
                    required: true
                },
                digits: {
                    required: true,
                    digits: true
                },
                creditcard: {
                    required: true,
                    creditcard: true
                },
                phone: {
                    required: true,
                    phoneUS: true
                },
                option: {
                    required: true
                },
                options: {
                    required: true,
                    minlength: 2,
                    maxlength: 4
                },
                memo: {
                    required: true,
                    minlength: 10,
                    maxlength: 100
                },

                checkbox: {
                    required: true
                },
                checkboxes: {
                    required: true,
                    minlength: 1,
                    maxlength: 2
                },
                radio: {
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
    $(function() {
        $("#kt_form_2").validate({
            // define validation rules
            rules: {
                //= Client Information(step 3)
                // Billing Information
                billing_card_name: {
                    required: true
                },
                billing_card_number: {
                    required: true,
                    creditcard: true
                },
                billing_card_exp_month: {
                    required: true
                },
                billing_card_exp_year: {
                    required: true
                },
                billing_card_cvv: {
                    required: true,
                    minlength: 2,
                    maxlength: 3
                },

                // Billing Address
                billing_address_1: {
                    required: true
                },
                billing_address_2: {
                    required: true
                },
                billing_city: {
                    required: true
                },
                billing_state: {
                    required: true
                },
                billing_zip: {
                    required: true,
                    number: true
                },

                billing_delivery: {
                    required: true
                }
            },

            //display error alert on form submit
            invalidHandler: function(event, validator) {
                swal({
                    "title": "",
                    "text": "There are some errors in your submission. Please correct them.",
                    "icon": "error",
                    "dangerMode": true,
                    "confirmButtonClass": "btn btn-danger",
                });

                event.preventDefault();
            },

            submitHandler: function(form) {
                //form[0].submit(); // submit the form
                swal({
                    "title": "",
                    "text": "Form validation passed. All good!",
                    "icon": "success",
                    "confirmButtonClass": "btn btn-secondary"
                });

                return false;
            },
            errorPlacement: function errorPlacement(error, element) {
                var $parent = $(element).closest('.form-group');

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
                var $parent = $el.closest('.form-group');

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
