@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Edit Appointment</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Appointments</li>
                <li class="breadcrumb-item active">Edit Appointment</li>
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
                    <h3 class="widget-title">Edit Appointment</h3>
                    <form action="{{ route('appointment.update', $appointment->id) }}"method="POST">
                        @csrf
                        @method('put')
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="patient-name">Patient Name</label>
                                @php $patient = DB::table('patients')->find($appointment->patientId); @endphp
                                <input type="text" value="@if(isset($patient)){{ $patient->patient_name }} @endif" name="patientId"
                                    class="form-control" placeholder="Patient info missmatched" id="patient-id" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="department">Department</label>
                                @php $department = DB::table('departments')->find($appointment->department); @endphp
                                <input type="text" value="@if(isset($department)){{ $department->name }} @endif" placeholder="Department data miss matched"
                                    class="form-control" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="doctorName">Doctor Name</label>
                                @php $doctor = DB::table('departments')->find($appointment->doctor); @endphp
                                <input type="text" value="@if(isset($doctor)){{ $doctor->name }} @endif"
                                    class="form-control" placeholder="Doctor data missmatched" id="patient-id" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="appointment-date">Appointment Date</label>
                                <input type="date" name="date" value="{{ $appointment->date }}"
                                    placeholder="Appointment Date" class="form-control" id="appointment-date">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="time-slot">Time Slot</label>
                                <select class="form-control" name="time" value="{{ $appointment->time }}" id="time-slot">
                                    <option {{ $appointment->time == '1' ? 'selected' : '' }} value="1">10AM-11AM</option>
                                    <option {{ $appointment->time == '2' ? 'selected' : '' }} value="2">11AM-12pm</option>
                                    <option {{ $appointment->time == '3' ? 'selected' : '' }} value="3">12PM-01PM</option>
                                    <option {{ $appointment->time == '4' ? 'selected' : '' }} value="4">2PM-3PM</option>
                                    <option {{ $appointment->time == '5' ? 'selected' : '' }} value="5">3PM-4PM</option>
                                    <option {{ $appointment->time == '6' ? 'selected' : '' }} value="6">4PM-5PM</option>
                                    <option {{ $appointment->time == '7' ? 'selected' : '' }} value="7">6PM-7PM</option>
                                    <option {{ $appointment->time == '8' ? 'selected' : '' }} value="8">7PM-8PM</option>
                                    <option {{ $appointment->time == '9' ? 'selected' : '' }} value="9">8PM-9PM</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="patient-name">Contact No</label>
                                <input type="text" class="form-control" placeholder="Phone" id="patient-id"
                                    name='phone' value="{{$appointment->phone}}">
                                @error('phone')
                                    <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status">
                                        <option value="Active">Active</option>
                                        <option value="Visited">Visited</option>
                                        <option value="Cancled">Cancled</option>
                                </select>
                                @error('status')
                                    <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="problem">Problem</label>
                                <textarea placeholder="Problem" name="problem" class="form-control" id="problem" rows="3">{{ $appointment->problem }}</textarea>
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
                                <button type="submit" class="btn btn-primary btn-lg">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Widget Item -->
        </div>
    </div>
@endsection
