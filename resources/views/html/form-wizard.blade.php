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
                            <h5 class="m-b-10">Form Wizard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item">Form Wizard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-6">
                <div class="card" id="example-1">
                    <div class="card-header">
                        <h5>Basic Wizard With Validation</h5>
                    </div>
                    <form name="example-1" id="wrapped">
                        <div class="card-body">
                            <div class="step">
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">What is your name?</label>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="name" class="required form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-5 col-sm-12 text-lg-end">What is your gender?</label>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"  name="gender" value="Male" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" value="Female" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <div class="submit step">
                                <p>You are a <strong id="gender"></strong> named <strong id="name"></strong>.</p>
                            </div>
                        </div>
                        <div class="navigation card-footer">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item d-inline-block"><button type="button" name="backward" class="btn btn-sm btn-secondary backward">Backward</button></li>
                                <li class="list-inline-item d-inline-block"><button type="button" name="forward" class="btn btn-sm btn-secondary forward">Forward</button></li>
                                <li class="list-inline-item d-inline-block"><button type="submit" name="process" class="btn btn-sm btn-secondary submit">Submit</button></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" id="example-2">
                    <div class="card-header">
                        <div class="float-end">
                            <span class="badge bg-primary f-14 rounded px-2" id="location"></span>
                        </div>
                        <h5>Basic Wizard With Progress Bar</h5>
                    </div>
                    <div id="progressbar" class="progress"></div>
                    <form name="example-2">
                        <div class="card-body">
                            <div class="step">
                                <p>1) This basic wizard has a progress bar attached to it.</p>
                            </div>
                            <div class="step">
                                <p>2) Note your progress in the progress bar above.</p>
                            </div>
                            <div class="step">
                                <p>3) You have reached the end of this wizard. Yippee!</p>
                            </div>
                            <div class="step">
                                <p>4) Note your progress in the progress bar above.</p>
                            </div>
                            <div class="step">
                                <p>5) You have reached the end of this wizard. Yippee!</p>
                            </div>
                            <div class="step">
                                <p>6) Note your progress in the progress bar above.</p>
                            </div>
                            <div class="step">
                                <p>7) You have reached the end of this wizard. Yippee!</p>
                            </div>
                            <div class="step">
                                <p>8) Note your progress in the progress bar above.</p>
                            </div>
                            <div class="step">
                                <p>9) You have reached the end of this wizard. Yippee!</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="navigation">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item d-inline-block"><button type="button" name="backward" class="btn btn-sm btn-secondary backward">Backward</button></li>
                                    <li class="list-inline-item d-inline-block"><button type="button" name="forward" class="btn btn-sm btn-secondary forward">Forward</button></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" id="example-3">
                    <div class="card-header">
                        <h5>Branching Wizard</h5>
                    </div>
                    <form name="example-3">
                        <div class="card-body">
                            <div class="step">
                                <p>This is a branching wizard. You will see different steps depending on your answers.</p>
                            </div>
                            <div class="step" data-state="color">
                                <p>Which color do you like best?</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio"  name="color" value="pink" id="colorPink">
                                    <label class="form-check-label" for="colorPink">
                                        Red
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="color" value="blue" id="colorBlue">
                                    <label class="form-check-label" for="colorBlue">
                                        Blue
                                    </label>
                                </div>
                            </div>
                            <div class="branch" id="pink">
                                <div class="step bg-light-danger text-center p-4 rounded" data-state="end">
                                    <i class="material-icons-two-tone text-danger f-50">card_giftcard</i>
                                    <h5 class="text-danger">Pink, it was love at first sight</h5>
                                </div>
                            </div>
                            <div class="branch" id="blue">
                                <div class="step bg-light-primary text-center p-4 rounded" data-state="end">
                                    <i class="material-icons-two-tone text-primary f-50">account_circle</i>
                                    <h5 class="text-primary">I'm blue da ba dee da ba die...</h5>
                                </div>
                            </div>
                            <div class="step" id="end">
                                <div class="bg-light-secondary text-center p-4 rounded" data-state="end">
                                    <i class="material-icons-two-tone text-secondary f-50">library_add_check</i>
                                    <h5 class="text-secondary">Done !...</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="navigation">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item d-inline-block"><button type="button" name="backward" class="btn btn-sm btn-secondary backward">Backward</button></li>
                                    <li class="list-inline-item d-inline-block"><button type="button" name="forward" class="btn btn-sm btn-secondary forward">Forward</button></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" id="example-4">
                    <div class="card-header">
                        <h5>Nested Branches</h5>
                    </div>
                    <form name="example-3">
                        <div class="card-body">
                            <div class="step" data-state="e4-branch-1">
                                <p>Start</p>
                            </div>
                            <div class="branch" id="e4-branch-1">
                                <div class="step" data-state="e4-branch-2">Branch Step</div>
                                <div class="branch" id="e4-branch-2">
                                    <div class="step" data-state="e4-finish">Nested Branch Step</div>
                                </div>
                            </div>
                            <div class="step" id="e4-finish">
                                <p>Finish</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="navigation">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item d-inline-block"><button type="button" name="backward" class="btn btn-sm btn-secondary backward">Backward</button></li>
                                    <li class="list-inline-item d-inline-block"><button type="button" name="forward" class="btn btn-sm btn-secondary forward">Forward</button></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- [ Smart-Wizard ] start -->
            <!-- <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Wizard</h5>
                    </div>
                    <div class="card-body">
                        <div class="bt-wizard" id="besicwizard">
                            <ul class="nav nav-pills nav-fill mb-3">
                                <li class="nav-item"><a href="#b-w-tab1" class="nav-link" data-bs-toggle="tab">Profile</a></li>
                                <li class="nav-item"><a href="#b-w-tab2" class="nav-link" data-bs-toggle="tab">Address</a></li>
                                <li class="nav-item"><a href="#b-w-tab3" class="nav-link" data-bs-toggle="tab">Final</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active show" id="b-w-tab1">
                                    <form>
                                        <div class="form-group row">
                                            <label for="b-t-name" class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="b-t-name" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="b-t-email" class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="b-t-email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="b-t-pwd" class="col-sm-3 col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="b-t-pwd" placeholder="Password">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="b-w-tab2">
                                    <form>
                                        <div class="form-group row">
                                            <label for="b-t-sate" class="col-sm-3 col-form-label">State</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="b-t-sate">
                                                    <option>Select State</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="b-t-address" class="col-sm-3 col-form-label">Address</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="b-t-address" rows="3" spellcheck="false"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="b-w-tab3">
                                    <form class="text-center">
                                        <i class="feather icon-check-circle display-3 text-success"></i>
                                        <h5 class="mt-3">Registration Done! . .</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                                        <div class="form-check d-inline-block mb-3">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1">Subscribe Newslatter</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="row justify-content-between btn-page">
                                    <div class="col-sm-6">
                                        <a href="#!" class="btn btn-primary button-previous">Previous</a>
                                    </div>
                                    <div class="col-sm-6 text-md-end">
                                        <a href="#!" class="btn btn-primary button-next">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Wizard with Button</h5>
                    </div>
                    <div class="card-body">
                        <div class="bt-wizard" id="btnwizard">
                            <ul class="nav nav-pills nav-fill mb-3">
                                <li class="nav-item"><a href="#btn-t-tab1" class="nav-link" data-bs-toggle="tab">Profile</a></li>
                                <li class="nav-item"><a href="#btn-t-tab2" class="nav-link" data-bs-toggle="tab">Address</a></li>
                                <li class="nav-item"><a href="#btn-t-tab3" class="nav-link" data-bs-toggle="tab">Final</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active show" id="btn-t-tab1">
                                    <form>
                                        <div class="form-group row">
                                            <label for="btn-t-name" class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="btn-t-name" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="btn-t-email" class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="btn-t-email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="btn-t-pwd" class="col-sm-3 col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="btn-t-pwd" placeholder="Password">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="btn-t-tab2">
                                    <form>
                                        <div class="form-group row">
                                            <label for="btn-t-sate" class="col-sm-3 col-form-label">State</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="btn-t-sate">
                                                    <option>Select State</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="btn-t-address" class="col-sm-3 col-form-label">Address</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="btn-t-address" rows="3" spellcheck="false"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="btn-t-tab3">
                                    <form class="text-center">
                                        <i class="feather icon-check-circle display-3 text-success"></i>
                                        <h5 class="mt-3">Registration Done! . .</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                                        <div class="form-check d-inline-block mb-3">
                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                            <label class="form-check-label" for="customCheck2">Subscribe Newslatter</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="row justify-content-between btn-page">
                                    <div class="col-sm-6">
                                        <a href="#!" class="btn btn-primary button-first">First</a>
                                        <a href="#!" class="btn btn-primary button-previous">Previous</a>
                                    </div>
                                    <div class="col-sm-6 text-md-end">
                                        <a href="#!" class="btn btn-primary button-last">Last</a>
                                        <a href="#!" class="btn btn-primary button-next">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Wizard with Progress</h5>
                    </div>
                    <div class="card-body">
                        <div class="bt-wizard" id="progresswizard">
                            <ul class="nav nav-pills nav-fill mb-3">
                                <li class="nav-item"><a href="#progress-t-tab1" class="nav-link" data-bs-toggle="tab">Profile</a></li>
                                <li class="nav-item"><a href="#progress-t-tab2" class="nav-link" data-bs-toggle="tab">Address</a></li>
                                <li class="nav-item"><a href="#progress-t-tab3" class="nav-link" data-bs-toggle="tab">Final</a></li>
                            </ul>
                            <div id="bar" class="bt-wizard progress mb-3" style="height:6px">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active show" id="progress-t-tab1">
                                    <form>
                                        <div class="form-group row">
                                            <label for="progress-t-name" class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="progress-t-name" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="progress-t-email" class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="progress-t-email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="progress-t-pwd" class="col-sm-3 col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="progress-t-pwd" placeholder="Password">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="progress-t-tab2">
                                    <form>
                                        <div class="form-group row">
                                            <label for="progress-t-sate" class="col-sm-3 col-form-label">State</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="progress-t-sate">
                                                    <option>Select State</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="progress-t-address" class="col-sm-3 col-form-label">Address</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="progress-t-address" rows="3" spellcheck="false"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="progress-t-tab3">
                                    <form class="text-center">
                                        <i class="feather icon-check-circle display-3 text-success"></i>
                                        <h5 class="mt-3">Registration Done! . .</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                                        <div class="form-check d-inline-block mb-3">
                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                            <label class="form-check-label" for="customCheck2">Subscribe Newslatter</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="row justify-content-between btn-page">
                                    <div class="col-sm-6">
                                        <a href="#!" class="btn btn-primary button-previous">Previous</a>
                                    </div>
                                    <div class="col-sm-6 text-md-end">
                                        <a href="#!" class="btn btn-primary button-next">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Wizard with Validation</h5>
                    </div>
                    <div class="card-body">
                        <div class="bt-wizard" id="validationwizard">
                            <ul class="nav nav-pills nav-fill mb-3">
                                <li class="nav-item"><a href="#validation-t-tab1" class="nav-link" data-bs-toggle="tab">Profile</a></li>
                                <li class="nav-item"><a href="#validation-t-tab2" class="nav-link" data-bs-toggle="tab">Address</a></li>
                                <li class="nav-item"><a href="#validation-t-tab3" class="nav-link" data-bs-toggle="tab">Final</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active show" id="validation-t-tab1">
                                    <form class="form-1 needs-validation" novalidate>
                                        <div class="form-group row">
                                            <label for="validation-t-name" class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="validation-t-name" placeholder="Password" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="validation-t-email" class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="validation-t-email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="validation-t-pwd" class="col-sm-3 col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="validation-t-pwd" placeholder="Password" required>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="validation-t-tab2">
                                    <form class="form-2 needs-validation" novalidate>
                                        <div class="form-group row">
                                            <label for="validation-t-sate" class="col-sm-3 col-form-label">State</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="validation-t-sate" required>
                                                    <option>Select State</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="validation-t-address" class="col-sm-3 col-form-label">Address</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="validation-t-address" rows="3" spellcheck="false" required></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="validation-t-tab3">
                                    <form class="text-center">
                                        <i class="feather icon-check-circle display-3 text-success"></i>
                                        <h5 class="mt-3">Registration Done! . .</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                                        <div class="form-check d-inline-block mb-3">
                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                            <label class="form-check-label" for="customCheck2">Subscribe Newslatter</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="row justify-content-between btn-page">
                                    <div class="col-sm-6">
                                        <a href="#!" class="btn btn-primary button-previous">Previous</a>
                                    </div>
                                    <div class="col-sm-6 text-md-end">
                                        <a href="#!" class="btn btn-primary button-next">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <h5 class="mb-3 mt-4">Wizard with tabs</h5>
                <div class="bt-wizard" id="tabswizard">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a href="#tabs-t-tab1" class="nav-link rounded-0" data-bs-toggle="tab">Profile</a></li>
                        <li class="nav-item"><a href="#tabs-t-tab2" class="nav-link rounded-0" data-bs-toggle="tab">Address</a></li>
                        <li class="nav-item"><a href="#tabs-t-tab3" class="nav-link rounded-0" data-bs-toggle="tab">Final</a></li>
                    </ul>
                    <div class="tab-content card">
                        <div class="pt-1 bg-primary"></div>
                        <div class="tab-pane card-body pt-4 active show" id="tabs-t-tab1">
                            <form>
                                <div class="form-group row">
                                    <label for="tabs-t-name" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="tabs-t-name" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tabs-t-email" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="tabs-t-email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tabs-t-pwd" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="tabs-t-pwd" placeholder="Password">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane card-body pt-4" id="tabs-t-tab2">
                            <form>
                                <div class="form-group row">
                                    <label for="tabs-t-sate" class="col-sm-3 col-form-label">State</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="tabs-t-sate">
                                            <option>Select State</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tabs-t-address" class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="tabs-t-address" rows="3" spellcheck="false"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane card-body pt-4" id="tabs-t-tab3">
                            <form class="text-center">
                                <i class="feather icon-check-circle display-3 text-success"></i>
                                <h5 class="mt-3">Registration Done! . .</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing</p>
                                <div class="form-check d-inline-block mb-3">
                                    <input type="checkbox" class="form-check-input" id="customCheck2">
                                    <label class="form-check-label" for="customCheck2">Subscribe Newslatter</label>
                                </div>
                            </form>
                        </div>
                        <div class="row card-footer justify-content-between mx-0 btn-page">
                            <div class="col-sm-6 pl-0">
                                <a href="#!" class="btn btn-primary button-previous">Previous</a>
                            </div>
                            <div class="col-sm-6 text-md-end pr-0">
                                <a href="#!" class="btn btn-primary button-next">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <h5 class="mb-3 mt-4">Wizard vertical</h5>
                <div class="bt-wizard" id="verticalwizard">
                    <div class="row align-items-stratched mb-4">
                        <div class="col-12 col-md-auto col-sm-12">
                            <div class="card h-100 mb-0">
                                <div class="card-body">
                                    <ul class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                                        <li class="nav-item"><a href="#v-tabs-t-tab1" class="nav-link active" data-bs-toggle="tab">Profile</a></li>
                                        <li class="nav-item"><a href="#v-tabs-t-tab2" class="nav-link" data-bs-toggle="tab">Address</a></li>
                                        <li class="nav-item"><a href="#v-tabs-t-tab3" class="nav-link" data-bs-toggle="tab">Final</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="tab-content card mb-0" id="v-pills-tabContent">
                                <div class="tab-pane card-body active show" id="v-tabs-t-tab1">
                                    <form>
                                        <div class="form-group row">
                                            <label for="v-tabs-t-name" class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="v-tabs-t-name" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="v-tabs-t-email" class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="v-tabs-t-email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="v-tabs-t-pwd" class="col-sm-3 col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="v-tabs-t-pwd" placeholder="Password">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane card-body" id="v-tabs-t-tab2">
                                    <form>
                                        <div class="form-group row">
                                            <label for="v-tabs-t-sate" class="col-sm-3 col-form-label">State</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="v-tabs-t-sate">
                                                    <option>Select State</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="v-tabs-t-address" class="col-sm-3 col-form-label">Address</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="v-tabs-t-address" rows="3" spellcheck="false"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane card-body" id="v-tabs-t-tab3">
                                    <form class="text-center">
                                        <i class="feather icon-check-circle display-3 text-success"></i>
                                        <h5 class="mt-3">Registration Done! . .</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                                        <div class="form-check d-inline-block mb-3">
                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                            <label class="form-check-label" for="customCheck2">Subscribe Newslatter</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="row justify-content-between card-footer mx-0 btn-page">
                                    <div class="col-sm-6 pl-0">
                                        <a href="#!" class="btn btn-primary button-previous">Previous</a>
                                    </div>
                                    <div class="col-sm-6 text-md-end pr-0">
                                        <a href="#!" class="btn btn-primary button-next">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- [ Smart-Wizard ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- jquery-validation Js -->
<script src="assets/js/plugins/jquery.validate.min.js"></script>
<script src="assets/js/plugins/wizard/jquery-ui-1.10.4.custom.min.js"></script>
<script src="assets/js/plugins/wizard/jquery.wizard.js"></script>
<script>
    jQuery(function($) {
        // Example 1: Basic wizard with validation
        $("#example-1").wizard({
            stepsWrapper: "#wrapped",
            submit: ".submit",
            beforeForward: function(event, state) {
                if (state.stepIndex === 1) {
                    $("#name").text($("[name='name']").val());
                } else if (state.stepIndex === 2) {
                    $("#gender").text($("[name='gender']:checked").val());
                }
                return !!$(this).wizard("form").valid();
            }
        }).wizard("form").submit(function(event) {
            event.preventDefault();
            alert("Form submitted!");

        }).validate({
            errorPlacement: function(error, element) {
                if (element.is(":radio") || element.is(":checkbox")) {
                    error.insertBefore(element.next());

                } else {
                    error.insertAfter(element);
                }
            }
        });

        // Example 2: Basic wizard with progress bar
        $("#progressbar").progressbar();

        $("#example-2").wizard({
            afterSelect: function(event, state) {
                $("#progressbar").progressbar("value", state.percentComplete);
                $("#location").text(" " + state.stepsComplete + " / " + state.stepsPossible + " ");
            }
        });

        // Example 3: Basic branching wizard
        $("#example-3").wizard({
            transitions: {
                color: function(state, action) {
                    var branch = state.step.find("[name=color]:checked").val();

                    if (!branch) {
                        alert("Please select a value to continue.");
                    }

                    return branch;
                }
            }
        });

        // Example 4: Nested Branches
        $("#example-4").wizard();
    });
</script>
<!-- <script src="assets/js/plugins/jquery.bootstrap.wizard.min.js"></script>
<script>
    $(document).ready(function() {
        $('#besicwizard').bootstrapWizard({
            withVisible: false,
            'nextSelector': '.button-next',
            'previousSelector': '.button-previous',
            'firstSelector': '.button-first',
            'lastSelector': '.button-last'
        });
        $('#btnwizard').bootstrapWizard({
            withVisible: false,
            'nextSelector': '.button-next',
            'previousSelector': '.button-previous',
            'firstSelector': '.button-first',
            'lastSelector': '.button-last'
        });
        $('#progresswizard').bootstrapWizard({
            withVisible: false,
            'nextSelector': '.button-next',
            'previousSelector': '.button-previous',
            'firstSelector': '.button-first',
            'lastSelector': '.button-last',
            onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index + 1;
                var $percent = ($current / $total) * 100;
                $('#progresswizard .progress-bar').css({
                    width: $percent + '%'
                });
            }
        });
        $('#validationwizard').bootstrapWizard({
            withVisible: false,
            'nextSelector': '.button-next',
            'previousSelector': '.button-previous',
            'firstSelector': '.button-first',
            'lastSelector': '.button-last',
            onNext: function(tab, navigation, index) {
                if (index == 1) {
                    if (!$('#validation-t-name').val()) {
                        $('#validation-t-name').focus();
                        $('.form-1').addClass('was-validated');
                        return false;
                    }
                    if (!$('#validation-t-email').val()) {
                        $('#validation-t-email').focus();
                        $('.form-1').addClass('was-validated');
                        return false;
                    }
                    if (!$('#validation-t-pwd').val()) {
                        $('#validation-t-pwd').focus();
                        $('.form-1').addClass('was-validated');
                        return false;
                    }
                }
                if (index == 2) {
                    if (!$('#validation-t-address').val()) {
                        $('#validation-t-address').focus();
                        $('.form-2').addClass('was-validated');
                        return false;
                    }
                }
            }
        });
        $('#tabswizard').bootstrapWizard({
            'nextSelector': '.button-next',
            'previousSelector': '.button-previous',
        });
        $('#verticalwizard').bootstrapWizard({
            'nextSelector': '.button-next',
            'previousSelector': '.button-previous',
        });
    });
</script> -->
@include('html.layouts.footer-bottom-link')
</body>

</html>
