@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Services</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Services</li>
                <li class="breadcrumb-item active">All Services</li>
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
                        <div class="col-md-8">
                            <h3 class="widget-title">Service List</h3>
                        </div>
                        <div class="col-md-4 widget-title">
                            <a href="{{route('service.add')}}" class="btn btn-primary btn-sm mb-0"
                               style="float: right;">Add Service</a>
                        </div>
                    </div>
                    <div class="table-responsive mb-3">
                        <table id="tableId"
                               class="table table-bordered table-striped table-responsive overflow-scroll justify-content-center">
                            <thead>
                            <tr>
                                <th class="no-sort">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="select-all">
                                        <label class="custom-control-label" for="select-all"></label>
                                    </div>
                                <th>SL</th>
                                <th>Section</th>
                                <th>Title</th>
                                <th>Detils</th>
                                <th>Icon</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <td class="no-sort">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="1">
                                            <label class="custom-control-label" for="1"></label>
                                        </div>
                                    </td>
                                    <td>{{$service->id}}</td>
                                    <td>
                                        @if($service->section==1)
                                            Service
                                        @else
                                            Uppercarousel
                                        @endif
                                    </td>
                                    <td>{{$service->title}}</td>
                                    <td>{{ substr($service->details,0,50)}}</td>
                                    <td>{{$service->icon}}</td>
                                    <td>
                                        <a href="{{route('service.edit',['id'=>$service->id])}}" class="btn btn-small btn-primary"><span class="ti-pencil-alt"></span>Edit</a>
                                        <form action="{{route('service.delete')}}" method="post" style="display: inline">@csrf
                                            <input type="hidden" value="{{$service->id}}" name="id">
                                            <button type="submit" class="btn btn-danger"><span class="ti-trash"></span>
                                                DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!--Export links-->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center export-pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#"><span class="ti-download"></span> csv</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><span class="ti-printer"></span> print</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><span class="ti-align-justify"></span> Excel</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- /Export links-->
                        <button type="button" class="btn btn-danger mt-3 mb-0"><span class="ti-trash"></span>
                            DELETE</button>
                        <button type="button" class="btn btn-primary mt-3 mb-0"><span class="ti-pencil-alt"></span>
                            EDIT</button>
                    </div>
                </div>
            </div>
            <!-- /Widget Item -->
        </div>
    </div>
@endsection

