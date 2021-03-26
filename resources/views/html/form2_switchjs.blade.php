<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    <link rel="stylesheet" href="assets/css/plugins/bootstrap-switch.min.css">
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
                            <h5 class="m-b-10">Bootstrap Switch</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item">Bootstrap Switch</li>
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
                        <h3>Bootstrap Switch</h3>
                        <p class="lead">It is the must need Date Picker with all possible options available. You can tweak the settings whatever you required for Date selection.</p>
                        <p class="f-w-500">Check out <a href="https://bttstrp.github.io/bootstrap-switch/examples.html" target="_blank" class="badge bg-light-dark">Github</a></p>
                        <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#pc-switch-modal">Launch switches on modal</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">State</label>
                            <div class="col-lg-9 col-sm-12">
                                <p><input id="switch-state" type="checkbox" checked="checked"></p>
                                <div class="btn-group btn-group-sm">
                                    <button type="button" data-switch-toggle="state" class="btn btn-light-secondary">Toggle</button>
                                    <button type="button" data-switch-set="state" data-switch-value="true" class="btn btn-light-secondary">Set true</button>
                                    <button type="button" data-switch-set="state" data-switch-value="false" class="btn btn-light-secondary">Set false</button>
                                    <button type="button" data-switch-get="state" class="btn btn-light-secondary">Get</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Size</label>
                            <div class="col-lg-9 col-sm-12">
                                <p><input id="switch-size" type="checkbox" checked="checked" data-size="mini"></p>
                                <div class="btn-group btn-group-sm">
                                    <button type="button" data-switch-set="size" data-switch-value="mini" class="btn btn-light-secondary">Mini</button>
                                    <button type="button" data-switch-set="size" data-switch-value="small" class="btn btn-light-secondary">Small</button>
                                    <button type="button" data-switch-set="size" data-switch-value="normal" class="btn btn-light-secondary">Normal</button>
                                    <button type="button" data-switch-set="size" data-switch-value="large" class="btn btn-light-secondary">Large</button>
                                    <button type="button" data-switch-get="size" class="btn btn-light-secondary">Get</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Animate</label>
                            <div class="col-lg-9 col-sm-12">
                                <p><input id="switch-animate" type="checkbox" checked="checked"></p>
                                <div class="btn-group btn-group-sm">
                                    <button type="button" data-switch-toggle="animate" class="btn btn-light-secondary">Toggle</button>
                                    <button type="button" data-switch-get="animate" class="btn btn-light-secondary">Get</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Disabled</label>
                            <div class="col-lg-9 col-sm-12">
                                <p><input id="switch-disabled" type="checkbox" checked="checked" disabled="disabled"></p>
                                <div class="btn-group btn-group-sm">
                                    <button type="button" data-switch-toggle="disabled" class="btn btn-light-secondary">Toggle</button>
                                    <button type="button" data-switch-get="disabled" class="btn btn-light-secondary">Get</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Readonly</label>
                            <div class="col-lg-9 col-sm-12">
                                <p><input id="switch-readonly" type="checkbox" checked="checked" readonly="readonly"></p>
                                <div class="btn-group btn-group-sm">
                                    <button type="button" data-switch-toggle="readonly" class="btn btn-light-secondary">Toggle</button>
                                    <button type="button" data-switch-get="readonly" class="btn btn-light-secondary">Get</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Indeterminate</label>
                            <div class="col-lg-9 col-sm-12">
                                <p><input id="switch-indeterminate" type="checkbox" checked="checked" data-indeterminate="true"></p>
                                <div class="btn-group btn-group-sm">
                                    <button type="button" data-switch-toggle="indeterminate" class="btn btn-light-secondary">Toggle</button>
                                    <button type="button" data-switch-get="indeterminate" class="btn btn-light-secondary">Get</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Inverse</label>
                            <div class="col-lg-9 col-sm-12">
                                <p><input id="switch-inverse" type="checkbox" checked="checked" data-inverse="true"></p>
                                <div class="btn-group btn-group-sm">
                                    <button type="button" data-switch-toggle="inverse" class="btn btn-light-secondary">Toggle</button>
                                    <button type="button" data-switch-get="inverse" class="btn btn-light-secondary">Get</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Other customization</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">On Color</label>
                            <div class="col-lg-9 col-sm-12">
                                <p><input id="switch-onColor" type="checkbox" checked="checked" data-on-color="info"></p>
                                <div class="btn-group btn-group-sm">
                                    <div class="dropdown">
                                        <button type="button" data-bs-toggle="dropdown" class="btn btn-light-secondary btn-sm dropdown-toggle">Set &nbsp;<span class="caret"></span></button>
                                        <div role="menu" class="dropdown-menu">
                                            <a class="dropdown-item" data-switch-set="onColor" data-switch-value="primary">Primary</a>
                                            <a class="dropdown-item" data-switch-set="onColor" data-switch-value="info">Info</a>
                                            <a class="dropdown-item" data-switch-set="onColor" data-switch-value="success">Success</a>
                                            <a class="dropdown-item" data-switch-set="onColor" data-switch-value="warning">Warning</a>
                                            <a class="dropdown-item" data-switch-set="onColor" data-switch-value="default">Default</a>
                                        </div>
                                    </div>
                                    <button type="button" data-switch-get="onColor" class="btn btn-light-secondary">Get</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Off Color</label>
                            <div class="col-lg-9 col-sm-12">
                                <p><input id="switch-offColor" type="checkbox" data-off-color="warning"></p>
                                <div class="btn-group btn-group-sm">
                                    <div class="dropdown">
                                        <button type="button" data-bs-toggle="dropdown" class="btn btn-light-secondary btn-sm dropdown-toggle">Set &nbsp;<span class="caret"></span></button>
                                        <div role="menu" class="dropdown-menu">
                                            <a class="dropdown-item" data-switch-set="offColor" data-switch-value="primary">Primary</a>
                                            <a class="dropdown-item" data-switch-set="offColor" data-switch-value="info">Info</a>
                                            <a class="dropdown-item" data-switch-set="offColor" data-switch-value="success">Success</a>
                                            <a class="dropdown-item" data-switch-set="offColor" data-switch-value="warning">Warning</a>
                                            <a class="dropdown-item" data-switch-set="offColor" data-switch-value="default">Default</a>
                                        </div>
                                    </div>
                                    <button type="button" data-switch-get="onColor" class="btn btn-light-secondary">Get</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">On Text</label>
                            <div class="col-lg-9 col-sm-12">
                                <p><input id="switch-onText" type="checkbox" checked="checked" data-on-text="Yes"></p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" data-switch-set-value="onText" value="Yes" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Off Text</label>
                            <div class="col-lg-9 col-sm-12">
                                <p><input id="switch-offText" type="checkbox" data-off-text="No"></p>
                                <div class="row">
                                    <div class="col-sm-6"><input type="text" data-switch-set-value="offText" value="No" class="form-control"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Label Text</label>
                            <div class="col-lg-9 col-sm-12">
                                <p><input id="switch-labelText" type="checkbox" data-label-text="Label"></p>
                                <div class="row">
                                    <div class="col-sm-6"><input type="text" data-switch-set-value="labelText" class="form-control"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Handle Width</label>
                            <div class="col-lg-9 col-sm-12">
                                <p><input id="switch-handleWidth" type="checkbox" data-handle-width="100"></p>
                                <div class="row">
                                    <div class="col-sm-6"><input type="number" data-switch-set-value="handleWidth" value="100" class="form-control"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Label Width</label>
                            <div class="col-lg-9 col-sm-12">
                                <p><input id="switch-labelWidth" type="checkbox" data-label-width="100"></p>
                                <div class="row">
                                    <div class="col-sm-6"><input type="number" data-switch-set-value="labelWidth" value="100" class="form-control"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Create | Destroy</label>
                            <div class="col-lg-9 col-sm-12">
                                <p><input id="switch-create-destroy" type="checkbox" checked="checked" data-switch-no-init="data-switch-no-init"></p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <button type="button" data-switch-create-destroy="data-switch-create-destroy" data-destroy-text="Destroy" class="btn btn-light-secondary">Create</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Radio All Off</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Disabled</label>
                            <div class="col-lg-9 col-sm-12">
                                <input type="radio" name="radio1" checked="checked" class="switch-radio1">
                                <input type="radio" name="radio1" class="switch-radio1">
                                <input type="radio" name="radio1" class="switch-radio1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Enabled</label>
                            <div class="col-lg-9 col-sm-12">
                                <input type="radio" name="radio2" checked="checked" data-radio-all-off="true" class="switch-radio2">
                                <input type="radio" name="radio2" data-radio-all-off="true" class="switch-radio2">
                                <input type="radio" name="radio2" data-radio-all-off="true" class="switch-radio2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!--begin::Modal-->
