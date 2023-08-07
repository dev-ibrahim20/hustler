@extends('frontend.layout.admin.main')

@section('content')
<div class="container">
    <h1>Add User</h1>
    <form method="POST" action="{{route('store')}}">
        @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">User Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="pass" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputPassword1" name="email" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
