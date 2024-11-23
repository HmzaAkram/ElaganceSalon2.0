@extends('admin.dashboard')

@section('content')
    <div class="container mt-4">
        <h2>Inventory Products</h2>
        @if (Auth::user()->role == '0')

        <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">Add New Product</a>
        @endif

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Stock</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Expiry Date</th>
                    @if (Auth::user()->role == '0')

                    <th>Actions</th>
                    @endif

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $product)
                    <tr>
                        <td>{{ $product->productName }}</td>
                        <td>{{ $product->productDescription }}</td>
                        <td>
                            <img src="{{ asset('uploads/' . $product->productImage) }}" alt="{{ $product->productName }}" height="80" width="auto">
                        </td>
                        <td>{{ $product->Stock }}</td>
                        <td>${{ $product->productPrice }}</td>
                        <td>{{ $product->productStatus ? 'Available' : 'Unavailable' }}</td>
                        <td>{{ $product->productExpiry }}</td>
                        @if (Auth::user()->role == '0')

                        <td>

                            <a href="{{ route('admin.inventory.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                                @csrf

                                @method('DELETE')

                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                            </form>
                        </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
