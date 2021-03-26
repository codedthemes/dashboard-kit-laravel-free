<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    <link rel="stylesheet" href="assets/js/plugins/summernote/summernote-bs4.min.css">
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
                            <h5 class="m-b-10">CKEditor Document</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Text Editors</a></li>
                            <li class="breadcrumb-item"><a href="#!">CKEditor</a></li>
                            <li class="breadcrumb-item">CKEditor Document</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="alert alert-primary" role="alert">
                    <div class="alert-text">
                        Super simple WYSIWYG editor.
                        <br>
                        For more info please visit the plugin's <a class="" href="https://summernote.org/examples/" target="_blank">Demo Page</a> or <a class="" href="https://github.com/summernote/summernote" target="_blank">Github Repo</a>.
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Summernote</h5>
                    </div>
                    <div class="card-body">
                        <div id="summernote">
                            <p>
                                hi,<br>
                                we are summernote.<br>
                                please, write text here!<br>
                                super simple WYSIWYG editor on Bootstrap
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Click to edit</h5>
                        <span>You can edit content on the fly</span>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <button id="edit" class="btn btn-primary" onclick="edit()" type="button"><i data-feather="edit"></i> Edit</button>
                            <button id="save" class="btn btn-primary" onclick="save()" type="button"><i data-feather="save"></i> Save</button>
                        </div>
                        <div class="click2edit">
                            <p>
                                hi,<br>
                                we are summernote.<br>
                                please, write text here!<br>
                                super simple WYSIWYG editor on Bootstrap
                            </p>
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
<script src='assets/js/plugins/summernote/summernote-bs4.min.js'></script>
<script>
    $(function() {
        $('#summernote').summernote({
            height: 150,
            codemirror: {
                mode: 'text/html',
                htmlMode: true,
                lineNumbers: true,
                theme: 'monokai'
            }
        });
    });
    var edit = function() {
        $('.click2edit').summernote({
            focus: true
        });
    };
    var save = function() {
        var markup = $('.click2edit').summernote('code');
        $('.click2edit').summernote('destroy');
    };
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
