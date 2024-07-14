@extends('admin.layout.master')

@section('main-content')
    <h1>Category Update</h1>
    <form action="{{ route('category.update', $category->id) }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category Name</label>
            <input type="name" class="form-control" name="name" value="{{$category->category_name}}">

        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
