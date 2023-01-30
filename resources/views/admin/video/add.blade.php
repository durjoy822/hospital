@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Add Video</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('admin.dashboard')}}">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Video</li>
                <li class="breadcrumb-item active">Add Video</li>
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
                    <h3 class="widget-title">Add Video</h3>
                    <form action="{{route('video.store')}}" method="post" enctype="multipart/form-data">@csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="title">Title</label>
                                <input type="text"  name="title" value="{{ old('title') }}" class="form-control" placeholder="Title" id="title">
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                                <div class="form-group col-md-12">
                                    <label for="details">Details</label>
                                    <textarea name="details" value="{{ old('details') }}" class="form-control" placeholder="Inter your  Details" rows="5" cols="5"></textarea>
                                    @error('details')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="video">Video_link</label>
                                    <input type="text"  name="video" value="{{ old('video') }}" class="form-control" placeholder="Video link" id="video">
                                    @error('video')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            <div class="form-group col-md-6">
                                <label for="details">signature</label>
                                <input type="file" name="signature"  class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="details">Image_one</label>
                                <input type="file" name="image_one"  class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="details">Image_two</label>
                                <input type="file" name="image_two"  class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="details">Image_three</label>
                                <input type="file" name="image_three"  class="form-control">
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

