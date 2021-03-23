<!DOCTYPE html>
<html lang="en">

<head>
    @@include('./layouts/head.html')
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
                            <h5 class="m-b-10">Wizard 1</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item">Wizard 1</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Smart-Wizard ] start -->
            <div class="col-md-12">
                <h5>Basic Wizard 1</h5>
                <div class="pc-wizard card" id="besicwizard">
                    <ul class="nav justify-content-center card-header pb-0">
                        <li class="nav-item"><a href="#b-w-tab1" class="nav-link" data-bs-toggle="tab"><i class="fas f-w-900 fa-user-alt"></i> Profile</a></li>
                        <li class="nav-item"><a href="#b-w-tab2" class="nav-link" data-bs-toggle="tab"><i class="fas f-w-900 fa-map-marked-alt"></i>Address</a></li>
                        <li class="nav-item"><a href="#b-w-tab3" class="nav-link" data-bs-toggle="tab"><i class="fas f-w-900 fa-graduation-cap"></i>Education</a></li>
                        <li class="nav-item"><a href="#b-w-tab4" class="nav-link" data-bs-toggle="tab"><i class="fas f-w-900 fa-people-carry"></i>Final</a></li>
                    </ul>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-md-10">
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
                                        <form>
                                            <div class="form-group row">
                                                <label for="b-t-sate" class="col-sm-3 col-form-label">Year</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" id="b-t-sate">
                                                        <option>Select Year</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="b-t-address" class="col-sm-3 col-form-label">Details</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" id="b-t-address" rows="3" spellcheck="false"></textarea>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="b-w-tab4">
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
                                            <a href="#!" class="btn btn-outline-secondary button-previous">Previous</a>
                                        </div>
                                        <div class="col-sm-6 text-md-end">
                                            <a href="#!" class="btn btn-outline-secondary button-next">Next</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5>Basic Wizard 2</h5>
                <div class="pc-wizard-details card" id="detailswizard">
                    <ul class="nav justify-content-center card-header pb-0">
                        <li class="nav-item"><a href="#b-w2-tab1" class="nav-link" data-bs-toggle="tab"><i class="fas f-w-900 fa-user-alt"></i> Profile</a></li>
                        <li class="nav-item"><a href="#b-w2-tab2" class="nav-link" data-bs-toggle="tab"><i class="fas f-w-900 fa-map-marked-alt"></i>Address</a></li>
                        <li class="nav-item"><a href="#b-w2-tab3" class="nav-link" data-bs-toggle="tab"><i class="fas f-w-900 fa-graduation-cap"></i>Education</a></li>
                        <li class="nav-item"><a href="#b-w2-tab4" class="nav-link" data-bs-toggle="tab"><i class="fas f-w-900 fa-people-carry"></i>Final</a></li>
                    </ul>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-md-10">
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="b-w2-tab1">
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
                                    <div class="tab-pane" id="b-w2-tab2">
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
                                    <div class="tab-pane" id="b-w2-tab3">
                                        <form>
                                            <div class="form-group row">
                                                <label for="b-t-sate" class="col-sm-3 col-form-label">Year</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" id="b-t-sate">
                                                        <option>Select Year</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="b-t-address" class="col-sm-3 col-form-label">Details</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" id="b-t-address" rows="3" spellcheck="false"></textarea>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="b-w2-tab4">
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
                                            <a href="#!" class="btn btn-outline-secondary button-previous">Previous</a>
                                        </div>
                                        <div class="col-sm-6 text-md-end">
                                            <a href="#!" class="btn btn-outline-secondary button-next">Next</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5>Basic Wizard 3</h5>
                <div class="pc-wizard-subtitle card" id="detailswizard3v">
                    <ul class="nav justify-content-center card-header pb-0">
                        <li class="nav-item"><a href="#b-w3-tab1" class="nav-link" data-bs-toggle="tab"><i class="feather icon-user"></i><span><h6>Profile</h6>Lorem impsum</span></a></li>
                        <li class="nav-item"><a href="#b-w3-tab2" class="nav-link" data-bs-toggle="tab"><i class="feather icon-map-pin"></i><span><h6>Address</h6>Lorem impsum</span></a></li>
                        <li class="nav-item"><a href="#b-w3-tab3" class="nav-link" data-bs-toggle="tab"><i class="feather icon-book"></i><span><h6>Education</h6>Lorem impsum</span></a></li>
                        <li class="nav-item"><a href="#b-w3-tab4" class="nav-link" data-bs-toggle="tab"><i class="feather icon-shopping-cart"></i><span><h6>Final</h6>Lorem impsum</span></a></li>
                    </ul>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-md-10">
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="b-w3-tab1">
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
                                    <div class="tab-pane" id="b-w3-tab2">
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
                                    <div class="tab-pane" id="b-w3-tab3">
                                        <form>
                                            <div class="form-group row">
                                                <label for="b-t-sate" class="col-sm-3 col-form-label">Year</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" id="b-t-sate">
                                                        <option>Select Year</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="b-t-address" class="col-sm-3 col-form-label">Details</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" id="b-t-address" rows="3" spellcheck="false"></textarea>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="b-w3-tab4">
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
                                            <a href="#!" class="btn btn-outline-secondary button-previous">Previous</a>
                                        </div>
                                        <div class="col-sm-6 text-md-end">
                                            <a href="#!" class="btn btn-outline-secondary button-next">Next</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5>Basic Wizard 3 [ Vertical ]</h5>
                <div class="pc-wizard-subtitle-vertical card" id="detailswizard2">
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="nav flex-column card-body border-end px-0">
                                <li class="nav-item"><a href="#b-w4-tab1" class="nav-link" data-bs-toggle="tab"><i class="feather icon-user"></i><span><h6>Profile</h6>Lorem impsum</span></a></li>
                                <li class="nav-item"><a href="#b-w4-tab2" class="nav-link" data-bs-toggle="tab"><i class="feather icon-map-pin"></i><span><h6>Address</h6>Lorem impsum</span></a></li>
                                <li class="nav-item"><a href="#b-w4-tab3" class="nav-link" data-bs-toggle="tab"><i class="feather icon-book"></i><span><h6>Education</h6>Lorem impsum</span></a></li>
                                <li class="nav-item"><a href="#b-w4-tab4" class="nav-link" data-bs-toggle="tab"><i class="feather icon-shopping-cart"></i><span><h6>Final</h6>Lorem impsum</span></a></li>
                            </ul>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body pb-0">
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="b-w4-tab1">
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
                                    <div class="tab-pane" id="b-w4-tab2">
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
                                    <div class="tab-pane" id="b-w4-tab3">
                                        <form>
                                            <div class="form-group row">
                                                <label for="b-t-sate" class="col-sm-3 col-form-label">Year</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" id="b-t-sate">
                                                        <option>Select Year</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="b-t-address" class="col-sm-3 col-form-label">Details</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" id="b-t-address" rows="3" spellcheck="false"></textarea>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="b-w4-tab4">
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
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row justify-content-between btn-page">
                                    <div class="col-sm-6">
                                        <a href="#!" class="btn btn-outline-secondary button-previous">Previous</a>
                                    </div>
                                    <div class="col-sm-6 text-md-end">
                                        <a href="#!" class="btn btn-outline-secondary button-next">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5>Basic Wizard Number</h5>
                <div class="pc-wizard-subtitle card" id="numwizard">
                    <ul class="nav justify-content-center card-header pb-0">
                        <li class="nav-item"><a href="#b-w6-tab1" class="nav-link" data-bs-toggle="tab"><span class="num-icon">1</span><span><h6>Profile</h6>Lorem impsum</span></a></li>
                        <li class="nav-item"><a href="#b-w6-tab2" class="nav-link" data-bs-toggle="tab"><span class="num-icon">2</span><span><h6>Address</h6>Lorem impsum</span></a></li>
                        <li class="nav-item"><a href="#b-w6-tab3" class="nav-link" data-bs-toggle="tab"><span class="num-icon">3</span><span><h6>Education</h6>Lorem impsum</span></a></li>
                        <li class="nav-item"><a href="#b-w6-tab4" class="nav-link" data-bs-toggle="tab"><span class="num-icon">4</span><span><h6>Final</h6>Lorem impsum</span></a></li>
                    </ul>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-md-10">
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="b-w6-tab1">
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
                                    <div class="tab-pane" id="b-w6-tab2">
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
                                    <div class="tab-pane" id="b-w6-tab3">
                                        <form>
                                            <div class="form-group row">
                                                <label for="b-t-sate" class="col-sm-3 col-form-label">Year</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" id="b-t-sate">
                                                        <option>Select Year</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="b-t-address" class="col-sm-3 col-form-label">Details</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" id="b-t-address" rows="3" spellcheck="false"></textarea>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="b-w6-tab4">
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
                                            <a href="#!" class="btn btn-outline-secondary button-previous">Previous</a>
                                        </div>
                                        <div class="col-sm-6 text-md-end">
                                            <a href="#!" class="btn btn-outline-secondary button-next">Next</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5>Basic Wizard Number [ Vertical ]</h5>
                <div class="pc-wizard-subtitle-vertical card" id="numwizardhor">
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="nav flex-column card-body border-end px-0">
                                <li class="nav-item"><a href="#b-w5-tab1" class="nav-link" data-bs-toggle="tab"><span class="num-icon">1</span><span><h6>Profile</h6>Lorem impsum</span></a></li>
                                <li class="nav-item"><a href="#b-w5-tab2" class="nav-link" data-bs-toggle="tab"><span class="num-icon">2</span><span><h6>Address</h6>Lorem impsum</span></a></li>
                                <li class="nav-item"><a href="#b-w5-tab3" class="nav-link" data-bs-toggle="tab"><span class="num-icon">3</span><span><h6>Education</h6>Lorem impsum</span></a></li>
                                <li class="nav-item"><a href="#b-w5-tab4" class="nav-link" data-bs-toggle="tab"><span class="num-icon">4</span><span><h6>Final</h6>Lorem impsum</span></a></li>
                            </ul>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body pb-0">
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="b-w5-tab1">
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
                                    <div class="tab-pane" id="b-w5-tab2">
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
                                    <div class="tab-pane" id="b-w5-tab3">
                                        <form>
                                            <div class="form-group row">
                                                <label for="b-t-sate" class="col-sm-3 col-form-label">Year</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" id="b-t-sate">
                                                        <option>Select Year</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="b-t-address" class="col-sm-3 col-form-label">Details</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" id="b-t-address" rows="3" spellcheck="false"></textarea>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="b-w5-tab4">
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
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row justify-content-between btn-page">
                                    <div class="col-sm-6">
                                        <a href="#!" class="btn btn-outline-secondary button-previous">Previous</a>
                                    </div>
                                    <div class="col-sm-6 text-md-end">
                                        <a href="#!" class="btn btn-outline-secondary button-next">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5>Basic Wizard Number [ advance ]</h5>
                <div class="pc-wizard-subtitle" id="numwizardtb">
                    <ul class="nav justify-content-center tab-wizard card-header pb-0 px-0  nav-fill ">
                        <li class="nav-item"><a href="#b-w7-tab1" class="nav-link" data-bs-toggle="tab"><span class="num-icon">1</span><span><h6>Profile</h6>Lorem impsum</span></a></li>
                        <li class="nav-item"><a href="#b-w7-tab2" class="nav-link" data-bs-toggle="tab"><span class="num-icon">2</span><span><h6>Address</h6>Lorem impsum</span></a></li>
                        <li class="nav-item"><a href="#b-w7-tab3" class="nav-link" data-bs-toggle="tab"><span class="num-icon">3</span><span><h6>Education</h6>Lorem impsum</span></a></li>
                        <li class="nav-item"><a href="#b-w7-tab4" class="nav-link" data-bs-toggle="tab"><span class="num-icon">4</span><span><h6>Final</h6>Lorem impsum</span></a></li>
                    </ul>
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-md-10">
                                    <div class="tab-content">
                                        <div class="tab-pane active show" id="b-w7-tab1">
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
                                        <div class="tab-pane" id="b-w7-tab2">
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
                                        <div class="tab-pane" id="b-w7-tab3">
                                            <form>
                                                <div class="form-group row">
                                                    <label for="b-t-sate" class="col-sm-3 col-form-label">Year</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" id="b-t-sate">
                                                            <option>Select Year</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="b-t-address" class="col-sm-3 col-form-label">Details</label>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control" id="b-t-address" rows="3" spellcheck="false"></textarea>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="b-w7-tab4">
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
                                                <a href="#!" class="btn btn-outline-secondary button-previous">Previous</a>
                                            </div>
                                            <div class="col-sm-6 text-md-end">
                                                <a href="#!" class="btn btn-outline-secondary button-next">Next</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Smart-Wizard ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
