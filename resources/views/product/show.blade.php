@extends('product.header')

@section('contents')
<a href="{{ route("product.index") }}" class="btn btn-success">&larr; Home</a>
    <!-- form card login -->
    <div class="row">
        <div class="col-md-12"><h1 class="text-success text-center">View Product</h1></div>
        <div class="col-md-6 pt-5 offset-md-3">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>:</th>
                    <td>{{ $product->id }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <th>:</th>
                    <td>{{ $product->name }}</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <th>:</th>
                    <td>{{ $product->price }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <th>:</th>
                    <td>{{ $product->description }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
