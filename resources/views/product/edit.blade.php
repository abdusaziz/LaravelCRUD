@extends('product.header')

@section('contents')

<a href="{{ route("product.index") }}" class="btn btn-success">&larr; Home</a>
    <!-- form card login -->
    <div class="row">
        <div class="col-md-6 pt-5 offset-md-3">
            <div class="card card-outline-secondary">
                <div class="card-header">
                    <h3 class="mb-0">New Product</h3>
                </div>
                <div class="card-body">
                    <form autocomplete="off" class="form" id="formLogin" action="{{ route("product.update",$product->id) }}" method="POST" role="form">
                        @csrf
                        @method("PUT")

                        <div class="form-group">
                            <label for="uname1">Name</label>
                            <input class="form-control" id="name" name="name" required="" type="text" value="{{ old("name") ?? $product->name }}">
                            @error("name")
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>price</label>
                            <input class="form-control" id="price" required="" name="price" type="number"  value="{{ old("price") ?? $product->price }}">
                            @error("price")
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input class="form-control" id="description" name="description" type="text" value="{{ old("description") ?? $product->description }}">
                            @error("description")
                                {{ $message }}
                            @enderror
                        </div>
                        <button class="btn btn-success btn-lg float-right" type="submit">Submit</button>
                    </form>
                </div>
                <!--/card-block-->
            </div><!-- /form card login -->
        </div>
    </div>
@endsection
