<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    <link rel="stylesheet" href="assets/css/plugins/nouislider.min.css">
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
                            <h5 class="m-b-10">noUiSlider</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item">noUiSlider</li>
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
                        <h3>Bootstrap noUiSlider</h3>
                        <p class="lead">Transforms a <code>&lt;select&gt;</code> containing one or more <code>&lt;optgroup&gt;</code> in two chained <code>&lt;select&gt;</code>.</p>
                        <p class="f-w-500">Check out <a href="https://github.com/leongersen/noUiSlider" target="_blank" class="badge bg-light-dark">Github </a> or <a href="https://refreshless.com/nouislider/" target="_blank"
                                class="badge bg-light-dark">Demo Page</a></p>
                        <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#pc-nouislider-modal">Launch modal examples</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group row mb-5">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Basic Setup</label>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="row align-items-center">
                                        <div class="col-4">
                                            <input type="text" class="form-control" id="pc-nouislider-1-input" placeholder="Quantity">
                                        </div>
                                        <div class="col-8">
                                            <div id="pc-nouislider-1" class="pc-nouislider--drag-danger"></div>
                                        </div>
                                    </div>
                                    <small class="form-text text-muted">Input control is attached to slider</small>
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Working with dates</label>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <input type="text" class="form-control mb-2" id="event-start" placeholder="Date">
                                            <input type="text" class="form-control" id="event-end" placeholder="Date">
                                        </div>
                                        <div class="col-6">
                                            <div id="pc-nouislider-9" class="pc-nouislider"></div>
                                        </div>
                                    </div>
                                    <small class="form-text text-muted">dates to numerical ranges, and then use the update event to display them in a pretty format.</small>
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Moving the slider by clicking pips</label>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="row align-items-center">
                                        <div class="col-4">
                                            <input type="text" class="form-control" id="pc-nouislider-10-input" placeholder="Currency">
                                        </div>
                                        <div class="col-8 mb-4">
                                            <div id="pc-nouislider-10" class="pc-nouislider pc-nouislider--handle-danger"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Slider With Tooltip</label>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <input type="text" class="form-control" id="pc-nouislider-3-input" placeholder="Quantity">
                                        </div>
                                        <div class="col-3">
                                            <input type="text" class="form-control" id="pc-nouislider-3.1-input" placeholder="Quantity">
                                        </div>
                                        <div class="col-6">
                                            <div id="pc-nouislider-3" class="pc-nouislider"></div>
                                        </div>
                                    </div>
                                    <small class="form-text text-muted">always show slider values.</small>
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Using HTML5 input elements</label>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <select class="form-control" id="pc-nouislider-input-select"></select>
                                        </div>
                                        <div class="col-3">
                                            <input type="number" class="form-control" id="pc-nouislider-input-number" placeholder="Quantity">
                                        </div>
                                        <div class="col-6">
                                            <div id="pc-nouislider-4" class="pc-nouislider pc-nouislider--handle-primary pc-nouislider--connect-warning"></div>
                                        </div>
                                    </div>
                                    <small class="form-text text-muted">noUiSlider's <code>'update'</code> method is useful for synchronizing with other elements</small>
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Soft Limits</label>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="row align-items-center mb-4">
                                        <div class="col-4">
                                            <input type="text" class="form-control" id="pc-nouislider-5-input" placeholder="Quantity">
                                        </div>
                                        <div class="col-8">
                                            <div id="pc-nouislider-5"></div>
                                        </div>
                                    </div>
                                    <small class="form-text text-muted ">If you want to disable the edges of a slider, the set event can be used to reset the value if a limit is passed.</small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Vertical Slider</label>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-4">
                                            <input type="text" class="form-control" id="pc-nouislider-6-input" placeholder="Quantity">
                                        </div>
                                        <div class="col-8">
                                            <div id="pc-nouislider-6" class="pc-toggle-noUiSlider"></div>
                                        </div>
                                    </div>
                                    <small class="form-text text-muted">Vertical orientation slider example</small>
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
<div class="modal fade" id="pc-nouislider-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bootstrap Date Picker Examples</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form class="pc-form pc-form--fit pc-form--label-right">
                <div class="modal-body">
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Basic Setup</label>
                        <div class="col-lg-9 col-sm-12">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <input type="text" class="form-control" id="pc-nouislider-modal1-input" placeholder="Quantity">
                                </div>
                                <div class="col-6">
                                    <div id="pc-nouislider-modal1" class="pc-nouislider--drag-danger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Slider With Tooltip</label>
                        <div class="col-lg-9 col-sm-12">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <input type="text" class="form-control" id="pc-nouislider-modal1.1-input" placeholder="Quantity">
                                </div>
                                <div class="col-3">
                                    <input type="text" class="form-control" id="pc-nouislider-modal1.2-input" placeholder="Quantity">
                                </div>
                                <div class="col-6">
                                    <div id="pc-nouislider-modal3" class="pc-nouislider"></div>
                                </div>
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
<!-- tagify -->
<script src="assets/js/plugins/wNumb.min.js"></script>
<script src="assets/js/plugins/nouislider.min.js"></script>
<script>
    $(function() {
        // init slider
        var slider = document.getElementById('pc-nouislider-1');

        noUiSlider.create(slider, {
            start: [0],
            step: 2,
            range: {
                'min': [0],
                'max': [10]
            },
            format: wNumb({
                decimals: 0
            })
        });

        // init slider input
        var sliderInput = document.getElementById('pc-nouislider-1-input');

        slider.noUiSlider.on('update', function(values, handle) {
            sliderInput.value = values[handle];
        });

        sliderInput.addEventListener('change', function() {
            slider.noUiSlider.set(this.value);
        });
    });
    $(function() {
        // init slider
        var slider = document.getElementById('pc-nouislider-2');

        noUiSlider.create(slider, {
            start: [20000],
            connect: [true, false],
            step: 1000,
            range: {
                'min': [20000],
                'max': [80000]
            },
            format: wNumb({
                decimals: 3,
                thousand: '.',
                postfix: ' (US $)',
            })
        });

        // init slider input
        var sliderInput = document.getElementById('pc-nouislider-2-input');

        slider.noUiSlider.on('update', function(values, handle) {
            sliderInput.value = values[handle];
        });

        sliderInput.addEventListener('change', function() {
            slider.noUiSlider.set(this.value);
        });
    });
    $(function() {
        // init slider
        var slider = document.getElementById('pc-nouislider-3');

        noUiSlider.create(slider, {
            start: [20, 80],
            connect: true,
            direction: 'rtl',
            tooltips: [true, wNumb({
                decimals: 1
            })],
            range: {
                'min': [0],
                '10%': [10, 10],
                '50%': [80, 50],
                '80%': 150,
                'max': 200
            }
        });


        // init slider input
        var sliderInput0 = document.getElementById('pc-nouislider-3-input');
        var sliderInput1 = document.getElementById('pc-nouislider-3.1-input');
        var sliderInputs = [sliderInput1, sliderInput0];

        slider.noUiSlider.on('update', function(values, handle) {
            sliderInputs[handle].value = values[handle];
        });
    });
    $(function() {
        var slider = document.getElementById('pc-nouislider-input-select');

        // Append the option elements
        for (var i = -20; i <= 40; i++) {

            var option = document.createElement("option");
            option.text = i;
            option.value = i;

            slider.appendChild(option);
        }

        // init slider
        var html5Slider = document.getElementById('pc-nouislider-4');

        noUiSlider.create(html5Slider, {
            start: [10, 30],
            connect: true,
            range: {
                'min': -20,
                'max': 40
            }
        });

        // init slider input
        var inputNumber = document.getElementById('pc-nouislider-input-number');

        html5Slider.noUiSlider.on('update', function(values, handle) {

            var value = values[handle];

            if (handle) {
                inputNumber.value = value;
            } else {
                slider.value = Math.round(value);
            }
        });

        slider.addEventListener('change', function() {
            html5Slider.noUiSlider.set([this.value, null]);
        });

        inputNumber.addEventListener('change', function() {
            html5Slider.noUiSlider.set([null, this.value]);
        });
    });
    $(function() {
        // init slider
        var slider = document.getElementById('pc-nouislider-5');

        noUiSlider.create(slider, {
            start: 20,
            range: {
                min: 0,
                max: 100
            },
            pips: {
                mode: 'values',
                values: [20, 80],
                density: 4
            }
        });

        var sliderInput = document.getElementById('pc-nouislider-5-input');

        slider.noUiSlider.on('update', function(values, handle) {
            sliderInput.value = values[handle];
        });

        sliderInput.addEventListener('change', function() {
            slider.noUiSlider.set(this.value);
        });

        slider.noUiSlider.on('change', function(values, handle) {
            if (values[handle] < 20) {
                slider.noUiSlider.set(20);
            } else if (values[handle] > 80) {
                slider.noUiSlider.set(80);
            }
        });
    });
    $(function() {
        var verticalSlider = document.getElementById('pc-nouislider-6');
        noUiSlider.create(verticalSlider, {
            orientation: "vertical",
            start: 0,
            range: {
                'min': [0, 1],
                'max': 1
            },
            format: wNumb({
                decimals: 0
            })
        });
        verticalSlider.noUiSlider.on('update', function (values, handle) {
            if (values[handle] === '1') {
                verticalSlider.classList.add('off');
            } else {
                verticalSlider.classList.remove('off');
            }
        });
        var sliderInput = document.getElementById('pc-nouislider-6-input');
        verticalSlider.noUiSlider.on('update', function(values, handle) {
            sliderInput.value = values[handle];
        });
        sliderInput.addEventListener('change', function() {
            verticalSlider.noUiSlider.set(this.value);
        });
    });
    $(function() {
        var slider = document.getElementById('pc-nouislider-modal1');

        noUiSlider.create(slider, {
            start: [0],
            step: 2,
            range: {
                'min': [0],
                'max': [10]
            },
            format: wNumb({
                decimals: 0
            })
        });

        // init slider input
        var sliderInput = document.getElementById('pc-nouislider-modal1-input');

        slider.noUiSlider.on('update', function(values, handle) {
            sliderInput.value = values[handle];
        });

        sliderInput.addEventListener('change', function() {
            slider.noUiSlider.set(this.value);
        });
    });
    $(function() {
        var slider = document.getElementById('pc-nouislider-modal3');

        noUiSlider.create(slider, {
            start: [20, 80],
            connect: true,
            direction: 'rtl',
            tooltips: [true, wNumb({
                decimals: 1
            })],
            range: {
                'min': [0],
                '10%': [10, 10],
                '50%': [80, 50],
                '80%': 150,
                'max': 200
            }
        });


        // init slider input
        var sliderInput0 = document.getElementById('pc-nouislider-modal1.1-input');
        var sliderInput1 = document.getElementById('pc-nouislider-modal1.2-input');
        var sliderInputs = [sliderInput1, sliderInput0];

        slider.noUiSlider.on('update', function(values, handle) {
            sliderInputs[handle].value = values[handle];
        });
    });
    $(function() {
        function timestamp(str) {
            return new Date(str).getTime();
        }
        var weekdays = [
            "Sunday", "Monday", "Tuesday",
            "Wednesday", "Thursday", "Friday",
            "Saturday"
        ];

        var months = [
            "January", "February", "March",
            "April", "May", "June", "July",
            "August", "September", "October",
            "November", "December"
        ];

        function nth(d) {
            if (d > 3 && d < 21) return 'th';
            switch (d % 10) {
                case 1:
                    return "st";
                case 2:
                    return "nd";
                case 3:
                    return "rd";
                default:
                    return "th";
            }
        }

        function formatDate(date) {
            return weekdays[date.getDay()] + ", " +
                date.getDate() + nth(date.getDate()) + " " +
                months[date.getMonth()] + " " +
                date.getFullYear();
        }
        var dateSlider = document.getElementById('pc-nouislider-9');
        noUiSlider.create(dateSlider, {
            range: {
                min: timestamp('2010'),
                max: timestamp('2016')
            },
            step: 7 * 24 * 60 * 60 * 1000,
            start: [timestamp('2011'), timestamp('2015')],
            format: wNumb({
                decimals: 0
            })
        });

        var sliderInput0 = document.getElementById('event-start');
        var sliderInput1 = document.getElementById('event-end');
        var sliderInputs = [sliderInput1, sliderInput0];

        dateSlider.noUiSlider.on('update', function(values, handle) {
            sliderInputs[handle].value = formatDate(new Date(+values[handle]));
        });

    });
    $(function() {
        var pipsSlider = document.getElementById('pc-nouislider-10');
        noUiSlider.create(pipsSlider, {
            range: {
                min: 0,
                max: 100
            },
            start: [50],
            pips: {
                mode: 'count',
                values: 5
            }
        });
        var pips = pipsSlider.querySelectorAll('.noUi-value');

        function clickOnPip() {
            var value = Number(this.getAttribute('data-value'));
            pipsSlider.noUiSlider.set(value);
        }
        for (var i = 0; i < pips.length; i++) {
            pips[i].style.cursor = 'pointer';
            pips[i].addEventListener('click', clickOnPip);
        }
        var sliderInput = document.getElementById('pc-nouislider-10-input');
        pipsSlider.noUiSlider.on('update', function(values, handle) {
            sliderInput.value = values[handle];
        });
    });
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
