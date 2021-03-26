<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    <link rel="stylesheet" href="assets/css/plugins/main.css">
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
                            <h5 class="m-b-10">School Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">School</a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- customar project  start -->
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-user-graduate f-36 text-info"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Student</h6>
                                <h2 class="m-b-0">45</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-users f-36 text-danger"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Parents</h6>
                                <h2 class="m-b-0">9</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-user-tie f-36 text-success"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Teacher</h6>
                                <h2 class="m-b-0">5</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-book-open f-36 text-primary"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Subject</h6>
                                <h2 class="m-b-0">25</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customar project  end -->
            <!-- subscribe start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Account summary</h5>
                    </div>
                    <div class="card-body">
                        <div id="summary-chart"></div>
                    </div>
                </div>
            </div>
            <!-- subscribe end -->
            <!-- Tasks start -->
            <div class="col-xl-5 col-md-12">
                <div class="card task-card">
                    <div class="card-header">
                        <h5>Notice</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled task-list">
                            <li>
                                <i class="feather icon-check f-w-600 task-icon bg-success"></i>
                                <p class="m-b-5">8:50</p>
                                <h6 class="text-muted">Your first semester Exam will held on <span class="text-primary">19-04-2018</span>.</h6>
                            </li>
                            <li>
                                <i class="task-icon bg-primary"></i>
                                <p class="m-b-5">Sat, 5 Mar</p>
                                <h6 class="text-muted">In your school campus on <span class="text-primary">1-03-2018</span> will held a program of <span class="text-primary">annual sports day</span>.You are all invited.</h6>
                            </li>
                            <li>
                                <i class="task-icon bg-danger"></i>
                                <p class="m-b-5">Sun, 17 Feb</p>
                                <h6 class="text-muted">Your second semester exam will held on 30-08-2018.Please be prepare for your exam</h6>
                            </li>
                            <li>
                                <i class="task-icon bg-warning"></i>
                                <p class="m-b-5">Sat, 18 Mar</p>
                                <h6 class="text-muted">On <span class="text-primary">20-11-2018</span> will held a programming contest in school campus.Registration start from today. </h6>
                            </li>
                            <li class="pb-2 mb-0">
                                <i class="task-icon bg-success"></i>
                                <p class="m-b-5">Sat, 22 Mar</p>
                                <h6 class="text-muted">Prize giving ceremony will held on <span class="text-primary">03-01-2019</span>.Best Student List published In your Website.</h6>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-md-12">
                <div class="card overflow-hidden">
                    <div class="card-body bg-primary">
                        <div id="absent-chart"></div>
                    </div>
                    <div class="card-footer">
                        <h6 class="text-muted m-b-30 m-t-15">Students Today's Attendance</h6>
                        <div class="row text-center">
                            <div class="col-6 border-end">
                                <h6 class="text-muted m-b-10">Total present student</h6>
                                <h3 class="">175</h3>
                            </div>
                            <div class="col-6">
                                <h6 class="text-muted m-b-10">Total absent student</h6>
                                <h3 class="">76</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tasks end -->
            <!-- subscribe start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Event List </h5>
                    </div>
                    <div class="card-body">
                        <div id='calendar' class='calendar'></div>
                    </div>
                </div>
            </div>
            <!-- subscribe end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="calendarmodal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Calendar Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-3">
                    <label class="form-label">Event title</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-font"></i></span>
                        <input type="text" class="form-control" placeholder="Enter event title" id="caleventtitle">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Event Type</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fas fa-tag"></i></span>
                        <select class="form-select" id="caleventtype">
                            <option>primary</option>
                            <option>danger</option>
                            <option>success</option>
                            <option>warning</option>
                            <option>info</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-light-primary" id="addevent">Add Event</button>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<script src="assets/js/plugins/moment.js"></script>
