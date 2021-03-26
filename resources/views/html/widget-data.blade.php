<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
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
                            <h5 class="m-b-10">Widget Data</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Widget</a></li>
                            <li class="breadcrumb-item">Widget Data</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- todo project and trafic resource start -->
            <div class="col-xl-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>To Do List</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body widget-last-task">
                        <div class="new-task">
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <div class="check-task form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                        <label class="form-check-label" for="customCheck1">Check your Email</label>
                                    </div>
                                </div>
                                <div class="float-end"><a onclick="delete_todo(1);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <div class="check-task form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">Make YouTube Video</label>
                                    </div>
                                </div>
                                <div class="float-end"><a onclick="delete_todo(2);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <div class="check-task form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck3">
                                        <label class="form-check-label" for="customCheck3">Create Banner</label>
                                    </div>
                                </div>
                                <div class="float-end"><a onclick="delete_todo(3);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <div class="check-task form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck4">
                                        <label class="form-check-label" for="customCheck4">Upload Project</label>
                                    </div>
                                </div>
                                <div class="float-end"><a onclick="delete_todo(4);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <div class="check-task form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck5">
                                        <label class="form-check-label" for="customCheck5">Update Task</label>
                                    </div>
                                </div>
                                <div class="float-end"><a onclick="delete_todo(5);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                        </div>
                        <div class="right-icon-control m-t-15">
                            <div class="input-group input-group-button">
                                <input type="text" class="form-control" placeholder="Add Task" autocomplete="off">
                                <button class="btn btn-primary" type="button"><i class="feather icon-plus m-0"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>My Projects</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body widget-last-task">
                        <p class="m-b-10">New Dashboard <span class="float-end">5 Mins ago</span></p>
                        <ul class="list-unstyled m-b-25">
                            <li class="d-inline-block"><img src="assets/images/user/avatar-2.jpg" alt="user-image" class="img-radius wid-30" data-bs-toggle="tooltip" data-placement="top" title="User"></li>
                            <li class="d-inline-block"><img src="assets/images/user/avatar-3.jpg" alt="user-image" class="img-radius wid-30" data-bs-toggle="tooltip" data-placement="top" title="User"></li>
                            <li class="d-inline-block"><img src="assets/images/user/avatar-2.jpg" alt="user-image" class="img-radius wid-30" data-bs-toggle="tooltip" data-placement="top" title="User"></li>
                            <li class="d-inline-block"><img src="assets/images/user/avatar-3.jpg" alt="user-image" class="img-radius wid-30" data-bs-toggle="tooltip" data-placement="top" title="User"></li>
                        </ul>
                        <p class="m-b-10 ">Web Design <span class="float-end">8 Mins ago</span></p>
                        <ul class="list-unstyled  m-b-25">
                            <li class="d-inline-block"><img src="assets/images/user/avatar-2.jpg" alt="user-image" class="img-radius wid-30" data-bs-toggle="tooltip" data-placement="top" title="User"></li>
                            <li class="d-inline-block"><img src="assets/images/user/avatar-2.jpg" alt="user-image" class="img-radius wid-30" data-bs-toggle="tooltip" data-placement="top" title="User"></li>
                            <li class="d-inline-block"><img src="assets/images/user/avatar-3.jpg" alt="user-image" class="img-radius wid-30" data-bs-toggle="tooltip" data-placement="top" title="User"></li>
                        </ul>
                        <p class="m-b-10">Android Design <span class="float-end">12 Mins ago</span></p>
                        <ul class="list-unstyled">
                            <li class="d-inline-block"><img src="assets/images/user/avatar-4.jpg" alt="user-image" class="img-radius wid-30" data-bs-toggle="tooltip" data-placement="top" title="User"></li>
                            <li class="d-inline-block"><img src="assets/images/user/avatar-2.jpg" alt="user-image" class="img-radius wid-30" data-bs-toggle="tooltip" data-placement="top" title="User"></li>
                            <li class="d-inline-block"><img src="assets/images/user/avatar-3.jpg" alt="user-image" class="img-radius wid-30" data-bs-toggle="tooltip" data-placement="top" title="User"></li>
                        </ul>
                        <div class="right-icon-control m-t-15">
                            <div class="input-group input-group-button">
                                <input type="text" class="form-control" placeholder="Add Project" autocomplete="off">
                                <button class="btn btn-primary" type="button"><i class="feather icon-plus m-0"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card trafic-card">
                    <div class="card-header">
                        <h5>Traffic Sources</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="m-b-10">Direct <span class="float-end"><i class="fa fa-caret-up m-r-10"></i>25%</span></p>
                        <div class="progress blue">
                            <div class="progress-bar bg-primary" style="width:75%"></div>
                        </div>
                        <p class="m-b-10 m-t-30">Social <span class="float-end"><i class="fa fa-caret-down m-r-10"></i>58</span></p>
                        <div class="progress green">
                            <div class="progress-bar bg-success" style="width:50%"></div>
                        </div>
                        <p class="m-b-10 m-t-30">Referral <span class="float-end"><i class="fa fa-caret-up m-r-10"></i>20%</span></p>
                        <div class="progress red">
                            <div class="progress-bar bg-danger" style="width:20%"></div>
                        </div>
                        <p class="m-b-10 m-t-30">Bounce <span class="float-end"><i class="fa fa-caret-down m-r-10"></i>580</span></p>
                        <div class="progress yellow">
                            <div class="progress-bar bg-warning" style="width:40%"></div>
                        </div>
                        <p class="m-b-10 m-t-30">Internet <span class="float-end"><i class="fa fa-caret-up m-r-10"></i>70%</span></p>
                        <div class="progress purple">
                            <div class="progress-bar bg-info" style="width:90%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- todo project and trafic resource end -->

            <!-- prject ,team member start -->
            <div class="col-xl-8 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Projects</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            Assigned
                                        </th>
                                        <th>Name</th>
                                        <th>Due Date</th>
                                        <th class="text-end">Priority</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img src="assets/images/user/avatar-4.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <h6>John Deo</h6>
                                                    <p class="text-muted m-b-0">Graphics Designer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Able Pro</td>
                                        <td>Jun, 26</td>
                                        <td class="text-end"><label class="badge bg-light-danger">Low</label></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <h6>Jenifer Vintage</h6>
                                                    <p class="text-muted m-b-0">Web Designer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Mashable</td>
                                        <td>March, 31</td>
                                        <td class="text-end"><label class="badge bg-light-primary">high</label></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img src="assets/images/user/avatar-3.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <h6>William Jem</h6>
                                                    <p class="text-muted m-b-0">Developer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Flatable</td>
                                        <td>Aug, 02</td>
                                        <td class="text-end"><label class="badge bg-light-success">medium</label></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <h6>David Jones</h6>
                                                    <p class="text-muted m-b-0">Developer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Guruable</td>
                                        <td>Sep, 22</td>
                                        <td class="text-end"><label class="badge bg-light-primary">high</label></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-end m-r-20">
                                <a href="#!" class=" b-b-primary text-primary">View all Projects</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h5>Team Members</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="align-middle m-b-30">
                            <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                            <div class="d-inline-block">
                                <a href="#!">
                                    <h6>David Jones</h6>
                                </a>
                                <p class="text-muted m-b-0">Developer</p>
                            </div>
                        </div>
                        <div class="align-middle m-b-30">
                            <img src="assets/images/user/avatar-3.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                            <div class="d-inline-block">
                                <a href="#!">
                                    <h6>David Jones</h6>
                                </a>
                                <p class="text-muted m-b-0">Developer</p>
                            </div>
                        </div>
                        <div class="align-middle m-b-30">
                            <img src="assets/images/user/avatar-3.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                            <div class="d-inline-block">
                                <a href="#!">
                                    <h6>David Jones</h6>
                                </a>
                                <p class="text-muted m-b-0">Developer</p>
                            </div>
                        </div>
                        <div class="align-middle m-b-30">
                            <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                            <div class="d-inline-block">
                                <a href="#!">
                                    <h6>David Jones</h6>
                                </a>
                                <p class="text-muted m-b-0">Developer</p>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- prject ,team member end -->

            <!-- user activity ,message, chat start -->
            <div class="col-xl-4 col-md-6">
                <div class="card user-activity-card">
                    <div class="card-header">
                        <h5>User Activity</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row m-b-25">
                            <div class="col-auto p-r-0">
                                <div class="u-img">
                                    <img src="assets/images/widget/slider5.jpg" alt="user image" class="img-radius cover-img">
                                    <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius profile-img">
                                </div>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">John Deo</h6>
                                </a>
                                <p class="text-muted m-b-5">Lorem Ipsum is simply dummy text.</p>
                                <p class="text-muted m-b-0"><i class="fas fa-clock m-r-10"></i>2 min ago</p>
                            </div>
                        </div>
                        <div class="row m-b-25">
                            <div class="col-auto p-r-0">
                                <div class="u-img">
                                    <img src="assets/images/widget/slider5.jpg" alt="user image" class="img-radius cover-img">
                                    <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius profile-img">
                                </div>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">John Deo</h6>
                                </a>
                                <p class="text-muted m-b-5">Lorem Ipsum is simply dummy text.</p>
                                <p class="text-muted m-b-0"><i class="fas fa-clock m-r-10"></i>2 min ago</p>
                            </div>
                        </div>
                        <div class="row m-b-25">
                            <div class="col-auto p-r-0">
                                <div class="u-img">
                                    <img src="assets/images/widget/slider5.jpg" alt="user image" class="img-radius cover-img">
                                    <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius profile-img">
                                </div>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">John Deo</h6>
                                </a>
                                <p class="text-muted m-b-5">Lorem Ipsum is simply dummy text.</p>
                                <p class="text-muted m-b-0"><i class="fas fa-clock m-r-10"></i>2 min ago</p>
                            </div>
                        </div>
                        <div class="row m-b-25">
                            <div class="col-auto p-r-0">
                                <div class="u-img">
                                    <img src="assets/images/widget/slider5.jpg" alt="user image" class="img-radius cover-img">
                                    <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius profile-img">
                                </div>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">John Deo</h6>
                                </a>
                                <p class="text-muted m-b-5">Lorem Ipsum is simply dummy text.</p>
                                <p class="text-muted m-b-0"><i class="fas fa-clock m-r-10"></i>2 min ago</p>
                            </div>
                        </div>

                        <div class="text-center">
                            <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card user-Messages-card">
                    <div class="card-header">
                        <h5>Messages</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row m-b-30">
                            <div class="col-auto p-r-0">
                                <div class="u-img">
                                    <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius profile-img">
                                    <span class="tot-msg">2</span>
                                </div>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">John Deo <span class="text-muted float-end text-time">5:05 PM</span></h6>
                                </a>
                                <p class="text-muted m-b-0">Lorem Ipsum is simply.</p>
                            </div>
                        </div>
                        <div class="row m-b-30">
                            <div class="col-auto p-r-0">
                                <div class="u-img">
                                    <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius profile-img">
                                    <span class="tot-msg">3</span>
                                </div>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">John Deo <span class="text-muted float-end text-time">5:05 PM</span></h6>
                                </a>
                                <p class="text-muted m-b-0">Lorem Ipsum is simply.</p>
                            </div>
                        </div>
                        <div class="row m-b-30">
                            <div class="col-auto p-r-0">
                                <div class="u-img">
                                    <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius profile-img">
                                </div>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">John Deo <span class="text-muted float-end text-time">5:05 PM</span></h6>
                                </a>
                                <p class="text-muted m-b-0">Lorem Ipsum is simply.</p>
                            </div>
                        </div>
                        <div class="row m-b-30">
                            <div class="col-auto p-r-0">
                                <div class="u-img">
                                    <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius profile-img">
                                    <span class="tot-msg">5</span>
                                </div>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">John Deo <span class="text-muted float-end text-time">5:05 PM</span></h6>
                                </a>
                                <p class="text-muted m-b-0">Lorem Ipsum is simply.</p>
                            </div>
                        </div>
                        <div class="row m-b-30">
                            <div class="col-auto p-r-0">
                                <div class="u-img">
                                    <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius profile-img">
                                    <span class="tot-msg">1</span>
                                </div>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">John Deo <span class="text-muted float-end text-time">5:05 PM</span></h6>
                                </a>
                                <p class="text-muted m-b-0">Lorem Ipsum is simply.</p>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card chat-card">
                    <div class="card-header">
                        <h5>Chat</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row m-b-20 received-chat">
                            <div class="col-auto p-r-0">
                                <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40">
                            </div>
                            <div class="col">
                                <div class="msg">
                                    <p class="m-b-0">Nice to meet you!</p>
                                </div>
                                <p class="text-muted m-b-0"><i class="fas fa-clock m-r-10"></i>10:20am</p>
                            </div>
                        </div>
                        <div class="row m-b-20 send-chat">
                            <div class="col">
                                <div class="msg">
                                    <p class="m-b-0">Nice to meet you!</p>
                                </div>
                                <p class="text-muted m-b-0"><i class="fas fa-clock m-r-10"></i>10:20am</p>
                            </div>
                            <div class="col-auto p-l-0">
                                <img src="assets/images/user/avatar-3.jpg" alt="user image" class="img-radius wid-40">
                            </div>
                        </div>
                        <div class="row m-b-20 received-chat">
                            <div class="col-auto p-r-0">
                                <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40">
                            </div>
                            <div class="col">
                                <div class="msg">
                                    <p class="m-b-0">Nice to meet you!</p>
                                    <img src="assets/images/widget/dashborad-1.jpg" alt="">
                                    <img src="assets/images/widget/dashborad-3.jpg" alt="">
                                </div>
                                <p class="text-muted m-b-0"><i class="fas fa-clock m-r-10"></i>10:20am</p>
                            </div>
                        </div>
                        <div class="right-icon-control m-t-15">
                            <label>Send message</label>
                            <div class="input-group input-group-button">
                                <input type="text" class="form-control" placeholder="text" autocomplete="off">
                                <button class="btn btn-primary" type="button"><i class="feather icon-message-circle m-0"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- user activity ,message, chat end -->

            <!-- latest updates, Recent Tickets start -->
            <div class="col-xl-6 col-md-12">
                <div class="card latest-update-card">
                    <div class="card-header">
                        <h5>Latest Updates</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="latest-update-box">
                            <div class="row p-t-20 p-b-30">
                                <div class="col-auto text-end update-meta">
                                    <p class="text-muted m-b-0 d-inline-flex">2 hrs ago</p>
                                    <i class="feather icon-twitter bg-info update-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6>+ 1652 Followers</h6>
                                    </a>
                                    <p class="text-muted m-b-0">You’re getting more and more followers, keep it up!</p>
                                </div>
                            </div>
                            <div class="row p-b-30">
                                <div class="col-auto text-end update-meta">
                                    <p class="text-muted m-b-0 d-inline-flex">4 hrs ago</p>
                                    <i class="feather icon-briefcase bg-danger update-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6>+ 5 New Products were added!</h6>
                                    </a>
                                    <p class="text-muted m-b-0">Congratulations!</p>
                                </div>
                            </div>
                            <div class="row p-b-30">
                                <div class="col-auto text-end update-meta">
                                    <p class="text-muted m-b-0 d-inline-flex">1 day ago</p>
                                    <i class="feather icon-check f-w-600 bg-success update-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6>Database backup completed!</h6>
                                    </a>
                                    <p class="text-muted m-b-0">Download the <span class="text-primary"> <a href="#!" class="text-primary">latest backup</a> </span>.</p>
                                </div>
                            </div>
                            <div class="row p-b-0">
                                <div class="col-auto text-end update-meta">
                                    <p class="text-muted m-b-0 d-inline-flex">2 day ago</p>
                                    <i class="feather icon-facebook bg-primary update-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6>+2 Friend Requests</h6>
                                    </a>
                                    <p class="text-muted m-b-10">This is great, keep it up!</p>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tr>
                                                <td class="b-none">
                                                    <a href="#!" class="align-middle">
                                                        <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                        <div class="d-inline-block">
                                                            <h6>Jeny William</h6>
                                                            <p class="text-muted mb-0">Graphic Designer</p>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="b-none">
                                                    <a href="#!" class="align-middle">
                                                        <img src="assets/images/user/avatar-3.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                        <div class="d-inline-block">
                                                            <h6>John Deo</h6>
                                                            <p class="text-muted mb-0">Web Designer</p>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Recent Tickets</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-borderless mb-0">
                                <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>Subject</th>
                                        <th>Department</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><label class="badge bg-light-success">open</label></td>
                                        <td>Website down for one week</td>
                                        <td>Support</td>
                                        <td>Today 2:00</td>
                                    </tr>
                                    <tr>
                                        <td><label class="badge bg-light-primary">progress</label></td>
                                        <td>Loosing control on server</td>
                                        <td>Support</td>
                                        <td>Yesterday</td>
                                    </tr>
                                    <tr>
                                        <td><label class="badge bg-light-danger">closed</label></td>
                                        <td>Authorizations keys</td>
                                        <td>Support</td>
                                        <td>27, Aug</td>
                                    </tr>
                                    <tr>
                                        <td><label class="badge bg-light-success">open</label></td>
                                        <td>Restoring default settings</td>
                                        <td>Support</td>
                                        <td>Today 9:00</td>
                                    </tr>
                                    <tr>
                                        <td><label class="badge bg-light-primary">progress</label></td>
                                        <td>Loosing control on server</td>
                                        <td>Support</td>
                                        <td>Yesterday</td>
                                    </tr>
                                    <tr>
                                        <td><label class="badge bg-light-success">open</label></td>
                                        <td>Restoring default settings</td>
                                        <td>Support</td>
                                        <td>Today 9:00</td>
                                    </tr>
                                    <tr>
                                        <td><label class="badge bg-light-primary">progress</label></td>
                                        <td>Loosing control on server</td>
                                        <td>Support</td>
                                        <td>Yesterday</td>
                                    </tr>
                                    <tr>
                                        <td><label class="badge bg-light-danger">closed</label></td>
                                        <td>Authorizations keys</td>
                                        <td>Support</td>
                                        <td>27, Aug</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- latest updates, Recent Tickets start -->

            <!-- Application Sales, Friends start -->
            <div class="col-xl-8 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Application Sales</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0 table-borderless">
                                <thead>
                                    <tr>
                                        <th>Application</th>
                                        <th>Sales</th>
                                        <th>Avg Price</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <h6>Able Pro</h6>
                                                <p class="text-muted m-b-0">Powerful Admin Theme</p>
                                            </div>
                                        </td>
                                        <td>16,300</td>
                                        <td>$53</td>
                                        <td class="text-primary">$15,652</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <h6>Photoshop</h6>
                                                <p class="text-muted m-b-0">Design Software</p>
                                            </div>
                                        </td>
                                        <td>26,421</td>
                                        <td>$35</td>
                                        <td class="text-primary">$18,785</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <h6>Guruable</h6>
                                                <p class="text-muted m-b-0">Best Admin Template</p>
                                            </div>
                                        </td>
                                        <td>8,265</td>
                                        <td>$98</td>
                                        <td class="text-primary">$9,652</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <h6>Flatable</h6>
                                                <p class="text-muted m-b-0">Admin App</p>
                                            </div>
                                        </td>
                                        <td>10,652</td>
                                        <td>$20</td>
                                        <td class="text-primary">$7,856</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-center">
                                <a href="#!" class=" b-b-primary text-primary">View all Projects</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h5>Friends</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="align-middle m-b-30">
                            <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                            <div class="d-inline-block">
                                <a href="#!">
                                    <h6>David Jones</h6>
                                </a>
                                <p class="text-muted m-b-0">Lorem Ipsum is dummy.</p>
                            </div>
                        </div>
                        <div class="align-middle m-b-30">
                            <img src="assets/images/user/avatar-3.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                            <div class="d-inline-block">
                                <a href="#!">
                                    <h6>David Jones</h6>
                                </a>
                                <p class="text-muted m-b-0">Lorem Ipsum is dummy.</p>
                            </div>
                        </div>
                        <div class="align-middle m-b-30">
                            <img src="assets/images/user/avatar-3.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                            <div class="d-inline-block">
                                <a href="#!">
                                    <h6>David Jones</h6>
                                </a>
                                <p class="text-muted m-b-0">Lorem Ipsum is dummy.</p>
                            </div>
                        </div>
                        <div class="align-middle m-b-30">
                            <img src="assets/images/user/avatar-4.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                            <div class="d-inline-block">
                                <a href="#!">
                                    <h6>David Jones</h6>
                                </a>
                                <p class="text-muted m-b-0">Lorem Ipsum is dummy.</p>
                            </div>
                        </div>
                        <div class="align-middle m-b-30">
                            <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                            <div class="d-inline-block">
                                <a href="#!">
                                    <h6>David Jones</h6>
                                </a>
                                <p class="text-muted m-b-0">Lorem Ipsum is dummy.</p>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#!" class="b-b-primary text-primary">View Friend List</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Application Sales, Friends end -->

            <!-- Active Tickets, Latest Posts start -->
            <div class="col-xl-8 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Active Tickets</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-borderless">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="tablcheck1">
                                                <label class="form-check-label" for="tablcheck1">
                                                    Due
                                                </label>
                                            </div>
                                        </th>
                                        <th>User</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="tablcheck2">
                                                <label class="form-check-label" for="tablcheck2">
                                                    <h6 class="mb-0">12</h6>
                                                    <p class="text-muted m-b-0">hours</p>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img src="assets/images/user/avatar-4.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <h6 class="text-muted m-b-0 m-t-15">John Deo</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <h6>[#1183] Workaround for OS X selects printing bug</h6>
                                                <p class="text-muted m-b-0">Chrome fixed the bug several versions ago, thus rendering this...</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="tablcheck3">
                                                <label class="form-check-label" for="tablcheck3">
                                                    <h6 class="mb-0">16</h6>
                                                    <p class="text-muted m-b-0">hours</p>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img src="assets/images/user/avatar-3.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <h6 class="text-muted m-b-0 m-t-15">Jems Win</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <h6>[#1249] Vertically center carousel controls</h6>
                                                <p class="text-muted m-b-0">Try any carousel control and reduce the screen width below...</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="tablcheck4">
                                                <label class="form-check-label" for="tablcheck4">
                                                    <h6 class="mb-0">40</h6>
                                                    <p class="text-muted m-b-0">hours</p>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <h6 class="text-muted m-b-0 m-t-15">Jeny Wiliiam</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <h6>[#1254] Inaccurate small pagination height</h6>
                                                <p class="text-muted m-b-0">The height of pagination elements is not consistent with...</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="tablcheck4">
                                                <label class="form-check-label" for="tablcheck4">
                                                    <h6 class="mb-0">16</h6>
                                                    <p class="text-muted m-b-0">hours</p>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img src="assets/images/user/avatar-3.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <h6 class="text-muted m-b-0 m-t-15">Jems Win</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <h6>[#1249] Vertically center carousel controls</h6>
                                                <p class="text-muted m-b-0">Try any carousel control and reduce the screen width below...</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-end m-r-20">
                            <a href="#!" class=" b-b-primary text-primary">View all Projects</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card latest-posts-card">
                    <div class="card-header">
                        <h5>Latest Posts</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row m-b-30">
                            <div class="col-auto p-r-0">
                                <img src="assets/images/widget/dashborad-1.jpg" alt="user image" class="latest-posts-img">
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6>Up unpacked friendly</h6>
                                </a>
                                <p class="text-muted m-b-10"><i class="fa fa-play-circle-o"></i> Video | 14 minutes ago</p>
                                <p class="text-muted m-b-0">Lorem Ipsum is simply dummy text of the.</p>
                            </div>
                        </div>
                        <div class="row m-b-30">
                            <div class="col-auto p-r-0">
                                <iframe class="embed-responsive-item latest-posts-img" src="//www.youtube.com/embed/b0fI60sBMV0"></iframe>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6>Up unpacked friendly</h6>
                                </a>
                                <p class="text-muted m-b-10"><i class="fa fa-play-circle-o"></i> tutorials | 14 minutes ago</p>
                                <p class="text-muted m-b-0">Lorem Ipsum is simply dummy text of the.</p>
                            </div>
                        </div>
                        <div class="row m-b-30">
                            <div class="col-auto p-r-0">
                                <img src="assets/images/widget/dashborad-3.jpg" alt="user image" class="latest-posts-img">
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6>Up unpacked friendly</h6>
                                </a>
                                <p class="text-muted m-b-10"><i class="fa fa-play-circle-o"></i> Video | 14 minutes ago</p>
                                <p class="text-muted m-b-0">Lorem Ipsum is simply dummy text of the.</p>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#!" class="b-b-primary text-primary">View Friend List</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Active Tickets, Latest Posts end -->

            <!-- Tasks, Latest Customers start -->
            <div class="col-xl-4 col-md-12">
                <div class="card task-card">
                    <div class="card-header">
                        <h5>Tasks</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled task-list">
                            <li>
                                <i class="feather icon-check f-w-600 task-icon bg-success"></i>
                                <p class="m-b-5">8:50</p>
                                <h6 class="text-muted">Call to customer <span class="text-primary"> <a href="#!" class="text-primary">Jacob</a> </span> and discuss the</h6>
                            </li>
                            <li>
                                <i class="task-icon bg-primary"></i>
                                <p class="m-b-5">Sat, 5 Mar</p>
                                <h6 class="text-muted">Design mobile Application</h6>
                            </li>
                            <li>
                                <i class="task-icon bg-danger"></i>
                                <p class="m-b-5">Sun, 17 Feb</p>
                                <h6 class="text-muted"><span class="text-primary"><a href="#!" class="text-primary">Jeny</a></span> assign you a task <span class="text-primary"><a href="#!" class="text-primary">Mockup Design.</a></span></h6>
                            </li>
                            <li>
                                <i class="task-icon bg-warning"></i>
                                <p class="m-b-5">Sat, 18 Mar</p>
                                <h6 class="text-muted">Design logo</h6>
                            </li>
                            <li class="p-b-15 m-b-10">
                                <i class="task-icon bg-success"></i>
                                <p class="m-b-5">Sat, 22 Mar</p>
                                <h6 class="text-muted">Design mobile Application</h6>
                            </li>
                        </ul>
                        <div class="text-center">
                            <a href="#!" class="b-b-primary text-primary">View Friend List</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Latest Customers</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-borderless">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Country</th>
                                        <th>Name</th>
                                        <th class="text-end">Average</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="assets/images/widget/GERMANY.jpg" alt="" class="img-fluid wid-30"></td>
                                        <td>Germany</td>
                                        <td>Anjalina Jolly</td>
                                        <td class="text-end">56.23%</td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/widget/USA.jpg" alt="" class="img-fluid wid-30"></td>
                                        <td>USA</td>
                                        <td>John Deo</td>
                                        <td class="text-end">25.23%</td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/widget/AUSTRALIA.jpg" alt="" class="img-fluid wid-30"></td>
                                        <td>Australia</td>
                                        <td>Jenifer Vintage</td>
                                        <td class="text-end">12.45%</td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/widget/UK.jpg" alt="" class="img-fluid wid-30"></td>
                                        <td>United Kingdom</td>
                                        <td>Lori Moore</td>
                                        <td class="text-end">8.65%</td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/widget/BRAZIL.jpg" alt="" class="img-fluid wid-30"></td>
                                        <td>Brazil</td>
                                        <td>Allina D’croze</td>
                                        <td class="text-end">3.56%</td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/widget/AUSTRALIA.jpg" alt="" class="img-fluid wid-30"></td>
                                        <td>Australia</td>
                                        <td>Jenifer Vintage</td>
                                        <td class="text-end">12.45%</td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/widget/USA.jpg" alt="" class="img-fluid wid-30"></td>
                                        <td>USA</td>
                                        <td>John Deo</td>
                                        <td class="text-end">25.23%</td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/widget/AUSTRALIA.jpg" alt="" class="img-fluid wid-30"></td>
                                        <td>Australia</td>
                                        <td>Jenifer Vintage</td>
                                        <td class="text-end">12.45%</td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/widget/UK.jpg" alt="" class="img-fluid wid-30"></td>
                                        <td>United Kingdom</td>
                                        <td>Lori Moore</td>
                                        <td class="text-end">8.65%</td>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-end  m-r-20">
                            <a href="#!" class="b-b-primary text-primary">View all Latest Customers</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tasks, Latest Customers end -->

            <!-- Latest Activity, Feeds, Upcoming Deadlines start -->
            <div class="col-xl-8 col-md-12">
                <div class="card latest-activity-card">
                    <div class="card-header">
                        <h5>Latest Activity</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="latest-update-box">
                            <div class="row p-t-20 p-b-30">
                                <div class="col-auto text-end update-meta">
                                    <p class="text-muted m-b-0 d-inline-flex">just now</p>
                                    <i class="feather icon-sunrise bg-primary update-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6>John Deo</h6>
                                    </a>
                                    <p class="text-muted m-b-15">The trip was an amazing and a life changing experience!!</p>
                                    <img src="assets/images/widget/dashborad-1.jpg" alt="" class="img-fluid wid-100 m-r-15 m-b-10">
                                    <img src="assets/images/widget/dashborad-3.jpg" alt="" class="img-fluid wid-100 m-r-15 m-b-10">
                                </div>
                            </div>
                            <div class="row p-b-30">
                                <div class="col-auto text-end update-meta">
                                    <p class="text-muted m-b-0 d-inline-flex">5 min ago</p>
                                    <i class="feather icon-file-text bg-primary update-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6>Administrator</h6>
                                    </a>
                                    <p class="text-muted m-b-0">Free courses for all our customers at A1 Conference Room - 9:00 am tomorrow!</p>
                                </div>
                            </div>
                            <div class="row p-b-30">
                                <div class="col-auto text-end update-meta">
                                    <p class="text-muted m-b-0 d-inline-flex">3 hours ago</p>
                                    <i class="feather icon-map-pin bg-primary update-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6>Jeny William</h6>
                                    </a>
                                    <p class="text-muted m-b-15">Happy Hour! Free drinks at <span> <a href="#!" class="text-primary">Cafe-Bar all </a> </span>day long!</p>
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.961710410607!2d72.86204201533417!3d21.233366886136675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f1c84348989%3A0xfb5817a0f069bfe5!2sDashboardKit!5e0!3m2!1sen!2sin!4v1562323931692!5m2!1sen!2sin"
                                        style="width: 100%;height:270px" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <a href="#!" class=" b-b-primary text-primary">View all Activity</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card feed-card">
                    <div class="card-header">
                        <h5>Feeds</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row m-b-30">
                            <div class="col-auto p-r-0">
                                <i class="feather icon-bell bg-primary text-white feed-icon"></i>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted float-end f-13">Just Now</span></h6>
                                </a>
                            </div>
                        </div>
                        <div class="row m-b-30">
                            <div class="col-auto p-r-0">
                                <i class="feather icon-shopping-cart bg-danger text-white feed-icon"></i>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">New order received <span class="text-muted float-end f-13">Just Now</span></h6>
                                </a>
                            </div>
                        </div>
                        <div class="row m-b-30">
                            <div class="col-auto p-r-0">
                                <i class="feather icon-file-text bg-success text-white feed-icon"></i>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted float-end f-13">Just Now</span></h6>
                                </a>
                            </div>
                        </div>
                        <div class="row m-b-20">
                            <div class="col-auto p-r-0">
                                <i class="feather icon-shopping-cart bg-danger text-white feed-icon"></i>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">New order received <span class="text-muted float-end f-13">Just Now</span></h6>
                                </a>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#!" class="b-b-primary text-primary">View all Feeds</a>
                        </div>
                    </div>
                </div>
                <div class="card feed-card">
                    <div class="card-header">
                        <h5>Upcoming Deadlines</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row m-b-25">
                            <div class="col-auto p-r-0">
                                <img src="assets/images/widget/dashborad-1.jpg" alt="" class="img-fluid wid-50">
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">New able - Redesign</h6>
                                </a>
                                <p class="text-danger m-b-0">2 Days Remaining</p>
                            </div>
                        </div>
                        <div class="row m-b-25">
                            <div class="col-auto p-r-0">
                                <img src="assets/images/widget/dashborad-2.jpg" alt="" class="img-fluid wid-50">
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">New Admin Dashboard</h6>
                                </a>
                                <p class="text-danger m-b-0">Proposal in 6 Days</p>
                            </div>
                        </div>
                        <div class="row m-b-25">
                            <div class="col-auto p-r-0">
                                <img src="assets/images/widget/dashborad-3.jpg" alt="" class="img-fluid wid-50">
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">Logo Design</h6>
                                </a>
                                <p class="text-success m-b-0">10 Days Remaining</p>
                            </div>
                        </div>

                        <div class="text-center">
                            <a href="#!" class="b-b-primary text-primary">View all Feeds</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Latest Activity, Feeds, Upcoming Deadlines end -->

            <!-- Global Sales by Top Locations, Employee start -->
            <div class="col-xl-6 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Global Sales by Top Locations</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-borderless">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Country</th>
                                        <th>Sales</th>
                                        <th class="text-end">Average</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="assets/images/widget/GERMANY.jpg" alt="" class="img-fluid wid-30"></td>
                                        <td>Germany</td>
                                        <td>3,562</td>
                                        <td class="text-end">56.23%</td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/widget/USA.jpg" alt="" class="img-fluid wid-30"></td>
                                        <td>USA</td>
                                        <td>2,650</td>
                                        <td class="text-end">25.23%</td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/widget/AUSTRALIA.jpg" alt="" class="img-fluid wid-30"></td>
                                        <td>Australia</td>
                                        <td>956</td>
                                        <td class="text-end">12.45%</td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/widget/UK.jpg" alt="" class="img-fluid wid-30"></td>
                                        <td>United Kingdom</td>
                                        <td>689</td>
                                        <td class="text-end">8.65%</td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/widget/BRAZIL.jpg" alt="" class="img-fluid wid-30"></td>
                                        <td>Brazil</td>
                                        <td>560</td>
                                        <td class="text-end">3.56%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-end  m-r-20">
                            <a href="#!" class="b-b-primary text-primary">View all Sales Locations </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Employee</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Salary</th>
                                        <th>Country</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>John Deo</td>
                                        <td>$26,325</td>
                                        <td>USA</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jeny William</td>
                                        <td>$10,256</td>
                                        <td>Canada</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Anjelina Joli</td>
                                        <td>$16,854</td>
                                        <td>South Africa</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Philip Morris</td>
                                        <td>$31,564</td>
                                        <td>Korea</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Allesia Smith</td>
                                        <td>$26,325</td>
                                        <td>Neatherland</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-end  m-r-20">
                            <a href="#!" class="b-b-primary text-primary">View all Employee</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Global Sales by Top Locations, Employee end -->

            <!-- Latest Order start -->
            <div class="col-md-12">
                <div class="card table-card latest-activity-card">
                    <div class="card-header">
                        <h5>Latest Order</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-borderless">
                                <thead>
                                    <tr>
                                        <th>Customer</th>
                                        <th>Order ID</th>
                                        <th>Photo</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John Deo</td>
                                        <td>#81412314</td>
                                        <td><img src="assets/images/widget/PHONE1.jpg" alt="" class="img-fluid"></td>
                                        <td>Moto G5</td>
                                        <td>10</td>
                                        <td>17-2-2017</td>
                                        <td><label class="badge bg-light-warning">Pending</label></td>
                                        <td><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-danger"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Jenny William</td>
                                        <td>#68457898</td>
                                        <td><img src="assets/images/widget/PHONE2.jpg" alt="" class="img-fluid"></td>
                                        <td>iPhone 8</td>
                                        <td>16</td>
                                        <td>20-2-2017</td>
                                        <td><label class="badge bg-light-primary">Paid</label></td>
                                        <td><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-danger"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Lori Moore</td>
                                        <td>#45457898</td>
                                        <td><img src="assets/images/widget/PHONE3.jpg" alt="" class="img-fluid"></td>
                                        <td>Redmi 4</td>
                                        <td>20</td>
                                        <td>17-2-2017</td>
                                        <td><label class="badge bg-light-success">Success</label></td>
                                        <td><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-danger"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Austin Pena</td>
                                        <td>#62446232</td>
                                        <td><img src="assets/images/widget/PHONE4.jpg" alt="" class="img-fluid"></td>
                                        <td>Jio</td>
                                        <td>15</td>
                                        <td>25-4-2017</td>
                                        <td><label class="badge bg-light-danger">Failed</label></td>
                                        <td><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-danger"></i></a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="text-end  m-r-20">
                            <a href="#!" class="b-b-primary text-primary">View all Orders</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Latest Order end -->

            <!-- Latest Customers start -->
            <div class="col-md-12">
                <div class="card table-card review-card">
                    <div class="card-header borderless ">
                        <h5>Customer Reviews</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="review-block">
                            <div class="row">
                                <div class="col-sm-auto p-r-0">
                                    <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius profile-img cust-img m-b-15">
                                </div>
                                <div class="col">
                                    <h6 class="m-b-15">John Deo <span class="float-end f-13 text-muted"> a week ago</span></h6>
                                    <a href="#!"><i class="feather icon-star-on f-18 text-warning"></i></a>
                                    <a href="#!"><i class="feather icon-star-on f-18 text-warning"></i></a>
                                    <a href="#!"><i class="feather icon-star-on f-18 text-warning"></i></a>
                                    <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                    <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                    <p class="m-t-15 m-b-15 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                        took a
                                        galley of type and scrambled it to make a type specimen book.</p>
                                    <a href="#!" class="m-r-30 text-muted"><i class="feather icon-thumbs-up m-r-15"></i>Helpful?</a>
                                    <a href="#!"><i class="feather icon-heart-on text-danger m-r-15"></i></a>
                                    <a href="#!"><i class="feather icon-edit text-muted"></i></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-auto p-r-0">
                                    <img src="assets/images/user/avatar-4.jpg" alt="user image" class="img-radius profile-img cust-img m-b-15">
                                </div>
                                <div class="col">
                                    <h6 class="m-b-15">Allina D’croze <span class="float-end f-13 text-muted"> a week ago</span></h6>
                                    <a href="#!"><i class="feather icon-star-on f-18 text-warning"></i></a>
                                    <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                    <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                    <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                    <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                    <p class="m-t-15 m-b-15 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                        took a
                                        galley of type and scrambled it to make a type specimen book.</p>
                                    <a href="#!" class="m-r-30 text-muted"><i class="feather icon-thumbs-up m-r-15"></i>Helpful?</a>
                                    <a href="#!"><i class="feather icon-heart-on text-danger m-r-15"></i></a>
                                    <a href="#!"><i class="feather icon-edit text-muted"></i></a>
                                    <blockquote class="blockquote m-t-15 m-b-0">
                                        <h6>Allina D’croze</h6>
                                        <p class="m-b-0 text-muted">Lorem Ipsum is simply dummy text of the industry.</p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="text-end  m-r-20">
                            <a href="#!" class="b-b-primary text-primary">View all Customer Reviews</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Latest Customers end -->
            <!-- expansions-section start -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-0"><i class="feather icon-arrow-up text-success"></i>$6,456<span class="float-end"><i class="feather icon-arrow-down text-danger"></i>$2,500</span></h6>
                        <div class="progress mt-1" style="height:6px;">
                            <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="mt-1 d-block mb-3">This Week<span class="float-end">Previous Week</span></span>
                        <h6 class="text-primary mb-0">App design and development</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-0"><i class="feather icon-arrow-down text-danger"></i>$2,450<span class="float-end"><i class="feather icon-arrow-up text-success"></i>$5,420</span></h6>
                        <div class="progress mt-1" style="height:6px;">
                            <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="mt-1 d-block mb-3">This Year<span class="float-end">Previous Year</span></span>
                        <h6 class="text-danger mb-0">Landing page design</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-0"><i class="feather icon-arrow-down text-danger"></i>$8,360<span class="float-end"><i class="feather icon-arrow-up text-success"></i>$9,400</span></h6>
                        <div class="progress mt-1" style="height:6px;">
                            <div class="progress-bar bg-success rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="mt-1 d-block mb-3">This Month<span class="float-end">Previous Month</span></span>
                        <h6 class="text-success mb-0">Mockup design</h6>
                    </div>
                </div>
            </div>
            <!-- expansions-section end -->
            <!-- sale-section start -->
            <div class="col-xl-5 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Product Sales</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col">
                                <span class="text-muted">Earning Product</span>
                                <h4 class="mt-2">20,569<span class="ms-2">$</span></h4>
                            </div>
                            <div class="col">
                                <span class="text-muted">Yesterday</span>
                                <h4 class="mt-2">580<span class="ms-2">$</span></h4>
                            </div>
                            <div class="col">
                                <span class="text-muted">This Week</span>
                                <h4 class="mt-2">5,789<span class="ms-2">$</span></h4>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <div class="sale-scroll" style="height:215px;position:relative;">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Last Sales</th>
                                            <th>Name Product</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6 class="mb-1 text-success">2136</h6>
                                            </td>
                                            <td>HeadPhone</td>
                                            <td>
                                                <h6 class="mb-1 text-success">$ 926.23</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="mb-1 text-danger">2546</h6>
                                            </td>
                                            <td>Iphone 6</td>
                                            <td>
                                                <h6 class="mb-1 text-danger">$ 485.85</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="mb-1 text-primary">2681</h6>
                                            </td>
                                            <td>Jacket</td>
                                            <td>
                                                <h6 class="mb-1 text-primary">$ 786.4</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="mb-1 text-info">2756</h6>
                                            </td>
                                            <td>HeadPhone</td>
                                            <td>
                                                <h6 class="mb-1 text-info">$ 563.45</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="mb-1 text-danger">8765</h6>
                                            </td>
                                            <td>Sofa</td>
                                            <td>
                                                <h6 class="mb-1 text-danger">$ 769.45</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="mb-1 text-warning">3652</h6>
                                            </td>
                                            <td>Iphone 7</td>
                                            <td>
                                                <h6 class="mb-1 text-warning">$ 754.45</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="mb-1 text-success">7456</h6>
                                            </td>
                                            <td>Jacket</td>
                                            <td>
                                                <h6 class="mb-1 text-success">$ 743.23</h6>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sale-section end -->
            <!-- Incomeing-section start -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Incoming Requests</h5>
                    </div>
                    <div class="card-body p-0 incomeing-scroll" style="height:265px;position:relative;">
                        <div class="mt-3 mb-3">
                            <span class="px-4 d-block"><i class="fas fa-circle text-primary f-10 m-r-5"></i>Incoming requests</span>
                            <hr>
                            <span class="px-4 d-block"><i class="fas fa-circle text-success f-10 m-r-5"></i>You have 2 pending requests..</span>
                            <hr>
                            <span class="px-4 d-block"><i class="fas fa-circle text-danger f-10 m-r-5"></i>You have 3 pending tasks</span>
                            <hr>
                            <span class="px-4 d-block"><i class="fas fa-circle text-warning f-10 m-r-5"></i>New order received</span>
                            <hr>
                            <span class="px-4 d-block"><i class="fas fa-circle text-info f-10 m-r-5"></i>Incoming requests</span>
                            <hr>
                            <span class="px-4 d-block"><i class="fas fa-circle text-success f-10 m-r-5"></i>The 3 Golden Rules Professional Design..</span>
                            <hr>
                            <span class="px-4 d-block"><i class="fas fa-circle text-danger f-10 m-r-5"></i>You have 4 pending tasks</span>
                            <hr>
                            <span class="px-4 d-block"><i class="fas fa-circle text-warning f-10 m-r-5"></i>New order received</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <h6 class="text-center m-0"><a href="#!">Show more</a></h6>
                    </div>
                </div>
            </div>
            <!-- Incomeing-section end -->
            <!-- revenue-section start -->
            <div class="col-xl-3 col-md-6">
                <div class="card table-card">
                    <div class="card-header borderless">
                        <h5>Total Revenue</h5>
                    </div>
                    <div class="card-body px-0 py-0">
                        <div class="table-responsive">
                            <div class="revenue-scroll" style="height:310px;position:relative;">
                                <table class="table table-hover mb-0">
                                    <tbody>
                                        <tr>
                                            <td><i class="fas fa-caret-up text-success f-24"></i></td>
                                            <td>Bitcoin</td>
                                            <td>
                                                <h6 class="text-success">+ $145.85</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-caret-down text-danger f-24"></i></td>
                                            <td>Ethereum</td>
                                            <td>
                                                <h6 class="text-danger">- $6.368</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-caret-up text-success f-24"></i></td>
                                            <td>Ripple</td>
                                            <td>
                                                <h6 class="text-success">+ $458.63</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-caret-down text-danger f-24"></i></td>
                                            <td>Neo</td>
                                            <td>
                                                <h6 class="text-danger">- $5.631</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-caret-down text-danger f-24"></i></td>
                                            <td>Bitcoin</td>
                                            <td>
                                                <h6 class="text-danger">- $75.86</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-caret-up text-success f-24"></i></td>
                                            <td>Ethereum</td>
                                            <td>
                                                <h6 class="text-success">+ $453.63</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-caret-down text-danger f-24"></i></td>
                                            <td>Ripple</td>
                                            <td>
                                                <h6 class="text-danger">+ $786.63</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-caret-up text-success f-24"></i></td>
                                            <td>Neo</td>
                                            <td>
                                                <h6 class="text-success">+ $145.85</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-caret-down text-danger f-24"></i></td>
                                            <td>Bitcoin</td>
                                            <td>
                                                <h6 class="text-danger">- $6.368</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-caret-up text-success f-24"></i></td>
                                            <td>Ethereum</td>
                                            <td>
                                                <h6 class="text-success">+ $458.63</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-caret-down text-danger f-24"></i></td>
                                            <td>Neo</td>
                                            <td>
                                                <h6 class="text-danger">- $5.631</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-caret-down text-danger f-24"></i></td>
                                            <td>Ripple</td>
                                            <td>
                                                <h6 class="text-danger">- $75.86</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-caret-up text-success f-24"></i></td>
                                            <td>Bitcoin</td>
                                            <td>
                                                <h6 class="text-success">+ $453.63</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-caret-down text-danger f-24"></i></td>
                                            <td>Ethereum</td>
                                            <td>
                                                <h6 class="text-danger">+ $786.63</h6>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- revenue-section end -->
            <!-- product-section start -->
            <div class="col-sm-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Last Product Sales</h5>
                    </div>
                    <div class="card-body px-0 py-0">
                        <div class="table-responsive">
                            <div class="product-scroll" style="height:380px;position:relative;">
                                <table class="table table-hover m-b-0">
                                    <thead>
                                        <tr>
                                            <th>CAMPAIGN DATE</th>
                                            <th>CLICK <a class="help" data-bs-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-14"></i></a></th>
                                            <th>COST <a class="help" data-bs-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-14"></i></a></th>
                                            <th>CTR <a class="help" data-bs-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-14"></i></a></th>
                                            <th>ARPU <a class="help" data-bs-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-14"></i></a></th>
                                            <th>ECPI <a class="help" data-bs-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-14"></i></a></th>
                                            <th>ROI <a class="help" data-bs-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-14"></i></a></th>
                                            <th>TREVENUE <a class="help" data-bs-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-14"></i></a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Total and average</td>
                                            <td>1300</td>
                                            <td>1025</td>
                                            <td>14005</td>
                                            <td>95,3%</td>
                                            <td>29,7%</td>
                                            <td>3,25</td>
                                            <td>2:30</td>
                                        </tr>
                                        <tr>
                                            <td>24-11-2016</td>
                                            <td>125
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>140
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>856
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>45,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>9,7%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7,25
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>5:26
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>28-10-2016</td>
                                            <td>352
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>150
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>769
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>35,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,7%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>3,57
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>3:30
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8-9-2017</td>
                                            <td>145
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>869
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>453
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>76,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,4%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7,56
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>1:30
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12-12-2017</td>
                                            <td>458
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>769
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>456
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>56,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>9,4%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7,32
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6:30
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8-12-2017</td>
                                            <td>789
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>756
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>432
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>39,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,7%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>3,79
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>4:30
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>28-10-2016</td>
                                            <td>352
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>150
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>769
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>35,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,7%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>3,57
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>3:30
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8-9-2017</td>
                                            <td>145
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>869
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>453
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>76,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,4%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7,56
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>1:30
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12-12-2017</td>
                                            <td>458
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>769
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>456
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>56,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>9,4%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7,32
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6:30
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8-12-2017</td>
                                            <td>789
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>756
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>432
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>39,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 68%;" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,7%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>3,79
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 42%;" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>4:30
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 38%;" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product-section end -->

            <!-- product and new customar start -->
            <div class="col-xl-4 col-md-6">
                <div class="card new-cust-card">
                    <div class="card-header">
                        <h5>New Customers</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="cust-scroll" style="height:415px;position:relative;">
                        <div class="card-body p-b-0">
                            <div class="align-middle m-b-25">
                                <img src="assets/images/user/avatar-1.jpg" alt="user image" class="img-radius align-top m-r-15">
                                <div class="d-inline-block">
                                    <a href="#!">
                                        <h6>Alex Thompson</h6>
                                    </a>
                                    <p class="m-b-0">Cheers!</p>
                                    <span class="status active"></span>
                                </div>
                            </div>
                            <div class="align-middle m-b-25">
                                <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius align-top m-r-15">
                                <div class="d-inline-block">
                                    <a href="#!">
                                        <h6>John Doue</h6>
                                    </a>
                                    <p class="m-b-0">stay hungry stay foolish!</p>
                                    <span class="status active"></span>
                                </div>
                            </div>
                            <div class="align-middle m-b-25">
                                <img src="assets/images/user/avatar-3.jpg" alt="user image" class="img-radius align-top m-r-15">
                                <div class="d-inline-block">
                                    <a href="#!">
                                        <h6>Alex Thompson</h6>
                                    </a>
                                    <p class="m-b-0">Cheers!</p>
                                    <span class="status deactive"><i class="far fa-clock m-r-10"></i>30 min ago</span>
                                </div>
                            </div>
                            <div class="align-middle m-b-25">
                                <img src="assets/images/user/avatar-4.jpg" alt="user image" class="img-radius align-top m-r-15">
                                <div class="d-inline-block">
                                    <a href="#!">
                                        <h6>John Doue</h6>
                                    </a>
                                    <p class="m-b-0">Cheers!</p>
                                    <span class="status deactive"><i class="far fa-clock m-r-10"></i>10 min ago</span>
                                </div>
                            </div>
                            <div class="align-middle m-b-25">
                                <img src="assets/images/user/avatar-5.jpg" alt="user image" class="img-radius align-top m-r-15">
                                <div class="d-inline-block">
                                    <a href="#!">
                                        <h6>Shirley Hoe</h6>
                                    </a>
                                    <p class="m-b-0">stay hungry stay foolish!</p>
                                    <span class="status active"></span>
                                </div>
                            </div>
                            <div class="align-middle m-b-25">
                                <img src="assets/images/user/avatar-1.jpg" alt="user image" class="img-radius align-top m-r-15">
                                <div class="d-inline-block">
                                    <a href="#!">
                                        <h6>John Doue</h6>
                                    </a>
                                    <p class="m-b-0">Cheers!</p>
                                    <span class="status active"></span>
                                </div>
                            </div>
                            <div class="align-middle m-b-25">
                                <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius align-top m-r-15">
                                <div class="d-inline-block">
                                    <a href="#!">
                                        <h6>James Alexander</h6>
                                    </a>
                                    <p class="m-b-0">stay hungry stay foolish!</p>
                                    <span class="status active"></span>
                                </div>
                            </div>
                            <div class="align-middle m-b-0">
                                <img src="assets/images/user/avatar-3.jpg" alt="user image" class="img-radius align-top m-r-15">
                                <div class="d-inline-block">
                                    <a href="#!">
                                        <h6>John Doue</h6>
                                    </a>
                                    <p class="m-b-0">Cheers!</p>
                                    <span class="status deactive"><i class="far fa-clock m-r-10"></i>10 min ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-md-6">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>New Products</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="pro-scroll" style="height:415px;position:relative;">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>HeadPhone</td>
                                            <td><img src="assets/images/widget/p1.jpg" alt="" class="img-20"></td>
                                            <td>
                                                <div><label class="badge bg-light-warning">Pending</label></div>
                                            </td>
                                            <td>$10</td>
                                            <td><a href="#!"><i class="icon feather icon-edit f-16  text-success"></i></a><a href="#!"><i class="feather icon-trash-2 ms-3 f-16 text-danger"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Iphone 6</td>
                                            <td><img src="assets/images/widget/p2.jpg" alt="" class="img-20"></td>
                                            <td>
                                                <div><label class="badge bg-light-danger">Cancel</label></div>
                                            </td>
                                            <td>$20</td>
                                            <td><a href="#!"><i class="icon feather icon-edit f-16  text-success"></i></a><a href="#!"><i class="feather icon-trash-2 ms-3 f-16 text-danger"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Jacket</td>
                                            <td><img src="assets/images/widget/p3.jpg" alt="" class="img-20"></td>
                                            <td>
                                                <div><label class="badge bg-light-success">Success</label></div>
                                            </td>
                                            <td>$35</td>
                                            <td><a href="#!"><i class="icon feather icon-edit f-16 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 ms-3 f-16 text-danger"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Sofa</td>
                                            <td><img src="assets/images/widget/p4.jpg" alt="" class="img-20"></td>
                                            <td>
                                                <div><label class="badge bg-light-danger">Cancel</label></div>
                                            </td>
                                            <td>$85</td>
                                            <td><a href="#!"><i class="icon feather icon-edit f-16 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 ms-3 f-16 text-danger"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Iphone 6</td>
                                            <td><img src="assets/images/widget/p2.jpg" alt="" class="img-20"></td>
                                            <td>
                                                <div><label class="badge bg-light-success">Success</label></div>
                                            </td>
                                            <td>$20</td>
                                            <td><a href="#!"><i class="icon feather icon-edit f-16 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 ms-3 f-16 text-danger"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>HeadPhone</td>
                                            <td><img src="assets/images/widget/p1.jpg" alt="" class="img-20"></td>
                                            <td>
                                                <div><label class="badge bg-light-warning">Pending</label></div>
                                            </td>
                                            <td>$50</td>
                                            <td><a href="#!"><i class="icon feather icon-edit f-16 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 ms-3 f-16 text-danger"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Iphone 6</td>
                                            <td><img src="assets/images/widget/p2.jpg" alt="" class="img-20"></td>
                                            <td>
                                                <div><label class="badge bg-light-danger">Cancel</label></div>
                                            </td>
                                            <td>$30</td>
                                            <td><a href="#!"><i class="icon feather icon-edit f-16 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 ms-3 f-16 text-danger"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product and new customar end -->
            <!-- top contact and member performance start -->
            <div class="col-xl-6 col-md-6">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Top Contacts</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="contact-scroll" style="height:380px;position:relative;">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <thead>
                                        <tr>
                                            <th>Company</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Apple Company</td>
                                            <td>23/05/2017</td>
                                            <td>04/08/2018</td>
                                            <td><label class="badge bg-light-success">Paid</label></td>
                                        </tr>
                                        <tr>
                                            <td>Envato Pvt Ltd.</td>
                                            <td>20/03/2017</td>
                                            <td>04/08/2019</td>
                                            <td><label class="badge bg-light-danger">Unpaid</label></td>
                                        </tr>
                                        <tr>
                                            <td>Dribble Company</td>
                                            <td>13/05/2017</td>
                                            <td>03/01/2018</td>
                                            <td><label class="badge bg-light-success">Paid</label></td>
                                        </tr>
                                        <tr>
                                            <td>Adobe Family</td>
                                            <td>11/01/2016</td>
                                            <td>02/03/2017</td>
                                            <td><label class="badge bg-light-success">Paid</label></td>
                                        </tr>
                                        <tr>
                                            <td>Apple Company</td>
                                            <td>23/05/2017</td>
                                            <td>04/08/2018</td>
                                            <td><label class="badge bg-light-danger">Unpaid</label></td>
                                        </tr>
                                        <tr>
                                            <td>Apple Company</td>
                                            <td>25/05/2018</td>
                                            <td>04/12/2018</td>
                                            <td><label class="badge bg-light-success">Paid</label></td>
                                        </tr>
                                        <tr>
                                            <td>Envato Pvt Ltd.</td>
                                            <td>15/03/2018</td>
                                            <td>04/08/2016</td>
                                            <td><label class="badge bg-light-danger">Unpaid</label></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Member’s Performance</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="performance-scroll" style="height:380px;position:relative;">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0 without-header">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <img src="assets/images/user/avatar-1.jpg" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
                                                    <div class="d-inline-block">
                                                        <h6 class="m-b-0">Shirley Hoe</h6>
                                                        <p class="m-b-0">Sales executive,NY</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <h6 class="m-b-0">$78.001<i class="fas fa-level-down-alt text-danger m-l-10"></i></h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
                                                    <div class="d-inline-block">
                                                        <h6 class="m-b-0">James Alexander</h6>
                                                        <p class="m-b-0">Sales executive,EL</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <h6 class="m-b-0">$89.051<i class="fas fa-level-up-alt text-success m-l-10"></i></h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <img src="assets/images/user/avatar-3.jpg" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
                                                    <div class="d-inline-block">
                                                        <h6 class="m-b-0">Shirley Hoe</h6>
                                                        <p class="m-b-0">Sales executive,NY</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <h6 class="m-b-0">$89.051<i class="fas fa-level-up-alt text-success m-l-10"></i></h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <img src="assets/images/user/avatar-4.jpg" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
                                                    <div class="d-inline-block">
                                                        <h6 class="m-b-0">James Alexander</h6>
                                                        <p class="m-b-0">Sales executive,EL</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <h6 class="m-b-0">$78.001<i class="fas fa-level-down-alt text-danger m-l-10"></i></h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <img src="assets/images/user/avatar-5.jpg" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
                                                    <div class="d-inline-block">
                                                        <h6 class="m-b-0">Shirley Hoe</h6>
                                                        <p class="m-b-0">Sales executive,NY</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <h6 class="m-b-0">$78.001<i class="fas fa-level-down-alt text-danger m-l-10"></i></h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <img src="assets/images/user/avatar-1.jpg" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
                                                    <div class="d-inline-block">
                                                        <h6 class="m-b-0">John Doue</h6>
                                                        <p class="m-b-0">Sales executive,EL</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <h6 class="m-b-0">$58.769<i class="fas fa-level-up-alt text-success m-l-10"></i></h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
                                                    <div class="d-inline-block">
                                                        <h6 class="m-b-0">Alex Thompson</h6>
                                                        <p class="m-b-0">Sales executive,NY</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <h6 class="m-b-0">$96.635<i class="fas fa-level-up-alt text-success m-l-10"></i></h6>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- top contact and member performance end -->

            <!-- Customer overview start -->
            <div class="col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Customer Overview</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <div class="customer-scroll" style="height:465px;position:relative;">
                                <table class="table table-hover m-b-0">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Customer</th>
                                            <th>Company</th>
                                            <th>Lead Score</th>
                                            <th>Date</th>
                                            <th>Tags</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="assets/images/user/avatar-4.jpg" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
                                            </td>
                                            <td>
                                                <h6 class="m-0">Shirley Hoe</h6>
                                                <p class="m-0">Sales executive , NY</p>
                                            </td>
                                            <td>Pinterest</td>
                                            <td>223</td>
                                            <td>19-11-2018</td>
                                            <td>
                                                <label class="badge bg-light-primary">Sketch</label>
                                                <label class="badge bg-light-danger">Ui</label>
                                            </td>
                                            <td><a href="#!"><i class="icon feather icon-edit f-16 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 f-16 ms-3 text-danger"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
                                            </td>
                                            <td>
                                                <h6 class="m-0">James Alexander</h6>
                                                <p class="m-0">Sales executive , EL</p>
                                            </td>
                                            <td>Facebook</td>
                                            <td>268</td>
                                            <td>10-10-2017</td>
                                            <td>
                                                <label class="badge bg-light-primary">Ux</label>
                                                <label class="badge bg-light-danger">Ui</label>
                                                <label class="badge bg-light-info">php</label>
                                            </td>
                                            <td><a href="#!"><i class="icon feather icon-edit f-16 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 f-16 ms-3 text-danger"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/user/avatar-1.jpg" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
                                            </td>
                                            <td>
                                                <h6 class="m-0">Shirley Hoe</h6>
                                                <p class="m-0">Sales executive,NY</p>
                                            </td>
                                            <td>Google</td>
                                            <td>293</td>
                                            <td>16-03-2018</td>
                                            <td>
                                                <label class="badge bg-light-danger">Sketch</label>
                                                <label class="badge bg-light-warning">Ui</label>
                                            </td>
                                            <td><a href="#!"><i class="icon feather icon-edit f-16 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 f-16 ms-3 text-danger"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/user/avatar-4.jpg" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
                                            </td>
                                            <td>
                                                <h6 class="m-0">Alex Thompson</h6>
                                                <p class="m-0">Sales executive,NY</p>
                                            </td>
                                            <td>Pinterest</td>
                                            <td>568</td>
                                            <td>19-11-2018</td>
                                            <td>
                                                <label class="badge bg-light-info">Ux</label>
                                                <label class="badge bg-light-success">Ui</label>
                                                <label class="badge bg-light-warning">php</label>
                                            </td>
                                            <td><a href="#!"><i class="icon feather icon-edit f-16 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 f-16 ms-3 text-danger"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
                                            </td>
                                            <td>
                                                <h6 class="m-0">James Alexander</h6>
                                                <p class="m-0">Sales executive,EL</p>
                                            </td>
                                            <td>Facebook</td>
                                            <td>796</td>
                                            <td>20-10-2017</td>
                                            <td>
                                                <label class="badge bg-light-primary">Sketch</label>
                                                <label class="badge bg-light-info">Ui</label>
                                            </td>

                                            <td><a href="#!"><i class="icon feather icon-edit f-16 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 f-16 ms-3 text-danger"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/user/avatar-1.jpg" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
                                            </td>
                                            <td>
                                                <h6 class="m-0">John Deo</h6>
                                                <p class="m-0">Sales executive,EL</p>
                                            </td>
                                            <td>Twitter</td>
                                            <td>465</td>
                                            <td>25-11-2018</td>
                                            <td>
                                                <label class="badge bg-light-warning">Ux</label>
                                                <label class="badge bg-light-danger">Ui</label>
                                                <label class="badge bg-light-success">php</label>
                                            </td>
                                            <td><a href="#!"><i class="icon feather icon-edit f-16 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 f-16 ms-3 text-danger"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/user/avatar-4.jpg" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
                                            </td>
                                            <td>
                                                <h6 class="m-0">Shirley Hoe</h6>
                                                <p class="m-0">Sales executive,NY</p>
                                            </td>
                                            <td>Google</td>
                                            <td>783</td>
                                            <td>16-03-2017</td>
                                            <td>
                                                <label class="badge bg-light-danger">Sketch</label>
                                                <label class="badge bg-light-primary">Ui</label>
                                            </td>
                                            <td><a href="#!"><i class="icon feather icon-edit f-16 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 f-16 ms-3 text-danger"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Customer overview end -->
            <!-- testimonial and top selling start -->
            <div class="col-xl-4 col-md-6">
                <div class="card testimonial-card table-card">
                    <div class="card-header">
                        <h5>Testimonial</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="test-scroll" style="height:386px;position:relative;">
                        <div class="card-body p-b-0">
                            <div class="review-block">
                                <div class="row">
                                    <div class="col-sm-auto p-r-0">
                                        <img src="assets/images/user/avatar-1.jpg" alt="user image" class="img-radius profile-img cust-img m-b-15">
                                    </div>
                                    <div class="col">
                                        <h6 class="m-b-10">John Deo</h6>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" style="width:85%"></div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-0">3.2</h6>
                                            </div>
                                        </div>
                                        <p class="m-t-10 m-b-0">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-auto p-r-0">
                                        <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius profile-img cust-img m-b-15">
                                    </div>
                                    <div class="col">
                                        <h6 class="m-b-10">Alex Thompson</h6>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary" style="width:50%"></div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-0">4.2</h6>
                                            </div>
                                        </div>
                                        <p class="m-t-10 m-b-0">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-auto p-r-0">
                                        <img src="assets/images/user/avatar-3.jpg" alt="user image" class="img-radius profile-img cust-img m-b-15">
                                    </div>
                                    <div class="col">
                                        <h6 class="m-b-10">John Deo</h6>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" style="width:60%"></div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-0">6.5</h6>
                                            </div>
                                        </div>
                                        <p class="m-t-10 m-b-0">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-auto p-r-0">
                                        <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius profile-img cust-img m-b-15">
                                    </div>
                                    <div class="col">
                                        <h6 class="m-b-10">Shirley Hoe</h6>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" style="width:85%"></div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-0">9.6</h6>
                                            </div>
                                        </div>
                                        <p class="m-t-10 m-b-0">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-auto p-r-0">
                                        <img src="assets/images/user/avatar-1.jpg" alt="user image" class="img-radius profile-img cust-img m-b-15">
                                    </div>
                                    <div class="col">
                                        <h6 class="m-b-10">James Alexander</h6>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" style="width:30%"></div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-0">5.5</h6>
                                            </div>
                                        </div>
                                        <p class="m-t-10 m-b-0">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-md-6">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>New Products</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <div class="stock-scroll" style="height:386px;position:relative;">
                                <table class="table table-hover m-b-0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Product Code</th>
                                            <th>Customer</th>
                                            <th>Status</th>
                                            <th>Rating</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Sofa</td>
                                            <td>#PHD001</td>
                                            <td>abc@gmail.com</td>
                                            <td><label class="badge bg-light-danger">Out Stock</label></td>
                                            <td>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-muted"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-muted"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Computer</td>
                                            <td>#PHD002</td>
                                            <td>cdc@gmail.com</td>
                                            <td><label class="badge bg-light-success">In Stock</label></td>
                                            <td>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-muted"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-muted"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-muted"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mobile</td>
                                            <td>#PHD003</td>
                                            <td>pqr@gmail.com</td>
                                            <td><label class="badge bg-light-danger">Out Stock</label></td>
                                            <td>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-muted"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Coat</td>
                                            <td>#PHD004</td>
                                            <td>bcs@gmail.com</td>
                                            <td><label class="badge bg-light-success">In Stock</label></td>
                                            <td>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-muted"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-muted"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Watch</td>
                                            <td>#PHD003</td>
                                            <td>cdc@gmail.com</td>
                                            <td><label class="badge bg-light-danger">Out Stock</label></td>
                                            <td>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-muted"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-muted"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-muted"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sofa</td>
                                            <td>#PHD009</td>
                                            <td>xyz@gmail.com</td>
                                            <td><label class="badge bg-light-danger">Out Stock</label></td>
                                            <td>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-muted"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-muted"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Coat</td>
                                            <td>#PHD005</td>
                                            <td>dfg@gmail.com</td>
                                            <td><label class="badge bg-light-success">In Stock</label></td>
                                            <td>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-muted"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-muted"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- testimonial and top selling end -->
            <!-- Customer overview start -->
            <div class="col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Project Task List</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <div class="subject-scroll" style="height:385px;position:relative;">
                                <table class="table table-hover m-b-0">
                                    <thead>
                                        <tr>
                                            <th>Subject</th>
                                            <th>Regarding</th>
                                            <th>Activity Type</th>
                                            <th>Activity Status</th>
                                            <th>Owner</th>
                                            <th>Priority</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Building Marketing List</td>
                                            <td>Software pro</td>
                                            <td>Task</td>
                                            <td><label class="badge bg-light-danger">Open</label></td>
                                            <td>John Malit</td>
                                            <td>Normal</td>
                                            <td>8/8/2017</td>
                                            <td>8/9/2018</td>
                                        </tr>
                                        <tr>
                                            <td>Project Task List</td>
                                            <td>Software pro</td>
                                            <td>Task</td>
                                            <td><label class="badge bg-light-primary">New</label></td>
                                            <td>Ken Malit</td>
                                            <td>low</td>
                                            <td>6/7/2017</td>
                                            <td>1/1/2018</td>
                                        </tr>
                                        <tr>
                                            <td>Building Marketing List</td>
                                            <td>Software pro</td>
                                            <td>Task</td>
                                            <td><label class="badge bg-light-danger">Open</label></td>
                                            <td>John Malit</td>
                                            <td>high</td>
                                            <td>3/9/2017</td>
                                            <td>8/6/2018</td>
                                        </tr>
                                        <tr>
                                            <td>Project Task List</td>
                                            <td>Software pro</td>
                                            <td>Task</td>
                                            <td><label class="badge bg-light-success">Close</label></td>
                                            <td>Ken Malit</td>
                                            <td>Normal</td>
                                            <td>9/4/2017</td>
                                            <td>3/6/2018</td>
                                        </tr>
                                        <tr>
                                            <td>Building Marketing List</td>
                                            <td>Software pro</td>
                                            <td>Task</td>
                                            <td><label class="badge bg-light-primary">New</label></td>
                                            <td>John Malit</td>
                                            <td>high</td>
                                            <td>7/4/2017</td>
                                            <td>10/1/2018</td>
                                        </tr>
                                        <tr>
                                            <td>Building Marketing List</td>
                                            <td>Software pro</td>
                                            <td>Task</td>
                                            <td><label class="badge bg-light-danger">Open</label></td>
                                            <td>Ken Malit</td>
                                            <td>low</td>
                                            <td>7/8/2017</td>
                                            <td>8/9/2018</td>
                                        </tr>
                                        <tr>
                                            <td>Project Task List</td>
                                            <td>Software pro</td>
                                            <td>Task</td>
                                            <td><label class="badge bg-light-primary">New</label></td>
                                            <td>John Malit</td>
                                            <td>Normal</td>
                                            <td>6/6/2017</td>
                                            <td>9/9/2018</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Customer overview end -->
            <!-- User chat box start -->
            <div class="col-xl-5 col-md-12">
                <div class="card feed-card">
                    <div class="card-header">
                        <h5>Feeds</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="feed-scroll" style="height:410px;position:relative;">
                        <div class="card-body">
                            <div class="row m-b-25 align-items-center">
                                <div class="col-auto p-r-0">
                                    <i class="feather icon-bell bg-light-primary feed-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted float-end f-14">Just Now</span></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row m-b-25 align-items-center">
                                <div class="col-auto p-r-0">
                                    <i class="feather icon-shopping-cart bg-light-danger feed-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">New order received <span class="text-muted float-end f-14">30 min ago</span></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row m-b-25 align-items-center">
                                <div class="col-auto p-r-0">
                                    <i class="feather icon-file-text bg-light-success feed-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted float-end f-14">Just Now</span></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row m-b-25 align-items-center">
                                <div class="col-auto p-r-0">
                                    <i class="feather icon-bell bg-light-primary feed-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">You have 4 tasks Done. <span class="text-muted float-end f-14">1 hours ago</span></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row m-b-25 align-items-center">
                                <div class="col-auto p-r-0">
                                    <i class="feather icon-file-text bg-light-success feed-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">You have 2 pending tasks. <span class="text-muted float-end f-14">Just Now</span></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row m-b-25 align-items-center">
                                <div class="col-auto p-r-0">
                                    <i class="feather icon-shopping-cart bg-light-danger feed-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">New order received <span class="text-muted float-end f-14">4 hours ago</span></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row m-b-25 align-items-center">
                                <div class="col-auto p-r-0">
                                    <i class="feather icon-shopping-cart bg-light-danger feed-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">New order Done <span class="text-muted float-end f-14">Just Now</span></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row m-b-25 align-items-center">
                                <div class="col-auto p-r-0">
                                    <i class="feather icon-file-text bg-light-success feed-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">You have 5 pending tasks. <span class="text-muted float-end f-14">5 hours ago</span></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row m-b-0 align-items-center">
                                <div class="col-auto p-r-0">
                                    <i class="feather icon-bell bg-light-primary feed-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">You have 4 tasks Done. <span class="text-muted float-end f-14">2 hours ago</span></h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- User chat box end -->
            <!-- [ user activity section ] start -->
            <div class="col-xl-7 col-md-12">
                <div class="card User-Activity table-card">
                    <div class="card-header">
                        <h5>User Activity</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <div class="activity-scroll" style="height:410px;position:relative;">
                                <table class="table table-hover m-0">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>User</th>
                                            <th>Activity</th>
                                            <th>Time</th>
                                            <th>Status</th>
                                            <th class="text-end"></th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td>
                                            <td>Ida Jorgensen</td>
                                            <td>The quick brown</td>
                                            <td>3:28 PM</td>
                                            <td><span class="m-0 text-success">Done</span></td>
                                            <td class="text-end"><i class="fas fa-circle text-success f-10"></i></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-2.jpg" alt="activity-user"></td>
                                            <td>Albert Andersen</td>
                                            <td>Jumps over</td>
                                            <td>2:37 PM</td>
                                            <td><span class="m-0 text-danger">Missed</span></td>
                                            <td class="text-end"><i class="fas fa-circle text-danger f-10"></i></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-3.jpg" alt="activity-user"></td>
                                            <td>Silje Larsen</td>
                                            <td>Dog the quick</td>
                                            <td>10:23 AM</td>
                                            <td><span class="m-0 text-info">Delayed</span></td>
                                            <td class="text-end"><i class="fas fa-circle text-info f-10"></i></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle m-r-10" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td>
                                            <td>Ida Jorgensen</td>
                                            <td>The quick brown</td>
                                            <td>4:28 PM</td>
                                            <td><span class="m-0 text-success">Done</span></td>
                                            <td class="text-end"><i class="fas fa-circle text-success f-10"></i></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-2.jpg" alt="activity-user"></td>
                                            <td>John Deo</td>
                                            <td>Dog the quick</td>
                                            <td>2:30 PM</td>
                                            <td><span class="m-0 text-warning">pending</span></td>
                                            <td class="text-end"><i class="fas fa-circle text-warning f-10"></i></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-3.jpg" alt="activity-user"></td>
                                            <td>Alex Thompson</td>
                                            <td>Jumps over</td>
                                            <td>4:00 PM</td>
                                            <td><span class="m-0 text-danger">Missed</span></td>
                                            <td class="text-end"><i class="fas fa-circle text-danger f-10"></i></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-2.jpg" alt="activity-user"></td>
                                            <td>Albert Andersen</td>
                                            <td>Dog the quick</td>
                                            <td>5:37 PM</td>
                                            <td><span class="m-0 text-success">Done</span></td>
                                            <td class="text-end"><i class="fas fa-circle text-success f-10"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ user activity section ] end -->
            <!-- [ Application list ] start -->
            <div class="col-xl-12 col-md-12">
                <div class="card Application-list table-card">
                    <div class="card-header">
                        <h5>Application list</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <div class="app-scroll" style="height:365px;position:relative;">
                                <table class="table table-hover m-0">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Application</th>
                                            <th>Installs</th>
                                            <th>Created</th>
                                            <th>Budget</th>
                                            <th>Status</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-2.jpg" alt="activity-user"></td>
                                            <td>
                                                <h6 class="mb-1">Facebook</h6>
                                                <p class="m-0">Apple</p>
                                            </td>
                                            <td>
                                                <p class="mb-1">523.423</p>
                                                <span class="text-success m-0">+ 84 Daily</span>
                                            </td>
                                            <td>Feb 11 2017</td>
                                            <td>$ 16,244</td>
                                            <td><a class=" badge bg-light-primary f-12" href="#!">Active</a></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td>
                                            <td>
                                                <h6 class="mb-1">Twitter</h6>
                                                <p class="m-0">CS Form</p>
                                            </td>
                                            <td>
                                                <p class="mb-1">7.239</p>
                                                <span class="text-warning m-0">+ 5 Daily</span>
                                            </td>
                                            <td>Jan 19 2017</td>
                                            <td>$ 3,937</td>
                                            <td><a class="badge bg-light-warning f-12" href="#!">Not Active</a></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-3.jpg" alt="activity-user"></td>
                                            <td>
                                                <h6 class="mb-1">Instagram</h6>
                                                <p class="m-0">Microsoft</p>
                                            </td>
                                            <td>
                                                <p class="mb-1">5.877</p>
                                                <span class="text-success m-0">+ 12 Daily</span>
                                            </td>
                                            <td>Aug 04 2017</td>
                                            <td>$ 28,039</td>
                                            <td><a class="badge bg-light-success f-12" href="#!">Paused</a></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-2.jpg" alt="activity-user"></td>
                                            <td>
                                                <h6 class="mb-1">Facebook</h6>
                                                <p class="m-0">Apple</p>
                                            </td>
                                            <td>
                                                <p class="mb-1">523.423</p>
                                                <span class="text-success m-0">+ 50 Daily</span>
                                            </td>
                                            <td>April 10 2017</td>
                                            <td>$ 16,244</td>
                                            <td><a class=" badge bg-light-primary f-12" href="#!">Active</a></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td>
                                            <td>
                                                <h6 class="mb-1">Twitter</h6>
                                                <p class="m-0">CS Form</p>
                                            </td>
                                            <td>
                                                <p class="mb-1">7.239</p>
                                                <span class="text-warning m-0">+ 5 Daily</span>
                                            </td>
                                            <td>May 20 2018</td>
                                            <td>$ 3,937</td>
                                            <td><a class="badge bg-light-warning f-12" href="#!">Not Active</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Application list ] end -->
            <!-- [ user Project list ] start -->
            <div class="col-xl-7 col-md-12">
                <div class="card user-list table-card">
                    <div class="card-header">
                        <h5>User Project List</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div class="table-responsive">
                            <div class="user-scroll" style="height:430px;position:relative;">
                                <table class="table table-hover m-0">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>project</th>
                                            <th>Completed</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td>
                                            <td>
                                                <h6 class="mb-1">Social Media App</h6>
                                                <p class="m-0">Assigned to <span class="text-success">Tristan Madsen</span></p>
                                            </td>
                                            <td>326,134</td>
                                            <td class="text-success">68%</td>
                                            <td>October 26, 2017</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-2.jpg" alt="activity-user"></td>
                                            <td>
                                                <h6 class="mb-1">Newspaper Wordpress Web</h6>
                                                <p class="m-0">Assigned to <span class="text-danger">Marcus Poulsen</span></p>
                                            </td>
                                            <td>110,134</td>
                                            <td class="text-danger">46%</td>
                                            <td>September 4, 2017</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-3.jpg" alt="activity-user"></td>
                                            <td>
                                                <h6 class="mb-1">Dashboard UI Kit Design</h6>
                                                <p class="m-0">Assigned to <span class="text-primary">Felix Johansen</span></p>
                                            </td>
                                            <td>226,134</td>
                                            <td class="text-primary">31%</td>
                                            <td>November 14, 2017</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td>
                                            <td>
                                                <h6 class="mb-1">Social Media App</h6>
                                                <p class="m-0">Assigned to <span class="text-success">Ida Jorgensen</span></p>
                                            </td>
                                            <td>500,134</td>
                                            <td class="text-success">85%</td>
                                            <td>December 14, 2017</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-3.jpg" alt="activity-user"></td>
                                            <td>
                                                <h6 class="mb-1">Social Media App</h6>
                                                <p class="m-0">Assigned to <span class="text-danger">Tristan Madsen</span></p>
                                            </td>
                                            <td>326,134</td>
                                            <td class="text-danger">68%</td>
                                            <td>January 26, 2017</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-4.jpg" alt="activity-user"></td>
                                            <td>
                                                <h6 class="mb-1">Newspaper Wordpress Web</h6>
                                                <p class="m-0">Assigned to <span class="text-primary">Marcus Poulsen</span></p>
                                            </td>
                                            <td>110,134</td>
                                            <td class="text-primary">46%</td>
                                            <td>April 4, 2017</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ user Project list ] end -->
            <!-- [ user web-list ] start -->
            <div class="col-xl-5 col-md-12 m-b-30">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-pills mb-4" id="myTab1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="user-tab1" data-bs-toggle="tab" href="#utab" role="tab">Developer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="designer-tab" data-bs-toggle="tab" href="#designer" role="tab">Designer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Developer-tab" data-bs-toggle="tab" href="#Developer" role="tab">All</a>
                            </li>
                        </ul>
                        <div class="tab-content User-Lists" id="myTabContent1">
                            <div class="tab-pane fade show active" id="utab" role="tabpanel">
                                <div class="widget-timeline m-b-25">
                                    <div class="media">
                                        <div class="me-3 photo-table">
                                            <i class="fas fa-circle text-success f-10 m-r-10"></i>
                                            <a href="#!"><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="chat-user"></a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="d-inline-block m-0">The Quick Brown Fox Jumps</h6>
                                            <p class="m-0">Lorem Ipsum is simply dummy text of</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-timeline m-b-25">
                                    <div class="media">
                                        <div class="me-3 photo-table">
                                            <i class="fas fa-circle text-warning f-10 m-r-10"></i>
                                            <a href="#!"><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-2.jpg" alt="chat-user"></a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="d-inline-block m-0">Over The Lazy Dog</h6>
                                            <p class="m-0">Lorem Ipsum is simply dummy text of</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-timeline m-b-25">
                                    <div class="media">
                                        <div class="me-3 photo-table">
                                            <i class="fas fa-circle text-info f-10 m-r-10"></i>
                                            <a href="#!"><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-3.jpg" alt="chat-user"></a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="d-inline-block m-0">The Quick Brown Fox</h6>
                                            <p class="m-0">Lorem Ipsum is simply dummy text of</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-timeline m-b-25">
                                    <div class="media">
                                        <div class="me-3 photo-table">
                                            <i class="fas fa-circle text-primary f-10 m-r-10"></i>
                                            <a href="#!"><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-4.jpg" alt="chat-user"></a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="d-inline-block m-0">The Quick Brown Fox Jumps</h6>
                                            <p class="m-0">Lorem Ipsum is simply dummy text of</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-timeline m-b-25">
                                    <div class="media">
                                        <div class="me-3 photo-table">
                                            <i class="fas fa-circle text-warning f-10 m-r-10"></i>
                                            <a href="#!"><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-5.jpg" alt="chat-user"></a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="d-inline-block m-0">Over The Lazy Dog</h6>
                                            <p class="m-0">Lorem Ipsum is simply dummy text of</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-timeline">
                                    <div class="media">
                                        <div class="me-3 photo-table">
                                            <i class="fas fa-circle text-info f-10 m-r-10"></i>
                                            <a href="#!"><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="chat-user"></a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="d-inline-block m-0">The Quick Brown Fox</h6>
                                            <p class="m-0">Lorem Ipsum is simply dummy text of</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="designer" role="tabpanel">
                                <div class="widget-timeline m-b-25">
                                    <div class="media">
                                        <div class="me-3 photo-table">
                                            <i class="fas fa-circle text-primary f-10 m-r-10"></i>
                                            <a href="#!"><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-5.jpg" alt="chat-user"></a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="d-inline-block m-0">The Quick Brown Fox Jumps</h6>
                                            <p class="m-0">Lorem Ipsum is simply dummy text of</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-timeline m-b-25">
                                    <div class="media">
                                        <div class="me-3 photo-table">
                                            <i class="fas fa-circle text-info f-10 m-r-10"></i>
                                            <a href="#!"><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-4.jpg" alt="chat-user"></a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="d-inline-block m-0">The Quick Brown Fox</h6>
                                            <p class="m-0">Lorem Ipsum is simply dummy text of</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-timeline m-b-25">
                                    <div class="media">
                                        <div class="me-3 photo-table">
                                            <i class="fas fa-circle text-warning f-10 m-r-10"></i>
                                            <a href="#!"><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-3.jpg" alt="chat-user"></a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="d-inline-block m-0">Over The Lazy Dog</h6>
                                            <p class="m-0">Lorem Ipsum is simply dummy text of</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-timeline m-b-25">
                                    <div class="media">
                                        <div class="me-3 photo-table">
                                            <i class="fas fa-circle text-success f-10 m-r-10"></i>
                                            <a href="#!"><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-2.jpg" alt="chat-user"></a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="d-inline-block m-0">The Quick Brown Fox Jumps</h6>
                                            <p class="m-0">Lorem Ipsum is simply dummy text of</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-timeline m-b-25">
                                    <div class="media">
                                        <div class="me-3 photo-table">
                                            <i class="fas fa-circle text-warning f-10 m-r-10"></i>
                                            <a href="#!"><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="chat-user"></a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="d-inline-block m-0">Over The Lazy Dog</h6>
                                            <p class="m-0">Lorem Ipsum is simply dummy text of</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-timeline">
                                    <div class="media">
                                        <div class="me-3 photo-table">
                                            <i class="fas fa-circle text-info f-10 m-r-10"></i>
                                            <a href="#!"><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-4.jpg" alt="chat-user"></a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="d-inline-block m-0">The Quick Brown Fox</h6>
                                            <p class="m-0">Lorem Ipsum is simply dummy text of</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Developer" role="tabpanel">
                                <div class="widget-timeline m-b-25">
                                    <div class="media">
                                        <div class="me-3 photo-table">
                                            <i class="fas fa-circle text-primary f-10 m-r-10"></i>
                                            <a href="#!"><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-4.jpg" alt="chat-user"></a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="d-inline-block m-0">The Quick Brown Fox Jumps</h6>
                                            <p class="m-0">Lorem Ipsum is simply dummy text of</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-timeline m-b-25">
                                    <div class="media">
                                        <div class="me-3 photo-table">
                                            <i class="fas fa-circle text-info f-10 m-r-10"></i>
                                            <a href="#!"><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-3.jpg" alt="chat-user"></a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="d-inline-block m-0">The Quick Brown Fox</h6>
                                            <p class="m-0">Lorem Ipsum is simply dummy text of</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-timeline m-b-25">
                                    <div class="media">
                                        <div class="me-3 photo-table">
                                            <i class="fas fa-circle text-success f-10 m-r-10"></i>
                                            <a href="#!"><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-5.jpg" alt="chat-user"></a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="d-inline-block m-0">The Quick Brown Fox Jumps</h6>
                                            <p class="m-0">Lorem Ipsum is simply dummy text of</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-timeline m-b-25">
                                    <div class="media">
                                        <div class="me-3 photo-table">
                                            <i class="fas fa-circle text-warning f-10 m-r-10"></i>
                                            <a href="#!"><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-2.jpg" alt="chat-user"></a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="d-inline-block m-0">The Quick Brown Fox</h6>
                                            <p class="m-0">Lorem Ipsum is simply dummy text of</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-timeline m-b-25">
                                    <div class="media">
                                        <div class="me-3 photo-table">
                                            <i class="fas fa-circle text-warning f-10 m-r-10"></i>
                                            <a href="#!"><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="chat-user"></a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="d-inline-block m-0">Over The Lazy Dog</h6>
                                            <p class="m-0">Lorem Ipsum is simply dummy text of</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-timeline">
                                    <div class="media">
                                        <div class="me-3 photo-table">
                                            <i class="fas fa-circle text-info f-10 m-r-10"></i>
                                            <a href="#!"><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-3.jpg" alt="chat-user"></a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="d-inline-block m-0">The Quick Brown Fox</h6>
                                            <p class="m-0">Lorem Ipsum is simply dummy text of</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ user web-list ] end -->
            <!-- [ full width-table ] start -->
            <div class="col-xl-12 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Full Width Table</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div class="table-responsive">
                            <div class="full-scroll" style="height:375px;position:relative;">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id Number</th>
                                            <th>Code</th>
                                            <th>Date</th>
                                            <th>Budget</th>
                                            <th>Status</th>
                                            <th class="text-end">Ratings</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#467</td>
                                            <td>8765482</td>
                                            <td>November 14, 2017</td>
                                            <td>$ 874.23</td>
                                            <td><a href="#!" class="badge bg-light-primary">Active</a></td>
                                            <td class="text-end"><a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-black-50"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#466</td>
                                            <td>2366482</td>
                                            <td>January 10, 2018</td>
                                            <td>$ 235.34</td>
                                            <td><a href="#!" class="badge bg-light-warning">Not Active</a></td>
                                            <td class="text-end"><a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-black-50"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-black-50"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#465</td>
                                            <td>8832638</td>
                                            <td>October 14, 2017</td>
                                            <td>$ 233.46</td>
                                            <td><a href="#!" class="badge bg-light-success">Active</a></td>
                                            <td class="text-end"><a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-black-50"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-black-50"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-black-50"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#464</td>
                                            <td>9632638</td>
                                            <td>December 17, 2017</td>
                                            <td>$ 133.46</td>
                                            <td><a href="#!" class="badge bg-light-primary">Not Active</a></td>
                                            <td class="text-end"><a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-black-50"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-black-50"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-black-50"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-black-50"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#463</td>
                                            <td>3332538</td>
                                            <td>July 14, 2017</td>
                                            <td>$ 244.46</td>
                                            <td><a href="#!" class="badge bg-light-warning">Active</a></td>
                                            <td class="text-end"><a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-black-50"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-black-50"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#467</td>
                                            <td>8765482</td>
                                            <td>November 14, 2017</td>
                                            <td>$ 874.23</td>
                                            <td><a href="#!" class="badge bg-light-primary">Active</a></td>
                                            <td class="text-end"><a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-black-50"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#789</td>
                                            <td>2378945</td>
                                            <td>April 16, 2018</td>
                                            <td>$ 235.34</td>
                                            <td><a href="#!" class="badge bg-light-warning">Not Active</a></td>
                                            <td class="text-end"><a href="#!"><i class="fa fa-star f-14  text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-black-50"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-black-50"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#789</td>
                                            <td>3789645</td>
                                            <td>July 7, 2018</td>
                                            <td>$ 244.46</td>
                                            <td><a href="#!" class="badge bg-light-success">Active</a></td>
                                            <td class="text-end"><a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-black-50"></i></a>
                                                <a href="#!"><i class="fa fa-star f-14 text-black-50"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ full width-table ] end -->
            <!-- [ Recent Users ] start -->
            <div class="col-md-12">
                <div class="card table-card">
                    <div class="card-header borderless">
                        <h5>Recent Users</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <div class="recent-scroll" style="height:384px;position:relative;">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td>
                                            <td>
                                                <h6 class="mb-1">Isabella Christensen</h6>
                                                <p class="m-0">Lorem Ipsum is simply dummy text of…</p>
                                            </td>
                                            <td>
                                                <h6 class="text-muted"><i class="fas fa-circle text-success f-10 m-r-15"></i>11 Sep 12:56</h6>
                                            </td>
                                            <td><a href="#!" class="badge bg-light-primary rounded-pill f-12 me-2">Reject</a><a href="#!" class="badge bg-light-success rounded-pill f-12 me-2">Approve</a></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-2.jpg" alt="activity-user"></td>
                                            <td>
                                                <h6 class="mb-1">Mathilde Andersen</h6>
                                                <p class="m-0">Lorem Ipsum is simply dummy text of…</p>
                                            </td>
                                            <td>
                                                <h6 class="text-muted"><i class="fas fa-circle text-danger f-10 m-r-15"></i>11 May 10:35</h6>
                                            </td>
                                            <td><a href="#!" class="badge bg-light-danger rounded-pill f-12 me-2">Reject</a><a href="#!" class="badge bg-light-warning rounded-pill f-12 me-2">Approve</a></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-3.jpg" alt="activity-user"></td>
                                            <td>
                                                <h6 class="mb-1">Karla Sorensen</h6>
                                                <p class="m-0">Lorem Ipsum is simply dummy text of…</p>
                                            </td>
                                            <td>
                                                <h6 class="text-muted"><i class="fas fa-circle text-success f-10 m-r-15"></i>9 Feb 17:38</h6>
                                            </td>
                                            <td><a href="#!" class="badge bg-light-primary rounded-pill f-12 me-2">Reject</a><a href="#!" class="badge bg-light-success rounded-pill f-12 me-2">Approve</a></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td>
                                            <td>
                                                <h6 class="mb-1">Ida Jorgensen</h6>
                                                <p class="m-0">Lorem Ipsum is simply dummy text of…</p>
                                            </td>
                                            <td>
                                                <h6 class="text-muted"><i class="fas fa-circle text-danger f-10 m-r-15"></i>19 May 12:56</h6>
                                            </td>
                                            <td><a href="#!" class="badge bg-light-danger rounded-pill f-12 me-2">Reject</a><a href="#!" class="badge bg-light-warning rounded-pill f-12 me-2">Approve</a></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-2.jpg" alt="activity-user"></td>
                                            <td>
                                                <h6 class="mb-1">Albert Andersen</h6>
                                                <p class="m-0">Lorem Ipsum is simply dummy text of…</p>
                                            </td>
                                            <td>
                                                <h6 class="text-muted"><i class="fas fa-circle text-success f-10 m-r-15"></i>21 July 12:56</h6>
                                            </td>
                                            <td><a href="#!" class="badge bg-light-primary rounded-pill f-12 me-2">Reject</a><a href="#!" class="badge bg-light-success rounded-pill f-12 me-2">Approve</a></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-2.jpg" alt="activity-user"></td>
                                            <td>
                                                <h6 class="mb-1">Mathilde Andersen</h6>
                                                <p class="m-0">Lorem Ipsum is simply dummy text of…</p>
                                            </td>
                                            <td>
                                                <h6 class="text-muted"><i class="fas fa-circle text-danger f-10 m-r-15"></i>11 May 10:35</h6>
                                            </td>
                                            <td><a href="#!" class="badge bg-light-danger rounded-pill f-12 me-2">Reject</a><a href="#!" class="badge bg-light-warning rounded-pill f-12 me-2">Approve</a></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td>
                                            <td>
                                                <h6 class="mb-1">Isabella Christensen</h6>
                                                <p class="m-0">Lorem Ipsum is simply dummy text of…</p>
                                            </td>
                                            <td>
                                                <h6 class="text-muted"><i class="fas fa-circle text-success f-10 m-r-15"></i>11 Jan 12:56</h6>
                                            </td>
                                            <td><a href="#!" class="badge bg-light-primary rounded-pill f-12 me-2">Reject</a><a href="#!" class="badge bg-light-success rounded-pill f-12 me-2">Approve</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Recent Users ] end -->
            <!-- [ MArketing compnaigns ] end -->
            <div class="col-xl-8 col-md-12">
                <div class="card marketing-card table-card">
                    <div class="card-header">
                        <h5>Marketing compnaigns</h5>
                    </div>
                    <div class="card-body pb-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>Companies</th>
                                        <th>Client</th>
                                        <th>Changes</th>
                                        <th colspan="3">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="6" class="marketing-header">Today</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#!"><i class="fab fa-facebook-f bg-primary social-icon"></i></a>
                                            <div class="table-contain">
                                                <h6>FaceBook ads</h6>
                                                <p class="text-muted">6:00am- 8:00am</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-muted">Softtech</p>
                                        </td>
                                        <td>
                                            <i class="icofont icofont-bird text-success"></i>
                                            <p class="m-l-10 text-success">6.45%</p>
                                        </td>
                                        <td><span>$5645</span></td>
                                        <td>
                                            <button class="btn btn-default btn-bg-primary btn-outline-default btn-round btn-action">Activate</button>
                                        </td>
                                        <td>
                                            <div class="dropdown-primary dropdown open">
                                                <button class="btn btn-light arrow-none dropdown-toggle" type="button" data-bs-toggle="dropdown"><i class="feather icon-more-horizontal text-muted"></i>
                                                </button>
                                                <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                    <a class="dropdown-item" href="#">Insert</a>
                                                    <a class="dropdown-item" href="#">Update</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">disable</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#!"><i class="fab fa-youtube bg-danger social-icon"></i></a>
                                            <div class="table-contain">
                                                <h6>Youtube Videos</h6>
                                                <p class="text-muted">6:00am- 8:00am</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-muted">Softtech</p>
                                        </td>
                                        <td>
                                            <i class="icofont icofont-bird text-success"></i>
                                            <p class="m-l-10 text-success">2.34%</p>
                                        </td>
                                        <td><span>$4556</span></td>
                                        <td>
                                            <button class="btn btn-default btn-bg-danger btn-outline-default btn-round btn-action">Closed</button>
                                        </td>
                                        <td>
                                            <div class="dropdown-primary dropdown open">
                                                <button class="btn btn-light arrow-none dropdown-toggle" type="button" data-bs-toggle="dropdown"><i class="feather icon-more-horizontal text-muted"></i>
                                                </button>
                                                <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                    <a class="dropdown-item" href="#">Insert</a>
                                                    <a class="dropdown-item" href="#">Update</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">disable</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#!"><i class="fab fa-twitter bg-info social-icon"></i></a>
                                            <div class="table-contain">
                                                <h6>Twitter ads</h6>
                                                <p class="text-muted">6:00am- 8:00am</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-muted">Softtech</p>
                                        </td>
                                        <td>
                                            <i class="icofont icofont-bird text-danger"></i>
                                            <p class="m-l-10 text-danger">-3.45%</p>
                                        </td>
                                        <td><span>$5145</span></td>
                                        <td>
                                            <button class="btn btn-default btn-bg-primary btn-outline-default btn-round btn-action">Activate</button>
                                        </td>
                                        <td>
                                            <div class="dropdown-primary dropdown open">
                                                <button class="btn btn-light arrow-none dropdown-toggle" type="button" data-bs-toggle="dropdown"><i class="feather icon-more-horizontal text-muted"></i>
                                                </button>
                                                <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                    <a class="dropdown-item" href="#">Insert</a>
                                                    <a class="dropdown-item" href="#">Update</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">disable</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#!"><i class="fab fa-amazon bg-dark social-icon"></i></a>
                                            <div class="table-contain">
                                                <h6>Amazon ads</h6>
                                                <p class="text-muted">6:00am- 8:00am</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-muted">Softtech</p>
                                        </td>
                                        <td>
                                            <i class="icofont icofont-bird text-success"></i>
                                            <p class="m-l-10 text-success">6.45%</p>
                                        </td>
                                        <td><span>$4256</span></td>
                                        <td>
                                            <button class="btn btn-default btn-bg-warning btn-outline-default btn-round btn-action">Hold</button>
                                        </td>
                                        <td>
                                            <div class="dropdown-primary dropdown open">
                                                <button class="btn btn-light arrow-none dropdown-toggle" type="button" data-bs-toggle="dropdown"><i class="feather icon-more-horizontal text-muted"></i>
                                                </button>
                                                <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                    <a class="dropdown-item" href="#">Insert</a>
                                                    <a class="dropdown-item" href="#">Update</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">disable</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" class="marketing-header">Yesterday</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#!"><i class="fab fa-facebook-f bg-primary social-icon"></i></a>
                                            <div class="table-contain">
                                                <h6>FaceBook ads</h6>
                                                <p class="text-muted">6:00am- 8:00am</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-muted">Softtech</p>
                                        </td>
                                        <td>
                                            <i class="icofont icofont-bird text-danger"></i>
                                            <p class="m-l-10 text-danger">6.45%</p>
                                        </td>
                                        <td><span>$4751</span></td>
                                        <td>
                                            <button class="btn btn-default btn-bg-success btn-outline-default btn-round btn-action">Panding</button>
                                        </td>
                                        <td>
                                            <div class="dropdown-primary dropdown open">
                                                <button class="btn btn-light arrow-none dropdown-toggle" type="button" data-bs-toggle="dropdown"><i class="feather icon-more-horizontal text-muted"></i>
                                                </button>
                                                <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                    <a class="dropdown-item" href="#">Insert</a>
                                                    <a class="dropdown-item" href="#">Update</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">disable</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="b-b-default">
                                        <td><a href="#!"><i class="fab fa-dribbble bg-danger social-icon"></i></a>
                                            <div class="table-contain">
                                                <h6>Youtube Videos</h6>
                                                <p class="text-muted">6:00am- 8:00am</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-muted">Softtech</p>
                                        </td>
                                        <td>
                                            <i class="icofont icofont-bird text-danger"></i>
                                            <p class="m-l-10 text-danger">2.34%</p>
                                        </td>
                                        <td><span>$5235</span></td>
                                        <td>
                                            <button class="btn btn-default btn-bg-danger btn-outline-default btn-round btn-action">Closed</button>
                                        </td>
                                        <td>
                                            <div class="dropdown-primary dropdown open">
                                                <button class="btn btn-light arrow-none dropdown-toggle" type="button" data-bs-toggle="dropdown"><i class="feather icon-more-horizontal text-muted"></i>
                                                </button>
                                                <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                    <a class="dropdown-item" href="#">Insert</a>
                                                    <a class="dropdown-item" href="#">Update</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">disable</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ MArketing compnaigns ] end -->
            <!-- lettest acivity and statustic card start -->
            <div class="col-xl-4 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Campaign Statistics</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <div class="campaign-scroll" style="height:565px;position:relative;">
                                <table class="table table-hover m-b-0 without-header">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h3 class="m-0">100</h3>
                                            </td>
                                            <td>
                                                <p class="m-0">Engagement</p>
                                            </td>
                                            <td class="text-end">
                                                <label class="badge bg-light-warning m-0">43%</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 class="m-0">480</h3>
                                            </td>
                                            <td>
                                                <p class="m-0">Likes</p>
                                            </td>
                                            <td class="text-end">
                                                <label class="badge bg-light-success m-0">58%</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 class="m-0">230</h3>
                                            </td>
                                            <td>
                                                <p class="m-0">Clicks</p>
                                            </td>
                                            <td class="text-end">
                                                <label class="badge bg-light-danger m-0">30%</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 class="m-0">480</h3>
                                            </td>
                                            <td>
                                                <p class="m-0">Likes</p>
                                            </td>
                                            <td class="text-end">
                                                <label class="badge bg-light-danger m-0">30%</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 class="m-0">500</h3>
                                            </td>
                                            <td>
                                                <p class="m-0">Clicks</p>
                                            </td>
                                            <td class="text-end">
                                                <label class="badge bg-light-primary m-0">40%</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 class="m-0">400</h3>
                                            </td>
                                            <td>
                                                <p class="m-0">Engagement</p>
                                            </td>
                                            <td class="text-end">
                                                <label class="badge bg-light-warning m-0">60%</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 class="m-0">600</h3>
                                            </td>
                                            <td>
                                                <p class="m-0">Clicks</p>
                                            </td>
                                            <td class="text-end">
                                                <label class="badge bg-light-success m-0">50%</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 class="m-0">900</h3>
                                            </td>
                                            <td>
                                                <p class="m-0">Likes</p>
                                            </td>
                                            <td class="text-end">
                                                <label class="badge bg-light-primary m-0">90%</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 class="m-0">480</h3>
                                            </td>
                                            <td>
                                                <p class="m-0">Likes</p>
                                            </td>
                                            <td class="text-end">
                                                <label class="badge bg-light-danger m-0">30%</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 class="m-0">500</h3>
                                            </td>
                                            <td>
                                                <p class="m-0">Clicks</p>
                                            </td>
                                            <td class="text-end">
                                                <label class="badge bg-light-primary m-0">40%</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 class="m-0">400</h3>
                                            </td>
                                            <td>
                                                <p class="m-0">Engagement</p>
                                            </td>
                                            <td class="text-end">
                                                <label class="badge bg-light-warning m-0">60%</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 class="m-0">600</h3>
                                            </td>
                                            <td>
                                                <p class="m-0">Clicks</p>
                                            </td>
                                            <td class="text-end">
                                                <label class="badge bg-light-success m-0">50%</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 class="m-0">900</h3>
                                            </td>
                                            <td>
                                                <p class="m-0">Likes</p>
                                            </td>
                                            <td class="text-end">
                                                <label class="badge bg-light-primary m-0">90%</label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- lettest acivity and statustic card end -->
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- custom-data js -->
<script src="assets/js/pages/widget-data.js"></script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
