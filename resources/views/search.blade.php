@extends('master')
@section('content')

<div class="custom-product">
    <div class="row mb-4">
        <div class="col-md-3 col-sm-12">
            <h5>Filter</h5>
            <!-- Add your filter options here -->
        </div>
        <div class="col-md-9 col-sm-12">
            <div class="trending-wrapper">
                <h1>Search Results</h1>
                <div class="row">
                    @foreach ($products as $item)
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="search-item border rounded p-3">
                                <a href="detail/{{$item['id']}}" class="text-decoration-none">
                                    <img class="trending-img img-fluid" src="{{$item['gallery']}}" alt="{{$item['name']}}" height="200px">
                                    <div class="text-center mt-2">
                                        <h3 class="text-black">{{$item['name']}}</h3>
                                        <h5 class="text-muted">{{$item['description']}}</h5>
                                    </div>
                                </a>
                            </div>  
                        </div>  
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<style>
    .custom-product {
    padding: 20px;
}

.search-item {
    transition: transform 0.2s;
}

.search-item:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.trending-img {
    border-radius: 8px;
    object-fit: cover; /* Ensures the image covers the area without distortion */
}

.text-center h3 {
    font-size: 1.25rem; /* Adjust font size as needed */
}

.text-center h5 {
    font-size: 1rem; /* Adjust font size as needed */
}

</style>