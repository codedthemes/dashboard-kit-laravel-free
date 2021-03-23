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
                            <h5 class="m-b-10">Task Detail</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Task</a></li>
                            <li class="breadcrumb-item">Task Detail</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ task-detail-left ] start -->
            <div class="col-xxl-3 col-xl-4 col-lg-12">
                <div class="card">
                    <div class="card-body bg-light-danger">
                        <div class="counter text-center">
                            <h4 id="timer" class="text-danger m-0"></h4>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Task Details</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between">
                            <div class="h6 m-0"><i class="material-icons-two-tone f-20 text-primary">library_books</i> Project :</div>
                            <div><a class="link-secondary" href="#!"> Singular app</a></div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div class="h6 m-0"><i class="material-icons-two-tone f-20 text-primary">home_work</i> Updated :</div>
                            <div>12 May, 2020</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div class="h6 m-0"><i class="material-icons-two-tone f-20 text-primary">history_edu</i> Created :</div>
                            <div>25 Feb, 2019</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div class="h6 m-0"><i class="material-icons-two-tone f-20 text-primary">emoji_flags</i> Priority :</div>
                            <div><i class="material-icons-two-tone f-20">arrow_circle_up</i> Highest</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div class="h6 m-0"><i class="material-icons-two-tone f-20 text-primary">rotate_90_degrees_ccw</i> Revisions :</div>
                            <div>29</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div class="h6 m-0"><i class="material-icons-two-tone f-20 text-primary">account_circle</i> Added by :</div>
                            <div>Winnie</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div class="h6 m-0"><i class="material-icons-two-tone f-20 text-primary">settings_input_hdmi</i> Status :</div>
                            <div>Published</div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Attached Files</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <i class="far fa-file-word f-28 text-primary"></i>
                                    </div>
                                    <div class="col">
                                        <a href="#!"><span class="h6">Overdrew_scowled.doc</span></a>
                                        <small class="text-muted d-block">Size: 1.2Mb | Added by: Winnie</small>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="#!" class="link-secondary"><i class="material-icons-two-tone f-26">cloud_download</i></a>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <i class="far fa-file-powerpoint f-28 text-danger"></i>
                                    </div>
                                    <div class="col">
                                        <a href="#!"><span class="h6">And_less_matern.ppt</span></a>
                                        <small class="text-muted d-block">Size: 0.11Mb | Added by: Eugene</small>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="#!" class="link-secondary"><i class="material-icons-two-tone f-26">cloud_download</i></a>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <i class="far fa-file-pdf f-28 text-warning"></i>
                                    </div>
                                    <div class="col">
                                        <a href="#!"><span class="h6">The_less_overslept.pdf</span></a>
                                        <small class="text-muted d-block">Size: 5.9Mb | Added by: Natalie</small>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="#!" class="link-secondary"><i class="material-icons-two-tone f-26">cloud_download</i></a>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <i class="far fa-file-excel f-28 text-success"></i>
                                    </div>
                                    <div class="col">
                                        <a href="#!"><span class="h6">Well_equitably.exls</span></a>
                                        <small class="text-muted d-block">Size: 20.9Mb | Added by: Jenny</small>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="#!" class="link-secondary"><i class="material-icons-two-tone f-26">cloud_download</i></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Assigned Users</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="row align-items-center">
                                <div class="col-auto pr-0">
                                    <a href="#!"><img class="img-fluid img-radius wid-45" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image"></a>
                                </div>
                                <div class="col">
                                    <a href="#!" class="link-secondary"><span class="h6">Sortino media</span></a>
                                    <small class="text-muted d-block">Software Engineer</small>
                                </div>
                            </div>
                            <div>
                                <a href="#!" class="link-secondary"><i class="material-icons-two-tone f-26 text-primary">chevron_right</i></a>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="row align-items-center">
                                <div class="col-auto pr-0">
                                    <a href="#!"><img class="img-fluid img-radius wid-45" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image"></a>
                                </div>
                                <div class="col">
                                    <a href="#!" class="link-secondary"><span class="h6">Larry heading</span></a>
                                    <small class="text-muted d-block">Web Designer</small>
                                </div>
                            </div>
                            <div>
                                <a href="#!" class="link-secondary"><i class="material-icons-two-tone f-26 text-primary">chevron_right</i></a>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="row align-items-center">
                                <div class="col-auto pr-0">
                                    <a href="#!"><img class="img-fluid img-radius wid-45" src="assets/images/user/avatar-3.jpg" alt="Generic placeholder image"></a>
                                </div>
                                <div class="col">
                                    <a href="#!" class="link-secondary"><span class="h6">Mark</span></a>
                                    <small class="text-muted d-block">Chief Financial Officer (CFO)</small>
                                </div>
                            </div>
                            <div>
                                <a href="#!" class="link-secondary"><i class="material-icons-two-tone f-26 text-primary">chevron_right</i></a>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="row align-items-center">
                                <div class="col-auto pr-0">
                                    <a href="#!"><img class="img-fluid img-radius wid-45" src="assets/images/user/avatar-4.jpg" alt="Generic placeholder image"></a>
                                </div>
                                <div class="col">
                                    <a href="#!" class="link-secondary"><span class="h6">John Doe</span></a>
                                    <small class="text-muted d-block">Senior Marketing Designer</small>
                                </div>
                            </div>
                            <div>
                                <a href="#!" class="link-secondary"><i class="material-icons-two-tone f-26 text-primary">chevron_right</i></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Task settings</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="switch-1" checked>
                                <label class="form-check-label" for="switch-1">Publish after save</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="switch-2" checked>
                                <label class="form-check-label" for="switch-2">Allow comments</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="switch-3" checked>
                                <label class="form-check-label" for="switch-3">Allow users to edit the task</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="switch-4">
                                <label class="form-check-label" for="switch-4">Use task timer</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="switch-5">
                                <label class="form-check-label" for="switch-5">Auto saving</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="switch-6">
                                <label class="form-check-label" for="switch-6">Allow attachments</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <button type="button" class="btn btn-sm btn-light-secondary">Reset</button>
                            <button type="button" class="btn btn-sm btn-light-primary">Save</button>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- [ task-detail-left ] end -->
            <!-- [ task-detail-right ] start -->
            <div class="col-xxl-9 col-xl-8 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5><i class="material-icons-two-tone f-20 text-primary">phonelink</i> #24. Create UI design model</h5>
                        <button class="btn btn-light-primary btn-sm"><i class="far fa-bell m-r-5"></i>Check in</button>
                    </div>
                    <div class="card-body border-bottom">
                        <p class="m-0">A collection of textile samples lay <b>spread out</b> on the table One morning, when <b>Gregor Samsa</b> woke from troubled Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown
                            printer...</p>
                    </div>
                    <div class="card-body py-3 border-bottom">
                        <div class="row">
                            <div class="col-sm-6 my-1">
                                <div class="h6 d-inline-block"><i class="material-icons-two-tone f-18 text-primary">calendar_today</i> Date: </div>
                                28 January, 2020
                            </div>
                            <div class="col-sm-6 my-1">
                                <div class="h6 d-inline-block"><i class="material-icons-two-tone f-18 text-primary">leaderboard</i> Priority: </div>
                                <span class="badge bg-light-danger">Highest</span>
                            </div>
                            <div class="col-sm-6 my-1">
                                <div class="h6 d-inline-block"><i class="material-icons-two-tone text-primary f-18">account_circle</i> Assign to: </div>
                                <img class="img-fluid img-radius wid-20 me-2" src="assets/images/user/avatar-2.jpg" alt="1">Joseph William
                            </div>
                            <div class="col-sm-6 my-1">
                                <div class="h6 d-inline-block"><i class="material-icons-two-tone text-primary f-18">timer</i> Due: </div>
                                <span class="badge bg-light-warning">23 hours</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-bottom">
                        <div class="h6">Overview :</div>
                        <p class="m-0 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                            and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="card-body border-bottom">
                        <div class="h6">What we need :</div>
                        <p class="text-muted mb-md-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type
                            and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="h6 m-b-10">
                                    <span class="wid-25 hei-25 me-2 rounded bg-primary text-white d-inline-flex align-items-center justify-content-center">1</span> Design simple layouts
                                </div>
                                <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            </div>
                            <div class="col-md-6">
                                <div class="h6 m-b-10">
                                    <span class="wid-25 hei-25 me-2 rounded bg-primary text-white d-inline-flex align-items-center justify-content-center">2</span> Make responsive of it
                                </div>
                                <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-bottom">
                        <div class="h6">Requirements :</div>
                        <p class="m-0 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                            and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                    <div class="card-body pb-3">
                        <div class="h6 mb-0">Sub task directory:</div>
                    </div>
                    <div class="card-body table-body pb-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input class="form-check-input f-14" type="checkbox" id="subtaskhead">
                                                <label class="form-check-label" for="subtaskhead">Task</label>
                                            </div>
                                        </th>
                                        <th>Due Date</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check f-14">
                                                <input class="form-check-input" type="checkbox" id="subtasklist1">
                                                <label class="form-check-label" for="subtasklist1"><span class="m-0 h6">Design mockup</span></label>
                                            </div>
                                        </td>
                                        <td><i class="material-icons-two-tone f-18 text-primary">calendar_today</i> 22 December, 20</td>
                                        <td class="text-muted">The standard Lorem Ipsum</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check f-14">
                                                <input class="form-check-input" type="checkbox" id="subtasklist2">
                                                <label class="form-check-label" for="subtasklist2"><span class="m-0 h6">Software Engineer</span></label>
                                            </div>
                                        </td>
                                        <td><i class="material-icons-two-tone f-18 text-primary">calendar_today</i> 01 December, 20</td>
                                        <td class="text-muted">The standard Lorem Ipsum</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check f-14">
                                                <input class="form-check-input" type="checkbox" id="subtasklist3">
                                                <label class="form-check-label" for="subtasklist3"><span class="m-0 h6">Photoshop &amp; Illustrator</span></label>
                                            </div>
                                        </td>
                                        <td><i class="material-icons-two-tone f-18 text-primary">calendar_today</i> 15 December, 20</td>
                                        <td class="text-muted">The standard Lorem Ipsum</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check f-14">
                                                <input class="form-check-input" type="checkbox" id="subtasklist4">
                                                <label class="form-check-label" for="subtasklist4"><span class="m-0 h6">Allocated Resource</span></label>
                                            </div>
                                        </td>
                                        <td><i class="material-icons-two-tone f-18 text-primary">calendar_today</i> 28 December, 20</td>
                                        <td class="text-muted">The standard Lorem Ipsum</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check f-14">
                                                <input class="form-check-input" type="checkbox" id="subtasklist5">
                                                <label class="form-check-label" for="subtasklist5"><span class="m-0 h6">Financial Controlle</span></label>
                                            </div>
                                        </td>
                                        <td><i class="material-icons-two-tone f-18 text-primary">calendar_today</i> 20 December, 20</td>
                                        <td class="text-muted">The standard Lorem Ipsum</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5><i class="material-icons-two-tone f-20 text-primary">design_services</i> Edit task details</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 d-flex align-items-center my-1">
                                <div class="h6 mb-0 me-2"><i class="material-icons-two-tone f-20 text-primary">settings_input_composite</i> priority :</div>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-light-success dropdown-toggle" data-bs-toggle="dropdown">Normal</button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#!"><span class="fas fa-circle text-danger f-10 me-2"></span> Highest priority</a>
                                        <a class="dropdown-item" href="#!"><span class="fas fa-circle text-warning f-10 me-2"></span> High priority</a>
                                        <a class="dropdown-item active" href="#!"><span class="fas fa-circle text-success f-10 me-2"></span> Normal priority</a>
                                        <a class="dropdown-item" href="#!"><span class="fas fa-circle text-info f-10 me-2"></span> Low priority</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex align-items-center my-1">
                                <div class="h6 mb-0 me-2"><i class="material-icons-two-tone f-20 text-primary">hourglass_top</i> Status :</div>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-light-primary dropdown-toggle" data-bs-toggle="dropdown">Open</button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#!">Open</a>
                                        <a class="dropdown-item active" href="#!">On hold</a>
                                        <a class="dropdown-item" href="#!">Resolved</a>
                                        <a class="dropdown-item" href="#!">Closed</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Dublicate</a>
                                        <a class="dropdown-item" href="#!">Invalid</a>
                                        <a class="dropdown-item" href="#!">Wontfix</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex align-items-center my-1">
                                <div class="h6 mb-0 me-2"><i class="material-icons-two-tone f-20 text-primary">emoji_flags</i> action :</div>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-light-primary dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-bars"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#!">Check in</a>
                                        <a class="dropdown-item" href="#!">Attach screenshot</a>
                                        <a class="dropdown-item" href="#!">Reassign</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Edit task</a>
                                        <a class="dropdown-item" href="#!">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5><i class="material-icons-two-tone f-20 text-primary">chrome_reader_mode</i> Comments</h5>
                        <button type="button" class="btn btn-icon btn-light-primary btn-sm"><i class="fas fa-plus"></i> Add</button>
                    </div>
                    <div class="card-body border-bottom">
                        <div class="row">
                            <div class="col-auto me-0">
                                <img class="img-fluid img-radius wid-45 img-thumbnail" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                            </div>
                            <div class="col">
                                <div class="h6">Larry heading <span class="f-12 text-muted ms-1"><i data-feather="clock" class="wid-15 hei-15"></i> 15 min ago</span></div>
                                <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                <a href="#!" class="me-2 link-primary"><i class="material-icons-two-tone f-16 text-primary">textsms</i> Reply</a>
                                <a href="#!" class="me-2 link-success"><i class="material-icons-two-tone f-16 text-success">edit</i> Edit</a>
                                <a href="#!" class="me-2 link-danger"><i class="material-icons-two-tone f-16 text-danger">delete</i> Delete</a>
                                <hr>
                                <div class="row">
                                    <div class="col-auto me-0">
                                        <img class="img-fluid img-radius wid-45 img-thumbnail" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                    </div>
                                    <div class="col">
                                        <div class="h6">Joseph William <span class="f-12 text-muted ms-1"><i data-feather="clock" class="wid-15 hei-15"></i> 12 min ago</span></div>
                                        <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                        <a href="#!" class="me-2 link-primary"><i class="material-icons-two-tone f-16 text-primary">textsms</i> Reply</a>
                                        <a href="#!" class="me-2 link-success"><i class="material-icons-two-tone f-16 text-success">edit</i> Edit</a>
                                        <a href="#!" class="me-2 link-danger"><i class="material-icons-two-tone f-16 text-danger">delete</i> Delete</a>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto me-0">
                                <img class="img-fluid img-radius wid-45 img-thumbnail" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                            </div>
                            <div class="col">
                                <div class="h6">Joseph William <span class="f-12 text-muted ms-1"><i data-feather="clock" class="wid-15 hei-15"></i> Just now</span></div>
                                <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                <a href="#!" class="me-2 link-primary"><i class="material-icons-two-tone f-16 text-primary">textsms</i> Reply</a>
                                <a href="#!" class="me-2 link-success"><i class="material-icons-two-tone f-16 text-success">edit</i> Edit</a>
                                <a href="#!" class="me-2 link-danger"><i class="material-icons-two-tone f-16 text-danger">delete</i> Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Add New Comments...">
                            <button class="btn  btn-light-secondary" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- [ task-detail-right ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
@@include('./layouts/footer.html')
<script>
    // Set the date we're counting down to
    var d = new Date();
    d.setDate(d.getDate() + 10);
    var countDownDate = new Date(d).getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("timer").innerHTML = "<b>" + days + "</b>days : <b>" + hours + "</b>h : <b>" +
            minutes + "</b>m : <b>" + seconds + "</b>s ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("timer").innerHTML = "Times over";
        }
    }, 1000);
</script>
@@include('./layouts/footer-bottom-link.html')
</body>

</html>
