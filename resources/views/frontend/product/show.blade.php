@extends('frontend.layout.front.main')
@section('content')
<div class="small-container" style="height: inherit; margin-top: -50px; margin-bottom: 100px">
    {{-- <input type="hidden" value="{{$data->id}}" value="id"> --}}
    <div class="child child-2">
        <h2>Your Orders</h2>
    </div>
    <div class="child" style="">
        @foreach($order as $ind)
            <div class="childprods">
                <img src="{{asset('frontend/images/product/'.$ind->image)}}">
                <h4>{{$ind->name}}</h4>
                <h4>${{$ind->total}} - {{$ind->color}} - {{$ind->size}}</h4>
                <a href="{{url('/product/order/delete/'.$ind->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
            </div>
        @endforeach
    </div>
</div>
@endsection
