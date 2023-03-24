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
                <li class="breadcrumb-item active">Appointments List</li>
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

                <div class="widget-area-2 proclinic-box-shadow card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="row">
                            <h3 class="widget-title">All Appointments</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                        <th>Token Number</th>
                                        <th>Doctor Name</th>
                                        <th>Problem</th>
                                        <th>Status</th>
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
                                        <th>ID</th>
                                        <th>Patient Name</th>
                                        <th>Token Number</th>
                                        <th>Doctor Name</th>
                                        <th>Problem</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
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
                                            @php $pname = \App\Models\Patient::where('id',$appointment->patientId)->first(); @endphp
                                            <td><a href="{{ route('patient.details', [$pname->id]) }}">{{ $pname->patient_name }}<a />
                                            </td>
                                            <td>{{ $appointment->token }}</td>
                                            @php $dname = \App\Models\Doctor::where('id',$appointment->doctor)->first(); @endphp
                                            <td><a href="{{ route('doctor.show', $dname->id) }}">{{ $dname->name }}</a>
                                            </td>
                                            <td>{{ $appointment->problem }}</td>
                                            <td>
                                                <span class="badge badge-success">{{ $appointment->status }}</span>
                                            </td>
                                            <td>
                                                <a href="{{ route('appointment.edit', $appointment->id) }}"
                                                    class="btn btn-primary"><span class="ti-pencil-alt"></span> EDIT</a>
                                                <form action="{{ route('appointment.destroy', $appointment->id) }}"
                                                    method="post" style="display: inline">@csrf @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><span
                                                            class="ti-trash"></span>
                                                        DELETE</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Widget Item -->
        </div>
    </div>
@endsection
