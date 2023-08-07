@extends('frontend.layout.admin.main')

@section('content')
<div class="container">
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    <h1>Edit User</h1>
    <form method="POST" action="{{url('home/users/update/'.$_user->id)}}">
        @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">User Name</label>
        <input type="text" class="form-control" value="{{$_user->name}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="pass" >
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputPassword1" value="{{$_user->email}}" name="email" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
