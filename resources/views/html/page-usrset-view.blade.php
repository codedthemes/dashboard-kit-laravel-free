<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    <link rel="stylesheet" href="assets/css/plugins/select2.min.css">
    @include('html.layouts.head-bottom-link')
</head>
@include('html.layouts.layout-vertical')
<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">User Profile</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">User</a></li>
                            <li class="breadcrumb-item">View</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-lg-4">
                <div class="card user-card user-card-1">
                    <div class="card-body pb-0">
                        <div class="float-end">
                            <span class="badge bg-light-danger">Pro</span>
                        </div>
                        <div class="media user-about-block align-items-center mt-0 mb-3">
                            <div class="position-relative d-inline-block">
                                <img class="img-radius img-fluid wid-80" src="assets/images/user/avatar-5.jpg" alt="User image">
                                <div class="certificated-badge">
                                    <i class="fas fa-certificate text-primary bg-icon"></i>
                                    <i class="fas fa-check front-icon text-white"></i>
                                </div>
                            </div>
                            <div class="media-body ms-3">
                                <h6 class="mb-1">Suzen</h6>
                                <p class="mb-0 text-muted">UI/UX Designer</p>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span class="f-w-500 h6"><i class="feather icon-mail m-r-10 h5 text-primary"></i>Email:</span>
                            <a href="mailto:demo@sample" class="float-end text-body">demo@sample.com</a>
                        </li>
                        <li class="list-group-item">
                            <span class="f-w-500 h6"><i class="feather icon-phone-call m-r-10 h5 text-primary"></i>Phone:</span>
                            <a href="#" class="float-end text-body">(+99) 9999 999 999</a>
                        </li>
                        <li class="list-group-item border-bottom-0">
                            <span class="f-w-500 h6"><i class="feather icon-map-pin m-r-10 h5 text-primary"></i>Location:</span>
                            <span class="float-end">Melbourne</span>
                        </li>
                    </ul>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col">
                                <h6 class="mb-1">37</h6>
                                <p class="mb-0">Mails</p>
                            </div>
                            <div class="col border-start">
                                <h6 class="mb-1">2749</h6>
                                <p class="mb-0">Followers</p>
                            </div>
                            <div class="col border-start">
                                <h6 class="mb-1">678</h6>
                                <p class="mb-0">Following</p>
                            </div>
                        </div>
                    </div>
                    <div class="nav flex-column nav-pills list-group list-group-flush list-pills" id="user-set-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link list-group-item list-group-item-action active" id="user-set-profile-tab" data-bs-toggle="pill" href="#user-set-profile" role="tab" aria-controls="user-set-profile" aria-selected="true">
                            <span class="f-w-500"><i class="feather icon-user m-r-10 h5 "></i>Profile Overview</span>
                            <span class="float-end"><i class="feather icon-chevron-right"></i></span>
                        </a>
                        <a class="nav-link list-group-item list-group-item-action" id="user-set-information-tab" data-bs-toggle="pill" href="#user-set-information" role="tab" aria-controls="user-set-information" aria-selected="false">
                            <span class="f-w-500"><i class="feather icon-file-text m-r-10 h5 "></i>Personal Information</span>
                            <span class="float-end"><i class="feather icon-chevron-right"></i></span>
                        </a>
                        <a class="nav-link list-group-item list-group-item-action" id="user-set-account-tab" data-bs-toggle="pill" href="#user-set-account" role="tab" aria-controls="user-set-account" aria-selected="false">
                            <span class="f-w-500"><i class="feather icon-book m-r-10 h5 "></i>Account Information</span>
                            <span class="float-end"><i class="feather icon-chevron-right"></i></span>
                        </a>
                        <a class="nav-link list-group-item list-group-item-action" id="user-set-passwort-tab" data-bs-toggle="pill" href="#user-set-passwort" role="tab" aria-controls="user-set-passwort" aria-selected="false">
                            <span class="f-w-500"><i class="feather icon-shield m-r-10 h5 "></i>Change Password</span>
                            <span class="float-end"><i class="feather icon-chevron-right"></i></span>
                        </a>
                        <a class="nav-link list-group-item list-group-item-action" id="user-set-email-tab" data-bs-toggle="pill" href="#user-set-email" role="tab" aria-controls="user-set-email" aria-selected="false">
                            <span class="f-w-500"><i class="feather icon-mail m-r-10 h5 "></i>Email settings</span>
                            <span class="float-end"><i class="feather icon-chevron-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Hello card</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle btn-icon" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content" id="user-set-tabContent">
                    <div class="tab-pane fade show active" id="user-set-profile" role="tabpanel" aria-labelledby="user-set-profile-tab">
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                            <h4 class="alert-heading"><i class="feather icon-mail me-2"></i> Email verification</h4>
                            <p class="mb-0">Your email is not confirmed. Please check your inbox. <a href="#!" class="text-danger"> Resend confirmation</a></p>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5><i class="fas fa-user m-r-10 h5 text-primary f-w-900"></i>About me</h5>
                            </div>
                            <div class="card-body">
                                <p>
                                    Hello,I’m Akshay Handge Creative Graphic Designer &amp; User Experience Desiger based in Website, I create digital Products a more Beautiful and usable place. This is Photoshop's version of Lorem Ipsum.
                                    Proin gravida nibh vel velit quet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulpuate cursus a sit amet mauris.
                                    Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt.
                                </p>
                                <h4 class="mt-4 mb-4 pb-3 border-bottom">personal details</h4>
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td class="">Full Name</td>
                                            <td class="">:</td>
                                            <td class="">Akshay Handge</td>
                                        </tr>
                                        <tr>
                                            <td class="">Father's Name</td>
                                            <td class="">:</td>
                                            <td class="">Mr. Deepak Handge</td>
                                        </tr>
                                        <tr>
                                            <td class="">Address</td>
                                            <td class="">:</td>
                                            <td class="">Street 110-B Kalani Bag, Dewas, M.P. INDIA</td>
                                        </tr>
                                        <tr>
                                            <td class="">Zip Code</td>
                                            <td class="">:</td>
                                            <td class="">12345</td>
                                        </tr>
                                        <tr>
                                            <td class="">Phone</td>
                                            <td class="">:</td>
                                            <td class="">+0 123456789 , +0 123456789</td>
                                        </tr>
                                        <tr>
                                            <td class="">Email</td>
                                            <td class="">:</td>
                                            <td class="">support@example.com</td>
                                        </tr>
                                        <tr>
                                            <td class="">Website</td>
                                            <td class="">:</td>
                                            <td class="">http://example.com</td>
                                        </tr>

                                    </tbody>
                                </table>
                                <h4 class="mt-4 mb-4 pb-3 border-bottom">Education</h4>
                                <div class="row align-items-center mb-3">
                                    <div class="col-sm-auto text-center">
                                        <h5>2013-2015</h5><span>Master Degree</span>
                                    </div>
                                    <div class="col-sm-9 border-start">
                                        <h5>Master Degree of design</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-3">
                                    <div class="col-sm-auto text-center">
                                        <h5>2011-2013</h5><span>Master Degree</span>
                                    </div>
                                    <div class="col-sm-9 border-start">
                                        <h5>Bachelor Degree of C.A.</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-3">
                                    <div class="col-sm-auto text-center">
                                        <h5>2009-2011</h5><span>Master Degree</span>
                                    </div>
                                    <div class="col-sm-9 border-start">
                                        <h5>Higher Secondry Education</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                    </div>
                                </div>
                                <h4 class="mt-4 mb-4 pb-3 border-bottom">Employment</h4>
                                <div class="row align-items-center mb-3">
                                    <div class="col-sm-auto text-center">
                                        <h5>2013-2015</h5><span>ThememForest</span>
                                    </div>
                                    <div class="col-sm-9 border-start">
                                        <h5>Front-End Developer</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-3">
                                    <div class="col-sm-auto text-center">
                                        <h5>2012-2013</h5><span>ThememForest</span>
                                    </div>
                                    <div class="col-sm-9 border-start">
                                        <h5>Photographer</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-3">
                                    <div class="col-sm-auto text-center">
                                        <h5>2009-2010</h5><span>ThememForest</span>
                                    </div>
                                    <div class="col-sm-9 border-start">
                                        <h5>Graphic Designer</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                    </div>
                                </div>
                                <h4 class="mt-4 mb-4 pb-3 border-bottom">Skills</h4>
                                <div class="row align-items-center mt-3">
                                    <div class="col-md-6 mb-3">
                                        <h6 class="m-b-10">Web Designer</h6>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="progress" style="height:8px">
                                                    <div class="progress-bar bg-primary" style="width:70%"></div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <h6 class="m-b-0">70%</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <h6 class="m-b-10">Graphic Designer</h6>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="progress" style="height:8px">
                                                    <div class="progress-bar bg-success" style="width:85%"></div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <h6 class="m-b-0">80%</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <h6 class="m-b-10">Web Designer</h6>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="progress" style="height:8px">
                                                    <div class="progress-bar bg-success" style="width:85%"></div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <h6 class="m-b-0">3.2</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <h6 class="m-b-10">HTML</h6>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="progress" style="height:8px">
                                                    <div class="progress-bar bg-warning" style="width:45%"></div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <h6 class="m-b-0">45%</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <h6 class="m-b-10">Wordpress</h6>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="progress" style="height:8px">
                                                    <div class="progress-bar bg-danger" style="width:25%"></div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <h6 class="m-b-0">25%</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <h6 class="m-b-10">PHP</h6>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="progress" style="height:8px">
                                                    <div class="progress-bar bg-primary" style="width:65%"></div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <h6 class="m-b-0">65%</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="user-set-information" role="tabpanel" aria-labelledby="user-set-information-tab">
                        <div class="card">
                            <div class="card-header">
                                <h5><i class="fas fa-user m-r-10 h5 text-primary f-w-900"></i>Personal Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="Ashoka Tano">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Location</label>
                                            <select class="form-control">
                                                <option>Washington</option>
                                                <option>India</option>
                                                <option>Africa</option>
                                                <option>New York</option>
                                                <option>Malesia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Bio <span class="text-danger">*</span></label>
                                            <textarea class="form-control">I consider myself as a creative, professional and a flexible person. I can adapt with any kind of brief and design style</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Experience<span class="text-danger">*</span></label>
                                            <select class="form-control">
                                                <option>Startup</option>
                                                <option>2 year</option>
                                                <option>3 year</option>
                                                <option selected>4 year</option>
                                                <option>5 year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Skills</label>
                                            <select class="skill-mlt-select col-sm-12" multiple="multiple">
                                                <option selected>admin template</option>
                                                <option>bootstrap</option>
                                                <option>css</option>
                                                <option>html5</option>
                                                <option>css3</option>
                                                <option>ionic</option>
                                                <option>framework</option>
                                                <option>javascript</option>
                                                <option>jquery</option>
                                                <option>scss</option>
                                                <option>uidesigner</option>
                                                <option>web designe</option>
                                                <option>webflow</option>
                                                <option>javascript</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h5><i class="fas fa-share-alt m-r-10 h5 text-primary f-w-900"></i>Social Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Facebook</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-facebook text-white">
                                                <i class="fab fa-facebook-f"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Profile Url">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary bg-facebook" type="button">Connect</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Twitter</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-twitter text-white">
                                                <i class="fab fa-twitter"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Profile Url">
                                        <div class="input-group-append">
                                            <button class="btn btn-info bg-twitter" type="button">Connect</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Google Plus</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-googleplus text-white">
                                                <i class="fab fa-google-plus-g"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Profile Url">
                                        <div class="input-group-append">
                                            <button class="btn btn-danger bg-googleplus" type="button">Connect</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h5><i class="fas fa-address-card m-r-10 h5 text-primary f-w-900"></i>Contact Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Contact Phone</label>
                                            <input type="text" class="form-control" value="(+99) 9999 999 999">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="demo@sample.com">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Portfolio Url</label>
                                            <input type="text" class="form-control" value="https://www.sampleportfolio.com">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control">3379  Monroe Avenue, Fort Myers, Florida(33912)</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary">Update Profile</button>
                                <button class="btn btn-outline-dark ms-2">Clear</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="user-set-account" role="tabpanel" aria-labelledby="user-set-account-tab">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="d-block"><i class="fas fa-id-card me-3 h2 text-primary float-start mb-0 f-w-900"></i>Account Information<small class="text-muted d-block m-l-25 m-t-5">change your account settings</small></h5>
                            </div>
                            <div class="card-body">
                                <h6 class="mb-3">Genral</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Username <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="Ashoka_Tano_16">
                                            <small class="form-text text-muted">Your Profile URL: https://pc.com/Ashoka_Tano_16</small>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Account Email <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="demo@sample.com">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Language</label>
                                            <select class="form-control">
                                                <option>Washington</option>
                                                <option>India</option>
                                                <option>Africa</option>
                                                <option>New York</option>
                                                <option>Malesia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Signin Using</label>
                                            <select class="form-control">
                                                <option>Password</option>
                                                <option>Face Recognition</option>
                                                <option>Thumb Impression</option>
                                                <option>Key</option>
                                                <option>Pin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h6 class="mb-3">Secure Browsing</h6>
                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customsecbrz1">
                                        <label class="custom-control-label" for="customsecbrz1">Browsing Securely ( Https ) when it's necessary</label>
                                    </div>
                                </div>
                                <hr>
                                <h6 class="mb-3">Login Notifications</h6>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customsecbrz2" checked>
                                    <label class="custom-control-label" for="customsecbrz2">Notify when login attemped from outher place</label>
                                </div>
                                <hr>
                                <h6 class="mb-3">Login Approvals</h6>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customsecbrz3" checked>
                                    <label class="custom-control-label" for="customsecbrz3">Approvals is not required when login from unrecognized devices.</label>
                                </div>
                                <hr>
                                <h6 class="mb-3">Recognized Devices</h6>
                                <div class="media mb-2">
                                    <i class="fas fa-desktop h3 me-3 wid-30 text-center"></i>
                                    <div class="media-body">
                                        <div class="float-end">
                                            <div class="text-success d-inline-block me-2">
                                                <i class="fas fa-circle f-10 me-2"></i>
                                                Currunt Active
                                            </div>
                                            <a href="#!" class="text-danger"><i class="feather icon-x-circle"></i></a>
                                        </div>
                                        <span class="text-dark font-weight-bold">Cett Desktop</span>
                                        <span class="text-muted">| 4351 Deans Lane, Elmsford</span>
                                    </div>
                                </div>
                                <div class="media mb-2">
                                    <i class="fas fa-tablet-alt h3 me-3 wid-30 text-center"></i>
                                    <div class="media-body">
                                        <div class="float-end">
                                            <div class="text-black-50 d-inline-block me-2">
                                                <i class="fas fa-circle f-10 me-2"></i>
                                                Active 5 days ago
                                            </div>
                                            <a href="#!" class="text-danger"><i class="feather icon-x-circle"></i></a>
                                        </div>
                                        <span class="text-dark font-weight-bold">Imoon Tablet</span>
                                        <span class="text-muted">| 4185 Michigan Avenue, SHIPPINGPORT</span>
                                    </div>
                                </div>
                                <div class="media mb-2">
                                    <i class="fas fa-mobile-alt h3 me-3 wid-30 text-center"></i>
                                    <div class="media-body">
                                        <div class="float-end">
                                            <div class="text-black-50 d-inline-block me-2">
                                                <i class="fas fa-circle f-10 me-2"></i>
                                                Active 1 month ago
                                            </div>
                                            <a href="#!" class="text-danger"><i class="feather icon-x-circle"></i></a>
                                        </div>
                                        <span class="text-dark font-weight-bold">Asbs Mobile</span>
                                        <span class="text-muted">| 3462 Fairfax Drive, Montclair</span>
                                    </div>
                                </div>
                                <hr>
                                <h6 class="mb-3">Active Sessions</h6>
                                <div class="media mb-2">
                                    <i class="fas fa-desktop h3 me-3 wid-30 text-center text-success"></i>
                                    <div class="media-body">
                                        <div class="float-end">
                                            <a href="#!" class="badge bg-light-danger">Logout</a>
                                        </div>
                                        <span class="text-dark font-weight-bold">Cett Desktop</span>
                                        <span class="text-muted">| 4351 Deans Lane, Elmsford</span>
                                    </div>
                                </div>
                                <div class="media mb-2">
                                    <i class="fas fa-tablet-alt h3 me-3 wid-30 text-center text-success"></i>
                                    <div class="media-body">
                                        <div class="float-end">
                                            <a href="#!" class="badge bg-light-danger">Logout</a>
                                        </div>
                                        <span class="text-dark font-weight-bold">Imoon Tablet</span>
                                        <span class="text-muted">| 4185 Michigan Avenue, SHIPPINGPORT</span>
                                    </div>
                                </div>
                                <!-- <hr>
                                <h6 class="mb-3">Security</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Username <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="Ashoka_Tano_16">
                                            <small class="form-text text-muted">Your Profile URL: https://pc.com/Ashoka_Tano_16</small>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Account Email <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="demo@sample.com">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Language</label>
                                            <select class="form-control">
                                                <option>Washington</option>
                                                <option>India</option>
                                                <option>Africa</option>
                                                <option>New York</option>
                                                <option>Malesia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Signin Using</label>
                                            <select class="form-control">
                                                <option>Password</option>
                                                <option>Face Recognition</option>
                                                <option>Thumb Impression</option>
                                                <option>Key</option>
                                                <option>Pin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-success">Update Profile</button>
                                <button class="btn btn-outline-dark ms-2">Clear</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="user-set-passwort" role="tabpanel" aria-labelledby="user-set-passwort-tab">
                        <div class="card">
                            <div class="card-header">
                                <h5><i class="fas fa-user-lock m-r-10 h5 text-primary f-w-900"></i>Change Password</h5>
                            </div>
                            <div class="card-body">
                                <div class="alert alert-danger" role="alert">
                                    <h4 class="alert-heading"><i class="fas fa-exclamation-triangle me-2"></i>Alert!</h4>
                                    <p>Configure user passwords to expire periodically. Users will need warning that their passwords are going to expire,</p>
                                    <hr>
                                    <p class="mb-0">or they might inadvertently get locked out of the system!.</p>
                                </div>
                                <h6 class="mb-3">Change Or Recover Your Password:</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Current Password <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter Your currunt password">
                                            <small class="form-text text-muted">Forgot password? <a href="#!">Click here</a></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>New Password <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter New password">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Conform password <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter your password again">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-danger">Change Password</button>
                                <button class="btn btn-outline-dark ms-2">Clear</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="user-set-email" role="tabpanel" aria-labelledby="user-set-email-tab">
                        <div class="card">
                            <div class="card-header">
                                <h5>Email settings</h5>
                                <div class="card-header-right">
                                    <div class="btn-group card-option">
                                        <button type="button" class="btn dropdown-toggle btn-icon" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="feather icon-more-horizontal"></i>
                                        </button>
                                        <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                            <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                            <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                            <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                            <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item py-4">
                                    <h5 class="mb-3"><i class="fas fa-angle-double-right me-3 text-primary h4 f-w-900"></i> Setup Email Notification</h5>
                                    <div class="m-l-40">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitchemlnot1" checked>
                                            <label class="custom-control-label" for="customSwitchemlnot1">Email Notification</label>
                                        </div>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitchemlnot2" checked>
                                            <label class="custom-control-label" for="customSwitchemlnot2">Send Copy To Personal Email</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item py-4">
                                    <h5 class="mb-3"><i class="fas fa-angle-double-right me-3 text-primary h4 f-w-900"></i> Activity Related Emails</h5>
                                    <div class="m-l-40">
                                        <h6 class="mt-4 mb-2">When To Email</h6>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input input-primary" id="customCheckactmail1" checked>
                                            <label class="custom-control-label" for="customCheckactmail1">You have new notifications</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input input-primary" id="customCheckactmail2">
                                            <label class="custom-control-label" for="customCheckactmail2">You're sent a direct message</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input input-primary" id="customCheckactmail3">
                                            <label class="custom-control-label" for="customCheckactmail3">Someone adds you as a connection</label>
                                        </div>
                                        <h6 class="mt-4 mb-2">When To Escalate Emails</h6>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input input-primary" id="customCheckactmail4" checked>
                                            <label class="custom-control-label" for="customCheckactmail4">Upon new order</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input input-primary" id="customCheckactmail5">
                                            <label class="custom-control-label" for="customCheckactmail5">New membership approval</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input input-primary" id="customCheckactmail6">
                                            <label class="custom-control-label" for="customCheckactmail6">Member registration</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item py-4 border-bottom-0">
                                    <h5 class="mb-3"><i class="fas fa-angle-double-right me-3 text-primary h4 f-w-900"></i> Updates From System Notification</h5>
                                    <div class="m-l-40">
                                        <h6 class="mt-4 mb-2">Email You With</h6>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input input-primary" id="customCheckactmail7" checked>
                                            <label class="custom-control-label" for="customCheckactmail7">News about PCT-themes products and feature updates</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input input-primary" id="customCheckactmail8" checked>
                                            <label class="custom-control-label" for="customCheckactmail8">Tips on getting more out of PCT-themes</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input input-primary" id="customCheckactmail9" checked>
                                            <label class="custom-control-label" for="customCheckactmail9">Things you missed since you last logged into PCT-themes</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input input-primary" id="customCheckactmail10">
                                            <label class="custom-control-label" for="customCheckactmail10">News about products and other services</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input input-primary" id="customCheckactmail11">
                                            <label class="custom-control-label" for="customCheckactmail11">Tips and Document business products</label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="card-footer text-end">
                                <button class="btn btn-warning">Update Change</button>
                                <button class="btn btn-outline-dark ms-2">Clear</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<script src="assets/js/plugins/select2.full.min.js"></script>
<script>
    $(function() {
        $(".skill-mlt-select").select2();
    });
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
