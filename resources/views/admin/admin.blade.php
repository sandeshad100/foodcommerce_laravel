@extends('admin.layout.master')

@section('main-content')
    <h1>Category Add</h1>
    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category Name</label>
            <input type="name" class="form-control" name="name">

        </div>
        <button type="submit" class="btn btn-primary">ADD</button>
    </form>
@endsection
