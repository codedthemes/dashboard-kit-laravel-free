<!DOCTYPE html>
<html lang="en">

<head>
    @@include('./layouts/head.html')
    @@include('./layouts/head-bottom-link.html')
</head>
@@include('layouts/layout-vertical.html')
<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Wizard 3</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item">Wizard 3</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Example</h5>
                    </div>
                    <div class="card-body">
                        <div id="example-basic">
                            <h3>Keyboard</h3>
                            <section>
                                <p>Try the keyboard navigation by clicking arrow left or right!</p>
                            </section>
                            <h3>Effects</h3>
                            <section>
                                <p>Wonderful transition effects.</p>
                            </section>
                            <h3>Pager</h3>
                            <section>
                                <p>The next and previous buttons help you to navigate through your content.</p>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Vertical Steps Example</h5>
                    </div>
                    <div class="card-body">
                        <div id="example-vertical">
                            <h3>Keyboard</h3>
                            <section>
                                <p>Try the keyboard navigation by clicking arrow left or right!</p>
                            </section>
                            <h3>Effects</h3>
                            <section>
                                <p>Wonderful transition effects.</p>
                            </section>
                            <h3>Pager</h3>
                            <section>
                                <p>The next and previous buttons help you to navigate through your content.</p>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Form Example</h5>
                    </div>
                    <div class="card-body">
                        <form id="example-form" action="#">
                            <div>
                                <h3>Account</h3>
                                <section>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label" for="userName">User name <span class="text-danger">*</span></label>
                                                <input id="userName" name="userName" type="text" class="required form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label" for="password">Password <span class="text-danger">*</span></label>
                                                <input id="password" name="password" type="text" class="required form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label" for="confirm">Confirm Password <span class="text-danger">*</span></label>
                                                <input id="confirm" name="confirm" type="text" class="required form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <p>(<span class="text-danger">*</span>) Mandatory</p>
                                </section>
                                <h3>Profile</h3>
                                <section>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label" for="name">First name <span class="text-danger">*</span></label>
                                                <input id="name" name="name" type="text" class="required form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="surname">Last name <span class="text-danger">*</span></label>
                                            <input id="surname" name="surname" type="text" class="required form-control">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="email">Email <span class="text-danger">*</span></label>
                                            <input id="email" name="email" type="text" class="required email form-control">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="address">Address</label>
                                            <input id="address" name="address" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <p>(<span class="text-danger">*</span>) Mandatory</p>
                                </section>
                                <h3>Hints</h3>
                                <section>
                                    <ul>
                                        <li>Foo</li>
                                        <li>Bar</li>
                                        <li>Foobar</li>
                                    </ul>
                                </section>
                                <h3>Finish</h3>
                                <section>
                                    <div class="form-check">
                                        <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required form-check-input">
                                        <label class="form-check-label" for="acceptTerms">I agree with the Terms and Conditions.</label>
                                    </div>
                                </section>
                            </div>
                        </form>
                    </div>
                </div>
                <h5>Design Form</h5>
                <div class="card">
                    <div class="card-body p-0">
                        <form id="design-1-form" action="#">
                            <h3 class="wiz-items">
                                <span class="num-icon">1</span><span>
                                    <b>Account</b>Lorem impsum
                                </span>
                            </h3>
                            <section>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Name: </label>
                                            <input type="text" class="form-control" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Email: </label>
                                            <input type="text" class="form-control" placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Password: </label>
                                            <input type="password" class="form-control" placeholder="Enter Password">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Conform Password: </label>
                                            <input type="password" class="form-control" placeholder="Enter Conform Password">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Contact Number: </label>
                                            <input type="text" class="form-control" placeholder="Enter Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Date of birth: </label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label d-block">Gender: </label>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="wiz1genrd1" name="customRadio" class="form-check-input">
                                                <label class="form-check-label" for="wiz1genrd1">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="wiz1genrd2" name="customRadio" class="form-check-input">
                                                <label class="form-check-label" for="wiz1genrd2">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <h3 class="wiz-items">
                                <span class="num-icon">2</span><span>
                                    <b>Profile</b>Lorem impsum
                                </span>
                            </h3>
                            <section>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Educational Qualification: </label>
                                            <input type="text" class="form-control" placeholder="Enter Educational Qualification">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Passing year: </label>
                                            <select class="form-control">
                                                <option></option>
                                                <option>2020</option>
                                                <option>2019</option>
                                                <option>2018</option>
                                                <option>2017</option>
                                                <option>2016</option>
                                                <option>2015</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Work Experience: </label>
                                            <input type="text" class="form-control" placeholder="Enter Work Experience">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Enter Last Working Place: </label>
                                            <input type="text" class="form-control" placeholder="Enter Institute / Compney Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Position: </label>
                                            <input type="text" class="form-control" placeholder="Enter Institute / Compney Name">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <h3 class="wiz-items">
                                <span class="num-icon">3</span><span>
                                    <b>Bank</b>Lorem impsum
                                </span>
                            </h3>
                            <section>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Account Number: </label>
                                            <input type="text" class="form-control" placeholder="Enter Account Number">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Account Type: </label>
                                            <input type="text" class="form-control" placeholder="Enter Account Type">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Nominee Name: </label>
                                            <input type="text" class="form-control" placeholder="Enter Nominee Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Branch Name: </label>
                                            <input type="text" class="form-control" placeholder="Enter Branch Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Branch IFSC Code: </label>
                                            <input type="text" class="form-control" placeholder="Enter Branch IFSC Code">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <h3 class="wiz-items">
                                <span class="num-icon">4</span><span>
                                    <b>Address</b>Lorem impsum
                                </span>
                            </h3>
                            <section>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">House Number: </label>
                                            <input type="text" class="form-control" placeholder="Enter House Number">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Area Name: </label>
                                            <input type="text" class="form-control" placeholder="Enter Number">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">State: </label>
                                            <select class="form-control">
                                                <option></option>
                                                <option>State 1</option>
                                                <option>State 2</option>
                                                <option>State 3</option>
                                                <option>State 4</option>
                                                <option>State 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">District: </label>
                                            <select class="form-control">
                                                <option></option>
                                                <option>District 1</option>
                                                <option>District 2</option>
                                                <option>District 3</option>
                                                <option>District 4</option>
                                                <option>District 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Sub Zone: </label>
                                            <select class="form-control">
                                                <option></option>
                                                <option>Sub Zone 1</option>
                                                <option>Sub Zone 2</option>
                                                <option>Sub Zone 3</option>
                                                <option>Sub Zone 4</option>
                                                <option>Sub Zone 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Pin Code: </label>
                                            <input type="text" class="form-control" placeholder="Enter Pin Code">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Address: </label>
                                            <textarea class="form-control" cols="2" placeholder="Enter Address"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
                <h5>Vertical Design Form</h5>
                <div class="card">
                    <div class="card-body p-0">
                        <form id="design-2-form" action="#">
                            <h3 class="wiz-items">
                                <span class="num-icon">1</span><span>
                                    <b>Account</b>Lorem impsum
                                </span>
                            </h3>
                            <section>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Name: </label>
                                            <input type="text" class="form-control" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Email: </label>
                                            <input type="text" class="form-control" placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Password: </label>
                                            <input type="password" class="form-control" placeholder="Enter Password">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Conform Password: </label>
                                            <input type="password" class="form-control" placeholder="Enter Conform Password">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Contact Number: </label>
                                            <input type="text" class="form-control" placeholder="Enter Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Date of birth: </label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label d-block">Gender: </label>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="wiz2genrd1" name="customRadio" class="form-check-input">
                                                <label class="form-check-label" for="wiz1genrd1">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="wiz2genrd2" name="customRadio" class="form-check-input">
                                                <label class="form-check-label" for="wiz1genrd2">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <h3 class="wiz-items">
                                <span class="num-icon">2</span><span>
                                    <b>Profile</b>Lorem impsum
                                </span>
                            </h3>
                            <section>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Educational Qualification: </label>
                                            <input type="text" class="form-control" placeholder="Enter Educational Qualification">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Passing year: </label>
                                            <select class="form-control">
                                                <option></option>
                                                <option>2020</option>
                                                <option>2019</option>
                                                <option>2018</option>
                                                <option>2017</option>
                                                <option>2016</option>
                                                <option>2015</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Work Experience: </label>
                                            <input type="text" class="form-control" placeholder="Enter Work Experience">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Enter Last Working Place: </label>
                                            <input type="text" class="form-control" placeholder="Enter Institute / Compney Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Position: </label>
                                            <input type="text" class="form-control" placeholder="Enter Institute / Compney Name">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <h3 class="wiz-items">
                                <span class="num-icon">3</span><span>
                                    <b>Bank</b>Lorem impsum
                                </span>
                            </h3>
                            <section>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Account Number: </label>
                                            <input type="text" class="form-control" placeholder="Enter Account Number">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Account Type: </label>
                                            <input type="text" class="form-control" placeholder="Enter Account Type">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Nominee Name: </label>
                                            <input type="text" class="form-control" placeholder="Enter Nominee Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Branch Name: </label>
                                            <input type="text" class="form-control" placeholder="Enter Branch Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Branch IFSC Code: </label>
                                            <input type="text" class="form-control" placeholder="Enter Branch IFSC Code">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <h3 class="wiz-items">
                                <span class="num-icon">4</span><span>
                                    <b>Address</b>Lorem impsum
                                </span>
                            </h3>
                            <section>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">House Number: </label>
                                            <input type="text" class="form-control" placeholder="Enter House Number">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Area Name: </label>
                                            <input type="text" class="form-control" placeholder="Enter Number">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">State: </label>
                                            <select class="form-control">
                                                <option></option>
                                                <option>State 1</option>
                                                <option>State 2</option>
                                                <option>State 3</option>
                                                <option>State 4</option>
                                                <option>State 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">District: </label>
                                            <select class="form-control">
                                                <option></option>
                                                <option>District 1</option>
                                                <option>District 2</option>
                                                <option>District 3</option>
                                                <option>District 4</option>
                                                <option>District 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Sub Zone: </label>
                                            <select class="form-control">
                                                <option></option>
                                                <option>Sub Zone 1</option>
                                                <option>Sub Zone 2</option>
                                                <option>Sub Zone 3</option>
                                                <option>Sub Zone 4</option>
                                                <option>Sub Zone 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Pin Code: </label>
                                            <input type="text" class="form-control" placeholder="Enter Pin Code">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Address: </label>
                                            <textarea class="form-control" cols="2" placeholder="Enter Address"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>

                <h5>Tab Design Form</h5>
                <form id="design-tab-form" action="#">
                    <h3 class="wiz-items">
                        <span class="num-icon"><i class="material-icons-two-tone">account_circle</i></span><span>
                            <b>Account</b>Lorem impsum
                        </span>
                    </h3>
                    <section>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Name: </label>
                                    <input type="text" class="form-control" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Email: </label>
                                    <input type="text" class="form-control" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Password: </label>
                                    <input type="password" class="form-control" placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Conform Password: </label>
                                    <input type="password" class="form-control" placeholder="Enter Conform Password">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Contact Number: </label>
                                    <input type="text" class="form-control" placeholder="Enter Contact Number">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Date of birth: </label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label d-block">Gender: </label>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="wiz2genrd1" name="customRadio" class="form-check-input">
                                        <label class="form-check-label" for="wiz1genrd1">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="wiz2genrd2" name="customRadio" class="form-check-input">
                                        <label class="form-check-label" for="wiz1genrd2">Female</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button class="btn btn-light-primary">Update Changes</button>
                        </div>
                    </section>
                    <h3 class="wiz-items">
                        <span class="num-icon"><i class="material-icons-two-tone">chrome_reader_mode</i></span><span>
                            <b>Profile</b>Lorem impsum
                        </span>
                    </h3>
                    <section>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Educational Qualification: </label>
                                    <input type="text" class="form-control" placeholder="Enter Educational Qualification">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Passing year: </label>
                                    <select class="form-control">
                                        <option></option>
                                        <option>2020</option>
                                        <option>2019</option>
                                        <option>2018</option>
                                        <option>2017</option>
                                        <option>2016</option>
                                        <option>2015</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Work Experience: </label>
                                    <input type="text" class="form-control" placeholder="Enter Work Experience">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Enter Last Working Place: </label>
                                    <input type="text" class="form-control" placeholder="Enter Institute / Compney Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Position: </label>
                                    <input type="text" class="form-control" placeholder="Enter Institute / Compney Name">
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button class="btn btn-light-primary">Update Changes</button>
                        </div>
                    </section>
                    <h3 class="wiz-items">
                        <span class="num-icon"><i class="material-icons-two-tone">account_balance</i></span><span>
                            <b>Bank</b>Lorem impsum
                        </span>
                    </h3>
                    <section>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Account Number: </label>
                                    <input type="text" class="form-control" placeholder="Enter Account Number">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Account Type: </label>
                                    <input type="text" class="form-control" placeholder="Enter Account Type">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Nominee Name: </label>
                                    <input type="text" class="form-control" placeholder="Enter Nominee Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Branch Name: </label>
                                    <input type="text" class="form-control" placeholder="Enter Branch Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Branch IFSC Code: </label>
                                    <input type="text" class="form-control" placeholder="Enter Branch IFSC Code">
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button class="btn btn-light-primary">Update Changes</button>
                        </div>
                    </section>
                    <h3 class="wiz-items">
                        <span class="num-icon"><i class="material-icons-two-tone">pin_drop</i></span><span>
                            <b>Address</b>Lorem impsum
                        </span>
                    </h3>
                    <section>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">House Number: </label>
                                    <input type="text" class="form-control" placeholder="Enter House Number">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Area Name: </label>
                                    <input type="text" class="form-control" placeholder="Enter Number">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">State: </label>
                                    <select class="form-control">
                                        <option></option>
                                        <option>State 1</option>
                                        <option>State 2</option>
                                        <option>State 3</option>
                                        <option>State 4</option>
                                        <option>State 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">District: </label>
                                    <select class="form-control">
                                        <option></option>
                                        <option>District 1</option>
                                        <option>District 2</option>
                                        <option>District 3</option>
                                        <option>District 4</option>
                                        <option>District 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Sub Zone: </label>
                                    <select class="form-control">
                                        <option></option>
                                        <option>Sub Zone 1</option>
                                        <option>Sub Zone 2</option>
                                        <option>Sub Zone 3</option>
                                        <option>Sub Zone 4</option>
                                        <option>Sub Zone 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Pin Code: </label>
                                    <input type="text" class="form-control" placeholder="Enter Pin Code">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Address: </label>
                                    <textarea class="form-control" cols="2" placeholder="Enter Address"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button class="btn btn-light-primary">Update Changes</button>
                        </div>
                    </section>
                </form>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
