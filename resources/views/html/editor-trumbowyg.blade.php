<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    @include('html.layouts.head-bottom-link')

    <link rel="stylesheet" href="assets/js/plugins/trumbowyg/plugins/colors/ui/trumbowyg.colors.min.css">
    <link rel="stylesheet" href="assets/js/plugins/trumbowyg/plugins/giphy/ui/trumbowyg.giphy.min.css">
    <link rel="stylesheet" href="assets/js/plugins/trumbowyg/ui/trumbowyg.min.css">
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
                            <h5 class="m-b-10">trumbowyg editor</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Editor</a></li>
                            <li class="breadcrumb-item">trumbowyg editor</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ tinymce editor ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Trumbowyg editor</h5>
                    </div>
                    <div class="card-body">
                        <textarea id="tinymce-editor1">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <strong>some text bold</strong> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <p>Duis aute <a href="https://twitter.com/AlexandreDemode" target="_blank">some link</a> irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </textarea>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Trumbowyg editor with plugins</h5>
                    </div>
                    <div class="card-body">
                        <textarea id="tinymce-editor2">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <strong>some text bold</strong> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <p>Duis aute <a href="https://twitter.com/AlexandreDemode" target="_blank">some link</a> irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </textarea>
                    </div>
                </div>
            </div>
            <!-- [ tinymce editor ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- trumbowyg editor -->

<script src="assets/js/plugins/trumbowyg/trumbowyg.min.js"></script>
<script src="assets/js/plugins/trumbowyg/plugins/base64/trumbowyg.base64.min.js"></script>
<script src="assets/js/plugins/trumbowyg/plugins/colors/trumbowyg.colors.min.js"></script>
<script src="assets/js/plugins/trumbowyg/plugins/giphy/trumbowyg.giphy.min.js"></script>
<script src="assets/js/plugins/trumbowyg/plugins/noembed/trumbowyg.noembed.min.js"></script>
<script src="assets/js/plugins/trumbowyg/plugins/pasteimage/trumbowyg.pasteimage.min.js"></script>
<script src="assets/js/plugins/trumbowyg/plugins/preformatted/trumbowyg.preformatted.min.js"></script>
<script src="assets/js/plugins/trumbowyg/plugins/upload/trumbowyg.upload.min.js"></script>



<script type="text/javascript">
    $(window).on('load', function() {
        $('#tinymce-editor1').trumbowyg({
            svgPath: 'assets/js/plugins/trumbowyg/ui/icons.svg'
        });
        $('#tinymce-editor2').trumbowyg({
            core: {},
            svgPath: 'assets/js/plugins/trumbowyg/ui/icons.svg',
            btnsDef: {
                align: {
                    dropdown: ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                    ico: 'justifyLeft'
                }
            },
            btns: [
                ['viewHTML'],
                ['undo', 'redo'],
                ['formatting'],
                ['strong', 'em', 'del', 'underline'],
                ['foreColor', 'backColor'],
                ['link'],
                ['insertImage', 'upload', 'base64', 'noembed', 'giphy'],
                ['align'],
                ['preformatted'],
                ['horizontalRule'],
                ['fullscreen']
            ],
            plugins: {
                giphy: {
                    apiKey: 'dNhCbN6hrhpBMxXhIswM34wIR2UBpCns'
                },
                upload: {
                    serverPath: 'https://api.imgur.com/3/image',
                    fileFieldName: 'image',
                    headers: {
                        'Authorization': 'Client-ID 9e57cb1c4791cea'
                    },
                    urlPropertyName: 'data.link'
                }
            }
        });
    });
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
