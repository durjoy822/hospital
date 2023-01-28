@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Carousel</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Carousel</li>
                <li class="breadcrumb-item active">All Carousel</li>
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
                    <div class="row widget-title">
                        <div class="col-md-8"><h3>Carousel List</h3></div>
                        <div class="col-md-4 text-md-right"><a href="{{route('carousel.add')}}" class="btn btn-sm btn-info">Add Carousel</a></div>
                    </div>
                    <div class="table-responsive mb-3">
                        <table id="tableId" class="table table-bordered table-striped table-responsive overflow-scroll">
                            <thead>
                            <tr>
                                <th class="no-sort">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="select-all">
                                        <label class="custom-control-label" for="select-all"></label>
                                    </div>
                                </th>
                                <th>sl</th>
                                <th>image</th>
                                <th>Heading</th>
                                <th>Title</th>
                                <th>Details</th>
                                <th>Btn1_Name</th>
                                <th>Btn1_Link</th>
                                <th>Btn2_Name</th>
                                <th>Btn2_Link</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($caro as $item)
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="1">
                                            <label class="custom-control-label" for="1"></label>
                                        </div>
                                    </td>
                                    <td>{{$item->id}}</td>
                                    <td>
                                        @if($item->image)
                                        <img src="{{asset($item->image)}}" style="width: 100px" class="img-fluid">
                                        @else
                                        <span class="text-danger"><i class="fa-solid fa-square-xmark" ></i> No image file </span>
                                            @endif
                                    </td>
                                    <td>@if($item->heading !=null){{substr($item->heading,0,50) }}@else<span class="text-danger"><i class="fa-solid fa-square-xmark text-danger" ></i> no heading</span>  @endif </td>
                                    <td>{{substr($item->title,0,50) }}</td>
                                    <td>{{substr($item->details,0,50) }}</td>
                                    <td> @if($item->btnOne_name !=null){{$item->btnOne_name}}@else<span class="text-danger"><i class="fa-solid fa-square-xmark text-danger" ></i> no Name</span>  @endif</td>
                                    <td>@if($item->btnOne_link !=null){{$item->btnOne_link }}@else<span class="text-danger"><i class="fa-solid fa-square-xmark" ></i> no link </span>@endif </td>
                                    <td>@if($item->btnTwo_name !=null){{$item->btnTwo_name }}@else<span class="text-danger"><i class="fa-solid fa-square-xmark" ></i> no name </span>@endif </td>
                                    <td>@if($item->btnTwo_link !=null){{$item->btnOne_link }}@else<span class="text-danger"><i class="fa-solid fa-square-xmark" ></i> no link </span>@endif </td>
                                 <td>
                                        <a href="{{route('carousel.edit',['id'=>$item->id])}}" class="btn btn-small btn-primary"><span class="ti-pencil-alt"></span>Edit</a>
                                        <form action="{{ route('carousel.delete') }}" method="post" style="display: inline">@csrf
                                            <input type="hidden" value="{{$item->id}}" name="id">
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

