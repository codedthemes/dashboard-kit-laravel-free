<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
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
                            <h5 class="m-b-10">Task Board</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Task</a></li>
                            <li class="breadcrumb-item">Task Board</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ task-board-left ] start -->
            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    <div class="card-body border-bottom">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-text"><i data-feather="search"></i></span>
                        </div>
                    </div>
                    <div class="card-body py-3 border-bottom">
                        <a data-bs-toggle="collapse" href="#" data-bs-target="#taskfilstatus" class="link-dark" aria-expanded="false" aria-controls="taskfilstatus">
                            <div class="h6 mb-0"><i class="material-icons-two-tone f-20 text-primary">emoji_flags</i> Completed Status <i data-feather="chevron-down" class="float-end me-1 wid-15 hei-15"></i></div>
                        </a>
                        <div class="collapse border-top show pt-3 mt-3" id="taskfilstatus">
                            <div class="h6 mb-2">Highest priority</div>
                            <div class="progress rounded mb-3" style="height: 5px;">
                                <div class="progress-bar bg-success rounded" role="progressbar" style="width: 85%"></div>
                            </div>
                            <div class="h6 mb-2">High priority</div>
                            <div class="progress rounded mb-3" style="height: 5px;">
                                <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 68%"></div>
                            </div>
                            <div class="h6 mb-2">Normal priority</div>
                            <div class="progress rounded mb-3" style="height: 5px;">
                                <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 48%"></div>
                            </div>
                            <div class="h6 mb-2">Low priority</div>
                            <div class="progress rounded mb-2" style="height: 5px;">
                                <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 35%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-3 border-bottom">
                        <a data-bs-toggle="collapse" href="#" data-bs-target="#taskfilassign" class="link-dark" aria-expanded="false" aria-controls="taskfilassign">
                            <div class="h6 mb-0"><i class="material-icons-two-tone f-20 text-primary">account_circle</i> Assign User <i data-feather="chevron-down" class="float-end me-1 wid-15 hei-15"></i></div>
                        </a>
                        <div class="collapse border-top show pt-3 mt-3" id="taskfilassign">
                            <div class="row mb-3">
                                <div class="col-auto pr-0">
                                    <img class="img-fluid img-radius wid-55 me-n3" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                </div>
                                <div class="col">
                                    <span class="h6">Josephin Doe</span>
                                    <small class="text-muted d-block">Santa Ana,CA</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-auto pr-0">
                                    <img class="img-fluid img-radius wid-55 me-n3" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                </div>
                                <div class="col">
                                    <span class="h6">Ashoka T.</span>
                                    <small class="text-muted d-block">Santa Ana,CA</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-auto pr-0">
                                    <img class="img-fluid img-radius wid-55 me-n3" src="assets/images/user/avatar-3.jpg" alt="Generic placeholder image">
                                </div>
                                <div class="col">
                                    <span class="h6">Josephin Doe</span>
                                    <small class="text-muted d-block">Santa Ana,CA</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-auto pr-0">
                                    <img class="img-fluid img-radius wid-55 me-n3" src="assets/images/user/avatar-4.jpg" alt="Generic placeholder image">
                                </div>
                                <div class="col">
                                    <span class="h6">Ashoka T.</span>
                                    <small class="text-muted d-block">Santa Ana,CA</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-auto pr-0">
                                    <img class="img-fluid img-radius wid-55 me-n3" src="assets/images/user/avatar-5.jpg" alt="Generic placeholder image">
                                </div>
                                <div class="col">
                                    <span class="h6">Josephin Doe</span>
                                    <small class="text-muted d-block">Santa Ana,CA</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ task-board-left ] end -->
            <!-- [ task-board-right ] start -->
            <div class="col-xl-9 col-lg-8">
                <div class="card">
                    <div class="card-body py-3">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item dropdown py-1">
                                        <a class="dropdown-toggle link-secondary" href="#" data-bs-toggle="dropdown">
                                            <i class="material-icons-two-tone f-20 text-primary">calendar_today</i> By Date
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#!">Show all</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#!">Today</a>
                                            <a class="dropdown-item" href="#!">Yesterday</a>
                                            <a class="dropdown-item" href="#!">This week</a>
                                            <a class="dropdown-item" href="#!">This month</a>
                                            <a class="dropdown-item" href="#!">This year</a>
                                        </div>
                                    </li>
                                    <li class="list-inline-item dropdown py-1">
                                        <a class="dropdown-toggle link-secondary" href="#" data-bs-toggle="dropdown">
                                            <i class="material-icons-two-tone f-20 text-primary">emoji_flags</i> By Status
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#!">Show all</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#!">Open</a>
                                            <a class="dropdown-item" href="#!">On hold</a>
                                            <a class="dropdown-item" href="#!">Resolved</a>
                                            <a class="dropdown-item" href="#!">Closed</a>
                                            <a class="dropdown-item" href="#!">Dublicate</a>
                                            <a class="dropdown-item" href="#!">Wontfix</a>
                                        </div>
                                    </li>
                                    <li class="list-inline-item dropdown py-1">
                                        <a class="dropdown-toggle link-secondary" href="#" data-bs-toggle="dropdown">
                                            <i class="material-icons-two-tone f-20 text-primary">list_alt</i> By Priority
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#!">Show all</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#!">Highest</a>
                                            <a class="dropdown-item" href="#!">High</a>
                                            <a class="dropdown-item" href="#!">Normal</a>
                                            <a class="dropdown-item" href="#!">Low</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <span class="m-r-15">View Mode:</span>
                                <div class="nav nav-tabs btn-group btn-group-sm d-inline-flex" id="myTab" role="tablist">
                                    <a class=" btn btn-light-primary active" id="grid-tab" data-bs-toggle="tab" href="#grid" role="tab" aria-controls="grid" aria-selected="true"><i class="fas fa-grip-horizontal"></i></a>
                                    <a class=" btn btn-light-primary" id="list-tab" data-bs-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false"><i class="fas fa-list-ul"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-header py-3 d-flex align-items-center justify-content-between">
                                        <h5>#24. Create UI design model</h5>
                                        <div class="dropdown">
                                            <a class="dropdown-toggle arrow-none text-secondary" href="#" data-bs-toggle="dropdown">
                                                <i data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#!" class="dropdown-item">
                                                    <i class="material-icons-two-tone">edit</i>
                                                    <span>Edit task</span>
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    <i class="material-icons-two-tone">delete</i>
                                                    <span>Remove</span>
                                                </a>
                                                <div class="dropdown-item">
                                                    <form>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="taskmark1">
                                                            <label class="form-check-label" for="taskmark1">
                                                                Mark as done
                                                            </label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body py-3 border-bottom d-flex align-items-center justify-content-between">
                                        <p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-danger">calendar_today</i> 28 January, 2020</p>
                                        <div>
                                            <p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-primary">playlist_add_check</i> 14/40</p>
                                            <p class="d-inline-block mb-0 ms-2"><i class="material-icons-two-tone f-18 text-success">chat_bubble</i> 9</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p>A collection of textile samples lay <b>spread out</b> on the table One morning, when <b>Gregor Samsa</b> woke from troubled...</p>
                                        <table class="table table-xs w-auto table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">leaderboard</i> Priority:</td>
                                                    <td class="pb-0"><span class="badge bg-light-danger">Highest</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">account_circle</i> Assign to:</td>
                                                    <td class="pb-0"><img class="img-fluid img-radius wid-20 me-2" src="assets/images/user/avatar-2.jpg" alt="1">Joseph William</td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">timer</i> Due:</td>
                                                    <td class="pb-0"><span class="badge bg-light-warning">23 hours</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="h6">Task progress</div>
                                        <div class="progress rounded" style="height: 5px;">
                                            <div class="progress-bar bg-warning rounded" style="width: 37%"></div>
                                        </div>
                                    </div>
                                    <div class="card-footer py-3 bg-light">
                                        <img class="img-fluid img-radius wid-45 img-thumbnail me-n3" src="assets/images/user/avatar-1.jpg" alt="1">
                                        <img class="img-fluid img-radius wid-45 img-thumbnail me-n3" src="assets/images/user/avatar-2.jpg" alt="1">
                                        <img class="img-fluid img-radius wid-45 img-thumbnail me-n3" src="assets/images/user/avatar-3.jpg" alt="1">
                                        <img class="img-fluid img-radius wid-45 img-thumbnail me-n3" src="assets/images/user/avatar-4.jpg" alt="1">
                                        <div class="img-radius wid-40 hei-40 me-n3 d-inline-flex align-items-center justify-content-center card align-middle f-16 mb-0 bg-success text-white">+5</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-header py-3 d-flex align-items-center justify-content-between">
                                        <h5>#22. Make Responsive UIKit</h5>
                                        <div class="dropdown">
                                            <a class="dropdown-toggle arrow-none text-secondary" href="#" data-bs-toggle="dropdown">
                                                <i data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#!" class="dropdown-item">
                                                    <i class="material-icons-two-tone">edit</i>
                                                    <span>Edit task</span>
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    <i class="material-icons-two-tone">delete</i>
                                                    <span>Remove</span>
                                                </a>
                                                <div class="dropdown-item">
                                                    <form>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="taskmark2">
                                                            <label class="form-check-label" for="taskmark2">
                                                                Mark as done
                                                            </label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body py-3 border-bottom d-flex align-items-center justify-content-between">
                                        <p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-danger">calendar_today</i> 14 March, 2020</p>
                                        <div>
                                            <p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-primary">playlist_add_check</i> 23/37</p>
                                            <p class="d-inline-block mb-0 ms-2"><i class="material-icons-two-tone f-18 text-success">chat_bubble</i> 12</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p>A collection of textile samples lay <b>spread out</b> on the table One morning, when <b>Gregor Samsa</b> woke from troubled...</p>
                                        <table class="table table-xs w-auto table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">leaderboard</i> Priority:</td>
                                                    <td class="pb-0"><span class="badge bg-light-success">Normal</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">account_circle</i> Assign to:</td>
                                                    <td class="pb-0"><img class="img-fluid img-radius wid-20 me-2" src="assets/images/user/avatar-1.jpg" alt="1">Ashoka T.</td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">timer</i> Due:</td>
                                                    <td class="pb-0"><span class="badge bg-light-primary">3 Week</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="h6">Task progress</div>
                                        <div class="progress rounded" style="height: 5px;">
                                            <div class="progress-bar bg-success rounded" style="width: 79%"></div>
                                        </div>
                                    </div>
                                    <div class="card-footer py-3 bg-light">
                                        <img class="img-fluid img-radius wid-45 img-thumbnail me-n3" src="assets/images/user/avatar-1.jpg" alt="1">
                                        <img class="img-fluid img-radius wid-45 img-thumbnail me-n3" src="assets/images/user/avatar-2.jpg" alt="1">
                                        <img class="img-fluid img-radius wid-45 img-thumbnail me-n3" src="assets/images/user/avatar-3.jpg" alt="1">
                                        <img class="img-fluid img-radius wid-45 img-thumbnail me-n3" src="assets/images/user/avatar-4.jpg" alt="1">
                                        <div class="img-radius wid-40 hei-40 me-n3 d-inline-flex align-items-center justify-content-center card align-middle f-16 mb-0 bg-warning text-white">+3</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-header py-3 d-flex align-items-center justify-content-between">
                                        <h5>#21. Add E-Commerce Module</h5>
                                        <div class="dropdown">
                                            <a class="dropdown-toggle arrow-none text-secondary" href="#" data-bs-toggle="dropdown">
                                                <i data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#!" class="dropdown-item">
                                                    <i class="material-icons-two-tone">edit</i>
                                                    <span>Edit task</span>
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    <i class="material-icons-two-tone">delete</i>
                                                    <span>Remove</span>
                                                </a>
                                                <div class="dropdown-item">
                                                    <form>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="taskmark3">
                                                            <label class="form-check-label" for="taskmark3">
                                                                Mark as done
                                                            </label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body py-3 border-bottom d-flex align-items-center justify-content-between">
                                        <p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-danger">calendar_today</i> 16 December, 2020</p>
                                        <div>
                                            <p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-primary">playlist_add_check</i> 23/37</p>
                                            <p class="d-inline-block mb-0 ms-2"><i class="material-icons-two-tone f-18 text-success">chat_bubble</i> 12</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p>A collection of textile samples lay <b>spread out</b> on the table One morning, when <b>Gregor Samsa</b> woke from troubled...</p>
                                        <table class="table table-xs w-auto table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">leaderboard</i> Priority:</td>
                                                    <td class="pb-0"><span class="badge bg-light-warning">High</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">account_circle</i> Assign to:</td>
                                                    <td class="pb-0"><img class="img-fluid img-radius wid-20 me-2" src="assets/images/user/avatar-2.jpg" alt="1">Joseph William</td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">timer</i> Due:</td>
                                                    <td class="pb-0"><span class="badge bg-light-success">1 Month</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="h6">Task progress</div>
                                        <div class="progress rounded" style="height: 5px;">
                                            <div class="progress-bar bg-danger rounded" style="width: 15%"></div>
                                        </div>
                                    </div>
                                    <div class="card-footer py-3 bg-light">
                                        <img class="img-fluid img-radius wid-45 img-thumbnail me-n3" src="assets/images/user/avatar-1.jpg" alt="1">
                                        <img class="img-fluid img-radius wid-45 img-thumbnail me-n3" src="assets/images/user/avatar-2.jpg" alt="1">
                                        <img class="img-fluid img-radius wid-45 img-thumbnail me-n3" src="assets/images/user/avatar-3.jpg" alt="1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-header py-3 d-flex align-items-center justify-content-between">
                                        <h5>#24. Create UI design model</h5>
                                        <div class="dropdown">
                                            <a class="dropdown-toggle arrow-none text-secondary" href="#" data-bs-toggle="dropdown">
                                                <i data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#!" class="dropdown-item">
                                                    <i class="material-icons-two-tone">edit</i>
                                                    <span>Edit task</span>
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    <i class="material-icons-two-tone">delete</i>
                                                    <span>Remove</span>
                                                </a>
                                                <div class="dropdown-item">
                                                    <form>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="taskmark4">
                                                            <label class="form-check-label" for="taskmark4">
                                                                Mark as done
                                                            </label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body py-3 border-bottom d-flex align-items-center justify-content-between">
                                        <p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-danger">calendar_today</i> 28 January, 2020</p>
                                        <div>
                                            <p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-primary">playlist_add_check</i> 23/37</p>
                                            <p class="d-inline-block mb-0 ms-2"><i class="material-icons-two-tone f-18 text-success">chat_bubble</i> 12</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p>A collection of textile samples lay <b>spread out</b> on the table One morning, when <b>Gregor Samsa</b> woke from troubled...</p>
                                        <table class="table table-xs w-auto table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">leaderboard</i> Priority:</td>
                                                    <td class="pb-0"><span class="badge bg-light-danger">Highest</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">account_circle</i> Assign to:</td>
                                                    <td class="pb-0"><img class="img-fluid img-radius wid-20 me-2" src="assets/images/user/avatar-2.jpg" alt="1">Joseph William</td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">timer</i> Due:</td>
                                                    <td class="pb-0"><span class="badge bg-light-warning">23 hours</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="h6">Task progress</div>
                                        <div class="progress rounded" style="height: 5px;">
                                            <div class="progress-bar bg-primary rounded" style="width: 60%"></div>
                                        </div>
                                    </div>
                                    <div class="card-footer py-3 bg-light">
                                        <img class="img-fluid img-radius wid-45 img-thumbnail me-n3" src="assets/images/user/avatar-1.jpg" alt="1">
                                        <img class="img-fluid img-radius wid-45 img-thumbnail me-n3" src="assets/images/user/avatar-2.jpg" alt="1">
                                        <img class="img-fluid img-radius wid-45 img-thumbnail me-n3" src="assets/images/user/avatar-3.jpg" alt="1">
                                        <img class="img-fluid img-radius wid-45 img-thumbnail me-n3" src="assets/images/user/avatar-4.jpg" alt="1">
                                        <div class="img-radius wid-40 hei-40 me-n3 d-inline-flex align-items-center justify-content-center card align-middle f-16 mb-0 bg-success text-white">+5</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-header py-3 d-flex align-items-center justify-content-between">
                                        <h5>#24. Make Responsive UIKit</h5>
                                        <div class="dropdown">
                                            <a class="dropdown-toggle arrow-none text-secondary" href="#" data-bs-toggle="dropdown">
                                                <i data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#!" class="dropdown-item">
                                                    <i class="material-icons-two-tone">edit</i>
                                                    <span>Edit task</span>
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    <i class="material-icons-two-tone">delete</i>
                                                    <span>Remove</span>
                                                </a>
                                                <div class="dropdown-item">
                                                    <form>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="taskmark5">
                                                            <label class="form-check-label" for="taskmark5">
                                                                Mark as done
                                                            </label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body py-3 border-bottom d-flex align-items-center justify-content-between">
                                        <p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-danger">calendar_today</i> 14 March, 2020</p>
                                        <div>
                                            <p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-primary">playlist_add_check</i> 23/37</p>
                                            <p class="d-inline-block mb-0 ms-2"><i class="material-icons-two-tone f-18 text-success">chat_bubble</i> 12</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p>A collection of textile samples lay <b>spread out</b> on the table One morning, when <b>Gregor Samsa</b> woke from troubled...</p>
                                        <table class="table table-xs w-auto table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">leaderboard</i> Priority:</td>
                                                    <td class="pb-0"><span class="badge bg-light-success">Normal</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">account_circle</i> Assign to:</td>
                                                    <td class="pb-0"><img class="img-fluid img-radius wid-20 me-2" src="assets/images/user/avatar-1.jpg" alt="1">Ashoka T.</td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">timer</i> Due:</td>
                                                    <td class="pb-0"><span class="badge bg-light-primary">3 Week</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="h6">Task progress</div>
                                        <div class="progress rounded" style="height: 5px;">
                                            <div class="progress-bar bg-success rounded" style="width: 79%"></div>
                                        </div>
                                    </div>
                                    <div class="card-footer py-3 bg-light">
                                        <img class="img-fluid img-radius wid-45 img-thumbnail me-n3" src="assets/images/user/avatar-1.jpg" alt="1">
                                        <img class="img-fluid img-radius wid-45 img-thumbnail me-n3" src="assets/images/user/avatar-2.jpg" alt="1">
                                        <img class="img-fluid img-radius wid-45 img-thumbnail me-n3" src="assets/images/user/avatar-3.jpg" alt="1">
                                        <img class="img-fluid img-radius wid-45 img-thumbnail me-n3" src="assets/images/user/avatar-4.jpg" alt="1">
                                        <div class="img-radius wid-40 hei-40 me-n3 d-inline-flex align-items-center justify-content-center card align-middle f-16 mb-0 bg-warning text-white">+3</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-header py-3 d-flex align-items-center justify-content-between">
                                        <h5>#24. Add E-Commerce Module</h5>
                                        <div class="dropdown">
                                            <a class="dropdown-toggle arrow-none text-secondary" href="#" data-bs-toggle="dropdown">
                                                <i data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#!" class="dropdown-item">
                                                    <i class="material-icons-two-tone">edit</i>
                                                    <span>Edit task</span>
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    <i class="material-icons-two-tone">delete</i>
                                                    <span>Remove</span>
                                                </a>
                                                <div class="dropdown-item">
                                                    <form>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="taskmark6">
                                                            <label class="form-check-label" for="taskmark6">
                                                                Mark as done
                                                            </label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body py-3 border-bottom d-flex align-items-center justify-content-between">
                                        <p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-danger">calendar_today</i> 16 December, 2020</p>
                                        <div>
                                            <p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-primary">playlist_add_check</i> 23/37</p>
                                            <p class="d-inline-block mb-0 ms-2"><i class="material-icons-two-tone f-18 text-success">chat_bubble</i> 12</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p>A collection of textile samples lay <b>spread out</b> on the table One morning, when <b>Gregor Samsa</b> woke from troubled...</p>
                                        <table class="table table-xs w-auto table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">leaderboard</i> Priority:</td>
                                                    <td class="pb-0"><span class="badge bg-light-warning">High</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">account_circle</i> Assign to:</td>
                                                    <td class="pb-0"><img class="img-fluid img-radius wid-20 me-2" src="assets/images/user/avatar-2.jpg" alt="1">Joseph William</td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 pb-0"><i class="material-icons-two-tone text-primary f-16">timer</i> Due:</td>
                                                    <td class="pb-0"><span class="badge bg-light-success">1 Month</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="h6">Task progress</div>
                                        <div class="progress rounded" style="height: 5px;">
                                            <div class="progress-bar bg-danger rounded" style="width: 15%"></div>
                                        </div>
                                    </div>
                                    <div class="card-footer py-3 bg-light">
                                        <img class="img-fluid img-radius wid-45 img-thumbnail me-n3" src="assets/images/user/avatar-1.jpg" alt="1">
                                        <img class="img-fluid img-radius wid-45 img-thumbnail me-n3" src="assets/images/user/avatar-2.jpg" alt="1">
                                        <img class="img-fluid img-radius wid-45 img-thumbnail me-n3" src="assets/images/user/avatar-3.jpg" alt="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body py-3 border-bottom">
                                        <div class="row justify-content-sm-between">
                                            <div class="col-sm-5 mb-2 mb-sm-0">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="tasklist1" checked>
                                                    <label class="form-check-label" for="tasklist1">
                                                        #24. Create UI design model
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <span class="badge bg-light-danger">Highest</span>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <img class="img-fluid img-radius wid-20 me-2" src="assets/images/user/avatar-2.jpg" alt="1">Joseph William
                                                    </div>
                                                    <div>
                                                        <p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-primary">playlist_add_check</i> 23/37</p>
                                                        <p class="d-inline-block mb-0 ms-2"><i class="material-icons-two-tone f-18 text-success">chat_bubble</i> 12</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body py-3 border-bottom">
                                        <div class="row justify-content-sm-between">
                                            <div class="col-sm-5 mb-2 mb-sm-0">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="tasklist2">
                                                    <label class="form-check-label" for="tasklist2">
                                                        #22. Make Responsive UIKit
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <span class="badge bg-light-success">Normal</span>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <img class="img-fluid img-radius wid-20 me-2" src="assets/images/user/avatar-1.jpg" alt="1">Ashoka T.
                                                    </div>
                                                    <div>
                                                        <p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-primary">playlist_add_check</i> 14/40</p>
                                                        <p class="d-inline-block mb-0 ms-2"><i class="material-icons-two-tone f-18 text-success">chat_bubble</i> 9</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body py-3 border-bottom">
                                        <div class="row justify-content-sm-between">
                                            <div class="col-sm-5 mb-2 mb-sm-0">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="tasklist3" checked>
                                                    <label class="form-check-label" for="tasklist3">
                                                        #21. Add E-Commerce Module
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <span class="badge bg-light-warning">High</span>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <img class="img-fluid img-radius wid-20 me-2" src="assets/images/user/avatar-1.jpg" alt="1">Ashoka T.
                                                    </div>
                                                    <div>
                                                        <p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-primary">playlist_add_check</i> 19/24</p>
                                                        <p class="d-inline-block mb-0 ms-2"><i class="material-icons-two-tone f-18 text-success">chat_bubble</i> 15</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body py-3 border-bottom">
                                        <div class="row justify-content-sm-between">
                                            <div class="col-sm-5 mb-2 mb-sm-0">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="tasklist4">
                                                    <label class="form-check-label" for="tasklist4">
                                                        #24. Create UI design model
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <span class="badge bg-light-danger">Highest</span>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <img class="img-fluid img-radius wid-20 me-2" src="assets/images/user/avatar-2.jpg" alt="1">Joseph William
                                                    </div>
                                                    <div>
                                                        <p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-primary">playlist_add_check</i> 23/37</p>
                                                        <p class="d-inline-block mb-0 ms-2"><i class="material-icons-two-tone f-18 text-success">chat_bubble</i> 12</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body py-3 border-bottom">
                                        <div class="row justify-content-sm-between">
                                            <div class="col-sm-5 mb-2 mb-sm-0">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="tasklist5">
                                                    <label class="form-check-label" for="tasklist5">
                                                        #22. Make Responsive UIKit
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <span class="badge bg-light-success">Normal</span>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <img class="img-fluid img-radius wid-20 me-2" src="assets/images/user/avatar-1.jpg" alt="1">Ashoka T.
                                                    </div>
                                                    <div>
                                                        <p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-primary">playlist_add_check</i> 14/40</p>
                                                        <p class="d-inline-block mb-0 ms-2"><i class="material-icons-two-tone f-18 text-success">chat_bubble</i> 9</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body py-3 border-bottom">
                                        <div class="row justify-content-sm-between">
                                            <div class="col-sm-5 mb-2 mb-sm-0">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="tasklist6">
                                                    <label class="form-check-label" for="tasklist6">
                                                        #21. Add E-Commerce Module
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <span class="badge bg-light-warning">High</span>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <img class="img-fluid img-radius wid-20 me-2" src="assets/images/user/avatar-1.jpg" alt="1">Ashoka T.
                                                    </div>
                                                    <div>
                                                        <p class="d-inline-block mb-0"><i class="material-icons-two-tone f-18 text-primary">playlist_add_check</i> 19/24</p>
                                                        <p class="d-inline-block mb-0 ms-2"><i class="material-icons-two-tone f-18 text-success">chat_bubble</i> 15</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ task-board-right ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- task-board js -->
@include('html.layouts.footer-bottom-link')
</body>

</html>
