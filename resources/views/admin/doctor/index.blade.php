@extends('admin.layouts.master')
@section('content')
<div class="row no-margin-padding">
    <div class="col-md-6">
        <h3 class="block-title">Doctors</h3>
    </div>
    <div class="col-md-6">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">
                    <span class="ti-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">Doctors</li>
            <li class="breadcrumb-item active">All Doctors</li>
        </ol>
    </div>
</div>
<!-- /Page Title -->

<!-- /Breadcrumb -->
<!-- Main Content -->
<div class="container-fluid">
    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{Session::get('success')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif
    @if(Session::has('warning'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{Session::get('warning')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif
    <div class="row">
        <!-- Widget Item -->
        <div class="col-md-12">
            <div class="widget-area-2 proclinic-box-shadow">
                <h3 class="widget-title">Doctors List</h3>
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
                                <th> ID</th>
                                <th>Doctor Name</th>
                                <th>Date of Birth</th>
                                <th>Experience <small>(in Years)</small></th>
                                <th>Phone</th>
                                <th>Specialization</th>
                                <th>Email</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Photo</th>
                                <th>Details</th>
                                <th>Address</th>
                                <th>Working_days</th>
                                <th>Fees</th>
                                <th>Availability</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($doctors as $doctor)
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="1">
                                        <label class="custom-control-label" for="1"></label>
                                    </div>
                                </td>
                                <td>{{$doctor->id}}</td>
                                <td>{{$doctor->name}}</td>
                                <td>{{$doctor->dob}}</td>
                                <td>{{$doctor->experience}} year</td>
                                <td>{{$doctor->phone}}</td>
                                <td>{{$doctor->specialization}}</td>
                                <td>{{$doctor->email}}</td>
                                <td>{{$doctor->age}} year</td>
                                <td>{{$doctor->gender}}</td>
                                <td>
                                    <img class="img-fluid" style="width: 100px;" src="{{asset($doctor->photo)}}">
                                </td>
                                <td>{{substr($doctor->details ,0,25) }}</td>
                                <td>{{$doctor->address}}</td>
                                <td>{{$doctor->working_days}}</td>
                                <td>{{$doctor->fees}} tk.</td>


                                <td>
                                    <span > {{$doctor->availability==1?'Abailable':'Unabailable'}} </span>
                                </td>
                                <td>
                                    <a href="{{route('doctor.edit',$doctor->id)}}"><button class="btn btn-primary btn-sm"><span class="ti-pencil-alt"></span> EDIT</button></a>
                                    <a href="{{route('doctor.show',$doctor->id)}}"><button class="btn btn-info btn-sm"><span class="ti-pencil-alt"></span> View</button></a>
                                    @if($doctor->availability==0)
                                    <a href="{{route('doctor.status',['id'=>$doctor->id])}}"><button class="btn btn-success btn-sm"><span  class="fas fa-user-check"></span> Abailable</button></a>
                                    @else
                                    <a href="{{route('doctor.status',['id'=>$doctor->id])}}"><button class="btn btn-warning btn-sm"><span  class="fas fa-user-alt-slash"></span> Unabailable</button></a>
                                    @endif
                                    <form action="{{route('doctor.destroy',$doctor->id) }}" method="post" style="display: inline">@csrf @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm"><span class="ti-trash"></span> DELETE</button>
{{--                                        onclick="return confirm('Are you sure? you want to delete this?');--}}
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
                                <a class="page-link" href="#"><span class="ti-printer"></span>  print</a>
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
                    <button type="button" class="btn btn-danger mt-3 mb-0"><span class="ti-trash"></span> DELETE</button>
                    <button type="button" class="btn btn-primary mt-3 mb-0"><span class="ti-pencil-alt"></span> EDIT</button>
                </div>
            </div>
        </div>
        <!-- /Widget Item -->
    </div>
</div>
@endsection
