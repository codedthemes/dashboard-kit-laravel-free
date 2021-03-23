<!DOCTYPE html>
<html lang="en">
<head>
    @@include('./layouts/head.html')
    @@include('./layouts/head-bottom-link.html')
    <!-- cropper css -->
    <link rel="stylesheet" href="assets/css/plugins/cropper.min.css">
</head>
@@include('layouts/layout-vertical.html')
<!-- [ Main Content ] start -->
<section class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Image Cropper</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item">Image Cropper</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-sm-12">
                <!-- Image cropper plugin start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Image Cropper Plugin</h5>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="img-container m-b-4">
                                        <img id="image" src="assets/images/light-box/l1.jpg" alt="Crop Picture" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="docs-preview clearfix">
                                        <div class="img-preview preview-lg"></div>
                                        <div class="img-preview preview-md"></div>
                                        <div class="img-preview preview-sm"></div>
                                        <div class="img-preview preview-xs"></div>
                                    </div>
                                    <div class="docs-data">
                                        <div class="input-group">
                                            <label class="input-group-addon" for="dataX">X</label>
                                            <input type="text" class="form-control" id="dataX" placeholder="x">
                                        </div>
                                        <div class="input-group">
                                            <label class="input-group-addon" for="dataY">Y</label>
                                            <input type="text" class="form-control" id="dataY" placeholder="y">
                                        </div>
                                        <div class="input-group">
                                            <label class="input-group-addon" for="dataWidth">width</label>
                                            <input type="text" class="form-control" id="dataWidth" placeholder="width">
                                        </div>
                                        <div class="input-group">
                                            <label class="input-group-addon" for="dataHeight">height</label>
                                            <input type="text" class="form-control" id="dataHeight" placeholder="height">
                                        </div>
                                        <div class="input-group">
                                            <label class="input-group-addon" for="dataRotate">Rotate</label>
                                            <input type="text" class="form-control" id="dataRotate" placeholder="rotate">
                                        </div>
                                        <div class="input-group">
                                            <label class="input-group-addon" for="dataScaleX">ScaleX</label>
                                            <input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
                                        </div>
                                        <div class="input-group">
                                            <label class="input-group-addon" for="dataScaleY">ScaleY</label>
                                            <input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 docs-buttons button-page">
                                    <div class="btn-group">
                                        <button type="button" class="btn  btn-primary" data-method="setDragMode" data-option="move" title="Move">
                                            <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
                                                <span class="fas fa-expand-arrows-alt"></span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn  btn-primary" data-method="setDragMode" data-option="crop" title="Crop">
                                            <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
                                                <span class="fa fa-crop"></span>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn  btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
                                            <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, 0.1)">
                                                <span class="fa fa-search-plus"></span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn  btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
                                            <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, -0.1)">
                                                <span class="fa fa-search-minus"></span>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn  btn-primary" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
                                            <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;move&quot;, -10, 0)">
                                                <span class="feather icon-arrow-left"></span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn  btn-primary" data-method="move" data-option="10" data-second-option="0" title="Move Right">
                                            <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;move&quot;, 10, 0)">
                                                <span class="feather icon-arrow-right"></span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn  btn-primary" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
                                            <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, -10)">
                                                <span class="feather icon-arrow-up"></span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn  btn-primary" data-method="move" data-option="0" data-second-option="10" title="Move Down">
                                            <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, 10)">
                                                <span class="feather icon-arrow-down"></span>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn  btn-primary" data-method="rotate" data-option="-45" title="Rotate Left">
                                            <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, -45)">
                                                <span class="feather icon-rotate-ccw"></span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn  btn-primary" data-method="rotate" data-option="45" title="Rotate Right">
                                            <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, 45)">
                                                <span class="feather icon-rotate-cw"></span>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn  btn-primary" data-method="scaleX" data-option="-1" title="Flip Horizontal">
                                            <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;scaleX&quot;, -1)">
                                                <span class="fas fa-arrows-alt-h"></span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn  btn-primary" data-method="scaleY" data-option="-1" title="Flip Vertical">
                                            <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;scaleY&quot;-1)">
                                                <span class="fas fa-arrows-alt-v"></span>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn  btn-primary" data-method="crop" title="Crop">
                                            <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;crop&quot;)">
                                                <span class="fa fa-check"></span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn  btn-primary" data-method="clear" title="Clear">
                                            <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;clear&quot;)">
                                                <span class="fas fa-times"></span>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn  btn-primary" data-method="disable" title="Disable">
                                            <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;disable&quot;)">
                                                <span class="fa fa-lock"></span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn  btn-primary" data-method="enable" title="Enable">
                                            <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;enable&quot;)">
                                                <span class="fa fa-unlock"></span>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn  btn-primary" data-method="reset" title="Reset">
                                            <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;reset&quot;)">
                                                <span class="feather icon-refresh-cw"></span>
                                            </span>
                                        </button>
                                        <label class="btn  btn-primary btn-upload" for="inputImage" title="Upload image file">
                                            <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
                                            <span class="docs-tooltip" data-bs-toggle="tooltip" title="Import image with Blob URLs">
                                                <span class="fa fa-upload"></span>
                                            </span>
                                        </label>
                                        <button type="button" class="btn  btn-primary" data-method="destroy" title="Destroy">
                                            <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;destroy&quot;)">
                                                <span class="fa fa-power-off"></span>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="btn-group btn-group-crop">
                                        <button type="button" class="btn  btn-primary" data-method="getCroppedCanvas">
                                            <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;)">
                                                Get Cropped Canvas
                                            </span>
                                        </button>
                                        <button type="button" class="btn  btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
                                            <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 160, height: 90 })">
                                                160&times;90
                                            </span>
                                        </button>
                                        <button type="button" class="btn  btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
                                            <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 320, height: 180 })">
                                                320&times;180
                                            </span>
                                        </button>
                                    </div>
                                    <!-- Show the cropped image in modal -->
                                    <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="getCroppedCanvasTitle">Cropped</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                                </div>
                                                <div class="modal-body"></div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn  btn-default" data-bs-dismiss="modal">Close</button>
                                                    <a class="btn  btn-primary" id="download" href="javascript:void(0);" download="cropped.jpg">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.modal -->
                                    <button type="button" class="btn  btn-primary" data-method="getData" data-option data-bs-target="#putData">
                                        <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;getData&quot;)">
                                            Get Data
                                        </span>
                                    </button>
                                    <button type="button" class="btn  btn-primary" data-method="setData" data-bs-target="#putData">
                                        <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;setData&quot;, data)">
                                            Set Data
                                        </span>
                                    </button>
                                    <button type="button" class="btn  btn-primary" data-method="getContainerData" data-option data-bs-target="#putData">
                                        <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;getContainerData&quot;)">
                                            Get Container Data
                                        </span>
                                    </button>
                                    <button type="button" class="btn  btn-primary" data-method="getImageData" data-option data-bs-target="#putData">
                                        <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;getImageData&quot;)">
                                            Get Image Data
                                        </span>
                                    </button>
                                    <button type="button" class="btn  btn-primary" data-method="getCanvasData" data-option data-bs-target="#putData">
                                        <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;getCanvasData&quot;)">
                                            Get Canvas Data
                                        </span>
                                    </button>
                                    <button type="button" class="btn  btn-primary" data-method="setCanvasData" data-bs-target="#putData">
                                        <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;setCanvasData&quot;, data)">
                                            Set Canvas Data
                                        </span>
                                    </button>
                                    <button type="button" class="btn  btn-primary" data-method="getCropBoxData" data-option data-bs-target="#putData">
                                        <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;getCropBoxData&quot;)">
                                            Get Crop Box Data
                                        </span>
                                    </button>
                                    <button type="button" class="btn  btn-primary" data-method="setCropBoxData" data-bs-target="#putData">
                                        <span class="docs-tooltip" data-bs-toggle="tooltip" title="$().cropper(&quot;setCropBoxData&quot;, data)">
                                            Set Crop Box Data
                                        </span>
                                    </button>
                                    <button type="button" class="btn  btn-primary" data-method="moveTo" data-option="0">
                                        <span class="docs-tooltip" data-bs-toggle="tooltip" title="cropper.moveTo(0)">
                                            0,0
                                        </span>
                                    </button>
                                    <button type="button" class="btn  btn-primary" data-method="zoomTo" data-option="1">
                                        <span class="docs-tooltip" data-bs-toggle="tooltip" title="cropper.zoomTo(1)">
                                            100%
                                        </span>
                                    </button>
                                    <button type="button" class="btn  btn-primary" data-method="rotateTo" data-option="180">
                                        <span class="docs-tooltip" data-bs-toggle="tooltip" title="cropper.rotateTo(180)">
                                            180°
                                        </span>
                                    </button>
                                    <div>
                                        <input type="text" class="form-control m-b-10" id="putData" placeholder="Get data to here or set data with this value">
                                    </div>
                                </div>
                                <!-- /.docs-buttons -->
                                <div class="col-md-3 docs-toggles crop-toggle">
                                    <div class="dropdown dropup docs-options">
                                        <button type="button" class="btn  btn-primary btn-block dropdown-toggle" id="toggleOptions" data-bs-toggle="dropdown" aria-expanded="true">
                                            Toggle Options
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="toggleOptions" role="menu">
                                            <li role="presentation">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="responsive" checked> responsive
                                                </label>
                                            </li>
                                            <li role="presentation">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="restore" checked> restore
                                                </label>
                                            </li>
                                            <li role="presentation">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="checkCrossOrigin" checked> checkCrossOrigin
                                                </label>
                                            </li>
                                            <li role="presentation">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="checkOrientation" checked> checkOrientation
                                                </label>
                                            </li>
                                            <li role="presentation">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="modal" checked> modal
                                                </label>
                                            </li>
                                            <li role="presentation">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="guides" checked> guides
                                                </label>
                                            </li>
                                            <li role="presentation">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="center" checked> center
                                                </label>
                                            </li>
                                            <li role="presentation">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="highlight" checked> highlight
                                                </label>
                                            </li>
                                            <li role="presentation">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="background" checked> background
                                                </label>
                                            </li>
                                            <li role="presentation">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="autoCrop" checked> autoCrop
                                                </label>
                                            </li>
                                            <li role="presentation">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="movable" checked> movable
                                                </label>
                                            </li>
                                            <li role="presentation">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="rotatable" checked> rotatable
                                                </label>
                                            </li>
                                            <li role="presentation">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="scalable" checked> scalable
                                                </label>
                                            </li>
                                            <li role="presentation">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="zoomable" checked> zoomable
                                                </label>
                                            </li>
                                            <li role="presentation">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="zoomOnTouch" checked> zoomOnTouch
                                                </label>
                                            </li>
                                            <li role="presentation">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="zoomOnWheel" checked> zoomOnWheel
                                                </label>
                                            </li>
                                            <li role="presentation">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="cropBoxMovable" checked> cropBoxMovable
                                                </label>
                                            </li>
                                            <li role="presentation">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="cropBoxResizable" checked> cropBoxResizable
                                                </label>
                                            </li>
                                            <li role="presentation">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="toggleDragModeOnDblclick" checked> toggleDragModeOnDblclick
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.dropdown -->
                                </div>
                                <!-- /.docs-toggles -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Image cropper plugin end -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- Basic usage card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Usage</h5>
                    </div>
                    <div class="card-body">
                        <div class="panel panel-flat">
                            <div class="panel-body">
                                <p class="content-group">This is the most basic example of <code>cropper</code> implementation. By default cropping area is centered and takes 80% of image space. The image is
                                    resizable, but should be wrapped in
                                    block element with fixed height.</p>
                                <div class="image-cropper-container"><img src="assets/images/light-box/l1.jpg" alt="" class="crop-basic img-fluid"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic usage card end -->
            </div>
            <div class="col-md-6">
                <!-- Hidden overlay card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Hidden Overlay</h5>
                    </div>
                    <div class="card-body">
                        <div class="panel panel-flat">
                            <div class="panel-body">
                                <p class="content-group">This example demonstrates default options, but with hidden black modal layer above the cropper. To hide the modal set <code>modal</code> option to <code>false</code>.
                                    If visible, modal color
                                    can be easily changed in css.</p>
                                <div class="image-cropper-container"><img src="assets/images/light-box/l1.jpg" alt="" class="crop-modal img-fluid"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hidden overlay card end -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- Fixed position card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Fixed Position</h5>
                    </div>
                    <div class="card-body">
                        <div class="panel panel-flat">
                            <div class="panel-body">
                                <p class="content-group">This example demonstrates cropped area that has <code>fixed position</code> and can't be moved. Although it isn't movable, other options remain available:
                                    resize, dragging, callbacks, aspect
                                    ratios, modal etc.</p>
                                <div class="image-cropper-container">
                                    <img src="assets/images/light-box/l1.jpg" alt="" class="crop-not-movable img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fixed position card end -->
            </div>
            <div class="col-md-6">
                <!-- Fixed size card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Fixed Size</h5>
                    </div>
                    <div class="card-body">
                        <div class="panel panel-flat">
                            <div class="panel-body">
                                <p class="content-group">This example demonstrates cropped area that has <code>fixed size</code> and can't be resized. Although it isn't resizable, other options remain available:
                                    moving, dragging, callbacks, aspect
                                    ratios, modal etc.</p>
                                <div class="image-cropper-container">
                                    <img src="assets/images/light-box/l1.jpg" alt="" class="crop-not-resizable img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fixed size card end -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- Disabled autocrop card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Disabled Autocrop</h5>
                    </div>
                    <div class="card-body">
                        <div class="panel panel-flat">
                            <div class="panel-body">
                                <p class="content-group">In this example cropping zone is not rendered automatically when initialize and available only on a new drag. By default, cropping zone is always <code>visible</code>
                                    and can be hidden by
                                    setting <code>autoCrop</code> option to <code>false</code>.</p>
                                <div class="image-cropper-container"><img src="assets/images/light-box/l1.jpg" alt="" class="crop-auto img-fluid"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Disabled autocrop card end -->
            </div>
            <div class="col-md-6">
                <!-- Disabled image drag card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Disabled Image Drag</h5>
                    </div>
                    <div class="card-body">
                        <div class="panel panel-flat">
                            <div class="panel-body">
                                <p class="content-group">In this example the user can't drag the image within container, but can drag cropping area.. By default, this feature is disabled and can be enabled by setting
                                    <code>movable</code> option
                                    to <code>false</code>.</p>
                                <div class="image-cropper-container"><img src="assets/images/light-box/l1.jpg" alt="" class="crop-drag img-fluid"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Disabled image drag card end -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- Fixed 16:9 ratio card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Fixed 16:9 Ratio</h5>
                    </div>
                    <div class="card-body">
                        <div class="panel panel-flat">
                            <div class="panel-body">
                                <p class="content-group">Thix example demonstrates fixed <code>16:9</code> dragging (selection) ratio. By default, aspect ratio isn't specified and is free. Optional aspect ratios are
                                    also available and can be specified
                                    using <code>aspectRatio</code> option.</p>
                                <div class="image-cropper-container"><img src="assets/images/light-box/l1.jpg" alt="" class="crop-16-9 img-fluid"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fixed 16:9 ratio card end -->
            </div>
            <div class="col-md-6">
                <!-- Fixed 4:3 ratio card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Fixed 4:3 Ratio</h5>
                    </div>
                    <div class="card-body">
                        <div class="panel panel-flat">
                            <div class="panel-body">
                                <p class="content-group">Thix example demonstrates fixed <code>4:3</code> dragging (selection) ratio. By default, aspect ratio isn't specified and is free. Optional aspect ratios are
                                    also available and can be specified
                                    using <code>aspectRatio</code> option.</p>
                                <div class="image-cropper-container"><img src="assets/images/light-box/l1.jpg" alt="" class="crop-4-3 img-fluid"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fixed 4:3 ratio card end -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- Minimum zone size card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Minimum Zone Size</h5>
                    </div>
                    <div class="card-body">
                        <div class="panel panel-flat">
                            <div class="panel-body">
                                <p class="content-group">This example demonstrates the <code>minimum</code> width and height (px of original image) of the cropping zone. Better use this option only when you are sure
                                    that the image has this <code>minimum</code> width and height. By default, both values aren't specified.</p>
                                <div class="image-cropper-container"><img src="assets/images/light-box/l1.jpg" alt="" class="crop-min img-fluid"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Minimum zone size card end -->
            </div>
            <div class="col-md-6">
                <!-- Disabled zoom card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Disabled Zoom</h5>
                    </div>
                    <div class="card-body">
                        <div class="panel panel-flat">
                            <div class="panel-body">
                                <p class="content-group">This example demonstrates the ability to disable <code>zoom</code> feature, it works in both options: disables zoom on scroll and zoom on touch. By default,
                                    image cropper is zoomable, to
                                    disable zooming set <code>zoomable</code> option to <code>false</code>.</p>
                                <div class="image-cropper-container"><img src="assets/images/light-box/l1.jpg" alt="" class="crop-zoomable img-fluid"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Disabled zoom card end -->
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
@@include('./layouts/footer.html')
<!-- cropper js -->
<script src="assets/js/plugins/cropper.min.js"></script>
<script src="assets/js/pages/page-croper.js"></script>
@@include('./layouts/footer-bottom-link.html')
</body>
</html>