<div class="modal fade" id="pc-switch-modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Bootstrap Switch Examples</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form class="pc-form">
                <div class="modal-body">
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Simple switch</label>
                        <div class="col-lg-9 col-sm-12">
                            <input data-switch="true" type="checkbox" checked="true" id="pc-switch-1">
                            <input data-switch="true" type="checkbox" id="pc-switch-1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Colors switch</label>
                        <div class="col-lg-9 col-sm-12">
                            <input data-switch="true" type="checkbox" checked="true" data-on-color="success" data-off-color="warning">
                            <input data-switch="true" type="checkbox" checked="true" data-on-color="primary">
                            <input data-switch="true" type="checkbox" checked="true" data-on-color="danger">
                            <input data-switch="true" type="checkbox" checked="true" data-on-color="info">
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
<!-- tagify -->
<script src="assets/js/plugins/bootstrap-switch.min.js"></script>
<script>
    $(function() {
        $('[data-switch=true]').bootstrapSwitch();
    });
</script>
<script>
    $(function() {
        var $ = window.jQuery

        var $window = $(window)
        var sectionTop = $('.top').outerHeight() + 20
        var $createDestroy = $('#switch-create-destroy')

        function capitalize(string) {
            return string.charAt(0).toUpperCase() + string.slice(1)
        }

        // <window className="hljs initHighlightingOnLoad"></window>
        $(function() {
            $('a[href*=\'#\']').on('click', function(event) {
                event.preventDefault()
                var $target = $($(this).attr('href').slice('#'))
                if ($target.length) {
                    $window.scrollTop($target.offset().top - sectionTop)
                }
            })
            $('input[type="checkbox"], input[type="radio"]')
                .not('[data-switch-no-init]')
                .bootstrapSwitch()

            $('[data-switch-get]').on('click', function() {
                var type = $(this).data('switch-get')
                window.alert($('#switch-' + type).bootstrapSwitch(type))
            })
            $('[data-switch-set]').on('click', function() {
                var type
                type = $(this).data('switch-set')
                $('#switch-' + type).bootstrapSwitch(type, $(this).data('switch-value'))
            })
            $('[data-switch-toggle]').on('click', function() {
                var type = $(this).data('switch-toggle')
                $('#switch-' + type).bootstrapSwitch('toggle' + capitalize(type))
            })
            $('[data-switch-set-value]').on('input', function(event) {
                var type, value
                event.preventDefault()
                type = $(this).data('switch-set-value')
                value = $.trim($(this).val())
                if ($(this).data('value') === value) {
                    return
                }
                $('#switch-' + type).bootstrapSwitch(type, value)
            })
            $('[data-switch-create-destroy]').on('click', function() {
                var isSwitch
                isSwitch = $createDestroy.data('bootstrap-switch')
                $createDestroy.bootstrapSwitch((isSwitch ? 'destroy' : null))
                $(this).button((isSwitch ? 'reset' : 'destroy'))
            })
            $('#confirm').bootstrapSwitch({
                size: 'large',
                onSwitchChange: function(event, state) {
                    event.preventDefault()
                    return console.log(state, event.isDefaultPrevented())
                }
            })
        })

    });
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
