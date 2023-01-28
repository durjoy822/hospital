@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Add Settings</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('admin.dashboard')}}">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Settings </li>
                <li class="breadcrumb-item active">Add Settings</li>
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
                    <h3 class="widget-title">Add Settings</h3>
                    <form action="{{ route('setting.update') }}"method="POST" enctype="multipart/form-data">@csrf
                        <input type="hidden" name="id" value="{{$setting->id}}">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="details">Details</label>
                                <textarea placeholder="Input details" class="form-control" name="details"  id="details" cols="3" rows="3" >{{$setting->details}}</textarea>
                                @error('details')
                                <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6" >
                                <label for="appointment-date">Time</label>
                                <input type="time" class="form-control" value="{{$setting->time}}" id="time" name="time">
                                @error('time')
                                <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="address">Address</label>
                                <textarea placeholder='address' class="form-control" name="address"  id="address" cols="3" rows="3" >{{$setting->address}}" </textarea>
                                @error('address')
                                <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="patient-name">City</label>
                                <input type="text" class="form-control" value="{{$setting->city}}"  placeholder="City" id="city" name='city'>
                                @error('city')
                                <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" value="{{$setting->country}}"  placeholder="country" id="country" name='country'>
                                @error('country')
                                <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="link1">link_1</label>
                                <input type="text" class="form-control" value="{{$setting->link_one}}"  placeholder="link_1" id="link1" name='link_one'>
                                @error('link_1')
                                <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="link2">link_2</label>
                                <input type="text" class="form-control" value="{{$setting->link_two}}"  placeholder="link_2" id="link2" name='link_two'>
                                @error('link_2')
                                <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="link1">link_3</label>
                                <input type="text" class="form-control" value="{{$setting->link_three}}"  placeholder="link_3" id="link3" name='link_three'>
                                @error('link_3')
                                <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="link1">link_4</label>
                                <input type="text" class="form-control" value="{{$setting->link_four}}"  placeholder="link_4" id="link4" name='link_four'>
                                @error('link_4')
                                <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="link1">link_5</label>
                                <input type="text" class="form-control" placeholder="link_5" value="{{$setting->link_five}}"  id="link5" name='link_five'>
                                @error('link_5')
                                <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" value="{{$setting->phone}}"  placeholder="phone" id="phone"
                                       name='phone'>
                                @error('phone')
                                <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" value="{{$setting->email}}"  placeholder="Email" id="email" name='email'>
                                @error('email')
                                <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="copy_r8">copyright</label>
                                <input type="text" class="form-control" value="{{$setting->copyright}}"  placeholder="Copyright" id="copy_r8" name='copy_r8'>
                                @error('copy_r8')
                                <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="logo">Logo</label>
                                <input type="file" class="form-control"  id="logo"
                                       name='logo'>
                                Old Logo: <img src="{{asset($setting->logo)}}" class="img-fluid" style="width: 70px">
                                @error('logo')
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
