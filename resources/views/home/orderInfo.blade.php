@extends('home.layouts.master')
@section('content')
    <div class="container mb-5">
        <div class="card">
            <div class="card-header">
                Invoice
                <strong>{{ $order->created_at }}</strong>
                <span class="float-right"> <strong>Status:</strong> {{ $order->status }}</span>

            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h6 class="mb-3">From:</h6>
                        <div>
                            <strong>Origin Hospital</strong>
                        </div>
                        <div>Bazirmur</div>
                        <div>Narsingdi</div>
                        <div>Email: hospital@adeveloper.info</div>
                        <div>Phone: +88 016 16657585</div>
                    </div>

                    <div class="col-sm-6 text-right">
                        <h6 class="mb-3">To:</h6>
                        <div>
                            <strong>{{ $ship->name }}</strong>
                        </div>
                        <div>{{ $ship->street }}</div>
                        <div>{{ $ship->city }} - {{ $ship->postal_code }}</div>
                        <div>{{ $ship->country }}</div>
                        <div>Email: {{ Auth::user()->email }}</div>
                        <div>Phone: {{ $ship->phone_number }}</div>
                    </div>
                </div>

                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Picture</th>
                                <th>Item</th>
                                @if ($order->status == 'Deliverd')
                                    <th>Review</th>
                                @endif
                                <th class="right">Unit Cost</th>
                                <th class="center">Qty</th>
                                <th class="right text-center">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($infos as $key => $info)
                                @php $product = \App\Models\Medicine::find($info->product_id)->first(); @endphp
                                <tr>
                                    <td class="center">{{ $key + 1 }}</td>
                                    <td class="left strong"><a href="{{route('medicine.show', $product->id)}}"><img src="{{ asset($product->picture) }}"
                                        alt="{{ $product->name }}" style="height: 80px"></a></td>
                                    <td class="left">{{ $product->name }}</td>
                                    @php
                                        $status = \App\Models\Review::where('order_id', $order->id)
                                            ->where('product_id', $info->product_id)
                                            ->count();
                                        $review = \App\Models\Review::where('order_id', $order->id)
                                            ->where('product_id', $info->product_id)
                                            ->first();
                                    @endphp
                                    <td>
                                        @if ($status > 0)
                                            @if ($review->status == 0)
                                                Pending
                                            @else
                                                Approved
                                            @endif
                                        @else
                                            @if ($order->status == 'Deliverd')
                                                <button class="btn btn-outline-primary btn-sm" data-toggle="modal"
                                                    data-target="#reviewModal{{ $product->id }}">Review</button>
                                            @endif
                                        @endif
                                    </td>
                                    <td class="right">{{ $info->price }} TK</td>
                                    <td class="center">{{ $info->quantity }}</td>
                                    <td class="right text-center">{{ $info->total_price }} TK</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5">

                    </div>

                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                                <tr>
                                    <td class="left">
                                        <strong>Subtotal</strong>
                                    </td>
                                    <td class="right text-right">{{ $order->price }} TK</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong>Delivery Charge </strong>
                                    </td>
                                    <td class="right text-right">{{ $order->delivery_cost }} Tk</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong>Total</strong>
                                    </td>
                                    <td class="right text-right">
                                        <strong>{{ $order->total_price }} Tk</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Review Modal 1 -->
    @foreach ($infos as $key => $info)
        @php $product = \App\Models\Medicine::find($info->product_id)->first(); @endphp
        <div class="modal fade" id="reviewModal{{ $product->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" style="z-index: 20000 !important;" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ $product->name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="{{ route('review') }}" method="post">@csrf
                        <div class="modal-body">
                            <input type="hidden" name="order_id" value="{{ $order->id }}">
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <div class="form-group">
                                <label for="reviewText">Leave a review</label>
                                <textarea class="form-control" id="reviewText" rows="3" name="review"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="reviewRating">Rating</label>
                                <select class="form-control" id="reviewRating" name="rating">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5" selected>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit Review</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    @endforeach
@endsection