@@include('./layouts/footer.html')
<!-- jquery-validation Js -->
<script src="assets/js/plugins/jquery.validate.min.js"></script>
<script src="assets/js/plugins/jquery.steps.min.js"></script>
<script>
    $(function() {
        $("#example-basic").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "fade",
            autoFocus: true
        });
    });
    $(function() {
        var form = $("#example-form");
        form.validate({
            errorPlacement: function errorPlacement(error, element) {
                element.before(error);
            },
            rules: {
                confirm: {
                    equalTo: "#password"
                }
            }
        });
        form.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "fade",
            onStepChanging: function(event, currentIndex, newIndex) {
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onFinishing: function(event, currentIndex) {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function(event, currentIndex) {
                alert("Submitted!");
            }
        });
    });
    $(function() {
        $("#example-vertical").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "fade",
            stepsOrientation: "vertical"
        });
    });
    $(function() {
        $("#design-1-form").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "fade",
            cssClass: "wizard pc-wizard",
            autoFocus: true
        });
    });
    $(function() {
        $("#design-2-form").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "fade",
            stepsOrientation: "vertical",
            cssClass: "wizard pc-wizard",
            autoFocus: true
        });
    });
    $(function() {
        $("#design-tab-form").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "fade",
            // enableFinishButton: false,
            enablePagination: false,
            enableAllSteps: true,
            cssClass: "wizard pc-tab-control"
        });
    });
</script>
@@include('./layouts/footer-bottom-link.html')
</body>

</html>
