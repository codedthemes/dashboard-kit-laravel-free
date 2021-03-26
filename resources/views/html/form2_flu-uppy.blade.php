<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    <link rel="stylesheet" href="assets/js/plugins/uppy/uppy.min.css">
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
                            <h5 class="m-b-10">Uppy</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">File Upload</a></li>
                            <li class="breadcrumb-item">Uppy</li>
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
                        Uppy is a sleek, modular open source JavaScript file uploader.
                        <br> For more info please visit the plugin's <a class="" href="https://uppy.io/" target="_blank">Demo Page</a> or
                        <a class="" href="https://github.com/transloadit/uppy" target="_blank">GitHub</a>.
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Dashboard Example</h5>
                    </div>
                    <div class="card-body">
                        <div class="pc-uppy" id="pc-uppy-1">
                            <div class="pc-uppy-dashboard"></div>
                            <div class="pc-uppy-progress"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Drag and Drop [ autoProceed is on ]</h5>
                    </div>
                    <div class="card-body">
                        <div class="pc-uppy" id="pc-uppy-3">
                            <div class="pc-uppy-drag"></div>
                            <div class="pc-uppy-informer"></div>
                            <div class="pc-uppy-progress"></div>
                            <div class="pc-uppy-thumbnails"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Drag and Drop [ autoProceed is off ]</h5>
                    </div>
                    <div class="card-body">
                        <div class="pc-uppy" id="pc-uppy-4">
                            <div class="pc-uppy-drag"></div>
                            <div class="pc-uppy-informer"></div>
                            <div class="pc-uppy-progress"></div>
                            <div class="pc-uppy-thumbnails"></div>
                            <div class="text-center mt-2">
                                <button class=" btn btn-light-primary">Upload</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Status Bar Example</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="pc-uppy" id="pc-uppy-5">
                                <div class="pc-uppy-wrapper"></div>
                                <div class="pc-uppy-list"></div>
                                <div class="pc-uppy-status"></div>
                                <div class="pc-uppy-informer pc-uppy-informer--min"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Popup Upload</h5>
                    </div>
                    <div class="card-body">
                        <div class="pc-uppy" id="pc-uppy-6">
                            <div class="text-center">
                                <button class="pc-uppy-btn btn btn-light-primary">Open Popup Window</button>
                            </div>
                            <div class="pc-uppy-dashboard"></div>
                            <div class="pc-uppy-progress"></div>
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
<script src="assets/js/plugins/uppy/uppy.min.js"></script>
<script>
    const Tus = Uppy.Tus;
    const ProgressBar = Uppy.ProgressBar;
    const StatusBar = Uppy.StatusBar;
    const FileInput = Uppy.FileInput;
    const Informer = Uppy.Informer;
    const Dashboard = Uppy.Dashboard;
    const Dropbox = Uppy.Dropbox;
    const GoogleDrive = Uppy.GoogleDrive;
    const Instagram = Uppy.Instagram;
    const Webcam = Uppy.Webcam;
    $(function() {
        var id = '#pc-uppy-1';
        var options = {
            proudlyDisplayPoweredByUppy: false,
            target: id,
            inline: true,
            replaceTargetContent: true,
            showProgressDetails: true,
            note: 'No filetype restrictions.',
            height: 470,
            metaFields: [{
                    id: 'name',
                    name: 'Name',
                    placeholder: 'file name'
                },
                {
                    id: 'caption',
                    name: 'Caption',
                    placeholder: 'describe what the image is about'
                }
            ],
            browserBackButtonClose: true
        }
        var uppyDashboard = Uppy.Core({
            autoProceed: true,
            restrictions: {
                maxFileSize: 1000000, // 1mb
                maxNumberOfFiles: 5,
                minNumberOfFiles: 1
            }
        });
        uppyDashboard.use(Dashboard, options);
        uppyDashboard.use(Tus, {
            endpoint: 'https://master.tus.io/files/'
        });
        uppyDashboard.use(GoogleDrive, {
            target: Dashboard,
            companionUrl: 'https://companion.uppy.io'
        });
        uppyDashboard.use(Dropbox, {
            target: Dashboard,
            companionUrl: 'https://companion.uppy.io'
        });
        uppyDashboard.use(Instagram, {
            target: Dashboard,
            companionUrl: 'https://companion.uppy.io'
        });
        uppyDashboard.use(Webcam, {
            target: Dashboard
        });
    });
    $(function() {
        var id = '#pc-uppy-3';
        var uppyDrag = Uppy.Core({
            autoProceed: true,
            restrictions: {
                maxFileSize: 1000000, // 1mb
                maxNumberOfFiles: 5,
                minNumberOfFiles: 1,
                allowedFileTypes: ['image/*', 'video/*']
            }
        });
        uppyDrag.use(Uppy.DragDrop, {
            target: id + ' .pc-uppy-drag'
        });
        uppyDrag.use(ProgressBar, {
            target: id + ' .pc-uppy-progress',
            hideUploadButton: false,
            hideAfterFinish: false
        });
        uppyDrag.use(Informer, {
            target: id + ' .pc-uppy-informer'
        });
        uppyDrag.use(Tus, {
            endpoint: 'https://master.tus.io/files/'
        });
        uppyDrag.on('complete', function(file) {
            var imagePreview = "";
            $.each(file.successful, function(index, value) {
                var imageType = /image/;
                var thumbnail = "";
                if (imageType.test(value.type)) {
                    thumbnail = '<div class="pc-uppy-thumbnail"><img src="' + value.uploadURL + '"/></div>';
                }
                var sizeLabel = "bytes";
                var filesize = value.size;
                if (filesize > 1024) {
                    filesize = filesize / 1024;
                    sizeLabel = "kb";
                    if (filesize > 1024) {
                        filesize = filesize / 1024;
                        sizeLabel = "MB";
                    }
                }
                imagePreview += '<div class="pc-uppy-thumbnail-container" data-id="' + value.id + '"><div class="card border mb-3"><div class="p-2"><div class="media align-items-center">' + thumbnail +
                    '<div class="media-body"> <span class="pc-uppy-thumbnail-label">' + value.name + ' (' + Math.round(filesize, 2) + ' ' +
                    sizeLabel + ')</span></div><span data-id="' + value.id + '" class="pc-uppy-remove-thumbnail"><i class="feather icon-x-circle text-danger f-20"></i></div></div></div></div>';
            });

            $(id + ' .pc-uppy-thumbnails').append(imagePreview);
        });
        $(document).on('click', id + ' .pc-uppy-thumbnails .pc-uppy-remove-thumbnail', function() {
            var imageId = $(this).attr('data-id');
            uppyDrag.removeFile(imageId);
            $(id + ' .pc-uppy-thumbnail-container[data-id="' + imageId + '"').remove();
        });
    });
    $(function() {
        var id = '#pc-uppy-4';
        var uppyDrag = Uppy.Core({
            autoProceed: false,
            restrictions: {
                maxFileSize: 1000000, // 1mb
                maxNumberOfFiles: 5,
                minNumberOfFiles: 1
            }
        });
        uppyDrag.use(Uppy.DragDrop, {
            target: id + ' .pc-uppy-drag'
        });
        uppyDrag.use(ProgressBar, {
            target: id + ' .pc-uppy-progress'
        });
        uppyDrag.use(Informer, {
            target: id + ' .pc-uppy-informer'
        });
        uppyDrag.use(Tus, {
            endpoint: 'https://master.tus.io/files/'
        });
        uppyDrag.on('complete', function(file) {
            var imagePreview = "";
            $.each(file.successful, function(index, value) {
                var imageType = /image/;
                var thumbnail = "";
                if (imageType.test(value.type)) {
                    thumbnail = '<div class="pc-uppy-thumbnail"><img src="' + value.uploadURL + '"/></div>';
                }
                var sizeLabel = "bytes";
                var filesize = value.size;
                if (filesize > 1024) {
                    filesize = filesize / 1024;
                    sizeLabel = "kb";
                    if (filesize > 1024) {
                        filesize = filesize / 1024;
                        sizeLabel = "MB";
                    }
                }
                imagePreview += '<div class="pc-uppy-thumbnail-container" data-id="' + value.id + '">' + thumbnail + ' <span class="pc-uppy-thumbnail-label">' + value.name + ' (' + Math.round(filesize, 2) + ' ' +
                    sizeLabel + ')</span><span data-id="' + value.id + '" class="pc-uppy-remove-thumbnail"><i class="flaticon2-cancel-music"></i></span></div>';
            });

            $(id + ' .pc-uppy-thumbnails').append(imagePreview);
        });
        var uploadBtn = $(id + ' .pc-uppy-btn');
        uploadBtn.click(function() {
            uppyDrag.upload();
        });
        $(document).on('click', id + ' .pc-uppy-thumbnails .pc-uppy-remove-thumbnail', function() {
            var imageId = $(this).attr('data-id');
            uppyDrag.removeFile(imageId);
            $(id + ' .pc-uppy-thumbnail-container[data-id="' + imageId + '"').remove();
        });
    });
    $(function() {
        var elemId = 'pc-uppy-5';
        var id = '#' + elemId;
        var $statusBar = $(id + ' .pc-uppy-status');
        var $uploadedList = $(id + ' .pc-uppy-list');
        var timeout;
        var uppyMin = Uppy.Core({
            debug: true,
            autoProceed: true,
            showProgressDetails: true,
            restrictions: {
                maxFileSize: 1000000, // 1mb
                maxNumberOfFiles: 5,
                minNumberOfFiles: 1
            }
        });
        uppyMin.use(FileInput, {
            target: id + ' .pc-uppy-wrapper',
            pretty: false
        });
        uppyMin.use(Informer, {
            target: id + ' .pc-uppy-informer'
        });
        uppyMin.use(Tus, {
            endpoint: 'https://master.tus.io/files/'
        });
        uppyMin.use(StatusBar, {
            target: id + ' .pc-uppy-status',
            hideUploadButton: true,
            hideAfterFinish: false
        });
        $(id + ' .uppy-FileInput-input').addClass('pc-uppy-input-control d-none').attr('id', elemId + '_input_control');
        $(id + ' .uppy-FileInput-container').append('<label class="pc-uppy-input-label btn btn-light-primary" for="' + (elemId + '_input_control') + '">Choose files</label>');
        var $fileLabel = $(id + ' .pc-uppy-input-label');
        uppyMin.on('upload', function(data) {
            $fileLabel.text("Uploading...");
            $statusBar.addClass('pc-uppy-status--ongoing');
            $statusBar.removeClass('pc-uppy-status--hidden');
            clearTimeout(timeout);
        });
        uppyMin.on('complete', function(file) {
            $.each(file.successful, function(index, value) {
                var sizeLabel = "bytes";
                var filesize = value.size;
                if (filesize > 1024) {
                    filesize = filesize / 1024;
                    sizeLabel = "kb";
                    if (filesize > 1024) {
                        filesize = filesize / 1024;
                        sizeLabel = "MB";
                    }
                }
                var uploadListHtml = '<div class="pc-uppy-list-item" data-id="' + value.id + '"><div class="pc-uppy-list-label">' + value.name + ' (' + Math.round(filesize, 2) + ' ' + sizeLabel +
                    ')</div><span class="pc-uppy-list-remove" data-id="' + value.id + '"><i class="flaticon2-cancel-music"></i></span></div>';
                $uploadedList.append(uploadListHtml);
            });
            $fileLabel.text("Add more files");
            $statusBar.addClass('pc-uppy-status--hidden');
            $statusBar.removeClass('pc-uppy-status--ongoing');
        });
        $(document).on('click', id + ' .pc-uppy-list .pc-uppy-list-remove', function() {
            var itemId = $(this).attr('data-id');
            uppyMin.removeFile(itemId);
            $(id + ' .pc-uppy-list-item[data-id="' + itemId + '"').remove();
        });
    });
    $(function() {
        var id = '#pc-uppy-6';
        var options = {
            proudlyDisplayPoweredByUppy: false,
            target: id + ' .pc-uppy-dashboard',
            inline: false,
            replaceTargetContent: true,
            showProgressDetails: true,
            note: 'No filetype restrictions.',
            height: 470,
            metaFields: [{
                    id: 'name',
                    name: 'Name',
                    placeholder: 'file name'
                },
                {
                    id: 'caption',
                    name: 'Caption',
                    placeholder: 'describe what the image is about'
                }
            ],
            browserBackButtonClose: true,
            trigger: id + ' .pc-uppy-btn'
        }
        var uppyDashboard = Uppy.Core({
            autoProceed: true,
            restrictions: {
                maxFileSize: 1000000, // 1mb
                maxNumberOfFiles: 5,
                minNumberOfFiles: 1
            }
        });
        uppyDashboard.use(Dashboard, options);
        uppyDashboard.use(Tus, {
            endpoint: 'https://master.tus.io/files/'
        });
        uppyDashboard.use(GoogleDrive, {
            target: Dashboard,
            companionUrl: 'https://companion.uppy.io'
        });
        uppyDashboard.use(Dropbox, {
            target: Dashboard,
            companionUrl: 'https://companion.uppy.io'
        });
        uppyDashboard.use(Instagram, {
            target: Dashboard,
            companionUrl: 'https://companion.uppy.io'
        });
        uppyDashboard.use(Webcam, {
            target: Dashboard
        });
    });
</script>
@include('html.layouts.footer-bottom-link')</body>

</html>
