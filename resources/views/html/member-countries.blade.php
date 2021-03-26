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
                            <h5 class="m-b-10">Countrie</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Membership</a></li>
                            <li class="breadcrumb-item">Countrie</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- liveline-section start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="report-table" class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="disabled center aligned"><i class="icon disabled id"></i></th>
                                        <th data-sort="string" class="asc">Name</th>
                                        <th data-sort="string">Abbreviation</th>
                                        <th data-sort="int">TAX/VAT</th>
                                        <th data-sort="int">Sorting</th>
                                        <th class="disabled center aligned">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">1</span></div>
                                        </td>
                                        <td>
                                            Afghanistan
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">AF</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%</div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">2</span></div>
                                        </td>
                                        <td>
                                            Albania
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">AL</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%</div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">3</span></div>
                                        </td>
                                        <td>
                                            Algeria
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">DZ</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%</div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">4</span></div>
                                        </td>
                                        <td>
                                            American Samoa
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">AS</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%</div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">5</span></div>
                                        </td>
                                        <td>
                                            Andorra
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">AD</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%</div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">6</span></div>
                                        </td>
                                        <td>
                                            Angola
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">AO</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%</div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">7</span></div>
                                        </td>
                                        <td>
                                            Anguilla
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">AI</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%</div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">8</span></div>
                                        </td>
                                        <td>
                                            Antarctica
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">AQ</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%</div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">9</span></div>
                                        </td>
                                        <td>
                                            Antigua and Barbuda
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">AG</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%</div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">10</span></div>
                                        </td>
                                        <td>
                                            Argentina
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">AR</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">11</span></div>
                                        </td>
                                        <td>
                                            Armenia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">AM</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">12</span></div>
                                        </td>
                                        <td>
                                            Aruba
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">AW</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">13</span></div>
                                        </td>
                                        <td>
                                            Australia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">AU</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">14</span></div>
                                        </td>
                                        <td>
                                            Austria
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">AT</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">15</span></div>
                                        </td>
                                        <td>
                                            Azerbaijan
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">AZ</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">16</span></div>
                                        </td>
                                        <td>
                                            Bahamas
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">BS</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">17</span></div>
                                        </td>
                                        <td>
                                            Bahrain
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">BH</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">18</span></div>
                                        </td>
                                        <td>
                                            Bangladesh
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">BD</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">19</span></div>
                                        </td>
                                        <td>
                                            Barbados
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">BB</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">20</span></div>
                                        </td>
                                        <td>
                                            Belarus
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">BY</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">21</span></div>
                                        </td>
                                        <td>
                                            Belgium
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">BE</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">22</span></div>
                                        </td>
                                        <td>
                                            Belize
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">BZ</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">23</span></div>
                                        </td>
                                        <td>
                                            Benin
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">BJ</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">24</span></div>
                                        </td>
                                        <td>
                                            Bermuda
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">BM</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">25</span></div>
                                        </td>
                                        <td>
                                            Bhutan
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">BT</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">26</span></div>
                                        </td>
                                        <td>
                                            Bolivia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">BO</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">27</span></div>
                                        </td>
                                        <td>
                                            Bosnia and Herzegowina
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">BA</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">28</span></div>
                                        </td>
                                        <td>
                                            Botswana
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">BW</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">29</span></div>
                                        </td>
                                        <td>
                                            Bouvet Island
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">BV</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">30</span></div>
                                        </td>
                                        <td>
                                            Brazil
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">BR</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">31</span></div>
                                        </td>
                                        <td>
                                            British Indian Ocean Territory
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">IO</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">32</span></div>
                                        </td>
                                        <td>
                                            British Virgin Islands
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">VG</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">33</span></div>
                                        </td>
                                        <td>
                                            Brunei Darussalam
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">BN</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">34</span></div>
                                        </td>
                                        <td>
                                            Bulgaria
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">BG</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">35</span></div>
                                        </td>
                                        <td>
                                            Burkina Faso
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">BF</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">36</span></div>
                                        </td>
                                        <td>
                                            Burundi
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">BI</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">37</span></div>
                                        </td>
                                        <td>
                                            Cambodia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">KH</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">38</span></div>
                                        </td>
                                        <td>
                                            Cameroon
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">CM</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">39</span></div>
                                        </td>
                                        <td>
                                            Canada
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">CA</span></div>
                                        </td>
                                        <td>
                                            <div><span data-set="{;: 39,&quot;key&quot;:&quot;13.00&quot;}">13.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>1000</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">40</span></div>
                                        </td>
                                        <td>
                                            Cape Verde
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">CV</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">41</span></div>
                                        </td>
                                        <td>
                                            Cayman Islands
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">KY</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">42</span></div>
                                        </td>
                                        <td>
                                            Central African Republic
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">CF</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">43</span></div>
                                        </td>
                                        <td>
                                            Chad
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">TD</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">44</span></div>
                                        </td>
                                        <td>
                                            Chile
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">CL</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">45</span></div>
                                        </td>
                                        <td>
                                            China
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">CN</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">46</span></div>
                                        </td>
                                        <td>
                                            Christmas Island
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">CX</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">47</span></div>
                                        </td>
                                        <td>
                                            Cocos (Keeling) Islands
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">CC</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">48</span></div>
                                        </td>
                                        <td>
                                            Colombia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">CO</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">49</span></div>
                                        </td>
                                        <td>
                                            Comoros
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">KM</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">50</span></div>
                                        </td>
                                        <td>
                                            Congo
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">CG</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">51</span></div>
                                        </td>
                                        <td>
                                            Cook Islands
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">CK</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">52</span></div>
                                        </td>
                                        <td>
                                            Costa Rica
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">CR</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">53</span></div>
                                        </td>
                                        <td>
                                            Cote D'ivoire
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">CI</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">54</span></div>
                                        </td>
                                        <td>
                                            Croatia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">HR</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">55</span></div>
                                        </td>
                                        <td>
                                            Cuba
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">CU</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">56</span></div>
                                        </td>
                                        <td>
                                            Cyprus
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">CY</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">57</span></div>
                                        </td>
                                        <td>
                                            Czech Republic
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">CZ</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">58</span></div>
                                        </td>
                                        <td>
                                            Denmark
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">DK</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">59</span></div>
                                        </td>
                                        <td>
                                            Djibouti
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">DJ</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">60</span></div>
                                        </td>
                                        <td>
                                            Dominica
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">DM</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">61</span></div>
                                        </td>
                                        <td>
                                            Dominican Republic
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">DO</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">62</span></div>
                                        </td>
                                        <td>
                                            East Timor
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">TP</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">63</span></div>
                                        </td>
                                        <td>
                                            Ecuador
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">EC</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">64</span></div>
                                        </td>
                                        <td>
                                            Egypt
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">EG</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">65</span></div>
                                        </td>
                                        <td>
                                            El Salvador
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">SV</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">66</span></div>
                                        </td>
                                        <td>
                                            Equatorial Guinea
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">GQ</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">67</span></div>
                                        </td>
                                        <td>
                                            Eritrea
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">ER</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">68</span></div>
                                        </td>
                                        <td>
                                            Estonia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">EE</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">69</span></div>
                                        </td>
                                        <td>
                                            Ethiopia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">ET</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">70</span></div>
                                        </td>
                                        <td>
                                            Falkland Islands (Malvinas)
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">FK</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">71</span></div>
                                        </td>
                                        <td>
                                            Faroe Islands
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">FO</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">72</span></div>
                                        </td>
                                        <td>
                                            Fiji
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">FJ</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">73</span></div>
                                        </td>
                                        <td>
                                            Finland
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">FI</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">74</span></div>
                                        </td>
                                        <td>
                                            France
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">FR</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">75</span></div>
                                        </td>
                                        <td>
                                            French Guiana
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">GF</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">76</span></div>
                                        </td>
                                        <td>
                                            French Polynesia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">PF</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">77</span></div>
                                        </td>
                                        <td>
                                            French Southern Territories
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">TF</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">78</span></div>
                                        </td>
                                        <td>
                                            Gabon
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">GA</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">79</span></div>
                                        </td>
                                        <td>
                                            Gambia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">GM</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">80</span></div>
                                        </td>
                                        <td>
                                            Georgia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">GE</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">81</span></div>
                                        </td>
                                        <td>
                                            Germany
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">DE</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">82</span></div>
                                        </td>
                                        <td>
                                            Ghana
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">GH</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">83</span></div>
                                        </td>
                                        <td>
                                            Gibraltar
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">GI</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">84</span></div>
                                        </td>
                                        <td>
                                            Greece
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">GR</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">85</span></div>
                                        </td>
                                        <td>
                                            Greenland
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">GL</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">86</span></div>
                                        </td>
                                        <td>
                                            Grenada
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">GD</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">87</span></div>
                                        </td>
                                        <td>
                                            Guadeloupe
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">GP</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">88</span></div>
                                        </td>
                                        <td>
                                            Guam
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">GU</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">89</span></div>
                                        </td>
                                        <td>
                                            Guatemala
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">GT</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">90</span></div>
                                        </td>
                                        <td>
                                            Guinea
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">GN</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">91</span></div>
                                        </td>
                                        <td>
                                            Guinea-Bissau
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">GW</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">92</span></div>
                                        </td>
                                        <td>
                                            Guyana
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">GY</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">93</span></div>
                                        </td>
                                        <td>
                                            Haiti
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">HT</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">94</span></div>
                                        </td>
                                        <td>
                                            Heard and McDonald Islands
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">HM</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">95</span></div>
                                        </td>
                                        <td>
                                            Honduras
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">HN</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">96</span></div>
                                        </td>
                                        <td>
                                            Hong Kong
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">HK</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">97</span></div>
                                        </td>
                                        <td>
                                            Hungary
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">HU</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">98</span></div>
                                        </td>
                                        <td>
                                            Iceland
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">IS</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">99</span></div>
                                        </td>
                                        <td>
                                            India
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">IN</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">100</span></div>
                                        </td>
                                        <td>
                                            Indonesia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">ID</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">101</span></div>
                                        </td>
                                        <td>
                                            Iraq
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">IQ</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">102</span></div>
                                        </td>
                                        <td>
                                            Ireland
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">IE</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">103</span></div>
                                        </td>
                                        <td>
                                            Islamic Republic of Iran
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">IR</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">104</span></div>
                                        </td>
                                        <td>
                                            Israel
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">IL</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">105</span></div>
                                        </td>
                                        <td>
                                            Italy
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">IT</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">106</span></div>
                                        </td>
                                        <td>
                                            Jamaica
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">JM</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">107</span></div>
                                        </td>
                                        <td>
                                            Japan
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">JP</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">108</span></div>
                                        </td>
                                        <td>
                                            Jordan
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">JO</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">109</span></div>
                                        </td>
                                        <td>
                                            Kazakhstan
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">KZ</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">110</span></div>
                                        </td>
                                        <td>
                                            Kenya
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">KE</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">111</span></div>
                                        </td>
                                        <td>
                                            Kiribati
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">KI</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">112</span></div>
                                        </td>
                                        <td>
                                            Korea, Dem. Peoples Rep of
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">KP</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">113</span></div>
                                        </td>
                                        <td>
                                            Korea, Republic of
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">KR</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">114</span></div>
                                        </td>
                                        <td>
                                            Kuwait
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">KW</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">115</span></div>
                                        </td>
                                        <td>
                                            Kyrgyzstan
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">KG</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">116</span></div>
                                        </td>
                                        <td>
                                            Laos
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">LA</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">117</span></div>
                                        </td>
                                        <td>
                                            Latvia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">LV</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">118</span></div>
                                        </td>
                                        <td>
                                            Lebanon
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">LB</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">119</span></div>
                                        </td>
                                        <td>
                                            Lesotho
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">LS</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">120</span></div>
                                        </td>
                                        <td>
                                            Liberia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">LR</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">121</span></div>
                                        </td>
                                        <td>
                                            Libyan Arab Jamahiriya
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">LY</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">122</span></div>
                                        </td>
                                        <td>
                                            Liechtenstein
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">LI</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">123</span></div>
                                        </td>
                                        <td>
                                            Lithuania
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">LT</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">124</span></div>
                                        </td>
                                        <td>
                                            Luxembourg
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">LU</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">125</span></div>
                                        </td>
                                        <td>
                                            Macau
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">MO</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">126</span></div>
                                        </td>
                                        <td>
                                            Macedonia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">MK</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">127</span></div>
                                        </td>
                                        <td>
                                            Madagascar
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">MG</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">128</span></div>
                                        </td>
                                        <td>
                                            Malawi
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">MW</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">129</span></div>
                                        </td>
                                        <td>
                                            Malaysia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">MY</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">130</span></div>
                                        </td>
                                        <td>
                                            Maldives
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">MV</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">131</span></div>
                                        </td>
                                        <td>
                                            Mali
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">ML</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">132</span></div>
                                        </td>
                                        <td>
                                            Malta
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">MT</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">133</span></div>
                                        </td>
                                        <td>
                                            Marshall Islands
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">MH</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">134</span></div>
                                        </td>
                                        <td>
                                            Martinique
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">MQ</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">135</span></div>
                                        </td>
                                        <td>
                                            Mauritania
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">MR</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">136</span></div>
                                        </td>
                                        <td>
                                            Mauritius
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">MU</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">137</span></div>
                                        </td>
                                        <td>
                                            Mayotte
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">YT</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">138</span></div>
                                        </td>
                                        <td>
                                            Mexico
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">MX</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">139</span></div>
                                        </td>
                                        <td>
                                            Micronesia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">FM</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">140</span></div>
                                        </td>
                                        <td>
                                            Moldova, Republic of
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">MD</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">141</span></div>
                                        </td>
                                        <td>
                                            Monaco
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">MC</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">142</span></div>
                                        </td>
                                        <td>
                                            Mongolia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">MN</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">143</span></div>
                                        </td>
                                        <td>
                                            Montserrat
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">MS</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">144</span></div>
                                        </td>
                                        <td>
                                            Morocco
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">MA</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">145</span></div>
                                        </td>
                                        <td>
                                            Mozambique
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">MZ</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">146</span></div>
                                        </td>
                                        <td>
                                            Myanmar
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">MM</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">147</span></div>
                                        </td>
                                        <td>
                                            Namibia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">NA</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">148</span></div>
                                        </td>
                                        <td>
                                            Nauru
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">NR</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">149</span></div>
                                        </td>
                                        <td>
                                            Nepal
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">NP</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">150</span></div>
                                        </td>
                                        <td>
                                            Netherlands
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">NL</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">151</span></div>
                                        </td>
                                        <td>
                                            Netherlands Antilles
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">AN</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">152</span></div>
                                        </td>
                                        <td>
                                            New Caledonia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">NC</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">153</span></div>
                                        </td>
                                        <td>
                                            New Zealand
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">NZ</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">154</span></div>
                                        </td>
                                        <td>
                                            Nicaragua
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">NI</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">155</span></div>
                                        </td>
                                        <td>
                                            Niger
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">NE</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">156</span></div>
                                        </td>
                                        <td>
                                            Nigeria
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">NG</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">157</span></div>
                                        </td>
                                        <td>
                                            Niue
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">NU</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">158</span></div>
                                        </td>
                                        <td>
                                            Norfolk Island
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">NF</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">159</span></div>
                                        </td>
                                        <td>
                                            Northern Mariana Islands
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">MP</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">160</span></div>
                                        </td>
                                        <td>
                                            Norway
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">NO</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">161</span></div>
                                        </td>
                                        <td>
                                            Oman
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">OM</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">162</span></div>
                                        </td>
                                        <td>
                                            Pakistan
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">PK</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">163</span></div>
                                        </td>
                                        <td>
                                            Palau
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">PW</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">164</span></div>
                                        </td>
                                        <td>
                                            Panama
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">PA</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">165</span></div>
                                        </td>
                                        <td>
                                            Papua New Guinea
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">PG</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">166</span></div>
                                        </td>
                                        <td>
                                            Paraguay
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">PY</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">167</span></div>
                                        </td>
                                        <td>
                                            Peru
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">PE</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">168</span></div>
                                        </td>
                                        <td>
                                            Philippines
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">PH</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">169</span></div>
                                        </td>
                                        <td>
                                            Pitcairn
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">PN</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">170</span></div>
                                        </td>
                                        <td>
                                            Poland
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">PL</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">171</span></div>
                                        </td>
                                        <td>
                                            Portugal
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">PT</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">172</span></div>
                                        </td>
                                        <td>
                                            Puerto Rico
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">PR</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">173</span></div>
                                        </td>
                                        <td>
                                            Qatar
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">QA</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">174</span></div>
                                        </td>
                                        <td>
                                            Reunion
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">RE</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">175</span></div>
                                        </td>
                                        <td>
                                            Romania
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">RO</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">176</span></div>
                                        </td>
                                        <td>
                                            Russian Federation
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">RU</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">177</span></div>
                                        </td>
                                        <td>
                                            Rwanda
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">RW</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">178</span></div>
                                        </td>
                                        <td>
                                            Saint Lucia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">LC</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">179</span></div>
                                        </td>
                                        <td>
                                            Samoa
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">WS</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">180</span></div>
                                        </td>
                                        <td>
                                            San Marino
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">SM</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">181</span></div>
                                        </td>
                                        <td>
                                            Sao Tome and Principe
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">ST</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">182</span></div>
                                        </td>
                                        <td>
                                            Saudi Arabia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">SA</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">183</span></div>
                                        </td>
                                        <td>
                                            Senegal
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">SN</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">184</span></div>
                                        </td>
                                        <td>
                                            Serbia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">RS</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">185</span></div>
                                        </td>
                                        <td>
                                            Seychelles
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">SC</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">186</span></div>
                                        </td>
                                        <td>
                                            Sierra Leone
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">SL</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">187</span></div>
                                        </td>
                                        <td>
                                            Singapore
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">SG</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">188</span></div>
                                        </td>
                                        <td>
                                            Slovakia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">SK</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">189</span></div>
                                        </td>
                                        <td>
                                            Slovenia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">SI</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">190</span></div>
                                        </td>
                                        <td>
                                            Solomon Islands
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">SB</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">191</span></div>
                                        </td>
                                        <td>
                                            Somalia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">SO</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">192</span></div>
                                        </td>
                                        <td>
                                            South Africa
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">ZA</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">193</span></div>
                                        </td>
                                        <td>
                                            Spain
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">ES</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">194</span></div>
                                        </td>
                                        <td>
                                            Sri Lanka
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">LK</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">195</span></div>
                                        </td>
                                        <td>
                                            St. Helena
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">SH</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">196</span></div>
                                        </td>
                                        <td>
                                            St. Kitts and Nevis
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">KN</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">197</span></div>
                                        </td>
                                        <td>
                                            St. Pierre and Miquelon
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">PM</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">198</span></div>
                                        </td>
                                        <td>
                                            St. Vincent and the Grenadines
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">VC</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">199</span></div>
                                        </td>
                                        <td>
                                            Sudan
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">SD</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">200</span></div>
                                        </td>
                                        <td>
                                            Suriname
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">SR</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">201</span></div>
                                        </td>
                                        <td>
                                            Svalbard and Jan Mayen Islands
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">SJ</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">202</span></div>
                                        </td>
                                        <td>
                                            Swaziland
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">SZ</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">203</span></div>
                                        </td>
                                        <td>
                                            Sweden
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">SE</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">204</span></div>
                                        </td>
                                        <td>
                                            Switzerland
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">CH</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">205</span></div>
                                        </td>
                                        <td>
                                            Syrian Arab Republic
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">SY</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">206</span></div>
                                        </td>
                                        <td>
                                            Taiwan
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">TW</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">207</span></div>
                                        </td>
                                        <td>
                                            Tajikistan
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">TJ</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">208</span></div>
                                        </td>
                                        <td>
                                            Tanzania, United Republic of
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">TZ</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">209</span></div>
                                        </td>
                                        <td>
                                            Thailand
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">TH</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">210</span></div>
                                        </td>
                                        <td>
                                            Togo
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">TG</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">211</span></div>
                                        </td>
                                        <td>
                                            Tokelau
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">TK</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">212</span></div>
                                        </td>
                                        <td>
                                            Tonga
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">TO</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">213</span></div>
                                        </td>
                                        <td>
                                            Trinidad and Tobago
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">TT</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">214</span></div>
                                        </td>
                                        <td>
                                            Tunisia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">TN</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">215</span></div>
                                        </td>
                                        <td>
                                            Turkey
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">TR</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">216</span></div>
                                        </td>
                                        <td>
                                            Turkmenistan
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">TM</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">217</span></div>
                                        </td>
                                        <td>
                                            Turks and Caicos Islands
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">TC</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">218</span></div>
                                        </td>
                                        <td>
                                            Tuvalu
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">TV</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">219</span></div>
                                        </td>
                                        <td>
                                            Uganda
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">UG</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">220</span></div>
                                        </td>
                                        <td>
                                            Ukraine
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">UA</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">221</span></div>
                                        </td>
                                        <td>
                                            United Arab Emirates
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">AE</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">222</span></div>
                                        </td>
                                        <td>
                                            United Kingdom (GB)
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">GB</span></div>
                                        </td>
                                        <td>
                                            <div><span data-set="{;: 222,&quot;key&quot;:&quot;23.00&quot;}">23.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>999</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">224</span></div>
                                        </td>
                                        <td>
                                            United States
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">US</span></div>
                                        </td>
                                        <td>
                                            <div><span data-set="{;: 224,&quot;key&quot;:&quot;7.50&quot;}">7.50</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>998</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">225</span></div>
                                        </td>
                                        <td>
                                            United States Virgin Islands
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">VI</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">226</span></div>
                                        </td>
                                        <td>
                                            Uruguay
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">UY</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">227</span></div>
                                        </td>
                                        <td>
                                            Uzbekistan
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">UZ</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">228</span></div>
                                        </td>
                                        <td>
                                            Vanuatu
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">VU</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">229</span></div>
                                        </td>
                                        <td>
                                            Vatican City State
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">VA</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">230</span></div>
                                        </td>
                                        <td>
                                            Venezuela
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">VE</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">231</span></div>
                                        </td>
                                        <td>
                                            Vietnam
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">VN</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">232</span></div>
                                        </td>
                                        <td>
                                            Wallis And Futuna Islands
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">WF</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">233</span></div>
                                        </td>
                                        <td>
                                            Western Sahara
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">EH</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">234</span></div>
                                        </td>
                                        <td>
                                            Yemen
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">YE</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">235</span></div>
                                        </td>
                                        <td>
                                            Zaire
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">ZR</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">236</span></div>
                                        </td>
                                        <td>
                                            Zambia
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">ZM</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><span class="wojo mini basic disabled label">237</span></div>
                                        </td>
                                        <td>
                                            Zimbabwe
                                        </td>
                                        <td>
                                            <div><span class="wojo small label">ZW</span></div>
                                        </td>
                                        <td>
                                            <div><span>0.00</span>%
                                            </div>
                                        </td>
                                        <td>
                                            <div>0</div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-check-circle"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- liveline-section end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Country</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label" for="Name"><small class="text-danger">* </small>Template Name</label>
                            <input type="text" class="form-control" id="Name" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label" for="Subject"><small class="text-danger">* </small>Subject</label>
                            <input type="text" class="form-control" id="Subject" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label" for="VAT">TAX/VAT</label>
                            <input type="text" class="form-control" id="VAT" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label" for="Sorting">Sorting</label>
                            <input type="text" class="form-control" id="Sorting" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label class="d-block mb-2">Status</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" checked>
                            <label class="custom-control-label" for="customRadioInline1">Active</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">Inactive</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="d-block mb-2">Default</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline11" name="customRadioInline11" class="custom-control-input" checked>
                            <label class="custom-control-label" for="customRadioInline11">Yes</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline12" name="customRadioInline11" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline12">No</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary"> Save </button>
                <button class="btn btn-danger"> Clear </button>
            </div>
        </div>
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
