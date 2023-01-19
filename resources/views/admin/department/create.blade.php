@extends('admin.layouts.master')
@section('content')
<div class="row no-margin-padding">
    <div class="col-md-6">
        <h3 class="block-title">Add Depeartment</h3>
    </div>
    <div class="col-md-6">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('admin.dashboard')}}">
                    <span class="ti-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">Depeartment</li>
            <li class="breadcrumb-item active">Add Depeartment</li>
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
                <h3 class="widget-title">Add Department</h3>
                <form action="{{route('department.store')}}" method="post" enctype="multipart/form-data">@csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="DepartmentName">Department Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Department name" id="DepartmentName">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
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
