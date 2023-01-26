@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Doctor Details</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Doctors</li>
                <li class="breadcrumb-item active">Doctor Details</li>
            </ol>
        </div>
    </div>
    <!-- /Page Title -->

    <!-- /Breadcrumb -->
    <!-- Main Content -->
    <div class="container-fluid">

        <div class="row">
            <!-- Widget Item -->
            <div class="col-md-12">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Doctor Details</h3>
                    <div class="row no-mp">
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img class="card-img-top" src="{{ asset($doctor->photo) }}" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $doctor->name }}</h4>
                                    <p class="card-text">{{ $doctor->details }}</p>
                                    {{--                                <button type="button" class="btn btn-success mb-2"><span class="ti-pencil-alt"></span> Edit --}}
                                    {{--                                    Doctor</button> --}}
                                    <a href="{{ route('doctor.edit', $doctor->id) }}"><button
                                            class="btn btn-success mb-2"><span class="ti-pencil-alt"></span> Edit
                                            Doctor</button></a>

                                    <button type="button" class="btn btn-danger"><span class="ti-trash"></span> Delete
                                        Doctor</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <td><strong>Specialization</strong></td>
                                            <td>@php $spec = \App\Models\Department::find($doctor->specialization); @endphp
                                                {{ $spec->name }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Experience</strong></td>
                                            <td>{{ $doctor->experience }} year</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Gender</strong></td>
                                            <td>{{ $doctor->gender }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Address</strong></td>
                                            <td>{{ $doctor->address }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Phone</strong> </td>
                                            <td>{{ $doctor->phone }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Date Of Birth</strong> </td>
                                            <td>{{ $doctor->dob }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Age</strong> </td>
                                            <td>{{ $doctor->age }} year</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Email</strong></td>
                                            <td>{{ $doctor->email }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Working Day</strong></td>
                                            @php $d=json_decode($doctor->working_days); @endphp
                                            <td>
                                                @foreach ($d as $day)
                                                    @if ($day == 5)
                                                        Saturday,
                                                    @elseif($day == 6)
                                                        Sunday,
                                                    @elseif($day == 0)
                                                        Monday,
                                                    @elseif($day == 1)
                                                        Tuesday,
                                                    @elseif($day == 2)
                                                        Wednesday,
                                                    @elseif($day == 3)
                                                        Thrusday,
                                                    @elseif($day == 4)
                                                        Friday.
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Fees</strong></td>
                                            <td>{{ $doctor->fees }} Tk</td>
                                        </tr>
                                        <tr>
                                            <td><strong>availability</strong></td>
                                            <td>{{ $doctor->availability == 1 ? 'Abailable' : 'Unabailable' }} </td>
                                        </tr>
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
                                            <a class="page-link" href="#"><span class="ti-align-justify"></span>
                                                Excel</a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- /Export links-->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /Widget Item -->
            <!-- Widget Item -->
            <div class="col-md-12">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Doctor Activity</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Patient Name</th>
                                    <th>Injury/Condition</th>
                                    <th>Visit Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Manoj Kumar</td>
                                    <td>Viral fever</td>
                                    <td>12-03-2018</td>
                                    <td>Condition is good</td>
                                </tr>
                                <tr>
                                    <td>Riya </td>
                                    <td>Hand Fracture</td>
                                    <td>12-10-2018</td>
                                    <td>Small Operation</td>
                                </tr>
                                <tr>
                                    <td>Paul</td>
                                    <td>Dengue</td>
                                    <td>15-10-2018</td>
                                    <td>Admintted in Generalward</td>
                                </tr>
                                <tr>
                                    <td>Manoj Kumar</td>
                                    <td>Malayria</td>
                                    <td>12-03-2018</td>
                                    <td>Condition is good</td>
                                </tr>
                                <tr>
                                    <td>Manoj Kumar</td>
                                    <td>Viral fever</td>
                                    <td>12-03-2018</td>
                                    <td>Condition is good</td>
                                </tr>
                                <tr>
                                    <td>Riya </td>
                                    <td>Hand Fracture</td>
                                    <td>12-10-2018</td>
                                    <td>Small Operation</td>
                                </tr>
                                <tr>
                                    <td>Paul</td>
                                    <td>Dengue</td>
                                    <td>15-10-2018</td>
                                    <td>Admintted in Generalward</td>
                                </tr>
                                <tr>
                                    <td>Manoj Kumar</td>
                                    <td>Malayria</td>
                                    <td>12-03-2018</td>
                                    <td>Condition is good</td>
                                </tr>
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
                    </div>
                </div>
            </div>
            <!-- /Widget Item -->
        </div>
    </div>
@endsection
