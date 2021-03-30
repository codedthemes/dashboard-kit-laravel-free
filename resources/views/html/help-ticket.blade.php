<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    <!-- prism css -->
    <link rel="stylesheet" href="assets/css/plugins/prism-coy.css">
    <!-- ekko-lightbox css -->
    <link rel="stylesheet" href="assets/css/plugins/ekko-lightbox.css">
    <link rel="stylesheet" href="assets/css/plugins/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/plugins/trumbowyg.min.css">
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
                            <h5 class="m-b-10">Ticket list</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Helpdesk</a></li>
                            <li class="breadcrumb-item">Ticket list</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-xl-8 col-lg-12 help-main">
                <div class="card">
                    <div class="card-body">
                        <nav class="navbar justify-content-between p-0 align-items-center">
                            <h5>Ticket List</h5>
                            <div class="btn-group btn-group-sm help-filter" role="group" aria-label="button groups sm">
                                <a class="btn btn-light-secondary" onclick="$('.help-main').removeClass('large-view').removeClass('md-view').addClass('sm-view')"><i class="feather icon-align-justify m-0"></i></a>
                                <a class="btn btn-light-secondary" onclick="$('.help-main').removeClass('large-view').removeClass('sm-view').addClass('md-view')"><i class="feather icon-menu m-0"></i></a>
                                <a class="btn btn-light-secondary active" onclick="$('.help-main').removeClass('sm-view').removeClass('md-view').addClass('large-view')"><i class="feather icon-grid m-0"></i></a>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="card ticket-card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-auto mb-3 mb-sm-0">
                                <div class="d-sm-inline-block d-flex align-items-center">
                                    <img class="media-object wid-60 img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image ">
                                    <div class="ms-3 ms-sm-0">
                                        <ul class=" text-sm-center list-unstyled mt-2 mb-0 d-inline-block">
                                            <li class="list-unstyled-item"><a href="#" class="link-secondary">1 Ticket</a></li>
                                            <li class="list-unstyled-item"><a href="#" class="link-danger"><i class="fas fa-heart"></i> 3</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="h5 font-weight-bold">John lui <small class="badge bg-light-secondary ms-2">Replied</small></div>
                                <div class="help-sm-hidden">
                                    <ul class="list-unstyled mt-2 mb-0 text-muted">
                                        <li class="d-sm-inline-block d-block mt-1"><img src="assets/images/ticket/p1.jpg" alt="" class="wid-20 rounded me-2 img-fluid">Piaf able</li>
                                        <li class="d-sm-inline-block d-block mt-1"><img src="assets/images/user/avatar-5.jpg" alt="" class="wid-20 rounded me-2 img-fluid">Assigned to Robert alia</li>
                                        <li class="d-sm-inline-block d-block mt-1"><i class="wid-20 material-icons-two-tone text-center f-14 me-2">calendar_today</i>Updated 22 hours ago</li>
                                        <li class="d-sm-inline-block d-block mt-1"><i class="wid-20 material-icons-two-tone text-center f-14 me-2">chat</i>9</li>
                                    </ul>
                                </div>
                                <div class="h5 mt-3"><i class="material-icons-two-tone f-16 me-1">lock</i> Theme customisation issue</div>
                                <div class="help-md-hidden">
                                    <div class="bg-body mb-3 p-3">
                                        <h6><img src="assets/images/user/avatar-5.jpg" alt="" class="wid-20 avatar me-2 rounded">Last comment from <a href="#" class="link-secondary">Robert alia:</a></h6>
                                        <p class="mb-0"><b>hello John lui</b>,<br> you need to create <b>"toolbar-options" div only</b> once in a page&nbsp;in your code,<br> this div fill found every "td" tag in your page,<br> just remove those
                                            things
                                            and also in option button add</p>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <a href="{{ route('help_ticket_details') }}" class="me-2 btn btn-sm btn-light-primary"><i class="feather icon-eye me-1"></i>View Ticket</a>
                                    <a href="#" class="me-3 btn btn-sm btn-light-danger"><i class="feather icon-trash-2 me-1"></i>Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card ticket-card open-ticket">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-auto mb-3 mb-sm-0">
                                <div class="d-sm-inline-block d-flex align-items-center">
                                    <img class="media-object wid-60 img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image ">
                                    <div class="ms-3 ms-sm-0 mb-3 mb-sm-0">
                                        <ul class=" text-sm-center list-unstyled mt-2 mb-0 d-inline-block">
                                            <li class="list-unstyled-item"><a href="#" class="link-secondary">1 Ticket</a></li>
                                            <li class="list-unstyled-item"><a href="#" class="link-danger"><i class="fas fa-heart"></i> 3</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="h5 font-weight-bold">John lui <small class="badge bg-light-secondary ms-2">Replied</small></div>
                                <div class="help-sm-hidden">
                                    <ul class="list-unstyled mt-2 mb-0 text-muted">
                                        <li class="d-sm-inline-block d-block mt-1"><img src="assets/images/ticket/p1.jpg" alt="" class="wid-20 rounded me-2 img-fluid">Piaf able</li>
                                        <li class="d-sm-inline-block d-block mt-1"><img src="assets/images/user/avatar-5.jpg" alt="" class="wid-20 rounded me-2 img-fluid">Assigned to Robert alia</li>
                                        <li class="d-sm-inline-block d-block mt-1"><i class="wid-20 material-icons-two-tone text-center f-14 me-2">calendar_today</i>Updated 22 hours ago</li>
                                        <li class="d-sm-inline-block d-block mt-1"><i class="wid-20 material-icons-two-tone text-center f-14 me-2">chat</i>9</li>
                                    </ul>
                                </div>
                                <div class="h5 mt-3"><i class="material-icons-two-tone f-16 me-1">lock</i> Theme customisation issue</div>
                                <div class="help-md-hidden">
                                    <div class="bg-body mb-3 p-3">
                                        <h6><img src="assets/images/user/avatar-5.jpg" alt="" class="wid-20 avatar me-2 rounded">Last comment from <a href="#" class="link-secondary">Robert alia:</a></h6>
                                        <p class="mb-0"><b>hello John lui</b>,<br> you need to create <b>"toolbar-options" div only</b> once in a page&nbsp;in your code,<br> this div fill found every "td" tag in your page,<br> just remove those
                                            things
                                            and also in option button add</p>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <a href="{{ route('help_ticket_details') }}" class="me-2 btn btn-sm btn-light-primary"><i class="feather icon-eye me-1"></i>View Ticket</a>
                                    <a href="#" class="me-3 btn btn-sm btn-light-danger"><i class="feather icon-trash-2 me-1"></i>Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card ticket-card close-ticket">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-auto mb-3 mb-sm-0">
                                <div class="d-sm-inline-block d-flex align-items-center">
                                    <img class="media-object wid-60 img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image ">
                                    <div class="ms-3 ms-sm-0 mb-3 mb-sm-0">
                                        <ul class=" text-sm-center list-unstyled mt-2 mb-0 d-inline-block">
                                            <li class="list-unstyled-item"><a href="#" class="link-secondary">1 Ticket</a></li>
                                            <li class="list-unstyled-item"><a href="#" class="link-danger"><i class="fas fa-heart"></i> 3</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="h5 font-weight-bold">John lui <small class="badge bg-light-secondary ms-2">Replied</small></div>
                                <div class="help-sm-hidden">
                                    <ul class="list-unstyled mt-2 mb-0 text-muted">
                                        <li class="d-sm-inline-block d-block mt-1"><img src="assets/images/ticket/p1.jpg" alt="" class="wid-20 rounded me-2 img-fluid">Piaf able</li>
                                        <li class="d-sm-inline-block d-block mt-1"><img src="assets/images/user/avatar-5.jpg" alt="" class="wid-20 rounded me-2 img-fluid">Assigned to Robert alia</li>
                                        <li class="d-sm-inline-block d-block mt-1"><i class="wid-20 material-icons-two-tone text-center f-14 me-2">calendar_today</i>Updated 22 hours ago</li>
                                        <li class="d-sm-inline-block d-block mt-1"><i class="wid-20 material-icons-two-tone text-center f-14 me-2">chat</i>9</li>
                                    </ul>
                                </div>
                                <div class="h5 mt-3"><i class="material-icons-two-tone f-16 me-1">lock</i> Theme customisation issue</div>
                                <div class="help-md-hidden">
                                    <div class="bg-body mb-3 p-3">
                                        <h6><img src="assets/images/user/avatar-5.jpg" alt="" class="wid-20 avatar me-2 rounded">Last comment from <a href="#" class="link-secondary">Robert alia:</a></h6>
                                        <p class="mb-0"><b>hello John lui</b>,<br> you need to create <b>"toolbar-options" div only</b> once in a page&nbsp;in your code,<br> this div fill found every "td" tag in your page,<br> just remove those
                                            things
                                            and also in option button add</p>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <a href="{{ route('help_ticket_details') }}" class="me-2 btn btn-sm btn-light-primary"><i class="feather icon-eye me-1"></i>View Ticket</a>
                                    <a href="#" class="me-3 btn btn-sm btn-light-danger"><i class="feather icon-trash-2 me-1"></i>Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="right-side">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5>Ticket Categories</h5>
                        </div>
                        <ul class="list-group list-group-flush pb-2">
                            <li class="list-group-item">
                                <div class="d-inline-block">
                                    <img src="assets/images/ticket/p1.jpg" alt="" class="wid-20 rounded me-1 img-fluid">
                                    <a href="#" class="link-secondary">Piaf able</a>
                                </div>
                                <div class="float-end">
                                    <a href="#" class="badge bg-light-danger rounded-circle me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="tooltip on top">1</a>
                                    <a href="#" class="badge bg-light-secondary rounded-circle me-0 " data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="tooltip on top">3</a>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-inline-block">
                                    <img src="assets/images/ticket/p2.jpg" alt="" class="wid-20 rounded me-1 img-fluid">
                                    <a href="#" class="link-secondary">Pro able</a>
                                </div>
                                <div class="float-end">
                                    <a href="#" class="badge bg-light-secondary rounded-circle me-0 " data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="tooltip on top">3</a>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-inline-block">
                                    <img src="assets/images/ticket/p3.jpg" alt="" class="wid-20 rounded me-1 img-fluid">
                                    <a href="#" class="link-secondary">CRM admin</a>
                                </div>
                                <div class="float-end">
                                    <a href="#" class="badge bg-light-danger rounded-circle me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="tooltip on top">1</a>
                                    <a href="#" class="badge bg-light-secondary rounded-circle me-0 " data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="tooltip on top">3</a>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-inline-block">
                                    <img src="assets/images/ticket/p4.jpg" alt="" class="wid-20 rounded me-1 img-fluid">
                                    <a href="#" class="link-secondary">Alpha pro</a>
                                </div>
                                <div class="float-end">
                                    <a href="#" class="badge bg-light-secondary rounded-circle me-0 " data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="tooltip on top">3</a>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-inline-block">
                                    <img src="assets/images/ticket/p5.jpg" alt="" class="wid-20 rounded me-1 img-fluid">
                                    <a href="#" class="link-secondary">Carbon able</a>
                                </div>
                                <div class="float-end">
                                    <a href="#" class="badge bg-light-secondary rounded-circle me-0 " data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="tooltip on top">3</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card">
                        <div class="card-header pt-4 pb-4">
                            <h5>Support Aggent</h5>
                        </div>
                        <ul class="list-group list-group-flush pb-2">
                            <li class="list-group-item">
                                <div class="d-inline-block">
                                    <img src="assets/images/user/avatar-5.jpg" alt="" class="wid-20 rounded me-1 img-fluid">
                                    <a href="#" class="link-secondary">Tom Cook</a>
                                </div>
                                <div class="float-end">
                                    <a href="#" class="badge bg-light-danger rounded-circle me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="tooltip on top">1</a>
                                    <a href="#" class="badge bg-light-secondary rounded-circle me-0 " data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="tooltip on top">3</a>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-inline-block">
                                    <img src="assets/images/user/avatar-4.jpg" alt="" class="wid-20 rounded me-1 img-fluid">
                                    <a href="#" class="link-secondary">Brad Larry</a>
                                </div>
                                <div class="float-end">
                                    <a href="#" class="badge bg-light-danger rounded-circle me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="tooltip on top">1</a>
                                    <a href="#" class="badge bg-light-secondary rounded-circle me-0 " data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="tooltip on top">3</a>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-inline-block">
                                    <img src="assets/images/user/avatar-3.jpg" alt="" class="wid-20 rounded me-1 img-fluid">
                                    <a href="#" class="link-secondary">Jhon White</a>
                                </div>
                                <div class="float-end">
                                    <a href="#" class="badge bg-light-secondary rounded-circle me-0 " data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="tooltip on top">3</a>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-inline-block">
                                    <img src="assets/images/user/avatar-2.jpg" alt="" class="wid-20 rounded me-1 img-fluid">
                                    <a href="#" class="link-secondary">Mark Jobs</a>
                                </div>
                                <div class="float-end">
                                    <a href="#" class="badge bg-light-secondary rounded-circle me-0 " data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="tooltip on top">3</a>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-inline-block">
                                    <img src="assets/images/user/avatar-1.jpg" alt="" class="wid-20 rounded me-1 img-fluid">
                                    <a href="#" class="link-secondary">Able Pro</a>
                                </div>
                                <div class="float-end">
                                    <a href="#" class="badge bg-light-secondary rounded-circle me-0 " data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="tooltip on top">3</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<div id="qviewModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog q-view-modal" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Chrome bug The page uses a roller to slide under a black block<span class="badge bg-light-danger text-uppercase ms-2 f-12">Private</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="scroll-div position-relative">
                <div class="modal-body border-bottom px-4">
                    <div class="row">
                        <div class="col-md-7">
                            <span type="button" class="badge bg-light-success me-1"><i class="feather icon-check me-1"></i> Closed</span>
                            <p class="list-inline-item mb-0"><img src="assets/images/ticket/p1.jpg" alt="" class="wid-20 rounded me-1 img-fluid">Alpha pro</p>
                        </div>
                        <div class="col-md-5 text-end">
                            <p class="d-inline-block mb-0"><i class="wid-20 material-icons-two-tone text-center f-16 me-2">calendar_today</i><label class="mb-0">Jan,1st,2019</label></p>
                        </div>
                    </div>
                </div>
                <div class="modal-body border-bottom px-4">
                    <div class="row">
                        <div class="col-auto">
                            <img class="media-object wid-60 img-radius" src="assets/images/user/avatar-5.jpg" alt="Generic placeholder image ">
                        </div>
                        <div class="col">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Note!</strong> This ticket is closed. If you want to re-open it, just post a reply below.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <textarea id="tinymce-editor">
                                <p>hello..</p>
                            </textarea>
                            <div class="btn-block mt-3">
                                <div class="btn-group me-2">
                                    <button type="button" class="btn btn-sm btn-light-primary">Primary</button>
                                    <button type="button" class="btn btn-sm btn-light-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle
                                            Dropdown</span></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <a class="dropdown-item" href="#!">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Separated link</a>
                                    </div>
                                </div>
                                <label class="btn btn-sm btn-light-secondary" for="mod-flup">
                                    <i class="feather icon-paperclip me-1"></i> Add Atachment
                                </label>
                                <input type="file" name="file" class="d-none" id="mod-flup" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body border-bottom px-4">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <img class="media-object wid-60 img-radius" src="assets/images/user/avatar-5.jpg" alt="Generic placeholder image ">
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Support Agent name<span class="badge bg-light-secondary ms-2">Support Agent</span></h6>
                            <label class="text-muted">5 Month ago</label>
                        </div>
                        <div class="col-auto">
                            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block me-1"><a href="#"><i class="feather icon-edit text-muted"></i></a></li>
                                <li class="d-inline-block"><a href="#"><i class="feather icon-trash-2 text-muted"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p>hello John lui,</p>
                        <p>you need to create <strong>"toolbar-options" div only once</strong> in a page in your code, this div fill found
                            <strong>every "td"</strong> tag in your page, just remove those things.
                        </p>
                        <p>and also</p>
                        <p>in option button add "<strong>p-0</strong>" class in "<strong>I</strong>" tag</p>
                        <p>to</p>
                        <p></p>
                        <p>Thanks...</p>
                    </div>
                    <div class="code-toolbar">
                        <pre class=" language-markup">
