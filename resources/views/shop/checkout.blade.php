@extends('layouts.master') 

@section('title') 
Checkout
@endsection

@section('content')
<div class="row justify-content-md-center">
    <div class="col-md-12 text-center">
        <h1>Checkout</h1>
        <h4>Your Total: Rp {{$total}}</h4>
        <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'd-none' : '' }}">
            {{ Session::get('error') }}
        </div>
    </div>
    <form action="{{route('checkout')}}" method="post" id="checkout-form">
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="card-name">Card Holder Name</label>
                    <input type="text" name="card-name" id="card-name" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="card-number">Credit Card Number</label>
                    <input type="text" name="card-number" id="card-number" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="card-expiry-month">Expiration Month</label>
                            <input type="text" name="card-expiry-month" id="card-expiry-month" class="form-control"
                                required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="card-expiry-year">Expiration Year</label>
                            <input type="text" name="card-expiry-year" id="card-expiry-year" class="form-control"
                                required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="card-cvc">CVC</label>
                    <input type="text" name="card-cvc" id="card-cvc" class="form-control" required>
                </div>
            </div>
        </div>
        {{csrf_field()}}
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <button class="btn btn-primary btn-block" type="submit">Buy Now</button>
            </div>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="{{ URL::to('src/js/checkout.js')}}"></script>
@endsection