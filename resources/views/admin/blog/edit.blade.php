@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Add Blog</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Blog</li>
                <li class="breadcrumb-item active">Add Blog</li>
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
                    <h3 class="widget-title">Add Blog</h3>
                    <form action="{{ route('blog.update',$blog->id) }}" method="post" enctype="multipart/form-data">@csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="BlogName">Blog Name</label>
                                <input type="text" name="title" value="{{$blog->title}}" class="form-control"
                                    placeholder="Blog name" id="BlogName">
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="file">File</label>
                                <input type="file" name="picture" class="form-control" id="file">
                                old photo:
                                <img class="img-fluid" style="width: 70px;" src="{{ asset($blog->picture) }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="details">Blog Details</label>
                                <textarea placeholder="Blog Details" name="details" class="form-control" id="about-doctor"
                                    rows="3">{{$blog->details}}</textarea>
                                @error('details')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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
