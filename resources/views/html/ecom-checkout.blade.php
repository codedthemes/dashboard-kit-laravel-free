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
                            <h5 class="m-b-10">Checkout</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">E-Commerce</a></li>
                            <li class="breadcrumb-item">Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-8">
                <div class="accordion" id="checkoutaccordion">
                    <div class="card">
                        <div class="card-header position-relative d-sm-flex align-items-center justify-content-between">
                            <div>
                                <span class="row">
                                    <span class="col-auto pr-0">
                                        <span class="rounded wid-20 hei-20 d-flex align-items-center justify-content-center f-14 bg-light-primary f-w-600">1</span>
                                    </span>
                                    <span class="col">
                                        <h5 class="d-flex align-items-center text-uppercase font-weight-normal">
                                            Login <i class="material-icons-two-tone f-18 text-success ms-2">done_all</i>
                                        </h5>
                                        <p class="mt-0 text-dark font-weight-bold">John Doe <span class="font-weight-normal">John_Doe@demodomain.com</span></p>
                                    </span>
                                </span>
                            </div>
                            <div>
                                <button class="btn btn-light-primary mt-2 mt-sm-0" data-bs-toggle="collapse" data-bs-target="#checkoutlogin">Change</button>
                            </div>
                        </div>
                        <div id="checkoutlogin" class="collapse" data-bs-parent="#checkoutaccordion">
                            <div class="card-body">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">User Name</label>
                                        <div class="col-lg-5 col-md-9 col-sm-12">
                                            <input type="text" class="form-control" placeholder="Enter User Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Password</label>
                                        <div class="col-lg-5 col-md-9 col-sm-12">
                                            <input type="text" class="form-control" placeholder="Enter Password">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <label class="col-lg-3 col-sm-12 text-lg-end"></label>
                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                            <button class="btn btn-light-primary" data-bs-toggle="collapse" data-bs-target="#checkoutaddress">Login</button>
                                            <div class="modal fade" id="ecommbillinfo" tabindex="-1" aria-labelledby="ecommbillinfoTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <div>
                                                                <h5 class="mb-2">Billing information</h5>
                                                                <p class="text-muted mb-0 d-none d-sm-block">Fill the form below in order to send you the order's invoice.</p>
                                                            </div>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="first-name">First Name</label>
                                                                            <input class="form-control" type="text" placeholder="Enter your first name" id="first-name" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="last-name">Last Name</label>
                                                                            <input class="form-control" type="text" placeholder="Enter your last name" id="last-name" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="Email"><span class="text-danger">*</span> Email Address</label>
                                                                            <input class="form-control" type="email" placeholder="Enter your email" id="Email" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="Phone"><span class="text-danger">*</span> Phone</label>
                                                                            <input class="form-control" type="text" placeholder="(+99) 9999 999 999" id="Phone" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="billing-address">Address</label>
                                                                            <input class="form-control" type="text" placeholder="Enter full address" id="billing-address">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="billing-town-city">Town / City</label>
                                                                            <input class="form-control" type="text" placeholder="Enter your city name" id="billing-town-city" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="billing-state">State</label>
                                                                            <input class="form-control" type="text" placeholder="Enter your state" id="billing-state" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="billing-zip-postal">Zip / Postal Code</label>
                                                                            <input class="form-control" type="text" placeholder="Enter your zip code" id="billing-zip-postal" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Country</label>
                                                                            <select class="form-control">
                                                                                <option value="0">Select Country</option>
                                                                                <option value="AF">Afghanistan</option>
                                                                                <option value="AL">Albania</option>
                                                                                <option value="DZ">Algeria</option>
                                                                                <option value="AS">American Samoa</option>
                                                                                <option value="AD">Andorra</option>
                                                                                <option value="AO">Angola</option>
                                                                                <option value="AI">Anguilla</option>
                                                                                <option value="AQ">Antarctica</option>
                                                                                <option value="AR">Argentina</option>
                                                                                <option value="AM">Armenia</option>
                                                                                <option value="AW">Aruba</option>
                                                                                <option value="AU">Australia</option>
                                                                                <option value="AT">Austria</option>
                                                                                <option value="AZ">Azerbaijan</option>
                                                                                <option value="BS">Bahamas</option>
                                                                                <option value="BH">Bahrain</option>
                                                                                <option value="BD">Bangladesh</option>
                                                                                <option value="BB">Barbados</option>
                                                                                <option value="BY">Belarus</option>
                                                                                <option value="BE">Belgium</option>
                                                                                <option value="BZ">Belize</option>
                                                                                <option value="BJ">Benin</option>
                                                                                <option value="BM">Bermuda</option>
                                                                                <option value="BT">Bhutan</option>
                                                                                <option value="BO">Bolivia</option>
                                                                                <option value="BW">Botswana</option>
                                                                                <option value="BV">Bouvet Island</option>
                                                                                <option value="BR">Brazil</option>
                                                                                <option value="BN">Brunei Darussalam</option>
                                                                                <option value="BG">Bulgaria</option>
                                                                                <option value="BF">Burkina Faso</option>
                                                                                <option value="BI">Burundi</option>
                                                                                <option value="KH">Cambodia</option>
                                                                                <option value="CM">Cameroon</option>
                                                                                <option value="CA">Canada</option>
                                                                                <option value="CV">Cape Verde</option>
                                                                                <option value="KY">Cayman Islands</option>
                                                                                <option value="CF">Central African Republic</option>
                                                                                <option value="TD">Chad</option>
                                                                                <option value="CL">Chile</option>
                                                                                <option value="CN">China</option>
                                                                                <option value="CX">Christmas Island</option>
                                                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                                                <option value="CO">Colombia</option>
                                                                                <option value="KM">Comoros</option>
                                                                                <option value="CG">Congo</option>
                                                                                <option value="CK">Cook Islands</option>
                                                                                <option value="CR">Costa Rica</option>
                                                                                <option value="CI">Cote d'Ivoire</option>
                                                                                <option value="HR">Croatia (Hrvatska)</option>
                                                                                <option value="CU">Cuba</option>
                                                                                <option value="CY">Cyprus</option>
                                                                                <option value="CZ">Czech Republic</option>
                                                                                <option value="DK">Denmark</option>
                                                                                <option value="DJ">Djibouti</option>
                                                                                <option value="DM">Dominica</option>
                                                                                <option value="DO">Dominican Republic</option>
                                                                                <option value="EC">Ecuador</option>
                                                                                <option value="EG">Egypt</option>
                                                                                <option value="SV">El Salvador</option>
                                                                                <option value="GQ">Equatorial Guinea</option>
                                                                                <option value="ER">Eritrea</option>
                                                                                <option value="EE">Estonia</option>
                                                                                <option value="ET">Ethiopia</option>
                                                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                                                <option value="FO">Faroe Islands</option>
                                                                                <option value="FJ">Fiji</option>
                                                                                <option value="FI">Finland</option>
                                                                                <option value="FR">France</option>
                                                                                <option value="GF">French Guiana</option>
                                                                                <option value="PF">French Polynesia</option>
                                                                                <option value="GA">Gabon</option>
                                                                                <option value="GM">Gambia</option>
                                                                                <option value="GE">Georgia</option>
                                                                                <option value="DE">Germany</option>
                                                                                <option value="GH">Ghana</option>
                                                                                <option value="GI">Gibraltar</option>
                                                                                <option value="GR">Greece</option>
                                                                                <option value="GL">Greenland</option>
                                                                                <option value="GD">Grenada</option>
                                                                                <option value="GP">Guadeloupe</option>
                                                                                <option value="GU">Guam</option>
                                                                                <option value="GT">Guatemala</option>
                                                                                <option value="GN">Guinea</option>
                                                                                <option value="GW">Guinea-Bissau</option>
                                                                                <option value="GY">Guyana</option>
                                                                                <option value="HT">Haiti</option>
                                                                                <option value="HN">Honduras</option>
                                                                                <option value="HK">Hong Kong</option>
                                                                                <option value="HU">Hungary</option>
                                                                                <option value="IS">Iceland</option>
                                                                                <option value="IN">India</option>
                                                                                <option value="ID">Indonesia</option>
                                                                                <option value="IQ">Iraq</option>
                                                                                <option value="IE">Ireland</option>
                                                                                <option value="IL">Israel</option>
                                                                                <option value="IT">Italy</option>
                                                                                <option value="JM">Jamaica</option>
                                                                                <option value="JP">Japan</option>
                                                                                <option value="JO">Jordan</option>
                                                                                <option value="KZ">Kazakhstan</option>
                                                                                <option value="KE">Kenya</option>
                                                                                <option value="KI">Kiribati</option>
                                                                                <option value="KR">Korea, Republic of</option>
                                                                                <option value="KW">Kuwait</option>
                                                                                <option value="KG">Kyrgyzstan</option>
                                                                                <option value="LV">Latvia</option>
                                                                                <option value="LB">Lebanon</option>
                                                                                <option value="LS">Lesotho</option>
                                                                                <option value="LR">Liberia</option>
                                                                                <option value="LY">Libyan Arab Jamahiriya</option>
                                                                                <option value="LI">Liechtenstein</option>
                                                                                <option value="LT">Lithuania</option>
                                                                                <option value="LU">Luxembourg</option>
                                                                                <option value="MO">Macau</option>
                                                                                <option value="MG">Madagascar</option>
                                                                                <option value="MW">Malawi</option>
                                                                                <option value="MY">Malaysia</option>
                                                                                <option value="MV">Maldives</option>
                                                                                <option value="ML">Mali</option>
                                                                                <option value="MT">Malta</option>
                                                                                <option value="MH">Marshall Islands</option>
                                                                                <option value="MQ">Martinique</option>
                                                                                <option value="MR">Mauritania</option>
                                                                                <option value="MU">Mauritius</option>
                                                                                <option value="YT">Mayotte</option>
                                                                                <option value="MX">Mexico</option>
                                                                                <option value="MD">Moldova, Republic of</option>
                                                                                <option value="MC">Monaco</option>
                                                                                <option value="MN">Mongolia</option>
                                                                                <option value="MS">Montserrat</option>
                                                                                <option value="MA">Morocco</option>
                                                                                <option value="MZ">Mozambique</option>
                                                                                <option value="MM">Myanmar</option>
                                                                                <option value="NA">Namibia</option>
                                                                                <option value="NR">Nauru</option>
                                                                                <option value="NP">Nepal</option>
                                                                                <option value="NL">Netherlands</option>
                                                                                <option value="AN">Netherlands Antilles</option>
                                                                                <option value="NC">New Caledonia</option>
                                                                                <option value="NZ">New Zealand</option>
                                                                                <option value="NI">Nicaragua</option>
                                                                                <option value="NE">Niger</option>
                                                                                <option value="NG">Nigeria</option>
                                                                                <option value="NU">Niue</option>
                                                                                <option value="NF">Norfolk Island</option>
                                                                                <option value="MP">Northern Mariana Islands</option>
                                                                                <option value="NO">Norway</option>
                                                                                <option value="OM">Oman</option>
                                                                                <option value="PW">Palau</option>
                                                                                <option value="PA">Panama</option>
                                                                                <option value="PG">Papua New Guinea</option>
                                                                                <option value="PY">Paraguay</option>
                                                                                <option value="PE">Peru</option>
                                                                                <option value="PH">Philippines</option>
                                                                                <option value="PN">Pitcairn</option>
                                                                                <option value="PL">Poland</option>
                                                                                <option value="PT">Portugal</option>
                                                                                <option value="PR">Puerto Rico</option>
                                                                                <option value="QA">Qatar</option>
                                                                                <option value="RE">Reunion</option>
                                                                                <option value="RO">Romania</option>
                                                                                <option value="RU">Russian Federation</option>
                                                                                <option value="RW">Rwanda</option>
                                                                                <option value="KN">Saint Kitts and Nevis</option>
                                                                                <option value="LC">Saint LUCIA</option>
                                                                                <option value="WS">Samoa</option>
                                                                                <option value="SM">San Marino</option>
                                                                                <option value="ST">Sao Tome and Principe</option>
                                                                                <option value="SA">Saudi Arabia</option>
                                                                                <option value="SN">Senegal</option>
                                                                                <option value="SC">Seychelles</option>
                                                                                <option value="SL">Sierra Leone</option>
                                                                                <option value="SG">Singapore</option>
                                                                                <option value="SK">Slovakia (Slovak Republic)</option>
                                                                                <option value="SI">Slovenia</option>
                                                                                <option value="SB">Solomon Islands</option>
                                                                                <option value="SO">Somalia</option>
                                                                                <option value="ZA">South Africa</option>
                                                                                <option value="ES">Spain</option>
                                                                                <option value="LK">Sri Lanka</option>
                                                                                <option value="SH">St. Helena</option>
                                                                                <option value="PM">St. Pierre and Miquelon</option>
                                                                                <option value="SD">Sudan</option>
                                                                                <option value="SR">Suriname</option>
                                                                                <option value="SZ">Swaziland</option>
                                                                                <option value="SE">Sweden</option>
                                                                                <option value="CH">Switzerland</option>
                                                                                <option value="SY">Syrian Arab Republic</option>
                                                                                <option value="TW">Taiwan, Province of China</option>
                                                                                <option value="TJ">Tajikistan</option>
                                                                                <option value="TZ">Tanzania, United Republic of</option>
                                                                                <option value="TH">Thailand</option>
                                                                                <option value="TG">Togo</option>
                                                                                <option value="TK">Tokelau</option>
                                                                                <option value="TO">Tonga</option>
                                                                                <option value="TT">Trinidad and Tobago</option>
                                                                                <option value="TN">Tunisia</option>
                                                                                <option value="TR">Turkey</option>
                                                                                <option value="TM">Turkmenistan</option>
                                                                                <option value="TC">Turks and Caicos Islands</option>
                                                                                <option value="TV">Tuvalu</option>
                                                                                <option value="UG">Uganda</option>
                                                                                <option value="UA">Ukraine</option>
                                                                                <option value="AE">United Arab Emirates</option>
                                                                                <option value="GB">United Kingdom</option>
                                                                                <option value="US">United States</option>
                                                                                <option value="UY">Uruguay</option>
                                                                                <option value="UZ">Uzbekistan</option>
                                                                                <option value="VU">Vanuatu</option>
                                                                                <option value="VE">Venezuela</option>
                                                                                <option value="VN">Viet Nam</option>
                                                                                <option value="VG">Virgin Islands (British)</option>
                                                                                <option value="VI">Virgin Islands (U.S.)</option>
                                                                                <option value="WF">Wallis and Futuna Islands</option>
                                                                                <option value="EH">Western Sahara</option>
                                                                                <option value="YE">Yemen</option>
                                                                                <option value="ZM">Zambia</option>
                                                                                <option value="ZW">Zimbabwe</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                                                <label class="form-check-label" for="flexCheckChecked">
                                                                                    Delivered to different address ?
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group mt-3">
                                                                            <label class="form-label" for="demo-textarea">Quick Order Notes:</label>
                                                                            <textarea class="form-control" id="demo-textarea" rows="3" placeholder="Write some note.."></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mt-3 mb-0">you don't have account <a class="link-primary f-w-600" href="#" data-bs-toggle="modal" data-bs-target="#ecommbillinfo">click here</a> for get privilege</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header position-relative">
                            <a href="#" class="stretched-link" data-bs-toggle="collapse" data-bs-target="#checkoutaddress">
                                <span class="row">
                                    <span class="col-auto pr-0">
                                        <span class="rounded wid-20 hei-20 d-flex align-items-center justify-content-center f-14 bg-light-primary f-w-600">2</span>
                                    </span>
                                    <span class="col">
                                        <h5 class="mt-0 text-dark font-weight-bold">Delivery address</h5>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div id="checkoutaddress" class="collapse show" data-bs-parent="#checkoutaccordion">
                            <div class="card-body border-bottom py-3">
                                <div class="form-check">
                                    <input type="radio" name="radio1" class="form-check-input input-primary" id="customCheckdef1" checked>
                                    <label class="form-check-label d-block" for="customCheckdef1">
                                        <span>
                                            <span class="h5 d-block"><strong class="float-end"><a href="#!" class="f-14" data-bs-toggle="modal" data-bs-target="#ecommnewaddress"><i data-feather="edit" class="wid-15 hei-15"></i> Edit</a></strong><span
                                                    class="h6 mb-0">Josephin Villa</span> <span class="badge bg-light-secondary mx-2">Home</span> <span class="f-14 mb-0">(+11) 9876-123-123</span></span>
                                            <span class="f-12 text-muted">
                                                <span class="mb-0 m-t-10">1065 Mandan Road, Columbia MO, Missouri. (123)-65202</span><br>
                                                <span class="h-nonchecked">
                                                    <span class="mb-0"><a class="text-secondary" href="mailto:demo@sample.com" target="_top">demo@sample.com</a></span><br>
                                                    <button class="btn btn-warning mt-2" data-bs-toggle="collapse" data-bs-target="#checkoutsummary">Deliver here</button>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="card-body border-bottom py-3">
                                <div class="form-check">
                                    <input type="radio" name="radio1" class="form-check-input input-primary" id="customCheckdef2">
                                    <label class="form-check-label d-block" for="customCheckdef2">
                                        <span>
                                            <span class="h5 d-block"><strong class="float-end"><a href="#!" class="f-14" data-bs-toggle="modal" data-bs-target="#ecommnewaddress"><i data-feather="edit" class="wid-15 hei-15"></i> Edit</a></strong><span
                                                    class="h6 mb-0">Ashoka T.</span> <span class="badge bg-light-secondary mx-2">Office</span> <span class="f-14 mb-0">(+11) 4312-345-567</span></span>
                                            <span class="f-12 text-muted">
                                                <span class="mb-0 m-t-10">1065 Mandan Road, Columbia MO, Missouri. (987)-431353</span><br>
                                                <span class="h-nonchecked">
                                                    <span class="mb-0"><a class="text-secondary" href="mailto:demo@sample.com" target="_top">demo@sample.com</a></span><br>
                                                    <button class="btn btn-warning mt-2" data-bs-toggle="collapse" data-bs-target="#checkoutsummary">Deliver here</button>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="card-body border-bottom py-3">
                                <div class="form-check">
                                    <input type="radio" name="radio1" class="form-check-input input-primary" id="customCheckdef3">
                                    <label class="form-check-label d-block" for="customCheckdef3">
                                        <span>
                                            <span class="h5 d-block"><strong class="float-end"><a href="#!" class="f-14" data-bs-toggle="modal" data-bs-target="#ecommnewaddress"><i data-feather="edit" class="wid-15 hei-15"></i> Edit</a></strong><span
                                                    class="h6 mb-0">Josephin Doe</span> <span class="badge bg-light-secondary mx-2">home</span> <span class="f-14 mb-0">(+11) 2432-123-425</span></span>
                                            <span class="f-12 text-muted">
                                                <span class="mb-0 m-t-10">1065 Mandan Road, Columbia MO, Missouri. (987)-431353</span><br>
                                                <span class="h-nonchecked">
                                                    <span class="mb-0"><a class="text-secondary" href="mailto:demo@sample.com" target="_top">demo@sample.com</a></span><br>
                                                    <button class="btn btn-warning mt-2" data-bs-toggle="collapse" data-bs-target="#checkoutsummary">Deliver here</button>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="d-grid">
                                    <button class="btn btn-block btn-light-secondary " data-bs-toggle="modal" data-bs-target="#ecommnewaddress"> <i data-feather="plus"></i> Add New Address</button>
                                </div>
                                <div class="modal fade" id="ecommnewaddress" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div>
                                                    <h5 class="mb-2">Add New Address</h5>
                                                    <p class="text-muted mb-0 d-none d-sm-block">Fill the form below in for your new address in wich we send you the order's invoice.</p>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="new-first-name">First Name</label>
                                                                <input class="form-control" type="text" placeholder="Enter your first name" id="new-first-name" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="new-last-name">Last Name</label>
                                                                <input class="form-control" type="text" placeholder="Enter your last name" id="new-last-name" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="new-email-address"><span class="text-danger">*</span> Email Address</label>
                                                                <input class="form-control" type="email" placeholder="Enter your email" id="new-email-address" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="new-phone"><span class="text-danger">*</span> Phone</label>
                                                                <input class="form-control" type="text" placeholder="(+91) 9999 999 999" id="new-phone" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="new-address">Address</label>
                                                                <input class="form-control" type="text" placeholder="Enter full address" id="new-address">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="new-town-city">Town / City</label>
                                                                <input class="form-control" type="text" placeholder="Enter your city name" id="new-town-city" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="new-state">State</label>
                                                                <input class="form-control" type="text" placeholder="Enter your state" id="new-state" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="new-zip-postal">Zip / Postal Code</label>
                                                                <input class="form-control" type="text" placeholder="Enter your zip code" id="new-zip-postal" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Country</label>
                                                                <select class="form-control">
                                                                    <option value="0">Select Country</option>
                                                                    <option value="AF">Afghanistan</option>
                                                                    <option value="AL">Albania</option>
                                                                    <option value="DZ">Algeria</option>
                                                                    <option value="AS">American Samoa</option>
                                                                    <option value="AD">Andorra</option>
                                                                    <option value="AO">Angola</option>
                                                                    <option value="AI">Anguilla</option>
                                                                    <option value="AQ">Antarctica</option>
                                                                    <option value="AR">Argentina</option>
                                                                    <option value="AM">Armenia</option>
                                                                    <option value="AW">Aruba</option>
                                                                    <option value="AU">Australia</option>
                                                                    <option value="AT">Austria</option>
                                                                    <option value="AZ">Azerbaijan</option>
                                                                    <option value="BS">Bahamas</option>
                                                                    <option value="BH">Bahrain</option>
                                                                    <option value="BD">Bangladesh</option>
                                                                    <option value="BB">Barbados</option>
                                                                    <option value="BY">Belarus</option>
                                                                    <option value="BE">Belgium</option>
                                                                    <option value="BZ">Belize</option>
                                                                    <option value="BJ">Benin</option>
                                                                    <option value="BM">Bermuda</option>
                                                                    <option value="BT">Bhutan</option>
                                                                    <option value="BO">Bolivia</option>
                                                                    <option value="BW">Botswana</option>
                                                                    <option value="BV">Bouvet Island</option>
                                                                    <option value="BR">Brazil</option>
                                                                    <option value="BN">Brunei Darussalam</option>
                                                                    <option value="BG">Bulgaria</option>
                                                                    <option value="BF">Burkina Faso</option>
                                                                    <option value="BI">Burundi</option>
                                                                    <option value="KH">Cambodia</option>
                                                                    <option value="CM">Cameroon</option>
                                                                    <option value="CA">Canada</option>
                                                                    <option value="CV">Cape Verde</option>
                                                                    <option value="KY">Cayman Islands</option>
                                                                    <option value="CF">Central African Republic</option>
                                                                    <option value="TD">Chad</option>
                                                                    <option value="CL">Chile</option>
                                                                    <option value="CN">China</option>
                                                                    <option value="CX">Christmas Island</option>
                                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                                    <option value="CO">Colombia</option>
                                                                    <option value="KM">Comoros</option>
                                                                    <option value="CG">Congo</option>
                                                                    <option value="CK">Cook Islands</option>
                                                                    <option value="CR">Costa Rica</option>
                                                                    <option value="CI">Cote d'Ivoire</option>
                                                                    <option value="HR">Croatia (Hrvatska)</option>
                                                                    <option value="CU">Cuba</option>
                                                                    <option value="CY">Cyprus</option>
                                                                    <option value="CZ">Czech Republic</option>
                                                                    <option value="DK">Denmark</option>
                                                                    <option value="DJ">Djibouti</option>
                                                                    <option value="DM">Dominica</option>
                                                                    <option value="DO">Dominican Republic</option>
                                                                    <option value="EC">Ecuador</option>
                                                                    <option value="EG">Egypt</option>
                                                                    <option value="SV">El Salvador</option>
                                                                    <option value="GQ">Equatorial Guinea</option>
                                                                    <option value="ER">Eritrea</option>
                                                                    <option value="EE">Estonia</option>
                                                                    <option value="ET">Ethiopia</option>
                                                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                                                    <option value="FO">Faroe Islands</option>
                                                                    <option value="FJ">Fiji</option>
                                                                    <option value="FI">Finland</option>
                                                                    <option value="FR">France</option>
                                                                    <option value="GF">French Guiana</option>
                                                                    <option value="PF">French Polynesia</option>
                                                                    <option value="GA">Gabon</option>
                                                                    <option value="GM">Gambia</option>
                                                                    <option value="GE">Georgia</option>
                                                                    <option value="DE">Germany</option>
                                                                    <option value="GH">Ghana</option>
                                                                    <option value="GI">Gibraltar</option>
                                                                    <option value="GR">Greece</option>
                                                                    <option value="GL">Greenland</option>
                                                                    <option value="GD">Grenada</option>
                                                                    <option value="GP">Guadeloupe</option>
                                                                    <option value="GU">Guam</option>
                                                                    <option value="GT">Guatemala</option>
                                                                    <option value="GN">Guinea</option>
                                                                    <option value="GW">Guinea-Bissau</option>
                                                                    <option value="GY">Guyana</option>
                                                                    <option value="HT">Haiti</option>
                                                                    <option value="HN">Honduras</option>
                                                                    <option value="HK">Hong Kong</option>
                                                                    <option value="HU">Hungary</option>
                                                                    <option value="IS">Iceland</option>
                                                                    <option value="IN">India</option>
                                                                    <option value="ID">Indonesia</option>
                                                                    <option value="IQ">Iraq</option>
                                                                    <option value="IE">Ireland</option>
                                                                    <option value="IL">Israel</option>
                                                                    <option value="IT">Italy</option>
                                                                    <option value="JM">Jamaica</option>
                                                                    <option value="JP">Japan</option>
                                                                    <option value="JO">Jordan</option>
                                                                    <option value="KZ">Kazakhstan</option>
                                                                    <option value="KE">Kenya</option>
                                                                    <option value="KI">Kiribati</option>
                                                                    <option value="KR">Korea, Republic of</option>
                                                                    <option value="KW">Kuwait</option>
                                                                    <option value="KG">Kyrgyzstan</option>
                                                                    <option value="LV">Latvia</option>
                                                                    <option value="LB">Lebanon</option>
                                                                    <option value="LS">Lesotho</option>
                                                                    <option value="LR">Liberia</option>
                                                                    <option value="LY">Libyan Arab Jamahiriya</option>
                                                                    <option value="LI">Liechtenstein</option>
                                                                    <option value="LT">Lithuania</option>
                                                                    <option value="LU">Luxembourg</option>
                                                                    <option value="MO">Macau</option>
                                                                    <option value="MG">Madagascar</option>
                                                                    <option value="MW">Malawi</option>
                                                                    <option value="MY">Malaysia</option>
                                                                    <option value="MV">Maldives</option>
                                                                    <option value="ML">Mali</option>
                                                                    <option value="MT">Malta</option>
                                                                    <option value="MH">Marshall Islands</option>
                                                                    <option value="MQ">Martinique</option>
                                                                    <option value="MR">Mauritania</option>
                                                                    <option value="MU">Mauritius</option>
                                                                    <option value="YT">Mayotte</option>
                                                                    <option value="MX">Mexico</option>
                                                                    <option value="MD">Moldova, Republic of</option>
                                                                    <option value="MC">Monaco</option>
                                                                    <option value="MN">Mongolia</option>
                                                                    <option value="MS">Montserrat</option>
                                                                    <option value="MA">Morocco</option>
                                                                    <option value="MZ">Mozambique</option>
                                                                    <option value="MM">Myanmar</option>
                                                                    <option value="NA">Namibia</option>
                                                                    <option value="NR">Nauru</option>
                                                                    <option value="NP">Nepal</option>
                                                                    <option value="NL">Netherlands</option>
                                                                    <option value="AN">Netherlands Antilles</option>
                                                                    <option value="NC">New Caledonia</option>
                                                                    <option value="NZ">New Zealand</option>
                                                                    <option value="NI">Nicaragua</option>
                                                                    <option value="NE">Niger</option>
                                                                    <option value="NG">Nigeria</option>
                                                                    <option value="NU">Niue</option>
                                                                    <option value="NF">Norfolk Island</option>
                                                                    <option value="MP">Northern Mariana Islands</option>
                                                                    <option value="NO">Norway</option>
                                                                    <option value="OM">Oman</option>
                                                                    <option value="PW">Palau</option>
                                                                    <option value="PA">Panama</option>
                                                                    <option value="PG">Papua New Guinea</option>
                                                                    <option value="PY">Paraguay</option>
                                                                    <option value="PE">Peru</option>
                                                                    <option value="PH">Philippines</option>
                                                                    <option value="PN">Pitcairn</option>
                                                                    <option value="PL">Poland</option>
                                                                    <option value="PT">Portugal</option>
                                                                    <option value="PR">Puerto Rico</option>
                                                                    <option value="QA">Qatar</option>
                                                                    <option value="RE">Reunion</option>
                                                                    <option value="RO">Romania</option>
                                                                    <option value="RU">Russian Federation</option>
                                                                    <option value="RW">Rwanda</option>
                                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                                    <option value="LC">Saint LUCIA</option>
                                                                    <option value="WS">Samoa</option>
                                                                    <option value="SM">San Marino</option>
                                                                    <option value="ST">Sao Tome and Principe</option>
                                                                    <option value="SA">Saudi Arabia</option>
                                                                    <option value="SN">Senegal</option>
                                                                    <option value="SC">Seychelles</option>
                                                                    <option value="SL">Sierra Leone</option>
                                                                    <option value="SG">Singapore</option>
                                                                    <option value="SK">Slovakia (Slovak Republic)</option>
                                                                    <option value="SI">Slovenia</option>
                                                                    <option value="SB">Solomon Islands</option>
                                                                    <option value="SO">Somalia</option>
                                                                    <option value="ZA">South Africa</option>
                                                                    <option value="ES">Spain</option>
                                                                    <option value="LK">Sri Lanka</option>
                                                                    <option value="SH">St. Helena</option>
                                                                    <option value="PM">St. Pierre and Miquelon</option>
                                                                    <option value="SD">Sudan</option>
                                                                    <option value="SR">Suriname</option>
                                                                    <option value="SZ">Swaziland</option>
                                                                    <option value="SE">Sweden</option>
                                                                    <option value="CH">Switzerland</option>
                                                                    <option value="SY">Syrian Arab Republic</option>
                                                                    <option value="TW">Taiwan, Province of China</option>
                                                                    <option value="TJ">Tajikistan</option>
                                                                    <option value="TZ">Tanzania, United Republic of</option>
                                                                    <option value="TH">Thailand</option>
                                                                    <option value="TG">Togo</option>
                                                                    <option value="TK">Tokelau</option>
                                                                    <option value="TO">Tonga</option>
                                                                    <option value="TT">Trinidad and Tobago</option>
                                                                    <option value="TN">Tunisia</option>
                                                                    <option value="TR">Turkey</option>
                                                                    <option value="TM">Turkmenistan</option>
                                                                    <option value="TC">Turks and Caicos Islands</option>
                                                                    <option value="TV">Tuvalu</option>
                                                                    <option value="UG">Uganda</option>
                                                                    <option value="UA">Ukraine</option>
                                                                    <option value="AE">United Arab Emirates</option>
                                                                    <option value="GB">United Kingdom</option>
                                                                    <option value="US">United States</option>
                                                                    <option value="UY">Uruguay</option>
                                                                    <option value="UZ">Uzbekistan</option>
                                                                    <option value="VU">Vanuatu</option>
                                                                    <option value="VE">Venezuela</option>
                                                                    <option value="VN">Viet Nam</option>
                                                                    <option value="VG">Virgin Islands (British)</option>
                                                                    <option value="VI">Virgin Islands (U.S.)</option>
                                                                    <option value="WF">Wallis and Futuna Islands</option>
                                                                    <option value="EH">Western Sahara</option>
                                                                    <option value="YE">Yemen</option>
                                                                    <option value="ZM">Zambia</option>
                                                                    <option value="ZW">Zimbabwe</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <h5 class="my-3">Shipping Method</h5>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" id="shippingMethodRadio1" name="shippdetails" value="option1">
                                                                <label class="form-check-label" for="shippingMethodRadio1" data-bs-toggle="tooltip" title="Estimated 5-7 days shipping (Duties and tax may be due upon delivery)">Standard Delivery -
                                                                    FREE</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" id="shippingMethodRadio2" name="shippdetails" value="option2">
                                                                <label class="form-check-label" for="shippingMethodRadio2" data-bs-toggle="tooltip" title="Estimated 1-2 days shipping (Duties and tax may be due upon delivery)">Fast Delivery - $29</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header position-relative">
                            <a href="#" class="stretched-link" data-bs-toggle="collapse" data-bs-target="#checkoutsummary">
                                <span class="row">
                                    <span class="col-auto pr-0">
                                        <span class="rounded wid-20 hei-20 d-flex align-items-center justify-content-center f-14 bg-light-primary f-w-600">3</span>
                                    </span>
                                    <span class="col">
                                        <h5 class="mt-0 text-dark font-weight-bold">Order Summary</h5>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div id="checkoutsummary" class="collapse" data-bs-parent="#checkoutaccordion">
                            <div class="card-body border-bottom py-3">
                                <div class="row">
                                    <div class="col-sm-7 mb-3 mb-sm-0">
                                        <div class="row">
                                            <div class="col-auto pr-0 text-center">
                                                <img src="assets/images/product/e-comm-1.jpg" alt="contact-img" title="contact-img" class="rounded mb-2" height="60" /><br>
                                                <div class="btn-group btn-group-sm mb-2" role="group" aria-label="button groups sm">
                                                    <button type="button" id="decrease" onclick="decreaseValue('number')" class="btn btn-secondary">-</button>
                                                    <input class="wid-35 text-center" type="text" type="number" id="number" value="0" />
                                                    <button type="button" id="increase" onclick="increaseValue('number')" class="btn btn-secondary">+</button>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h6 class="d-inline-block m-0 text-truncate">Fit-Man Slip Sneakers</h6>
                                                <br>
                                                <p class="m-0 f-12 text-muted"><span class="f-w-500">Size: </span> Free Size</p>
                                                <p class="mb-1 f-12 text-muted"><span class="f-w-500">Seller: </span> PIRASO</p>
                                                <h4 class="d-inline-block my-3"><i class="material-icons-two-tone f-22 text-primary">account_balance_wallet</i> $139.58 <del class="text-danger font-weight-normal h5"> <small>$322.53</small></del></h4><br>
                                                <a href="#!" class="text-uppercase link-dark f-w-500 mb-1">Save for later</a>
                                                <a href="#!" class="text-uppercase link-dark f-w-500 m-l-10 mb-1">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class=" d-inline-block">
                                            <div class="h6 my-0">Delivery by Sat Aug 17 | <span class="">$50</span></div>
                                            <small class="text-muted">10 Days Replacement Policy</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-bottom py-3">
                                <div class="row">
                                    <div class="col-sm-7 mb-3 mb-sm-0">
                                        <div class="row">
                                            <div class="col-auto pr-0 text-center">
                                                <img src="assets/images/product/e-comm-2.jpg" alt="contact-img" title="contact-img" class="rounded mb-2" height="60" /><br>
                                                <div class="btn-group btn-group-sm mb-2" role="group" aria-label="button groups sm">
                                                    <button type="button" id="decrease" onclick="decreaseValue('number1')" class="btn btn-secondary">-</button>
                                                    <input class="wid-35 text-center" type="text" type="number" id="number1" value="0" />
                                                    <button type="button" id="increase" onclick="increaseValue('number1')" class="btn btn-secondary">+</button>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h6 class="d-inline-block m-0 text-truncate">Fit-Man Slip Sneakers</h6>
                                                <br>
                                                <p class="m-0 f-12 text-muted"><span class="f-w-500">Size: </span> Free Size</p>
                                                <p class="mb-1 f-12 text-muted"><span class="f-w-500">Seller: </span> PIRASO</p>
                                                <h4 class="d-inline-block my-3"><i class="material-icons-two-tone f-22 text-primary">account_balance_wallet</i> $139.58 <del class="text-danger font-weight-normal h5"> <small>$132.53</small></del></h4><br>
                                                <a href="#!" class="text-uppercase link-dark f-w-500 mb-1">Save for later</a>
                                                <a href="#!" class="text-uppercase link-dark f-w-500 m-l-10 mb-1">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class=" d-inline-block">
                                            <div class="h6 my-0">Delivery by Sat Aug 17 | <span class="text-success">FREE</span></div>
                                            <small class="text-muted">10 Days Replacement Policy</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <span class="my-2">Order confirmation email will be sent to <span class="f-w-500">John_Doe@demodomain.com</span></span>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-warning px-sm-4 mt-2 mt-sm-0" data-bs-toggle="collapse" data-bs-target="#checkoutpayment">CONTINUE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header position-relative">
                            <a href="#" class="stretched-link" data-bs-toggle="collapse" data-bs-target="#checkoutpayment">
                                <span class="row">
                                    <span class="col-auto pr-0">
                                        <span class="rounded wid-20 hei-20 d-flex align-items-center justify-content-center f-14 bg-light-primary f-w-600">4</span>
                                    </span>
                                    <span class="col">
                                        <h5 class="m-0  text-dark font-weight-bold">Payment Selection</h5>
                                        <p class="text-muted mt-1 mb-0">Fill up given form for your payment details.</p>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div id="checkoutpayment" class="collapse" data-bs-parent="#checkoutaccordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card-body border-bottom py-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="billingOptions" id="BillingPaypal" value="option1" checked data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <label class="form-check-label" for="BillingPaypal">Pay with Paypal</label>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-bs-parent="#accordionExample">
                                        <div class="row pt-2">
                                            <div class="col-sm-8">
                                                <p class="mb-0 pl-4">You will be redirected to PayPal website to complete your purchase securely.</p>
                                            </div>
                                            <div class="col-sm-4 text-sm-end mt-3 mt-sm-0">
                                                <img src="assets/images/product/paypal.png" class="hei-25 mt-3" alt="payment-images">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body border-bottom py-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="billingOptions" id="BillingCard" value="option1" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <label class="form-check-label" for="BillingCard">Credit / Debit Card</label>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-bs-parent="#accordionExample">
                                        <div class="pl-4 mt-4">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <p class="mb-0 pt-2">Safe money transfer using your bank account. We support Mastercard, Visa, Discover and Stripe.</p>
                                                </div>
                                                <div class="col-sm-4 text-sm-end mt-3 mt-sm-0">
                                                    <img src="assets/images/product/card.png" class="hei-25 mt-3" alt="payment-images">
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="card-number">Card Number</label>
                                                        <input type="text" id="card-number" class="form-control bg-transparent" data-bs-toggle="input-mask" data-mask-format="0000 0000 0000 0000" placeholder="4242 4242 4242 4242">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="card-name-on">Name on card</label>
                                                        <input type="text" id="card-name-on" class="form-control bg-transparent" placeholder="Master Shreyu">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="card-expiry-date">Expiry date</label>
                                                        <input type="text" id="card-expiry-date" class="form-control bg-transparent" data-bs-toggle="input-mask" data-mask-format="00/00" placeholder="MM/YY">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="card-cvv">CVV code</label>
                                                        <input type="text" id="card-cvv" class="form-control bg-transparent" data-bs-toggle="input-mask" data-mask-format="000" placeholder="012">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body border-bottom py-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="billingOptions" id="BillingOptRadio3" value="option1" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <label class="form-check-label" for="BillingOptRadio3">Pay with CC Avenue</label>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-bs-parent="#accordionExample">
                                        <div class="pl-4 pt-2">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <p class="mb-0">You will be redirected to CC Avenue website to complete your purchase securely.</p>
                                                </div>
                                                <div class="col-sm-4 text-sm-end mt-3 mt-sm-0">
                                                    <img src="assets/images/product/cc.png" class="img-fluid" alt="payment-images">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body border-bottom py-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="billingOptions" id="BillingOptRadio4" value="option1" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        <label class="form-check-label" for="BillingOptRadio4">Cash on Delivery</label>
                                    </div>
                                    <div id="collapsefour" class="collapse" data-bs-parent="#accordionExample">
                                        <div class="pl-4 pt-2">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <p class="mb-0">Pay with cash when your order is delivered.</p>
                                                </div>
                                                <div class="col-sm-4 text-sm-end mt-3 mt-sm-0">
                                                    <img src="assets/images/product/cash.png" class="img-fluid" alt="payment-images">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body border-bottom py-3">
                                    <div class="row justify-content-between">
                                        <div class="col">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="billingOptions" id="rddis" value="option1" disabled>
                                                <label class="form-check-label" for="rddis">EMI ( Easy Installments )</label>
                                            </div>
                                        </div>
                                        <div class="col text-end">
                                            <a href="#!" class="text-muted">
                                                Not Applicable
                                                <i class="feather icon-help-circle" data-bs-toggle="tooltip" title="You are not allow to use this option"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body py-3">
                                    <div class="row">
                                        <div class="col-sm-6">
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="text-sm-end">
                                                <a href="#!" class="order-complete btn btn-success text-sm-end mt-md-0 mt-2">
                                                    Complete Order
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-uppercase">Price details</h5>
                    </div>
                    <div class="card-body border-bottom py-3">
                        <div class="mb-2">Price (3 item) <span class="float-end">$2,834</span></div>
                        <div class="">Delivery Charges <span class="float-end text-success">FREE</span></div>
                    </div>
                    <div class="card-body border-bottom py-3">
                        <div class="h6 m-0">Total Payable <span class="float-end">$2,834</span></div>
                    </div>
                    <div class="card-body py-3">
                        <div class="text-success h6 m-0">Your Total Saving on this order $3,165</div>
                    </div>
                </div>
                <div class="media">
                    <i class="fas fa-shield-alt h3 m-r-10 text-muted f-w-900"></i>
                    <div class="media-body">
                        <h6 class="mt-0 text-muted"> Safe and Secure Payments.Easy returns.100% Authentic products.</h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<script src="assets/js/plugins/sweetalert2.all.min.js"></script>
<script>
    $('.order-complete').on('click', function() {
        Swal.fire({
            icon: "success",
            title: 'Order Placed Successfully',
        })
    });
    // quentity start
    function increaseValue(temp) {
        var value = parseInt(document.getElementById(temp).value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById(temp).value = value;
    }

    function decreaseValue(temp) {
        var value = parseInt(document.getElementById(temp).value, 10);
        value = isNaN(value) ? 0 : value;
        value < 1 ? value = 1 : '';
        value--;
        document.getElementById(temp).value = value;
    }
    // quentity end
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
