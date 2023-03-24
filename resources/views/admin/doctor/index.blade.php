@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Doctors</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">
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
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="row">
                            <h3 class="widget-title">Doctors List</h3>
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
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Specialization</th>
                                        <th>Email</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Working_days</th>
                                        <th>Fees</th>
                                        <th>Availability</th>
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
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Specialization</th>
                                        <th>Email</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Working_days</th>
                                        <th>Fees</th>
                                        <th>Availability</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($doctors as $doctor)
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="1">
                                                    <label class="custom-control-label" for="1"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="{{ route('doctor.show', $doctor->id) }}"><img class="img-fluid"
                                                        style="width: 100px; height:50px"
                                                        src="{{ asset($doctor->photo) }}"></a>
                                            </td>
                                            <td><a href="{{ route('doctor.show', $doctor->id) }}">{{ $doctor->name }}</a>
                                            </td>
                                            <td>{{ $doctor->phone }}</td>
                                            @php $spec = \App\Models\Department::find($doctor->specialization); @endphp
                                            <td>
                                                @if (isset($spec))
                                                    {{ $spec->name }}
                                                @else
                                                    Department need update
                                                @endif
                                            </td>
                                            <td>{{ $doctor->email }}</td>
                                            <td>{{ $doctor->age }} year</td>
                                            <td style="text-transform:capitalize">{{ $doctor->gender }}</td>
                                            @php $d=json_decode($doctor->working_days); @endphp
                                            <td>
                                                @if (isset($d))
                                                    @foreach ($d as $day)
                                                        @if ($day == 6)
                                                            Saturday
                                                        @elseif($day == 0)
                                                            Sunday
                                                        @elseif($day == 1)
                                                            Monday
                                                        @elseif($day == 2)
                                                            Tuesday
                                                        @elseif($day == 3)
                                                            Wednesday
                                                        @elseif($day == 4)
                                                            Thrusday
                                                        @elseif($day == 5)
                                                            Friday
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td>{{ $doctor->fees }} tk.</td>
                                            <td>
                                                @if ($doctor->availability == 0)
                                                    <a href="{{ route('doctor.status', ['id' => $doctor->id]) }}"><button
                                                            class="btn btn-warning btn-sm"><span
                                                                class="fas fa-user-alt-slash"></span> Unabailable</button>
                                                    </a>
                                                @else
                                                    <a href="{{ route('doctor.status', ['id' => $doctor->id]) }}"><button
                                                            class="btn btn-success btn-sm"><span
                                                                class="fas fa-user-check"></span> Abailable</button></a>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('doctor.edit', $doctor->id) }}"><button
                                                        class="btn btn-primary btn-sm"><span class="ti-pencil-alt"></span>
                                                        EDIT</button></a>
                                                <form action="{{ route('doctor.destroy', $doctor->id) }}" method="post"
                                                    style="display: inline">@csrf @method('DELETE')
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
