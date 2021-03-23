<!DOCTYPE html>
<html lang="en">

<head>
    @@include('./layouts/head.html')
    <link rel="stylesheet" href="assets/css/plugins/smart_wizard.min.css">
    <link rel="stylesheet" href="assets/css/plugins/smart_wizard_theme_dots.min.css">
    <link rel="stylesheet" href="assets/css/plugins/smart_wizard_theme_circles.min.css">
    <link rel="stylesheet" href="assets/css/plugins/smart_wizard_theme_arrows.min.css">
    @@include('./layouts/head-bottom-link.html')
</head>
@@include('layouts/layout-vertical.html')
<!-- [ Main Content ] start -->
<section class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Wizard 2</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item">Wizard 2</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Smart-Wizard ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Smart Wizard</h5>
                    </div>
                    <div class="card-body border-bottom">
                        <div class="form-group row mb-0">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Theme:</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <select id="theme_selector" class="form-control">
                                    <option value="default">default</option>
                                    <option value="arrows">arrows</option>
                                    <option value="circles">circles</option>
                                    <option value="dots">dots</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="smartwizard">
                            <ul>
                                <li>
                                    <a href="#step-1">
                                        <h6>Step 1</h6>
                                        <p class="m-0">This is step description</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-2">
                                        <h6>Step 2</h6>
                                        <p class="m-0">This is step content</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-3">
                                        <h6>Step 3</h6>
                                        <p class="m-0">This is step text</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-4">
                                        <h6>Step 4</h6>
                                        <p class="m-0">This is step content</p>
                                    </a>
                                </li>
                            </ul>
                            <div>
                                <div id="step-1">
                                    <h5>Title Step 1</h5>
                                    <hr>
                                    <h6>Sub title 1</h6>
                                    <p><strong>@Title content 1!.. </strong> Lorem Ipsum is simply dummy text of the printing <strong>@Content content 1 </strong> and typesetting industry. Lorem Ipsum has been the industry's
                                        standard dummy text.</p>
                                    <h6 class="mt-3">Sub title 2</h6>
                                    <p><strong>@Title content 2!.. </strong> Lorem Ipsum is simply dummy text and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                </div>
                                <div id="step-2">
                                    <h5>Title Step 2</h5>
                                    <hr>
                                    <h6>Sub title 1</h6>
                                    <p><strong>@Title content 1!.. </strong> Lorem Ipsum is simply dummy text of the printing <strong>@Content content 1 </strong> and typesetting industry. Lorem Ipsum has been the industry's
                                        standard dummy text.</p>
                                    <h6 class="mt-3">Sub title 2</h6>
                                    <p><strong>@Title content 2!.. </strong> Lorem Ipsum is simply dummy text and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                </div>
                                <div id="step-3">
                                    <h5>Title Step 3</h5>
                                    <hr>
                                    <h6>Sub title 1</h6>
                                    <p><strong>@Title content 1!.. </strong> Lorem Ipsum is simply dummy text of the printing <strong>@Content content 1 </strong> and typesetting industry. Lorem Ipsum has been the industry's
                                        standard dummy text.</p>
                                    <h6 class="mt-3">Sub title 2</h6>
                                    <p><strong>@Title content 2!.. </strong> Lorem Ipsum is simply dummy text and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                </div>
                                <div id="step-4">
                                    <h5>Title Step 4</h5>
                                    <hr>
                                    <h6>Sub title 1</h6>
                                    <p><strong>@Title content 1!.. </strong> Lorem Ipsum is simply dummy text of the printing <strong>@Content content 1 </strong> and typesetting industry. Lorem Ipsum has been the industry's
                                        standard dummy text.</p>
                                    <h6 class="mt-3">Sub title 2</h6>
                                    <p><strong>@Title content 2!.. </strong> Lorem Ipsum is simply dummy text and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div id="smartwizard-1" class="smartwizard-example">
                    <ul>
                        <li>
                            <a href="#smartwizard-1-step-1" class="mb-3">
                                <span class="sw-number">1</span>
                                <div class="text-muted small">FIRST STEP</div>Keyboard
                            </a>
                        </li>
                        <li>
                            <a href="#smartwizard-1-step-2" class="mb-3">
                                <span class="sw-number">2</span>
                                <div class="text-muted small">SECOND STEP</div>Effects
                            </a>
                        </li>
                        <li>
                            <a href="#smartwizard-1-step-3" class="mb-3">
                                <span class="sw-number">3</span>
                                <div class="text-muted small">THIRD STEP</div>Pager
                            </a>
                        </li>
                    </ul>
                    <div class="mb-3">
                        <div id="smartwizard-1-step-1" class="card animated fadeIn">
                            <div class="card-body">
                                Step Content 1
                            </div>
                        </div>
                        <div id="smartwizard-1-step-2" class="card animated fadeIn">
                            <div class="card-body">
                                Step Content 2
                            </div>
                        </div>
                        <div id="smartwizard-1-step-3" class="card animated fadeIn">
                            <div class="card-body">
                                Step Content 3
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="border-light container-m--x my-4">
                <h6 class="text-muted small font-weight-bold py-3 my-4">With icon</h6>
                <div id="smartwizard-2" class="smartwizard-example">
                    <ul>
                        <li>
                            <a href="#smartwizard-2-step-1" class="mb-3">
                                <span class="sw-done-icon feather icon-check-circle"></span>
                                <span class="sw-icon feather icon-layers"></span>Keyboard
                                <div class="text-muted small">Set up shortcuts</div>
                            </a>
                        </li>
                        <li>
                            <a href="#smartwizard-2-step-2" class="mb-3">
                                <span class="sw-done-icon feather icon-check-circle"></span>
                                <span class="sw-icon feather icon-award"></span>Effects
                                <div class="text-muted small">Add effects</div>
                            </a>
                        </li>
                        <li>
                            <a href="#smartwizard-2-step-3" class="mb-3">
                                <span class="sw-done-icon feather icon-check-circle"></span>
                                <span class="sw-icon feather icon-copy"></span>Pager
                                <div class="text-muted small">Select pager options</div>
                            </a>
                        </li>
                        <li>
                            <a href="#smartwizard-2-step-4" class="mb-3">
                                <span class="sw-done-icon feather icon-check-circle"></span>
                                <span class="sw-icon feather icon-bell"></span>Notifications
                                <div class="text-muted small">Set up notifications</div>
                            </a>
                        </li>
                    </ul>
                    <div class="mb-3">
                        <div id="smartwizard-2-step-1" class="card animated fadeIn">
                            <div class="card-body">
                                Step Content 1
                            </div>
                        </div>
                        <div id="smartwizard-2-step-2" class="card animated fadeIn">
                            <div class="card-body">
                                Step Content 2
                            </div>
                        </div>
                        <div id="smartwizard-2-step-3" class="card animated fadeIn">
                            <div class="card-body">
                                Step Content 3
                            </div>
                        </div>
                        <div id="smartwizard-2-step-4" class="card animated fadeIn">
                            <div class="card-body">
                                Step Content 4
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="border-light container-m--x my-4">
                <h6 class="text-muted small font-weight-bold py-3 my-4">Boxed steps</h6>
                <div id="smartwizard-3" class="smartwizard-example">
                    <ul class="card nav nav-tabs px-4 pt-3 mb-3">
                        <li>
                            <a href="#smartwizard-3-step-1" class="mb-3">
                                <span class="sw-done-icon feather icon-check-circle"></span>
                                <span class="sw-number">1</span>
                                <div class="text-muted small">FIRST STEP</div>Keyboard
                            </a>
                        </li>
                        <li>
                            <a href="#smartwizard-3-step-2" class="mb-3">
                                <span class="sw-done-icon feather icon-check-circle"></span>
                                <span class="sw-number">2</span>
                                <div class="text-muted small">SECOND STEP</div>Effects
                            </a>
                        </li>
                        <li>
                            <a href="#smartwizard-3-step-3" class="mb-3">
                                <span class="sw-done-icon feather icon-check-circle"></span>
                                <span class="sw-number">3</span>
                                <div class="text-muted small">THIRD STEP</div>
                                Pager
                            </a>
                        </li>
                    </ul>
                    <div class="mb-3">
                        <div id="smartwizard-3-step-1" class="card animated fadeIn">
                            <div class="card-body">
                                Step Content 1
                            </div>
                        </div>
                        <div id="smartwizard-3-step-2" class="card animated fadeIn">
                            <div class="card-body">
                                Step Content 2
                            </div>
                        </div>
                        <div id="smartwizard-3-step-3" class="card animated fadeIn">
                            <div class="card-body">
                                Step Content 3
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="border-light container-m--x my-4">
                <h6 class="text-muted small font-weight-bold py-3 my-4">Vertical</h6>
                <div class="demo-vertical-spacing">
                    <div id="smartwizard-4" class="smartwizard-vertical-left smartwizard-example">
                        <ul>
                            <li>
                                <a href="#smartwizard-4-step-1" class="text-nowrap mb-3">
                                    <span class="sw-done-icon feather icon-check-circle"></span>
                                    <span class="sw-icon ion feather icon-grid"></span>
                                    <div class="text-muted small">FIRST STEP</div>
                                    Keyboard
                                </a>
                            </li>
                            <li>
                                <a href="#smartwizard-4-step-2" class="text-nowrap mb-3">
                                    <span class="sw-done-icon feather icon-check-circle"></span>
                                    <span class="sw-icon ion feather icon-layers"></span>
                                    <div class="text-muted small">SECOND STEP</div>
                                    Effects
                                </a>
                            </li>
                            <li>
                                <a href="#smartwizard-4-step-3" class="text-nowrap mb-3">
                                    <span class="sw-done-icon feather icon-check-circle"></span>
                                    <span class="sw-icon ion feather icon-watch"></span>
                                    <div class="text-muted small">THIRD STEP</div>
                                    Pager
                                </a>
                            </li>
                        </ul>
                        <div class="mb-3">
                            <div id="smartwizard-4-step-1" class="card animated fadeIn mb-3">
                                <div class="card-body">
                                    Step Content 1
                                </div>
                            </div>
                            <div id="smartwizard-4-step-2" class="card animated fadeIn mb-3">
                                <div class="card-body">
                                    Step Content 2
                                </div>
                            </div>
                            <div id="smartwizard-4-step-3" class="card animated fadeIn mb-3">
                                <div class="card-body">
                                    Step Content 3
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="smartwizard-5" class="smartwizard-vertical-right smartwizard-example">
                        <ul>
                            <li>
                                <a href="#smartwizard-5-step-1" class="text-nowrap mb-3">
                                    <span class="sw-done-icon feather icon-check-circle"></span>
                                    <span class="sw-icon ion feather icon-grid"></span>
                                    <div class="text-muted small">FIRST STEP</div>
                                    Keyboard
                                </a>
                            </li>
                            <li>
                                <a href="#smartwizard-5-step-2" class="text-nowrap mb-3">
                                    <span class="sw-done-icon feather icon-check-circle"></span>
                                    <span class="sw-icon ion feather icon-layers"></span>
                                    <div class="text-muted small">SECOND STEP</div>
                                    Effects
                                </a>
                            </li>
                            <li>
                                <a href="#smartwizard-5-step-3" class="text-nowrap mb-3">
                                    <span class="sw-done-icon feather icon-check-circle"></span>
                                    <span class="sw-icon ion feather icon-watch"></span>
                                    <div class="text-muted small">THIRD STEP</div>
                                    Pager
                                </a>
                            </li>
                        </ul>
                        <div>
                            <div id="smartwizard-5-step-1" class="card animated fadeIn mb-3">
                                <div class="card-body">
                                    Step Content 1
                                </div>
                            </div>
                            <div id="smartwizard-5-step-2" class="card animated fadeIn mb-3">
                                <div class="card-body">
                                    Step Content 2
                                </div>
                            </div>
                            <div id="smartwizard-5-step-3" class="card animated fadeIn mb-3">
                                <div class="card-body">
                                    Step Content 3
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="border-light container-m--x my-4">
                <h6 class="text-muted small font-weight-bold py-3 my-4">Validation</h6>
                <form id="smartwizard-6" action="javascript:void(0)" class="smartwizard-example">
                    <ul class="card nav nav-tabs px-4 pt-3 mb-3">
                        <li>
                            <a href="#smartwizard-6-step-1" class="mb-3">
                                <span class="sw-done-icon feather icon-check-circle"></span>
                                <span class="sw-number">1</span>
                                <div class="text-muted small">FIRST STEP</div>
                                Account
                            </a>
                        </li>
                        <li>
                            <a href="#smartwizard-6-step-2" class="mb-3">
                                <span class="sw-done-icon feather icon-check-circle"></span>
                                <span class="sw-number">2</span>
                                <div class="text-muted small">SECOND STEP</div>
                                Profile
                            </a>
                        </li>
                        <li>
                            <a href="#smartwizard-6-step-3" class="mb-3">
                                <span class="sw-done-icon feather icon-check-circle"></span>
                                <span class="sw-number">3</span>
                                <div class="text-muted small">THIRD STEP</div>
                                Hints
                            </a>
                        </li>
                        <li>
                            <a href="#smartwizard-6-step-4" class="mb-3">
                                <span class="sw-done-icon feather icon-check-circle"></span>
                                <span class="sw-number">4</span>
                                <div class="text-muted small">THIRD STEP</div>
                                Finish
                            </a>
                        </li>
                    </ul>
                    <div class="mb-3">
                        <div id="smartwizard-6-step-1" class="card animated fadeIn">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">User name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input name="wizard-userName" type="text" class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Password
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input name="wizard-password" type="text" class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Confirm Password
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input name="wizard-confirm" type="text" class="form-control required">
                                </div>
                                <p>
                                    <span class="text-danger">*</span> Mandatory</p>
                            </div>
                        </div>
                        <div id="smartwizard-6-step-2" class="card animated fadeIn">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">First name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input name="wizard-name" type="text" class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Last name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input name="wizard-surname" type="text" class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input name="wizard-email" type="text" class="form-control required email">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Address</label>
                                    <input name="wizard-address" type="text" class="form-control">
                                </div>
                                <p>
                                    <span class="text-danger">*</span> Mandatory</p>
                            </div>
                        </div>
                        <div id="smartwizard-6-step-3" class="card animated fadeIn">
                            <div class="card-body">
                                <ul>
                                    <li>Foo</li>
                                    <li>Bar</li>
                                    <li>Foobar</li>
                                </ul>
                            </div>
                        </div>
                        <div id="smartwizard-6-step-4" class="card animated fadeIn">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="form-check-label">I agree with the Terms and Conditions</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- [ Smart-Wizard ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
@@include('./layouts/footer.html')
<script src="assets/js/plugins/jquery.smartWizard.min.js"></script>
<!-- jquery-validation Js -->
<script src="assets/js/plugins/jquery.validate.min.js"></script>
<script>
    $(document).ready(function() {
        $('#smartwizard').smartWizard({
            theme: 'default',
            transitionEffect: 'fade',
            autoAdjustHeight: false,
            useURLhash: false,
            showStepURLhash: false
        });
    });
    $("#theme_selector").on("change", function() {
        $('#smartwizard').smartWizard("theme", $(this).val());
        return true;
    });
    $('#smartwizard .sw-toolbar').appendTo($('#smartwizard .sw-container'));
</script>
<script>
    $(function() {
        $('.smartwizard-example').smartWizard({
            autoAdjustHeight: false,
            backButtonSupport: false,
            useURLhash: false,
            showStepURLhash: false
        });

        // Change markup for vertical wizards
        //

        $('#smartwizard-4 .sw-toolbar').appendTo($('#smartwizard-4 .sw-container'));
        $('#smartwizard-5 .sw-toolbar').appendTo($('#smartwizard-5 .sw-container'));
    });

    // With validation
    $(function() {
        var $form = $('#smartwizard-6');
        var $btnFinish = $('<button class="btn-finish btn btn-primary hidden me-2" type="button">Finish</button>');

        // Set up validator
        $form.validate({
            errorPlacement: function errorPlacement(error, element) {
                $(element).parents('.form-group').append(
                    error.addClass('invalid-feedback small d-block')
                )
            },
            highlight: function(element) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element) {
                $(element).removeClass('is-invalid');
            },
            rules: {
                'wizard-confirm': {
                    equalTo: 'input[name="wizard-password"]'
                }
            }
        });
        $form
            .smartWizard({
                autoAdjustHeight: false,
                backButtonSupport: false,
                useURLhash: false,
                showStepURLhash: false,
                toolbarSettings: {
                    toolbarExtraButtons: [$btnFinish]
                }
            })
            .on('leaveStep', function(e, anchorObject, stepNumber, stepDirection) {
                if (stepDirection === 'forward') {
                    return $form.valid();
                }
                return true;
            })
            .on('showStep', function(e, anchorObject, stepNumber, stepDirection) {
                var $btn = $form.find('.btn-finish');
                if (stepNumber === 3) {
                    $btn.removeClass('hidden');
                } else {
                    $btn.addClass('hidden');
                }
            });

        // Click on finish button
        $form.find('.btn-finish').on('click', function() {
            if (!$form.valid()) {
                return;
            }

            // Submit form
            alert("Great! We're ready to submit form.");
            return false;
        });
    });
</script>
@@include('./layouts/footer-bottom-link.html')
</body>

</html>
