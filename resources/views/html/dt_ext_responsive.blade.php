<!DOCTYPE html>
<html lang="en">
<head>
    @include('html.layouts.head')
    <!-- data tables css -->
    <link rel="stylesheet" href="assets/css/plugins/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/plugins/responsive.bootstrap4.min.css">
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
                            <h5 class="m-b-10">Responsive DataTable</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Table</a></li>
                            <li class="breadcrumb-item">Responsive Initialization</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- Config table start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Configuration Option</h5>
                    </div>
                    <div class="card-body">
                        <table id="res-config" class="display table table-striped table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                    <th>Extn.</th>
                                    <th>E-mail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger</td>
                                    <td>Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td>5421</td>
                                    <td>t.nixon@datatables.net</td>
                                </tr>
                                <tr>
                                    <td>Garrett</td>
                                    <td>Winters</td>
                                    <td>Chief Executive Officer (CEO)</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                    <td>8422</td>
                                    <td>g.winters@datatables.net</td>
                                </tr>
                                <tr>
                                    <td>Ashton</td>
                                    <td>Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                    <td>1562</td>
                                    <td>a.cox@datatables.net</td>
                                </tr>
                                <tr>
                                    <td>Cedric</td>
                                    <td>Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                    <td>6224</td>
                                    <td>c.kelly@datatables.net</td>
                                </tr>
                                <tr>
                                    <td>Airi</td>
                                    <td>Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                    <td>5407</td>
                                    <td>a.satou@datatables.net</td>
                                </tr>
                                <tr>
                                    <td>Brielle</td>
                                    <td>Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012/12/02</td>
                                    <td>$372,000</td>
                                    <td>4804</td>
                                    <td>b.williamson@datatables.net</td>
                                </tr>
                                <tr>
                                    <td>Herrod</td>
                                    <td>Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td>2012/08/06</td>
                                    <td>$137,500</td>
                                    <td>9608</td>
                                    <td>h.chandler@datatables.net</td>
                                </tr>
                                <tr>
                                    <td>Rhona</td>
                                    <td>Davidson</td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
                                    <td>55</td>
                                    <td>2010/10/14</td>
                                    <td>$327,900</td>
                                    <td>6200</td>
                                    <td>r.davidson@datatables.net</td>
                                </tr>
                                <tr>
                                    <td>Colleen</td>
                                    <td>Hurst</td>
                                    <td>Javascript Developer</td>
                                    <td>San Francisco</td>
                                    <td>39</td>
                                    <td>2009/09/15</td>
                                    <td>$205,500</td>
                                    <td>2360</td>
                                    <td>c.hurst@datatables.net</td>
                                </tr>
                                <tr>
                                    <td>Sonya</td>
                                    <td>Frost</td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>23</td>
                                    <td>2008/12/13</td>
                                    <td>$103,600</td>
                                    <td>1667</td>
                                    <td>s.frost@datatables.net</td>
                                </tr>
                                <tr>
                                    <td>Jena</td>
                                    <td>Gaines</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>30</td>
                                    <td>2008/12/19</td>
                                    <td>$90,560</td>
                                    <td>3814</td>
                                    <td>j.gaines@datatables.net</td>
                                </tr>
                                <tr>
                                    <td>Quinn</td>
                                    <td>Flynn</td>
                                    <td>Support Lead</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2013/03/03</td>
                                    <td>$342,000</td>
                                    <td>9497</td>
                                    <td>q.flynn@datatables.net</td>
                                </tr>
                                <tr>
                                    <td>Charde</td>
                                    <td>Marshall</td>
                                    <td>Regional Director</td>
                                    <td>San Francisco</td>
                                    <td>36</td>
                                    <td>2008/10/16</td>
                                    <td>$470,600</td>
                                    <td>6741</td>
                                    <td>c.marshall@datatables.net</td>
                                </tr>
                                <tr>
                                    <td>Haley</td>
                                    <td>Kennedy</td>
                                    <td>Senior Marketing Designer</td>
                                    <td>London</td>
                                    <td>43</td>
                                    <td>2012/12/18</td>
                                    <td>$313,500</td>
                                    <td>3597</td>
                                    <td>h.kennedy@datatables.net</td>
                                </tr>
                                <tr>
                                    <td>Tatyana</td>
                                    <td>Fitzpatrick</td>
                                    <td>Regional Director</td>
                                    <td>London</td>
                                    <td>19</td>
                                    <td>2010/03/17</td>
                                    <td>$385,750</td>
                                    <td>1965</td>
                                    <td>t.fitzpatrick@datatables.net</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Config table end -->
            <!-- `New` Constructor table start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>New Constructor</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table id="new-cons" class="display table table-striped table-hover dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                        <th>Extn.</th>
                                        <th>E-mail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger</td>
                                        <td>Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        <td>5421</td>
                                        <td>t.nixon@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett</td>
                                        <td>Winters</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                        <td>8422</td>
                                        <td>g.winters@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton</td>
                                        <td>Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                        <td>1562</td>
                                        <td>a.cox@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric</td>
                                        <td>Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                        <td>6224</td>
                                        <td>c.kelly@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Airi</td>
                                        <td>Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                        <td>5407</td>
                                        <td>a.satou@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Brielle</td>
                                        <td>Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                        <td>4804</td>
                                        <td>b.williamson@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Herrod</td>
                                        <td>Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                        <td>9608</td>
                                        <td>h.chandler@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Rhona</td>
                                        <td>Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                        <td>6200</td>
                                        <td>r.davidson@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Colleen</td>
                                        <td>Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                        <td>2360</td>
                                        <td>c.hurst@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Sonya</td>
                                        <td>Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>$103,600</td>
                                        <td>1667</td>
                                        <td>s.frost@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Jena</td>
                                        <td>Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
                                        <td>$90,560</td>
                                        <td>3814</td>
                                        <td>j.gaines@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Quinn</td>
                                        <td>Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>$342,000</td>
                                        <td>9497</td>
                                        <td>q.flynn@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Charde</td>
                                        <td>Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                        <td>6741</td>
                                        <td>c.marshall@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Haley</td>
                                        <td>Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>2012/12/18</td>
                                        <td>$313,500</td>
                                        <td>3597</td>
                                        <td>h.kennedy@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Tatyana</td>
                                        <td>Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>2010/03/17</td>
                                        <td>$385,750</td>
                                        <td>1965</td>
                                        <td>t.fitzpatrick@datatables.net</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- `New` Constructor table end -->
            <!-- Immediately Show Hidden Details table start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Immediately Show Hidden Details</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table id="show-hide-res" class="display table table-striped table-hover dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                        <th>Extn.</th>
                                        <th>E-mail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger</td>
                                        <td>Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        <td>5421</td>
                                        <td>t.nixon@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett</td>
                                        <td>Winters</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                        <td>8422</td>
                                        <td>g.winters@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton</td>
                                        <td>Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                        <td>1562</td>
                                        <td>a.cox@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric</td>
                                        <td>Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                        <td>6224</td>
                                        <td>c.kelly@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Airi</td>
                                        <td>Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                        <td>5407</td>
                                        <td>a.satou@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Brielle</td>
                                        <td>Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                        <td>4804</td>
                                        <td>b.williamson@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Herrod</td>
                                        <td>Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                        <td>9608</td>
                                        <td>h.chandler@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Rhona</td>
                                        <td>Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                        <td>6200</td>
                                        <td>r.davidson@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Colleen</td>
                                        <td>Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                        <td>2360</td>
                                        <td>c.hurst@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Sonya</td>
                                        <td>Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>$103,600</td>
                                        <td>1667</td>
                                        <td>s.frost@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Jena</td>
                                        <td>Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
                                        <td>$90,560</td>
                                        <td>3814</td>
                                        <td>j.gaines@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Quinn</td>
                                        <td>Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>$342,000</td>
                                        <td>9497</td>
                                        <td>q.flynn@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Charde</td>
                                        <td>Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                        <td>6741</td>
                                        <td>c.marshall@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Haley</td>
                                        <td>Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>2012/12/18</td>
                                        <td>$313,500</td>
                                        <td>3597</td>
                                        <td>h.kennedy@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Tatyana</td>
                                        <td>Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>2010/03/17</td>
                                        <td>$385,750</td>
                                        <td>1965</td>
                                        <td>t.fitzpatrick@datatables.net</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Immediately Show Hidden Details table end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- datatable Js -->
<script src="assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<script src="assets/js/plugins/dataTables.responsive.min.js"></script>
<script src="assets/js/pages/data-responsive-custom.js"></script>
@include('html.layouts.footer-bottom-link')
</body>
</html>