<code class=" language-markup">
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>pre</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>code</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>language-css<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        p {
            color: #1abc9c
        }
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>code</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>pre</span><span class="token punctuation">&gt;</span></span>
</code>
                        </pre>
                    </div>
                </div>
                <div class="modal-body border-bottom px-4">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <img class="media-object wid-60 img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image ">
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Support Agent name<span class="badge bg-light-secondary ms-2">Support Agent</span></h6>
                            <label class="text-muted">5 Month ago</label>
                        </div>
                        <div class="col-auto">
                            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block me-1"><a href="#"><i class="feather icon-edit text-muted"></i></a></li>
                                <li class="d-inline-block"><a href="#"><i class="feather icon-trash-2 text-muted"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p>hello John lui,</p>
                        <p>you need to create <strong>"toolbar-options" div only once</strong> in a page in your code, this div fill found
                            <strong>every "td"</strong> tag in your page, just remove those things.
                        </p>
                        <p>and also</p>
                        <p>in option button add "<strong>p-0</strong>" class in "<strong>I</strong>" tag</p>
                        <p>to</p>
                        <p></p>
                        <p>Thanks...</p>
                    </div>
                    <div class="row text-center mb-2">
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
                            <a href="assets/images/light-box/l1.jpg" data-bs-toggle="lightbox" data-gallery="example-gallery"><img src="assets/images/light-box/sl1.jpg" class="img-fluid m-b-10" alt=""></a>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
                            <a href="assets/images/light-box/l1.jpg" data-bs-toggle="lightbox" data-gallery="example-gallery"><img src="assets/images/light-box/sl1.jpg" class="img-fluid m-b-10" alt=""></a>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
                            <a href="assets/images/light-box/l1.jpg" data-bs-toggle="lightbox" data-gallery="example-gallery"><img src="assets/images/light-box/sl1.jpg" class="img-fluid m-b-10" alt=""></a>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
                            <a href="assets/images/light-box/l1.jpg" data-bs-toggle="lightbox" data-gallery="example-gallery"><img src="assets/images/light-box/sl1.jpg" class="img-fluid m-b-10" alt=""></a>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
                            <a href="assets/images/light-box/l1.jpg" data-bs-toggle="lightbox" data-gallery="example-gallery"><img src="assets/images/light-box/sl1.jpg" class="img-fluid m-b-10" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="modal-body border-bottom px-4">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <img class="media-object wid-60 img-radius" src="assets/images/user/avatar-5.jpg" alt="Generic placeholder image ">
                        </div>
                        <div class="col">
                            <h6 class="mb-0">Support Agent name<span class="badge bg-light-secondary ms-2">Support Agent</span></h6>
                            <label class="text-muted">5 Month ago</label>
                        </div>
                        <div class="col-auto">
                            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block me-1"><a href="#"><i class="feather icon-edit text-muted"></i></a></li>
                                <li class="d-inline-block"><a href="#"><i class="feather icon-trash-2 text-muted"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p>hello John lui,</p>
                        <p>you need to create <strong>"toolbar-options" div only once</strong> in a page in your code, this div fill found
                            <strong>every "td"</strong> tag in your page, just remove those things.
                        </p>
                        <p>and also</p>
                        <p>in option button add "<strong>p-0</strong>" class in "<strong>I</strong>" tag</p>
                        <p>to</p>
                        <p></p>
                        <p>Thanks...</p>
                    </div>
                    <div class="code-toolbar">
                        <pre class=" language-markup">
<code class=" language-markup">
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>pre</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>code</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>language-css<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        p {
            color: #1abc9c
        }
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>code</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>pre</span><span class="token punctuation">&gt;</span></span>
</code>
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- Apex Chart -->
<!-- trumbowyg editor -->
<!-- prism Js -->
<script src="assets/js/plugins/prism.js"></script>

<!-- Lightbox Js -->
<script src="assets/js/plugins/ekko-lightbox.min.js"></script>
<script src="assets/js/plugins/lightbox.min.js"></script>
<script src="assets/js/pages/ac-lightbox.js"></script>

<script src="assets/js/plugins/trumbowyg.min.js"></script>


<script>
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
    $(".ticket-card").click(function() {
        $("#qviewModal").modal();
        var px = new PerfectScrollbar('.scroll-div', {
            wheelSpeed: .9,
            swipeEasing: 0,
            wheelPropagation: 1,
            minScrollbarLength: 40,
        });
    });
    $(".help-filter a").click(function() {
        $('.help-filter a').removeClass('active');
        $(this).addClass('active');
    });
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
