@extends('home.layouts.master')
@section('content')
    <table class="table container">
        <thead>
            <tr>
                <th scope="col">Order ID</th>
                <th scope="col">Date</th>
                <th scope="col">Total</th>
                <th scope="col">Status</th>
                <th scope="col">View</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <th scope="row">#000{{$order->id}}</th>
                <td>{{$order->created_at}}</td>
                <td>{{$order->total_price}}</td>
                <td>{{$order->status}}</td>
                <td><a href="{{route('order.show',$order->id)}}" class="btn btn-outline-success btn-sm">Invoice</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
