
@extends('user.layout.layoutmaster')

@section('main-content')
<main class="container" style="height: 100vh;">
    <h1>Login</h1>
    <form action="{{ route('loginMatch') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email">

        </div>
           <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">

        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</main>
@endsection

