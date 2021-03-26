<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
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
                            <h5 class="m-b-10">Create ticket</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Helpdesk</a></li>
                            <li class="breadcrumb-item">Create ticket</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Customer</label>
                                        <select class="mb-3 form-control">
                                            <option>Default select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Category</label>
                                        <select class="mb-3 form-control">
                                            <option>Default select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputPassword1">Subject</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputPassword1">Description</label>
                                <textarea id="tinymce-editor"><p>hello..</p></textarea>
                                <div class="btn btn-light-warning mt-3 file-btn">
                                    <i class="feather icon-paperclip"></i>Add Atachment
                                    <input type="file" name="file" />
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- Apex Chart -->
<!-- trumbowyg editor -->
<script src="assets/js/plugins/trumbowyg.min.js"></script>

<script type="text/javascript">
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
@include('html.layouts.footer-bottom-link')
</body>

</html>
