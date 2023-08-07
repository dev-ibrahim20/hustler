@extends('frontend.layout.admin.main')

@section('content')
<div class="container">
    <table class="table" style="margin-top: 50px">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">message</th>
            <th scope="col">Created_at</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($contact as $con)
            <tr>
                <th>{{$con->id}}</th>
                <td>{{$con->name}}</td>
                <td>{{$con->last_name}}</td>
                <td>{{$con->email}}</td>
                <td>{{$con->message}}</td>
                <td>{{$con->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection
