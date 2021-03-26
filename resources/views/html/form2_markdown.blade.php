<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    <link rel="stylesheet" href="assets/js/plugins/markdown/bootstrap-markdown.min.css">
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
                            <h5 class="m-b-10">Bootstrap Markdown</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Text Editors</a></li>
                            <li class="breadcrumb-item"><a href="#!">CKEditor</a></li>
                            <li class="breadcrumb-item">Bootstrap Markdown</li>
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
                        Bootstrap plugin for markdown editing.
                        <br>
                        For more info please visit the plugin's <a class="" href="http://www.taufanaditya.com/bootstrap-markdown/" target="_blank">Demo Page</a> or <a class=""
                            href="https://github.com/toopay/bootstrap-markdown" target="_blank">Github Repo</a>.
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Bootstrap Markdown</h5>
                    </div>
                    <div class="card-body">
                        <textarea name="content" class="form-control" data-provide="markdown" rows="5"></textarea>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Bootstrap Markdown Savable</h5>
                        <span>Savable using <code>data-savable="true"</code> attribute</span>
                    </div>
                    <div class="card-body">
                        <textarea name="content" class="form-control" data-provide="markdown" rows="5" data-savable="true"></textarea>
                    </div>
                </div>
                <div class="card d-none d-md-flex">
                    <div class="card-header">
                        <h5>Custom width</h5>
                        <span>Custom width using <code>data-width="400"</code> attribute</span>
                    </div>
                    <div class="card-body">
                        <textarea name="content" class="form-control" data-provide="markdown" rows="5" data-width="400"></textarea>
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
<script src='assets/js/plugins/markdown/bootstrap-markdown.js'></script>
<script>
    $.fn.markdown.defaults.iconlibrary = 'fa';
    $.fn.markdown.defaults.buttons[0][0]['data'][2]['icon']['fa'] = 'fa fa-heading';
    $.fn.markdown.defaults.buttons[0][1]['data'][1]['icon']['fa'] = 'fa fa-image';
    $.fn.markdown.defaults.buttons[0][2]['data'][1]['icon']['fa'] = 'fa fa-list-ol';
    $(function() {});
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
