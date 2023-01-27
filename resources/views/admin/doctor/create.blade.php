@extends('admin.layouts.master')
@section('content')
<div class="row no-margin-padding">
    <div class="col-md-6">
        <h3 class="block-title">Add Doctor</h3>
    </div>
    <div class="col-md-6">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('admin.dashboard')}}">
                    <span class="ti-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">Doctors</li>
            <li class="breadcrumb-item active">Add Doctor</li>
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
                <h3 class="widget-title">Add Doctor</h3>
                <form action="{{route('doctor.store')}}" method="post" enctype="multipart/form-data">@csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Doctor-name">Doctor Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Doctor name" id="Doctor-name">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="dob">Date Of Birth</label>
                            <input type="date"  name="dob" value="{{ old('dob') }} placeholder="Date of Birth" class="form-control" id="dob">
                            @error('dob')
                            <div class="alert alert-danger ">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="specialization">Specialization</label>
                            <select class="form-control" id="specialization" name="specialization">
                                <option disabled selected>Select a department</option>
                                @foreach ($speciallist as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            @error('specialization')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="experience">Experience</label>
                            <input type="text" name="experience" value="{{ old('experience') }}" placeholder="Experience" class="form-control" id="experience">
                            @error('experience')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="age">Age</label>
                            <input type="text" value="{{ old('age') }}" name="age" placeholder="Age" class="form-control" id="age">
                            @error('age')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone" class="form-control" id="phone">
                            @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="email" class="form-control" id="Email">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="gender">Gender</label>
                            <select class="form-control" name="gender" value="{{ old('gender') }}" id="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                            @error('gender')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="about-doctor">Doctor Details</label>
                            <textarea placeholder="Doctor Details" value="{{ old('details') }}" name="details" class="form-control" id="about-doctor" rows="3"></textarea>
                            @error('details')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <textarea placeholder="Address" name="address" value="{{ old('address') }}" class="form-control" id="address" rows="3"></textarea>
                            @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="address">Working Days</label><br>
                            <input type="checkbox" id="sat" name="working_days[]" value="6">
                            <label for="sat"> Saturday</label>

                            <input type="checkbox" id="sun" name="working_days[]" value="0">
                            <label for="sun"> Sunday</label>

                            <input type="checkbox" id="mon" name="working_days[]" value="1">
                            <label for="mon" > Monday</label>

                            <input type="checkbox" id="tue" name="working_days[]" value="2">
                            <label for="tue" > Tuesday</label>

                            <input type="checkbox" id="wed" name="working_days[]" value="3">
                            <label for="wed" > Wednesday</label>

                            <input type="checkbox" id="thu" name="working_days[]" value="4">
                            <label for="thu" > Thursday</label>

                            <input type="checkbox" id="fri" name="working_days[]" value="5">
                            <label for="fri" > Friday</label>
                            @error('working_days')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fees">fees</label>
                            <input type="text" name="fees" value="{{ old('fees') }}" placeholder="fees" class="form-control" id="fees">
                            @error('fees')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="file">File</label>
                            <input type="file" name="photo" class="form-control" id="file">
                            @error('photo')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="availability">Availability</label>
                            <select class="form-control" name="availability" value="{{ old('availability') }}" id="availability">
                                <option value="1">Abailable</option>
                                <option value="0">Unablailable</option>
                            </select>
                            @error('availability')
                            <div class="alert alert-danger">{{ $message }}</div>
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
                <!-- Alerts-->
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Successfully Done!</strong> Please Check in doctors list
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
