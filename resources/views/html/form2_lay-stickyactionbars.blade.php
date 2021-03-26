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
                            <h5 class="m-b-10">Sticky Action Bar</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Layouts</a></li>
                            <li class="breadcrumb-item">Sticky Action Bar</li>
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
                    <div id="sticky-action" class="sticky-action">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <h5>Sticky Action Bar</h5>
                                </div>
                                <div class="col-sm-6 text-sm-end mt-3 mt-sm-0">
                                    <button type="reset" class="btn btn-success">Submit</button>
                                    <button type="reset" class="btn btn-light-secondary">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5>Form controls</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <form>
                                    <div class="form-group">
                                        <label class="form-label" for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label for="exampleCheck1">Check me out</label>
                                    </div>
                                    <button type="submit" class="btn  btn-primary">Submit</button>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <form>
                                    <div class="form-group">
                                        <label class="form-label">Text</label>
                                        <input type="text" class="form-control" placeholder="Text">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="exampleFormControlSelect1">Example select</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="exampleFormControlTextarea1">Example textarea</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <h5 class="mt-5">Sizing</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="mb-3 form-control form-control-lg" type="text" placeholder=".form-control-lg">
                                <input class="mb-3 form-control" type="text" placeholder="Default input">
                                <input class="mb-3 form-control form-control-sm" type="text" placeholder=".form-control-sm">
                            </div>
                            <div class="col-md-6">
                                <select class="mb-3 form-control form-control-lg">
                                    <option>Large select</option>
                                </select>
                                <select class="mb-3 form-control">
                                    <option>Default select</option>
                                </select>
                            </div>
                        </div>
                        <h5 class="mt-5">Inline</h5>
                        <hr>
                        <form class="row row-cols-md-auto g-3 align-items-center">
                            <div class="col-12">
                                <label class="sr-only" for="inlineFormInputName">Name</label>
                                <input type="text" class="form-control" id="inlineFormInputName" placeholder="Jane Doe">
                            </div>
                            <div class="col-12">
                                <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                                <div class="input-group">
                                    <div class="input-group-text">@</div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="sr-only" for="inlineFormSelectPref">Preference</label>
                                <select class="form-select" id="inlineFormSelectPref">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                    <label class="form-check-label" for="inlineFormCheck">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        <h5 class="mt-5">Form Grid</h5>
                        <hr>
                        <form>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="inputAddress2">Address 2</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-label" for="inputState">State</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>select</option>
                                        <option>Large select</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label class="form-label" for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">Check me out</label>
                                </div>
                            </div>
                            <button type="submit" class="btn  btn-primary">Sign in</button>
                        </form>
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
<script>
    $(window).on('scroll', function() {
        var ws = $(this).scrollTop();
        var port = $('#sticky-action');
        var elm = $(port, this);
        var off = elm.offset();
        var l = off.left;
        var r = off.right;
        var t = off.top;
        ws = ws + 70;
        if (ws >= t) {
            port.addClass('sticky');
            port.children('.card-header').css({
                "left":l,
                "right":"25px"
            });
        } else {
            port.children('.card-header').removeAttr("style");
            port.removeClass('sticky');
        }
    });
</script>
@include('html.layouts.footer-bottom-link')</body>

</html>
