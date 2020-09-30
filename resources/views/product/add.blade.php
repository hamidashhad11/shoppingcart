@extends('product.layout')
@section('title', 'Add new Product')

@section('content')
    <h2>Add new Product</h2>
    <form action="/product/store" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="productCode">Product Code:</label>
            <input type="text" class="form-control"  placeholder="Product Code" id="productCode" name="productCode" value="{{ old('productCode') }}">
            @error('productCode')
                <p class="text-danger">{{ $errors->first('productCode') }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="productName">Product Name:</label>
            <input type="text" class="form-control" placeholder="Product Name" name="productName" value="{{ old('productName') }}">
            @error('productName')
                <p class="text-danger">{{ $errors->first('productName') }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="productDescription">Description:</label>
            <textarea class="form-control" placeholder="Description" name="productDescription">
                {{ old('productDescription') }}
            </textarea>
            @error('productDescription')
                <p class="text-danger">{{ $errors->first('productDescription') }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="productPrice">Price:</label>
            <input type="number" class="form-control" placeholder="Product Price" name="productPrice" value="{{ old('productPrice') }}">
            @error('productPrice')
                <p class="text-danger">{{ $errors->first('productPrice') }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="productImage">Image:</label>
            <input type="file" class="form-control" id="image"  name="productImage" value="{{ old('productImage') }}">
            @error('productImage')
                <p class="text-danger">{{ $errors->first('productImage') }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-outline-primary form-control" name="submit">Add Product</button>
    </form>
@endsection
