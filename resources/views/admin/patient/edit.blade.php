@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Edit Patient</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Patients</li>
                <li class="breadcrumb-item active">Add Patient</li>
            </ol>
        </div>
    </div>
    <!-- /Page Title -->

    <!-- /Breadcrumb -->
    <!-- Main Content -->
    <div class="container-fluid">
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
                    <h3 class="widget-title">Edit Patient</h3>
                    <form action="{{ route('admin.patientUpdate') }}" method="post">@csrf
                        <input type="hidden" value="{{ $patients->id }}" name="id">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="patient-name">Patient Name</label>
                                <input type="text" class="form-control" value="{{ $patients->patient_name }}"
                                    name="patient_name" placeholder="Patient name" id="patient-name">
                                @error('patient_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="age">Age</label>
                                <input type="text" placeholder="Age" value="{{ $patients->age }}" name="age"
                                    class="form-control" id="age">
                                    @error('age')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone</label>
                                <input type="text" placeholder="Phone" value="{{ $patients->phone }}" name="phone"
                                    class="form-control" id="phone">
                                    @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="dob"> Visit Date</label>
                                <input type="date" placeholder="Visited date" value="{{ $patients->date }}"
                                    name="date" class="form-control" id="dob">
                                    @error('date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="status">Status</label>
                                <select class="form-control" value="{{ $patients->status }}" name="status" id="status">
                                    <option {{ $patients->status == 1 ? 'selected' : '' }} value="1">Completed</option>
                                    <option {{ $patients->status == 2 ? 'selected' : '' }} value="2">pending</option>
                                    <option {{ $patients->status == 0 ? 'selected' : '' }} value="0">Cancelled
                                    </option>
                                </select>
                            </div>
                            <div class="form-check col-md-12 mb-2">
                                <div class="text-left">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="ex-check-2">
                                        <label class="custom-control-label" for="ex-check-2">Please Confirm</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Widget Item -->
        </div>
    </div>
@endsection
