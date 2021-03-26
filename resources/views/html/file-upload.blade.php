<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    @include('html.layouts.head-bottom-link')
    <!-- fileupload-custom css -->
    <link rel="stylesheet" href="assets/css/plugins/dropzone.min.css">
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
                            <h5 class="m-b-10">File Upload</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item">File Upload</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ file-upload ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>File Upload</h5>
                    </div>
                    <div class="card-body">
                        <form action="assets/json/file-upload.php" class="dropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form>
                        <div class="text-center m-t-20">
                            <button class="btn btn-primary">Upload Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ file-upload ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- file-upload Js -->
<script src="assets/js/plugins/dropzone-amd-module.min.js"></script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
