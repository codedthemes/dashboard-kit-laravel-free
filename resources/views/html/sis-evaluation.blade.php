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
                            <h5 class="m-b-10">Evaluation</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">School</a></li>
                            <li class="breadcrumb-item">Evaluation</li>
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
                        <h5>Evaluation</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Subject</th>
                                        <th>Assessment</th>
                                        <th>Date</th>
                                        <th>Total Marks</th>
                                        <th>Passing Marks</th>
                                        <th>Obtain Marks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Open Source Web Application Development</td>
                                        <td>Viva</td>
                                        <td>17/12/2015</td>
                                        <td>4</td>
                                        <td>2</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>Open Source Web Application Development</td>
                                        <td>Self Creation Parameter</td>
                                        <td>16/12/2015</td>
                                        <td>10</td>
                                        <td>5</td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td>Open Source Web Application Development</td>
                                        <td>Internal</td>
                                        <td>04/12/2015</td>
                                        <td>60</td>
                                        <td>30</td>
                                        <td>41</td>
                                    </tr>
                                    <tr>
                                        <td>Open Source Web Application Development</td>
                                        <td>Internal</td>
                                        <td>03/12/2015</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>18</td>
                                    </tr>
                                    <tr>
                                        <td>Open Source Web Application Development</td>
                                        <td>Unit Test</td>
                                        <td>04/11/2015</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>22.5</td>
                                    </tr>
                                    <tr>
                                        <td>Open Source Web Application Development</td>
                                        <td>Quiz</td>
                                        <td>29/10/2015</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>14</td>
                                    </tr>
                                    <tr>
                                        <td>Open Source Web Application Development</td>
                                        <td>Internal</td>
                                        <td>08/10/2015</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <td>Open Source Web Application Development</td>
                                        <td>Unit Test</td>
                                        <td>18/09/2015</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>20.5</td>
                                    </tr>
                                    <tr>
                                        <td>Open Source Web Application Development</td>
                                        <td>Quiz</td>
                                        <td>12/09/2015</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td>Web Application Development using ASP.NET</td>
                                        <td>Self Creation Parameter</td>
                                        <td>18/12/2015</td>
                                        <td>6</td>
                                        <td>3</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>Web Application Development using ASP.NET</td>
                                        <td>Viva</td>
                                        <td>18/12/2015</td>
                                        <td>4</td>
                                        <td>2</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Web Application Development using ASP.NET</td>
                                        <td>Internal</td>
                                        <td>08/12/2015</td>
                                        <td>60</td>
                                        <td>30</td>
                                        <td>30</td>
                                    </tr>
                                    <tr>
                                        <td>Web Application Development using ASP.NET</td>
                                        <td>Internal</td>
                                        <td>02/12/2015</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>19.5</td>
                                    </tr>
                                    <tr>
                                        <td>Web Application Development using ASP.NET</td>
                                        <td>Quiz</td>
                                        <td>01/12/2015</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>13</td>
                                    </tr>
                                    <tr>
                                        <td>Web Application Development using ASP.NET</td>
                                        <td>Unit Test</td>
                                        <td>04/11/2015</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>17</td>
                                    </tr>
                                    <tr>
                                        <td>Web Application Development using ASP.NET</td>
                                        <td>Internal</td>
                                        <td>12/10/2015</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>21</td>
                                    </tr>
                                    <tr>
                                        <td>Web Application Development using ASP.NET</td>
                                        <td>Unit Test</td>
                                        <td>18/09/2015</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>Web Application Development using ASP.NET</td>
                                        <td>Quiz</td>
                                        <td>03/09/2015</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced RDBMS</td>
                                        <td>Internal</td>
                                        <td>09/12/2015</td>
                                        <td>60</td>
                                        <td>30</td>
                                        <td>40</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced RDBMS</td>
                                        <td>Viva</td>
                                        <td>08/12/2015</td>
                                        <td>4</td>
                                        <td>2</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced RDBMS</td>
                                        <td>Internal</td>
                                        <td>04/12/2015</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>28</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced RDBMS</td>
                                        <td>Assignment</td>
                                        <td>23/11/2015</td>
                                        <td>100</td>
                                        <td>50</td>
                                        <td>85</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced RDBMS</td>
                                        <td>Unit Test</td>
                                        <td>05/11/2015</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>22</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced RDBMS</td>
                                        <td>Internal</td>
                                        <td>28/10/2015</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>22</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced RDBMS</td>
                                        <td>Quiz</td>
                                        <td>16/10/2015</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>17</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced RDBMS</td>
                                        <td>Quiz</td>
                                        <td>09/10/2015</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced RDBMS</td>
                                        <td>Unit Test</td>
                                        <td>19/09/2015</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced RDBMS</td>
                                        <td>Internal</td>
                                        <td>15/09/2015</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Software Engineering</td>
                                        <td>Internal</td>
                                        <td>10/12/2015</td>
                                        <td>60</td>
                                        <td>30</td>
                                        <td>31</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Software Engineering</td>
                                        <td>Unit Test</td>
                                        <td>05/11/2015</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Software Engineering</td>
                                        <td>Self Creation Parameter</td>
                                        <td>29/10/2015</td>
                                        <td>50</td>
                                        <td>25</td>
                                        <td>46</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Software Engineering</td>
                                        <td>Quiz</td>
                                        <td>10/10/2015</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>13.5</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Software Engineering</td>
                                        <td>Unit Test</td>
                                        <td>21/09/2015</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <td>Big Data Analytics</td>
                                        <td>Self Creation Parameter</td>
                                        <td>16/12/2015</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>25</td>
                                    </tr>
                                    <tr>
                                        <td>Big Data Analytics</td>
                                        <td>Internal</td>
                                        <td>11/12/2015</td>
                                        <td>60</td>
                                        <td>30</td>
                                        <td>14</td>
                                    </tr>
                                    <tr>
                                        <td>Big Data Analytics</td>
                                        <td>Unit Test</td>
                                        <td>06/11/2015</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <td>Big Data Analytics</td>
                                        <td>Unit Test</td>
                                        <td>21/09/2015</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>Big Data Analytics</td>
                                        <td>Quiz</td>
                                        <td>24/08/2015</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>9.5</td>
                                    </tr>
                                    <tr>
                                        <td>Project</td>
                                        <td>Presentation - 1</td>
                                        <td>16/04/2016</td>
                                        <td>60</td>
                                        <td>30</td>
                                        <td>41</td>
                                    </tr>
                                    <tr>
                                        <td>Project</td>
                                        <td>Progress Report - 1</td>
                                        <td>02/04/2016</td>
                                        <td>40</td>
                                        <td>20</td>
                                        <td>23</td>
                                    </tr>
                                    <tr>
                                        <td>Project</td>
                                        <td>Presentation - 1</td>
                                        <td>12/03/2016</td>
                                        <td>60</td>
                                        <td>30</td>
                                        <td>43</td>
                                    </tr>
                                    <tr>
                                        <td>Project</td>
                                        <td>Progress Report - 1</td>
                                        <td>27/02/2016</td>
                                        <td>40</td>
                                        <td>20</td>
                                        <td>17</td>
                                    </tr>
                                    <tr>
                                        <td>Search Engine Optimization</td>
                                        <td>Self Creation Parameter</td>
                                        <td>04/05/2016</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>22</td>
                                    </tr>
                                    <tr>
                                        <td>Search Engine Optimization</td>
                                        <td>Internal</td>
                                        <td>28/04/2016</td>
                                        <td>60</td>
                                        <td>30</td>
                                        <td>30</td>
                                    </tr>
                                    <tr>
                                        <td>Search Engine Optimization</td>
                                        <td>Unit Test</td>
                                        <td>31/03/2016</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <td>Search Engine Optimization</td>
                                        <td>Quiz</td>
                                        <td>14/03/2016</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>Search Engine Optimization</td>
                                        <td>Unit Test</td>
                                        <td>25/02/2016</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>13</td>
                                    </tr>
                                    <tr>
                                        <td>Search Engine Optimization</td>
                                        <td>Open Book</td>
                                        <td>15/02/2016</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>Information Security</td>
                                        <td>Internal</td>
                                        <td>29/04/2016</td>
                                        <td>60</td>
                                        <td>30</td>
                                        <td>43</td>
                                    </tr>
                                    <tr>
                                        <td>Information Security</td>
                                        <td>Self Creation Parameter</td>
                                        <td>28/04/2016</td>
                                        <td>25</td>
                                        <td>12</td>
                                        <td>21</td>
                                    </tr>
                                    <tr>
                                        <td>Information Security</td>
                                        <td>Unit Test</td>
                                        <td>31/03/2016</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <td>Information Security</td>
                                        <td>Quiz</td>
                                        <td>18/03/2016</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>14.5</td>
                                    </tr>
                                    <tr>
                                        <td>Information Security</td>
                                        <td>Open Book</td>
                                        <td>04/03/2016</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>Information Security</td>
                                        <td>Unit Test</td>
                                        <td>25/02/2016</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>18</td>
                                    </tr>
                                    <tr>
                                        <td>Information Security</td>
                                        <td>Open Book</td>
                                        <td>05/02/2016</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>Web Programming</td>
                                        <td>Viva</td>
                                        <td>05/05/2016</td>
                                        <td>4</td>
                                        <td>2</td>
                                        <td>2.8</td>
                                    </tr>
                                    <tr>
                                        <td>Web Programming</td>
                                        <td>Internal</td>
                                        <td>03/05/2016</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Web Programming</td>
                                        <td>Self Creation Parameter</td>
                                        <td>02/05/2016</td>
                                        <td>5</td>
                                        <td>2</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>Web Programming</td>
                                        <td>Internal</td>
                                        <td>25/04/2016</td>
                                        <td>60</td>
                                        <td>30</td>
                                        <td>37.5</td>
                                    </tr>
                                    <tr>
                                        <td>Web Programming</td>
                                        <td>Internal</td>
                                        <td>20/04/2016</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>18</td>
                                    </tr>
                                    <tr>
                                        <td>Web Programming</td>
                                        <td>Open Book</td>
                                        <td>15/04/2016</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>14.5</td>
                                    </tr>
                                    <tr>
                                        <td>Web Programming</td>
                                        <td>Unit Test</td>
                                        <td>28/03/2016</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>17</td>
                                    </tr>
                                    <tr>
                                        <td>Web Programming</td>
                                        <td>Unit Test</td>
                                        <td>28/03/2016</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>18</td>
                                    </tr>
                                    <tr>
                                        <td>Web Programming</td>
                                        <td>Quiz</td>
                                        <td>10/03/2016</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>12.5</td>
                                    </tr>
                                    <tr>
                                        <td>Web Programming</td>
                                        <td>Unit Test</td>
                                        <td>22/02/2016</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td>Web Programming</td>
                                        <td>Unit Test</td>
                                        <td>22/02/2016</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <td>Web Programming</td>
                                        <td>Open Book</td>
                                        <td>06/02/2016</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>11.5</td>
                                    </tr>
                                    <tr>
                                        <td>MVC based Web Development</td>
                                        <td>Viva</td>
                                        <td>03/05/2016</td>
                                        <td>275</td>
                                        <td>137</td>
                                        <td>178</td>
                                    </tr>
                                    <tr>
                                        <td>MVC based Web Development</td>
                                        <td>Self Creation Parameter</td>
                                        <td>30/04/2016</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>24</td>
                                    </tr>
                                    <tr>
                                        <td>MVC based Web Development</td>
                                        <td>Internal</td>
                                        <td>26/04/2016</td>
                                        <td>60</td>
                                        <td>30</td>
                                        <td>34</td>
                                    </tr>
                                    <tr>
                                        <td>MVC based Web Development</td>
                                        <td>Internal</td>
                                        <td>21/04/2016</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>17</td>
                                    </tr>
                                    <tr>
                                        <td>MVC based Web Development</td>
                                        <td>Unit Test</td>
                                        <td>29/03/2016</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>MVC based Web Development</td>
                                        <td>Unit Test</td>
                                        <td>29/03/2016</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>19</td>
                                    </tr>
                                    <tr>
                                        <td>MVC based Web Development</td>
                                        <td>Quiz</td>
                                        <td>16/03/2016</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>14</td>
                                    </tr>
                                    <tr>
                                        <td>MVC based Web Development</td>
                                        <td>Unit Test</td>
                                        <td>29/02/2016</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>14</td>
                                    </tr>
                                    <tr>
                                        <td>MVC based Web Development</td>
                                        <td>Unit Test</td>
                                        <td>22/02/2016</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <td>MVC based Web Development</td>
                                        <td>Open Book</td>
                                        <td>17/02/2016</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>Mobile Application Development</td>
                                        <td>Self Creation Parameter</td>
                                        <td>30/04/2016</td>
                                        <td>5</td>
                                        <td>2</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>Mobile Application Development</td>
                                        <td>Viva</td>
                                        <td>30/04/2016</td>
                                        <td>285</td>
                                        <td>142</td>
                                        <td>208</td>
                                    </tr>
                                    <tr>
                                        <td>Mobile Application Development</td>
                                        <td>Internal</td>
                                        <td>27/04/2016</td>
                                        <td>60</td>
                                        <td>30</td>
                                        <td>41</td>
                                    </tr>
                                    <tr>
                                        <td>Mobile Application Development</td>
                                        <td>Internal</td>
                                        <td>22/04/2016</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <td>Mobile Application Development</td>
                                        <td>Unit Test</td>
                                        <td>30/03/2016</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>18</td>
                                    </tr>
                                    <tr>
                                        <td>Mobile Application Development</td>
                                        <td>Unit Test</td>
                                        <td>30/03/2016</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>18</td>
                                    </tr>
                                    <tr>
                                        <td>Mobile Application Development</td>
                                        <td>Quiz</td>
                                        <td>11/03/2016</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>Mobile Application Development</td>
                                        <td>Unit Test</td>
                                        <td>24/02/2016</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td>19</td>
                                    </tr>
                                    <tr>
                                        <td>Mobile Application Development</td>
                                        <td>Unit Test</td>
                                        <td>24/02/2016</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>17</td>
                                    </tr>
                                    <tr>
                                        <td>Mobile Application Development</td>
                                        <td>Open Book</td>
                                        <td>04/02/2016</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>Project</td>
                                        <td>Work Progress Analysis</td>
                                        <td>25/10/2016</td>
                                        <td>40</td>
                                        <td>16</td>
                                        <td>31</td>
                                    </tr>
                                    <tr>
                                        <td>Project</td>
                                        <td>Presentation - 2</td>
                                        <td>15/10/2016</td>
                                        <td>60</td>
                                        <td>24</td>
                                        <td>42</td>
                                    </tr>
                                    <tr>
                                        <td>Project</td>
                                        <td>Presentation - 1</td>
                                        <td>03/09/2016</td>
                                        <td>60</td>
                                        <td>24</td>
                                        <td>37</td>
                                    </tr>
                                    <tr>
                                        <td>Project</td>
                                        <td>Work Progress Analysis</td>
                                        <td>06/08/2016</td>
                                        <td>40</td>
                                        <td>16</td>
                                        <td>30</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Mobile Application Development</td>
                                        <td>Self Creation Parameter</td>
                                        <td>11/11/2016</td>
                                        <td>5</td>
                                        <td>2</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Mobile Application Development</td>
                                        <td>Viva</td>
                                        <td>11/11/2016</td>
                                        <td>150</td>
                                        <td>60</td>
                                        <td>114</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Mobile Application Development</td>
                                        <td>Internal</td>
                                        <td>20/10/2016</td>
                                        <td>60</td>
                                        <td>24</td>
                                        <td>32</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Mobile Application Development</td>
                                        <td>Internal</td>
                                        <td>17/10/2016</td>
                                        <td>30</td>
                                        <td>12</td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Mobile Application Development</td>
                                        <td>Unit Test</td>
                                        <td>19/09/2016</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>9.5</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Mobile Application Development</td>
                                        <td>Unit Test</td>
                                        <td>19/09/2016</td>
                                        <td>30</td>
                                        <td>12</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Mobile Application Development</td>
                                        <td>Open Book</td>
                                        <td>16/09/2016</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Mobile Application Development</td>
                                        <td>Unit Test</td>
                                        <td>08/08/2016</td>
                                        <td>30</td>
                                        <td>12</td>
                                        <td>21.5</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Mobile Application Development</td>
                                        <td>Unit Test</td>
                                        <td>08/08/2016</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Mobile Application Development</td>
                                        <td>Quiz</td>
                                        <td>01/08/2016</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>MVC Frameworks</td>
                                        <td>Self Creation Parameter</td>
                                        <td>10/11/2016</td>
                                        <td>5</td>
                                        <td>2</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>MVC Frameworks</td>
                                        <td>Viva</td>
                                        <td>25/10/2016</td>
                                        <td>165</td>
                                        <td>66</td>
                                        <td>130</td>
                                    </tr>
                                    <tr>
                                        <td>MVC Frameworks</td>
                                        <td>Internal</td>
                                        <td>21/10/2016</td>
                                        <td>60</td>
                                        <td>24</td>
                                        <td>41</td>
                                    </tr>
                                    <tr>
                                        <td>MVC Frameworks</td>
                                        <td>Internal</td>
                                        <td>18/10/2016</td>
                                        <td>30</td>
                                        <td>12</td>
                                        <td>23</td>
                                    </tr>
                                    <tr>
                                        <td>MVC Frameworks</td>
                                        <td>Unit Test</td>
                                        <td>20/09/2016</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>13</td>
                                    </tr>
                                    <tr>
                                        <td>MVC Frameworks</td>
                                        <td>Unit Test</td>
                                        <td>20/09/2016</td>
                                        <td>30</td>
                                        <td>12</td>
                                        <td>17</td>
                                    </tr>
                                    <tr>
                                        <td>MVC Frameworks</td>
                                        <td>Open Book</td>
                                        <td>09/09/2016</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>MVC Frameworks</td>
                                        <td>Unit Test</td>
                                        <td>09/08/2016</td>
                                        <td>30</td>
                                        <td>12</td>
                                        <td>14.5</td>
                                    </tr>
                                    <tr>
                                        <td>MVC Frameworks</td>
                                        <td>Unit Test</td>
                                        <td>09/08/2016</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>14.5</td>
                                    </tr>
                                    <tr>
                                        <td>MVC Frameworks</td>
                                        <td>Quiz</td>
                                        <td>29/07/2016</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <td>Collaborative Content Management Systems</td>
                                        <td>Journal</td>
                                        <td>25/10/2016</td>
                                        <td>150</td>
                                        <td>60</td>
                                        <td>107</td>
                                    </tr>
                                    <tr>
                                        <td>Collaborative Content Management Systems</td>
                                        <td>Self Creation Parameter</td>
                                        <td>25/10/2016</td>
                                        <td>50</td>
                                        <td>20</td>
                                        <td>25</td>
                                    </tr>
                                    <tr>
                                        <td>Collaborative Content Management Systems</td>
                                        <td>Internal</td>
                                        <td>22/10/2016</td>
                                        <td>60</td>
                                        <td>24</td>
                                        <td>35</td>
                                    </tr>
                                    <tr>
                                        <td>Collaborative Content Management Systems</td>
                                        <td>Internal</td>
                                        <td>14/10/2016</td>
                                        <td>30</td>
                                        <td>12</td>
                                        <td>14</td>
                                    </tr>
                                    <tr>
                                        <td>Collaborative Content Management Systems</td>
                                        <td>Unit Test</td>
                                        <td>21/09/2016</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>Collaborative Content Management Systems</td>
                                        <td>Unit Test</td>
                                        <td>21/09/2016</td>
                                        <td>30</td>
                                        <td>12</td>
                                        <td>21</td>
                                    </tr>
                                    <tr>
                                        <td>Collaborative Content Management Systems</td>
                                        <td>Open Book</td>
                                        <td>08/09/2016</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>9</td>
                                    </tr>
                                    <tr>
                                        <td>Collaborative Content Management Systems</td>
                                        <td>Unit Test</td>
                                        <td>10/08/2016</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>18</td>
                                    </tr>
                                    <tr>
                                        <td>Collaborative Content Management Systems</td>
                                        <td>Unit Test</td>
                                        <td>08/08/2016</td>
                                        <td>30</td>
                                        <td>12</td>
                                        <td>19</td>
                                    </tr>
                                    <tr>
                                        <td>Collaborative Content Management Systems</td>
                                        <td>Quiz</td>
                                        <td>28/07/2016</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>12.5</td>
                                    </tr>
                                    <tr>
                                        <td>Web Analytics</td>
                                        <td>Self Creation Parameter</td>
                                        <td>15/11/2016</td>
                                        <td>30</td>
                                        <td>12</td>
                                        <td>21</td>
                                    </tr>
                                    <tr>
                                        <td>Web Analytics</td>
                                        <td>Internal</td>
                                        <td>24/10/2016</td>
                                        <td>60</td>
                                        <td>24</td>
                                        <td>37</td>
                                    </tr>
                                    <tr>
                                        <td>Web Analytics</td>
                                        <td>Unit Test</td>
                                        <td>23/09/2016</td>
                                        <td>30</td>
                                        <td>12</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td>Web Analytics</td>
                                        <td>Open Book</td>
                                        <td>14/09/2016</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>Web Analytics</td>
                                        <td>Unit Test</td>
                                        <td>12/08/2016</td>
                                        <td>30</td>
                                        <td>12</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>Web Analytics</td>
                                        <td>Quiz</td>
                                        <td>04/08/2016</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>11.5</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Information Security</td>
                                        <td>Presentation - 2</td>
                                        <td>10/11/2016</td>
                                        <td>50</td>
                                        <td>20</td>
                                        <td>31</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Information Security</td>
                                        <td>Self Creation Parameter</td>
                                        <td>10/11/2016</td>
                                        <td>60</td>
                                        <td>24</td>
                                        <td>40</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Information Security</td>
                                        <td>Viva</td>
                                        <td>25/10/2016</td>
                                        <td>60</td>
                                        <td>24</td>
                                        <td>45</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Information Security</td>
                                        <td>Internal</td>
                                        <td>19/10/2016</td>
                                        <td>60</td>
                                        <td>24</td>
                                        <td>25</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Information Security</td>
                                        <td>Presentation - 1</td>
                                        <td>22/09/2016</td>
                                        <td>50</td>
                                        <td>20</td>
                                        <td>32.5</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Information Security</td>
                                        <td>Unit Test</td>
                                        <td>22/09/2016</td>
                                        <td>30</td>
                                        <td>12</td>
                                        <td>17</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Information Security</td>
                                        <td>Open Book</td>
                                        <td>09/09/2016</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Information Security</td>
                                        <td>Unit Test</td>
                                        <td>11/08/2016</td>
                                        <td>30</td>
                                        <td>12</td>
                                        <td>9</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Information Security</td>
                                        <td>Unit Test</td>
                                        <td>11/08/2016</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Information Security</td>
                                        <td>Quiz</td>
                                        <td>26/07/2016</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>13</td>
                                    </tr>
                                    <tr>
                                        <td>Project</td>
                                        <td>Project Report</td>
                                        <td>31/05/2017</td>
                                        <td>30</td>
                                        <td>12</td>
                                        <td>22</td>
                                    </tr>
                                    <tr>
                                        <td>Project</td>
                                        <td>Internal</td>
                                        <td>26/05/2017</td>
                                        <td>140</td>
                                        <td>56</td>
                                        <td>95</td>
                                    </tr>
                                    <tr>
                                        <td>Project</td>
                                        <td>Progress Report - 1</td>
                                        <td>10/05/2017</td>
                                        <td>10</td>
                                        <td>4</td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td>Project</td>
                                        <td>Progress Report - 1</td>
                                        <td>25/03/2017</td>
                                        <td>10</td>
                                        <td>4</td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td>Project</td>
                                        <td>Project Report</td>
                                        <td>11/03/2017</td>
                                        <td>30</td>
                                        <td>12</td>
                                        <td>21</td>
                                    </tr>
                                    <tr>
                                        <td>Project</td>
                                        <td>Progress Report - 1</td>
                                        <td>25/02/2017</td>
                                        <td>10</td>
                                        <td>4</td>
                                        <td>7.5</td>
                                    </tr>
                                    <tr>
                                        <td>Project</td>
                                        <td>Progress Report - 1</td>
                                        <td>28/01/2017</td>
                                        <td>10</td>
                                        <td>4</td>
                                        <td>8.5</td>
                                    </tr>
                                    <tr>
                                        <td>Project</td>
                                        <td>Joining Letter</td>
                                        <td>15/12/2016</td>
                                        <td>10</td>
                                        <td>4</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>Project</td>
                                        <td>Confirmation Letter</td>
                                        <td>01/12/2016</td>
                                        <td>10</td>
                                        <td>4</td>
                                        <td>10</td>
                                    </tr>
                                </tbody>
                            </table>
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
    $('#report-table').DataTable();
    // DataTable end
</script>

@include('html.layouts.footer-bottom-link')
</body>

</html>
