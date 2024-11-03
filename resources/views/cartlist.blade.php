@extends('master')
@section('content')
    <div class="custom-product">
        <div class="row mb-10">
            <div class="col-md-9 col-sm-12 mx-auto">
                <div class="trending-wrapper">
                    <h1 class="mb-4">Shopping Cart</h1>
                    @if (count($products) > 0)
                    <div class="mt-4 text-right" style="margin-left: 800px; margin-bottom: 25px">
                        <a href="/" class="btn btn-success">More Shoping</a>
                    </div>
                    <div class="row">
                            @php $totalPrice = 0; @endphp
                            @foreach ($products as $item)
                                @php $totalPrice += $item->price; @endphp
                                <div class="col-12 mb-3">
                                    <div class="row border rounded p-3 align-items-center">
                                        <div class="col-md-2 col-sm-4 text-center">
                                            <a href="detail/{{ $item->id }}" class="text-decoration-none">
                                                <img class="img-fluid rounded" src="{{ $item->gallery }}" alt="{{ $item->name }}" height="100px">
                                            </a>
                                        </div>
                                        <div class="col-md-5 col-sm-8">
                                            <h5 class="text-black">{{ $item->name }}</h5>
                                            <p class="text-muted">{{ $item->description }}</p>
                                            <h6 class="text-danger">₹{{ $item->price }}</h6>
                                        </div>
                                        <div class="col-md-3 text-center">
                                            <input type="number" value="1" min="1" class="form-control mb-2" style="width: 80px; display: inline-block;" aria-label="Quantity">
                                            <a href="/removeCart/{{$item->cart_id}}" class="btn btn-danger" onclick="return confirm('Do You Want To Remove Product')">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-4 text-right">
                            <h4>Total: ₹{{ $totalPrice }}</h4>
                            <a href="/order" class="btn btn-primary">Proceed to Checkout</a>
                        </div>
                    @else
                        <div class="text-center">
                            <h3>No items found in the cart.</h3>
                            <a href="/" class="btn btn-primary mt-3">Continue Shopping</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .custom-product {
        padding: 40px;
        background-color: #f4f4f4;
    }

    .trending-wrapper {
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 15px;
    }

    .border {
        border: 1px solid #eaeaea;
    }

    .rounded {
        border-radius: 5px;
    }

    .img-fluid {
        border-radius: 5px;
        object-fit: cover;
        transition: transform 0.2s;
    }

    .img-fluid:hover {
        transform: scale(1.05);
    }

    h1, h4 {
        font-weight: bold;
    }

    .text-danger {
        font-size: 1.25rem;
        font-weight: bold;
    }

    button {
        width: 100%;
    }

    button:hover {
        background-color: #0056b3; /* Darker blue */
    }

    @media (max-width: 768px) {
        .img-fluid {
            height: auto; /* Responsive image height */
        }

        .text-right {
            text-align: center; /* Center total price and button on small screens */
        }
    }
</style>