@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Departments</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('admin.dashboard')}}">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Departments</li>
                <li class="breadcrumb-item active">All Departments</li>
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
                <div class="widget-area-2 proclinic-box-shadow card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="widget-title">Departments List</h3>
                            </div>
                            <div class="col-md-4 widget-title">
                                <a href="{{route('department.create')}}" class="btn btn-primary btn-sm mb-0" style="float: right;">New Department</a>
                            </div>
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
                                        <th>Department Name</th>
                                        <th>Details</th>
                                        <th>Image</th>
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
                                        <th>Department Name</th>
                                        <th>Details</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($departments as $department)
                                        <tr>
                                            <td class="no-sort">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="1">
                                                    <label class="custom-control-label" for="1"></label>
                                                </div>
                                            </td>
                                            <td><a
                                                    href="{{ route('department.show', $department->id) }}">{{ $department->name }}</a>
                                            </td>
                                            <td>{{ substr($department->details, 0, 100) }}</td>
                                            <td>
                                                <img src="{{ asset($department->image) }}" width="100px" class="img-fluid">
                                            </td>
                                            <td>
                                                <a href="{{ route('department.edit', $department->id) }}"><button
                                                        class="btn btn-primary btn-sm"><span class="ti-pencil-alt"></span>
                                                        EDIT</button></a>
                                                <form action="{{ route('department.destroy', $department->id) }}"
                                                    method="post" style="display: inline">@csrf @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><span
                                                            class="ti-trash"></span> DELETE</button>
                                                </form>
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
