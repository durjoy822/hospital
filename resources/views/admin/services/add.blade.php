@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Add Service</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('admin.dashboard')}}">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Service</li>
                <li class="breadcrumb-item active">Add Service</li>
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
                    <h3 class="widget-title">Add Service</h3>
                    <form action="{{route('service.store')}}" method="post" >@csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="title">Title </label>
                                <input type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="Service title" id="title">
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="title">Section </label>
                                <select class="form-control" name="section">
                                    <option value="0">Upper Carousel</option>
                                    <option value="1">Service</option>
                                </select>
                                @error('section')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="icone">Icon </label>
                                <input type="text" name="icon" value="{{ old('icon') }}" class="form-control" placeholder="service icon" id="icon">
                                @error('icon')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="details">Service Details</label>
                                <textarea placeholder="Service Details" value="{{ old('details') }}" name="details" class="form-control" id="details" rows="3"></textarea>
                                @error('details')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-12 mb-3">
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

