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
                    <h3 class="widget-title">Edit Sponsors</h3>
                    <form action="{{ route('admin.sponsor.update',$sponsor->id) }}" method="POST" enctype="multipart/form-data">@csrf
                        <div class="row">
                            <div class="col-sm-6 col-md-4 form-group">
                                <label for="name">Name</label>
                                <input  type="text" class="form-control" name="name" id="name"
                                    value="{{ $sponsor->name }}">
                            </div>

                            <div class="col-sm-6 col-md-4 form-group">
                                <label for="logo">Logo</label>
                                <input  type="file" class="form-control" name="logo" id="logo">
                            </div>
                            <div class="col-sm-6 col-md-4 form-group">
                                <label for="link">Link</label>
                                <input  type="text" class="form-control" name="link" id="link" value="{{$sponsor->link}}">
                            </div>
                        </div>

                        <div class="col-sm-12 form-group mb-0">
                            <button class="btn btn-primary float-right">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Widget Item -->
        </div>
    </div>


@endsection
