@extends('admin.layouts.master')
@section('title', 'detail Product')
    @push('css')
        <link rel="stylesheet" href="/css/categories/category-create.css">
    @endpush
@section('content')
    <h1>Detail Product</h1>
    <form action="">
        <table id="product" class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Thumbnail</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Product Description</th>
                    <th scope="col">Product Quantity</th>
                    <th scope="col">Size</th>
                    <th scope="col">Color</th>
                    <th scope="col">Category Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td cope="col">{{$product->name}}</td>
                    <td cope="col"><img src="{{$product->thumbnail}}" alt="" height="100px" width="100px"></td>
                    <td scope="col">{{ number_format($product->latestPrice()->price)}} VNĐ</td>
                    <td scope="col">{{ $product->description }}</td>
                   
                    <td scope="col">{{ $product->quantity }}</td>
                    <td scope="col">
                        @foreach($product->sizes as $size)
                        <p>{{$size->size}}</p>
                        @endforeach
                    </td>
                    <td scope="col">
                        @foreach($product->colors as $color)
                        <p>{{$color->color}}</p>
                        @endforeach
                    </td>
                    <td scope="col">{{ $product->category->name}}</td>
                </tr>
            </tbody>
        </table>
    </form>
    <div class="form-group">
        <a href="{{ route('admin.product.index') }}" class="btn btn-secondary">List Post</a>
    </div>
    @endsection
