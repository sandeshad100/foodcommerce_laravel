  @extends('admin.layout.master')

  @section('main-content')
      <h1>Product Add</h1>
      @if ($message = Session::get('success'))
          <div class="alert alert-success alert-block">
              <strong>{{ $message }}</strong>
          </div>
      @endif
      <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
              <label for="product_name" class="form-label">Product Name</label>
              <input type="text" class="form-control" id="product_name" name="product_name"
                  value="{{ old('product_name') }}">
              @if ($errors->has('product_name'))
                    <span class="text-danger">{{ $errors->first('product_name') }}</span>
                @endif
          </div>
          <div class="mb-3">
              <label for="product_rate" class="form-label">Product Rate</label>
              <input type="text" class="form-control" id="product_rate" name="product_rate"
                  value="{{ old('product_rate') }}" required>
          </div>
          <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
          </div>
          <div class="mb-3">
              <label for="category_id" class="form-label">Category</label>
              <select class="form-control" id="category_id" name="category_id" required>
                  @foreach ($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                  @endforeach
              </select>
          </div>
          <div class="mb-3">
              <label for="product_name" class="form-label">File</label>
              <input type="file" class="form-control" id="product_name" name="file" required>
          </div>
          <button type="submit" class="btn btn-primary">ADD PRODUCT</button>
      </form>
  @endsection
