@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Our Products</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-4">+ Add Product</a>
    <a href="{{ route('products.home') }}" class="btn btn-primary mb-4">Show All Product</a>

    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                @if($product->image)
                    <img src="{{ asset('uploads/products/'.$product->image) }}" class="card-img-top" style="height:200px; object-fit:cover;">
                @else
                    <img src="https://via.placeholder.com/200" class="card-img-top" style="height:200px; object-fit:cover;">
                @endif
                
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text text-muted">{{ $product->category }}</p>
                    <p class="fw-bold">₹{{ $product->price }}  
                        @if($product->discount > 0)
                            <span class="badge bg-success">{{ $product->discount }}% OFF</span>
                        @endif
                    </p>
                    <p class="small">{{ Str::limit($product->description, 60) }}</p>
                    
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-warning">Buy now</a>
                        
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Delete this product?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
