@extends('master')
@section('content')
    <div class="custom-product">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner" style="margin-bottom: 25px">
                <h1 class="container">Best Product</h1>
                @foreach ($products as $item)
                    <div class="carousel-item {{ $item['id'] == 1 ? 'active' : '' }}" data-bs-interval="10000">
                        <a href="detail/{{$item['id']}}">
                            <img class="slider-img" src="{{ $item['gallery'] }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 style="text-align: end">{{ $item['name'] }}</h5>
                                <p style="text-align: end">{{ $item['description'] }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <hr>
        <div style="margin-bottom: 25px" class="container">
            <h1>Trending Product</h1>
        </div>
        <div class="trending-wrapping">
            <div class="">
                @foreach ($products as $item)
                    <div class="trending-item" style="border: 1px solid rgb(249, 246, 246)">
                         <a href="detail/{{$item['id']}}" style="text-decoration: none">
                        <img class="trending-image" style="margin-bottom: 25px; cursor: pointer;"
                            src="{{ $item['gallery'] }}">
                        <div class="">
                            <h5 style="cursor: pointer; color: black;">{{ $item['name'] }}</h5>
                        </div>
                         </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <hr>
@endsection
