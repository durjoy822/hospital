@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Add Payment</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Payments</li>
                <li class="breadcrumb-item active">Add Payment</li>
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
                    <h3 class="widget-title">Add Payment</h3>
                    <form action="{{route('payment.store')}}" method="POST">@csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="patient-id">Patient ID</label>
                                <input type="text" class="form-control" placeholder="Patient ID" id="patient-id" name="pId">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="patient-name">Patient Name</label>
                                <input type="text" class="form-control" placeholder="Patient Name" id="patient-name" name="patientName">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="department">Department</label>
                                <select class="form-control" id="department" name="department">
                                    <option disabled selected>Select a department</option>
                                    @foreach ($speciallist as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('dob')
                                    <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="doctorName">Doctor Name</label>
                                <select class="form-control" id="doctorName" name="doctor">
                                    <option disabled selected>Select your Doctor</option>
                                </select>
                                @error('doctor')
                                    <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="adminssion-date">Admission Date</label>
                                <input type="date" placeholder="Adminssion Date" class="form-control"
                                    id="adminssion-date" name="admit">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="discharge-date">Discharge Date</label>
                                <input type="date" placeholder="Discharge Date" class="form-control" id="discharge-date" name="discharge">
                            </div>
                            <div class="form-group col-md-12">
                                <h4>Services</h4>
                            </div>
                            <div id="inputFields" class="form-group col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label>Service Name</label>
                                    <input type="text" placeholder="Service Name" class="form-control" name="service[]">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Cost of Treatment</label>
                                    <input type="text" placeholder="Cost of Treatment" class="form-control" name="cost[]">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <button id="addMoreService" class="btn btn-outline-success"><span class="ti-plus"></span> Add Service</button>
                            </div>
                            <div class="form-group col-md-12">
                                <h4>Payment</h4>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="discount">Discount (%)</label>
                                <input type="text" placeholder="Discount" class="form-control" id="discount" name="discount">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="payment-type">Payment Type</label>
                                <select class="form-control" id="payment-type" name="type">
                                    <option value="2">Check</option>
                                    <option value="3">Card</option>
                                    <option selected value="1">Cash</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3" id="card-check" style="display: none">
                                <label for="card-check">Card/Check No</label>
                                <input type="text" placeholder="Card/Check No" class="form-control" name="type_info">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="payment-type">Payment status</label>
                                <select class="form-control" id="payment-type" name="status">
                                    <option value="Paid">Paid</option>
                                    <option value="Pending">Pending</option>
                                </select>
                            </div>
                            <div class="form-check col-md-12 mb-2">
                                <div class="text-left">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="ex-check-2">
                                        <label class="custom-control-label" for="ex-check-2">Please Confirm</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Widget Item -->
        </div>
    </div>


@endsection
