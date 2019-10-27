@extends('layouts.master') 

@section('title') 
Online ECommerce 
@endsection

@section('content')
@if(Session::has('success'))
<div class="row">
<div class="col-md-4">
        <div id="charge-message" class="alert alert-success">
            {{Session::get('success')}}
        </div>
    </div>
</div>
@endif
@foreach($products->chunk(3) as $productChunk)
<div class="row">
    @foreach($productChunk as $product)
  <div class="col-md-4">
    <div class="card" style="width: 18rem;">
      <img
        src="{{ $product->imagePath}}"
        class="card-img-top img-thumbnail"
        style="max-height: 250px"
        alt="{{ $product->title}}"
      />
      <div class="card-body">
        <h5 class="card-title">{{ $product->title}}</h5>
        <p class="card-text">
        {{ $product->description}}
        </p>
        <div class="clearfix">
          <div class="float-left"><strong>Rp {{ $product->price}}</strong></div>
          <a href="{{ route('product.addToCart', ['id'=>$product->id])}}" class="btn btn-sm btn-success float-right">Buy</a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endforeach
@endsection
