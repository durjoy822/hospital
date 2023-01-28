@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Appointments</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Appointments</li>
                <li class="breadcrumb-item active">Appointments Request List</li>
            </ol>
        </div>
    </div>
    <!-- /Page Title -->

    <!-- /Breadcrumb -->
    <!-- Main Content -->
    <div class="container-fluid">
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if (Session::has('warning'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('warning') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        <div class="row">
            <!-- Widget Item -->
            <div class="col-md-12">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Appointments Request List</h3>
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
                                    <th>ID</th>
                                    <th>Patient Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Age</th>
                                    <th>Doctor Name</th>
                                    <th>Problem</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $appointment)
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="{{ $appointment->id }}">
                                                <label class="custom-control-label" for="1"></label>
                                            </div>
                                        </td>
                                        <td>{{ $appointment->id }}</td>
                                        <td>{{ $appointment->name }}</td>
                                        <td>{{ $appointment->email }}</td>
                                        <td>{{ $appointment->phone }}</td>
                                        <td>{{ $appointment->age }}</td>
                                        @php $dname = \App\Models\Doctor::where('id',$appointment->doctor)->first(); @endphp
                                        <td><a href="{{ route('doctor.show', $dname->id) }}">{{ $dname->name }}</a></td>
                                        <td>{{ $appointment->message }}</td>
                                        <td>
                                            <span class="badge badge-success">{{ $appointment->status }}</span>

                                        </td>
                                        <td>
                                            <a href="{{route('confirm.appointment', $appointment->id)}}" class="btn btn-info btn-sm">Confirm Appointment</a>
                                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!--Export links-->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center export-pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#"><span class="ti-download"></span> csv</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><span class="ti-printer"></span> print</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><span class="ti-align-justify"></span> Excel</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- /Widget Item -->
        </div>
    </div>
@endsection
