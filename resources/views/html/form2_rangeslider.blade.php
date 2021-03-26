<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css">
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
                            <h5 class="m-b-10">ion Range Slider</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item">ion Range Slider</li>
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
                        <h3>Ion Range Slider</h3>
                        <p class="lead">Range slider has several public methods to control its behavior, create and destroy its instance</p>
                        <p class="f-w-500">Check out <a href="https://github.com/IonDen/ion.rangeSlider" target="_blank" class="badge bg-light-dark">Github</a></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Simple start</label>
                                <div class="col-lg-8 col-md-9 col-sm-12">
                                    <div class="pc-ion-range-slider">
                                        <input type="hidden" id="pc-slider-1" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Min & Max Values</label>
                                <div class="col-lg-8 col-md-9 col-sm-12">
                                    <input type="hidden" id="pc-slider-2" />
                                    <div class="pc-ion-range-slider">
                                        <input type="hidden" id="pc-slider-2" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Display Postfixes</label>
                                <div class="col-lg-8 col-md-9 col-sm-12">
                                    <div class="pc-ion-range-slider">
                                        <input type="hidden" id="pc-slider-6" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Display Text</label>
                                <div class="col-lg-8 col-md-9 col-sm-12">
                                    <div class="pc-ion-range-slider">
                                        <input type="hidden" id="pc-slider-7" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Custom Prefix</label>
                                <div class="col-lg-8 col-md-9 col-sm-12">
                                    <div class="pc-ion-range-slider">
                                        <input type="hidden" id="pc-slider-3" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Set up range and step</label>
                                <div class="col-lg-8 col-md-9 col-sm-12">
                                    <div class="pc-ion-range-slider">
                                        <input type="hidden" id="pc-slider-4" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Range & Step( Fractional )</label>
                                <div class="col-lg-8 col-md-9 col-sm-12">
                                    <div class="pc-ion-range-slider">
                                        <input type="hidden" id="pc-slider-5" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Decorating numbers with prefixes, postfixes</label>
                            <div class="col-lg-8 col-md-9 col-sm-12">
                                <div class="pc-ion-range-slider">
                                    <input id="pc-slider-8" type="text" name="" value="" />
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-sm btn-light-danger pc-slider-btn-8" data-type="">10000</button>
                                    <button class="btn btn-sm btn-light-danger pc-slider-btn-8 active" data-type=" ">10 000</button>
                                    <button class="btn btn-sm btn-light-danger pc-slider-btn-8" data-type=".">10.000</button>
                                    <button class="btn btn-sm btn-light-danger pc-slider-btn-8" data-type=",">10,000</button>
                                    <button class="btn btn-sm btn-light-danger pc-slider-btn-8" data-type="_">10_000</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Decorating numbers with prefixes, postfixes</label>
                            <div class="col-lg-8 col-md-9 col-sm-12">
                                <div class="pc-ion-range-slider">
                                    <input id="pc-slider-9" type="text" name="" value="" />
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-sm btn-light-danger pc-slider-btn-9 active" data-prefix="$">$100</button>
                                    <button class="btn btn-sm btn-light-danger pc-slider-btn-9" data-postfix=" €">100 €</button>
                                    <button class="btn btn-sm btn-light-danger pc-slider-btn-9" data-postfix=" ₽">100 ₽</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Customising Grid</label>
                            <div class="col-lg-8 col-md-9 col-sm-12">
                                <div class="pc-ion-range-slider">
                                    <input id="pc-slider-10" type="text" name="" value="" />
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-sm btn-light-danger pc-slider-btn-10 active" data-variant="0">Normal</button>
                                    <button class="btn btn-sm btn-light-danger pc-slider-btn-10" data-variant="1">10 cells</button>
                                    <button class="btn btn-sm btn-light-danger pc-slider-btn-10" data-variant="2">20 cells</button>
                                    <button class="btn btn-sm btn-light-danger pc-slider-btn-10" data-variant="3">Grid snap</button>
                                    <button class="btn btn-sm btn-light-danger pc-slider-btn-10" data-variant="4">Snap to weird step</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Lock and restrict handles</label>
                            <div class="col-lg-8 col-md-9 col-sm-12">
                                <div class="pc-ion-range-slider">
                                    <input id="pc-slider-11" type="text" name="" value="" />
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-sm btn-light-danger pc-slider-btn-11 active" data-variant="0">Unlock both</button>
                                    <button class="btn btn-sm btn-light-danger pc-slider-btn-11" data-variant="1">Lock FROM</button>
                                    <button class="btn btn-sm btn-light-danger pc-slider-btn-11" data-variant="2">Lock TO</button>
                                    <button class="btn btn-sm btn-light-danger pc-slider-btn-11" data-variant="3">Lock both</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Working with dates</label>
                            <div class="col-lg-8 col-md-9 col-sm-12">
                                <div class="pc-ion-range-slider">
                                    <input id="pc-slider-12" type="text" name="" value="" />
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-sm btn-light-danger pc-slider-btn-12 active" data-variant="0">en-US</button>
                                    <button class="btn btn-sm btn-light-danger pc-slider-btn-12" data-variant="1">ru-RU</button>
                                    <button class="btn btn-sm btn-light-danger pc-slider-btn-12" data-variant="2">ko-KR</button>
                                    <button class="btn btn-sm btn-light-danger pc-slider-btn-12" data-variant="3">ar-EG</button>
                                    <button class="btn btn-sm btn-light-danger pc-slider-btn-12" data-variant="4">ja-JA</button>
                                    <button class="btn btn-sm btn-light-danger pc-slider-btn-12" data-variant="5">de-DE</button>
                                </div>
                            </div>
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
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- tagify -->
<script src="assets/js/plugins/ion.rangeSlider.min.js"></script>
<script>
    // basic demo
    $('#pc-slider-1').ionRangeSlider();
    // min & max values
    $('#pc-slider-2').ionRangeSlider({
        min: 100,
        max: 1000,
        from: 550
    });
    // custom prefix
    $('#pc-slider-3').ionRangeSlider({
        type: "double",
        grid: true,
        min: 0,
        max: 1000,
        from: 200,
        to: 800,
        prefix: "$"
    });
    // range & step
    $('#pc-slider-4').ionRangeSlider({
        type: "double",
        grid: true,
        min: -1000,
        max: 1000,
        from: -500,
        to: 500
    });
    // fractional step
    $('#pc-slider-5').ionRangeSlider({
        type: "double",
        grid: true,
        min: -12.8,
        max: 12.8,
        from: -3.2,
        to: 3.2,
        step: 0.1
    });
    // using postfixes
    $('#pc-slider-6').ionRangeSlider({
        type: "single",
        grid: true,
        min: -90,
        max: 90,
        from: 0,
        postfix: "°"
    });
    // using text
    $('#pc-slider-7').ionRangeSlider({
        type: "double",
        min: 100,
        max: 200,
        from: 145,
        to: 155,
        prefix: "Weight: ",
        postfix: " million pounds",
        decorate_both: true
    });
    $(function() {
        var $d8 = $("#pc-slider-8");
        var $d8_buttons = $(".pc-slider-btn-8");
        $d8.ionRangeSlider({
            grid: true,
            min: 1000,
            max: 1000000,
            from: 100000,
            step: 1000,
            prettify_enabled: true
        });
        var d8_instance = $d8.data("ionRangeSlider");
        $d8_buttons.on("click", function() {
            var $this = $(this);
            var o = {
                prettify_enabled: true,
                prettify_separator: " "
            };
            var type = $this.data("type");
            o.prettify_separator = type;
            if (!type) o.prettify_enabled = false;
            d8_instance.update(o);
            $this.addClass("active").siblings().removeClass("active");
        });

        function my_prettify(n) {
            var num = Math.log2(n);
            return n + " &rarr; " + (+num.toFixed(3));
        }
    });
    $(function() {
        var $d9 = $("#pc-slider-9");
        var $d9_buttons = $(".pc-slider-btn-9");
        $d9.ionRangeSlider({
            grid: true,
            min: 0,
            max: 100,
            from: 50,
            step: 5,
            max_postfix: "+",
            prefix: "$"
        });
        var d9_instance = $d9.data("ionRangeSlider");
        $d9_buttons.on("click", function() {
            var $this = $(this);
            var prefix = $this.data("prefix");
            var postfix = $this.data("postfix");
            var o = {
                prefix: prefix || "",
                postfix: postfix || ""
            };
            d9_instance.update(o);
            $this.addClass("active").siblings().removeClass("active");
        });
    });
    $(function() {
        var $d10 = $("#pc-slider-10");
        var $d10_buttons = $(".pc-slider-btn-10");
        $d10.ionRangeSlider({
            min: 0,
            max: 10000,
            from: 777,
            step: 1,
            grid: true,
            grid_num: 4,
            grid_snap: false
        });
        var d10_instance = $d10.data("ionRangeSlider");
        $d10_buttons.on("click", function() {
            var $this = $(this);
            var v = $this.data("variant");
            var o = {
                step: 1,
                grid: true,
                grid_num: 4,
                grid_snap: false
            };
            switch (v) {
                case 1:
                    o.grid_num = 10;
                    break;

                case 2:
                    o.grid_num = 20;
                    break;

                case 3:
                    o.step = 1000;
                    o.grid_snap = true;
                    break;

                case 4:
                    o.step = 2345;
                    o.grid_snap = true;
                    break;
            }
            d10_instance.update(o);
            $this.addClass("active").siblings().removeClass("active");
        });
    });
    $(function() {
        var $d1 = $("#pc-slider-11");
        var $d1_buttons = $(".pc-slider-btn-11");
        $d1.ionRangeSlider({
            type: "double",
            min: 0,
            max: 10,
            from: 2,
            to: 8,
            grid: true,
            grid_snap: true,
            from_fixed: false,
            to_fixed: false
        });
        var d1_instance = $d1.data("ionRangeSlider");
        $d1_buttons.on("click", function() {
            var $this = $(this);
            var v = $this.data("variant");
            var o = {
                from_fixed: false,
                to_fixed: false
            };
            switch (v) {
                case 1:
                    o.from_fixed = true;
                    break;

                case 2:
                    o.to_fixed = true;
                    break;

                case 3:
                    o.from_fixed = true;
                    o.to_fixed = true;
                    break;
            }
            d1_instance.update(o);
            $this.addClass("active").siblings().removeClass("active");
        });
    });
    $(function() {
        var lang = "en-US";
        var year = 2018;
        function dateToTS(date) {
            return date.valueOf();
        }
        function tsToDate(ts) {
            var d = new Date(ts);
            return d.toLocaleDateString(lang, {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
        }
        var $d4 = $("#pc-slider-12");
        var $d4_buttons = $(".pc-slider-btn-12");
        $d4.ionRangeSlider({
            type: "double",
            force_edges: true,
            grid: true,
            grid_num: 2,
            min: dateToTS(new Date(year, 10, 1)),
            max: dateToTS(new Date(year, 11, 1)),
            from: dateToTS(new Date(year, 10, 8)),
            to: dateToTS(new Date(year, 10, 23)),
            prettify: tsToDate
        });
        var d4_instance = $d4.data("ionRangeSlider");
        $d4_buttons.on("click", function() {
            var $this = $(this);
            var v = $this.data("variant");
            switch (v) {
                case 0:
                    lang = "en-US";
                    break;

                case 1:
                    lang = "ru-RU";
                    break;

                case 2:
                    lang = "ko-KR";
                    break;

                case 3:
                    lang = "ar-EG";
                    break;

                case 4:
                    lang = "ja-JA";
                    break;

                case 5:
                    lang = "de-DE";
                    break;
            }
            d4_instance.update({});
            $this.addClass("active").siblings().removeClass("active");
        });
    });
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
