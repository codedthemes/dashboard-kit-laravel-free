<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
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
                            <h5 class="m-b-10">Multiple Select Splitter</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item">Multiple Select Splitter</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="row align-items-center mb-3">
                    <div class="col-md-8">
                        <h3>Multiple Select Splitter</h3>
                        <p class="lead">For multi select with more script options. If you want to select more options, you must hold CTRL key. (default select behaviour)</p>
                        <p class="f-w-500">Check out <a href="https://github.com/poolerMF/bootstrap-multiselectsplitter" target="_blank" class="badge bg-light-dark">Github</a></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Example 1</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                  <select id="example1">
                                    <optgroup label="Category 1">
                                      <option value="1">Choice 1</option>
                                      <option value="2">Choice 2</option>
                                      <option value="3">Choice 3</option>
                                      <option value="4">Choice 4</option>
                                    </optgroup>
                                    <optgroup label="Category 2">
                                      <option value="5">Choice 5</option>
                                      <option value="6">Choice 6</option>
                                      <option value="7">Choice 7</option>
                                      <option value="8">Choice 8</option>
                                    </optgroup>
                                    <optgroup label="Category 3">
                                      <option value="9">Choice 9</option>
                                      <option value="10">Choice 10</option>
                                      <option value="11">Choice 11</option>
                                      <option value="12">Choice 12</option>
                                    </optgroup>
                                  </select>
                                  <small>Simple select, no mutiple</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Example 2</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <select id="example2" multiple="multiple">
                                      <optgroup label="Category 1">
                                        <option value="1">Choice 1</option>
                                        <option value="2" selected="selected">Choice 2</option>
                                        <option value="3">Choice 3</option>
                                        <option value="4">Choice 4</option>
                                      </optgroup>
                                      <optgroup label="Category 2">
                                        <option value="5">Choice 5</option>
                                        <option value="6">Choice 6</option>
                                        <option value="7">Choice 7</option>
                                        <option value="8">Choice 8</option>
                                      </optgroup>
                                      <optgroup label="Category 3">
                                        <option value="9">Choice 9</option>
                                        <option value="10">Choice 10</option>
                                        <option value="11">Choice 11</option>
                                        <option value="12">Choice 12</option>
                                      </optgroup>
                                    </select>
                                    <small>Multiple select of size 7 with group counter. Second select is cleared, when first changed.</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Example 3</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                  <select id="example3" multiple="multiple">
                                    <optgroup label="Category 1">
                                      <option value="1">Choice 1</option>
                                      <option value="2">Choice 2</option>
                                      <option value="3" selected="selected">Choice 3</option>
                                      <option value="4">Choice 4</option>
                                    </optgroup>
                                    <optgroup label="Category 2">
                                      <option value="5">Choice 5</option>
                                      <option value="6" selected="selected">Choice 6</option>
                                      <option value="7">Choice 7</option>
                                      <option value="8">Choice 8</option>
                                    </optgroup>
                                    <optgroup label="Category 3">
                                      <option value="9">Choice 9</option>
                                      <option value="10">Choice 10</option>
                                      <option value="11">Choice 11</option>
                                      <option value="12">Choice 12</option>
                                    </optgroup>
                                  </select>
                                  <small>Multiple select with group counter. You can select maximum 2 options of all categories.</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Example 4</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                  <select id="example4" multiple="multiple">
                                    <optgroup label="Category 1">
                                      <option value="1">Choice 1</option>
                                      <option value="2">Choice 2</option>
                                      <option value="3" selected="selected">Choice 3</option>
                                      <option value="4">Choice 4</option>
                                    </optgroup>
                                    <optgroup label="Category 2">
                                      <option value="5">Choice 5</option>
                                      <option value="6">Choice 6</option>
                                      <option value="7">Choice 7</option>
                                      <option value="8">Choice 8</option>
                                    </optgroup>
                                    <optgroup label="Category 3">
                                      <option value="9">Choice 9</option>
                                      <option value="10">Choice 10</option>
                                      <option value="11">Choice 11</option>
                                      <option value="12">Choice 12</option>
                                    </optgroup>
                                  </select>
                                  <small>Multiple select with group counter. You can select maximum 3 options ONLY from one category.</small>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- tagify -->
<script src="assets/js/plugins/bootstrap-multiselectsplitter.min.js"></script>
<script>
  $(function () {
    $('#example1').multiselectsplitter();

    $('#example2').multiselectsplitter({
        selectSize: 7,
        clearOnFirstChange: true,
        groupCounter: true
    });

    $('#example3').multiselectsplitter({
        groupCounter: true,
        maximumSelected: 2
    });

    $('#example4').multiselectsplitter({
        groupCounter: true,
        maximumSelected: 3,
        onlySameGroup: true
    });
  });
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
