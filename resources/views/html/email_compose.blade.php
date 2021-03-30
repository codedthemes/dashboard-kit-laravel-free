<!DOCTYPE html>
<html lang="en">
<head>
    @include('html.layouts.head')
    @include('html.layouts.head-bottom-link')
    <link rel="stylesheet" href="assets/css/plugins/trumbowyg.min.css">
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
                            <h5 class="m-b-10">Compose Email</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Email</a></li>
                            <li class="breadcrumb-item">Compose Email</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card email-card">
                    <div class="card-header">
                        <div class="mail-header">
                            <div class="row align-items-center">
                                <!-- [ email-left section ] start -->
                                <div class="col-xl-2 col-md-3">
                                    <a href="#!" class="email-mob-toggle text-dark">
                                        <i data-feather="menu" class="wid-20 hei-20"></i>
                                    </a>
                                    <a href="#!" class="b-brand">
                                        <img src="assets/images/logo-dark.svg" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <!-- [ email-left section ] end -->
                                <!-- [ email-right section ] start -->
                                <div class="col-xl-10 col-md-9">
                                    <div class="input-group mb-0">
                                        <label class="input-group-text" for="inputGroupSelect01"><i class="feather icon-search"></i></label>
                                        <select class="form-select" id="inputGroupSelect01">
                                            <option selected>Search ...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- [ email-right section ] end -->
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mail-body">
                            <div class="row">
                                <!-- [ email-left section ] start -->
                                <div class="col-xl-2 col-md-3 mail-left">
                                    <div class="mail-l-content">
                                        <ul class="mb-2 nav nav-tab flex-column nav-pills">
                                            <li class="nav-item mail-section">
                                                <a class="nav-link  active" href="{{ route('email_inbox') }}">
                                                    <span><i class="feather icon-inbox"></i> Inbox</span>
                                                    <span class="float-end">6</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mail-section">
                                                <a class="nav-link " href="{{ route('email_inbox') }}">
                                                    <span><i class="feather icon-star-on"></i> Starred</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mail-section">
                                                <a class="nav-link " href="{{ route('email_inbox') }}">
                                                    <span><i class="feather icon-file-text"></i> Drafts</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mail-section">
                                                <a class="nav-link " href="{{ route('email_inbox') }}">
                                                    <span><i class="feather icon-navigation"></i> Sent Mail</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mail-section">
                                                <a class="nav-link " href="{{ route('email_inbox') }}">
                                                    <span><i class="feather icon-trash-2"></i> Trash</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <a class="email-more-link" data-bs-toggle="collapse" href="#email-more-cont" role="button" aria-expanded="false" aria-controls="email-more-cont"><span><i class="feather icon-chevron-down me-2"></i>More</span><span
                                                style="display: none;"><i class="feather icon-chevron-up me-2"></i>Less</span></a>
                                        <div class="collapse" id="email-more-cont">
                                            <ul class="nav nav-tab flex-column nav-pills">
                                                <li class="nav-item mail-section">
                                                    <a class="nav-link ">
                                                        <span><i class="feather icon-zap"></i> Important</span>
                                                        <span class="float-end">6</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mail-section">
                                                    <a class="nav-link ">
                                                        <span><i class="feather icon-message-circle"></i> Chats</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mail-section">
                                                    <a class="nav-link ">
                                                        <span><i class="feather icon-alert-triangle"></i> Spam</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ email-left section ] end -->
                                <!-- [ email-right section ] start -->
                                <div class="col-xl-10 col-md-9">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="mail-body-content">
                                            <form class="form-material">
                                                <div class="form-group">
                                                    <label class="form-label" for="exampleInputEmail1">To</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="exampleInputEmail2">Cc</label>
                                                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="exampleInputEmail3">Bcc</label>
                                                                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="exampleInputEmail4">Subject</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail4" placeholder="Subject">
                                                </div>
                                                <textarea id="tinymce-editor" name="name">Put your things hear...</textarea>
                                                <div class="float-end mt-3">
                                                    <button type="button" class="btn  btn-secondary">Save as draft</button>
                                                    <button type="button" class="btn  btn-primary">Send</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ email-right section ] end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- trumbowyg editor -->
<script src="assets/js/plugins/trumbowyg.min.js"></script>
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
    $('.email-mob-toggle').on('click',function(){
        $('.mail-left').addClass('mail-menu-active');
        $('.mail-left').append('<div id="overlay-email-mob"></div>');
        $("#overlay-email-mob").on('click', function() {
            $('.mail-left').removeClass('mail-menu-active');
            $('#overlay-email-mob').remove();
        });
    });
</script>
@include('html.layouts.footer-bottom-link')
</body>
</html>
