@extends('frontend.layout.admin.main')

@section('content')
<div class="container">
    <h1>Add Product</h1>
    <form method="POST" action="{{route('store_product')}}" enctype="multipart/form-data">
        @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name Product</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Description</label>
        <textarea type="text" class="form-control" id="exampleInputPassword1" name="disc" required></textarea>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Price</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="price" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Image</label>
        <input type="file" class="form-control" id="exampleInputPassword1" name="image" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Size</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="size" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Color</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="color" placeholder="input your Color Like Green-Blue-Red" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Drive Cost</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="cost" required>
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
