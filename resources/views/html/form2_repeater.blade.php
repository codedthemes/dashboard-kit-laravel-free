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
                            <h5 class="m-b-10">Form Repeater</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item">Form Repeater</li>
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
                        <h5>Repeater Example</h5>
                    </div>
                    <div class="card-body">
                        <form class="repeater">
                            <div data-repeater-list="group-a">
                                <div data-repeater-item>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" name="text-input" value="A">
                                        <a href="javascript:;" class="btn btn-danger btn-icon" data-repeater-delete type="button" value="Delete">
                                            <i class="feather icon-x"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <input data-repeater-create type="button" value="Add" class="btn btn-primary" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Nested Example</h5>
                    </div>
                    <div class="card-body">
                        <form class="repeater2">
                            <div data-repeater-list="outer-list">
                                <div data-repeater-item>
                                    <div class="border p-2 mb-2">
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control" name="text-input" value="A">
                                            <a href="javascript:;" class="btn btn-danger btn-icon" data-repeater-delete type="button" value="Delete">
                                                <i class="feather icon-x"></i>
                                            </a>
                                        </div>
                                        <!-- innner repeater -->
                                        <div class="inner-repeater">
                                            <div data-repeater-list="inner-list">
                                                <div data-repeater-item>
                                                    <div class="input-group mb-2">
                                                        <input type="text" class="form-control" name="text-input" value="B">
                                                        <a href="javascript:;" class="btn btn-danger btn-icon" data-repeater-delete type="button" value="Delete">
                                                            <i class="feather icon-x"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <input data-repeater-create type="button" value="Add child" class="btn btn-success btn-sm" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input data-repeater-create type="button" value="Add parent" class="btn btn-primary mt-3" />
                        </form>
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
<script src="assets/js/plugins/jquery.repeater.min.js"></script>
<script>
    $(document).ready(function() {
        $('.repeater').repeater({
            initEmpty: true,
            defaultValues: {
                'text-input': 'foo'
            },
            show: function() {
                $(this).slideDown();
            },
            hide: function(deleteElement) {
                if (confirm('Are you sure you want to delete this element?')) {
                    $(this).slideUp(deleteElement);
                }
            },
            isFirstItemUndeletable: true
        })
    });
</script>
<script>
    $(document).ready(function() {
        $('.repeater2').repeater({
            repeaters: [{
                selector: '.inner-repeater'
            }]
        });
    });
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
