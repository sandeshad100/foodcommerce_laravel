
@extends('user.layout.layoutmaster')

@section('main-content')
<main class="container" style="height: 100vh;">
      <h1>Register</h1>
        <form action="{{ route('registerSave') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email">
            </div>
         <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="phone">
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Role" name="role">
                    <option selected>Role</option>
                    <option value="admin">Admin</option>
                    <option value="reader">Reader</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
</main>
@endsection

