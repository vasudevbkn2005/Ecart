@extends('master')
@section('content')
<div class="container my-10">
    <div class="row">
        <div class="col-md-6">
            <img class="detail-img img-fluid" src="{{ $product['gallery'] }}" alt="{{ $product['name'] }}">
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-between">
            <div>
                <a href="/" class="btn btn-outline-secondary mb-3" style="margin-left: 500px">Go Back</a>
                <h3 class="mb-3">{{ $product['name'] }}</h3>
                <h4 class="text-success">Price: ${{ number_format($product['price'], 2) }}</h4>
                <h5>Category: {{ $product['category'] }}</h5>
                <p class="mt-3">{{ $product['description'] }}</p>
            </div>
            <div>
                <form action="/add_to_cart" method="POST" class="mb-3">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                    <button class="btn btn-success btn-lg w-100">Add To Cart</button>
                </form>
                <button class="btn btn-primary btn-lg w-100">Buy Now</button>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
    .detail-img {
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.container {
    background-color: #f8f9fa; /* Light background for contrast */
    border-radius: 8px;
    padding: 20px;
}

</style>