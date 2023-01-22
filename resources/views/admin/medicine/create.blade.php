@extends('admin.layouts.master')
@section('content')
<div class="row no-margin-padding">
    <div class="col-md-6">
        <h3 class="block-title">Add Medicine</h3>
    </div>
    <div class="col-md-6">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('admin.dashboard')}}">
                    <span class="ti-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">Medicine</li>
            <li class="breadcrumb-item active">Add Medicine</li>
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
                <h3 class="widget-title">Add Medicine</h3>
                <form action="{{route('medicine.store')}}" method="post" enctype="multipart/form-data">@csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Medicine-name">Medicine Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Medicine name" id="Medicine-name">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="price">Price</label>
                            <input type="tel" name="price" value="{{ old('price') }}" placeholder="Price" class="form-control" id="price">
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="file">Picture</label>
                            <input type="file" name="picture" class="form-control" id="file" required>
                            @error('picture')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="quantity">Quantity</label>
                            <input type="number" name="quantity" class="form-control" id="quantity" required>
                            @error('quantity')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label for="about-Medicine">Medicine Details</label>
                            <textarea placeholder="Medicine Details" name="details" class="form-control" id="about-Medicine" rows="3" required>{{ old('details') }}</textarea>
                            @error('details')
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
            </div>
        </div>
        <!-- /Widget Item -->
    </div>
</div>
@endsection
