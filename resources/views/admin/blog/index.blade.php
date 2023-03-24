@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Blog</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Blog</li>
                <li class="breadcrumb-item active">All Blog</li>
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
                <div class="widget-area-2 proclinic-box-shadow ">
                    <div class="card-header">
                        <div class="row widget-title">
                            <div class="col-md-8">
                                <h3>All Posts</h3>
                            </div>
                            <div class="col-md-4 text-md-right"><a href="{{ route('blog.create') }}"
                                    class="btn btn-primary btn-sm mb-0" style="float: right;">New Blog</a></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="no-sort">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="select-all">
                                                <label class="custom-control-label" for="select-all"></label>
                                            </div>
                                        <th>Picture</th>
                                        <th>Title</th>
                                        <th>Details</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th class="no-sort">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="select-all">
                                                <label class="custom-control-label" for="select-all"></label>
                                            </div>
                                        <th>Picture</th>
                                        <th>Title</th>
                                        <th>Details</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($blogs as $blog)
                                        <tr>
                                            <td class="no-sort">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="1">
                                                    <label class="custom-control-label" for="1"></label>
                                                </div>
                                            </td>
                                            <td><img src="{{ asset($blog->picture) }}" style="width:100px"></td>
                                            <td><a href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a>
                                            </td>
                                            <td><a href="{{ route('blog.show', $blog->id) }}">{{ \Illuminate\Support\Str::limit($blog->details, 120) }}</a></td>
                                            <td>
                                                <a href="{{ route('blog.edit', $blog->id) }}"><button
                                                        class="btn btn-primary btn-sm"><span class="ti-pencil-alt"></span>
                                                        EDIT</button></a>
                                                <a href="{{ route('blog.destroy', $blog->id) }}"
                                                    class="btn btn-danger btn-sm"><span class="ti-trash"></span>
                                                    DELETE</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Widget Item -->
        </div>
    </div>
@endsection
