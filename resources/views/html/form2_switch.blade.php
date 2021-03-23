<!DOCTYPE html>
<html lang="en">

<head>
    @@include('./layouts/head.html')
    @@include('./layouts/head-bottom-link.html')
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
                            <h5 class="m-b-10">Switch</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item">Switch</li>
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
                <div class="card">
                    <div class="card-header">
                        <h5>Switch [ v1 ]</h5>
                    </div>
                    <div class="card-body">
                        <div class="row switch-demo">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Color States</label>
                                    <div class="form-check form-switch custom-switch-v1">
                                        <input type="checkbox" class="form-check-input input-primary" id="customswitchv1-1" checked>
                                        <label class="form-check-label" for="customswitchv1-1">primary</label>
                                    </div>
                                    <div class="form-check form-switch custom-switch-v1">
                                        <input type="checkbox" class="form-check-input input-secondary" id="customswitchv1-2" checked>
                                        <label class="form-check-label" for="customswitchv1-2">secondary</label>
                                    </div>
                                    <div class="form-check form-switch custom-switch-v1">
                                        <input type="checkbox" class="form-check-input input-success" id="customswitchv1-3" checked>
                                        <label class="form-check-label" for="customswitchv1-3">success</label>
                                    </div>
                                    <div class="form-check form-switch custom-switch-v1">
                                        <input type="checkbox" class="form-check-input input-danger" id="customswitchv1-4" checked>
                                        <label class="form-check-label" for="customswitchv1-4">danger</label>
                                    </div>
                                    <div class="form-check form-switch custom-switch-v1">
                                        <input type="checkbox" class="form-check-input input-warning" id="customswitchv1-5" checked>
                                        <label class="form-check-label" for="customswitchv1-5">warning</label>
                                    </div>
                                    <div class="form-check form-switch custom-switch-v1">
                                        <input type="checkbox" class="form-check-input input-info" id="customswitchv1-6" checked>
                                        <label class="form-check-label" for="customswitchv1-6">info</label>
                                    </div>
                                    <div class="form-check form-switch custom-switch-v1">
                                        <input type="checkbox" class="form-check-input input-dark" id="customswitchv1-7" checked>
                                        <label class="form-check-label" for="customswitchv1-7">dark</label>
                                    </div>
                                    <small class="form-text text-muted">Some help text goes here</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Color States</label>
                                    <div class="form-check form-switch custom-switch-v1">
                                        <input type="checkbox" class="form-check-input input-light-primary" id="customswitchlightv1-1" checked>
                                        <label class="form-check-label" for="customswitchlightv1-1">primary</label>
                                    </div>
                                    <div class="form-check form-switch custom-switch-v1">
                                        <input type="checkbox" class="form-check-input input-light-secondary" id="customswitchlightv1-2" checked>
                                        <label class="form-check-label" for="customswitchlightv1-2">secondary</label>
                                    </div>
                                    <div class="form-check form-switch custom-switch-v1">
                                        <input type="checkbox" class="form-check-input input-light-success" id="customswitchlightv1-3" checked>
                                        <label class="form-check-label" for="customswitchlightv1-3">success</label>
                                    </div>
                                    <div class="form-check form-switch custom-switch-v1">
                                        <input type="checkbox" class="form-check-input input-light-danger" id="customswitchlightv1-4" checked>
                                        <label class="form-check-label" for="customswitchlightv1-4">danger</label>
                                    </div>
                                    <div class="form-check form-switch custom-switch-v1">
                                        <input type="checkbox" class="form-check-input input-light-warning" id="customswitchlightv1-5" checked>
                                        <label class="form-check-label" for="customswitchlightv1-5">warning</label>
                                    </div>
                                    <div class="form-check form-switch custom-switch-v1">
                                        <input type="checkbox" class="form-check-input input-light-info" id="customswitchlightv1-6" checked>
                                        <label class="form-check-label" for="customswitchlightv1-6">info</label>
                                    </div>
                                    <div class="form-check form-switch custom-switch-v1">
                                        <input type="checkbox" class="form-check-input input-light-dark" id="customswitchlightv1-7" checked>
                                        <label class="form-check-label" for="customswitchlightv1-7">dark</label>
                                    </div>
                                    <small class="form-text text-muted">Some help text goes here</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Checkbox</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label>Default Switchs</label>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckdef1">
                                    <label class="form-check-label" for="customCheckdef1">Default</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckdef2">
                                    <label class="form-check-label" for="customCheckdef2">Option 2</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckdef3" disabled>
                                    <label class="form-check-label" for="customCheckdef3">Disabled</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckdef4" checked>
                                    <label class="form-check-label" for="customCheckdef4">Checked</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-block">Inline Switchs</label>
                                <div class="form-check form-switch custom-control-inline">
                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckinl1">
                                    <label class="form-check-label" for="customCheckinl1">Inline 1</label>
                                </div>
                                <div class="form-check form-switch custom-control-inline">
                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckinl2">
                                    <label class="form-check-label" for="customCheckinl2">Inline 2</label>
                                </div>
                                <div class="form-check form-switch custom-control-inline">
                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckinl3">
                                    <label class="form-check-label" for="customCheckinl3">Inline 3</label>
                                </div>
                                <small class="form-text text-muted">Some help text goes here</small>
                            </div>
                            <div class="form-group">
                                <label class="d-block">Inline Switchs Checked State</label>
                                <div class="form-check form-switch custom-control-inline">
                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckinl4" checked>
                                    <label class="form-check-label" for="customCheckinl4">Inline 1</label>
                                </div>
                                <div class="form-check form-switch custom-control-inline">
                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckinl5">
                                    <label class="form-check-label" for="customCheckinl5">Inline 2</label>
                                </div>
                                <div class="form-check form-switch custom-control-inline">
                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckinl6" checked>
                                    <label class="form-check-label" for="customCheckinl6">Inline 3</label>
                                </div>
                                <small class="form-text text-muted">Some help text goes here</small>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Horizontal Form</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Switchs</label>
                                <div class="col-9">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input input-primary" id="customCheckdefh1">
                                        <label class="form-check-label" for="customCheckdefh1">Default</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input input-primary" id="customCheckdefh2">
                                        <label class="form-check-label" for="customCheckdefh2">Option 2</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input input-primary" id="customCheckdefh3" disabled>
                                        <label class="form-check-label" for="customCheckdefh3">Disabled</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input input-primary" id="customCheckdefh4" checked>
                                        <label class="form-check-label" for="customCheckdefh4">Checked</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Inline Switchs</label>
                                <div class="col-9">
                                    <div class="form-check form-switch custom-control-inline">
                                        <input type="checkbox" class="form-check-input input-primary" id="customCheckinlh1">
                                        <label class="form-check-label" for="customCheckinlh1">Inline 1</label>
                                    </div>
                                    <div class="form-check form-switch custom-control-inline">
                                        <input type="checkbox" class="form-check-input input-primary" id="customCheckinlh2">
                                        <label class="form-check-label" for="customCheckinlh2">Inline 2</label>
                                    </div>
                                    <div class="form-check form-switch custom-control-inline">
                                        <input type="checkbox" class="form-check-input input-primary" id="customCheckinlh3">
                                        <label class="form-check-label" for="customCheckinlh3">Inline 3</label>
                                    </div>
                                    <small class="form-text text-muted">Some help text goes here</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Inline Switchs State</label>
                                <div class="col-9">
                                    <div class="form-check form-switch custom-control-inline">
                                        <input type="checkbox" class="form-check-input input-primary" id="customCheckinlh4" checked>
                                        <label class="form-check-label" for="customCheckinlh4">Inline 1</label>
                                    </div>
                                    <div class="form-check form-switch custom-control-inline">
                                        <input type="checkbox" class="form-check-input input-primary" id="customCheckinlh5">
                                        <label class="form-check-label" for="customCheckinlh5">Inline 2</label>
                                    </div>
                                    <div class="form-check form-switch custom-control-inline">
                                        <input type="checkbox" class="form-check-input input-primary" id="customCheckinlh6" checked>
                                        <label class="form-check-label" for="customCheckinlh6">Inline 3</label>
                                    </div>
                                    <small class="form-text text-muted">Some help text goes here</small>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Color Options</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label>Small Switchs</label>
                                <div class="form-check form-switch switch-sm">
                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckdefcol1">
                                    <label class="form-check-label" for="customCheckdefcol1">Default</label>
                                </div>
                                <div class="form-check form-switch switch-sm">
                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckdefcol2">
                                    <label class="form-check-label" for="customCheckdefcol2">Option 2</label>
                                </div>
                                <div class="form-check form-switch switch-sm">
                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckdefcol3" disabled>
                                    <label class="form-check-label" for="customCheckdefcol3">Disabled</label>
                                </div>
                                <div class="form-check form-switch switch-sm">
                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckdefcol4" checked>
                                    <label class="form-check-label" for="customCheckdefcol4">Checked</label>
                                </div>
                                <small class="form-text text-muted">Some help text goes here</small>
                            </div>
                            <div class="form-group">
                                <label>Large Switchs</label>
                                <div class="form-check form-switch switch-lg">
                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckdefout1">
                                    <label class="form-check-label" for="customCheckdefout1">Default</label>
                                </div>
                                <div class="form-check form-switch switch-lg">
                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckdefout2">
                                    <label class="form-check-label" for="customCheckdefout2">Option 2</label>
                                </div>
                                <div class="form-check form-switch switch-lg">
                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckdefout3" disabled>
                                    <label class="form-check-label" for="customCheckdefout3">Disabled</label>
                                </div>
                                <div class="form-check form-switch switch-lg">
                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckdefout4" checked>
                                    <label class="form-check-label" for="customCheckdefout4">Checked</label>
                                </div>
                                <small class="form-text text-muted">Some help text goes here</small>
                            </div>
                            <div class="form-group">
                                <label>Color States</label>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckc1" checked>
                                    <label class="form-check-label" for="customCheckc1">primary</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input input-secondary" id="customCheckc2" checked>
                                    <label class="form-check-label" for="customCheckc2">secondary</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input input-success" id="customCheckc3" checked>
                                    <label class="form-check-label" for="customCheckc3">success</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input input-danger" id="customCheckc4" checked>
                                    <label class="form-check-label" for="customCheckc4">danger</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input input-warning" id="customCheckc5" checked>
                                    <label class="form-check-label" for="customCheckc5">warning</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input input-info" id="customCheckc6" checked>
                                    <label class="form-check-label" for="customCheckc6">info</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input input-dark" id="customCheckc7" checked>
                                    <label class="form-check-label" for="customCheckc7">dark</label>
                                </div>
                                <small class="form-text text-muted">Some help text goes here</small>
                            </div>
                            <div class="form-group">
                                <label>Color States</label>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input input-light-primary" id="customCheckclight1" checked>
                                    <label class="form-check-label" for="customCheckclight1">primary</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input input-light-secondary" id="customCheckclight2" checked>
                                    <label class="form-check-label" for="customCheckclight2">secondary</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input input-light-success" id="customCheckclight3" checked>
                                    <label class="form-check-label" for="customCheckclight3">success</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input input-light-danger" id="customCheckclight4" checked>
                                    <label class="form-check-label" for="customCheckclight4">danger</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input input-light-warning" id="customCheckclight5" checked>
                                    <label class="form-check-label" for="customCheckclight5">warning</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input input-light-info" id="customCheckclight6" checked>
                                    <label class="form-check-label" for="customCheckclight6">info</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input input-light-dark" id="customCheckclight7" checked>
                                    <label class="form-check-label" for="customCheckclight7">dark</label>
                                </div>
                                <small class="form-text text-muted">Some help text goes here</small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
@@include('./layouts/footer.html')
@@include('./layouts/footer-bottom-link.html')
</body>

</html>
