@extends('admin.dashboard')

@section('content')
<div class="container mt-4">
    <h2>Add New Product</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary mb-3">View Inventory Products</a>

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <label for="productName">Product Name</label>
            <input type="text" name="productName" id="productName" class="form-control" required>
            @error('productName')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="productDescription">Product Description</label>
            <textarea name="productDescription" id="productDescription" class="form-control" rows="3" required></textarea>
            @error('productDescription')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="stock">Stock</label>
            <input type="number" name="stock" id="stock" class="form-control" required>
            @error('stock')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="productImage">Product Image</label>
            <input type="file" name="productImage" id="productImage" class="form-control" required>
            @error('productImage')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="productPrice">Product Price</label>
            <input type="number" name="productPrice" id="productPrice" class="form-control" step="0.01" required>
            @error('productPrice')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="productStatus">Product Status</label>
            <select name="productStatus" id="productStatus" class="form-control" required>
                <option value="1">Available</option>
                <option value="0">Unavailable</option>
            </select>
            @error('productStatus')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="productExpiry">Product Expiry Date</label>
            <input type="date" name="productExpiry" id="productExpiry" class="form-control">
            @error('productExpiry')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>
@endsection
