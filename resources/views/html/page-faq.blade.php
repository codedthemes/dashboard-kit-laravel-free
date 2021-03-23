<!DOCTYPE html>
<html lang="en">

<head>
    @@include('./layouts/head.html')
    <link rel="stylesheet" href="assets/css/plugins/select2.min.css">
    @@include('./layouts/head-bottom-link.html')
</head>
@@include('layouts/layout-vertical.html')
<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Faq</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Faq</a></li>
                            <li class="breadcrumb-item">Faq 1</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-8 col-md-10">
                        <h2 class="mt-2">
                            We're here to help !!
                        </h2>
                        <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                            scrambled it to make a type specimen book.</p>
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-8 col-md-10">
                                <form class="form-group mb-5">
                                    <input class="form-control" placeholder="Search in faqs...." type="text">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card user-card user-card-1">
                    <div class="nav flex-column nav-pills list-group list-group-flush list-pills" id="user-set-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link list-group-item list-group-item-action active" id="user-set-profile-tab" data-bs-toggle="pill" href="#user-set-profile" role="tab" aria-controls="user-set-profile" aria-selected="true">
                            <span class="f-w-500"><i class="feather icon-layers m-r-10 h5 "></i>Product Overview</span>
                            <span class="float-end"><i class="feather icon-chevron-right"></i></span>
                        </a>
                        <a class="nav-link list-group-item list-group-item-action" id="user-set-information-tab" data-bs-toggle="pill" href="#user-set-information" role="tab" aria-controls="user-set-information" aria-selected="false">
                            <span class="f-w-500"><i class="feather icon-cpu m-r-10 h5 "></i>Installation</span>
                            <span class="float-end"><i class="feather icon-chevron-right"></i></span>
                        </a>
                        <a class="nav-link list-group-item list-group-item-action" id="user-set-account-tab" data-bs-toggle="pill" href="#user-set-account" role="tab" aria-controls="user-set-account" aria-selected="false">
                            <span class="f-w-500"><i class="feather icon-crosshair m-r-10 h5 "></i>Changes outlet</span>
                            <span class="float-end"><i class="feather icon-chevron-right"></i></span>
                        </a>
                        <a class="nav-link list-group-item list-group-item-action" id="user-set-passwort-tab" data-bs-toggle="pill" href="#user-set-passwort" role="tab" aria-controls="user-set-passwort" aria-selected="false">
                            <span class="f-w-500"><i class="feather icon-pocket m-r-10 h5 "></i>Deployment</span>
                            <span class="float-end"><i class="feather icon-chevron-right"></i></span>
                        </a>
                        <a class="nav-link list-group-item list-group-item-action" id="user-set-email-tab" data-bs-toggle="pill" href="#user-set-email" role="tab" aria-controls="user-set-email" aria-selected="false">
                            <span class="f-w-500"><i class="feather icon-help-circle m-r-10 h5 "></i>Support</span>
                            <span class="float-end"><i class="feather icon-chevron-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content" id="user-set-tabContent">
                    <div class="tab-pane fade show active" id="user-set-profile" role="tabpanel" aria-labelledby="user-set-profile-tab">
                        <div class="card">
                            <div class="accordion" id="accordionExample">
                                <div>
                                    <div id="headingOne">
                                        <a href="#!" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <div class="card-header">
                                                <h5><i class="fas fa-angle-double-right m-r-10 h5 text-primary f-w-900"></i>About me</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div id="headingTwo">
                                        <a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <div class="card-header">
                                                <h5><i class="fas fa-angle-double-right m-r-10 h5 text-primary f-w-900"></i>Table Details</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.
                                            </p><hr>
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
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div id="headingThree">
                                        <a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <div class="card-header">
                                                <h5><i class="fas fa-angle-double-right m-r-10 h5 text-primary f-w-900"></i>Table Details</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.
                                            </p>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="user-set-information" role="tabpanel" aria-labelledby="user-set-information-tab">
                        <div class="card">
                            <div class="accordion" id="sec-accordionExample">
                                <div>
                                    <div id="sec-headingOne">
                                        <a href="#!" data-bs-toggle="collapse" data-bs-target="#sec-collapseOne" aria-expanded="true" aria-controls="sec-collapseOne">
                                            <div class="card-header">
                                                <h5><i class="fas fa-angle-double-right m-r-10 h5 text-primary f-w-900"></i>About me</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="sec-collapseOne" class="collapse show" aria-labelledby="sec-headingOne" data-bs-parent="#sec-accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div id="sec-headingTwo">
                                        <a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#sec-collapseTwo" aria-expanded="false" aria-controls="sec-collapseTwo">
                                            <div class="card-header">
                                                <h5><i class="fas fa-angle-double-right m-r-10 h5 text-primary f-w-900"></i>Table Details</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="sec-collapseTwo" class="collapse" aria-labelledby="sec-headingTwo" data-bs-parent="#sec-accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.
                                            </p><hr>
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
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div id="sec-headingThree">
                                        <a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#sec-collapseThree" aria-expanded="false" aria-controls="sec-collapseThree">
                                            <div class="card-header">
                                                <h5><i class="fas fa-angle-double-right m-r-10 h5 text-primary f-w-900"></i>Table Details</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="sec-collapseThree" class="collapse" aria-labelledby="sec-headingThree" data-bs-parent="#sec-accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.
                                            </p>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="user-set-account" role="tabpanel" aria-labelledby="user-set-account-tab">
                        <div class="card">
                            <div class="accordion" id="trd-accordionExample">
                                <div>
                                    <div id="trd-headingOne">
                                        <a href="#!" data-bs-toggle="collapse" data-bs-target="#trd-collapseOne" aria-expanded="true" aria-controls="trd-collapseOne">
                                            <div class="card-header">
                                                <h5><i class="fas fa-angle-double-right m-r-10 h5 text-primary f-w-900"></i>About me</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="trd-collapseOne" class="collapse show" aria-labelledby="trd-headingOne" data-bs-parent="#trd-accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div id="trd-headingTwo">
                                        <a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#trd-collapseTwo" aria-expanded="false" aria-controls="trd-collapseTwo">
                                            <div class="card-header">
                                                <h5><i class="fas fa-angle-double-right m-r-10 h5 text-primary f-w-900"></i>Table Details</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="trd-collapseTwo" class="collapse" aria-labelledby="trd-headingTwo" data-bs-parent="#trd-accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.
                                            </p><hr>
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
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div id="trd-headingThree">
                                        <a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#trd-collapseThree" aria-expanded="false" aria-controls="trd-collapseThree">
                                            <div class="card-header">
                                                <h5><i class="fas fa-angle-double-right m-r-10 h5 text-primary f-w-900"></i>Table Details</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="trd-collapseThree" class="collapse" aria-labelledby="trd-headingThree" data-bs-parent="#trd-accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.
                                            </p>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="user-set-passwort" role="tabpanel" aria-labelledby="user-set-passwort-tab">
                        <div class="card">
                            <div class="accordion" id="frt-accordionExample">
                                <div>
                                    <div id="frt-headingOne">
                                        <a href="#!" data-bs-toggle="collapse" data-bs-target="#frt-collapseOne" aria-expanded="true" aria-controls="frt-collapseOne">
                                            <div class="card-header">
                                                <h5><i class="fas fa-angle-double-right m-r-10 h5 text-primary f-w-900"></i>About me</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="frt-collapseOne" class="collapse show" aria-labelledby="frt-headingOne" data-bs-parent="#frt-accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div id="frt-headingTwo">
                                        <a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#frt-collapseTwo" aria-expanded="false" aria-controls="frt-collapseTwo">
                                            <div class="card-header">
                                                <h5><i class="fas fa-angle-double-right m-r-10 h5 text-primary f-w-900"></i>Table Details</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="frt-collapseTwo" class="collapse" aria-labelledby="frt-headingTwo" data-bs-parent="#frt-accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.
                                            </p><hr>
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
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div id="frt-headingThree">
                                        <a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#frt-collapseThree" aria-expanded="false" aria-controls="frt-collapseThree">
                                            <div class="card-header">
                                                <h5><i class="fas fa-angle-double-right m-r-10 h5 text-primary f-w-900"></i>Table Details</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="frt-collapseThree" class="collapse" aria-labelledby="frt-headingThree" data-bs-parent="#frt-accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.
                                            </p>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="user-set-email" role="tabpanel" aria-labelledby="user-set-email-tab">
                        <div class="card">
                            <div class="accordion" id="fft-accordionExample">
                                <div>
                                    <div id="fft-headingOne">
                                        <a href="#!" data-bs-toggle="collapse" data-bs-target="#fft-collapseOne" aria-expanded="true" aria-controls="fft-collapseOne">
                                            <div class="card-header">
                                                <h5><i class="fas fa-angle-double-right m-r-10 h5 text-primary f-w-900"></i>About me</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="fft-collapseOne" class="collapse show" aria-labelledby="fft-headingOne" data-bs-parent="#fft-accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div id="fft-headingTwo">
                                        <a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#fft-collapseTwo" aria-expanded="false" aria-controls="fft-collapseTwo">
                                            <div class="card-header">
                                                <h5><i class="fas fa-angle-double-right m-r-10 h5 text-primary f-w-900"></i>Table Details</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="fft-collapseTwo" class="collapse" aria-labelledby="fft-headingTwo" data-bs-parent="#fft-accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.
                                            </p><hr>
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
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div id="fft-headingThree">
                                        <a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#fft-collapseThree" aria-expanded="false" aria-controls="fft-collapseThree">
                                            <div class="card-header">
                                                <h5><i class="fas fa-angle-double-right m-r-10 h5 text-primary f-w-900"></i>Table Details</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="fft-collapseThree" class="collapse" aria-labelledby="fft-headingThree" data-bs-parent="#fft-accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.
                                            </p>
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
                                        </div>
                                    </div>
                                </div>
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
@@include('./layouts/footer.html')
<script src="assets/js/plugins/select2.full.min.js"></script>
<script>
    $(function() {
        $(".skill-mlt-select").select2();
    });
</script>
@@include('./layouts/footer-bottom-link.html')
</body>

</html>
