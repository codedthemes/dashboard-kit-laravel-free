<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    <link rel="stylesheet" href="assets/css/plugins/select2.min.css">
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
                            <h5 class="m-b-10">Faq</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Faq</a></li>
                            <li class="breadcrumb-item"><a href="#!">faq 3</a></li>
                            <li class="breadcrumb-item">Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Related Topic</h5>
                    </div>
                    <div class="list-group list-group-flush list-pills">
                        <a href="#!" class="list-group-item list-group-item-action">
                            <span class="f-w-500"><i class="feather icon-chevrons-right m-r-10 f-16 text-primary"></i>Transection Fees</span>
                            <div class="float-end">
                                <span class="badge bg-light-primary">34</span>
                            </div>
                        </a>
                        <a href="#!" class="list-group-item list-group-item-action">
                            <span class="f-w-500"><i class="feather icon-chevrons-right m-r-10 f-16 text-primary"></i>Worldwide Good Support</span>
                            <div class="float-end">
                                <span class="badge bg-light-primary">12</span>
                            </div>
                        </a>
                        <a href="#!" class="list-group-item list-group-item-action">
                            <span class="f-w-500"><i class="feather icon-chevrons-right m-r-10 f-16 text-primary"></i>Refund Policy</span>
                        </a>
                        <a href="#!" class="list-group-item list-group-item-action">
                            <span class="f-w-500"><i class="feather icon-chevrons-right m-r-10 f-16 text-primary"></i>Bank Transfer</span>
                        </a>
                        <a href="#!" class="list-group-item list-group-item-action">
                            <span class="f-w-500"><i class="feather icon-chevrons-right m-r-10 f-16 text-primary"></i>Personal Details</span>
                        </a>
                        <a href="#!" class="list-group-item list-group-item-action rder-bottom-0">
                            <span class="f-w-500"><i class="feather icon-chevrons-right m-r-10 f-16 text-primary"></i>Security</span>
                        </a>
                    </div>
                    <div class="card-footer">
                        <a href="#!">Show more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-0">Drag and drop a file with name is no longer working.</h3>
                        <small class="mb-0 text-muted">
                            updated by:
                            <a href="#!" class="text-muted font-weight-bold text-h-primary">mom2kjs</a>
                            15 days ago
                        </small>
                        <div class="row justify-content-between">
                            <div class="col-auto my-2">
                                <a href="#!" class="badge bg-light-danger">New</a>
                                <a href="#!" class="badge bg-light-primary">Html</a>
                                <a href="#!" class="badge bg-light-danger">scss</a>
                            </div>
                            <div class="col-auto my-2">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-eye text-primary me-2"></i><span>36k+</span></a></li>
                                    <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-comments text-primary me-2"></i><span>13</span></a></li>
                                    <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-heart text-danger me-2"></i><span>34K+</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <p>We are delighted to welcome you to the annual <i>Flavorful Tuscany Meetup</i> and hope you will enjoy the programmer as well as your stay at the <a href="http://ckeditor.com">Bilancino Hotel</a>.</p>
                        <p>Please find below the full schedule of the event.</p>
                        <figure class="table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th  colspan="2">Saturday, July 14</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td >9:30&nbsp;AM&nbsp;-&nbsp;11:30&nbsp;AM</td>
                                        <td >Americano vs. Brewed - “know coffee” with <strong>Stefano Garau</strong></td>
                                    </tr>
                                    <tr>
                                        <td >1:00&nbsp;PM&nbsp;-&nbsp;3:00&nbsp;PM</td>
                                        <td >Pappardelle al pomodoro -
                                            <mark class="marker-yellow">live cooking</mark> with <strong>Rita</strong></td>
                                    </tr>
                                    <tr>
                                        <td >5:00&nbsp;PM&nbsp;-&nbsp;8:00&nbsp;PM</td>
                                        <td >Tuscan vineyards at a glancewith <strong>Frederico Riscoli</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </figure>
                        <blockquote class="blockquote">
                            <p>The annual Flavorful Tuscany meetups are always a culinary discovery. You get the best of Tuscan flavors during an intense one-day stay at one of the top hotels of the region. All the
                                sessions are lead by top chefs passionate about their profession. I would certainly recommend to save the date in your calendar for this one!</p>
                            <p class="mb-0">Angelina Calvino, food journalist</p>
                        </blockquote>
                        <p>Please arrive at the <a href="#!">Bilancino Hotel</a> reception desk
                            <mark class="marker-yellow">at least half an hour earlier</mark> to make sure that the registration process goes as smoothly as possible.</p>
                        <p>We look forward to welcoming you to the event.</p>
                        <p><strong>Victoria Valc</strong></p>
                        <p><strong>Event Manager</strong></p>
                        <p><strong>Bilancino Hotel</strong></p>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<script src="assets/js/plugins/select2.full.min.js"></script>
<script>
    $(function() {
        $(".skill-mlt-select").select2();
    });
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
