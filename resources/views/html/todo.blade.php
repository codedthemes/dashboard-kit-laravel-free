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
                            <h5 class="m-b-10">To Do</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">To Do</a></li>
                            <li class="breadcrumb-item">To Do</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Todo-list ] start -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>To Do Card List</h5>
                    </div>
                    <div class="card-body py-3 border-bottom">
                        <div class="input-group">
                            <input type="text" name="task-insert" class="form-control" placeholder="Create your task list" required="">
                            <button class="btn btn-secondary btn-icon" id="create-task">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <section id="task-container">
                            <ul id="task-list">
                                <li>
                                    <p>Lorem Ipsum Dolor Sit Amet</p>
                                </li>
                                <li>
                                    <p>Lorem Ipsum Dolor Sit Amet</p>
                                </li>
                                <li>
                                    <p>Lorem Ipsum Dolor Sit Amet</p>
                                </li>
                                <li>
                                    <p>Lorem Ipsum Dolor Sit Amet</p>
                                </li>
                            </ul>
                            <div class="text-center">
                                <button id="clear-all-tasks" class="btn  btn-primary m-b-0" type="button">Clear All Tasks</button>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <!-- [ Todo-list ] end -->
            <!-- [ Todo-list1 ] start -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>To Do List</h5>
                    </div>
                    <div class="card-body py-3 border-bottom">
                        <div class="input-group">
                            <input type="text" name="task-insert" class="form-control add_task_todo" placeholder="Create your task list" required="">
                            <button class="btn btn-secondary" id="add-btn">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="new-task">
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <div class="check-task form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                        <label class="form-check-label" for="customCheck1">Lorem Ipsum Dolor Sit Amet</label>
                                    </div>
                                </div>
                                <div class="float-end"><a onclick="delete_todo(1);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <div class="check-task form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">Industry's standard dummy text ever since the 1500s</label>
                                    </div>
                                </div>
                                <div class="float-end"><a onclick="delete_todo(2);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <div class="check-task form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck3">
                                        <label class="form-check-label" for="customCheck3">The point of using Lorem Ipsum is that it has a more-or-less </label>
                                    </div>
                                </div>
                                <div class="float-end"><a onclick="delete_todo(3);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <div class="check-task form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck4">
                                        <label class="form-check-label" for="customCheck4">Contrary to popular belief</label>
                                    </div>
                                </div>
                                <div class="float-end"><a onclick="delete_todo(4);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <div class="check-task form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck5">
                                        <label class="form-check-label" for="customCheck5">There are many variations of passages of Lorem Ipsum</label>
                                    </div>
                                </div>
                                <div class="float-end"><a onclick="delete_todo(5);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <div class="check-task form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck6">
                                        <label class="form-check-label" for="customCheck6">Sed ut perspiciatis unde omnis iste natus</label>
                                    </div>
                                </div>
                                <div class="float-end"><a onclick="delete_todo(6);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <div class="check-task form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck7">
                                        <label class="form-check-label" for="customCheck7"> must explain to you how all this mistaken idea</label>
                                    </div>
                                </div>
                                <div class="float-end"><a onclick="delete_todo(7);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Todo-list1 ] end -->
            <!-- [ Todo-modal ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>To Do List in Modal</h5>
                    </div>
                    <div class="card-body">
                        <div class="tasks-widget">
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <div class="check-task form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck8">
                                        <label class="form-check-label" for="customCheck8">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been</label>
                                    </div>
                                </div>
                                <div class="float-end"><a onclick="delete_todo(8);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <div class="check-task form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck9">
                                        <label class="form-check-label" for="customCheck9">the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</label>
                                    </div>
                                </div>
                                <div class="float-end"><a onclick="delete_todo(9);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <div class="check-task form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck10">
                                        <label class="form-check-label" for="customCheck10">of type and scrambled it to make a type specimen book. It has survived not only five</label>
                                    </div>
                                </div>
                                <div class="float-end"><a onclick="delete_todo(10);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <div class="check-task form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck11">
                                        <label class="form-check-label" for="customCheck11">centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</label>
                                    </div>
                                </div>
                                <div class="float-end"><a onclick="delete_todo(11);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                        </div>
                        <div>
                            <button class="btn  btn-primary btn-add-task m-t-10" type="button" data-bs-toggle="modal" data-bs-target="#flipFlop">Add New Tasks</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Todo-modal ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ modal ] start -->
<div class="modal fade" id="flipFlop" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalLabel">Add new todo</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-material">
                            <div class="right-icon-control">
                                <form class="form-material">
                                    <div class="form-group form-primary">
                                        <input type="text" name="task-insert" class="form-control save_task_todo" placeholder="Create your task list" required="">
                                        <span class="form-bar"></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn_save btn  btn-light-primary">Add</button>
                <button type="button" class="btn  btn-light-secondary close_btn" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
@include('html.layouts.footer-bottom-link')
<!-- todo js -->
<script src="assets/js/pages/todo.js"></script>
</body>
</html>
