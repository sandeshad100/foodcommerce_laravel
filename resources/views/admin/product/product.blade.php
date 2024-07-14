@extends('admin.layout.master')
@section('main-content')
    <h2>Products</h2>
    <a href="{{ route('category.add') }}"><button class="btn btn-primary">Add Product</button></a>
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
                        <a href="{{ route('category.edit', $item->id) }}"><button
                                class="btn btn-success">Update</button></a>
                        <a href="{{ route('category.delete', $item->id) }}"><button
                                class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
