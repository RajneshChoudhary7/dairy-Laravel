@extends('layouts.app')

@section('title', $categoryName . ' Products')

@section('content')
<div class="container my-5">
    <div class="row">
        <!-- Sidebar for Categories -->
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm p-3">
                <h5 class="mb-3">Categories</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="{{ route('Milk') }}">Milk</a></li>
                    <li class="list-group-item"><a href="{{ route('Dahi') }}">Dahi</a></li>
                    <li class="list-group-item"><a href="{{ route('Paneer') }}">Paneer</a></li>
                    <li class="list-group-item"><a href="{{ route('Butter') }}">Butter</a></li>
                    <li class="list-group-item"><a href="{{ route('IceCream') }}">Ice Cream</a></li>
                    <li class="list-group-item"><a href="{{ route('Lassi') }}">Lassi</a></li>
                    <li class="list-group-item"><a href="{{ route('HealthProducts') }}">Health Products</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Products Section -->
        <div class="col-md-9">
            <h2 class="mb-4">{{ $categoryName }} Products</h2>

            <div class="row">
                @foreach($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <img src="{{ $product['image'] }}" 
                             class="card-img-top" 
                             alt="{{ $product['name'] }}" 
                             style="height:200px; object-fit:cover;">
                        
                        <div class="card-body d-flex flex-column">
                            <h6 class="fw-bold">{{ $product['name'] }}</h6>
                            <p class="text-success">₹ {{ number_format($product['price'], 2) }}</p>

                            <div class="mt-auto d-flex gap-2">
    <form action="{{ route('cart.add', $product['id'] ?? 0) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-warning btn-sm w-33">Add to Cart</button>
    </form>
    <form action="{{ route('checkout.buyNow', $product['id'] ?? 0) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger btn-sm w-33">Buy Now</button>
    </form>
    <form action="{{ route('products.addToTable', $product['name']) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-success btn-sm w-33">Add Directly to Table</button>
    </form>
</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
