@extends('admin.layouts.master')
@section('content')
<div class="row no-margin-padding">
    <div class="col-md-6">
        <h3 class="block-title">Add Room Allotment</h3>
    </div>
    <div class="col-md-6">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">
                    <span class="ti-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">Room Allotments</li>
            <li class="breadcrumb-item active">Add Room Allotment</li>
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
                <h3 class="widget-title">Add Room Allotment</h3>
                <form action="{{route('admin.roomSave')}}" method="post" >@csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="room-number">Room Number</label>
                            <input type="text" name="room_number"  value="{{ old('room_number') }}" class="form-control" placeholder="Room Number" id="room-number">
                            @error('room_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="room-type">Room Type</label>
                            <select class="form-control"  value="{{ old('room_type') }}" name="room_type" id="room-type" required>
                                <option value="1">ICU</option>
                                <option value="2">General</option>
                                <option value="3">AC Room</option>
                            </select>
                            @error('room_type')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="patient-name">Patient ID</label>
                            <input type="text"  value="{{ old('patient_id') }}" name="patient_id" placeholder="Patient_ID" class="form-control" id="patient-name">
                            @error('patient_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="allot-date">Allotment Date</label>
                            <input type="date"  value="{{ old('allotment_date') }}" name="allotment_date" placeholder="Allotment Date" class="form-control" id="allot-date">
                            @error('allotment_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="discharge-date">Discharge Date</label>
                            <input type="date" name="discharge_date"  value="{{ old('discharge_date') }}" placeholder="Discharge Date" class="form-control" id="discharge-date">
                            @error('discharge_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="doctor_name">Doctor Name</label>
                            <select class="form-control"  value="{{ old('doctor_name') }}" name="doctor_name" id="doctor_name" required>
                                <option selected>Slect Doctor</option>
                                @foreach($doctors as $doctor)
                                <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="status">Room Status</label>
                            <select class="form-control" value="{{ old('status') }}" name="status" id="status" required>
                                <option value="1">Available</option>
                                <option value="2">Not Discharged</option>
                                <option value="3">Not Alloted</option>
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
                            <button type="submit" class="btn btn-primary btn-lg">Allot Room</button>
                        </div>
                    </div>
                </form>
                <!-- Alerts-->
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Successfully Done!</strong> Please check in Allotment list
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!-- /Alerts-->
            </div>
        </div>
        <!-- /Widget Item -->
    </div>
</div>
@endsection
