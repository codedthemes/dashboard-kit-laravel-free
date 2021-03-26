<!DOCTYPE html>
<html lang="en">

<head>
	@include('html.layouts.head')
	@include('html.layouts.head-bottom-link')
</head>
@include('html.layouts.layout-vertical')
<!-- [ Main Content ] start -->
<div class="pc-container">
	<div class="pcoded-content">
		<!-- [ Main Content ] start -->
		<div class="row mb-3">
			<div class="col-md-8">
				<h3>Buttons</h3>
				<p class="lead">Use Bootstrap’s custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.</p>
				<p class="f-w-500">Check out <a href="https://dashboardkit.io/bootstrap/docs/index-bc-package.html#page-button" target="_blank" class="badge bg-light-primary">Documentation</a></p>
			</div>
		</div>
		<!-- [ button ] start -->
		<div class="row btn-page">
			<!-- [ default-button ] start -->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Default</h5>
					</div>
					<div class="card-body">
						<button type="button" class="btn  btn-primary">Primary</button>
						<button type="button" class="btn  btn-secondary">Secondary</button>
						<button type="button" class="btn  btn-success">Success</button>
						<button type="button" class="btn  btn-danger">Danger</button>
						<button type="button" class="btn  btn-warning">Warning</button>
						<button type="button" class="btn  btn-info">Info</button>
						<button type="button" class="btn  btn-light">Light</button>
						<button type="button" class="btn  btn-dark">Dark</button>
						<button type="button" class="btn  btn-link">Link</button>
					</div>
				</div>
			</div>
			<!-- [ default-button ] end -->
			<!-- [ outline-button ] start -->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Outline</h5>
					</div>
					<div class="card-body">
						<button type="button" class="btn  btn-outline-primary">Primary</button>
						<button type="button" class="btn  btn-outline-secondary">Secondary</button>
						<button type="button" class="btn  btn-outline-success">Success</button>
						<button type="button" class="btn  btn-outline-danger">Danger</button>
						<button type="button" class="btn  btn-outline-warning">Warning</button>
						<button type="button" class="btn  btn-outline-info">Info</button>
						<button type="button" class="btn  btn-outline-light">Light</button>
						<button type="button" class="btn  btn-outline-dark">Dark</button>
					</div>
				</div>
			</div>
			<!-- [ outline-button ] end -->
			<!-- [ disabled-button ] start -->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Disabled Button</h5>
					</div>
					<div class="card-body">
						<p>use <code>.disabled</code> in class <code>.btn</code> class to get Disabled button</p>
						<button type="button" class="btn disabled btn-primary">Primary</button>
						<button type="button" class="btn disabled btn-secondary">Secondary</button>
						<button type="button" class="btn disabled btn-success">Success</button>
						<button type="button" class="btn disabled btn-danger">Danger</button>
						<button type="button" class="btn disabled btn-warning">Warning</button>
						<button type="button" class="btn disabled btn-info">Info</button>
						<button type="button" class="btn disabled btn-light">Light</button>
						<button type="button" class="btn disabled btn-dark">Dark</button>
					</div>
				</div>
			</div>
			<!-- [ disabled-button ] end -->
			<!-- [ default-shadow ] start -->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Shadow</h5>
					</div>
					<div class="card-body">
						<button type="button" class="btn btn-shadow btn-primary">Primary</button>
						<button type="button" class="btn btn-shadow btn-secondary">Secondary</button>
						<button type="button" class="btn btn-shadow btn-success">Success</button>
						<button type="button" class="btn btn-shadow btn-danger">Danger</button>
						<button type="button" class="btn btn-shadow btn-warning">Warning</button>
						<button type="button" class="btn btn-shadow btn-info">Info</button>
						<button type="button" class="btn btn-shadow btn-light">Light</button>
						<button type="button" class="btn btn-shadow btn-dark">Dark</button>
						<button type="button" class="btn btn-shadow btn-link">Link</button>
					</div>
				</div>
			</div>
			<!-- [ default-shadow ] end -->
			<!-- [ size-button ] start -->
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Sizes [ Large ]</h5>
					</div>
					<div class="card-body">
						<p>use <code>.btn-lg</code> in class <code>.btn</code> class to get Large button</p>
						<button type="button" class="btn  btn-primary btn-lg">Large button</button>
						<button type="button" class="btn  btn-secondary btn-lg">Large button</button>
					</div>
				</div>
			</div>
			<!-- [ size-button ] end -->
			<!-- [ size-small-button ] start -->
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Sizes [ Small ]</h5>
					</div>
					<div class="card-body">
						<p>use <code>.btn-sm</code> in class <code>.btn</code> class to get Small button</p>
						<button type="button" class="btn  btn-primary btn-sm">Small button</button>
						<button type="button" class="btn  btn-secondary btn-sm">Small button</button>
					</div>
				</div>
			</div>
			<!-- [ size-small-button ] end -->
		</div>
		<div class="row btn-page">
			<!-- [ button-icon ] start -->
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Button With Icon</h5>
					</div>
					<div class="card-body">
						<button type="button" class="btn btn-primary"><i class="me-2" data-feather="thumbs-up"></i>Primary</button>
						<button type="button" class="btn btn-secondary"><i class="me-2" data-feather="camera"></i>Secondary</button>
						<button type="button" class="btn btn-success"><i class="me-2" data-feather="check-circle"></i>Success</button>
						<button type="button" class="btn btn-danger"><i class="me-2" data-feather="slash"></i>Danger</button>
						<button type="button" class="btn btn-warning"><i class="me-2" data-feather="alert-triangle"></i>Warning</button>
						<button type="button" class="btn btn-info"><i class="me-2" data-feather="info"></i>Info</button>
					</div>
				</div>
			</div>
			<!-- [ button-icon ] end -->
			<!-- [ button-outline ] start -->
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Outline Icon Buttons</h5>
					</div>
					<div class="card-body">
						<button type="button" class="btn btn-outline-primary"><i class="me-2" data-feather="thumbs-up"></i>Primary</button>
						<button type="button" class="btn btn-outline-secondary"><i class="me-2" data-feather="camera"></i>Secondary</button>
						<button type="button" class="btn btn-outline-success"><i class="me-2" data-feather="check-circle"></i>Success</button>
						<button type="button" class="btn btn-outline-danger"><i class="me-2" data-feather="slash"></i>Danger</button>
						<button type="button" class="btn btn-outline-warning"><i class="me-2" data-feather="alert-triangle"></i>Warning</button>
						<button type="button" class="btn btn-outline-info"><i class="me-2" data-feather="info"></i>Info</button>
					</div>
				</div>
			</div>
			<!-- [ button-outline ] end -->
			<!-- [ only-icon ] start -->
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Only Icon</h5>
					</div>
					<div class="card-body">
						<button type="button" class="btn  btn-icon btn-primary"><i data-feather="thumbs-up"></i></button>
						<button type="button" class="btn  btn-icon btn-secondary"><i data-feather="camera"></i></button>
						<button type="button" class="btn  btn-icon btn-success"><i data-feather="check-circle"></i></button>
						<button type="button" class="btn  btn-icon btn-danger"><i data-feather="slash"></i></button>
						<button type="button" class="btn  btn-icon btn-warning"><i data-feather="alert-triangle"></i></button>
						<button type="button" class="btn  btn-icon btn-info"><i data-feather="info"></i></button>
					</div>
				</div>
			</div>
			<!-- [ only-icon ] end -->
			<!-- [ outline-icon ] start -->
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Outline Icon</h5>
					</div>
					<div class="card-body">
						<button type="button" class="btn btn-icon btn-outline-primary"><i data-feather="thumbs-up"></i></button>
						<button type="button" class="btn btn-icon btn-outline-secondary"><i data-feather="camera"></i></button>
						<button type="button" class="btn btn-icon btn-outline-success"><i data-feather="check-circle"></i></button>
						<button type="button" class="btn btn-icon btn-outline-danger"><i data-feather="slash"></i></button>
						<button type="button" class="btn btn-icon btn-outline-warning"><i data-feather="alert-triangle"></i></button>
						<button type="button" class="btn btn-icon btn-outline-info"><i data-feather="info"></i></button>
					</div>
				</div>
			</div>
			<!-- [ outline-icon ] end -->
		</div>
		<div class="row btn-page">
			<!-- [ basic-dropdown-button ] start -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h5>Basic Dropdown Button</h5>
					</div>
					<div class="card-body">
						<div class="btn-group mb-2 me-2">
							<button class="btn  btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
							</div>
						</div>
						<div class="btn-group mb-2 me-2">
							<button class="btn  btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secondary</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
							</div>
						</div>
						<div class="btn-group mb-2 me-2">
							<button class="btn  btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
							</div>
						</div>
						<div class="btn-group mb-2 me-2">
							<button class="btn  btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
							</div>
						</div>
						<div class="btn-group mb-2 me-2">
							<button class="btn  btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
							</div>
						</div>
						<div class="btn-group mb-2 me-2">
							<button class="btn  btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- [ basic-dropdown-button ] end -->
			<!-- [ split-danger-button ] start -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h5>Split Dropdown Button</h5>
					</div>
					<div class="card-body">
						<!-- Example split danger button -->
						<div class="btn-group mb-2 me-2">
							<button type="button" class="btn  btn-primary">Primary</button>
							<button type="button" class="btn  btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#!">Separated link</a>
							</div>
						</div>
						<div class="btn-group mb-2 me-2">
							<button type="button" class="btn  btn-secondary">Secondary</button>
							<button type="button" class="btn  btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#!">Separated link</a>
							</div>
						</div>
						<div class="btn-group mb-2 me-2">
							<button type="button" class="btn  btn-success">Success</button>
							<button type="button" class="btn  btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#!">Separated link</a>
							</div>
						</div>
						<div class="btn-group mb-2 me-2">
							<button type="button" class="btn  btn-danger">Danger</button>
							<button type="button" class="btn  btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#!">Separated link</a>
							</div>
						</div>
						<div class="btn-group mb-2 me-2">
							<button type="button" class="btn  btn-warning">Warning</button>
							<button type="button" class="btn  btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#!">Separated link</a>
							</div>
						</div>
						<div class="btn-group mb-2 me-2">
							<button type="button" class="btn  btn-info">Info</button>
							<button type="button" class="btn  btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#!">Separated link</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- [ split-danger-button ] end -->
			<!-- [ outline-dropdown-button ] start -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h5>Basic Outline Dropdown Button</h5>
					</div>
					<div class="card-body">
						<div class="btn-group mb-2 me-2">
							<button class="btn  btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
							</div>
						</div>
						<div class="btn-group mb-2 me-2">
							<button class="btn  btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secondary</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
							</div>
						</div>
						<div class="btn-group mb-2 me-2">
							<button class="btn  btn-outline-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
							</div>
						</div>
						<div class="btn-group mb-2 me-2">
							<button class="btn  btn-outline-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
							</div>
						</div>
						<div class="btn-group mb-2 me-2">
							<button class="btn  btn-outline-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
							</div>
						</div>
						<div class="btn-group mb-2 me-2">
							<button class="btn  btn-outline-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- [ outline-dropdown-button ] end -->
			<!-- [ split-dropdown-button ] start -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h5>Split Outline Dropdown Button</h5>
					</div>
					<div class="card-body">
						<!-- Example split danger button -->
						<div class="btn-group mb-2 me-2">
							<button type="button" class="btn  btn-outline-primary">Primary</button>
							<button type="button" class="btn  btn-outline-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#!">Separated link</a>
							</div>
						</div>
						<div class="btn-group mb-2 me-2">
							<button type="button" class="btn  btn-outline-secondary">Secondary</button>
							<button type="button" class="btn  btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#!">Separated link</a>
							</div>
						</div>
						<div class="btn-group mb-2 me-2">
							<button type="button" class="btn  btn-outline-success">Success</button>
							<button type="button" class="btn  btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#!">Separated link</a>
							</div>
						</div>
						<div class="btn-group mb-2 me-2">
							<button type="button" class="btn  btn-outline-danger">Danger</button>
							<button type="button" class="btn  btn-outline-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#!">Separated link</a>
							</div>
						</div>
						<div class="btn-group mb-2 me-2">
							<button type="button" class="btn  btn-outline-warning">Warning</button>
							<button type="button" class="btn  btn-outline-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#!">Separated link</a>
							</div>
						</div>
						<div class="btn-group mb-2 me-2">
							<button type="button" class="btn  btn-outline-info">Info</button>
							<button type="button" class="btn  btn-outline-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#!">Separated link</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- [ split-dropdown-button ] end -->
			<!-- [ basic-dropdown-button ] start -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h5>Dark dropdowns</h5>
					</div>
					<div class="card-body">
						<div class="btn-group mb-2 me-2">
							<button class="btn  btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary</button>
							<div class="dropdown-menu dropdown-menu-dark">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
							</div>
						</div>
						<div class="btn-group mb-2 me-2">
							<button class="btn  btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secondary</button>
							<div class="dropdown-menu dropdown-menu-dark">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
							</div>
						</div>
						<div class="btn-group mb-2 me-2">
							<button class="btn  btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success</button>
							<div class="dropdown-menu dropdown-menu-dark">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
							</div>
						</div>
						<div class="btn-group mb-2 me-2">
							<button class="btn  btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger</button>
							<div class="dropdown-menu dropdown-menu-dark">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
							</div>
						</div>
						<div class="btn-group mb-2 me-2">
							<button class="btn  btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning</button>
							<div class="dropdown-menu dropdown-menu-dark">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
							</div>
						</div>
						<div class="btn-group mb-2 me-2">
							<button class="btn  btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</button>
							<div class="dropdown-menu dropdown-menu-dark">
								<a class="dropdown-item" href="#!">Action</a>
								<a class="dropdown-item" href="#!">Another action</a>
								<a class="dropdown-item" href="#!">Something else here</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- [ basic-dropdown-button ] end -->
		</div>
		<div class="row btn-page">
			<!-- [ basic-button-group ] start -->
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Basic Button Group</h5>
					</div>
					<div class="card-body">
						<div class="btn-group mb-2" role="group" aria-label="Basic example">
							<button type="button" class="btn  btn-secondary">Left</button>
							<button type="button" class="btn  btn-secondary">Middle</button>
							<button type="button" class="btn  btn-secondary">Right</button>
						</div>
					</div>
				</div>
			</div>
			<!-- [ basic-button-group ] end -->
			<!-- [ button-toolbar ] start -->
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Button Toolbar</h5>
					</div>
					<div class="card-body">
						<div class="btn-toolbar" role="toolbar">
							<div class="btn-group mb-1 me-2" role="group">
								<button type="button" class="btn btn-primary">1</button>
								<button type="button" class="btn btn-primary">2</button>
								<button type="button" class="btn btn-primary">3</button>
								<button type="button" class="btn btn-primary">4</button>
							</div>
							<div class="btn-group mb-1 me-2" role="group">
								<button type="button" class="btn btn-secondary">5</button>
								<button type="button" class="btn btn-secondary">6</button>
								<button type="button" class="btn btn-secondary">7</button>
							</div>
							<div class="btn-group mb-1" role="group">
								<button type="button" class="btn btn-info">8</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- [ button-toolbar ] end -->
			<!-- [ button-toolbar-input ] start -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h5>Button Toolbar Input</h5>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
								<div class="btn-group me-2" role="group" aria-label="First group">
									<button type="button" class="btn btn-light-secondary">1</button>
									<button type="button" class="btn btn-light-secondary">2</button>
									<button type="button" class="btn btn-light-secondary">3</button>
									<button type="button" class="btn btn-light-secondary">4</button>
								</div>
								<div class="input-group">
									<div class="input-group-text" id="btnGroupAddon">@</div>
									<input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">
								</div>
							</div>

							<div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
								<div class="btn-group" role="group" aria-label="First group">
									<button type="button" class="btn btn-light-secondary">1</button>
									<button type="button" class="btn btn-light-secondary">2</button>
									<button type="button" class="btn btn-light-secondary">3</button>
									<button type="button" class="btn btn-light-secondary">4</button>
								</div>
								<div class="input-group">
									<div class="input-group-text" id="btnGroupAddon2">@</div>
									<input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon2">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- [ button-toolbar-input ] end -->
			<!-- [ button-toolbar-size ] start -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h5>Button Toolbar Size</h5>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-xl-4 col-md-12 mb-2">
								<p>use <code>.btn-group-lg</code> in class <code>.btn-group</code> class to get Large size button group</p>
								<div class="btn-group btn-group-lg" role="group" aria-label="button groups xl">
									<button type="button" class="btn  btn-secondary">Left</button>
									<button type="button" class="btn  btn-secondary">Middle</button>
									<button type="button" class="btn  btn-secondary">Right</button>
								</div>
							</div>
							<div class="col-xl-4 col-md-6 mb-2">
								<p>this is default size</p>
								<div class="btn-group" role="group" aria-label="button groups">
									<button type="button" class="btn  btn-secondary">Left</button>
									<button type="button" class="btn  btn-secondary">Middle</button>
									<button type="button" class="btn  btn-secondary">Right</button>
								</div>
							</div>
							<div class="col-xl-4 col-md-6 mb-2">
								<p>use <code>.btn-group-sm</code> in class <code>.btn-group</code> class to get Small size button group</p>
								<div class="btn-group btn-group-sm" role="group" aria-label="button groups sm">
									<button type="button" class="btn  btn-secondary">Left</button>
									<button type="button" class="btn  btn-secondary">Middle</button>
									<button type="button" class="btn  btn-secondary">Right</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- [ button-toolbar-size ] end -->
			<!-- [ nesting ] start -->
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Nesting</h5>
					</div>
					<div class="card-body">
						<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
							<button type="button" class="btn  btn-secondary">1</button>
							<button type="button" class="btn  btn-secondary">2</button>
							<div class="btn-group" role="group">
								<button id="btnGroupDrop1" type="button" class="btn  btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Dropdown
								</button>
								<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
									<a class="dropdown-item" href="#!">Dropdown link</a>
									<a class="dropdown-item" href="#!">Dropdown link</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- [ nesting ] end -->
			<!-- [ vertical-variation ] start -->
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Vertical Variation</h5>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-4">
								<div class="btn-group-vertical" role="group" aria-label="Button group with nested dropdown">
									<button type="button" class="btn  btn-secondary">1</button>
									<button type="button" class="btn  btn-secondary">2</button>
									<button type="button" class="btn  btn-secondary">3</button>
								</div>
							</div>
							<div class="col-8">
								<div class="btn-group-vertical" role="group" aria-label="Button group with nested dropdown">
									<button type="button" class="btn  btn-secondary">1</button>
									<button type="button" class="btn  btn-secondary">2</button>
									<div class="btn-group" role="group">
										<button id="btnGroupDrop3" type="button" class="btn  btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
										<div class="dropdown-menu" aria-labelledby="btnGroupDrop3">
											<a class="dropdown-item" href="#!">Dropdown link</a>
											<a class="dropdown-item" href="#!">Dropdown link</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- [ vertical-variation ] end -->
			<!-- [ Mixed styles ] start -->
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Mixed styles</h5>
					</div>
					<div class="card-body">
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-danger">A</button>
							<button type="button" class="btn btn-warning">A</button>
							<button type="button" class="btn btn-primary">A</button>
							<button type="button" class="btn btn-success">A</button>
						</div>
						<hr>
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-light-danger">A</button>
							<button type="button" class="btn btn-light-warning">A</button>
							<button type="button" class="btn btn-light-primary">A</button>
							<button type="button" class="btn btn-light-success">A</button>
						</div>
					</div>
				</div>
			</div>
			<!-- [ Mixed styles ] end -->
			<!-- [ Outlined styles ] start -->
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Outlined styles</h5>
					</div>
					<div class="card-body">
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-outline-secondary">Left</button>
							<button type="button" class="btn btn-outline-secondary">Middle</button>
							<button type="button" class="btn btn-outline-secondary">Right</button>
						</div>
						<hr>
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-outline-primary">Left</button>
							<button type="button" class="btn btn-outline-success">Middle</button>
							<button type="button" class="btn btn-outline-danger">Right</button>
						</div>
					</div>
				</div>
			</div>
			<!-- [ Mixed styles ] end -->
			<!-- [ Checkbox button groups ] start -->
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Checkbox button groups</h5>
					</div>
					<div class="card-body">
						<div class="btn-group" role="group">
							<input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
							<label class="btn btn-outline-secondary" for="btncheck1">Opt 1</label>
							<input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
							<label class="btn btn-outline-secondary" for="btncheck2">Opt 2</label>
							<input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
							<label class="btn btn-outline-secondary" for="btncheck3">Opt 3</label>
						</div>
						<hr>
						<div class="btn-group" role="group">
							<input type="checkbox" class="btn-check" id="btnchecklite1" autocomplete="off">
							<label class="btn btn-light-secondary" for="btnchecklite1">Opt 1</label>
							<input type="checkbox" class="btn-check" id="btnchecklite2" autocomplete="off">
							<label class="btn btn-light-secondary" for="btnchecklite2">Opt 2</label>
							<input type="checkbox" class="btn-check" id="btnchecklite3" autocomplete="off">
							<label class="btn btn-light-secondary" for="btnchecklite3">Opt 3</label>
						</div>
						<hr>
						<div class="btn-group" role="group">
							<input type="checkbox" class="btn-check" id="btnchecklitecol1" autocomplete="off">
							<label class="btn btn-light-primary" for="btnchecklitecol1">Opt 1</label>
							<input type="checkbox" class="btn-check" id="btnchecklitecol2" autocomplete="off">
							<label class="btn btn-light-success" for="btnchecklitecol2">Opt 2</label>
							<input type="checkbox" class="btn-check" id="btnchecklitecol3" autocomplete="off">
							<label class="btn btn-light-danger" for="btnchecklitecol3">Opt 3</label>
						</div>
					</div>
				</div>
			</div>
			<!-- [ Checkbox button groups ] end -->
			<!-- [ radio button groups ] start -->
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Radio button groups</h5>
					</div>
					<div class="card-body">
						<div class="btn-group" role="group">
							<input type="radio" class="btn-check" id="btnrdo1" autocomplete="off" name="btnradio1">
							<label class="btn btn-outline-secondary" for="btnrdo1">Opt 1</label>
							<input type="radio" class="btn-check" id="btnrdo2" autocomplete="off" name="btnradio1">
							<label class="btn btn-outline-secondary" for="btnrdo2">Opt 2</label>
							<input type="radio" class="btn-check" id="btnrdo3" autocomplete="off" name="btnradio1">
							<label class="btn btn-outline-secondary" for="btnrdo3">Opt 3</label>
						</div>
						<hr>
						<div class="btn-group" role="group">
							<input type="radio" class="btn-check" id="btnrdolite1" autocomplete="off" name="btnradio2">
							<label class="btn btn-light-secondary" for="btnrdolite1">Opt 1</label>
							<input type="radio" class="btn-check" id="btnrdolite2" autocomplete="off" name="btnradio2">
							<label class="btn btn-light-secondary" for="btnrdolite2">Opt 2</label>
							<input type="radio" class="btn-check" id="btnrdolite3" autocomplete="off" name="btnradio2">
							<label class="btn btn-light-secondary" for="btnrdolite3">Opt 3</label>
						</div>
						<hr>
						<div class="btn-group" role="group">
							<input type="radio" class="btn-check" id="btnrdolitecol1" autocomplete="off" name="btnradio3">
							<label class="btn btn-light-primary" for="btnrdolitecol1">Opt 1</label>
							<input type="radio" class="btn-check" id="btnrdolitecol2" autocomplete="off" name="btnradio3">
							<label class="btn btn-light-success" for="btnrdolitecol2">Opt 2</label>
							<input type="radio" class="btn-check" id="btnrdolitecol3" autocomplete="off" name="btnradio3">
							<label class="btn btn-light-danger" for="btnrdolitecol3">Opt 3</label>
						</div>
					</div>
				</div>
			</div>
			<!-- [ radio button groups ] end -->
		</div>
	</div>
</div>
<!-- [ Main Content ] end -->
@include('html.layouts.footer')
@include('html.layouts.footer-bottom-link')
</body>

</html>
