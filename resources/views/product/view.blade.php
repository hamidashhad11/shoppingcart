@extends('product.layout')
@section('title', 'Product Details')
@section('content')
    <h2>Product {{ $product->productCode }} Information page</h2>
    <table class="table table-hover">
        <tr>
            <td>Product ID</td>
            <td>{{ $product->id }}</td>
        </tr><tr>
            <td>Product Code</td>
            <td>{{ $product->productCode }}</td>
        </tr>
        <tr>
            <td>Product Name</td>
            <td>{{ $product->productName }}</td>
        </tr>
        <tr>
            <td>Product Description</td>
            <td>{{ $product->productDescription }}</td>
        </tr>
        <tr>
            <td>Product Price</td>
            <td>${{ $product->productPrice }}</td>
        </tr>
        <tr>
            <td>Product Image</td>
            <td>
                <img class="product-img-view" src="/uploads/products/{{ $product->productImage }}">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <a href="{{ route('CartAdd', ['product' => $product->id]) }}" class="btn btn-outline-info form-control">Add to Cart</a>
            </td>
        </tr>
    </table>
@endsection
