@extends('layouts.master') 

@section('title') 
Profile
@endsection

@section('content')
<div class="row justify-content-md-center">
    <div class="col-md-4">
        <h1>My Orders</h1>
            @foreach($orders as $order)
        <ul class="list-group">
            @foreach($order->cart->items as $item)
            <div class="d-flex bd-highlight mb-3">
            <div class="mr-auto p-2 bd-highlight">{{$item['item']['title']}}</div>
            <div class="p-2 bd-highlight">{{$item['price']}}</div>
            <div class="p-2 bd-highlight">{{$item['qty']}}</div>
            </div>
            @endforeach
            <div class="d-flex bd-highlight mb-3">
            <div class="mr-auto p-2 bd-highlight"><strong>Total Price Rp {{$order->cart->totalPrice}}</strong></div>
            </div>
        </ul>
            @endforeach
    </div>
</div>
@endsection
