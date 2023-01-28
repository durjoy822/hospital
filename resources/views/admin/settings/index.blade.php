@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Setting </h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('admin.dashboard')}}">
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
                    <span class="widget-title h3">Setting List</span>
                    <a href="{{route('setting.add')}}"><span class=" btn btn-primary float-right">Add Setting</span></a>
                    <div class="table-responsive mb-3">
                        <table id="tableId" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="no-sort">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="select-all">
                                            <label class="custom-control-label" for="select-all"></label>
                                        </div>
                                    </th>
                                    <th>SL</th>
                                    <th>logo</th>
                                    <th>Details</th>
                                    <th>time</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Country</th>
                                    <th>Link_1</th>
                                    <th>Link_2</th>
                                    <th>Link_3</th>
                                    <th>Link_4</th>
                                    <th>Link_5</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Copyright</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($settings as $setting)
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="">
                                                <label class="custom-control-label" for="1"></label>
                                            </div>
                                        </td>
                                        <td>{{$setting->id}}</td>
                                        <td>
                                            <img src="{{asset($setting->logo)}}" class="img-fluid" style="width: 100px">
                                        </td>
                                        <td>{{$setting->details}}</td>
                                        <td>{{$setting->time}}</td>
                                        <td>{{$setting->address}}</td>
                                        <td>{{$setting->city}}</td>
                                        <td>{{$setting->country}}</td>
                                        <td>{{$setting->link_one}}</td>
                                        <td>{{$setting->link_two}}</td>
                                        <td>{{$setting->link_three}}</td>
                                        <td>{{$setting->link_four}}</td>
                                        <td>{{$setting->link_five}}</td>
                                        <td>{{$setting->phone}}</td>
                                        <td>{{$setting->email}}</td>
                                        <td>{{$setting->copyright}}</td>
                                        <td>
                                            <a href="{{route('setting.edit',['id'=>$setting->id])}}" class="btn btn-primary"><span class="ti-pencil-alt"></span> EDIT</a>
                                            <form action="{{route('setting.delete')}}" method="post" style="display: inline">@csrf
                                                <input type="hidden" value="{{$setting->id}}" name="id">
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
                    </div>
                </div>
            </div>
            <!-- /Widget Item -->
        </div>
    </div>
@endsection
