@extends('layouts.master') 

@section('title') 
Cart
@endsection

@section('content')
@if(Session::has('cart'))
<div class="row justify-content-md-center">
    <div class="col-md-4">
        <ul class="list-group">
            @foreach($products as $product)
            <div class="d-flex bd-highlight mb-3">
            <div class="mr-auto p-2 bd-highlight">{{$product['item']['title']}}</div>
            <div class="p-2 bd-highlight">{{$product['price']}}</div>
            <div class="p-2 bd-highlight">{{$product['qty']}}</div>
            <div class="p-2 bd-highlight"><a href="#"><i class="fas fa-plus-circle"></i></a></div>
            <div class="p-2 bd-highlight"><a href="#"><i class="fas fa-minus-circle"></i></a></div>
            <div class="p-2 bd-highlight"><a href="#"><i class="fas fa-ban"></i></a></div>
            </div>
            @endforeach
        </ul>
    </div>
</div>
<div class="row justify-content-md-center">
    <div class="col-md-2">
    <strong>Total : {{$totalPrice}}</strong>
    </div>
    <div class="col-md-2">
    <button class="btn btn-success">Checkout</button>
    </div>
</div>
@else
<div class="row">
    <div class="col-md-4">
        <h2>No items in cart</h2>
    </div>
</div>
@endif
@endsection
