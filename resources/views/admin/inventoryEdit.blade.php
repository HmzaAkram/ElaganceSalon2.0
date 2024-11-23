@extends('admin.dashboard')
@section('content')
<div class="container">
    <h2>Edit Product</h2>
    <form action="{{ route('admin.inventory.update', $inventory->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="productName">Product Name</label>
            <input type="text" name="productName" id="productName" class="form-control" value="{{ old('productName', $inventory->productName) }}" required>
        </div>

        <div class="form-group">
            <label for="productDescription">Product Description</label>
            <textarea name="productDescription" id="productDescription" class="form-control" required>{{ old('productDescription', $inventory->productDescription) }}</textarea>
        </div>

        <div class="form-group">
            <label for="Stock">Stock</label>
            <input type="number" name="Stock" id="Stock" class="form-control" value="{{ old('Stock', $inventory->Stock) }}" required>
        </div>

        <div class="form-group">
            <label for="productImage">Product Image</label>
            <input type="file" name="productImage" id="productImage" class="form-control">
            @if ($inventory->productImage)
                <p>Current Image: <img src="{{ asset('uploads/' . $inventory->productImage) }}" alt="Product Image" width="100"></p>
            @endif
        </div>

        <div class="form-group">
            <label for="productPrice">Product Price</label>
            <input type="number" step="0.01" name="productPrice" id="productPrice" class="form-control" value="{{ old('productPrice', $inventory->productPrice) }}" required>
        </div>

        <div class="form-group">
            <label for="productStatus">Product Status</label>
            <select name="productStatus" id="productStatus" class="form-control" required>
                <option value="available" {{ old('productStatus', $inventory->productStatus) == 'available' ? 'selected' : '' }}>Available</option>
                <option value="unavailable" {{ old('productStatus', $inventory->productStatus) == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
            </select>
        </div>

        <div class="form-group">
            <label for="productExpiry">Product Expiry Date</label>
            <input type="date" name="productExpiry" id="productExpiry" class="form-control" value="{{ old('productExpiry', $inventory->productExpiry) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>
@endsection

