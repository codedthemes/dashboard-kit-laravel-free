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
                            <h5 class="m-b-10">Multi Column Forms</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Layouts</a></li>
                            <li class="breadcrumb-item">Multi Column Forms</li>
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
                        <h5>2 Columns Form Layout</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label class="form-label">Name:</label>
                                    <input type="email" class="form-control" placeholder="Enter full name">
                                    <small class="form-text text-muted">Please enter your full name</small>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Email:</label>
                                    <input type="email" class="form-control" placeholder="Enter contact number">
                                    <small class="form-text text-muted">Please enter your Email id</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label class="form-label">Password:</label>
                                    <div class="input-group search-form">
                                        <input type="Password" class="form-control" placeholder="Please enter your Password">
                                        <span class="input-group-text bg-transparent"><i class="feather icon-lock"></i></span>
                                    </div>
                                    <small class="form-text text-muted">Please enter your Password</small>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Profile URL:</label>
                                    <div class="input-group search-form">
                                        <input type="text" class="form-control" placeholder="Please enter your Profile URL">
                                        <span class="input-group-text bg-transparent"><i class="feather icon-link"></i></span>
                                    </div>
                                    <small class="form-text text-muted">Please enter your Profile URL</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label class="form-label">User Type:</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="form-check-input" checked>
                                            <label class="form-check-label" for="customRadioInline1">Administrator</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="form-check-input">
                                            <label class="form-check-label" for="customRadioInline2">Author</label>
                                        </div>
                                    </div>
                                    <small class="form-text text-muted">Please select user type</small>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>2 Columns Horizontal Form Layout</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Name:</label>
                                <div class="col-lg-3">
                                    <input type="email" class="form-control" placeholder="Enter full name">
                                    <small class="form-text text-muted">Please enter your full name</small>
                                </div>
                                <label class="col-lg-2 col-form-label">Email:</label>
                                <div class="col-lg-3">
                                    <input type="email" class="form-control" placeholder="Enter contact number">
                                    <small class="form-text text-muted">Please enter your Email id</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Password:</label>
                                <div class="col-lg-3">
                                    <div class="input-group search-form">
                                        <input type="password" class="form-control" placeholder="Enter your Password">
                                        <span class="input-group-text bg-transparent"><i class="feather icon-lock"></i></span>
                                    </div>
                                    <small class="form-text text-muted">Please enter your Password</small>
                                </div>
                                <label class="col-lg-2 col-form-label">Profile URL:</label>
                                <div class="col-lg-3">
                                    <div class="input-group search-form">
                                        <input type="text" class="form-control" placeholder="Enter your Profile URL">
                                        <span class="input-group-text bg-transparent"><i class="feather icon-link"></i></span>
                                    </div>
                                    <small class="form-text text-muted">Please enter your Profile URL</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">User Type:</label>
                                <div class="col-lg-3">
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="customRadioInline21" name="customRadioInline1" class="form-check-input" checked>
                                            <label class="form-check-label" for="customRadioInline21">Administrator</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="customRadioInline22" name="customRadioInline1" class="form-check-input">
                                            <label class="form-check-label" for="customRadioInline22">Author</label>
                                        </div>
                                    </div>
                                    <small class="form-text text-muted">Please select user type</small>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>3 Columns Form Layout</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label class="form-label">Name:</label>
                                    <input type="email" class="form-control" placeholder="Enter full name">
                                    <small class="form-text text-muted">Please enter your full name</small>
                                </div>
                                <div class="col-lg-4">
                                    <label  class="form-label">Email:</label>
                                    <input type="email" class="form-control" placeholder="Enter email">
                                    <small class="form-text text-muted">Please enter your email</small>
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-label">Password:</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="feather icon-lock"></i></span>
                                        <input type="password" class="form-control" placeholder="Enter Password">
                                    </div>
                                    <small class="form-text text-muted">Please enter your Password</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label  class="form-label">Contact:</label>
                                    <input type="email" class="form-control" placeholder="Enter contact number">
                                    <small class="form-text text-muted">Please enter your contact</small>
                                </div>
                                <div class="col-lg-4">
                                    <label  class="form-label">Profile URL:</label>
                                    <div class="input-group search-form">
                                        <input type="text" class="form-control" placeholder="Profile URL">
                                        <span class="input-group-text bg-transparent"><i class="feather icon-link"></i></span>
                                    </div>
                                    <small class="form-text text-muted">Please enter Profile URL</small>
                                </div>
                                <div class="col-lg-4">
                                    <label  class="form-label">Pincode:</label>
                                    <input type="text" class="form-control" placeholder="Enter your postcode">
                                    <small class="form-text text-muted">Please enter your postcode</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label class="form-label">Address:</label>
                                    <input type="text" class="form-control" placeholder="Enter your address">
                                    <small class="form-text text-muted">Please enter your address</small>
                                </div>
                                <div class="col-lg-4">
                                    <label  class="form-label">User Type:</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="customRadioInline21" name="customRadioInline1" class="form-check-input" checked>
                                            <label class="form-check-label" for="customRadioInline21">Administrator</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="customRadioInline22" name="customRadioInline1" class="form-check-input">
                                            <label class="form-check-label" for="customRadioInline22">Author</label>
                                        </div>
                                    </div>
                                    <small class="form-text text-muted">Please select User Type</small>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>3 Columns Horizontal Form Layout</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <div class="row">
                                        <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Name:</label>
                                        <div class="col-lg-9">
                                            <input type="email" class="form-control" placeholder="Full name">
                                            <small class="form-text text-muted">Please enter your full name</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Email:</label>
                                        <div class="col-lg-9">
                                            <input type="email" class="form-control" placeholder="Enter email">
                                            <small class="form-text text-muted">Please enter your email</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Password:</label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="feather icon-lock"></i></span>
                                                <input type="text" class="form-control" placeholder="Enter Password">
                                            </div>
                                            <small class="form-text text-muted">Please enter your Password</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <div class="row">
                                        <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Contact:</label>
                                        <div class="col-lg-9">
                                            <input type="email" class="form-control" placeholder="Enter contact number">
                                            <small class="form-text text-muted">Please enter your contact</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Profile URL:</label>
                                        <div class="col-lg-9">
                                            <div class="input-group search-form">
                                                <input type="text" class="form-control" placeholder="Fax Profile URL">
                                                <span class="input-group-text bg-transparent"><i class="feather icon-alert-circle"></i></span>
                                            </div>
                                            <small class="form-text text-muted">Please enter Profile URL</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Pincode:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Enter your postcode">
                                            <small class="form-text text-muted">Please enter your postcode</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <div class="row">
                                        <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Address:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Enter your address">
                                            <small class="form-text text-muted">Please enter your address</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <label class="col-lg-3 col-form-label text-lg-end px-lg-0">User Type:</label>
                                        <div class="col-lg-9">
                                            <div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" id="customRadioInline21" name="customRadioInline1" class="form-check-input" checked>
                                                    <label class="form-check-label" for="customRadioInline21">Administrator</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" id="customRadioInline22" name="customRadioInline1" class="form-check-input">
                                                    <label class="form-check-label" for="customRadioInline22">Author</label>
                                                </div>
                                            </div>
                                            <small class="form-text text-muted">Please select User Type</small>
                                        </div>
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
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
@include('html.layouts.footer-bottom-link')</body>

</html>
