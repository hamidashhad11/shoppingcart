@extends('product.layout')
@section('title', 'Edit Product')

@section('content')
    <h2>Edit Product {{ $product->productCode }}</h2>
    <form action="/product/{{ $product->productCode }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="productCode">Product Code:</label>
            <input type="text" class="form-control"  placeholder="Product Code" id="productCode" name="productCode" value="{{ $product->productCode }}">
            @error('productCode')
            <p class="text-danger">{{ $errors->first('productCode') }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="productName">Product Name:</label>
            <input type="text" class="form-control" placeholder="Product Name" name="productName" value="{{ $product->productName }}">
            @error('productName')
            <p class="text-danger">{{ $errors->first('productName') }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="productDescription">Description:</label>
            <textarea class="form-control" placeholder="Description" name="productDescription">
                {{ $product->productDescription }}
            </textarea>
            @error('productDescription')
            <p class="text-danger">{{ $errors->first('productDescription') }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="productPrice">Price:</label>
            <input type="number" class="form-control" placeholder="Product Price" name="productPrice" value="{{ $product->productPrice }}">
            @error('productPrice')
            <p class="text-danger">{{ $errors->first('productPrice') }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="productImage">Image:</label>
            <input type="file" class="form-control" id="image"  name="productImage" value="{{ $product->productImage }}">
            @error('productImage')
            <p class="text-danger">{{ $errors->first('productImage') }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-outline-primary form-control" name="submit">Add Product</button>
    </form>
@endsection
