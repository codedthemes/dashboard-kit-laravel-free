<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    <link rel="stylesheet" href="assets/css/plugins/dataTables.bootstrap4.min.css">
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
                            <h5 class="m-b-10">Circular</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">School</a></li>
                            <li class="breadcrumb-item">Circular</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- subscribe start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Course details</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="nav flex-column nav-pills mb-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Computer Science</a>
                                    <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Management and Commerce</a>
                                    <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Pharmacy</a>
                                    <a class="nav-link" id="v-pills-Seating-tab" data-bs-toggle="pill" href="#v-pills-Seating" role="tab" aria-controls="v-pills-Seating" aria-selected="false">Engineering</a>
                                    <a class="nav-link" id="v-pills-Results-tab" data-bs-toggle="pill" href="#v-pills-Results" role="tab" aria-controls="v-pills-Results" aria-selected="false">Science</a>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <h5>Master of Computer Applications</h5>
                                        <hr>
                                        <h5 class="text-primary">Eligibility Criteria</h5>
                                        <ul>
                                            <li>A candidate shall have passed the qualifying examination with minimum of 50% marks (45% marks in case SC/ST/OBC category) of grand total.</li>
                                            <li>A candidate shall have passed the Higher Secondary School Examination (Standard XII, 10+2 pattern) and Bachelor's degree with Mathematics or Business Mathematics or Statistics as one of the subjects.</li>
                                            <li>A candidate shall have appeared in the CMAT (Common Management Aptitude Test) as prescribed by AICTE.</li>
                                        </ul>
                                        <h5 class="text-primary">Intake</h5>
                                        <p>300 Seats</p>
                                        <h5 class="text-primary">Duration</h5>
                                        <p>The duration of the course shall be Full time three academic years (i.e. 6 semesters).</p>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <h5>Master of Business Administration</h5>
                                        <hr>
                                        <h5 class="text-primary">Eligibility Criteria</h5>
                                        <ul>
                                            <li>Any Graduate with 50% marks (45% for reserved category) and CMAT/CAT/MAT or any other relevant entrant test for management program.</li>
                                        </ul>
                                        <h5 class="text-primary">Intake</h5>
                                        <p>200 Seats</p>
                                        <h5 class="text-primary">Duration</h5>
                                        <p>2 years</p>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                        <h5>Bachelor of Pharmacy</h5>
                                        <hr>
                                        <h5 class="text-primary">Eligibility Criteria</h5>
                                        <ul>
                                            <li>12th passed in Science Stream (as per UGC norms)</li>
                                        </ul>
                                        <h5 class="text-primary">Intake</h5>
                                        <p>100 Seats</p>
                                        <h5 class="text-primary">Duration</h5>
                                        <p>The duration of the course shall be full time four academic years. Each academic year shall be divided into two semesters.</p>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-Seating" role="tabpanel" aria-labelledby="v-pills-Seating-tab">
                                        <h5>Diploma Engineering</h5>
                                        <hr>
                                        <h5 class="text-primary">Eligibility Criteria</h5>
                                        <ul>
                                            <li>10th(Minimum)</li>
                                        </ul>
                                        <h5 class="text-primary">Intake</h5>
                                        <p>60 Seats</p>
                                        <h5 class="text-primary">Duration</h5>
                                        <p>The duration of the course shall be full time four academic years. Each academic year shall be divided into two semesters.</p>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-Results" role="tabpanel" aria-labelledby="v-pills-Results-tab">
                                        <h5>Bachelor of Science in Chemistry</h5>
                                        <hr>
                                        <h5 class="text-primary">Eligibility Criteria</h5>
                                        <ul>
                                            <li>H. Sc (Science) of A, B or AB group</li>
                                        </ul>
                                        <h5 class="text-primary">Intake</h5>
                                        <p>100 Seats</p>
                                        <h5 class="text-primary">Duration</h5>
                                        <p>The duration of the course shall be full time three academic years (i.e. 6 semesters). Student will receive degree of B.Sc. on completion of 3rd year successfully.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- subscribe end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<script src="assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<script>
    // DataTable start
    // $('#report-table').DataTable();
    // DataTable end
</script>

@include('html.layouts.footer-bottom-link')
</body>

</html>
