@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Payment Invoice</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Payments</li>
                <li class="breadcrumb-item active">Payment Invoice</li>
            </ol>
        </div>
    </div>
    <!-- /Breadcrumb -->
    <!-- Main Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="widget-area-2 proclinic-box-shadow pb-3">
                    <!-- Invoice Head -->
                    <div class="row ">
                        <div class="col-sm-6 mb-5">
                            <img src="{{ asset('assets/admin/images/logo-dark.png') }}" alt="logo hospital"
                                class="img-thumbnail">
                            <br>
                            <br>
                            <span>Bazirmur</span>
                            <br>
                            <span>[Narsingdi, 1600]</span>
                            <br>
                            <span class="pr-2">Phone: +00 80236534</span>
                            <span>Fax: 124 1631 3726</span>
                        </div>
                        <div class="col-sm-6 text-md-right mb-5">
                            <h3>INVOICE</h3>
                            <br>
                            <br>
                            <span>Invoice # [00{{ $payment->id }}]</span>
                            <br>
                            <span>Date: {{ $payment->discharge }}</span>
                        </div>
                    </div>
                    <!-- /Invoice Head -->
                    <!-- Invoice Content -->
                    <div class="row">
                        <div class="col-sm-6 mb-5">
                            <h6 class="proclinic-text-color">PATIENT DETAILS:</h6>
                            @php $pname = \App\Models\Patient::where('id',$payment->pid)->first(); @endphp
                            <span><strong>Name:</strong> {{ $pname->patient_name }}</span>
                            <br>
                            <span><strong>Age:</strong> {{ $pname->age }}</span>
                            <br>
                            <span>Narsingdi, Bangladesh</span>
                            <br>
                            <span><strong>Phone:</strong> {{ $pname->phone }}</span>
                        </div>
                        <div class="col-sm-6 mb-5 text-md-right">
                            <span><strong>Patient ID:</strong> {{ $pname->id }}</span>
                            <br>
                            @php
                                $date1 = \Carbon\Carbon::parse($payment->discharge);
                                $date2 = \Carbon\Carbon::parse($payment->admit);
                                $diffInDays = $date1->diffInDays($date2);
                            @endphp
                            <span><strong>Total Days:</strong> {{ $diffInDays }} days</span>
                            <br>
                            <span><strong>Payment Type:</strong>
                                @if ($payment->type == 1)
                                    Cash
                                @elseif ($payment->type == 2)
                                    Cheque
                                @else
                                    Card
                                @endif
                            </span>
                            <br>
                            <span>
                                @if ($payment->type_info)
                                    {{ $payment->type_info }}
                                @endif
                            </span>
                        </div>
                        <div class="col-sm-12 mb-2">
                            <strong class="proclinic-text-color">Services:</strong>
                        </div>
                        <div class="col-sm-12">
                            <table class="table table-bordered table-striped table-invioce">
                                <thead>
                                    <tr class="text-md-center">
                                        <th scope="col">#</th>
                                        <th scope="col">Service</th>
                                        <th scope="col">Unit Cost</th>
                                        <th scope="col">Discount <small>(%)</small></th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paymentServices as $key => $service)
                                        <tr class="text-md-center">
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $service->service }}</td>
                                            <td>{{ $service->cost }}</td>
                                            <td>{{ $payment->discount }}</td>
                                            <td>{{ round($service->cost - $service->cost * ($payment->discount / 100)) }}
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-4 ml-auto">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td>Total</td>
                                        <td>{{ $payment->ammount }}</td>
                                    </tr>

                                    <tr>
                                        <td>Discount</td>
                                        <td>{{ $payment->ammount - $payment->paid }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>GRAND TOTAL</strong>
                                        </td>
                                        <td>
                                            <strong>{{ $payment->paid }}</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-sm-12">
                            <div class="border p-4">
                                <strong>Note:</strong>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur id illo incidunt,
                                iste libero quisquam? A aut cumque
                                fuga fugit iusto libero officia optio quasi, quisquam saepe voluptate voluptatibus
                                voluptatum.
                                <br>
                                <br>
                                <strong class="f12">Signature</strong>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center export-pagination mt-3 mb-0">
                                    <li class="page-item">
                                        <a class="page-link" href="#"><span class="ti-printer"></span> print</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- /Invoice Content -->
                </div>
            </div>
        </div>
    </div>
@endsection
