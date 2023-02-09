@extends('product.header')

@section('contents')
    <a href="{{ route('product.create') }}" class="btn btn-success"> Create New &rarr;</a>
    @if (Session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- form card login -->
    <div class="row">

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @forelse ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td><a href="{{ route('product.show', $product->id) }}" class="btn btn-success">View</a></td>
                    <td><a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('product.destroy', $product->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
            @endforelse
        </table>
    </div>
@endsection
