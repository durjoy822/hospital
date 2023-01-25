@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Orders</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Orders</li>
                <li class="breadcrumb-item active">All Orders</li>
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
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="widget-title">Orders List</h3>
                        </div>
                    </div>
                    <div class="table-responsive mb-3">
                        <table id="tableId"
                            class="table table-bordered table-striped table-responsive overflow-scroll justify-content-center">
                            <thead>
                                <tr>
                                    <th class="no-sort">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="select-all">
                                            <label class="custom-control-label" for="select-all"></label>
                                        </div>
                                    <th>Order Id</th>
                                    <th>Orderd Time</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td class="no-sort">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="1">
                                                <label class="custom-control-label" for="1"></label>
                                            </div>
                                        </td>
                                        <td> {{ $order->id }} </td>
                                        <td>{{ $order->created_at }}</td>
                                        <td>{{ $order->total_price }}</td>
                                        <td>{{ $order->status }}</td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal{{ $order->id }}"><span
                                                    class="ti-pencil-alt"></span>
                                                EDIT</button>
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

    {{-- Modal  Area --}}
    @foreach ($orders as $order)
    <div class="modal fade" id="myModal{{$order->id}}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Order NO. {{$order->id}}</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- form goes here -->
                    <form action="{{route('order.update', $order->id)}}" method="post">@csrf
                        <div class="form-group col-md-6">
                            <label for="gender">Status</label>
                            <select class="form-control" value="{{ $order->status }}" name="status" id="status">
                                <option {{ $order->status == 'Orderd' ? 'selected' : '' }} value="Orderd">Orderd</option>
                                <option {{ $order->status == 'Shipped' ? 'selected' : '' }} value="Shipped">Shipped
                                </option>
                                <option {{ $order->status == 'Deliverd' ? 'selected' : '' }} value="Deliverd">Deliverd
                                </option>
                                <option {{ $order->status == 'Canceled' ? 'selected' : '' }} value="Canceled">Canceled
                                </option>
                            </select>
                            @error('status')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button class="btn btn-primary btn-lg" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
