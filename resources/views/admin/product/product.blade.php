@extends('admin.layout.master')
@section('main-content')
    <h2>Products</h2>
    <a href="{{ route('product.add') }}"><button class="btn btn-primary">Add Product</button></a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Name</th>
                <th scope="col">Rate</th>
                <th scope="col">Category Name</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- {{ dd($products) }} --}}
            @foreach ($products as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->product_name }}</td>
                    <td>{{ $item->product_rate }}</td>
                    <td>{{ $item->category_name }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                        {{-- <a href="{{ route('product.edit', $item->id) }}"><button
                                class="btn btn-success">Update</button></a> --}}
                        <form action="{{ route('product.destroy') }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
