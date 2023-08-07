@extends('frontend.layout.admin.main')

@section('content')
<div class="container">
    <h1>Product Dashboard</h1>
    <table class="table table-hover" style="margin-top: 50px">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">disc</th>
            <th scope="col">price</th>
            <th scope="col">image</th>
            <th scope="col">size</th>
            <th scope="col">Color</th>
            <th scope="col">drive_cost</th>
            <th scope="col">Created at</th>
            <th scope="col">Control</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($product as $pro)
            <tr>
                <th scope="row">{{$pro->id}}</th>
                <td>{{$pro->name}}</td>
                <td>{{$pro->disc}}</td>
                <td>{{$pro->price}}</td>
                <td><img style="width: 50px" src="{{asset('frontend/images/product/'. $pro->image)}}" alt=""></td>
                <td>{{$pro->size}}</td>
                <td>{{$pro->color}}</td>
                <td>{{$pro->drive_cost}}</td>
                <td>{{$pro->created_at}}</td>
                <td>
                    <a href="{{url('home/product/edit/'.$pro->id)}}"><button type="button" class="btn btn-primary">Edit</button></a>
                    <a href="{{url('home/product/delete/'.$pro->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <a href="{{route('Addproduct')}}"><button type="button" class="btn btn-primary">Add Product</button></a>
</div>
@endsection
