@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2>Your Cart</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(empty($cart))
        <p>Your cart is empty!</p>
    @else
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach($cart as $id => $product)
                    @php $subtotal = $product['price'] * $product['quantity']; $total += $subtotal; @endphp
                    <tr>
                        <td><img src="{{ asset('storage/'.$product['image']) }}" width="60"></td>
                        <td>{{ $product['name'] }}</td>
                        <td>₹{{ number_format($product['price'],2) }}</td>
                        <td>
                            <form action="{{ route('cart.update', $id) }}" method="POST">
                                @csrf
                                <input type="number" name="quantity" value="{{ $product['quantity'] }}" min="1" class="form-control" style="width:70px;">
                                <button type="submit" class="btn btn-sm btn-primary mt-1">Update</button>
                            </form>
                        </td>
                        <td>₹{{ number_format($subtotal,2) }}</td>
                        <td>
                            <form action="{{ route('cart.remove', $id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h4>Total: ₹{{ number_format($total,2) }}</h4>
        <a href="{{ route('checkout') }}" class="btn btn-success">Proceed to Checkout</a>
    @endif
</div>
@endsection
