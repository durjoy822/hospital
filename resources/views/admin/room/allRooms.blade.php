@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Allotments</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Allotments</li>
                <li class="breadcrumb-item active">All Allotments</li>
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
                    <h3 class="widget-title">Allotments List</h3>
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
                                    <th>id</th>
                                    <th>Room</th>
                                    <th>Room Type</th>
                                    <th>Patient ID</th>
                                    <th>Allotment Date</th>
                                    <th>Discharge Date</th>
                                    <th>Doctor Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($rooms as $room)
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="1">
                                            <label class="custom-control-label" for="1"></label>
                                        </div>
                                    </td>
                                    <td>{{$room->id}}</td>
                                    <td>{{$room->room_number}}</td>
                                    <td>
                                        @if($room->room_type==1)
                                            ICU
                                            @elseif($room->room_type==2)
                                            General
                                            @else
                                            AC Room
                                        @endif

                                    </td>
                                    <td>{{$room->patient_id}}</td>
                                    <td>{{$room->allotment_date}}</td>
                                    <td>{{$room->discharge_date}}</td>
                                    <td>{{$room->doctor_name}}</td>
                                    <td>
                                        @if($room->status==1)
                                            <a href=""> <span class="badge badge-success">Available</span></a>
                                        @elseif($room->room_type==2)
                                            <a href=""> <span class="badge badge-warning">Not Discharged</span></a>
                                        @else
                                            <a href=""> <span class="badge badge-danger">Not Alloted</span></a>
                                        @endif

                                    </td>
                                    <td>
                                        <a href=""><button class="btn btn-info">Edit</button></a>

                                        <form action="" method="post" style="display: inline" >@csrf
                                            <input type="hidden" name="id" value="">
                                            <input type="submit" value="Delete" class="btn  btn-danger">
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
