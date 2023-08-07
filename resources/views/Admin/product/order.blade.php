@extends('frontend.layout.admin.main')

@section('content')
<div class="container">
    <h1>Order Dashboard</h1>
    <table class="table" style="margin-top: 50px">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name product</th>
            <th scope="col">Image</th>
            <th scope="col">size</th>
            <th scope="col">color</th>
            <th scope="col">Quantity</th>
            <th scope="col">total</th>
            <th scope="col">User Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">state</th>
            <th scope="col">Created at</th>
            <th scope="col">Control</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($order as $ord)
            <tr>
                <th>{{$ord->id}}</th>
                <td>{{$ord->name}}</td>
                <td><img style="width: 50px" src="{{asset('frontend/images/product/'.$ord->image)}}" alt=""></td>
                <td>{{$ord->size}}</td>
                <td>{{$ord->color}}</td>
                <td>{{$ord->quantity}}</td>
                <td>{{$ord->total}}</td>
                <td>{{$ord->username}}</td>
                <td>{{$ord->phone}}</td>
                <td>{{$ord->email}}</td>
                <td>{{$ord->address}}</td>
                <td>{{$ord->state}}</td>
                <td>{{$ord->created_at}}</td>
                <td>
                    <a href="{{url('home/product/order/delete/'.$ord->id)}}"><button type="button" class="btn btn-success">Done</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection
