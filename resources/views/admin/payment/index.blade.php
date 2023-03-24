@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Payments</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Payments</li>
                <li class="breadcrumb-item active">All Payments</li>
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
                            <h3 class="widget-title">Payments List</h3>
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
                                        <th>Patient Name</th>
                                        <th>Doctor Name</th>
                                        <th>Service Name</th>
                                        <th>Charges</th>
                                        <th>Discount <small>(%)</small></th>
                                        <th>Paid Ammount</th>
                                        <th>Status</th>
                                        <td>Action</td>
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
                                        <th>Patient Name</th>
                                        <th>Doctor Name</th>
                                        <th>Service Name</th>
                                        <th>Charges</th>
                                        <th>Discount <small>(%)</small></th>
                                        <th>Paid Ammount</th>
                                        <th>Status</th>
                                        <td>Action</td>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($payments as $payment)
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="1">
                                                    <label class="custom-control-label" for="1"></label>
                                                </div>
                                            </td>
                                            <td>{{ $payment->patient_name }}</td>
                                            @php $dname = \App\Models\Doctor::where('id',$payment->doctor)->first(); @endphp
                                            <td><a href="{{ route('doctor.show', $dname->id) }}">{{ $dname->name }}</a>
                                            </td>
                                            @php $info = \App\Models\PaymentService::where('payment_id',$payment->id)->get();@endphp
                                            <td>
                                                @foreach ($info as $i)
                                                    {{ $i->service }},
                                                @endforeach
                                            </td>
                                            <td>{{ $payment->ammount }}</td>
                                            <td>{{ $payment->discount }}</td>
                                            <td>{{ $payment->paid }}</td>
                                            <td>{{ $payment->status }}</td>
                                            <td><a href="{{ route('admin.invoice', $payment->id) }}"
                                                    class="btn btn-primary"><span class="ti-file"></span>
                                                    View</a></td>
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