@@include('./layouts/footer.html')
<script src="assets/js/plugins/jquery.bootstrap.wizard.min.js"></script>
<script>
    $(document).ready(function() {
        $('#besicwizard').bootstrapWizard({
            withVisible: false,
            'tabClass': 'nav nav-tabs',
            'nextSelector': '.button-next',
            'previousSelector': '.button-previous',
        });
        $('#detailswizard').bootstrapWizard({
            withVisible: false,
            'tabClass': 'nav nav-tabs',
            'nextSelector': '.button-next',
            'previousSelector': '.button-previous',
            // 'firstSelector': '.button-first',
            // 'lastSelector': '.button-last'
        });
        $('#detailswizard2').bootstrapWizard({
            withVisible: false,
            'tabClass': 'nav nav-tabs',
            'nextSelector': '.button-next',
            'previousSelector': '.button-previous',
        });
        $('#detailswizard3v').bootstrapWizard({
            withVisible: false,
            'tabClass': 'nav nav-tabs',
            'nextSelector': '.button-next',
            'previousSelector': '.button-previous',
        });
        $('#numwizard').bootstrapWizard({
            withVisible: false,
            'tabClass': 'nav nav-tabs',
            'nextSelector': '.button-next',
            'previousSelector': '.button-previous',
        });
        $('#numwizardhor').bootstrapWizard({
            withVisible: false,
            'tabClass': 'nav nav-tabs',
            'nextSelector': '.button-next',
            'previousSelector': '.button-previous',
        });
        $('#numwizardtb').bootstrapWizard({
            withVisible: false,
            'tabClass': 'nav nav-tabs',
            'nextSelector': '.button-next',
            'previousSelector': '.button-previous',
        });
    });
</script>
@@include('./layouts/footer-bottom-link.html')
</body>

</html>
