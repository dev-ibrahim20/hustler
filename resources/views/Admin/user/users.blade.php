@extends('frontend.layout.admin.main')

@section('content')
<div class="container">
    <h1>Users Dashboard</h1>
    <table class="table" style="margin-top: 50px">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Created_at</th>
            <th scope="col">Control</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th>{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td>
                    <a href="{{url('home/users/edit/'.$user->id)}}"><button type="button" class="btn btn-primary">Edit</button></a>
                    <a href="{{url('home/users/delete/'.$user->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <a href="{{route('Addusers')}}"><button type="button" class="btn btn-primary">Add Users</button></a>
</div>
@endsection
