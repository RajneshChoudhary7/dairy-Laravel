@extends('layouts.app')

@section('title', $product->name . ' - Product Details')

@section('content')
<div class="container my-5">
    <div class="row">
        <!-- Product Image Section -->
        <div class="col-md-5 text-center">
            <img src="{{ $product->image ? asset('storage/'.$product->image) : 'https://via.placeholder.com/400' }}" 
                 alt="{{ $product->name }}" 
                 class="img-fluid rounded shadow-lg" style="max-height:400px;">
        </div>

        <!-- Product Info Section -->
        <div class="col-md-7">
            <h2 class="fw-bold">{{ $product->name }}</h2>

            <h3 class="text-success">₹ {{ number_format($product->price, 2) }}</h3>
            <p class="mt-3">{{ $product->description }}</p>
            
            <p><strong>Stock: </strong> 
                @if($product->stock > 0) 
                    <span class="text-success">Available ({{ $product->stock }})</span>
                @else 
                    <span class="text-danger">Out of Stock</span>
                @endif
            </p>

            <!-- Buttons -->
            <div class="d-flex gap-3 mt-4">
                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-warning btn-lg px-4">Add to Cart</button>
                </form>
                
                <form action="{{ route('checkout.buyNow', $product->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-lg px-4">Buy Now</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Recommended Products Section -->
    <hr class="my-5">
    <h4 class="mb-4">You may also like</h4>
    @if($relatedProducts->isEmpty())
        <p>No related products found.</p>
    @else
        <div class="row">
            @foreach($relatedProducts as $rel)
                <div class="col-md-3 mb-4">
                    <div class="card shadow-sm h-100">
                        <img src="{{ $rel->image ? asset('storage/'.$rel->image) : 'https://via.placeholder.com/200' }}" 
                             class="card-img-top" alt="{{ $rel->name }}" style="height:200px; object-fit:cover;">
                        <div class="card-body">
                            <h6 class="fw-bold">{{ Str::limit($rel->name, 30) }}</h6>
                            <p class="text-success">₹ {{ number_format($rel->price, 2) }}</p>
                            <a href="{{ route('products.show', $rel->id) }}" class="btn btn-outline-primary btn-sm w-100">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
