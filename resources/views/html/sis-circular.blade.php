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
                        <div class="nav nav-pills" role="tablist">
                            <a href="#!" class="nav-link active">2018 - 19</a>
                            <a href="#!" class="nav-link">2017 - 18</a>
                            <a href="#!" class="nav-link">2016 - 17</a>
                            <a href="#!" class="nav-link">2015 - 16</a>
                            <a href="#!" class="nav-link">2014 - 15</a>
                            <a href="#!" class="nav-link">2013 - 14</a>
                            <a href="#!" class="nav-link">2012 - 13</a>
                            <a href="#!" class="nav-link">2011 - 12</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>CIRCULAR : 2018-19 </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="nav flex-column nav-pills mb-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">General Notices</a>
                                    <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Exam Notices</a>
                                    <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Seat No</a>
                                    <a class="nav-link" id="v-pills-Seating-tab" data-bs-toggle="pill" href="#v-pills-Seating" role="tab" aria-controls="v-pills-Seating" aria-selected="false">Seating Arrangement</a>
                                    <a class="nav-link" id="v-pills-Results-tab" data-bs-toggle="pill" href="#v-pills-Results" role="tab" aria-controls="v-pills-Results" aria-selected="false">Results</a>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <h5>General Notices : 2018-19</h5>
                                        <hr>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>20/05/2019
                                                    </td>
                                                    <td><a href="#!">Ph D Fee Notice 2019-20</a></td>
                                                </tr>
                                                <tr>
                                                    <td>02/05/2019
                                                    </td>
                                                    <td><a href="#!">09-2019 - Time Duration for Exit Application</a></td>
                                                </tr>
                                                <tr>
                                                    <td>25/04/2019
                                                    </td>
                                                    <td><a href="#!">FEE NOTICE for 1st Term Academic Year 2019-20</a></td>
                                                </tr>
                                                <tr>
                                                    <td>19/02/2019
                                                    </td>
                                                    <td><a href="#!">35-2019 Revised rules and Regulation for usage of Auditurium etc.</a></td>
                                                </tr>
                                                <tr>
                                                    <td>14/02/2019
                                                    </td>
                                                    <td><a href="#!">36-2019 B.U.Patel Scholarship Scheme 2018-19</a></td>
                                                </tr>
                                                <tr>
                                                    <td>08/01/2019
                                                    </td>
                                                    <td><a href="#!">Ph. D. Fee Extension Notice</a></td>
                                                </tr>
                                                <tr>
                                                    <td>11/12/2018
                                                    </td>
                                                    <td><a href="#!">Fees Notice for (4, 6, 8, 10 Sem) 2018-19</a></td>
                                                </tr>
                                                <tr>
                                                    <td>25/10/2018
                                                    </td>
                                                    <td><a href="#!">2nd Term Fees Notice</a></td>
                                                </tr>
                                                <tr>
                                                    <td>05/10/2018
                                                    </td>
                                                    <td><a href="#!"> Electroal Literacy Club</a></td>
                                                </tr>
                                                <tr>
                                                    <td>11/09/2018
                                                    </td>
                                                    <td><a href="#!"> Circular - 03-2018 Migration Certificates</a></td>
                                                </tr>
                                                <tr>
                                                    <td>06/09/2018
                                                    </td>
                                                    <td><a href="#!"> 19/2018, Appointment of I/c. Director Management (SRIMCA)</a></td>
                                                </tr>
                                                <tr>
                                                    <td>31/08/2018
                                                    </td>
                                                    <td><a href="#!">1st Term MBNC Fees Notice</a></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="6">28/08/2018
                                                    </td>
                                                    <td><a href="#!">Literary Club</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">Media and Press Club</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">Music Club</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">Theater Club</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">Dance Club</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">Community Social service Club</a></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="9">09/08/2018
                                                    </td>
                                                    <td><a href="#!">International Collaboration Cell</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">Entrepreneurship Development & Startup Cell</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">Anti-Ragging</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">Committee Against Sexual Harassment</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">Grievance Redressal Committee</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">Women Cell</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">Academic Development Cell</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">Data Collection Committee</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">Training & Placement Cell </a></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <h5>Exam Notices : 2018-19</h5>
                                        <hr>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>30/07/2019
                                                    </td>
                                                    <td>
                                                        <a href="#!">Internal CIE Improvement Application Date Extended 3 Aug 2019</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>22/07/2019
                                                    </td>
                                                    <td>
                                                        <a href="#!">Re Assessment-Result-Summer-2019-Examination</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>15/07/2019
                                                    </td>
                                                    <td>
                                                        <a href="#!">Schedule of Winter 2019 Examination</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>03/07/2019
                                                    </td>
                                                    <td>
                                                        <a href="#!">Re Assessment Result - Diploma Programmes - Summer 2019</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>25/06/2019
                                                    </td>
                                                    <td>
                                                        <a href="#!">Re Checking Result - Round-III - Summer 2019</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="2">24/06/2019
                                                    </td>
                                                    <td>
                                                        <a href="#!">ReChecking Round-1-Result Notification-Summer2019</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#!">ReChecking Round-2-Result Notification-Summer2019</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>21/06/2019
                                                    </td>
                                                    <td>
                                                        <a href="#!">Re Checking - Round-III - 24 June 2019</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>20/06/2019
                                                    </td>
                                                    <td>
                                                        <h5>OVERALL STUDENT DETAIN LIST</h5>
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-sm">
                                                                <tr>
                                                                    <td><a href="#!">B. Arch</a></td>
                                                                    <td><a href="#!">B. Des.</a></td>
                                                                    <td><a href="#!">B.C.A (Hons)</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#!">B.Com</a></td>
                                                                    <td><a href="#!">B.I.D</a></td>
                                                                    <td><a href="#!">B.Pharm</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#!">B.Sc. (Chemistry)</a></td>
                                                                    <td><a href="#!">B.Sc. (Microbiology)</a></td>
                                                                    <td><a href="#!">B.Tech (Automobile)</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#!">B.Tech (Chemical)</a></td>
                                                                    <td><a href="#!">B.Tech (Civil)</a></td>
                                                                    <td><a href="#!">B.Tech (EC)</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#!">B.Tech (ICT)</a></td>
                                                                    <td><a href="#!">B.Tech (IT)</a></td>
                                                                    <td><a href="#!">B.Tech (Mechanical)</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#!">BBA</a></td>
                                                                    <td><a href="#!">BCA (Honors)</a></td>
                                                                    <td><a href="#!">BCA</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#!">Diploma (CE)</a></td>
                                                                    <td><a href="#!">Diploma (Chemical)</a></td>
                                                                    <td><a href="#!">Diploma (Civil)</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#!">Diploma (IT)</a></td>
                                                                    <td><a href="#!">Diploma (ME)</a></td>
                                                                    <td><a href="#!">Integrated M.Sc. (Biotechnology)</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#!">Integrated M.Sc. (IT)</a></td>
                                                                    <td><a href="#!">Integrated M.Sc. (Mathematics)</a></td>
                                                                    <td><a href="#!">Integrated M.Sc. (Microbiology)</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#!">M. Com</a></td>
                                                                    <td><a href="#!">M.Com (Integrated)</a></td>
                                                                    <td><a href="#!">M.Sc. (Industrial Chemistry)</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#!">MBA (Integrated)-OLD</a></td>
                                                                    <td><a href="#!">MBA</a></td>
                                                                    <td><a href="#!">MCA (Integrated)</a></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>14/06/2019
                                                    </td>
                                                    <td>
                                                        <a href="#!">ReChecking Schedule Summer2019</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>04/06/2019
                                                    </td>
                                                    <td>
                                                        <a href="#!">UFM Result Exam - Summer 2019</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>25/05/2019
                                                    </td>
                                                    <td>
                                                        <a href="#!">UFM - Schedule - Summer 2019 Examination - 4 June 2019</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>30/04/2019
                                                    </td>
                                                    <td>
                                                        <a href="#!">Online Exam Batch Details of Sem 6 UTU Common Subject Soft Skills on 1.5.2019.</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>25/04/2019
                                                    </td>
                                                    <td>
                                                        <a href="#!">Exam Form Withdrawal - Phase 2 Exams - Summer 2019</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>15/04/2019
                                                    </td>
                                                    <td>
                                                        <a href="#!">Exam Form Withdrawn - Summer 2019 - Phase1 - Examination</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="2">22/03/2019
                                                    </td>
                                                    <td>
                                                        <a href="#!">Summer 2019 - Exam Form - Date-Extended-12-18 March 2019</a>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#!">Summer 2019 - Exam Form-Date-Extended-19-25 March 2019 - With Penalty</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>01/03/2019
                                                    </td>
                                                    <td>
                                                        <a href="#!">Exam Form Filling Schedule -Summer 2019 (1-11-March-2019)</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>26/02/2019
                                                    </td>
                                                    <td>
                                                        <a href="#!">Online Exam Form - Student Guidelines - Procedure</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="2">21/02/2019
                                                    </td>
                                                    <td>
                                                        <a href="#!">Grade Change - Notification -Winter 2018</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#!">Re Checking Result - Round 4 - Winter 2018 - Exam</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">16/02/2019
                                                    </td>
                                                    <td>
                                                        <a href="#!">UFM - Result Notification -Winter 2018</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#!">Re Checking - Round 3 - Result Notification - Winter 2018</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#!">Re Checking Schedule - Round 4 - Winter 2018</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11/02/2019
                                                    </td>
                                                    <td>
                                                        <a href="#!">Re - Assessment - Result - Winter 2018</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>06/02/2019
                                                    </td>
                                                    <td>
                                                        <a href="#!">Re Checking Schedule - Round 3 - 14 Feb 2019</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>24/01/2019
                                                    </td>
                                                    <td>
                                                        <a href="#!">Summer 2019 - Examination Schedule</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>23/01/2019
                                                    </td>
                                                    <td>
                                                        <a href="#!">Re Checking Round - 2 - Result Notification - 2018</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>16/01/2019
                                                    </td>
                                                    <td>
                                                        <a href="#!">Re Checking Schedule - Round2- Winter2018-Exam - 21 Jan 2019</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>13/12/2018
                                                    </td>
                                                    <td>
                                                        <a href="#!">17 December 18 - Winter18 - Exam-Centres-Student Notice</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>12/12/2018
                                                    </td>
                                                    <td>
                                                        <a href="#!">Exam Form Withdrawn - Winter 2018 - Phase3</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>30/11/2018
                                                    </td>
                                                    <td>
                                                        <a href="#!">UFM Result Winter 2018 Exam Phase 1-2</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>26/11/2018
                                                    </td>
                                                    <td>
                                                        <a href="#!">Re Checking - Ph1-2 Winter 2018 Exam Result</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>22/11/2018
                                                    </td>
                                                    <td>
                                                        <a href="#!">UFM - Meeting On - 27 Nov 2018 - Case-1 t o12</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>17/11/2018
                                                    </td>
                                                    <td>
                                                        <a href="#!">Re Checking Schedule - Ph1 - Winter2018 Exam</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>29/10/2018
                                                    </td>
                                                    <td>
                                                        <a href="#!">Re Schedule Online Exam BBA - BCom - BCom CA- I.MCom - Sem1 - 1 Nov 2018</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>17/10/2018
                                                    </td>
                                                    <td>
                                                        <a href="#!">Exam Form Withdraw - Win2018 Exam-Phase2</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>15/09/2018
                                                    </td>
                                                    <td>
                                                        <a href="#!">Winter 2018 Regular ATKT - Odd Sem Exam Form Filling Schedule</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>13/08/2018
                                                    </td>
                                                    <td>
                                                        <a href="#!">Notice - Online Exam Fees - Date Exended-till- 19 Aug 2018</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">17/07/2018
                                                    </td>
                                                    <td>
                                                        <a href="#!">Online Examination Form Filling Schedule - ATKT (AllCourses) and
                                                            Nursing - Winter2018</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#!">Online ExamForm - Student Guidelines - Procedure</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#!">Examination Schedule - Winter2018</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>09/07/2018
                                                    </td>
                                                    <td>
                                                        <a href="#!">Re Assessment Result Summer2018 - Examination</a>
                                                    </td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                        <h5>Student Seat No</h5>
                                        <hr>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-sm">
                                                <tr>
                                                    <td><a href="#!">B. Arch</a></td>
                                                    <td><a href="#!">B. Des.</a></td>
                                                    <td><a href="#!">B.C.A (Hons)</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">B.Com</a></td>
                                                    <td><a href="#!">B.I.D</a></td>
                                                    <td><a href="#!">B.Pharm</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">B.Sc. (Chemistry)</a></td>
                                                    <td><a href="#!">B.Sc. (Microbiology)</a></td>
                                                    <td><a href="#!">B.Tech (Automobile)</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">B.Tech (Chemical)</a></td>
                                                    <td><a href="#!">B.Tech (Civil)</a></td>
                                                    <td><a href="#!">B.Tech (EC)</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">B.Tech (ICT)</a></td>
                                                    <td><a href="#!">B.Tech (IT)</a></td>
                                                    <td><a href="#!">B.Tech (Mechanical)</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">BBA</a></td>
                                                    <td><a href="#!">BCA (Honors)</a></td>
                                                    <td><a href="#!">BCA</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">Diploma (CE)</a></td>
                                                    <td><a href="#!">Diploma (Chemical)</a></td>
                                                    <td><a href="#!">Diploma (Civil)</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">Diploma (IT)</a></td>
                                                    <td><a href="#!">Diploma (ME)</a></td>
                                                    <td><a href="#!">Integrated M.Sc. (Biotechnology)</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">Integrated M.Sc. (IT)</a></td>
                                                    <td><a href="#!">Integrated M.Sc. (Mathematics)</a></td>
                                                    <td><a href="#!">Integrated M.Sc. (Microbiology)</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">M. Com</a></td>
                                                    <td><a href="#!">M.Com (Integrated)</a></td>
                                                    <td><a href="#!">M.Sc. (Industrial Chemistry)</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">MBA (Integrated)-OLD</a></td>
                                                    <td><a href="#!">MBA</a></td>
                                                    <td><a href="#!">MCA (Integrated)</a></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-Seating" role="tabpanel" aria-labelledby="v-pills-Seating-tab">
                                        <h5>Seating Arrangement</h5>
                                        <hr>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-sm">
                                                <tr>
                                                    <td><a href="#!">B. Arch</a></td>
                                                    <td><a href="#!">B. Des.</a></td>
                                                    <td><a href="#!">B.C.A (Hons)</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">B.Com</a></td>
                                                    <td><a href="#!">B.I.D</a></td>
                                                    <td><a href="#!">B.Pharm</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">B.Sc. (Chemistry)</a></td>
                                                    <td><a href="#!">B.Sc. (Microbiology)</a></td>
                                                    <td><a href="#!">B.Tech (Automobile)</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">B.Tech (Chemical)</a></td>
                                                    <td><a href="#!">B.Tech (Civil)</a></td>
                                                    <td><a href="#!">B.Tech (EC)</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">B.Tech (ICT)</a></td>
                                                    <td><a href="#!">B.Tech (IT)</a></td>
                                                    <td><a href="#!">B.Tech (Mechanical)</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">BBA</a></td>
                                                    <td><a href="#!">BCA (Honors)</a></td>
                                                    <td><a href="#!">BCA</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">Diploma (CE)</a></td>
                                                    <td><a href="#!">Diploma (Chemical)</a></td>
                                                    <td><a href="#!">Diploma (Civil)</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">Diploma (IT)</a></td>
                                                    <td><a href="#!">Diploma (ME)</a></td>
                                                    <td><a href="#!">Integrated M.Sc. (Biotechnology)</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">Integrated M.Sc. (IT)</a></td>
                                                    <td><a href="#!">Integrated M.Sc. (Mathematics)</a></td>
                                                    <td><a href="#!">Integrated M.Sc. (Microbiology)</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">M. Com</a></td>
                                                    <td><a href="#!">M.Com (Integrated)</a></td>
                                                    <td><a href="#!">M.Sc. (Industrial Chemistry)</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">MBA (Integrated)-OLD</a></td>
                                                    <td><a href="#!">MBA</a></td>
                                                    <td><a href="#!">MCA (Integrated)</a></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-Results" role="tabpanel" aria-labelledby="v-pills-Results-tab">
                                        <h5>Student Result</h5>
                                        <hr>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-sm">
                                                <tr>
                                                    <td><a href="#!">B. Arch</a></td>
                                                    <td><a href="#!">B. Des.</a></td>
                                                    <td><a href="#!">B.C.A (Hons)</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">B.Com</a></td>
                                                    <td><a href="#!">B.I.D</a></td>
                                                    <td><a href="#!">B.Pharm</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">B.Sc. (Chemistry)</a></td>
                                                    <td><a href="#!">B.Sc. (Microbiology)</a></td>
                                                    <td><a href="#!">B.Tech (Automobile)</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">B.Tech (Chemical)</a></td>
                                                    <td><a href="#!">B.Tech (Civil)</a></td>
                                                    <td><a href="#!">B.Tech (EC)</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">B.Tech (ICT)</a></td>
                                                    <td><a href="#!">B.Tech (IT)</a></td>
                                                    <td><a href="#!">B.Tech (Mechanical)</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">BBA</a></td>
                                                    <td><a href="#!">BCA (Honors)</a></td>
                                                    <td><a href="#!">BCA</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">Diploma (CE)</a></td>
                                                    <td><a href="#!">Diploma (Chemical)</a></td>
                                                    <td><a href="#!">Diploma (Civil)</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">Diploma (IT)</a></td>
                                                    <td><a href="#!">Diploma (ME)</a></td>
                                                    <td><a href="#!">Integrated M.Sc. (Biotechnology)</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">Integrated M.Sc. (IT)</a></td>
                                                    <td><a href="#!">Integrated M.Sc. (Mathematics)</a></td>
                                                    <td><a href="#!">Integrated M.Sc. (Microbiology)</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">M. Com</a></td>
                                                    <td><a href="#!">M.Com (Integrated)</a></td>
                                                    <td><a href="#!">M.Sc. (Industrial Chemistry)</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#!">MBA (Integrated)-OLD</a></td>
                                                    <td><a href="#!">MBA</a></td>
                                                    <td><a href="#!">MCA (Integrated)</a></td>
                                                </tr>
                                            </table>
                                        </div>
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
