@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Setting </h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Settings</li>
                <li class="breadcrumb-item active">Setting List</li>
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
                    <div class="row">
                        <div class="col-md-10"><span class="widget-title h3">Sponsors List</span></div>
                        <div class="col-md-2 text-right"><a href="{{route('admin.sponsor.create')}}" class="widget-title text-right">New Sponsors</a></div>
                    </div>
                    <div class="table-responsive mb-3">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Logo</th>
                                    <th>Name</th>
                                    <th>Link</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>SL</th>
                                    <th>Logo</th>
                                    <th>Name</th>
                                    <th>Link</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($sponsors as $key => $sponsor)
                                    <tr>
                                        <th>{{$key + 1 }}</th>
                                        <th><img src="{{asset($sponsor->logo)}}" height="50"></th>
                                        <th>{{$sponsor->name}}</th>
                                        <th>{{$sponsor->link}}</th>
                                        <th>
                                            <a href="{{route('admin.sponsor.edit',$sponsor->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="{{route('admin.sponsor.delete',$sponsor->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /Widget Item -->
        </div>
    </div>
@endsection
