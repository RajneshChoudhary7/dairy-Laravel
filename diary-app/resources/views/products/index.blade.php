<!DOCTYPE html>
<html>
<head>
    <title>Products List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="mb-3">Products List</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('products.create') }}" class="btn btn-success mb-3">+ Add Product</a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price (₹)</th>
                <th>Quantity</th>
                <th>Discount (%)</th>
                <th>Final Price</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category }}</td>
                    <td>₹{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->discount }}%</td>
                    <td>₹{{ $product->price - ($product->price * $product->discount / 100) }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        @if($product->image)
                            <img src="{{ asset('images/'.$product->image) }}" width="60">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10" class="text-center">No Products Found</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>
