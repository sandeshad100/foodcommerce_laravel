@extends('admin.layout.master')
@section('main-content')
    <h1>Display Category</h1>
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
                        <a href=""><button class="btn btn-success">Update</button></a>
                        <a href=""><button class="btn btn-dander">Delete</button></a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
