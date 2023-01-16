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
                                    <th>Photo</th>
                                    <th>Doctor Name</th>
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
                                                    style="width: 100px; height:50px" src="{{ asset($doctor->photo) }}"></a>
                                        </td>
                                        <td><a href="{{ route('doctor.show', $doctor->id) }}">{{ $doctor->name }}</a></td>
                                        <td>{{ $doctor->phone }}</td>
                                        <td>
                                            @php $spec = \App\Models\Department::find($doctor->specialization); @endphp
                                            {{ $spec->name }}</td>
                                        <td>{{ $doctor->email }}</td>
                                        <td>{{ $doctor->age }} year</td>
                                        <td>{{ $doctor->gender }}</td>
                                        @php $d=json_decode($doctor->working_days); @endphp
                                        <td>
                                            @foreach ($doctor as $day)
                                                @if ($day == 1)
                                                    Saturday
                                                @elseif($day == 2)
                                                    Sunday
                                                @elseif($day == 3)
                                                    Monday
                                                @elseif($day == 4)
                                                    Tuesday
                                                @elseif($day == 5)
                                                    Wednesday
                                                @elseif($day == 6)
                                                    Thrusday
                                                @elseif($day == 7)
                                                    Friday
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>{{ $doctor->fees }} tk.</td>
                                        <td>
                                            @if ($doctor->availability == 0)
                                                <a href="{{ route('doctor.status', ['id' => $doctor->id]) }}"><button
                                                        class="btn btn-success btn-sm"><span
                                                            class="fas fa-user-check"></span> Abailable</button></a>
                                            @else
                                                <a href="{{ route('doctor.status', ['id' => $doctor->id]) }}"><button
                                                        class="btn btn-warning btn-sm"><span
                                                            class="fas fa-user-alt-slash"></span> Unabailable</button></a>
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
