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
                            <h5 class="m-b-10">Full Calendar</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item">Full Calendar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Full-calendar ] start -->
            <div class="col-sm-12">
                <div class="card fullcalendar-card">
                    <div class="card-header">
                        <h5>Full Calendar</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-2 col-md-12">
                                <div id='external-events' class="external-events">
                                    <h4>Events</h4>
                                    <div class='fc-event'>My Event 1</div>
                                    <div class='fc-event'>My Event 2</div>
                                    <div class='fc-event'>My Event 3</div>
                                    <div class='fc-event'>My Event 4</div>
                                    <div class='fc-event'>My Event 5</div>
                                </div>
                            </div>
                            <div class="col-xl-10 col-md-12">
                                <div id='calendar' class='calendar'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Full-calendar ] end -->
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
<!-- Full calendar js -->
<script src="assets/js/plugins/moment.js"></script>
<script src="assets/js/plugins/jquery-ui.min.js"></script>
<script src="assets/js/plugins/main.min.js"></script>
<script type="text/javascript">
    // Full calendar
    var myModal = new bootstrap.Modal(document.getElementById('calendarmodal'));
    var etitle;
    var etype;
    var etypeclass;

    new FullCalendar.Draggable(document.getElementById("external-events"), {
        itemSelector: ".fc-event",
        eventData: function(e) {
            return {
                title: e.innerText,
            }
        }
    });
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
            // myModal.show();
            // var temp = arg.event.classNames.toString();
            // temp = temp.substr(6, temp.length);
            // $('#caleventtitle').val(arg.event.title);
            // $('#caleventtype').val(temp.toString());
            // $('#addevent').on('click', function() {
            //     etitle = $('#caleventtitle').val();
            //     etype = $('#caleventtype').val();
            //     // =====
            //     arg.title = etitle;
            //     arg.className = etypeclass;
            //     // calendar.eventChange({
            //     //     title: etitle,
            //     //     className: etypeclass,
            //         // start: arg.startStr,
            //         // end: arg.endStr,
            //         // allDay: arg.allDay
            //     // });
            //     // =====
            //     calendar.unselect();
            //     $('#caleventtitle').val("");
            //     $('#caleventtype').prop('selectedIndex', 0);
            //     myModal.hide();
            //     $('#addevent').off('click');
            // })
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
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
