@extends('admin.layout.master')
@section('main-content')
    <h1>Display Category</h1>
    @if (Auth::check() && Auth::user()->role === 'admin')
        <a href="{{ route('category.add') }}">
            <button class="btn btn-primary">Add Category</button>
        </a>
    @endif
{{-- {{Auth::user()->created_at}} --}}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Name</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
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
