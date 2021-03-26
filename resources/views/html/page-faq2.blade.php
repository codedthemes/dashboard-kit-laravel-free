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
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Faq</a></li>
                            <li class="breadcrumb-item">Faq 2</li>
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
                <div class="row justify-content-center text-center">
                    <div class="col-xl-8 col-md-10">
                        <h2 class="mt-2">
                            We're here to help !!
                        </h2>
                        <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                            scrambled it to make a type specimen book.</p>
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-8 col-md-10">
                                <form class="form-group mb-5">
                                    <input class="form-control" placeholder="Search in faqs...." type="text">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center text-center">
                            <div class="col-4">
                                <i class="feather icon-help-circle text-primary d-block h2 mb-0"></i>
                            </div>
                            <div class="col-8 pl-0">
                                <h4>10k+</h4>
                                <span>Support</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center text-center">
                            <div class="col-4">
                                <i class="feather icon-edit text-primary d-block h2 mb-0"></i>
                            </div>
                            <div class="col-8 pl-0">
                                <h4>100+</h4>
                                <span>blog post</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center text-center">
                            <div class="col-4">
                                <i class="feather icon-message-square text-primary d-block h2 mb-0"></i>
                            </div>
                            <div class="col-8 pl-0">
                                <h4>157</h4>
                                <span>Forum</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center text-center">
                            <div class="col-4">
                                <i class="feather icon-bell text-primary d-block h2 mb-0"></i>
                            </div>
                            <div class="col-8 pl-0">
                                <h4>190</h4>
                                <span>Creative</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Feature topics</h5>
                    </div>
                    <div class="list-group list-group-flush list-pills">
                        <a  href="#!" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#faq-modal">
                            <span class="f-w-500"><i class="feather icon-chevrons-right m-r-10 f-16 text-primary"></i>Pipeline management</span>
                            <div class="float-end">
                                <span class="badge bg-light-danger">New</span>
                            </div>
                        </a>
                        <a  href="#!" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#faq-modal">
                            <span class="f-w-500"><i class="feather icon-chevrons-right m-r-10 f-16 text-primary"></i>Prospect tracking</span>
                            <div class="float-end">
                                <span class="badge bg-light-danger">New</span>
                            </div>
                        </a>
                        <a  href="#!" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#faq-modal">
                            <span class="f-w-500"><i class="feather icon-chevrons-right m-r-10 f-16 text-primary"></i>Email tracking & notifications</span>
                        </a>
                        <a  href="#!" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#faq-modal">
                            <span class="f-w-500"><i class="feather icon-chevrons-right m-r-10 f-16 text-primary"></i>Company insights</span>
                        </a>
                        <a  href="#!" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#faq-modal">
                            <span class="f-w-500"><i class="feather icon-chevrons-right m-r-10 f-16 text-primary"></i>Live chat</span>
                        </a>
                        <a  href="#!" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#faq-modal">
                            <span class="f-w-500"><i class="feather icon-chevrons-right m-r-10 f-16 text-primary"></i>Meeting scheduling</span>
                        </a>
                        <a  href="#!" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#faq-modal">
                            <span class="f-w-500"><i class="feather icon-chevrons-right m-r-10 f-16 text-primary"></i>Reporting dashboard</span>
                        </a>
                        <a  href="#!" class="list-group-item list-group-item-action border-bottom-0" data-bs-toggle="modal" data-bs-target="#faq-modal">
                            <span class="f-w-500"><i class="feather icon-chevrons-right m-r-10 f-16 text-primary"></i>Deal tracking</span>
                        </a>
                    </div>
                    <div class="card-footer">
                        <a href="#!">Show more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Top Community Posts</h5>
                    </div>
                    <div class="list-group list-group-flush list-pills">
                        <div class="list-group-item list-group-item-action d-block py-3">
                            <div class="row">
                                <div class="col-auto pr-0">
                                    <img src="assets/images/user/avatar-2.jpg" class="img-radius wid-40" alt="User-Profile-Image">
                                </div>
                                <div class="col">
                                    <a href="#!"><h6 class="mb-0">Drag and drop a file with same name is no longer working. Error.</h6></a>
                                    <small class="mb-0 text-muted">
                                        updated by:
                                        <a href="#!" class="text-muted font-weight-bold text-h-primary">PortJobs</a>
                                        1 days ago
                                    </small>
                                    <div class="row justify-content-between">
                                        <div class="col-auto mt-2">
                                            <a href="#!" class="badge bg-light-danger">New</a>
                                            <a href="#!" class="badge bg-light-primary">Html</a>
                                            <a href="#!" class="badge bg-light-info">Jquery</a>
                                        </div>
                                        <div class="col-auto mt-2">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-eye text-primary me-2"></i><span>15k+</span></a></li>
                                                <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-comments text-primary me-2"></i><span>47</span></a></li>
                                                <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-heart text-danger me-2"></i><span>10K+</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action d-block py-3">
                            <div class="row">
                                <div class="col-auto pr-0">
                                    <img src="assets/images/user/avatar-1.jpg" class="img-radius wid-40" alt="User-Profile-Image">
                                </div>
                                <div class="col">
                                    <a href="#!"><h6 class="mb-0">Copied instead of moved...</h6></a>
                                    <small class="mb-0 text-muted">
                                        updated by:
                                        <a href="#!" class="text-muted font-weight-bold text-h-primary">mom2kjs</a>
                                        15 days ago
                                    </small>
                                    <div class="row justify-content-between">
                                        <div class="col-auto mt-2">
                                            <a href="#!" class="badge bg-light-danger">New</a>
                                            <a href="#!" class="badge bg-light-primary">Html</a>
                                            <a href="#!" class="badge bg-light-danger">scss</a>
                                            <a href="#!" class="badge bg-light-success">Javascript</a>
                                            <a href="#!" class="badge bg-light-info">Jquery</a>
                                        </div>
                                        <div class="col-auto mt-2">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-eye text-primary me-2"></i><span>36k+</span></a></li>
                                                <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-comments text-primary me-2"></i><span>13</span></a></li>
                                                <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-heart text-danger me-2"></i><span>34K+</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action d-block py-3">
                            <div class="row">
                                <div class="col-auto pr-0">
                                    <img src="assets/images/user/avatar-3.jpg" class="img-radius wid-40" alt="User-Profile-Image">
                                </div>
                                <div class="col">
                                    <a href="#!"><h6 class="mb-0">Can I disable 2FA on my account?</h6></a>
                                    <small class="mb-0 text-muted">
                                        updated by:
                                        <a href="#!" class="text-muted font-weight-bold text-h-primary">Megabyte</a>
                                        23 days ago
                                    </small>
                                    <div class="row justify-content-between">
                                        <div class="col-auto mt-2">
                                            <a href="#!" class="badge bg-light-danger">scss</a>
                                            <a href="#!" class="badge bg-light-success">Javascript</a>
                                        </div>
                                        <div class="col-auto mt-2">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-eye text-primary me-2"></i><span>15k+</span></a></li>
                                                <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-comments text-primary me-2"></i><span>47</span></a></li>
                                                <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-heart text-danger me-2"></i><span>10K+</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action d-block py-3">
                            <div class="row">
                                <div class="col-auto pr-0">
                                    <img src="assets/images/user/avatar-4.jpg" class="img-radius wid-40" alt="User-Profile-Image">
                                </div>
                                <div class="col">
                                    <a href="#!"><h6 class="mb-0">Dropbox for Gmail not showing login screen</h6></a>
                                    <small class="mb-0 text-muted">
                                        updated by:
                                        <a href="#!" class="text-muted font-weight-bold text-h-primary">Orion C.</a>
                                        1 month ago
                                    </small>
                                    <div class="row justify-content-between">
                                        <div class="col-auto mt-2">
                                            <a href="#!" class="badge bg-light-danger">scss</a>
                                            <a href="#!" class="badge bg-light-info">Jquery</a>
                                            <a href="#!" class="badge bg-light-primary">Html</a>
                                        </div>
                                        <div class="col-auto mt-2">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-eye text-primary me-2"></i><span>216k+</span></a></li>
                                                <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-comments text-primary me-2"></i><span>253</span></a></li>
                                                <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-heart text-danger me-2"></i><span>214K+</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#!">Show more</a>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="faq-modal" tabindex="-1" role="dialog" aria-labelledby="faq-modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="faq-modalLabel">Feature Article</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body p-0">
          <div class="list-group-item list-group-item-action d-block py-3">
              <div class="row">
                  <div class="col-auto pr-0">
                      <img src="assets/images/user/avatar-2.jpg" class="img-radius wid-40" alt="User-Profile-Image">
                  </div>
                  <div class="col">
                      <a href="#!"><h6 class="mb-0">Drag and drop a file with same name is no longer working. Error.</h6></a>
                      <small class="mb-0 text-muted">
                          updated by:
                          <a href="#!" class="text-muted font-weight-bold text-h-primary">PortJobs</a>
                          1 days ago
                      </small>
                      <div class="row justify-content-between">
                          <div class="col-auto mt-2">
                              <a href="#!" class="badge bg-light-danger">New</a>
                              <a href="#!" class="badge bg-light-primary">Html</a>
                              <a href="#!" class="badge bg-light-info">Jquery</a>
                          </div>
                          <div class="col-auto mt-2">
                              <ul class="list-inline mb-0">
                                  <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-eye text-primary me-2"></i><span>15k+</span></a></li>
                                  <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-comments text-primary me-2"></i><span>47</span></a></li>
                                  <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-heart text-danger me-2"></i><span>10K+</span></a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="list-group-item list-group-item-action d-block py-3">
              <div class="row">
                  <div class="col-auto pr-0">
                      <img src="assets/images/user/avatar-1.jpg" class="img-radius wid-40" alt="User-Profile-Image">
                  </div>
                  <div class="col">
                      <a href="#!"><h6 class="mb-0">Copied instead of moved...</h6></a>
                      <small class="mb-0 text-muted">
                          updated by:
                          <a href="#!" class="text-muted font-weight-bold text-h-primary">mom2kjs</a>
                          15 days ago
                      </small>
                      <div class="row justify-content-between">
                          <div class="col-auto mt-2">
                              <a href="#!" class="badge bg-light-danger">New</a>
                              <a href="#!" class="badge bg-light-primary">Html</a>
                              <a href="#!" class="badge bg-light-danger">scss</a>
                              <a href="#!" class="badge bg-light-success">Javascript</a>
                              <a href="#!" class="badge bg-light-info">Jquery</a>
                          </div>
                          <div class="col-auto mt-2">
                              <ul class="list-inline mb-0">
                                  <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-eye text-primary me-2"></i><span>36k+</span></a></li>
                                  <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-comments text-primary me-2"></i><span>13</span></a></li>
                                  <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-heart text-danger me-2"></i><span>34K+</span></a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="list-group-item list-group-item-action d-block py-3">
              <div class="row">
                  <div class="col-auto pr-0">
                      <img src="assets/images/user/avatar-3.jpg" class="img-radius wid-40" alt="User-Profile-Image">
                  </div>
                  <div class="col">
                      <a href="#!"><h6 class="mb-0">Can I disable 2FA on my account?</h6></a>
                      <small class="mb-0 text-muted">
                          updated by:
                          <a href="#!" class="text-muted font-weight-bold text-h-primary">Megabyte</a>
                          23 days ago
                      </small>
                      <div class="row justify-content-between">
                          <div class="col-auto mt-2">
                              <a href="#!" class="badge bg-light-danger">scss</a>
                              <a href="#!" class="badge bg-light-success">Javascript</a>
                          </div>
                          <div class="col-auto mt-2">
                              <ul class="list-inline mb-0">
                                  <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-eye text-primary me-2"></i><span>15k+</span></a></li>
                                  <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-comments text-primary me-2"></i><span>47</span></a></li>
                                  <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-heart text-danger me-2"></i><span>10K+</span></a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="list-group-item list-group-item-action d-block py-3">
              <div class="row">
                  <div class="col-auto pr-0">
                      <img src="assets/images/user/avatar-4.jpg" class="img-radius wid-40" alt="User-Profile-Image">
                  </div>
                  <div class="col">
                      <a href="#!"><h6 class="mb-0">Dropbox for Gmail not showing login screen</h6></a>
                      <small class="mb-0 text-muted">
                          updated by:
                          <a href="#!" class="text-muted font-weight-bold text-h-primary">Orion C.</a>
                          1 month ago
                      </small>
                      <div class="row justify-content-between">
                          <div class="col-auto mt-2">
                              <a href="#!" class="badge bg-light-danger">scss</a>
                              <a href="#!" class="badge bg-light-info">Jquery</a>
                              <a href="#!" class="badge bg-light-primary">Html</a>
                          </div>
                          <div class="col-auto mt-2">
                              <ul class="list-inline mb-0">
                                  <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-eye text-primary me-2"></i><span>216k+</span></a></li>
                                  <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-comments text-primary me-2"></i><span>253</span></a></li>
                                  <li class="list-inline-item"><a href="#!" class="text-body text-h-primary"><i class="fas fa-heart text-danger me-2"></i><span>214K+</span></a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Show more</button>
      </div>
    </div>
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
