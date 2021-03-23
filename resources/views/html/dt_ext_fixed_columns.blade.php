<!DOCTYPE html>
<html lang="en">
<head>
    @@include('./layouts/head.html')
    <!-- data tables css -->
    <link rel="stylesheet" href="assets/css/plugins/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/plugins/fixedColumns.bootstrap4.min.css">
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
                            <h5 class="m-b-10">Fixed Columns</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Table</a></li>
                            <li class="breadcrumb-item">Fixed Columns</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- Left And Right Fixed Columns start -->
            <div class="col-xl-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Left and Right Fixed Columns</h5>
                    </div>
                    <div class="card-body">
                        <table id="left-right-fix" class="table stripe row-border order-column">
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
                                </tr>
                                <tr>
                                    <td>Garrett</td>
                                    <td>Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                    <td>8422</td>
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
                                </tr>
                                <tr>
                                    <td>Michael</td>
                                    <td>Silva</td>
                                    <td>Marketing Designer</td>
                                    <td>London</td>
                                    <td>66</td>
                                    <td>2012/11/27</td>
                                    <td>$198,500</td>
                                    <td>1581</td>
                                </tr>
                                <tr>
                                    <td>Paul</td>
                                    <td>Byrd</td>
                                    <td>Chief Financial Officer (CFO)</td>
                                    <td>New York</td>
                                    <td>64</td>
                                    <td>2010/06/09</td>
                                    <td>$725,000</td>
                                    <td>3059</td>
                                </tr>
                                <tr>
                                    <td>Gloria</td>
                                    <td>Little</td>
                                    <td>Systems Administrator</td>
                                    <td>New York</td>
                                    <td>59</td>
                                    <td>2009/04/10</td>
                                    <td>$237,500</td>
                                    <td>1721</td>
                                </tr>
                                <tr>
                                    <td>Bradley</td>
                                    <td>Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>41</td>
                                    <td>2012/10/13</td>
                                    <td>$132,000</td>
                                    <td>2558</td>
                                </tr>
                                <tr>
                                    <td>Dai</td>
                                    <td>Rios</td>
                                    <td>Personnel Lead</td>
                                    <td>Edinburgh</td>
                                    <td>35</td>
                                    <td>2012/09/26</td>
                                    <td>$217,500</td>
                                    <td>2290</td>
                                </tr>
                                <tr>
                                    <td>Jenette</td>
                                    <td>Caldwell</td>
                                    <td>Development Lead</td>
                                    <td>New York</td>
                                    <td>30</td>
                                    <td>2011/09/03</td>
                                    <td>$345,000</td>
                                    <td>1937</td>
                                </tr>
                                <tr>
                                    <td>Yuri</td>
                                    <td>Berry</td>
                                    <td>Chief Marketing Officer (CMO)</td>
                                    <td>New York</td>
                                    <td>40</td>
                                    <td>2009/06/25</td>
                                    <td>$675,000</td>
                                    <td>6154</td>
                                </tr>
                                <tr>
                                    <td>Caesar</td>
                                    <td>Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>New York</td>
                                    <td>21</td>
                                    <td>2011/12/12</td>
                                    <td>$106,450</td>
                                    <td>8330</td>
                                </tr>
                                <tr>
                                    <td>Doris</td>
                                    <td>Wilder</td>
                                    <td>Sales Assistant</td>
                                    <td>Sidney</td>
                                    <td>23</td>
                                    <td>2010/09/20</td>
                                    <td>$85,600</td>
                                    <td>3023</td>
                                </tr>
                                <tr>
                                    <td>Angelica</td>
                                    <td>Ramos</td>
                                    <td>Chief Executive Officer (CEO)</td>
                                    <td>London</td>
                                    <td>47</td>
                                    <td>2009/10/09</td>
                                    <td>$1,200,000</td>
                                    <td>5797</td>
                                </tr>
                                <tr>
                                    <td>Gavin</td>
                                    <td>Joyce</td>
                                    <td>Developer</td>
                                    <td>Edinburgh</td>
                                    <td>42</td>
                                    <td>2010/12/22</td>
                                    <td>$92,575</td>
                                    <td>8822</td>
                                </tr>
                                <tr>
                                    <td>Jennifer</td>
                                    <td>Chang</td>
                                    <td>Regional Director</td>
                                    <td>Singapore</td>
                                    <td>28</td>
                                    <td>2010/11/14</td>
                                    <td>$357,650</td>
                                    <td>9239</td>
                                </tr>
                                <tr>
                                    <td>Brenden</td>
                                    <td>Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>28</td>
                                    <td>2011/06/07</td>
                                    <td>$206,850</td>
                                    <td>1314</td>
                                </tr>
                                <tr>
                                    <td>Fiona</td>
                                    <td>Green</td>
                                    <td>Chief Operating Officer (COO)</td>
                                    <td>San Francisco</td>
                                    <td>48</td>
                                    <td>2010/03/11</td>
                                    <td>$850,000</td>
                                    <td>2947</td>
                                </tr>
                                <tr>
                                    <td>Shou</td>
                                    <td>Itou</td>
                                    <td>Regional Marketing</td>
                                    <td>Tokyo</td>
                                    <td>20</td>
                                    <td>2011/08/14</td>
                                    <td>$163,000</td>
                                    <td>8899</td>
                                </tr>
                                <tr>
                                    <td>Michelle</td>
                                    <td>House</td>
                                    <td>Integration Specialist</td>
                                    <td>Sidney</td>
                                    <td>37</td>
                                    <td>2011/06/02</td>
                                    <td>$95,400</td>
                                    <td>2769</td>
                                </tr>
                                <tr>
                                    <td>Suki</td>
                                    <td>Burks</td>
                                    <td>Developer</td>
                                    <td>London</td>
                                    <td>53</td>
                                    <td>2009/10/22</td>
                                    <td>$114,500</td>
                                    <td>6832</td>
                                </tr>
                                <tr>
                                    <td>Prescott</td>
                                    <td>Bartlett</td>
                                    <td>Technical Author</td>
                                    <td>London</td>
                                    <td>27</td>
                                    <td>2011/05/07</td>
                                    <td>$145,000</td>
                                    <td>3606</td>
                                </tr>
                                <tr>
                                    <td>Gavin</td>
                                    <td>Cortez</td>
                                    <td>Team Leader</td>
                                    <td>San Francisco</td>
                                    <td>22</td>
                                    <td>2008/10/26</td>
                                    <td>$235,500</td>
                                    <td>2860</td>
                                </tr>
                                <tr>
                                    <td>Martena</td>
                                    <td>Mccray</td>
                                    <td>Post-Sales support</td>
                                    <td>Edinburgh</td>
                                    <td>46</td>
                                    <td>2011/03/09</td>
                                    <td>$324,050</td>
                                    <td>8240</td>
                                </tr>
                                <tr>
                                    <td>Unity</td>
                                    <td>Butler</td>
                                    <td>Marketing Designer</td>
                                    <td>San Francisco</td>
                                    <td>47</td>
                                    <td>2009/12/09</td>
                                    <td>$85,675</td>
                                    <td>5384</td>
                                </tr>
                                <tr>
                                    <td>Howard</td>
                                    <td>Hatfield</td>
                                    <td>Office Manager</td>
                                    <td>San Francisco</td>
                                    <td>51</td>
                                    <td>2008/12/16</td>
                                    <td>$164,500</td>
                                    <td>7031</td>
                                </tr>
                                <tr>
                                    <td>Hope</td>
                                    <td>Fuentes</td>
                                    <td>Secretary</td>
                                    <td>San Francisco</td>
                                    <td>41</td>
                                    <td>2010/02/12</td>
                                    <td>$109,850</td>
                                    <td>6318</td>
                                </tr>
                                <tr>
                                    <td>Vivian</td>
                                    <td>Harrell</td>
                                    <td>Financial Controller</td>
                                    <td>San Francisco</td>
                                    <td>62</td>
                                    <td>2009/02/14</td>
                                    <td>$452,500</td>
                                    <td>9422</td>
                                </tr>
                                <tr>
                                    <td>Timothy</td>
                                    <td>Mooney</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>37</td>
                                    <td>2008/12/11</td>
                                    <td>$136,200</td>
                                    <td>7580</td>
                                </tr>
                                <tr>
                                    <td>Jackson</td>
                                    <td>Bradshaw</td>
                                    <td>Director</td>
                                    <td>New York</td>
                                    <td>65</td>
                                    <td>2008/09/26</td>
                                    <td>$645,750</td>
                                    <td>1042</td>
                                </tr>
                                <tr>
                                    <td>Olivia</td>
                                    <td>Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                    <td>$234,500</td>
                                    <td>2120</td>
                                </tr>
                                <tr>
                                    <td>Bruno</td>
                                    <td>Nash</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>38</td>
                                    <td>2011/05/03</td>
                                    <td>$163,500</td>
                                    <td>6222</td>
                                </tr>
                                <tr>
                                    <td>Sakura</td>
                                    <td>Yamamoto</td>
                                    <td>Support Engineer</td>
                                    <td>Tokyo</td>
                                    <td>37</td>
                                    <td>2009/08/19</td>
                                    <td>$139,575</td>
                                    <td>9383</td>
                                </tr>
                                <tr>
                                    <td>Thor</td>
                                    <td>Walton</td>
                                    <td>Developer</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2013/08/11</td>
                                    <td>$98,540</td>
                                    <td>8327</td>
                                </tr>
                                <tr>
                                    <td>Finn</td>
                                    <td>Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>San Francisco</td>
                                    <td>47</td>
                                    <td>2009/07/07</td>
                                    <td>$87,500</td>
                                    <td>2927</td>
                                </tr>
                                <tr>
                                    <td>Serge</td>
                                    <td>Baldwin</td>
                                    <td>Data Coordinator</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2012/04/09</td>
                                    <td>$138,575</td>
                                    <td>8352</td>
                                </tr>
                                <tr>
                                    <td>Zenaida</td>
                                    <td>Frank</td>
                                    <td>Software Engineer</td>
                                    <td>New York</td>
                                    <td>63</td>
                                    <td>2010/01/04</td>
                                    <td>$125,250</td>
                                    <td>7439</td>
                                </tr>
                                <tr>
                                    <td>Zorita</td>
                                    <td>Serrano</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>56</td>
                                    <td>2012/06/01</td>
                                    <td>$115,000</td>
                                    <td>4389</td>
                                </tr>
                                <tr>
                                    <td>Jennifer</td>
                                    <td>Acosta</td>
                                    <td>Junior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>43</td>
                                    <td>2013/02/01</td>
                                    <td>$75,650</td>
                                    <td>3431</td>
                                </tr>
                                <tr>
                                    <td>Cara</td>
                                    <td>Stevens</td>
                                    <td>Sales Assistant</td>
                                    <td>New York</td>
                                    <td>46</td>
                                    <td>2011/12/06</td>
                                    <td>$145,600</td>
                                    <td>3990</td>
                                </tr>
                                <tr>
                                    <td>Hermione</td>
                                    <td>Butler</td>
                                    <td>Regional Director</td>
                                    <td>London</td>
                                    <td>47</td>
                                    <td>2011/03/21</td>
                                    <td>$356,250</td>
                                    <td>1016</td>
                                </tr>
                                <tr>
                                    <td>Lael</td>
                                    <td>Greer</td>
                                    <td>Systems Administrator</td>
                                    <td>London</td>
                                    <td>21</td>
                                    <td>2009/02/27</td>
                                    <td>$103,500</td>
                                    <td>6733</td>
                                </tr>
                                <tr>
                                    <td>Jonas</td>
                                    <td>Alexander</td>
                                    <td>Developer</td>
                                    <td>San Francisco</td>
                                    <td>30</td>
                                    <td>2010/07/14</td>
                                    <td>$86,500</td>
                                    <td>8196</td>
                                </tr>
                                <tr>
                                    <td>Shad</td>
                                    <td>Decker</td>
                                    <td>Regional Director</td>
                                    <td>Edinburgh</td>
                                    <td>51</td>
                                    <td>2008/11/13</td>
                                    <td>$183,000</td>
                                    <td>6373</td>
                                </tr>
                                <tr>
                                    <td>Michael</td>
                                    <td>Bruce</td>
                                    <td>Javascript Developer</td>
                                    <td>Singapore</td>
                                    <td>29</td>
                                    <td>2011/06/27</td>
                                    <td>$183,000</td>
                                    <td>5384</td>
                                </tr>
                                <tr>
                                    <td>Donna</td>
                                    <td>Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                    <td>2011/01/25</td>
                                    <td>$112,000</td>
                                    <td>4226</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Right Fixed Column</h5>
                    </div>
                    <div class="card-body">
                        <table id="right-fix" class="table stripe row-border order-column">
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
                                </tr>
                                <tr>
                                    <td>Garrett</td>
                                    <td>Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                    <td>8422</td>
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
                                </tr>
                                <tr>
                                    <td>Michael</td>
                                    <td>Silva</td>
                                    <td>Marketing Designer</td>
                                    <td>London</td>
                                    <td>66</td>
                                    <td>2012/11/27</td>
                                    <td>$198,500</td>
                                    <td>1581</td>
                                </tr>
                                <tr>
                                    <td>Paul</td>
                                    <td>Byrd</td>
                                    <td>Chief Financial Officer (CFO)</td>
                                    <td>New York</td>
                                    <td>64</td>
                                    <td>2010/06/09</td>
                                    <td>$725,000</td>
                                    <td>3059</td>
                                </tr>
                                <tr>
                                    <td>Gloria</td>
                                    <td>Little</td>
                                    <td>Systems Administrator</td>
                                    <td>New York</td>
                                    <td>59</td>
                                    <td>2009/04/10</td>
                                    <td>$237,500</td>
                                    <td>1721</td>
                                </tr>
                                <tr>
                                    <td>Bradley</td>
                                    <td>Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>41</td>
                                    <td>2012/10/13</td>
                                    <td>$132,000</td>
                                    <td>2558</td>
                                </tr>
                                <tr>
                                    <td>Dai</td>
                                    <td>Rios</td>
                                    <td>Personnel Lead</td>
                                    <td>Edinburgh</td>
                                    <td>35</td>
                                    <td>2012/09/26</td>
                                    <td>$217,500</td>
                                    <td>2290</td>
                                </tr>
                                <tr>
                                    <td>Jenette</td>
                                    <td>Caldwell</td>
                                    <td>Development Lead</td>
                                    <td>New York</td>
                                    <td>30</td>
                                    <td>2011/09/03</td>
                                    <td>$345,000</td>
                                    <td>1937</td>
                                </tr>
                                <tr>
                                    <td>Yuri</td>
                                    <td>Berry</td>
                                    <td>Chief Marketing Officer (CMO)</td>
                                    <td>New York</td>
                                    <td>40</td>
                                    <td>2009/06/25</td>
                                    <td>$675,000</td>
                                    <td>6154</td>
                                </tr>
                                <tr>
                                    <td>Caesar</td>
                                    <td>Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>New York</td>
                                    <td>21</td>
                                    <td>2011/12/12</td>
                                    <td>$106,450</td>
                                    <td>8330</td>
                                </tr>
                                <tr>
                                    <td>Doris</td>
                                    <td>Wilder</td>
                                    <td>Sales Assistant</td>
                                    <td>Sidney</td>
                                    <td>23</td>
                                    <td>2010/09/20</td>
                                    <td>$85,600</td>
                                    <td>3023</td>
                                </tr>
                                <tr>
                                    <td>Angelica</td>
                                    <td>Ramos</td>
                                    <td>Chief Executive Officer (CEO)</td>
                                    <td>London</td>
                                    <td>47</td>
                                    <td>2009/10/09</td>
                                    <td>$1,200,000</td>
                                    <td>5797</td>
                                </tr>
                                <tr>
                                    <td>Gavin</td>
                                    <td>Joyce</td>
                                    <td>Developer</td>
                                    <td>Edinburgh</td>
                                    <td>42</td>
                                    <td>2010/12/22</td>
                                    <td>$92,575</td>
                                    <td>8822</td>
                                </tr>
                                <tr>
                                    <td>Jennifer</td>
                                    <td>Chang</td>
                                    <td>Regional Director</td>
                                    <td>Singapore</td>
                                    <td>28</td>
                                    <td>2010/11/14</td>
                                    <td>$357,650</td>
                                    <td>9239</td>
                                </tr>
                                <tr>
                                    <td>Brenden</td>
                                    <td>Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>29</td>
                                    <td>2011/06/07</td>
                                    <td>$206,850</td>
                                    <td>1314</td>
                                </tr>
                                <tr>
                                    <td>Fiona</td>
                                    <td>Green</td>
                                    <td>Chief Operating Officer (COO)</td>
                                    <td>San Francisco</td>
                                    <td>48</td>
                                    <td>2010/03/11</td>
                                    <td>$850,000</td>
                                    <td>2947</td>
                                </tr>
                                <tr>
                                    <td>Shou</td>
                                    <td>Itou</td>
                                    <td>Regional Marketing</td>
                                    <td>Tokyo</td>
                                    <td>20</td>
                                    <td>2011/08/14</td>
                                    <td>$163,000</td>
                                    <td>8899</td>
                                </tr>
                                <tr>
                                    <td>Michelle</td>
                                    <td>House</td>
                                    <td>Integration Specialist</td>
                                    <td>Sidney</td>
                                    <td>37</td>
                                    <td>2011/06/02</td>
                                    <td>$95,400</td>
                                    <td>2769</td>
                                </tr>
                                <tr>
                                    <td>Suki</td>
                                    <td>Burks</td>
                                    <td>Developer</td>
                                    <td>London</td>
                                    <td>53</td>
                                    <td>2009/10/22</td>
                                    <td>$114,500</td>
                                    <td>6832</td>
                                </tr>
                                <tr>
                                    <td>Prescott</td>
                                    <td>Bartlett</td>
                                    <td>Technical Author</td>
                                    <td>London</td>
                                    <td>27</td>
                                    <td>2011/05/07</td>
                                    <td>$145,000</td>
                                    <td>3606</td>
                                </tr>
                                <tr>
                                    <td>Gavin</td>
                                    <td>Cortez</td>
                                    <td>Team Leader</td>
                                    <td>San Francisco</td>
                                    <td>22</td>
                                    <td>2008/10/26</td>
                                    <td>$235,500</td>
                                    <td>2860</td>
                                </tr>
                                <tr>
                                    <td>Martena</td>
                                    <td>Mccray</td>
                                    <td>Post-Sales support</td>
                                    <td>Edinburgh</td>
                                    <td>46</td>
                                    <td>2011/03/09</td>
                                    <td>$324,050</td>
                                    <td>8240</td>
                                </tr>
                                <tr>
                                    <td>Unity</td>
                                    <td>Butler</td>
                                    <td>Marketing Designer</td>
                                    <td>San Francisco</td>
                                    <td>47</td>
                                    <td>2009/12/09</td>
                                    <td>$85,675</td>
                                    <td>5384</td>
                                </tr>
                                <tr>
                                    <td>Howard</td>
                                    <td>Hatfield</td>
                                    <td>Office Manager</td>
                                    <td>San Francisco</td>
                                    <td>51</td>
                                    <td>2008/12/16</td>
                                    <td>$164,500</td>
                                    <td>7031</td>
                                </tr>
                                <tr>
                                    <td>Hope</td>
                                    <td>Fuentes</td>
                                    <td>Secretary</td>
                                    <td>San Francisco</td>
                                    <td>41</td>
                                    <td>2010/02/12</td>
                                    <td>$109,850</td>
                                    <td>6318</td>
                                </tr>
                                <tr>
                                    <td>Vivian</td>
                                    <td>Harrell</td>
                                    <td>Financial Controller</td>
                                    <td>San Francisco</td>
                                    <td>62</td>
                                    <td>2009/02/14</td>
                                    <td>$452,500</td>
                                    <td>9422</td>
                                </tr>
                                <tr>
                                    <td>Timothy</td>
                                    <td>Mooney</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>37</td>
                                    <td>2008/12/11</td>
                                    <td>$136,200</td>
                                    <td>7580</td>
                                </tr>
                                <tr>
                                    <td>Jackson</td>
                                    <td>Bradshaw</td>
                                    <td>Director</td>
                                    <td>New York</td>
                                    <td>65</td>
                                    <td>2008/09/26</td>
                                    <td>$645,750</td>
                                    <td>1042</td>
                                </tr>
                                <tr>
                                    <td>Olivia</td>
                                    <td>Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                    <td>$234,500</td>
                                    <td>2120</td>
                                </tr>
                                <tr>
                                    <td>Bruno</td>
                                    <td>Nash</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>38</td>
                                    <td>2011/05/03</td>
                                    <td>$163,500</td>
                                    <td>6222</td>
                                </tr>
                                <tr>
                                    <td>Sakura</td>
                                    <td>Yamamoto</td>
                                    <td>Support Engineer</td>
                                    <td>Tokyo</td>
                                    <td>37</td>
                                    <td>2009/08/19</td>
                                    <td>$139,575</td>
                                    <td>9383</td>
                                </tr>
                                <tr>
                                    <td>Thor</td>
                                    <td>Walton</td>
                                    <td>Developer</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2013/08/11</td>
                                    <td>$98,540</td>
                                    <td>8327</td>
                                </tr>
                                <tr>
                                    <td>Finn</td>
                                    <td>Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>San Francisco</td>
                                    <td>47</td>
                                    <td>2009/07/07</td>
                                    <td>$87,500</td>
                                    <td>2927</td>
                                </tr>
                                <tr>
                                    <td>Serge</td>
                                    <td>Baldwin</td>
                                    <td>Data Coordinator</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2012/04/09</td>
                                    <td>$138,575</td>
                                    <td>8352</td>
                                </tr>
                                <tr>
                                    <td>Zenaida</td>
                                    <td>Frank</td>
                                    <td>Software Engineer</td>
                                    <td>New York</td>
                                    <td>63</td>
                                    <td>2010/01/04</td>
                                    <td>$125,250</td>
                                    <td>7439</td>
                                </tr>
                                <tr>
                                    <td>Zorita</td>
                                    <td>Serrano</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>56</td>
                                    <td>2012/06/01</td>
                                    <td>$115,000</td>
                                    <td>4389</td>
                                </tr>
                                <tr>
                                    <td>Jennifer</td>
                                    <td>Acosta</td>
                                    <td>Junior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>43</td>
                                    <td>2013/02/01</td>
                                    <td>$75,650</td>
                                    <td>3431</td>
                                </tr>
                                <tr>
                                    <td>Cara</td>
                                    <td>Stevens</td>
                                    <td>Sales Assistant</td>
                                    <td>New York</td>
                                    <td>46</td>
                                    <td>2011/12/06</td>
                                    <td>$145,600</td>
                                    <td>3990</td>
                                </tr>
                                <tr>
                                    <td>Hermione</td>
                                    <td>Butler</td>
                                    <td>Regional Director</td>
                                    <td>London</td>
                                    <td>47</td>
                                    <td>2011/03/21</td>
                                    <td>$356,250</td>
                                    <td>1016</td>
                                </tr>
                                <tr>
                                    <td>Lael</td>
                                    <td>Greer</td>
                                    <td>Systems Administrator</td>
                                    <td>London</td>
                                    <td>21</td>
                                    <td>2009/02/27</td>
                                    <td>$103,500</td>
                                    <td>6733</td>
                                </tr>
                                <tr>
                                    <td>Jonas</td>
                                    <td>Alexander</td>
                                    <td>Developer</td>
                                    <td>San Francisco</td>
                                    <td>30</td>
                                    <td>2010/07/14</td>
                                    <td>$86,500</td>
                                    <td>8196</td>
                                </tr>
                                <tr>
                                    <td>Shad</td>
                                    <td>Decker</td>
                                    <td>Regional Director</td>
                                    <td>Edinburgh</td>
                                    <td>51</td>
                                    <td>2008/11/13</td>
                                    <td>$183,000</td>
                                    <td>6373</td>
                                </tr>
                                <tr>
                                    <td>Michael</td>
                                    <td>Bruce</td>
                                    <td>Javascript Developer</td>
                                    <td>Singapore</td>
                                    <td>29</td>
                                    <td>2011/06/27</td>
                                    <td>$183,000</td>
                                    <td>5384</td>
                                </tr>
                                <tr>
                                    <td>Donna</td>
                                    <td>Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                    <td>2011/01/25</td>
                                    <td>$112,000</td>
                                    <td>4226</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Left And Right Fixed end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
@@include('./layouts/footer.html')
<!-- datatable Js -->
<script src="assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<script src="assets/js/plugins/dataTables.fixedColumns.min.js"></script>
<script src="assets/js/pages/data-column-custom.js"></script>
@@include('./layouts/footer-bottom-link.html')
</body>
</html>
