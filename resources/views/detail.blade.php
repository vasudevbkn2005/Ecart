@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{ $product['gallery'] }}" alt="">
            </div>
            <div class="col-sm-6" style="margin-bottom: 229px">
                <a href="/">Go Back</a>
                <h3>Name : {{ $product['name'] }}</h3><br>
                <h3>Price : {{ $product['price'] }}</h3><br>
                <h3>Category : {{ $product['category'] }}</h3><br>
                <h3>Description : {{ $product['description'] }}</h3><br>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                    <button class="btn btn-success">Add To Cart</button>
                </form>
                <button class="btn btn-primary" style="margin-top:10px">Buy Now</button>
            </div>
        </div>
    </div>
@endsection
