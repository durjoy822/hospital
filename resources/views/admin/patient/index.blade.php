@extends('admin.layouts.master')
@section('content')
<div id="content">
			<!-- Top Navigation -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="responsive-logo">
						<a href="index.html"><img src="images/logo-dark.png" class="logo" alt="logo"></a>
					</div>
					<ul class="nav">
						<li class="nav-item">
							<span class="ti-menu" id="sidebarCollapse"></span>
						</li>
						<li class="nav-item">
							<span title="Fullscreen" class="ti-fullscreen fullscreen"></span>
						</li>
						<li class="nav-item">
							<a  data-toggle="modal" data-target=".proclinic-modal-lg">
								<span class="ti-search"></span>
							</a>
							<div class="modal fade proclinic-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-lorvens">
									<div class="modal-content proclinic-box-shadow2">
										<div class="modal-header">
											<h5 class="modal-title">Search Patient/Doctor:</h5>
											<span class="ti-close" data-dismiss="modal" aria-label="Close">
											</span>
										</div>
										<div class="modal-body">
											<form>
												<div class="form-group">
													<input type="text" class="form-control" id="search-term" placeholder="Type text here">
													<button type="button" class="btn btn-lorvens proclinic-bg">
														<span class="ti-location-arrow"></span> Search</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="ti-announcement"></span>
							</a>
							<div class="dropdown-menu proclinic-box-shadow2 notifications animated flipInY">
								<h5>Notifications</h5>
								<a class="dropdown-item" href="#">
									<span class="ti-wheelchair"></span> New Patient Added</a>
								<a class="dropdown-item" href="#">
									<span class="ti-money"></span> Patient payment done</a>
								<a class="dropdown-item" href="#">
									<span class="ti-time"></span>Patient Appointment booked</a>
								<a class="dropdown-item" href="#">
									<span class="ti-wheelchair"></span> New Patient Added</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="ti-user"></span>
							</a>
							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5>John Willing</h5>
								<a class="dropdown-item" href="#">
									<span class="ti-settings"></span> Settings</a>
								<a class="dropdown-item" href="#">
									<span class="ti-help-alt"></span> Help</a>
								<a class="dropdown-item" href="#">
									<span class="ti-power-off"></span> Logout</a>
							</div>
						</li>
					</ul>
				
				</div>
			</nav>
			<!-- /Top Navigation -->
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Patients</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">						
						<li class="breadcrumb-item">
							<a href="index.html">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Patients</li>
						<li class="breadcrumb-item active">All Patients</li>
					</ol>
				</div>
			</div>
			<!-- /Page Title -->

			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container-fluid">

				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Patients List</h3>							
							<div class="table-responsive mb-3">
								<table id="tableId" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th class="no-sort">
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="select-all">
													<label class="custom-control-label" for="select-all"></label>
												</div>
											</th>
											<th>Patient ID</th>
											<th>Patient Name</th>
											<th>Age</th>
											<th>Phone</th>
											<th>last Visit</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="1">
													<label class="custom-control-label" for="1"></label>
												</div>
											</td>
											<td>1</td>
											<td>Manoj Kumar</td>
											<td>30</td>
											<td>333-444-7777</td>
											<td>12-03-2018</td>
											<td>
												<span class="badge badge-success">Completed</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="2">
													<label class="custom-control-label" for="2"></label>
												</div>
											</td>
											<td>2</td>
											<td>Riya </td>
											<td>26</td>
											<td>3423-232-987</td>
											<td>12-10-2018</td>
											<td>
												<span class="badge badge-warning">Pending</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="3">
													<label class="custom-control-label" for="3"></label>
												</div>
											</td>
											<td>3</td>
											<td>Paul</td>
											<td>46</td>
											<td>3423-132-987</td>
											<td>45-10-2018</td>
											<td>
												<span class="badge badge-danger">Cancelled</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="4">
													<label class="custom-control-label" for="4"></label>
												</div>
											</td>
											<td>4</td>
											<td>Manoj Kumar</td>
											<td>30</td>
											<td>333-444-7777</td>
											<td>12-03-2018</td>
											<td>
												<span class="badge badge-success">Completed</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="5">
													<label class="custom-control-label" for="5"></label>
												</div>
											</td>
											<td>5</td>
											<td>Riya </td>
											<td>26</td>
											<td>3423-232-987</td>
											<td>12-10-2018</td>
											<td>
												<span class="badge badge-warning">Pending</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="6">
													<label class="custom-control-label" for="6"></label>
												</div>
											</td>
											<td>6</td>
											<td>Paul</td>
											<td>46</td>
											<td>3423-132-987</td>
											<td>45-10-2018</td>
											<td>
												<span class="badge badge-danger">Cancelled</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="7">
													<label class="custom-control-label" for="7"></label>
												</div>
											</td>
											<td>7</td>
											<td>Manoj Kumar</td>
											<td>30</td>
											<td>333-444-7777</td>
											<td>12-03-2018</td>
											<td>
												<span class="badge badge-success">Completed</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="8">
													<label class="custom-control-label" for="8"></label>
												</div>
											</td>
											<td>8</td>
											<td>Riya </td>
											<td>26</td>
											<td>3423-232-987</td>
											<td>12-10-2018</td>
											<td>
												<span class="badge badge-warning">Pending</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="9">
													<label class="custom-control-label" for="9"></label>
												</div>
											</td>
											<td>9</td>
											<td>Paul</td>
											<td>46</td>
											<td>3423-132-987</td>
											<td>45-10-2018</td>
											<td>
												<span class="badge badge-danger">Cancelled</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="10">
													<label class="custom-control-label" for="10"></label>
												</div>
											</td>
											<td>10</td>
											<td>Manoj Kumar</td>
											<td>30</td>
											<td>333-444-7777</td>
											<td>12-03-2018</td>
											<td>
												<span class="badge badge-success">Completed</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="11">
													<label class="custom-control-label" for="11"></label>
												</div>
											</td>
											<td>11</td>
											<td>Riya </td>
											<td>26</td>
											<td>3423-232-987</td>
											<td>12-10-2018</td>
											<td>
												<span class="badge badge-warning">Pending</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="12">
													<label class="custom-control-label" for="12"></label>
												</div>
											</td>
											<td>12</td>
											<td>Paul</td>
											<td>46</td>
											<td>3423-132-987</td>
											<td>45-10-2018</td>
											<td>
												<span class="badge badge-danger">Cancelled</span>
											</td>
										</tr>
									</tbody>
								</table>
								<!--Export links-->
								<nav aria-label="Page navigation example">
									<ul class="pagination justify-content-center export-pagination">
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-download"></span> csv</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-printer"></span>  print</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-align-justify"></span> Excel</a>
										</li>
									</ul>
								</nav>
								<!-- /Export links-->
								<button type="button" class="btn btn-danger mt-3 mb-0"><span class="ti-trash"></span> DELETE</button>
								<button type="button" class="btn btn-primary mt-3 mb-0"><span class="ti-pencil-alt"></span> EDIT</button>
							</div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
			</div>
			<!-- /Main Content -->
		</div>
@endsection