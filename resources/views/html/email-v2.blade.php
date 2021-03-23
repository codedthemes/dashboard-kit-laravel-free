<!DOCTYPE html>
<html lang="en">

<head>
    @@include('./layouts/head.html')
    <link rel="stylesheet" href="assets/css/plugins/trumbowyg.min.css">
    <!-- ekko-lightbox css -->
    <link rel="stylesheet" href="assets/css/plugins/ekko-lightbox.css">
    <link rel="stylesheet" href="assets/css/plugins/lightbox.min.css">
    @@include('./layouts/head-bottom-link.html')
    <link rel="stylesheet" href="assets/css/layout-nested.css">
</head>
@@include('layouts/layout-vertical.html')
<!-- [ Main Content ] start -->
<div class="pc-container sidebar-layouts">
    <div class="pcoded-content">
        <div class="page-sidebar">
            <div class="mail-l-content">
                <div class="p-3">
                    <a href="#!" class="btn btn-light-secondary btn-block" data-bs-toggle="modal" data-bs-target="#examplesendmail"><i data-feather="plus"></i> Compose</a>
                </div>
                <ul class="mb-2 nav nav-tab flex-column nav-pills sidebar-links" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <li class="nav-item mail-section">
                        <a class="nav-link  link-hover-danger active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false">
                            <span><i class="material-icons-two-tone">move_to_inbox</i> Inbox</span>
                            <span>36</span>
                        </a>
                    </li>
                    <li class="nav-item mail-section">
                        <a class="nav-link  link-hover-primary" id="v-pills-starred-tab" data-bs-toggle="pill" href="#v-pills-starred" role="tab">
                            <span><i class="material-icons-two-tone">star</i> Starred</span>
                        </a>
                    </li>
                    <li class="nav-item mail-section">
                        <a class="nav-link  link-hover-success" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-draft" role="tab">
                            <span><i class="material-icons-two-tone">collections_bookmark</i> Drafts</span>
                        </a>
                    </li>
                    <li class="nav-item mail-section">
                        <a class="nav-link  link-hover-info" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-mail" role="tab">
                            <span><i class="material-icons-two-tone">send</i> Sent Mail</span>
                        </a>
                    </li>
                    <li class="nav-item mail-section">
                        <a class="nav-link  link-hover-warning" id="v-pills-Trash-tab" data-bs-toggle="pill" href="#v-pills-Trash" role="tab">
                            <span><i class="material-icons-two-tone">delete</i> Trash</span>
                        </a>
                    </li>
                </ul>
                <div class="px-3">
                    <a class="email-more-link text-muted" data-bs-toggle="collapse" href="#email-more-cont" role="button" aria-expanded="false" aria-controls="email-more-cont">
                        <span><i class="feather icon-chevron-down me-2 f-18"></i>More</span>
                        <span style="display: none;"><i class="feather icon-chevron-up me-2 f-18"></i>Less</span>
                    </a>
                </div>
                <div class="collapse" id="email-more-cont">
                    <ul class="mb-2 nav nav-tab flex-column nav-pills sidebar-links" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <li class="nav-item mail-section">
                            <a href="#!" class="nav-link ">
                                <span><i class="material-icons-two-tone">stars</i> Important</span>
                                <span>18</span>
                            </a>
                        </li>
                        <li class="nav-item mail-section">
                            <a href="#!" class="nav-link ">
                                <span><i class="material-icons-two-tone">mark_chat_unread</i> Chats</span>
                            </a>
                        </li>
                        <li class="nav-item mail-section">
                            <a href="#!" class="nav-link ">
                                <span><i class="material-icons-two-tone">report_problem</i> Spam</span>
                                <span>12</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="pc-head">
                <div class="mail-search">
                    <form class="px-3 w-100 h-100 d-flex align-items-center">
                        <div class="form-group mb-0 d-flex align-items-center w-100">
                            <i data-feather="search"></i>
                            <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
                            <a href="#!" class="search-close text-body"><i data-feather="x" class=""></i></a>
                        </div>
                    </form>
                </div>
                <div class="pc-toggle-sidemenu">
                    <a href="#!"><i class="material-icons-two-tone">menu_open</i></a>
                </div>
                <div class="pc-head-content">
                    <ul class="list-inline m-0">
                        <li class="list-inline-item">
                            <a href="#!" class="mail-search-toggle"><i class="material-icons-two-tone">search</i></a>
                        </li>
                        <li class="list-inline-item d-none d-sm-inline-block"><a href="#!"><i class="material-icons-two-tone">warning</i></a></li>
                        <li class="list-inline-item"><a href="#!"><i class="material-icons-two-tone">move_to_inbox</i></a></li>
                        <li class="list-inline-item"><a href="#!"><i class="material-icons-two-tone">delete</i></a></li>
                        <li class="list-inline-item d-none d-sm-inline-block"><a href="#!"><i class="material-icons-two-tone">collections_bookmark</i></a></li>
                        <li class="list-inline-item d-none d-sm-inline-block"><a href="#!"><i class="material-icons-two-tone">drafts</i></a></li>
                        <li class="list-inline-item">
                            <div class="dropdown">
                                <a class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons-two-tone">send</i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">drafts</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item pl-4" href="#"><span><i class="feather icon-users me-2"></i>Social</span></a>
                                    <a class="dropdown-item pl-4" href="#"><span><i class="feather icon-tag me-2"></i>Promotion</span></a>
                                    <a class="dropdown-item pl-4" href="#"><span><i class="feather icon-upload-cloud me-2"></i>Update</span></a>
                                    <a class="dropdown-item pl-4" href="#"><span><i class="feather icon-message-square me-2"></i>Forum</span></a>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="dropdown">
                                <a class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons-two-tone">more</i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#!">Mark as unread</a>
                                    <a class="dropdown-item" href="#!">Mark as important</a>
                                    <a class="dropdown-item" href="#!">Mark as not important</a>
                                    <a class="dropdown-item" href="#!">Filter messages like these</a>
                                    <a class="dropdown-item" href="#!">Mute</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="pc-body">
                <div class="card email-card">
                    <div class="mail-body">
                        <!-- [ inbox-right section ] start -->
                        <div class="inbox-read">
                            <div class="card-header">
                                <ul class="list-inline mb-3 mb-md-0">
                                    <li class="list-inline-item">
                                        <a href="#!" class="back-inbox">
                                            <h5><i class="fas fa-arrow-left"></i></h5>
                                        </a>
                                    </li>
                                    <li class="list-inline-item"><a href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Insert photo">
                                            <h5><i class="fas fa-download"></i></h5>
                                        </a></li>
                                    <li class="list-inline-item"><a href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Insert link‬">
                                            <h5><i class="fas fa-trash-alt"></i></h5>
                                        </a></li>
                                    <li class="list-inline-item"><a href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Snooze">
                                            <h5><i class="fas fa-clock"></i></h5>
                                        </a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="email-read">
                                    <div class="photo-table m-r-10">
                                        <a href="#">
                                            <img class="media-object img-radius" src="assets/images/user/avatar-1.jpg" alt="E-mail user" style="width:50px;">
                                        </a>
                                    </div>=
                                    <div>
                                        <a href="#">
                                            <p class="user-name text-dark mb-1"><strong>John Doe</strong></p>
                                        </a>
                                        <a class="user-mail txt-muted" href="#">
                                            <p class="user-name text-dark mb-1"><strong>From:johndoe7869@gmail.com</strong></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="m-b-20 m-l-50 p-l-10 email-contant">
                                    <div class="photo-contant">
                                        <div>
                                            <p class="user-name text-dark mb-1"><strong>Hello Dear...</strong></p>
                                            <div class="email-content">
                                                <p class="">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
                                                    montes, nascetur ridiculus mus.Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis.
                                                </p>
                                                <ul>
                                                    <li>Lorem ipsum dolor sit amet</li>
                                                    <li>Consectetur adipiscing elit</li>
                                                    <ul>
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Purus sodales ultricies</li>
                                                    </ul>
                                                    </li>
                                                    <li>Faucibus porta lacus fringilla vel</li>
                                                </ul>
                                                <blockquote class="blockquote">
                                                    <p class="mb-2">
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
                                                        montes, nascetur ridiculus mus.
                                                    </p>
                                                    <footer class="blockquote-footer mt-2">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                                </blockquote>
                                            </div>
                                        </div>
                                        <div class="m-t-15">
                                            <i class="feather icon-paperclip f-20 m-r-10"></i>Attachments <b>(3)</b>
                                            <div class="row mail-img m-t-20">
                                                <div class="col-sm-4 col-md-3 col-xl-2 m-b-20">
                                                    <a href="assets/images/slider/img-slide-4.jpg" data-bs-toggle="lightbox" data-title="Nextro Image 1" data-footer="Nextro Image 1"><img src="assets/images/slider/img-slide-4.jpg"
                                                            class="img-fluid img-thumbnail" alt=""></a>
                                                </div>
                                                <div class="col-sm-4 col-md-3 col-xl-2 m-b-20">
                                                    <a href="assets/images/slider/img-slide-1.jpg" data-bs-toggle="lightbox" data-title="Nextro Image 2" data-footer="Nextro Image 2"><img src="assets/images/slider/img-slide-1.jpg"
                                                            class="img-fluid img-thumbnail" alt=""></a>
                                                </div>
                                                <div class="col-sm-4 col-md-3 col-xl-2 m-b-20">
                                                    <a href="assets/images/slider/img-slide-3.jpg" data-bs-toggle="lightbox" data-title="Nextro Image 3" data-footer="Nextro Image 3"><img src="assets/images/slider/img-slide-3.jpg"
                                                            class="img-fluid img-thumbnail" alt=""></a>
                                                </div>
                                            </div>
                                            <form class="form-material">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Reply Your Thoughts" required="">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ inbox-right section ] end -->
                        <!-- [ inbox-right section ] start -->
                        <div class="inbox-right">
                            <div class="tab-content p-0" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div class="card-header py-0">
                                        <ul class="nav nav-pills nav-fill mb-0 border-none" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link link-hover-danger active" id="pills-primary-tab" data-bs-toggle="pill" href="#pills-primary" role="tab" aria-controls="pills-primary" aria-selected="true">
                                                    <span><i class="material-icons-two-tone">move_to_inbox</i> primary</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link link-hover-primary" id="pills-social-tab" data-bs-toggle="pill" href="#pills-social" role="tab" aria-controls="pills-social" aria-selected="false">
                                                    <span><i class="material-icons-two-tone">account_circle</i> Social</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link link-hover-success" id="pills-Promotion-tab" data-bs-toggle="pill" href="#pills-Promotion" role="tab" aria-controls="pills-Promotion" aria-selected="false">
                                                    <span><i class="material-icons-two-tone">local_offer</i> Promotions</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link link-hover-info" id="pills-update-tab" data-bs-toggle="pill" href="#pills-update" role="tab" aria-controls="pills-update" aria-selected="false">
                                                    <span><i class="material-icons-two-tone">backup</i> Update</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link link-hover-warning" id="pills-forum-tab" data-bs-toggle="pill" href="#pills-forum" role="tab" aria-controls="pills-forum" aria-selected="false">
                                                    <span><i class="material-icons-two-tone">forum</i> Forum</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-primary" role="tabpanel" aria-labelledby="pills-primary-tab">
                                                <div class="mail-body-content table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr class="unread">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">John Doe</a></td>
                                                                <td><a href="#!" class="email-name">Coming Up Next Week</a></td>
                                                                <td class="email-time">13:02 PM</td>
                                                            </tr>
                                                            <tr class="unread">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star-on text-warning ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Google Inc</a></td>
                                                                <td>
                                                                    <a href="#!" class="email-name">Lorem ipsum dolor sit amet, consectetuer</a>
                                                                    <div><a href="#!" class="mail-attach"><i class="feather icon-image me-2"></i>user.png</a>
                                                                        <a href="#!" class="mail-attach ms-2"><i class="feather icon-file-text me-2"></i>file.doc</a>
                                                                    </div>
                                                                </td>

                                                                <td class="email-time">12:01 AM</td>
                                                            </tr>
                                                            <tr class="read">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Sara Soudein</a></td>
                                                                <td><a href="#!" class="email-name">SVG new updates comes for you</a></td>
                                                                <td class="email-time">00:05 AM</td>
                                                            </tr>
                                                            <tr class="read">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Rinky Behl</a></td>
                                                                <td><a href="#!" class="email-name">Photoshop updates are available</a></td>
                                                                <td class="email-time">10:01 AM</td>
                                                            </tr>
                                                            <tr class="read">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star-on text-warning ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Harry John</a></td>
                                                                <td><a href="#!" class="email-name">New upcoming data available</a></td>
                                                                <td class="email-time">11:01 AM</td>
                                                            </tr>
                                                            <tr class="read">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Hanry Joseph</a></td>
                                                                <td><a href="#!" class="email-name">SCSS current working for new updates</a></td>
                                                                <td class="email-time">12:01 PM</td>
                                                            </tr>
                                                            <tr class="read">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Liu Koi Yan</a></td>
                                                                <td><a href="#!" class="email-name">Charts waiting for you</a>
                                                                    <div><a href="#!" class="mail-attach"><i class="feather icon-film me-2"></i>video</a></div>
                                                                </td>
                                                                <td class="email-time">07:15 AM</td>
                                                            </tr>
                                                            <tr class="read">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star-on text-warning ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Google Inc</a></td>
                                                                <td><a href="#!" class="email-name">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>
                                                                <td class="email-time">08:01 AM</td>
                                                            </tr>
                                                            <tr class="read">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">John Doe</a></td>
                                                                <td><a href="#!" class="email-name">Coming Up Next Week</a></td>
                                                                <td class="email-time">13:02 PM</td>
                                                            </tr>
                                                            <tr class="read">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Hanry Joseph</a></td>
                                                                <td><a href="#!" class="email-name">SCSS current working for new updates</a>
                                                                    <div><a href="#!" class="mail-attach"><i class="feather icon-file-text me-2"></i>file.doc</a></div>
                                                                </td>
                                                                <td class="email-time">12:01 PM</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-social" role="tabpanel" aria-labelledby="pills-social-tab">
                                                <div class="mail-body-content table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr class="unread">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star-on text-warning ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Google Inc</a></td>
                                                                <td>
                                                                    <a href="#!" class="email-name">Lorem ipsum dolor sit amet, consectetuer</a>
                                                                    <div><a href="#!" class="mail-attach"><i class="feather icon-image me-2"></i>user.png</a>
                                                                        <a href="#!" class="mail-attach ms-2"><i class="feather icon-file-text me-2"></i>file.doc</a>
                                                                    </div>
                                                                </td>
                                                                <td class="email-time">12:01 AM</td>
                                                            </tr>
                                                            <tr class="unread">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">John Doe</a></td>
                                                                <td><a href="#!" class="email-name">Coming Up Next Week</a></td>
                                                                <td class="email-time">13:02 PM</td>
                                                            </tr>
                                                            <tr class="unread">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Sara Soudein</a></td>
                                                                <td><a href="#!" class="email-name">SVG new updates comes for you</a></td>
                                                                <td class="email-time">00:05 AM</td>
                                                            </tr>
                                                            <tr class="read">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Rinky Behl</a></td>
                                                                <td><a href="#!" class="email-name">Photoshop updates are available</a></td>
                                                                <td class="email-time">10:01 AM</td>
                                                            </tr>
                                                            <tr class="read">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star-on text-warning ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Harry John</a></td>
                                                                <td><a href="#!" class="email-name">New upcoming data available</a></td>
                                                                <td class="email-time">11:01 AM</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-Promotion" role="tabpanel" aria-labelledby="pills-Promotion-tab">
                                                <div class="mail-body-content table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr class="unread">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star-on text-warning ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Google Inc</a></td>
                                                                <td>
                                                                    <a href="#!" class="email-name">Lorem ipsum dolor sit amet, consectetuer</a>
                                                                    <div><a href="#!" class="mail-attach"><i class="feather icon-image me-2"></i>user.png</a>
                                                                        <a href="#!" class="mail-attach ms-2"><i class="feather icon-file-text me-2"></i>file.doc</a>
                                                                    </div>
                                                                </td>
                                                                <td class="email-time">12:01 AM</td>
                                                            </tr>
                                                            <tr class="unread">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">John Doe</a></td>
                                                                <td><a href="#!" class="email-name">Coming Up Next Week</a></td>
                                                                <td class="email-time">13:02 PM</td>
                                                            </tr>
                                                            <tr class="unread">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Sara Soudein</a></td>
                                                                <td><a href="#!" class="email-name">SVG new updates comes for you</a></td>
                                                                <td class="email-time">00:05 AM</td>
                                                            </tr>
                                                            <tr class="read">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Rinky Behl</a></td>
                                                                <td><a href="#!" class="email-name">Photoshop updates are available</a></td>
                                                                <td class="email-time">10:01 AM</td>
                                                            </tr>
                                                            <tr class="read">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star-on text-warning ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Harry John</a></td>
                                                                <td><a href="#!" class="email-name">New upcoming data available</a></td>
                                                                <td class="email-time">11:01 AM</td>
                                                            </tr>
                                                            <tr class="read">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Hanry Joseph</a></td>
                                                                <td><a href="#!" class="email-name">SCSS current working for new updates</a></td>
                                                                <td class="email-time">12:01 PM</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-update" role="tabpanel" aria-labelledby="pills-update-tab">
                                                <div class="mail-body-content table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr class="unread">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star-on text-warning ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Google Inc</a></td>
                                                                <td>
                                                                    <a href="#!" class="email-name">Lorem ipsum dolor sit amet, consectetuer</a>
                                                                    <div><a href="#!" class="mail-attach"><i class="feather icon-image me-2"></i>user.png</a>
                                                                        <a href="#!" class="mail-attach ms-2"><i class="feather icon-file-text me-2"></i>file.doc</a>
                                                                    </div>
                                                                </td>

                                                                <td class="email-time">12:01 AM</td>
                                                            </tr>
                                                            <tr class="unread">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">John Doe</a></td>
                                                                <td><a href="#!" class="email-name">Coming Up Next Week</a></td>
                                                                <td class="email-time">13:02 PM</td>
                                                            </tr>
                                                            <tr class="unread">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Sara Soudein</a></td>
                                                                <td><a href="#!" class="email-name">SVG new updates comes for you</a></td>
                                                                <td class="email-time">00:05 AM</td>
                                                            </tr>
                                                            <tr class="unread">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Rinky Behl</a></td>
                                                                <td><a href="#!" class="email-name">Photoshop updates are available</a></td>
                                                                <td class="email-time">10:01 AM</td>
                                                            </tr>
                                                            <tr class="read">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star-on text-warning ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Harry John</a></td>
                                                                <td><a href="#!" class="email-name">New upcoming data available</a></td>
                                                                <td class="email-time">11:01 AM</td>
                                                            </tr>
                                                            <tr class="read">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Hanry Joseph</a></td>
                                                                <td><a href="#!" class="email-name">SCSS current working for new updates</a></td>
                                                                <td class="email-time">12:01 PM</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-forum" role="tabpanel" aria-labelledby="pills-forum-tab">
                                                <div class="mail-body-content table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr class="unread">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star-on text-warning ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Google Inc</a></td>
                                                                <td>
                                                                    <a href="#!" class="email-name">Lorem ipsum dolor sit amet, consectetuer</a>
                                                                    <div><a href="#!" class="mail-attach"><i class="feather icon-image me-2"></i>user.png</a>
                                                                        <a href="#!" class="mail-attach ms-2"><i class="feather icon-file-text me-2"></i>file.doc</a>
                                                                    </div>
                                                                </td>

                                                                <td class="email-time">12:01 AM</td>
                                                            </tr>
                                                            <tr class="unread">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">John Doe</a></td>
                                                                <td><a href="#!" class="email-name">Coming Up Next Week</a></td>
                                                                <td class="email-time">13:02 PM</td>
                                                            </tr>
                                                            <tr class="unread">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Sara Soudein</a></td>
                                                                <td><a href="#!" class="email-name">SVG new updates comes for you</a></td>
                                                                <td class="email-time">00:05 AM</td>
                                                            </tr>
                                                            <tr class="unread">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Rinky Behl</a></td>
                                                                <td><a href="#!" class="email-name">Photoshop updates are available</a></td>
                                                                <td class="email-time">10:01 AM</td>
                                                            </tr>
                                                            <tr class="read">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star-on text-warning ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Harry John</a></td>
                                                                <td><a href="#!" class="email-name">New upcoming data available</a></td>
                                                                <td class="email-time">11:01 AM</td>
                                                            </tr>
                                                            <tr class="read">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Hanry Joseph</a></td>
                                                                <td><a href="#!" class="email-name">SCSS current working for new updates</a></td>
                                                                <td class="email-time">12:01 PM</td>
                                                            </tr>
                                                            <tr class="read">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input input-danger" type="checkbox">
                                                                        </div>
                                                                        <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#!" class="email-name">Liu Koi Yan</a></td>
                                                                <td><a href="#!" class="email-name">Charts waiting for you</a>
                                                                    <div><a href="#!" class="mail-attach"><i class="feather icon-film me-2"></i>video</a></div>
                                                                </td>
                                                                <td class="email-time">07:15 AM</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-starred" role="tabpanel">
                                    <div class="card-body">
                                        <div class="tab-pane fade show active" id="pills-starred" role="tabpanel">
                                            <div class="mail-body-content table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr class="unread">
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input input-danger" type="checkbox">
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="#!" class="email-name">John Doe</a></td>
                                                            <td><a href="#!" class="email-name">Coming Up Next Week</a></td>
                                                            <td class="email-time">13:02 PM</td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input input-danger" type="checkbox">
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star-on text-warning ms-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="#!" class="email-name">Google Inc</a></td>
                                                            <td>
                                                                <a href="#!" class="email-name">Lorem ipsum dolor sit amet, consectetuer</a>
                                                                <div><a href="#!" class="mail-attach"><i class="feather icon-image me-2"></i>user.png</a>
                                                                    <a href="#!" class="mail-attach ms-2"><i class="feather icon-file-text me-2"></i>file.doc</a>
                                                                </div>
                                                            </td>

                                                            <td class="email-time">12:01 AM</td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input input-danger" type="checkbox">
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="#!" class="email-name">Sara Soudein</a></td>
                                                            <td><a href="#!" class="email-name">SVG new updates comes for you</a></td>
                                                            <td class="email-time">00:05 AM</td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input input-danger" type="checkbox">
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="#!" class="email-name">Rinky Behl</a></td>
                                                            <td><a href="#!" class="email-name">Photoshop updates are available</a></td>
                                                            <td class="email-time">10:01 AM</td>
                                                        </tr>
                                                        <tr class="read">
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input input-danger" type="checkbox">
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star-on text-warning ms-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="#!" class="email-name">Harry John</a></td>
                                                            <td><a href="#!" class="email-name">New upcoming data available</a></td>
                                                            <td class="email-time">11:01 AM</td>
                                                        </tr>
                                                        <tr class="read">
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input input-danger" type="checkbox">
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="#!" class="email-name">Hanry Joseph</a></td>
                                                            <td><a href="#!" class="email-name">SCSS current working for new updates</a></td>
                                                            <td class="email-time">12:01 PM</td>
                                                        </tr>
                                                        <tr class="read">
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input input-danger" type="checkbox">
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="#!" class="email-name">Liu Koi Yan</a></td>
                                                            <td><a href="#!" class="email-name">Charts waiting for you</a>
                                                                <div><a href="#!" class="mail-attach"><i class="feather icon-film me-2"></i>video</a></div>
                                                            </td>
                                                            <td class="email-time">07:15 AM</td>
                                                        </tr>
                                                        <tr class="read">
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input input-danger" type="checkbox">
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star-on text-warning ms-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="#!" class="email-name">Google Inc</a></td>
                                                            <td><a href="#!" class="email-name">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>
                                                            <td class="email-time">08:01 AM</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-draft" role="tabpanel">
                                    <div class="card-body">
                                        <div class="mail-body-content table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr class="unread">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input input-danger" type="checkbox">
                                                                </div>
                                                                <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                            </div>
                                                        </td>
                                                        <td><a href="#!" class="email-name">John Doe</a></td>
                                                        <td><a href="#!" class="email-name">Coming Up Next Week</a></td>
                                                        <td class="email-time">13:02 PM</td>
                                                    </tr>
                                                    <tr class="unread">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input input-danger" type="checkbox">
                                                                </div>
                                                                <a href="#"><i class="feather icon-star-on text-warning ms-2"></i></a>
                                                            </div>
                                                        </td>
                                                        <td><a href="#!" class="email-name">Google Inc</a></td>
                                                        <td>
                                                            <a href="#!" class="email-name">Lorem ipsum dolor sit amet, consectetuer</a>
                                                            <div><a href="#!" class="mail-attach"><i class="feather icon-image me-2"></i>user.png</a>
                                                                <a href="#!" class="mail-attach ms-2"><i class="feather icon-file-text me-2"></i>file.doc</a>
                                                            </div>
                                                        </td>

                                                        <td class="email-time">12:01 AM</td>
                                                    </tr>
                                                    <tr class="unread">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input input-danger" type="checkbox">
                                                                </div>
                                                                <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                            </div>
                                                        </td>
                                                        <td><a href="#!" class="email-name">Sara Soudein</a></td>
                                                        <td><a href="#!" class="email-name">SVG new updates comes for you</a></td>
                                                        <td class="email-time">00:05 AM</td>
                                                    </tr>
                                                    <tr class="read">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input input-danger" type="checkbox">
                                                                </div>
                                                                <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                            </div>
                                                        </td>
                                                        <td><a href="#!" class="email-name">Hanry Joseph</a></td>
                                                        <td><a href="#!" class="email-name">SCSS current working for new updates</a></td>
                                                        <td class="email-time">12:01 PM</td>
                                                    </tr>
                                                    <tr class="read">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input input-danger" type="checkbox">
                                                                </div>
                                                                <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                            </div>
                                                        </td>
                                                        <td><a href="#!" class="email-name">Liu Koi Yan</a></td>
                                                        <td><a href="#!" class="email-name">Charts waiting for you</a>
                                                            <div><a href="#!" class="mail-attach"><i class="feather icon-film me-2"></i>video</a></div>
                                                        </td>
                                                        <td class="email-time">07:15 AM</td>
                                                    </tr>
                                                    <tr class="read">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input input-danger" type="checkbox">
                                                                </div>
                                                                <a href="#"><i class="feather icon-star-on text-warning ms-2"></i></a>
                                                            </div>
                                                        </td>
                                                        <td><a href="#!" class="email-name">Google Inc</a></td>
                                                        <td><a href="#!" class="email-name">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>
                                                        <td class="email-time">08:01 AM</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-mail" role="tabpanel">
                                    <div class="card-body">
                                        <div class="mail-body-content table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr class="unread">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input input-danger" type="checkbox">
                                                                </div>
                                                                <a href="#"><i class="feather icon-star-on text-warning ms-2"></i></a>
                                                            </div>
                                                        </td>
                                                        <td><a href="#!" class="email-name">Sara Soudein</a></td>
                                                        <td><a href="#!" class="email-name">SVG new updates comes for you</a></td>
                                                        <td class="email-time">00:05 AM</td>
                                                    </tr>
                                                    <tr class="read">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input input-danger" type="checkbox">
                                                                </div>
                                                                <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                            </div>
                                                        </td>
                                                        <td><a href="#!" class="email-name">Hanry Joseph</a></td>
                                                        <td><a href="#!" class="email-name">SCSS current working for new updates</a></td>
                                                        <td class="email-time">12:01 PM</td>
                                                    </tr>
                                                    <tr class="unread">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input input-danger" type="checkbox">
                                                                </div>
                                                                <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                            </div>
                                                        </td>
                                                        <td><a href="#!" class="email-name">John Doe</a></td>
                                                        <td><a href="#!" class="email-name">Coming Up Next Week</a></td>
                                                        <td class="email-time">13:02 PM</td>
                                                    </tr>
                                                    <tr class="unread">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input input-danger" type="checkbox">
                                                                </div>
                                                                <a href="#"><i class="feather icon-star-on text-warning ms-2"></i></a>
                                                            </div>
                                                        </td>
                                                        <td><a href="#!" class="email-name">Google Inc</a></td>
                                                        <td>
                                                            <a href="#!" class="email-name">Lorem ipsum dolor sit amet, consectetuer</a>
                                                            <div><a href="#!" class="mail-attach"><i class="feather icon-image me-2"></i>user.png</a>
                                                                <a href="#!" class="mail-attach ms-2"><i class="feather icon-file-text me-2"></i>file.doc</a>
                                                            </div>
                                                        </td>

                                                        <td class="email-time">12:01 AM</td>
                                                    </tr>
                                                    <tr class="read">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input input-danger" type="checkbox">
                                                                </div>
                                                                <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                            </div>
                                                        </td>
                                                        <td><a href="#!" class="email-name">Liu Koi Yan</a></td>
                                                        <td><a href="#!" class="email-name">Charts waiting for you</a>
                                                            <div><a href="#!" class="mail-attach"><i class="feather icon-film me-2"></i>video</a></div>
                                                        </td>
                                                        <td class="email-time">07:15 AM</td>
                                                    </tr>
                                                    <tr class="read">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input input-danger" type="checkbox">
                                                                </div>
                                                                <a href="#"><i class="feather icon-star-on text-warning ms-2"></i></a>
                                                            </div>
                                                        </td>
                                                        <td><a href="#!" class="email-name">Google Inc</a></td>
                                                        <td><a href="#!" class="email-name">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>
                                                        <td class="email-time">08:01 AM</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-Trash" role="tabpanel">
                                    <div class="card-body">
                                        <div class="mail-body-content table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr class="unread">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input input-danger" type="checkbox">
                                                                </div>
                                                                <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                            </div>
                                                        </td>
                                                        <td><a href="#!" class="email-name">Liu Koi Yan</a></td>
                                                        <td><a href="#!" class="email-name">Charts waiting for you</a>
                                                            <div><a href="#!" class="mail-attach"><i class="feather icon-film me-2"></i>video</a></div>
                                                        </td>
                                                        <td class="email-time">07:15 AM</td>
                                                    </tr>
                                                    <tr class="unread">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input input-danger" type="checkbox">
                                                                </div>
                                                                <a href="#"><i class="feather icon-star-on text-warning ms-2"></i></a>
                                                            </div>
                                                        </td>
                                                        <td><a href="#!" class="email-name">Google Inc</a></td>
                                                        <td><a href="#!" class="email-name">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>
                                                        <td class="email-time">08:01 AM</td>
                                                    </tr>
                                                    <tr class="unread">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input input-danger" type="checkbox">
                                                                </div>
                                                                <a href="#"><i class="feather icon-star-on text-warning ms-2"></i></a>
                                                            </div>
                                                        </td>
                                                        <td><a href="#!" class="email-name">Sara Soudein</a></td>
                                                        <td><a href="#!" class="email-name">SVG new updates comes for you</a></td>
                                                        <td class="email-time">00:05 AM</td>
                                                    </tr>
                                                    <tr class="read">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input input-danger" type="checkbox">
                                                                </div>
                                                                <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                            </div>
                                                        </td>
                                                        <td><a href="#!" class="email-name">Hanry Joseph</a></td>
                                                        <td><a href="#!" class="email-name">SCSS current working for new updates</a></td>
                                                        <td class="email-time">12:01 PM</td>
                                                    </tr>
                                                    <tr class="read">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input input-danger" type="checkbox">
                                                                </div>
                                                                <a href="#"><i class="feather icon-star ms-2"></i></a>
                                                            </div>
                                                        </td>
                                                        <td><a href="#!" class="email-name">John Doe</a></td>
                                                        <td><a href="#!" class="email-name">Coming Up Next Week</a></td>
                                                        <td class="email-time">13:02 PM</td>
                                                    </tr>
                                                    <tr class="read">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input input-danger" type="checkbox">
                                                                </div>
                                                                <a href="#"><i class="feather icon-star-on text-warning ms-2"></i></a>
                                                            </div>
                                                        </td>
                                                        <td><a href="#!" class="email-name">Google Inc</a></td>
                                                        <td>
                                                            <a href="#!" class="email-name">Lorem ipsum dolor sit amet, consectetuer</a>
                                                            <div><a href="#!" class="mail-attach"><i class="feather icon-image me-2"></i>user.png</a>
                                                                <a href="#!" class="mail-attach ms-2"><i class="feather icon-file-text me-2"></i>file.doc</a>
                                                            </div>
                                                        </td>
                                                        <td class="email-time">12:01 AM</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ inbox-right section ] end -->
                    </div>
                </div>
            </div>
            <div class="pc-sideoverlay"></div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="examplesendmail" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content mailsent-modal">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-white">New Message</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-2">
                <form>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">To</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Recipients">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group m-0">
                                <a data-bs-toggle="collapse" href="#collapsecc" role="button" aria-expanded="false" aria-controls="collapsecc">
                                    <label class="form-label text-body" for="exampleInputEmail2">Cc</label>
                                </a>
                                <div class="collapse" id="collapsecc">
                                    <input type="email" class="form-control mb-3" id="exampleInputEmail2" placeholder="Enter email">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group m-0">
                                <a data-bs-toggle="collapse" href="#collapsebcc" role="button" aria-expanded="false" aria-controls="collapsebcc">
                                    <label class="form-label text-body" for="exampleInputEmail3">Bcc</label>
                                </a>
                                <div class="collapse" id="collapsebcc">
                                    <input type="email" class="form-control mb-3" id="exampleInputEmail3" placeholder="Enter email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputEmail4">Subject</label>
                        <input type="email" class="form-control" id="exampleInputEmail4" placeholder="Subject">
                    </div>
                    <textarea id="tinymce-editor" name="name">Put your things hear...</textarea>
                </form>
            </div>
            <div class="modal-footer d-block">
                <div class="row">
                    <div class="col-md-9">
                        <ul class="list-inline mb-3 mb-md-0">
                            <li class="list-inline-item">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-primary">Send</button>
                                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#!">Schedule Send</a>
                                        <a class="dropdown-item" href="#!">Saved to Draft</a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item"><a href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Attach files" class="text-body"><i class="fas fa-paperclip"></i></a></li>
                            <li class="list-inline-item"><a href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Insert photo" class="text-body"><i class="fas fa-images"></i></a></li>
                            <li class="list-inline-item"><a href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Insert link‬" class="text-body"><i class="fas fa-link"></i></a></li>
                            <li class="list-inline-item"><a href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Insert emoji" class="text-body"><i class="fas fa-smile"></i></a></li>
                            <li class="list-inline-item"><a href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Insert files using Drive" class="text-body"><i class="fab fa-google-drive"></i></a></li>
                            <li class="list-inline-item"><a href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Insert signature" class="text-body"><i class="fas fa-pen-alt"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 text-md-end">
                        <button type="button" class="btn btn-sm btn-light-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
@@include('./layouts/footer.html')
<script src="assets/js/plugins/trumbowyg.min.js"></script>
<script src="assets/js/plugins/ekko-lightbox.min.js"></script>
<script src="assets/js/plugins/lightbox.min.js"></script>
<script>
    // tinymce editor
    $(window).on('load', function() {
        $('#tinymce-editor').trumbowyg({
            svgPath: 'assets/css/plugins/icons.svg',
            btns: [
                ['viewHTML'],
                ['undo', 'redo'],
                ['formatting'],
                ['strong', 'em', 'del'],
                ['superscript', 'subscript'],
                ['link'],
                ['insertImage'],
                ['unorderedList', 'orderedList'],
                ['horizontalRule'],
                ['removeformat'],
                ['fullscreen']
            ]
        });
    });
</script>
<script>
    $('.email-name,.back-inbox').on('click', function() {
        $('.inbox-read,.inbox-right').slideToggle();
    });
    $(document).on('click', '[data-bs-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
    $('.mail-search-toggle').on('click', function() {
        $('.mail-search').slideDown('fast');
    });
    $('.search-close').on('click', function() {
        $('.mail-search').slideUp('fast');
    });
</script>
@@include('./layouts/footer-bottom-link.html')
</body>

</html>
