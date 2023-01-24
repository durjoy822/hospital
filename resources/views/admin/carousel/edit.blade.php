@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Edit Carousel</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('admin.dashboard')}}">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Carousel</li>
                <li class="breadcrumb-item active">Edit Carousel</li>
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
                    <h3 class="widget-title">Edit Carousel</h3>
                    <form action="{{route('carousel.update')}}" method="post" enctype="multipart/form-data">@csrf
                        <input type="hidden" name="id" value="{{$caro->id}}">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="heading">Heading</label>
                                <input type="text" value="{{$caro->heading}}" name="heading" value="{{ old('heading') }}" class="form-control" placeholder="Carousel  heading" id="heading">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="title">Title</label>
                                <input type="text" name="title" value="{{$caro->title}}" value="{{ old('title') }}" placeholder="Carousel Your title" class="form-control" id="title">
                                @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="carousel_details">Carousel Details</label>
                                <textarea placeholder="carousel_details" name="details" class="form-control" id="carousel_details" rows="3" required>{{ old('details') }}{{$caro->details}}</textarea>
                                @error('details')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="file">Image</label>
                                <input type="file" name="image" class="form-control" id="file" >
                                @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                Old image: <img src="{{asset($caro->image)}}" style="width: 100px" class="img-fluid">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="icon">Icons</label>
                                <input type="text" name="icone"  value="{{$caro->icone}}" placeholder="Icone" class="form-control" id="icone" >
                                @error('icone')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="btn1_name">btnOne_name</label>
                                <input type="text"  value="{{$caro->btnOne_name}}" name="btnOne_name" placeholder="btn1 Name" class="form-control" id="btn1_name" >
                                @error('btnOne_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="btn1_link">btnOne_link</label>
                                <input type="text" value="{{$caro->btnOne_link}}" name="btnOne_link" placeholder="btn1 link" class="form-control" id="btn1_link" >
                                @error('btnOne_link')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="btn2_name">btnTwo_name</label>
                                <input type="text" name="btnTwo_name" value="{{$caro->btnTwo_name}}" placeholder="btn2 Name" class="form-control" id="btn2_name" >
                                @error('btnTwo_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="btn2_link">btnTwo_link</label>
                                <input type="text" name="btnTwo_link"  value="{{$caro->btnTwo_link}}" placeholder="btn2 link" class="form-control" id="btn2_link" >
                                @error('btnTwo_link')
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


