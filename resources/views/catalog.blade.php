@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Product Catalog</h1>
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $product['name'] }}</h5>
                    <p class="card-text flex-grow-1">{{ $product['description'] }}</p>
                    <p class="card-text"><strong>Price:</strong> Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
                    <a href="#" class="btn btn-primary mt-auto">Buy Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