<script src="assets/js/plugins/jquery-ui.min.js"></script>
<script src="assets/js/plugins/main.min.js"></script>
<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>
<script>
    // [ operation-processed ] start
    $(function() {
        var options = {
            chart: {
                height: 250,
                type: 'area',
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                width: 2,
                curve: 'smooth'
            },
            colors: ["#ED4C13", "#5052FC"],
            fill: {
                type: 'solid',
                opacity: 0.2,
            },
            markers: {
                size: 3,
                opacity: 0.9,
                colors: "#fff",
                strokeColor: ["#ED4C13", "#5052FC"],
                strokeWidth: 2,
                hover: {
                    size: 7,
                }
            },
            series: [{
                name: 'Expense',
                data: [40, 75, 20, 45, 30, 50, 30]
            }, {
                name: 'Income',
                data: [90, 40, 60, 20, 10, 0, 0]
            }],

            xaxis: {
                type: 'datetime',
                categories: ["2019\-01-19", "2019\-02-19", "2019\-03-19", "2019\-04-19", "2019\-05-19", "2019\-06-19", "2019\-07-19"],
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                },
            }
        }
        var chart = new ApexCharts(
            document.querySelector("#summary-chart"),
            options
        );
        chart.render();
    });
    // [ operation-processed ] end
    // [ proj-earning ] start
    $(function() {
        var options = {
            chart: {
                type: 'bar',
                height: 310,
                zoom: {
                    enabled: false
                },
                toolbar: {
                    show: false,
                },
            },
            dataLabels: {
                enabled: false,
            },
            colors: ["#fff"],
            plotOptions: {
                bar: {
                    color: '#fff',
                    columnWidth: '60%',
                }
            },
            fill: {
                type: 'solid',
                opacity: 1,
            },
            series: [{
                data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54, 25, 66, 41, 89, 63, 54, 25, 66, 41, 89, 63, 25, 44, 12, 36]
            }],
            xaxis: {
                crosshairs: {
                    width: 1
                },
                labels: {
                    show: false,
                },
            },
            yaxis: {
                labels: {
                    style: {
                        color: '#fff',
                    }
                },
            },
            grid: {
                borderColor: '#ffffff85',
                padding: {
                    bottom: 0,
                    left: 10,
                }
            },
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return 'Total absent'
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#absent-chart"), options);
        chart.render();
    });
    // [ proj-earning ] end
    // Full calendar
    $(function() {
        // Full calendar
        var myModal = new bootstrap.Modal(document.getElementById('calendarmodal'));
        var etitle;
        var etype;
        var etypeclass;

        var calendar = new FullCalendar.Calendar(document.getElementById('calendar'), {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            themeSystem: 'bootstrap',
            initialDate: '2020-10-12',
            slotDuration: '00:10:00',
            navLinks: true,
            droppable: true,
            selectable: true,
            selectMirror: true,
            select: function(arg) {
                var tmparg = arg;
                arg = null;
                myModal.show();
                $('#addevent').on('click', function() {
                    etitle = $('#caleventtitle').val();
                    etype = $('#caleventtype').val();
                    // etypeclass = "bg-light-" + etype + " border-" + etype;
                    etypeclass = "event-" + etype;
                    calendar.addEvent({
                        title: etitle,
                        className: etypeclass,
                        start: tmparg.startStr,
                        end: tmparg.endStr,
                        allDay: tmparg.allDay
                    });
                    calendar.unselect();
                    $('#caleventtitle').val("");
                    $('#caleventtype').prop('selectedIndex', 0);
                    myModal.hide();
                    $('#addevent').off('click');
                })
            },
            eventClick: function(arg) {
                if (confirm('Are you sure you want to delete this event?')) {
                    arg.event.remove()
                }
            },
            editable: true,
            dayMaxEvents: true,
            handleWindowResize: true,
            events: [{
                    title: 'All Day Event',
                    start: '2020-10-01',
                    className: "event-warning"
                },
                {
                    title: 'Long Event',
                    start: '2020-10-07',
                    end: '2020-10-10',
                    className: "event-primary"
                },
                {
                    groupId: 999,
                    title: 'Repeating Event',
                    start: '2020-10-09T16:00:00',
                    className: "event-danger"
                },
                {
                    groupId: 999,
                    title: 'Repeating Event',
                    start: '2020-10-16T16:00:00',
                    className: "event-danger"
                },
                {
                    title: 'Conference',
                    start: '2020-10-11',
                    end: '2020-10-13',
                    className: "event-info"
                },
                {
                    title: 'Meeting',
                    start: '2020-10-12T10:30:00',
                    end: '2020-10-12T12:30:00',
                    className: "event-danger"
                },
                {
                    title: 'Lunch',
                    start: '2020-10-12T12:00:00',
                    className: "event-success"
                },
                {
                    title: 'Meeting',
                    start: '2020-10-12T14:30:00',
                    className: "event-warning"
                },
                {
                    title: 'Happy Hour',
                    start: '2020-10-12T17:30:00',
                    className: "event-info"
                },
                {
                    title: 'Dinner',
                    start: '2020-10-12T20:00:00',
                    className: "event-primary"
                },
                {
                    title: 'Birthday Party',
                    start: '2020-10-13T07:00:00',
                    className: "event-success"
                },
                {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2020-10-28'
                }
            ]
        });
        calendar.render();
    });
</script>

@include('html.layouts.footer-bottom-link')
</body>

</html>
