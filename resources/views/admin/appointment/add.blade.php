@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Add Appointment</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('admin.dashboard')}}">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Appointments</li>
                <li class="breadcrumb-item active">Add Appointment</li>
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
                    <h3 class="widget-title">Add Appointment</h3>
                    <form action="{{ route('appointment.store') }}"method="POST">@csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="patient-name">Patient ID</label>
                                <input type="text" class="form-control" placeholder="Patient ID" id="patient-id"
                                    name='patientId'>
                                @error('patientId')
                                    <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="department">Department</label>
                                <select class="form-control" id="department" name="department">
                                    <option disabled selected>Select a department</option>
                                    @foreach ($speciallist as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('department')
                                    <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="doctorName">Doctor Name</label>
                                <select class="form-control" id="doctorName" name="doctor">
                                    <option disabled selected>Select your Doctor</option>
                                </select>
                                @error('doctor')
                                    <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6" name="date">
                                <label for="appointment-date">Appointment Date</label>
                                <input type="date" placeholder="Appointment Date" class="form-control"
                                    id="appointment-date" name="date">
                                @error('date')
                                    <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="time-slot">Time Slot</label>
                                <select class="form-control" id="time-slot" name="time">
                                    <option value="1">10AM-11AM</option>
                                    <option value="2">11AM-12pm</option>
                                    <option value="3">12PM-01PM</option>
                                    <option value="4">2PM-3PM</option>
                                    <option value="5">3PM-4PM</option>
                                    <option value="6">4PM-5PM</option>
                                    <option value="7">6PM-7PM</option>
                                    <option value="8">7PM-8PM</option>
                                    <option value="9">8PM-9PM</option>
                                </select>
                                @error('time')
                                    <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="patient-name">Contact No</label>
                                <input type="text" class="form-control" placeholder="Phone" id="patient-id"
                                    name='phone'>
                                @error('phone')
                                    <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status">
                                        <option value="Active">Active</option>
                                        <option value="Visited">Visited</option>
                                        <option value="Pending">Cancled</option>
                                </select>
                                @error('status')
                                    <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="problem">Problem</label>
                                <textarea placeholder="Problem" class="form-control" id="problem" rows="3" name="problem"></textarea>
                                @error('problem')
                                    <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
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
