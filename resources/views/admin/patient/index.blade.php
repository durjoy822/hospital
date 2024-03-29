@extends('admin.layouts.master')
@section('content')
<div id="content">
	<div class="row no-margin-padding">
		<div class="col-md-6">
			<h3 class="block-title">Patients </h3>
		</div>
		<div class="col-md-6">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="{{route('admin.dashboard')}}">
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
		@if(Session::has('success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>{{Session::get('success')}}</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div>
		@endif
		@if(Session::has('warning'))
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>{{Session::get('warning')}}</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div>
		@endif
		<div class="row">
			<!-- Widget Item -->
			<div class="col-md-12">
				<div class="widget-area-2 proclinic-box-shadow">
					<h3 class="widget-title">Patients List</h3>
					<div class="table-responsive mb-3">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
									<th>Action</th>
								</tr>
                            </thead>
                            <tfoot>
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
									<th>Action</th>
								</tr>
                            </tfoot>
                            <tbody>
                                @foreach($patients as $patient)
								<tr>
									<td>
										<div class="custom-control custom-checkbox">
											<input class="custom-control-input" type="checkbox" id="1">
											<input type="hidden" value="{{$patient->id}}">
											<label class="custom-control-label" for="1"></label>
										</div>
									</td>
									<td>{{$patient->id}}</td>
									<td><a href="{{route('patient.details',[$patient->id])}}">{{$patient->patient_name}}</a></td>
									<td>{{$patient->age}}</td>
									<td>{{$patient->phone}}</td>
									<td>
										<a href="{{route('admin.patientEdit',['id'=>$patient->id])}}"><button class="btn btn-primary"><span class="ti-pencil-alt"></span> EDIT</button></a>

										<form action="{{route('admin.patientDelete')}}" method="post" style="display: inline">@csrf
											<input type="hidden" name="id" value="{{$patient->id}}">
											<button type="button" class="btn btn-danger" onclick="return confirm('Are you sure? you want to delete this?');"><span class="ti-trash"></span> DELETE</button>
										</form>
									</td>
								</tr>
								@endforeach
                            </tbody>
                        </table>
					</div>
				</div>
			</div>
			<!-- /Widget Item -->
		</div>
	</div>
	<!-- /Main Content -->
</div>
@endsection
