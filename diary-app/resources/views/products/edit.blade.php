<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2>Edit Product</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')   <!-- 👈 Important for update -->

    <div>
        <label>Name</label>
        <input type="text" name="name" value="{{ $product->name }}" required>
    </div>

    <div>
        <label>Category</label>
        <input type="text" name="category" value="{{ $product->category }}" required>
    </div>

    <div>
        <label>Price</label>
        <input type="number" name="price" value="{{ $product->price }}" required>
    </div>

    <div>
        <label>Quantity</label>
        <input type="number" name="quantity" value="{{ $product->quantity }}" required>
    </div>

    <div>
        <label>Discount</label>
        <input type="number" name="discount" value="{{ $product->discount }}">
    </div>

    <div>
        <label>Description</label>
        <textarea name="description">{{ $product->description }}</textarea>
    </div>

    <div>
        <label>Image</label>
        <input type="file" name="image">
        @if($product->image)
            <img src="{{ asset('uploads/products/'.$product->image) }}" width="100">
        @endif
    </div>

    <button type="submit">Update Product</button>
</form>

</body>
</html>
