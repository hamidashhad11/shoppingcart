@extends('product.layout')
@section('title', 'Products')
@section('content')
    <h1>Products Home Page</h1>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Product Price</th>
                <th>Product Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->productCode }}</td>
                    <td>{{ $product->productName }}</td>
                    <td>{{ $product->productDescription }}</td>
                    <td>${{ $product->productPrice }}</td>
                    <td><img alt="Product Image" class="product-img" src="/uploads/products/{{ $product->productImage }}"></td>
                    <td>
                        <a class="btn btn-outline-info" href="/product/{{ $product->productCode }}">View Details</a>
                        <a class="btn btn-outline-info" href="/product/{{ $product->productCode }}/edit">Edit Details</a>
                        <a class="btn btn-outline-info" href="/product/{{ $product->productCode }}">Remove</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
