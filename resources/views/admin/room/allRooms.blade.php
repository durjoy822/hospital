@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Allotments</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('admin.dashboard')}}">
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

                <div class="widget-area-2 proclinic-box-shadow card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="row">
                            <h3 class="widget-title">Allotments List</h3>
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
                                <tfoot>
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
                                </tfoot>
                                <tbody>
                                    @foreach ($rooms as $room)
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="1">
                                                <label class="custom-control-label" for="1"></label>
                                            </div>
                                        </td>
                                        <td>{{ $room->id }}</td>
                                        <td>{{ $room->room_number }}</td>
                                        <td>
                                            @if ($room->room_type == 1)
                                                ICU
                                            @elseif($room->room_type == 2)
                                                General
                                            @else
                                                AC Room
                                            @endif
                                        </td>
                                        @php $pname = \App\Models\Patient::where('id',$room->patient_id)->first(); @endphp
                                        <td><a href="{{ route('patient.details', [$pname->id]) }}">{{ $pname->patient_name }}</a>
                                        </td>
                                        <td>{{ $room->allotment_date }}</td>
                                        <td>{{ $room->discharge_date }}</td>
                                        @php $dname = \App\Models\Doctor::where('id',$room->doctor_name)->first(); @endphp
                                        <td><a href="{{ route('doctor.show', $dname->id) }}">{{ $dname->name }}</a></td>
                                        <td>
                                            @if ($room->status == 1)
                                                <span class="badge badge-success">Available</span>
                                            @elseif($room->room_type == 2)
                                                <span class="badge badge-warning">Not Discharged</span>
                                            @else
                                                <span class="badge badge-danger">Not Alloted</span>
                                            @endif

                                        </td>
                                        <td>
                                            <a href="{{ route('admin.roomEdit', ['id' => $room->id]) }}"><button
                                                    class="btn btn-info">Edit</button></a>

                                            <form action="{{ route('admin.roomDelete') }}" method="post"
                                                style="display: inline">@csrf
                                                <input type="hidden" name="id" value="{{ $room->id }}">
                                                <input type="submit" value="Delete" class="btn  btn-danger"
                                                    onclick="return confirm('Are you sure? you want to delete this?');">
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
